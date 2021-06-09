<?php
$title = 'Элджей & Кравц - Дисконнект (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Ec3CUvfTbf4'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{

    $row = mysqli_fetch_row($result);
          $song = $row[0];
          $singer = $row[1];
          $core_link = mb_substr($row[3], 17);
    echo "<h1>$row[0]</h1>Исполнитель: $row[1]<br>Дата клипа: $row[2]<br>";

  // очищаем результат
  mysqli_free_result($result);
}

$query ="SELECT subsize FROM metr WHERE song='$song'";
$result = mysqli_query($link, $query) or die("Ошибка вывода базы" . mysqli_error($link));

if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i)
  {
        $row = mysqli_fetch_row($result);
        $metrs[] = $row[0];
  }

    // очищаем результат
    mysqli_free_result($result);
}

$metrs_string = join(" ● ", $metrs);
echo "Размеры: $metrs_string<br><br>";

echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$core_link'
frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br><br>";

?>
Come on!<br>
<br>
<span class='blue'>[Куплет 1: Элджей] Дк2ж - AABB<br></span>
Глаза психа,<br>
В руках стикер,<br>
На сердце наклейка -<br>
Севша батарейка. <span class='blue'>(Строка Дк2цж)<br></span>
<div class='refren'>
  <span class='blue'>Дк2м - abab<br></span>
Мерцает свет,<br>
Ночь стробоскоп,<br>
Нас больше нет,<br>
Кач донт стоп!</div>
<br>
<span class='blue'>[Bridge: Элджей] Тк23м - abab<br></span>
Круглый самолет,<br>
Крушение в кровать.<br>
Выключи автопилот, <br>
Сегодня не будем спать!<br>
Круглый самолет, <br>
Крушение в кровать.<br>
Выключи автопилот, <br>
Выключи автопилот!<br>
<br>
<span class='blue'>[Hook х2: Элджей] Ак3ж - AA<br></span>
Дисконнект - между нами океаны!<br>
Дискотек, алкоголя и мариуанны!<br>
<br>
(Дискотек, алкоголя и мариуанны!)<br>
(Анны-мариуанны!)<br>
(Дискотек, алкоголя и мариуанны!)<br>
(И мариуанны!)<br>
(И мариуанны!)<br>
(Дискотек, алкоголя и мариуанны!)<br>
<br>
<span class='blue'>[Куплет 2: Кравц] Тк4цж - aa<br></span>
Плитка шоколада, зажигалка, улыбка,<br>
Джага-джага, пина колада, какая бутылка!<br>
<span class='refren'>
  <span class='blue'>Дк2-4цмж - aaaaaBaBaBxB<br></span>
Я тебе дам!<br>
Подпишись на мой инстаграм!<br>
Я объездил много стран!<br>
Люблю сумасшедших дам!<br>
Без сахара, безо льда,<br>
Без эффектов и фильтров.<br>
Трезвая голова, <br>
Не на номерах транзитных!<br>
Без сахара, безо льда,<br>
Без эффектов и фильтров.<br>
Среди грязных тус <br>
 У нас флирт элитный!<br>
<br>
<span class='blue'>[Hook х2: Элджей]<br></span>
Дисконнект - между нами океаны!<br>
Дискотека алкоголя и мариуанны!<br>
<br>
(Алкоголя и мариуанны!)<br>
(Анны-мариуанны!)<br>
(Дискотек, алкоголя и мариуанны!)<br>
(И мариуанны!)<br>
(И мариуанны!)<br>
(Дискотек, алкоголя и мариуанны!)<br>
<br>
(Дискотек, алкоголя и мариуанны!)<br>
(Дискотек, алкоголя и мариуанны!)<br>
<br>
<span class='blue'>[Hook х2: Элджей]<br></span>
Дисконнект - между нами океаны!<br>
Дискотека алкоголя и мариуанны!<br>
<br>
(Дискотек, алкоголя и мариуанны!)<br>
(Анны-мариуанны!)<br>
(Дискотек, алкоголя и мариуанны!)<br>
(И мариуанны!)<br>
(И мариуанны!)<br>
(Дискотек, алкоголя и мариуанны!)<br>
<br>
<span class='blue'><a href="https://genius.com/Allj-disconnect-lyrics"
  target="_blank">Источник</a><br></span>



<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
