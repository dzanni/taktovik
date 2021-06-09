<?php

require_once '../header.php';

  $baze='operet';


echo "<br><span class='bold'>$baze</span><br><br>";


// общее количество монометрических фрагментов для вычисления %
$query ="SELECT * FROM $baze";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
    mysqli_free_result($result);
  }

/*
// ВРЕМЕННО: количество песен


$query ="SELECT n FROM $baze";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

$h = 0;
for ($i = 0 ; $i < $rows ; ++$i)
{
$row = mysqli_fetch_row($result);
if ($row[0] != $j)
  {
    echo "$row[0]<br>";
    $j = $row[0];
    ++$h;
  }
}
echo "<br>$h<br>";
mysqli_free_result($result);

*/

// таблица для диссертации
// считаем показатели

$query ="SELECT * FROM $baze where type='#лог' || type='#сил'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_sil = $rows;
    mysqli_free_result($result);
  }

$query ="SELECT * FROM $baze where type='#дк' || type='#тк' || type='#ак'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ton = $rows;
    mysqli_free_result($result);
  }

$query ="SELECT * FROM $baze where metr='Х'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh = $rows;
    mysqli_free_result($result);
  }

$query ="SELECT * FROM $baze where metr='Я'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya = $rows;
    mysqli_free_result($result);
  }

$query ="SELECT * FROM $baze where metr='Д'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_d = $rows;
    mysqli_free_result($result);
  }

$query ="SELECT * FROM $baze where metr='Ам'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_am = $rows;
    mysqli_free_result($result);
  }

$query ="SELECT * FROM $baze where metr='Ан'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_an = $rows;
    mysqli_free_result($result);
  }

$q_other = $q_fragm - $q_kh - $q_ya - $q_d - $q_am - $q_an;

$query ="SELECT * FROM $baze where subsize='Х4жм'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh4zm = $rows;
    mysqli_free_result($result);
  }

$query ="SELECT * FROM $baze where subsize='Я4жм'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya4zm = $rows;
    mysqli_free_result($result);
  }

$query ="SELECT * FROM $baze where subsize='Ан3жм'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_an4zm = $rows;
    mysqli_free_result($result);
  }

$d_sil = round (($q_sil / $q_fragm * 100), 1);
$d_ton = round (($q_ton / $q_fragm * 100), 1);
$d_kh = round (($q_kh / $q_fragm * 100), 1);
$d_ya = round (($q_ya / $q_fragm * 100), 1);
$d_d = round (($q_d / $q_fragm * 100), 1);
$d_am = round (($q_am / $q_fragm * 100), 1);
$d_an = round (($q_an / $q_fragm * 100), 1);
$d_other = round (($q_other / $q_fragm * 100), 1);
$d_kh4zm = round (($q_kh4zm / $q_fragm * 100), 1);
$d_ya4zm = round (($q_ya4zm / $q_fragm * 100), 1);
$d_an4zm = round (($q_an4zm / $q_fragm * 100), 1);

echo "<table><tr>
<th width='5%'><span class='bold'>Всего</span><br></th>
<th width='5%'><span class='bold'>сил</span><br></th>
<th width='5%'><span class='bold'>тон</span><br></th>
<th width='5%'>Х<br></th>
<th width='5%'>Я<br></th>
<th width='5%'>Д<br></th>
<th width='5%'>Ам<br></th>
<th width='5%'>Ан<br></th>
<th width='5%'><span class='bold'>др</span><br></th>
<th width='5%'>Х4жм<br></th>
<th width='5%'>Я4жм<br></th>
<th width='5%'>Ан3жм<br></th>
</tr>";

echo "<tr>
<th width='5%'><span class='bold'>$q_fragm</span><br></th>
<th width='5%'><span class='bold'>$q_sil</span><br></th>
<th width='5%'><span class='bold'>$q_ton</span><br></th>
<th width='5%'>$q_kh<br></th>
<th width='5%'>$q_ya<br></th>
<th width='5%'>$q_d<br></th>
<th width='5%'>$q_am<br></th>
<th width='5%'>$q_an<br></th>
<th width='5%'><span class='bold'>$q_other</span><br></th>
<th width='5%'>$q_kh4zm<br></th>
<th width='5%'>$q_ya4zm<br></th>
<th width='5%'>$q_an4zm<br></th>
</tr>";

echo "<tr>
<th width='5%'><span class='bold'>100</span><br></th>
<th width='5%'><span class='bold'>$d_sil</span><br></th>
<th width='5%'><span class='bold'>$d_ton</span><br></th>
<th width='5%'>$d_kh<br></th>
<th width='5%'>$d_ya<br></th>
<th width='5%'>$d_d<br></th>
<th width='5%'>$d_am<br></th>
<th width='5%'>$d_an<br></th>
<th width='5%'><span class='bold'>$d_other</span><br></th>
<th width='5%'>$d_kh4zm<br></th>
<th width='5%'>$d_ya4zm<br></th>
<th width='5%'>$d_an4zm<br></th>
</tr>";

echo "</table>";

echo "<br>Метрическая картина";

echo "<br><br>";


// вывод тоника vs силлабо-тоника
$query ="SELECT type, count(song) FROM $baze GROUP BY type ORDER BY count(song) DESC";
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

echo "<br>";

// вывод метров
$query ="SELECT metr, count(song) FROM $baze GROUP BY metr ORDER BY count(song) DESC";
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

echo "<br>";

// вывод размеров
$query ="SELECT subsize, count(song) FROM $baze GROUP BY subsize ORDER BY subsize";
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

echo "<br>";

echo "<br><span class='mark'>#сил - классическая силлабо-тоника (Ам - амфибрахий, Ан - анапест, Д - дактиль, Пс - кольцовский пятисложник, Х - хорей, Я - ямб), #лог - логаэды (Л - логаэд, Тр - логаэд из 3-сложников, Дв - логаэд из двусложников), #дк (Дк) - дольник, #тк (Тк) - тактовик, #ак (Ак) - акцентный стих, #г (Г) - говорной стих, м, д — женская, мужская и дактилическая рифмы, цн - цезурное наращение, цу - цезурное усечение, цифра обозначает количество стоп, цифра после цн и цу - количество нарощенных или усеченных слогов, / - произвольное чередование, // - упорядоченное чередование<br></span>";


echo "<br><br><span class='bold'>РАЗМЕРЫ ПЕСЕН<br></span><br>
Если размер припева и куплета одинаков, то он указывается дважды<br>";

// список песен с размерами

$query ="SELECT song, subsize FROM $baze ORDER BY song";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
        $j = $row;
        $row = mysqli_fetch_row($result);
          if ($row[0] != $j[0]) echo "<br>$row[0]" . " - " . "$row[1]";
            else echo ", " . "$row[1]";
  }

    // очищаем результат
    mysqli_free_result($result);
}

mysqli_close($link);

echo "<br>";

require_once '../footer.php';
?>
