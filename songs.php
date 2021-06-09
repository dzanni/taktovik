<?php
$title='Basic songs ● Все песни';

$date = date("Ymd", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));

require_once 'header.php';


echo "<h1>BASIC SONGS</h1>";

echo "<span class='bold'>2021<br><br></span>";

$query ='SELECT * FROM list WHERE year >= 20210101 && year <= 20211231 ORDER BY year DESC';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

  echo "<table><tr><th width='10%'>Date<br><br></th><th width='20%'>Song<br><br></th><th width='20%'>Singer<br><br></th></tr>";

  for ($i = 0 ; $i < $rows ; ++$i)
  {
      $row = mysqli_fetch_row($result);
      echo "<tr><th><a href='$row[3]' target='blank'>$row[2]</a></th><th><a href='2021/$row[4].php'>$row[0]</a></th><th>$row[1]</th></tr>";

  }
  echo "</table>";

  echo "<br>Total: " . "$rows<br>";

  // очищаем результат
  mysqli_free_result($result);
}

echo "<br><span class='bold'>2020<br><br></span>";

$query ='SELECT * FROM list WHERE year >= 20200101 && year <= 20201231 ORDER BY year DESC';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

  echo "<table><tr><th width='10%'>Date<br><br></th><th width='20%'>Song<br><br></th><th width='20%'>Singer<br><br></th></tr>";

  for ($i = 0 ; $i < $rows ; ++$i)
  {
      $row = mysqli_fetch_row($result);
      echo "<tr><th><a href='$row[3]' target='blank'>$row[2]</a></th><th><a href='2020/$row[4].php'>$row[0]</a></th><th>$row[1]</th></tr>";

  }
  echo "</table>";

  echo "<br>Total: " . "$rows<br>";

  // очищаем результат
  mysqli_free_result($result);
}

echo "<br><span class='bold'>2019<br><br></span>";

$query ='SELECT * FROM list WHERE year >= 20190101 && year <= 20191231 ORDER BY year DESC';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

  echo "<table><tr><th width='10%'>Date<br><br></th><th width='20%'>Song<br><br></th><th width='20%'>Singer<br><br></th></tr>";

  for ($i = 0 ; $i < $rows ; ++$i)
  {
      $row = mysqli_fetch_row($result);
      echo "<tr><th><a href='$row[3]' target='blank'>$row[2]</a></th><th><a href='2019/$row[4].php'>$row[0]</a></th><th>$row[1]</th></tr>";

  }
  echo "</table>";

  echo "<br>Total: " . "$rows<br>";

  // очищаем результат
  mysqli_free_result($result);
}

echo "<br><span class='bold'>2018<br><br></span>";

$query ='SELECT * FROM list WHERE year >= 20180101 && year <= 20181231 ORDER BY year DESC';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

  echo "<table><tr><th width='10%'>Date<br><br></th><th width='20%'>Song<br><br></th><th width='20%'>Singer<br><br></th></tr>";

  for ($i = 0 ; $i < $rows ; ++$i)
  {
      $row = mysqli_fetch_row($result);
      echo "<tr><th><a href='$row[3]' target='blank'>$row[2]</a></th><th><a href='2018/$row[4].php'>$row[0]</a></th><th>$row[1]</th></tr>";

  }
  echo "</table>";

  echo "<br>Total: " . "$rows<br>";

  // очищаем результат
  mysqli_free_result($result);
}

echo "<br><span class='bold'>2017<br><br></span>";

$query ='SELECT * FROM list WHERE year >= 20170101 && year <= 20171231 ORDER BY year DESC';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

  echo "<table><tr><th width='10%'>Date<br><br></th><th width='20%'>Song<br><br></th><th width='20%'>Singer<br><br></th></tr>";

  for ($i = 0 ; $i < $rows ; ++$i)
  {
      $row = mysqli_fetch_row($result);
      echo "<tr><th><a href='$row[3]' target='blank'>$row[2]</a></th><th><a href='2017/$row[4].php'>$row[0]</a></th><th>$row[1]</th></tr>";

  }
  echo "</table>";

  echo "<br>Total: " . "$rows<br>";

  // очищаем результат
  mysqli_free_result($result);
}


echo "<br><br><span class='bold'>SINGERS last 365 days (number of songs)</span><br><br>";

$query ="SELECT singer, count(song) FROM list WHERE year >= $date GROUP BY singer ORDER BY count(song) DESC, singer";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    $j = (int) ($row[1] / $q_fragm * 100);
    echo " ● $row[0] ($row[1])";
  }
    // очищаем результат
    mysqli_free_result($result);
}


echo "<br><br><br><span class='bold'>SINGERS 2018 (number of songs)</span><br><br>";

$query ='SELECT singer, count(song) FROM list WHERE year >= 20180101 && year <= 20181231 GROUP BY singer ORDER BY count(song) DESC, singer';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    $j = (int) ($row[1] / $q_fragm * 100);
    echo " ● $row[0] ($row[1])";
  }
    // очищаем результат
    mysqli_free_result($result);
}


echo "<br><br><br><span class='bold'>SINGERS 2017 (number of songs)</span><br><br>";

$query ='SELECT singer, count(song) FROM list WHERE year >= 20170101 && year <= 20171231 GROUP BY singer ORDER BY count(song) DESC, singer';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    $j = (int) ($row[1] / $q_fragm * 100);
    echo " ● $row[0] ($row[1])";
  }
    // очищаем результат
    mysqli_free_result($result);
}


echo "<br><br><span class='bold'><br>METRIC last 365 days</span><br><br>";

// общее количество монометрических фрагментов для вычисления %
$query ="SELECT * FROM metr JOIN list ON metr.song=list.song WHERE year >= $date";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
  }

echo "Monometric fragments: " . "$q_fragm<br><br>";

  echo "<table><tr><th width='5%' valign='top'>";


// вывод метров
$query ="SELECT metr, count(metr.song) FROM metr JOIN list ON metr.song=list.song
  WHERE year >= $date GROUP BY metr ORDER BY count(metr.song) DESC";
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
  WHERE year >= $date GROUP BY type ORDER BY count(metr.song) DESC";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    $j = (int) ($row[1] / $q_fragm * 100);
    echo "$row[0] - $row[1] ($j%)<br>";
    $diagram_lenght365[] = $j;
    $diagram_sign365[] = $row[0];

  }

echo "</th></tr></table>";


    // Выводим диаграмму
    echo "<br>Diagram (screen width = 100%)<br><br>";
    for ($i = 0 ; $i < count($diagram_lenght365) ; ++$i)
  {
    $color = ($i+1)*30;
    echo "<div style='background:hsl($color, 100%, 50%); width:$diagram_lenght365[$i]%'>$diagram_sign365[$i]</div>";
  }
    echo "<br>";

    // очищаем результат
    mysqli_free_result($result);
}


//2020

echo "<span class='bold'><br>METRIC 2020</span><br><br>";


// общее количество монометрических фрагментов для вычисления %
$query ="SELECT * FROM metr JOIN list ON metr.song=list.song WHERE year >= 20200101 && year <= 20201231";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
  }

echo "Monometric fragments: " . "$q_fragm<br><br>";

echo "<table><tr><th width='5%' valign='top'>";

// вывод метров
$query ="SELECT metr, count(metr.song) FROM metr JOIN list ON metr.song=list.song
  WHERE year >= 20200101 && year <= 20201231 GROUP BY metr ORDER BY count(metr.song) DESC";
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
  WHERE year >= 20200101 && year <= 20201231 GROUP BY type ORDER BY count(metr.song) DESC";
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


//2019

echo "<span class='bold'><br>METRIC 2019</span><br><br>";


// общее количество монометрических фрагментов для вычисления %
$query ="SELECT * FROM metr JOIN list ON metr.song=list.song WHERE year >= 20190101 && year <= 20191231";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
  }

echo "Monometric fragments: " . "$q_fragm<br><br>";

echo "<table><tr><th width='5%' valign='top'>";

// вывод метров
$query ="SELECT metr, count(metr.song) FROM metr JOIN list ON metr.song=list.song
  WHERE year >= 20190101 && year <= 20191231 GROUP BY metr ORDER BY count(metr.song) DESC";
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
  WHERE year >= 20190101 && year <= 20191231 GROUP BY type ORDER BY count(metr.song) DESC";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    $j = (int) ($row[1] / $q_fragm * 100);
    echo "$row[0] - $row[1] ($j%)<br>";
    $diagram_lenght2019[] = $j;
    $diagram_sign2019[] = $row[0];

  }

echo "</th></tr></table>";

    // Выводим диаграмму
  echo "<br>Diagram (screen width = 100%)<br><br>";
    for ($i = 0 ; $i < count($diagram_lenght2019) ; ++$i)
  {
    $color = ($i+1)*30;
    echo "<div style='background:hsl($color, 100%, 50%); width:$diagram_lenght2019[$i]%'>$diagram_sign2019[$i]</div>";
  }
    echo "<br>";

    // очищаем результат
    mysqli_free_result($result);
}


//2018

echo "<span class='bold'><br>METRIC 2018</span><br><br>";


// общее количество монометрических фрагментов для вычисления %
$query ="SELECT * FROM metr JOIN list ON metr.song=list.song WHERE year >= 20180101 && year <= 20181231";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
  }

echo "Monometric fragments: " . "$q_fragm<br><br>";

echo "<table><tr><th width='5%' valign='top'>";

// вывод метров
$query ="SELECT metr, count(metr.song) FROM metr JOIN list ON metr.song=list.song
  WHERE year >= 20180101 && year <= 20181231 GROUP BY metr ORDER BY count(metr.song) DESC";
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
  WHERE year >= 20180101 && year <= 20181231 GROUP BY type ORDER BY count(metr.song) DESC";
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
    echo "<br>";

    // очищаем результат
    mysqli_free_result($result);
}


//2017

echo "<span class='bold'><br>METRIC 2017</span><br><br>";


// общее количество монометрических фрагментов для вычисления %
$query ="SELECT * FROM metr JOIN list ON metr.song=list.song WHERE year >= 20170101 && year <= 20171231";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
  }

echo "Monometric fragments: " . "$q_fragm<br><br>";

echo "<table><tr><th width='5%' valign='top'>";

// вывод метров
$query ="SELECT metr, count(metr.song) FROM metr JOIN list ON metr.song=list.song
  WHERE year >= 20170101 && year <= 20171231 GROUP BY metr ORDER BY count(metr.song) DESC";
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
  WHERE year >= 20170101 && year <= 20171231 GROUP BY type ORDER BY count(metr.song) DESC";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($result);
    $j = (int) ($row[1] / $q_fragm * 100);
    echo "$row[0] - $row[1] ($j%)<br>";
    $diagram_lenght2017[] = $j;
    $diagram_sign2017[] = $row[0];

  }

echo "</th></tr></table>";

    // Выводим диаграмму
  echo "<br>Diagram (screen width = 100%)<br><br>";
    for ($i = 0 ; $i < count($diagram_lenght2017) ; ++$i)
  {
    $color = ($i+1)*30;
    echo "<div style='background:hsl($color, 100%, 50%); width:$diagram_lenght2017[$i]%'>$diagram_sign2017[$i]</div>";
  }
    echo "<br>";

    // очищаем результат
    mysqli_free_result($result);
}



echo "<span class='mark'>#сил - классическая силлабо-тоника (Ам - амфибрахий, Ан - анапест, Д - дактиль, Пс - кольцовский пятисложник, Х - хорей, Я - ямб),
#лог - логаэды (Л - логаэд, Тр - логаэд из 3-сложников или 3-сложник с переменной анакрузой,
Дв - логаэд из двусложников или 2-сложник с переменной анакрузой), #дк (Дк) - дольник, #тк (Тк) - тактовик, #ак (Ак) - акцентный стих, #г (Г) - говорной стих, м, д — женская, мужская и дактилическая рифмы, цн - цезурное наращение, цу - цезурное усечение, цифра обозначает количество стоп, цифра после цн и цу - количество нарощенных или усеченных слогов, / - произвольное чередование, // - упорядоченное чередование<br></span>";

echo "<br><br><span class='bold'>POETIC METERS OF SONGS<br></span><br>
Если размер припева и куплета одинаков, то он указывается дважды.<br>
При нескольких клипах на одну песню учитывается один из них.<br>";

// список песен с размерами

$query ="SELECT song, subsize FROM metr ORDER BY song";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
        $j = $row;
        $row = mysqli_fetch_row($result);
          if ($row[0] != $j[0]) echo "<br><span class='bold'>$row[0]</span><br>$row[1]<br>";
            else echo "$row[1]<br>";
  }

    // очищаем результат
    mysqli_free_result($result);
}


mysqli_close($link);

require_once 'footer.php';
?>
