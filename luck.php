<?php
$title='Generated Russian song stanza ● Сгенерированная русская песенная строфа';

$date = date("Ymd", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));

require_once 'header.php';

//сочиняем попсовую песню
// сначала припев
echo "<h1>RANDOM STANZA</h1>" .
"<span class='bold'>Generated from
the most popular last 365 days Youtube songs<br></span><br>";



echo "<table><tr><th width='10%'>Generated stanza<br></th><th width='5%'>Basic songs<br></th></tr>";

//первая строка гадания
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    echo "<tr><th><span class='mark'>$row[2]:</span><br>";
    echo "$row[1]<br></th><th><br><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    $rg0=$row[4];
    $versg0=$row[1];
    $sizeg0=$row[2];
      mysqli_free_result($result);
}

//вторая строка гадания
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song WHERE size='$sizeg0' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
    if (empty($row[1])) $row[1]='. . . . .';
      $year = mb_substr($row[7], 0, 4);
      echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
      $rg1=$row[4];
      $versg1=$row[1];
      mysqli_free_result($result);
}

//третья строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song WHERE size='$sizeg0' && r='$rg0' && vers!='$versg0' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  if (empty($row[1])) $row[1]='. . . . .';
    $year = mb_substr($row[7], 0, 4);
    echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    mysqli_free_result($result);
}

//четвертая строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song WHERE size='$sizeg0' && r='$rg1' && vers!='$versg1' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  if (empty($row[1])) $row[1]='. . . . .';
    $year = mb_substr($row[7], 0, 4);
    echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr></table>";
    mysqli_free_result($result);
}

//конец гадания



mysqli_close($link);

require_once 'footer.php';
?>
