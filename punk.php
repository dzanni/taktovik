<?php
$title='Russian punk rock generator ● Генератор русского панк-рока';

$date = date("Ymd", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));

require_once 'header.php';


//сочиняем панк-рок

echo "<h1>PUNK ROCK</h1>";
echo "<span class='bold'>Generated from
the most popular last 365 days Youtube songs<br></span>";

echo "<br><table><tr><th width='10%'>Generated song<br></th><th width='5%'>Basic songs<br></th></tr>";

// Баллада Х4

echo "<tr><th><br><span class='bold'>Standard (meter: Х4)</span><br></th><th><br></th></tr>";


//сочиняем куплеты - первая строка

for ($j = 1; $j < 4; ++$j)
{
  //первая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Х4' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    echo "<tr><th><br><span class='bold'>$j. </span>" .
      "$row[1]<br></th><th><br><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    $r0=$row[4];
    $vers0=$row[1];
    mysqli_free_result($result);
  }

  //вторая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year>=$date && size='Х4' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
    echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    $r1=$row[4];
    $vers1=$row[1];
    mysqli_free_result($result);
  }

  //третья строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year>=$date && size='Х4' && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
  echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    mysqli_free_result($result);
  }

  //четвертая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year>=$date && size='Х4' && r='$r1' && vers!='$vers1' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
    echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    mysqli_free_result($result);
  }

}
//конец баллады


// Шансонетка Х43

echo "<tr><th><br><span class='bold'>Ironic (meter: Х43)</span><br></th><th><br></th></tr>";


//сочиняем куплеты - первая строка

for ($j = 1; $j < 4; ++$j)
{
  //первая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Х4' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    echo "<tr><th><br><span class='bold'>$j. </span>" .
      "$row[1]<br></th><th><br><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    $r0=$row[4];
    $vers0=$row[1];
    mysqli_free_result($result);
  }

  //вторая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year>=$date && size='Х3' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
    echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    $r1=$row[4];
    $vers1=$row[1];
    mysqli_free_result($result);
  }

  //третья строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year>=$date && size='Х4' && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
  echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    mysqli_free_result($result);
  }

  //четвертая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year>=$date && size='Х3' && r='$r1' && vers!='$vers1' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
    echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    mysqli_free_result($result);
  }

}
//конец шансонетки


echo "</table>";

mysqli_close($link);

require_once 'footer.php';
?>
