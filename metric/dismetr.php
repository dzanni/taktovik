<?php

require_once '../header.php';

$genre='#gro';

echo "<br><span class='bold'>genre2020: $genre</span><br><br>";



// общее количество монометрических фрагментов для вычисления %
$query ="SELECT * FROM metr JOIN genre2020 ON metr.song=genre2020.song WHERE genre='$genre'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
  }

echo "Monometric fragments: " . "$q_fragm<br><br>";

echo "<table><tr><th width='5%' valign='top'>";

// вывод метров
$query ="SELECT metr, count(metr.song) FROM metr JOIN genre2020 ON metr.song=genre2020.song
  WHERE genre='$genre' GROUP BY metr ORDER BY count(metr.song) DESC";
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
$query ="SELECT type, count(metr.song) FROM metr JOIN genre2020 ON metr.song=genre2020.song
  WHERE genre='$genre' GROUP BY type ORDER BY count(metr.song) DESC";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    $j = (int) ($row[1] / $q_fragm * 100);
    echo "$row[0] - $row[1] ($j%)<br>";
    $diagram_lenght2020g[] = $j;
    $diagram_sign2020g[] = $row[0];

  }

echo "</th></tr></table>";

    // Выводим диаграмму
  echo "<br>Diagram (screen width = 100%)<br><br>";
    for ($i = 0 ; $i < count($diagram_lenght2020g) ; ++$i)
  {
    $color = ($i+1)*30;
    echo "<div style='background:hsl($color, 100%, 50%); width:$diagram_lenght2020g[$i]%'>$diagram_sign2020g[$i]</div>";
  }
    echo "<br>";

    // очищаем результат
    mysqli_free_result($result);
}

echo "Размеры<br><br>";

// вывод размеров
$query ="SELECT subsize, count(metr.song) FROM metr JOIN genre2020 ON metr.song=genre2020.song
  WHERE genre='$genre' GROUP BY subsize ORDER BY subsize";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
      $row = mysqli_fetch_row($result);
      $j = round (($row[1] / $q_fragm * 100), 1);
      echo "$row[0] " . " - " . " $row[1]" . " ($j%)<br>";
  }

    // очищаем результат
    mysqli_free_result($result);
}


// То же самое для всех жанров вместе
echo "<br>ВСЕ ЖАНРЫ<br><br>";

// общее количество монометрических фрагментов для вычисления %
$query ="SELECT * FROM metr JOIN genre2020 ON metr.song=genre2020.song";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
  }

echo "Monometric fragments: " . "$q_fragm<br><br>";

echo "<table><tr><th width='5%' valign='top'>";

// вывод метров
$query ="SELECT metr, count(metr.song) FROM metr JOIN genre2020 ON metr.song=genre2020.song
  GROUP BY metr ORDER BY count(metr.song) DESC";
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
$query ="SELECT type, count(metr.song) FROM metr JOIN genre2020 ON metr.song=genre2020.song
  GROUP BY type ORDER BY count(metr.song) DESC";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    $j = (int) ($row[1] / $q_fragm * 100);
    echo "$row[0] - $row[1] ($j%)<br>";
    $diagram_lenght2020[] = $j;
    $diagram_sign2020[] = $row[0];

  }

echo "</th></tr></table>";

    // Выводим диаграмму
  echo "<br>Diagram (screen width = 100%)<br><br>";
    for ($i = 0 ; $i < count($diagram_lenght2020) ; ++$i)
  {
    $color = ($i+1)*30;
    echo "<div style='background:hsl($color, 100%, 50%); width:$diagram_lenght2020[$i]%'>$diagram_sign2020[$i]</div>";
  }
    echo "<br>";

    // очищаем результат
    mysqli_free_result($result);
}

echo "Размеры<br><br>";

// вывод размеров
$query ="SELECT subsize, count(metr.song) FROM metr JOIN genre2020 ON metr.song=genre2020.song
   GROUP BY subsize ORDER BY subsize";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
      $row = mysqli_fetch_row($result);
      $j = round (($row[1] / $q_fragm * 100), 1);
      echo "$row[0] " . " - " . " $row[1]" . " ($j%)<br>";
  }

    // очищаем результат
    mysqli_free_result($result);
}

mysqli_close($link);

require_once '../footer.php';
?>
