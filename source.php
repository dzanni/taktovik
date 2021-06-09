<?php
$title='Basic verses ● Все доступные строки';

$date = date("Ymd", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));

require_once 'header.php';

echo "<h1>BASIC VERSES</h1>";


// статистика - 365 дней
echo "<span class='bold'>Last 365 days</span> ";

$query ="SELECT size, count(size) FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date GROUP BY size ORDER BY size";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    echo "● $row[0] ($row[1]) ";
  }

      // очищаем результат
    mysqli_free_result($result);
}

$query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
  WHERE year >= $date";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк
  echo "● Всего $rows.<br><br>"; // Добавляем к статистике
  // очищаем результат
mysqli_free_result($result);
}


// статистика - все песни
echo "<span class='bold'>All</span> ";

$query ='SELECT size, count(size) FROM centon1 GROUP BY size ORDER BY size';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    echo "● $row[0] ($row[1]) ";
  }

      // очищаем результат
    mysqli_free_result($result);
}

$query ='SELECT * FROM centon1 JOIN list ON centon1.song=list.song ORDER BY size, vers';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк
  echo "● Всего $rows.<br><br>"; // Добавляем к статистике


  echo "<table><tr><th width='30%'>Meter & verse<br></th><th width='10%'>Song<br></th></tr>";

  for ($i = 0 ; $i < $rows ; ++$i)
  {
        $j = $row;
        $row = mysqli_fetch_row($result);
        $year = mb_substr($row[7], 0, 4);
          if ($row[2] != $j[2]) echo "<tr><th><br><span class='bold'>$row[2]</span><br>$row[1]<br></th>
              <th><br><br><a href='$year/$row[9].php'>$row[0]</a><br></th></tr>";
            else echo "<tr><th>$row[1]<br></th><th><a href='$year/$row[9].php'>$row[0]</a></th></tr>";
  }

  echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
}


mysqli_close($link);

require_once 'footer.php';
?>
