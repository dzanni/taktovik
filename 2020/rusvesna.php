<?php
$title = 'ДДТ - Русская весна (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/7DTK6Qc4PaU'";
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

<span class='blue'>Х3м/ - aabbccdddd</span><br>
 <br>
Что в твоем окне? <br>
Что в твоем окне? <br>
Там надул пузырь <br>
Ветер-нашатырь.<br>
Двери в магазин, <br>
Толпы Лен и Зин. <br>
Пьяные бомжи, <br>
Чахлая сосна. <br>
Русская весна, <br>
Русская весна. <br>
 <br>
Что в твоем окне?  <br>
Что в твоем окне? <br>
Тротуар-радар -  <br>
Не пролетит комар! <br>
Сочи в облаках,  <br>
ФСО в кустах. <br>
За дворцом стена,  <br>
За стеной она -<br>
Русская весна,  <br>
Русская весна. <br>
 <br>
Что в твоем окне?  <br>
Что в твоем окне? <br>
Серый полумрак, <br>
Лагерный барак. <br>
Каменный мешок,  <br>
В нем растет цветок. <br>
Зэкам не до сна:<br>
Как она нежна! <br>
Русская весна, <br>
Русская весна. <br>
 <br>
Что нас примирит?<br>
Как нам вместе быть? <br>
Как весну с тобой <br>
Эту переплыть? <br>
Звезды на плечах <br>
Плавятся в печах. <br>
В коридорах лжи <br>
Тает глубина. <br>
Русская весна, <br>
Русская весна. <br>
<br>
Русская весна... <br>
Русская весна... <br>
Русская весна... <br>
<br>
 <span class='blue'><a href='https://www.gl5.ru/ddt-russkaya-vesna.html'
   target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
