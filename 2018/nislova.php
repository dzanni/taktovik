<?php
$title = 'Анна Седокова - Ни слова о нем (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/lKzOubpE_1s'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{

    $row = mysqli_fetch_row($result);
          $song = $row[0];
          $singer = $row[1];
          $core_link = mb_substr($row[3], 17);
    echo "<h1>$row[0]</h1>Исполнитель: $row[1]<br>Дата клипа: $row[2]<br>";

  // очищаем результат
  mysqli_free_result($result);
}

$query ="SELECT subsize FROM metr WHERE song='$song'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
        $row = mysqli_fetch_row($result);
        $metrs[] = $row[0];
  }

    // очищаем результат
    mysqli_free_result($result);
}

$metrs_string = join(" ● ", $metrs);
echo "Размеры: $metrs_string<br><br>";

echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$core_link'
frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br><br>";

?>

<span class='i'>- Да пошел ты!<br></span>
<br>
Ага, а! Ага!<br>
Ага, а! Ага!<br>
<br>
<span class='blue'>[Куплет 1] Я3м? - aaXa aabb<br></span>
А ночки коротки. <br>
Нет места для тоски.<br>
Где я честно так скрываюсь<br>
Под тёмные очки.<br>
И кто-то, но не ты <br>
Мне пишет о любви <br>
И подступает к горлу ком.<br>
Молчи! Прошу, ни слова о нём! <span class='blue'>(Строка Дк4цм)<br></span>
<br>
<span class='blue'>[Припев х2] Тк4ц3дм - A''A''A''x<br></span>
Я буду танцевать до потери сознания.<br>
Буду целоваться с другими парнями я.<br>
Буду танцевать до потери сознания.<br>
Только ни слова о нём!<br>
<br>
<span class='blue'>[Куплет 2] Тк23м - aabbccdd<br></span>
В темноте дискотек <br>
Я такая, я как все.<br>
И, сердца повторяя ритм,<br>
Меня уносит бит<br>
Высоко, высоко, <br>
Где просто и легко,<br>
Где он мне снова незнаком.<br>
Молчи! Прошу, ни слова о нём!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Я буду танцевать до потери сознания.<br>
Буду целоваться с другими парнями я.<br>
Буду танцевать до потери сознания.<br>
Только ни слова о нём.<br>
<br>
<span class='blue'>[Переход]<br></span>
О нём, о нем!<br>
О нём, о нём!<br>
Я буду танцевать и плакать!<br>
Ага, а! Ага!<br>
(Танцевать!)<br>
Ага, а! Ага!<br>
(Я буду танцевать и плакать!)<br>
Ага, а! Ага!<br>
(Я буду танцевать и плакать!)<br>
Ага, а! Ага!<br>
(Я танцевать!)<br>
Я буду танцевать и плакать!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Я буду танцевать до потери сознания.<br>
Буду целоваться с другими парнями я.<br>
Буду танцевать до потери сознания.<br>
Только ни слова о нём!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/anna-sedokova-ni-slova-o-nem.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
