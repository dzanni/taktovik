<?php
$title = 'Сяргей Kosmas & Сяргей Ціханоўскі - Муры (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/FQz3NazwkUc'";
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

<span class='blue'>[Куплет 1] Дк4ц3мм - abab</span><br>
Ён быў натхнёны і малады,<br>
Іх незлічона было.<br>
Ён на плошчы вёў гарады<br>
З песняй, што блізка святло.<br>
  <div class='refren'>І запальвалі свечкі яму,<br>
  Плыў па-над плошчаю дым.<br>
  Ён спяваў: зруйнуем турму!<br>
  Яны спявалі за ім.</div>
<br>
<span class='blue'>[Припев х2] Л4454цм/жм - aaBa<br></span>
Разбуры турмы муры!<br>
Прагнеш свабоды — то бяры!<br>
Мур хутка рухне, рухне, рухне —<br>
І пахавае свет стары!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ведалі словы на памяць — і спеў<br>
Неслі па вуліцах так,<br>
Што кроў кіпела і гнеў кіпеў,<br>
І сэрцы стукалі ў такт.<br>
  <div class='refren'>Білі ў сто тысяч далоняў — і рытм<br>
  Ворагаў біў напавал.<br>
  Ішлі на муры ва ўсім свеце старым…<br>
  А ён усё граў і спяваў.</div>
<br>
<span class='blue'>[Припев]<br></span>
Разбуры турмы муры!<br>
Прагнеш свабоды — то бяры!<br>
Мур хутка рухне, рухне, рухне —<br>
І пахавае свет стары!<br>
<br>
<span class='blue'>[Куплет3]<br></span>
Па усёй Беларусі падняўся народ<br>
Свабоду сваю адстаяць.<br>
Адзiнаю мэтай узняўся наш дух<br>
Цемру святлом разганяць.<br>
  <div class='refren'>Браты-афіцэры, мы — адзіны народ.<br>
  Мы разам жывем на зямлі.<br>
  Зрабіце ж сумленны выбар свой.<br>
  Ня хочам мы гэтай вайны.</div>
<br>
<span class='blue'>[Куплет4]<br></span>
Прачніцесь, сябры, мы да праўды ідзем,<br>
Імкнемся да шчасця свайго.<br>
І мара народа ў краіне жыцця<br>
Проста — как добра было.<br>
  <div class='refren'>Моцны грукат нястомленых рук<br>
  Рады ідуць і ідуць.<br>
  Мы — беларусы, мы з мірам ідзем<br>
  У светлы і сонечны пуць.</div>
<br>
<span class='blue'>[Припев]<br></span>
Разбуры турмы муры!<br>
Прагнеш свабоды — то бяры!<br>
Мур хутка рухне, рухне, рухне —<br>
І пахавае свет стары!<br>
  <br>
<span class='blue'>Источник: текст, прикрепленный к клипу Youtube</span><br>
  <br>
  <br>
P.S. Одна из белорусских версий песни "Mury" ("Стены") Яцека Качмарского (1978) на мелодию
песни Луиса Льяха "L'Estaca" (1968). <br>
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
