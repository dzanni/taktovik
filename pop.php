<?php
$title='Russian pop generator ● Генератор русской попсы';

$date = date("Ymd", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));

require_once 'header.php';


//сочиняем попсу

echo "<h1>POP </h1>";
echo "<span class='bold'>Generated from
the most popular last 365 days Youtube songs<br></span>";

echo "<br><table><tr><th width='10%'>Generated song<br></th><th width='5%'>Basic songs<br></th></tr>";

echo "<tr><th><br><span class='bold'>Slow (Тк3, chorus Л3)</span><br></th><th><br><br></th></tr>";

// Медляк

// припев

//первая строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date && size='Л3' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  $year = mb_substr($row[7], 0, 4);
  echo "<tr><th><br><div class='refren'><span class='bold'>Chorus:</span><br>$row[1]</div></th><th><br><br><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
  $r0=$row[4];
  $vers0=$row[1];
  mysqli_free_result($result);
}

//вторая строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date && size='Л3' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  $year = mb_substr($row[7], 0, 4);
  if (empty($row[1])) $row[1]='. . . . .';
  echo "<tr><th><span class='refren'>$row[1]</span><br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
  $r1=$row[4];
  $vers1=$row[1];
  mysqli_free_result($result);
}

//третья строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date && size='Л3' && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  $year = mb_substr($row[7], 0, 4);
  if (empty($row[1])) $row[1]='. . . . .';
echo "<tr><th><span class='refren'>$row[1]</span><br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
  mysqli_free_result($result);
}

//четвертая строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date && size='Л3' && r='$r1' && vers!='$vers1' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  $year = mb_substr($row[7], 0, 4);
  if (empty($row[1])) $row[1]='. . . . .';
  echo "<tr><th><span class='refren'>$row[1]</span><br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
  mysqli_free_result($result);
}


//сочиняем куплеты - первая строка

for ($j = 1; $j < 4; ++$j)
{
  //первая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Тк3' ORDER BY RAND() LIMIT 1";
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
    WHERE year >= $date && size='Тк3' ORDER BY RAND() LIMIT 1";
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
    WHERE year >= $date && size='Тк3' && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
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
    WHERE year >= $date && size='Тк3' && r='$r1' && vers!='$vers1' ORDER BY RAND() LIMIT 1";
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
//конец песни

echo "<tr><th><br><br><span class='bold'>Fast (Тк2, chorus Л2)</span><br></th><th><br><br></th></tr>";

// Мясо

// припев

//первая строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date && size='Л2' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  $year = mb_substr($row[7], 0, 4);
  echo "<tr><th><br><div class='refren'><span class='bold'>Chorus:</span><br>$row[1]</div></th><th><br><br><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
  $r0=$row[4];
  $vers0=$row[1];
  mysqli_free_result($result);
}

//вторая строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date && size='Л2' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  $year = mb_substr($row[7], 0, 4);
  if (empty($row[1])) $row[1]='. . . . .';
  echo "<tr><th><span class='refren'>$row[1]</span><br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
  $r1=$row[4];
  $vers1=$row[1];
  mysqli_free_result($result);
}

//третья строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date && size='Л2' && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  $year = mb_substr($row[7], 0, 4);
  if (empty($row[1])) $row[1]='. . . . .';
echo "<tr><th><span class='refren'>$row[1]</span><br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
  mysqli_free_result($result);
}

//четвертая строка припева
$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date && size='Л2' && r='$r1' && vers!='$vers1' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $row = mysqli_fetch_row($result);
  $year = mb_substr($row[7], 0, 4);
  if (empty($row[1])) $row[1]='. . . . .';
  echo "<tr><th><span class='refren'>$row[1]</span><br></th><th><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
  mysqli_free_result($result);
}


//сочиняем куплеты - первая строка

for ($j = 1; $j < 4; ++$j)
{
  //первая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='Тк2' ORDER BY RAND() LIMIT 1";
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
    WHERE year >= $date && size='Тк2' ORDER BY RAND() LIMIT 1";
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
    WHERE year >= $date && size='Тк2' && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
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
    WHERE year >= $date && size='Тк2' && r='$r1' && vers!='$vers1' ORDER BY RAND() LIMIT 1";
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
//конец песни


echo "</table>";

mysqli_close($link);

require_once 'footer.php';
?>
