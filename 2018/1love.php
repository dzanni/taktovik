<?php
$title = 'Элджей - 1love (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/HEulsqAUgtk'";
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

<span class='blue'>[Интро]<br></span>
Sayonara boy<br>
Бой, бой, бой, бой!<br>
<br>
<span class='blue'>[Переход] Л3м? - aaaBBa<br></span>
Я открываю свой телефон,<br>
В нем звонков нет твоих давно.<br>
Абонент этот не «але»!<br>
Душит темная сторона,<br>
Время тает - не удержать,<br>
Ты такая, что нету слов!<br>
<br>
<span class='blue'>[Припев] Я2м - aaaa<br></span>
One love, one love<br>
One love, one love<br>
One love, one love<br>
One love, one love<br>
<br>
<span class='blue'>[Куплет] Дк2-4цм - aabbccxc<br></span>
Катимся на event.<br>
Там кроме нас никого нет.<br>
Я от всех устал.<br>
Ты прешь меня, как кристалл.<br>
Мой любимый цвет твоих глаз.<br>
Меня сегодня он спас.<br>
Ничего не говори -<br>
Я так боюсь банальных фраз!<br>
<br>
<span class='blue'>[Переход]<br></span>
Я открываю свой телефон,<br>
В нем звонков нет твоих давно.<br>
Абонент этот не «але»!<br>
Обернись, мы так далеко!<br>
Душит темная сторона,<br>
Время тает - не удержать,<br>
Ты такая, что нету слов!<br>
<br>
<span class='blue'>[Припев]<br></span>
One love, one love<br>
One love, one love<br>
One love, one love<br>
One love, one love<br>
<br>
<span class='blue'><a href='https://genius.com/Allj-1love-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
