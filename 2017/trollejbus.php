<?php
$title = 'Баста - Троллейбус (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/zxO_6-zIzM0'";
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
<span class='blue'>Ам43//2мж - aBaB</span><br>
Когда мне невмочь пересилить беду,<br>
Когда подступает отчаянье,<br>
Я в синий троллейбус сажусь на ходу,<br>
В последний, в случайный.<br>
<br>
<span class='blue'>Ам43//1мж - aBaB</span><br>
Полночный троллейбус, по улицам мчи,<br>
Верши по бульварам круженье,<br>
Чтоб всех подобрать, потерпевших в ночи<br>
Крушенье.<br>
<br>
Полночный троллейбус, мне дверь отвори!<br>
Я знаю, как в зябкую полночь<br>
Твои пассажиры, матросы твои<br>
Приходят на помощь.<br>
<br>
Я с ними не раз уходил от беды,<br>
Я к ним прикасался плечами...<br>
Как много, представьте себе, доброты<br>
В молчанье.<br>
<br>
Полночный троллейбус плывет по Москве,<br>
Москва, как река, затухает,<br>
И боль, что скворчонком стучала в виске,<br>
Стихает.<br>
<br>
<span class='blue'>Источник: расшифровка клипа</span><br>
<br>
<br>
N.B. Перепев «Песенки о полночном троллейбусе» Булата Окуджавы (1957)
на новый напев. <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
