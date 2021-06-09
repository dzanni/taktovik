<?php

$title='Russian songs generator ● Генератор шлягеров';

$date = date("Ymd", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));

require_once 'header.php';

// вывод формы

include "free.php";

  $size0='Тк4ц';
  $sex0='ж';
  $size1='Тк4ц';
  $sex1='м';
  $rime='ABAB';
  $q=2;

  $r_size0='Х4';
  $r_sex0='ж';
  $r_size1='Х4';
  $r_sex1='м';
  $r_rime='ABAB';

  $p_size0='Л3';
  $p_sex0='м';

    if (isset($_POST['size0'])) $size0=$_POST['size0'];
    if (isset($_POST['sex0'])) $sex0=$_POST['sex0'];
    if (isset($_POST['size1'])) $size1=$_POST['size1'];
    if (isset($_POST['sex1'])) $sex1=$_POST['sex1'];
    if (isset($_POST['rime'])) $rime=$_POST['rime'];
    if (isset($_POST['q'])) $q=$_POST['q'];

    if (isset($_POST['r_size0'])) $r_size0=$_POST['r_size0'];
    if (isset($_POST['r_sex0'])) $r_sex0=$_POST['r_sex0'];
    if (isset($_POST['r_size1'])) $r_size1=$_POST['r_size1'];
    if (isset($_POST['r_sex1'])) $r_sex1=$_POST['r_sex1'];
    if (isset($_POST['r_rime'])) $r_rime=$_POST['r_rime'];

    if (isset($_POST['p_size0'])) $p_size0=$_POST['p_size0'];
    if (isset($_POST['p_sex0'])) $p_sex0=$_POST['p_sex0'];


// Выводим заголовок с размерами песен


echo "<br><table><tr><th width='10%'><span class='bold'>Generated song</span><br>
  $size0" . "$sex0/$size1" . "$sex1, chorus $r_size0" . "$r_sex0/$r_size1" . "$r_sex1,
  bridge $p_size0" . "$p_sex0<br></th>
    <th width='5%'><span class='bold'>Source</span><br><br></th></tr>";

  // Пишем подводку из 2 строк

  //первая строка подводки
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='$p_size0' && sex='$p_sex0' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $p_year0 = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
        $p_song0=$row[0];
        $p_vers0=$row[1];
        $p_r0=$row[4];
        $p_page0=$row[9];
        mysqli_free_result($result);
    }

  //вторая строка подводки
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='$p_size0' && sex='$p_sex0'
    && r='$p_r0' && vers!='$p_vers0' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $p_year1 = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
      $p_song1=$row[0];
      $p_vers1=$row[1];
      $p_page1=$row[9];
      mysqli_free_result($result);
  }

    // Пишем припев из 4 строк

    //первая строка припева
    $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
      WHERE year >= $date && size='$r_size0' && sex='$r_sex0' ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

    if($result)
    {
      $row = mysqli_fetch_row($result);
      $r_year0 = mb_substr($row[7], 0, 4);
      if (empty($row[1])) $row[1]='. . . . .';
          $r_song0=$row[0];
          $r_vers0=$row[1];
          $r_r0=$row[4];
          $r_page0=$row[9];
          mysqli_free_result($result);
      }

      //вторая строка припева
    $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
      WHERE year >= $date && size='$r_size1' && sex='$r_sex1' ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

    if($result)
    {
      $row = mysqli_fetch_row($result);
      $r_year1 = mb_substr($row[7], 0, 4);
      if (empty($row[1])) $row[1]='. . . . .';
          $r_song1=$row[0];
          $r_vers1=$row[1];
          $r_r1=$row[4];
          $r_page1=$row[9];
          mysqli_free_result($result);
    }

    //третья строка припева
    $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
      WHERE year >= $date && size='$r_size0' && sex='$r_sex0'
      && r='$r_r0' && vers!='$r_vers0' ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

    if($result)
    {
      $row = mysqli_fetch_row($result);
      $r_year2 = mb_substr($row[7], 0, 4);
      if (empty($row[1])) $row[1]='. . . . .';
        $r_song2=$row[0];
        $r_vers2=$row[1];
        $r_page2=$row[9];
        mysqli_free_result($result);
    }

    //четвертая строка припева
    $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
      WHERE year >= $date && size='$r_size1' && sex='$r_sex1'
      && r='$r_r1' && vers!='$r_vers1' ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

    if($result)
    {
      $row = mysqli_fetch_row($result);
      $r_year3 = mb_substr($row[7], 0, 4);
      if (empty($row[1])) $row[1]='. . . . .';
        $r_song3=$row[0];
        $r_vers3=$row[1];
        $r_page3=$row[9];
        mysqli_free_result($result);
      }


    //Пишем куплеты, выводим, к каждому подверстываем подводку и припев

    for ($j = 1; $j < ($q+1); ++$j)
    {
      //первая строка куплета
      $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
        WHERE year >= $date && size='$size0' && sex='$sex0' ORDER BY RAND() LIMIT 1";
      $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

      if($result)
      {
        $row = mysqli_fetch_row($result);
        $year0 = mb_substr($row[7], 0, 4);
        if (empty($row[1])) $row[1]='. . . . .';
          $song0=$row[0];
          $vers0=$row[1];
          $r0=$row[4];
          $page0=$row[9];
        mysqli_free_result($result);
      }

  //вторая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='$size1' && sex='$sex1' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year1 = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
      $song1=$row[0];
      $vers1=$row[1];
      $r1=$row[4];
      $page1=$row[9];
      mysqli_free_result($result);
  }

  //третья строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='$size0' && sex='$sex0'
    && r='$r0' && vers!='$vers0' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year2 = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
      $song2=$row[0];
      $vers2=$row[1];
      $page2=$row[9];
      mysqli_free_result($result);
  }

  //четвертая строка куплета
  $query ="SELECT * FROM centon1 JOIN list ON centon1.song=list.song
    WHERE year >= $date && size='$size1' && sex='$sex1'
    && r='$r1' && vers!='$vers1' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $row = mysqli_fetch_row($result);
    $year3 = mb_substr($row[7], 0, 4);
    if (empty($row[1])) $row[1]='. . . . .';
      $song3=$row[0];
      $vers3=$row[1];
      $page3=$row[9];
      mysqli_free_result($result);

// Выводим куплет, подводку и припев
// Сначала куплет в зависимости от рифмовки

  if ($rime=='ABAB')
  {
    echo "<tr><th><br><span class='bold'>$j. </span>" .
      "$vers0<br></th><th><br><a href='$year0/$page0.php'>$song0</a><br></th></tr>";
    echo "<tr><th>$vers1<br></th><th><a href='$year1/$page1.php'>$song1</a><br></th></tr>";
    echo "<tr><th>$vers2<br></th><th><a href='$year2/$page2.php'>$song2</a><br></th></tr>";
    echo "<tr><th>$vers3<br></th><th><a href='$year3/$page3.php'>$song3</a><br></th></tr>";
  }
  elseif ($rime=='AABB')
  {
    echo "<tr><th><br><span class='bold'>$j. </span>" .
      "$vers0<br></th><th><br><a href='$year0/$page0.php'>$song0</a><br></th></tr>";
    echo "<tr><th>$vers2<br></th><th><a href='$year2/$page2.php'>$song2</a><br></th></tr>";
    echo "<tr><th>$vers1<br></th><th><a href='$year1/$page1.php'>$song1</a><br></th></tr>";
    echo "<tr><th>$vers3<br></th><th><a href='$year3/$page3.php'>$song3</a><br></th></tr>";
  }
  else
  {
    echo "<tr><th><br><span class='bold'>$j. </span>" .
      "$vers0<br></th><th><br><a href='$year0/$page0.php'>$song0</a><br></th></tr>";
    echo "<tr><th>$vers1<br></th><th><a href='$year1/$page1.php'>$song1</a><br></th></tr>";
    echo "<tr><th>$vers3<br></th><th><a href='$year3/$page3.php'>$song3</a><br></th></tr>";
    echo "<tr><th>$vers2<br></th><th><a href='$year2/$page2.php'>$song2</a><br></th></tr>";
  }

    //  Подводка у нас всегда AA
      echo "<tr><th><br><div class='refren'>$p_vers0</div></th>
        <th><br><a href='$p_year0/$p_page0.php'>$p_song0</a><br></th></tr>";
        echo "<tr><th><div class='refren'>$p_vers1</div></th>
          <th><a href='$p_year1/$p_page1.php'>$p_song1</a><br></th></tr>";

    // Дальше припев в зависимости от рифмовки
      if ($r_rime=='ABAB')
      {
        echo "<tr><th><br><div class='refren1'>$r_vers0</div></th>
          <th><br><a href='$r_year0/$r_page0.php'>$r_song0</a><br></th></tr>";
        echo "<tr><th><div class='refren1'>$r_vers1</div></th>
          <th><a href='$r_year1/$r_page1.php'>$r_song1</a><br></th></tr>";
        echo "<tr><th><div class='refren1'>$r_vers2</div></th>
          <th><a href='$r_year2/$r_page2.php'>$r_song2</a><br></th></tr>";
        echo "<tr><th><div class='refren1'>$r_vers3</div></th>
          <th><a href='$r_year3/$r_page3.php'>$r_song3</a><br></th></tr>";
      }
      elseif ($rime=='AABB')
      {
        echo "<tr><th><br><div class='refren1'>$r_vers0</div></th>
          <th><br><a href='$r_year0/$r_page0.php'>$r_song0</a><br></th></tr>";
        echo "<tr><th><div class='refren1'>$r_vers2</div></th>
          <th><a href='$r_year2/$r_page2.php'>$r_song2</a><br></th></tr>";
        echo "<tr><th><div class='refren1'>$r_vers1</div></th>
          <th><a href='$r_year1/$r_page1.php'>$r_song1</a><br></th></tr>";
        echo "<tr><th><div class='refren1'>$r_vers3</div></th>
          <th><a href='$r_year3/$r_page3.php'>$r_song3</a><br></th></tr>";
      }
      else
      {
        echo "<tr><th><br><div class='refren1'>$r_vers0</div></th>
          <th><br><a href='$r_year0/$r_page0.php'>$r_song0</a><br></th></tr>";
        echo "<tr><th><div class='refren1'>$r_vers1</div></th>
          <th><a href='$r_year1/$r_page1.php'>$r_song1</a><br></th></tr>";
        echo "<tr><th><div class='refren1'>$r_vers3</div></th>
          <th><a href='$r_year3/$r_page3.php'>$r_song3</a><br></th></tr>";
        echo "<tr><th><div class='refren1'>$r_vers2</div></th>
          <th><a href='$r_year2/$r_page2.php'>$r_song2</a><br></th></tr>";
      }

  }

}

  //конец песни

echo "</table>";

echo "<br><br><span class='bold'>Songs are generated from the most popular Russian songs,
  published on Youtube during last 365 days
  (more than 3.000.000 Youtube views; for 2020 the criterion is weaker).</span><br>";


mysqli_close($link);

require_once 'footer.php';
?>
