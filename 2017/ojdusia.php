<?php
$title = 'Отава Ё - Ой, Дуся, ой, Маруся (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/0HtvH34CmZY'";
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

<span class='i'>- Ого! Вот это да!<br>
- Ы.<br></span>
<br>
<span class='blue'>Я4жм - XaXa, Тк2ж - x</span><br>
Не буду пудриться, белиться,<br>
Не буду кудри завивать.<br>
<div class='refren'>Ой, Дуся, ой, Маруся,<br>
Не буду кудри завивать.<br>
Ой, Дуся, ой, Маруся,<br>
Не буду кудри завивать.</div>
Не буду с милым я знакома,<br>
Не буду милым называть.<br>
<div class='refren'>Ой, Дуся, ой, Маруся,<br>
Не буду милым называть,<br>
Ой, Дуся, ой, Маруся,<br>
Не буду милым называть.</div>
<br>
<span class='blue'>Х4жм - XaXa</span><br>
Девяносто песен знаю,<br>
В один вечер все спою.<br>
<div class='refren'>Ой, Дуся, ой, Маруся,<br>
Ой в один вечер все спою.<br>
Ой, Дуся, ой, Маруся,<br>
В один вечер все спою.</div>
В каждой песне по три слова,<br>
Дорогой, тебя люблю!<br>
<div class='refren'>Ой, Дуся, ой, Маруся,<br>
Дорогой, тебя люблю!<br>
Ой, Дуся, ой, Маруся,<br>
Дорогой, тебя люблю!</div>
<br>
<span class='blue'>Ак23жм? - AAbAbA</span><br>
ТА-ра-ра-ра-рАй-рай,<br>
ТА-ра-ра-ра-ра-рАй-рай,<br>
ТАй-ра, тА-ра-ра-рА,<br>
ТА-ра-ра-ра-ра-рАй-рай,<br>
ТАй-ра, тА-ра-ра-рА,<br>
ТА-ра-ра-ра-ра-рАй-рай,<br>
<br>
<span class='blue'>Х4м/м? - aabb</span><br>
Голосочек хриповат,<br>
А кто ж в этом виноват?!<br>
<div class='refren'>Ой, Дуся, ой, Маруся,<br>
А кто ж в этом виноват?!<br>
Ой, Дуся, ой, Маруся,<br>
А кто ж в этом виноват?!</div>
Виноватый милый мой,<br>
<div class='refren'>Гулял по холоду со мной.<br>
Ой, Дуся, ой, Маруся,<br>
Гулял по холоду со мной.<br>
Ой, Дуся, ой, Маруся,<br>
Гулял по холоду со мной.</div>
<br>
<span class='blue'>Х43мд? - xA'XA'</span><br>
Дорогой мне изменил.<br>
А я подрумянилась.<br>
<div class='refren'>Ой, Дуся, ой, Маруся,<br>
А я подрумянилась.<br>
Ой, Дуся, ой, Маруся,<br>
А я подрумянилась.</div>
Мимо окон прошла боком.<br>
И опять понравилась.<br>
<div class='refren'>Ой, Дуся, ой, Маруся,<br>
И опять понравилась.<br>
Ой, Дуся, ой, Маруся,<br>
И опять понравилась.</div>
<br>
ТА-ра-ра-ра-рАй-рай,<br>
ТА-ра-ра-ра-ра-рАй-рай,<br>
ТАй-ра, тА-ра-ра-рА,<br>
ТА-ра-ра-ра-ра-рАй-рай,<br>
ТАй-ра, тА-ра-ра-рА,<br>
ТА-ра-ра-ра-ра-рАй-рай,<br>
<br>
ТА-ра-ра-ра-рАй-рай,<br>
ТА-ра-ра-ра-ра-рАй-рай,<br>
ТАй-ра, тА-ра-ра-рА,<br>
ТА-ра-ра-ра-ра-рАй-рай,<br>
ТАй-ра, тА-ра-ра-рА,<br>
ТА-ра-ра-ра-ра-рАй-рай,<br>
<br>
<span class='blue'><a href="http://lyrics.wikia.com/wiki/%D0%9E%D1%82%D0%B0%D0%B2%D0%B0_%D0%81:%D0%9E%D0%B9,_%D0%94%D1%83%D1%81%D1%8F,_%D0%9E%D0%B9,_%D0%9C%D0%B0%D1%80%D1%83%D1%81%D1%8F_(%D0%9A%D0%B0%D0%B7%D0%B0%D1%87%D1%8C%D1%8F_%D0%9B%D0%B5%D0%B7%D0%B3%D0%B8%D0%BD%D0%BA%D0%B0)"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
