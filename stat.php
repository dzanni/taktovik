<?php

echo "<br><hr>";

//Список песен

echo "<br><span class='bold'>Statistic</span> $singer<br>";

$query ="SELECT metr.song, subsize, year, page FROM metr JOIN list ON metr.song=list.song
    WHERE singer = '$singer' ORDER BY metr.song";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
        $j = $row;
        $row = mysqli_fetch_row($result);
        $year = mb_substr($row[2], 0, 4);
          if ($row[0] != $j[0]) echo "<br><a href='../$year/$row[3].php'>$row[0]</a> ● $row[1]";
            else echo " ● $row[1]";
  }

    // очищаем результат
    mysqli_free_result($result);
}

// Метрика

// общее количество монометрических фрагментов для вычисления %
$query ="SELECT * FROM metr JOIN list ON metr.song=list.song WHERE singer='$singer'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
  }

echo "<br><br>Monometric fragments: " . "$q_fragm<br><br>";

echo "<table><tr><th width='5%' valign='top'>";

// вывод метров
$query ="SELECT metr, count(metr.song) FROM metr JOIN list ON metr.song=list.song
  WHERE singer='$singer' GROUP BY metr ORDER BY count(metr.song) DESC";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
      $row = mysqli_fetch_row($result);
      $j = (int) ($row[1] / $q_fragm * 100);
      echo "$row[0] " . " - " . " $row[1]" . " ($j%)<br>";
  }

    // очищаем результат
    mysqli_free_result($result);
}

echo "</th><th width='5%' valign='top'>";

// вывод тоника vs силлабо-тоника
$query ="SELECT type, count(metr.song) FROM metr JOIN list ON metr.song=list.song
  WHERE singer='$singer' GROUP BY type ORDER BY count(metr.song) DESC";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    $j = (int) ($row[1] / $q_fragm * 100);
    echo "$row[0] - $row[1] ($j%)<br>";
    $diagram_lenght2018[] = $j;
    $diagram_sign2018[] = $row[0];

  }

echo "</th></tr></table>";

    // Выводим диаграмму
  echo "<br>Diagram (screen width = 100%)<br><br>";
    for ($i = 0 ; $i < count($diagram_lenght2018) ; ++$i)
  {
    $color = ($i+1)*30;
    echo "<div style='background:hsl($color, 100%, 50%); width:$diagram_lenght2018[$i]%'>$diagram_sign2018[$i]</div>";
  }

    // очищаем результат
    mysqli_free_result($result);
}
?>
