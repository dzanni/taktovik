<?php
$title = 'Би-2 - Пекло (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ma4g3R0S2Zc'";
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

<span class='blue'>[Куплет 1] Дк4цдм? - A'bA'b</span><br>
Христос прозябает под следствием,<br>
Ждёт вердикта две тысячи лет.<br>
Алчная власть — стихийное бедствие,<br>
Ад, из которого спасения нет.<br>
<br>
<span class='blue'>[Припев] Дк4цм/м? - aabb </span><br>
Дождь из пепла льётся из глаз,<br>
Чёрная бездна смотрит на нас.<br>
Дальше не будет дороги другой.<br>
Если ты в пекло, я — за тобой!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
От рок-н-ролла тянет зловонием<br>
В гиблой трясине раболепной любви.<br>
Мы проиграли все свои войны,<br>
Но главная битва происходит внутри.<br>
<br>
<span class='blue'>[Припев]</span><br>
Дождь из пепла льётся из глаз,<br>
Чёрная бездна смотрит на нас.<br>
Дальше не будет дороги другой.<br>
Если ты в пекло, я — за тобой!<br>
<br>
<span class='blue'>[Интерлюдия]</span><br>
<br>
<span class='blue'>[Припев х2]</span><br>
Дождь из пепла льётся из глаз,<br>
Чёрная бездна смотрит на нас.<br>
Дальше не будет дороги другой.<br>
Если ты в пекло, я — за тобой!<br>
  <br>
<span class='blue'><a href='https://genius.com/2-bi-2-hell-lyrics'
  target='_blank'>Источник</a></span><br>
  <br>
    <br>
    N.B. Слоговой "й" в дактилической рифме: "зловО-ни-ем - вО-й-ны".  <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
