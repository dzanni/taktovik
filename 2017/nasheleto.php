<?php
$title = 'Dan Balan & Вера Брежнева - Наше лето (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/u7ka5wp-nko'";
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
<span class='blue'>[Куплет 1: Dan Balan] Л42мж - aaBBaaCC<br></span>
Я опять вхожу в дома, <br>
Где несутся голоса <br>
Юного смеха, <br>
Медного смеха. <br>
Разлетелись в никуда <br>
Мимолётные слова: <br>
«Только с тобою, <br>
Навеки с тобою!» <br>
<br>
<span class='blue'>[Припев: Dan Balan & Вера Брежнева] Л42мжд - aBaBccX'B<br></span>
 Летним утром того дня <br>
 Начиналось наше лето. <br>
 Нам казалось - навсегда, <br>
 И любили всё на свете. <br>
 <div class='refren'>Солнце в глазах, <br>
 Сердце в руках. <br>
 Безоговорочно <br>
 Мы любили так, как дети. </div>
<br>
<span class='blue'>[Куплет 2: Dan Balan]<br></span>
 Снова тяжко на груди, <br>
 Я бы смог её найти,<br>
  Остаться навеки, <br>
  С ней навеки. <br>
  Но эти жгучие мосты, <br>
  Эти розы - цвет души - <br>
  Ищут морозы <br>
  И метаморфозы. <br>
  <br>
<span class='blue'>[Припев: Dan Balan & Вера Брежнева]<br></span>
   Летним утром того дня <br>
   Начиналось наше лето. <br>
   Нам казалось - навсегда, <br>
   и любили всё на свете. <br>
   <div class='refren'>Солнце в глазах, <br>
   Сердце в руках. <br>
   Безоговорочно <br>
   Мы любили так, как дети. </div>
<br>
   Мы любили так, как дети. <br>
   <br>
<span class='blue'>[Припев: Dan Balan & Вера Брежнева]<br></span>
    Летним утром того дня <br>
    Начиналось наше лето. <br>
    Нам казалось - навсегда, <br>
    И любили всё на свете. <br>
    <div class='refren'>Солнце в глазах, <br>
    Сердце в руках. <br>
    Безоговорочно <br>
    Мы любили так, как дети. </div>
<br>
<span class='blue'>[Вера Брежнева]<br></span>
    Нам казалось - навсегда, <br>
    И любили всё на свете. <br>
<br>
<span class='blue'>[Dan Balan & Вера Брежнева]<br></span>
Безоговорочно<br>
Мы любили, как дети.<br>
<br>
<span class='blue'>[Вера Брежнева]<br></span>
Мы любили, как дети.<br>

<br>
Музыка: Dan Balan<br>
Слова: Dan Balan<br>
<br>
<span class='blue'>Текст, приложенный к клипу Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
