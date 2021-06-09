<?php

require_once '../header.php';

echo "<br><span class='bold'>Альбрехт 1875</span><br><br>";


// общее количество монометрических фрагментов для вычисления %
$query ='SELECT * FROM albreht1875';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
    mysqli_free_result($result);
  }

// таблица для диссертации
// считаем показатели

$query ='SELECT * FROM albreht1875 where type="#лог" || type="#сил"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_sil = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM albreht1875 where type="#дк" || type="#тк" || type="#ак"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ton = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM albreht1875 where metr="Х"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM albreht1875 where metr="Я"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM albreht1875 where metr="Д"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_d = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM albreht1875 where metr="Ам"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_am = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM albreht1875 where metr="Ан"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_an = $rows;
    mysqli_free_result($result);
  }

$q_other = $q_fragm - $q_kh - $q_ya - $q_d - $q_am - $q_an;

$query ='SELECT * FROM albreht1875 where subsize="Х4жм"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh4zm = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM albreht1875 where subsize="Я4жм"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya4zm = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM albreht1875 where subsize="Ан3жм"';
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

echo "<br>Метрическая картина (вручную): Х4жм - 29,8% (34 фрагмента), Тк2м/ж/д+Тк4цм плясовые - 12,3% (14),
Х4м/ж/д - 11,4% (13), Тк2цд эпический - 7,9% (9, из них 4 казачьи), Я4жм - 7,0% (8), Тк3д эпический - 3,5% (4, все они казачьи),
Ан2м, Пс, Х43мж, Х43жм - по 2,6% (по 3). Итого 82,5% (94). Из 32 тонических фрагментов 18 - казачьи; всего
казачьих фрагментов 23 (18 тоника, 5 силлабо-тоника).";

echo "<br><br>";


// вывод тоника vs силлабо-тоника
$query ='SELECT type, count(song) FROM albreht1875 GROUP BY type ORDER BY count(song) DESC';
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
$query ='SELECT metr, count(song) FROM albreht1875 GROUP BY metr ORDER BY count(song) DESC';
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
$query ='SELECT subsize, count(song) FROM albreht1875 GROUP BY subsize ORDER BY count(song) DESC';
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

$query ='SELECT song, subsize FROM albreht1875 ORDER BY song';
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

// Новиков 1780


echo "<br><br><br><span class='bold'>Новиков 1780</span><br><br>";


// общее количество монометрических фрагментов для вычисления %
$query ='SELECT * FROM novik2';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
    mysqli_free_result($result);
  }

// таблица для диссертации
// считаем показатели

$query ='SELECT * FROM novik2 where type="#лог" || type="#сил"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_sil = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM novik2 where type="#дк" || type="#тк" || type="#ак"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ton = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM novik2 where metr="Х"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM novik2 where metr="Я"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM novik2 where metr="Д"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_d = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM novik2 where metr="Ам"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_am = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM novik2 where metr="Ан"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_an = $rows;
    mysqli_free_result($result);
  }

$q_other = $q_fragm - $q_kh - $q_ya - $q_d - $q_am - $q_an;

$query ='SELECT * FROM novik2 where subsize="Х4жм"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh4zm = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM novik2 where subsize="Я4жм"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya4zm = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM novik2 where subsize="Ан3жм"';
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

echo "<br>Метрическая картина (вручную): Х4жм - 28,1% (65 фрагментов),
Тк3м/ж/д эпический - 12,1% (28),
Х4м/ж/д - 7,4% (17),  Х43мж+Х7цу1ж - 6,1% (14),
Тк3м/ж/д плясовой и Тк2цд эпический - по 5,6% (по 13),
Тк4цм/ж/д+Тк2м плясовые - 5,2% (12), Я3жм+Я6цн1м - 3,9% (9), Я4жм - 3,0% (7),
Л4цжм и Тк4цм/ж/д эпический - по 1,7% (по 4), Я3м+Я6цм - 1,3% (3). Итого 81,8% (189).";

echo "<br><br>";


// вывод тоника vs силлабо-тоника
$query ='SELECT type, count(song) FROM novik2 GROUP BY type ORDER BY count(song) DESC';
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
$query ='SELECT metr, count(song) FROM novik2 GROUP BY metr ORDER BY count(song) DESC';
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
$query ='SELECT subsize, count(song) FROM novik2 GROUP BY subsize ORDER BY count(song) DESC';
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

$query ='SELECT song, subsize FROM novik2 ORDER BY song';
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


// Попов1888


echo "<br><br><br><span class='bold'>Попов 1888</span><br><br>";


// общее количество монометрических фрагментов для вычисления %
$query ='SELECT * FROM popov1888';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
    mysqli_free_result($result);
  }

// таблица для диссертации
// считаем показатели

$query ='SELECT * FROM popov1888 where type="#лог" || type="#сил"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_sil = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM popov1888 where type="#дк" || type="#тк" || type="#ак"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ton = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM popov1888 where metr="Х"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM popov1888 where metr="Я"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM popov1888 where metr="Д"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_d = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM popov1888 where metr="Ам"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_am = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM popov1888 where metr="Ан"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_an = $rows;
    mysqli_free_result($result);
  }

$q_other = $q_fragm - $q_kh - $q_ya - $q_d - $q_am - $q_an;

$query ='SELECT * FROM popov1888 where subsize="Х4жм"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh4zm = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM popov1888 where subsize="Я4жм"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya4zm = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM popov1888 where subsize="Ан3жм"';
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

echo "<br>Метрическая картина (вручную): [пока нет].";

echo "<br><br>";


// вывод тоника vs силлабо-тоника
$query ='SELECT type, count(song) FROM popov1888 GROUP BY type ORDER BY count(song) DESC';
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
$query ='SELECT metr, count(song) FROM popov1888 GROUP BY metr ORDER BY count(song) DESC';
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
$query ='SELECT subsize, count(song) FROM popov1888 GROUP BY subsize ORDER BY count(song) DESC';
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

$query ='SELECT song, subsize FROM popov1888 ORDER BY song';
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



// 2017-2018


echo "<br><br><br><span class='bold'>2017-2018</span><br><br>";


// общее количество монометрических фрагментов для вычисления %
$query ='SELECT * FROM metr';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_fragm = $rows;
    mysqli_free_result($result);
  }

// таблица для диссертации
// считаем показатели

$query ='SELECT * FROM metr where type="#лог" || type="#сил"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_sil = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM metr where type="#дк" || type="#тк" || type="#ак"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ton = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM metr where metr="Х"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM metr where metr="Я"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM metr where metr="Д"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_d = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM metr where metr="Ам"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_am = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM metr where metr="Ан"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_an = $rows;
    mysqli_free_result($result);
  }

$q_other = $q_fragm - $q_kh - $q_ya - $q_d - $q_am - $q_an;

$query ='SELECT * FROM metr where subsize="Х4жм"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_kh4zm = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM metr where subsize="Я4жм"';
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

  if($result)
  {
    $rows = mysqli_num_rows($result);
    $q_ya4zm = $rows;
    mysqli_free_result($result);
  }

$query ='SELECT * FROM metr where subsize="Ан3жм"';
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

echo "<br>Метрическая картина (вручную): [пока нет].";

echo "<br><br>";


// вывод тоника vs силлабо-тоника
$query ='SELECT type, count(song) FROM metr GROUP BY type ORDER BY count(song) DESC';
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
$query ='SELECT metr, count(song) FROM metr GROUP BY metr ORDER BY count(song) DESC';
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
$query ='SELECT subsize, count(song) FROM metr GROUP BY subsize ORDER BY count(song) DESC';
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




mysqli_close($link);

require_once '../footer.php';
?>
