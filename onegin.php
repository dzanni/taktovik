<?php
$title='Eugene Onegin generator ● Генератор «Евгения Онегина»';

$date = date("Ymd", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));

require_once 'header.php';


// Пишем строфы на манер "Евгения Онегина" ABAB CCDD EFFE GG

echo "<h1>EUGENE ONEGIN OF OUR TIME ● ЕВГЕНИЙ ОНЕГИН НАШЕГО ВРЕМЕНИ</h1>";
echo "<span class='i'>Onegin stanzas</span> ABAB CCDD EFFE GG and
<span class='i'>Tatyana's letter</span> generated from
the most popular last 365 days Youtube songs (<span class='i'>Eugene Onegin</span>
is a novel in verse written by Alexander Pushkin in 1823-1831,
<span class='i'>Tatyana's letter</span> is a part of it)<br>";

echo "<br><table><tr><th width='10%'>Generated stanzas<br></th><th width='5%'>Basic songs<br></th></tr>";


//  Зацикливаем число строф

for ($i = 1; $i < 4; ++$i)
{

echo "<tr><th><br><span class='bold'>$i.</span><br></th><th><br></th></tr>";


  // Пишем финальное двустишие GG из 2 строк

  //первая строка
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
  $row = mysqli_fetch_row($result);
      $p_year0 = mb_substr($row[7], 0, 4);
      $p_song0=$row[0];
      $p_vers0=$row[1];
      $p_size0=$row[2];
      $p_r0=$row[4];
      $p_page0=$row[9];
      mysqli_free_result($result);
  }

  //вторая строка
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='$p_size0'
    && r='$p_r0' && vers!='$p_vers0' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
      $p_year1 = mb_substr($row[7], 0, 4);
      $p_song1=$row[0];
      $p_vers1=$row[1];
      if (empty($p_vers1)) $p_vers1='. . . . .';
      $p_page1=$row[9];
      mysqli_free_result($result);
  }

    //Пишем катены ABAB CCDD EFFE

  for ($j = 1; $j < 4; ++$j)
  {
      //первая строка катрена
      $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
        WHERE year >= $date ORDER BY RAND() LIMIT 1";
      $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

      if($result)
      {
        $row = mysqli_fetch_row($result);
          $year0 = mb_substr($row[7], 0, 4);
          $song0=$row[0];
          $vers0=$row[1];
          $size0=$row[2];
          $r0=$row[4];
          $page0=$row[9];
          mysqli_free_result($result);
      }

      //вторая строка катрена
      $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
        WHERE year >= $date && size='$size0' ORDER BY RAND() LIMIT 1";
      $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

      if($result)
      {
        $row = mysqli_fetch_row($result);
        $year1 = mb_substr($row[7], 0, 4);
        $song1=$row[0];
        $vers1=$row[1];
        if (empty($vers1)) $vers1='. . . . .';
        $r1=$row[4];
        $page1=$row[9];
        mysqli_free_result($result);
      }

      //третья строка катрена
      $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
        WHERE year >= $date && size='$size0'
        && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
      $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

      if($result)
      {
        $row = mysqli_fetch_row($result);
          $year2 = mb_substr($row[7], 0, 4);
          $song2=$row[0];
          $vers2=$row[1];
          if (empty($vers2)) $vers2='. . . . .';
          $page2=$row[9];
          mysqli_free_result($result);
      }

      //четвертая строка катрена
      $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
        WHERE year >= $date && size='$size0'
        && r='$r1' && vers!='$vers1' ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

        if($result)
        {
          $row = mysqli_fetch_row($result);
            $year3 = mb_substr($row[7], 0, 4);
            $song3=$row[0];
            $vers3=$row[1];
            if (empty($vers3)) $vers3='. . . . .';
            $page3=$row[9];
            mysqli_free_result($result);
        }

// Выводим катрены

  if ($j==1)
  {
    echo "<tr><th><span class='mark'>$size0:</span><br>$vers0<br></th>
      <th><br><a href='$year0/$page0.php'>$song0</a><br></th></tr>";
    echo "<tr><th>$vers1<br></th><th><a href='$year1/$page1.php'>$song1</a><br></th></tr>";
    echo "<tr><th>$vers2<br></th><th><a href='$year2/$page2.php'>$song2</a><br></th></tr>";
    echo "<tr><th>$vers3<br></th><th><a href='$year3/$page3.php'>$song3</a><br></th></tr>";
  }
  elseif ($j==2)
  {
    echo "<tr><th><span class='mark'>$size0:</span><br>$vers0<br></th>
      <th><br><a href='$year0/$page0.php'>$song0</a><br></th></tr>";
    echo "<tr><th>$vers2<br></th><th><a href='$year2/$page2.php'>$song2</a><br></th></tr>";
    echo "<tr><th>$vers1<br></th><th><a href='$year1/$page1.php'>$song1</a><br></th></tr>";
    echo "<tr><th>$vers3<br></th><th><a href='$year3/$page3.php'>$song3</a><br></th></tr>";
  }
  else
  {
    echo "<tr><th><span class='mark'>$size0:</span><br>$vers0<br></th>
      <th><br><a href='$year0/$page0.php'>$song0</a><br></th></tr>";
    echo "<tr><th>$vers1<br></th><th><a href='$year1/$page1.php'>$song1</a><br></th></tr>";
    echo "<tr><th>$vers3<br></th><th><a href='$year3/$page3.php'>$song3</a><br></th></tr>";
    echo "<tr><th>$vers2<br></th><th><a href='$year2/$page2.php'>$song2</a><br></th></tr>";
  }

}

//   Выводим финальное двустишие GG
    echo "<tr><th><span class='mark'>$p_size0:</span><br>$p_vers0<br></th>
      <th><br><a href='$p_year0/$p_page0.php'>$p_song0</a><br></th></tr>";
  echo "<tr><th>$p_vers1<br></th><th><a href='$p_year1/$p_page1.php'>$p_song1</a><br></th></tr>";

  //конец строфы

}

// Письмо Татьяны, например - ABABCDDC

echo "<tr><th><br><span class='bold'>Tatyana's letter</span><br></th><th><br><br></th></tr>";

// выбираем размер
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $size0=$row[2];
        mysqli_free_result($result);
  }

  echo "<tr><th><br><span class='mark'>$size0:</span></th><th><br></th></tr>";

//  Зацикливаем число групп ABABCDDC
  for ($i = 1; $i < 3; ++$i)
  {

    // Генерируем катрены ABAB и CDDC
      for ($j = 1; $j < 3; ++$j)
      {
        //первая строка катрена письма
        $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
          WHERE year >= $date && size='$size0' ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

        if($result)
        {
          $row = mysqli_fetch_row($result);
          $year0 = mb_substr($row[7], 0, 4);
          $song0=$row[0];
          $vers0=$row[1];
          $r0=$row[4];
          $page0=$row[9];
          mysqli_free_result($result);
        }

        //вторая строка строка катрена письма
        $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
          WHERE year >= $date && size='$size0' ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

        if($result)
        {
          $row = mysqli_fetch_row($result);
          $year1 = mb_substr($row[7], 0, 4);
          $song1=$row[0];
          $vers1=$row[1];
          if (empty($vers1)) $vers1='. . . . .';
          $r1=$row[4];
          $page1=$row[9];
          mysqli_free_result($result);
        }

        //третья строка катрена письма
        $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
          WHERE year >= $date && size='$size0'
          && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

        if($result)
        {
          $row = mysqli_fetch_row($result);
          $year2 = mb_substr($row[7], 0, 4);
          $song2=$row[0];
          $vers2=$row[1];
          if (empty($vers2)) $vers2='. . . . .';
          $page2=$row[9];
          mysqli_free_result($result);
        }

        //четвертая строка катрена письма
        $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
          WHERE year >= $date && size='$size0'
          && r='$r1' && vers!='$vers1' ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

        if($result)
        {
          $row = mysqli_fetch_row($result);
          $year3 = mb_substr($row[7], 0, 4);
          $song3=$row[0];
          $vers3=$row[1];
          if (empty($vers3)) $vers3='. . . . .';
          $page3=$row[9];
          mysqli_free_result($result);
        }

        if ($j==1)
        {
          echo "<tr><th>$vers0<br></th><th><a href='$year0/$page0.php'>$song0</a><br></th></tr>";
          echo "<tr><th>$vers1<br></th><th><a href='$year1/$page1.php'>$song1</a><br></th></tr>";
          echo "<tr><th>$vers2<br></th><th><a href='$year2/$page2.php'>$song2</a><br></th></tr>";
          echo "<tr><th>$vers3<br></th><th><a href='$year3/$page3.php'>$song3</a><br></th></tr>";
        }
          else
        {
          echo "<tr><th>$vers0<br></th><th><a href='$year0/$page0.php'>$song0</a><br></th></tr>";
          echo "<tr><th>$vers1<br></th><th><a href='$year1/$page1.php'>$song1</a><br></th></tr>";
          echo "<tr><th>$vers3<br></th><th><a href='$year3/$page3.php'>$song3</a><br></th></tr>";
          echo "<tr><th>$vers2<br></th><th><a href='$year2/$page2.php'>$song2</a><br></th></tr>";
        }

    }

 }

echo "</table>";

mysqli_close($link);


require_once 'footer.php';
?>
