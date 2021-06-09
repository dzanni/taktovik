<?php
$title='Russian rap generator ● Генератор русского рэпа';

$date = date("Ymd", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));

require_once 'header.php';

echo "<h1>RAP</h1>";
echo "<span class='bold'>Generated from
the most popular last 365 days Youtube songs<br></span>";

echo "<br><table><tr><th width='10%'>Generated song<br></th><th width='5%'>Basic songs<br></th></tr>";


// Быстрый рэп Дк4ц

echo "<tr><th><br><span class='bold'>Fast (meter: Дк4ц)</span><br><br></th><th><br><br><br></th></tr>";

for ($j = 0; $j < 8; ++$j)
{
  //первая строка
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Дк4ц' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
    echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    $r0=$row[4];
    $vers0=$row[1];
    mysqli_free_result($result);
  }

  //парная строка
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Дк4ц' && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
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


// Средний (позитивный?) рэп Тк4ц

echo "<tr><th><br><span class='bold'>Standart (meter: Тк4ц)</span><br><br></th><th><br><br><br></th></tr>";

for ($j = 0; $j < 8; ++$j)
{
  //первая строка
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Тк4ц' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
    echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    $r0=$row[4];
    $vers0=$row[1];
    mysqli_free_result($result);
  }

  //парная строка
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Тк4ц' && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
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


// Медленный (негативный?) рэп Ак4ц

echo "<tr><th><br><span class='bold'>Slow (pessimistic) (meter: Ак4ц)</span><br><br></th><th><br><br><br></th></tr>";

for ($j = 0; $j < 8; ++$j)
{
  //первая строка
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Ак4ц' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
    echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
    $r0=$row[4];
    $vers0=$row[1];
    mysqli_free_result($result);
  }

  //парная строка
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Ак4ц' && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
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


echo "</table>";

mysqli_close($link);

require_once 'footer.php';
?>
