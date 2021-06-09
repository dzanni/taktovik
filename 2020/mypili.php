<?php
$title = 'Пающие трусы - Мы пили водку с раками! (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/9qw49Jqw-PE'";
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

<span class='blue'>[Куплет 1] Х5д/д - A'A'B'B'</span><br>
Мы отменяем самоизоля-ля-ля-цию!<br>
Мы требуем ее капитуля-ля-ля-цию!<br>
Нам хочется попробовать забытое:<br>
Не съеденное и не допи-пи-пи-тое!<br>
  <div class='refren'>Мы отменяем самоизоляцию!<br>
  Решили увеличить (попу!) популяцию!<br>
  На даче зависать решили вместе мы<br>
  И радовать себя не только песнями.</div>
<br>
<span class='blue'>[Припев] Я3дд - A'B'A'B'</span><br>
Мы пили водку с раками!<br>
Мы пили пиво с колою!<br>
Меня всё время лайкали,<br>
Пока была я голая!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Мы отменили самоизоля-ля-ля-цию<br>
И объявили все мобилиза-за-за-цию!<br>
Нам хочется попробовать забытое:<br>
Не съеденное и не допи-пи-пи-тое!<br>
<br>
<span class='blue'>[Припев]</span><br>
Мы пили водку с раками!<br>
Мы пили пиво с колою!<br>
Меня всё время лайкали,<br>
Пока была я голая!<br>
<br>
<span class='blue'>[Проигрыш]</span><br>
<br>
<span class='blue'>[Припев]</span><br>
Мы пили водку с раками!<br>
Мы пили пиво с колою!<br>
Меня всё время лайкали,<br>
Пока была я голая!<br>
  <div class='refren'>Голая!<br>
  Пока была я голая!<br>
  Голая!<br>
  Пока была я голая... душой!<br>
  Мы пили водку с раками!</div>
  <br>
<span class='blue'>Источник:</span> расшифровка фонограммы клипа.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
