<?php
$title = 'Глюк’oZa - Фэн-шуй (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aSHrzyaJHWw'";
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

<span class='blue'>[Куплет 1] Л2-4цжм? - AbAb<br></span>
И разрывает мобильный, <br>
Фейсбук и ВК.<br>
Мой мужчина любимый <br>
Снова пошёл по рукам.<br>
Тебе вручили бы «Оскар» <br>
За лучшую главную мужскую роль.<br>
Измена — классика жанра, <br>
И ты в этом жанре король.<br>
<br>
<span class='blue'>[Припев] Л24цж/ - AA<br></span>
А мне по Фэн-Шую <br>
На твои слова и любовь большую!<br>
Мне по Фэн-Шую! <br>
Больше океан во мне не бушует.<br>
Мне по Фэн-Шую <br>
На твои слова и любовь большую!<br>
Мне по Фэн-Шую! <br>
Больше ты меня ваще не волнуешь.<br>
<br>
Ау-ау-ау-ау, ау-ау-ау-ау!<br>
Па-ра-ру-ра-ру, па-ра-ру-ра-ру...<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ты просто профи, не спорю, <br>
По разбитым сердцам.<br>
У тебя в этом спорте <br>
Победам нету конца.<br>
Ты круглосуточно лучший, <br>
Играя вновь в любовь на словах.<br>
Освободи мою душу!<br>
Закончилась наша глава...<br>
<br>
<span class='blue'>[Припев]<br></span>
  А мне по Фэн-Шую <br>
  На твои слова и любовь большую!<br>
  Мне по Фэн-Шую! <br>
  Больше океан во мне не бушует.<br>
  Мне по Фэн-Шую <br>
  На твои слова и любовь большую!<br>
  Мне по Фэн-Шую! <br>
Больше ты меня ваще не волнуешь.<br>
<br>
Ау-ау-ау-ау, ау-ау-ау-ау!<br>
Па-ра-ру-ра-ру, па-ра-ру-ра-ру...<br>
<br>
А мне по Фэн-Шую <br>
На твои слова и любовь большую!<br>
Мне по Фэн-Шую! <br>
Больше океан во мне не бушует.<br>
Мне по Фэн-Шую <br>
На твои слова и любовь большую!<br>
Мне по Фэн-Шую! <br>
Больше ты меня ваще не волнуешь.<br>
<br>
Ау-ау-ау-ау, ау-ау-ау-ау!<br>
Па-ра-ру-ра-ру, па-ра-ру-ра-ру...<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/glukoza-fen-shui.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
