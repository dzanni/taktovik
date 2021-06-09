<?php
$title = 'Леонид Агутин - Включите свет (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kSwX5UJK3Oc'";
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

<span class='blue'>[Куплет 1] Я43м/м - aabb</span><br>
Мы все, кто есть. Иных уж нет.<br>
Увы, так создан свет.<br>
Мы от судьбы всё что-то ждём,<br>
Но как-то ведь живём.<br>
  <div class='refren'>
  <span class='blue'>Я4544м/м - aabb</span><br>
  Ругаем мир, один на всех,<br>
  И ищем маленький, но свой успех.<br>
  Всё верим в сны и в чудеса,<br>
  Но тонут в хоре голоса.</div>
<br>
<span class='blue'>[Припев] Я46м/м - aabbb</span><br>
Я вас прошу, включите свет<br>
Над этой самой лучшей из живых планет!<br>
Включите свет и дайте звук —<br>
Я так хочу увидеть лес упрямых рук!<br>
Один из всех. Одно из двух...<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Мы здесь одни, другие там,<br>
Но их не видно нам.<br>
Не видно весь вселенский мрак.<br>
Пока пусть будет так.<br>
  <div class='refren'>
  <span class='blue'>Я4644м/м - aabb</span><br>
  Одна на всех плывёт земля.<br>
  Нас не знакомят с капитаном корабля.<br>
  Лишь иногда, как чудеса,<br>
  Мы слышим эти голоса.</div>
<br>
<span class='blue'>[Припев]</span><br>
Я вас прошу, включите свет<br>
Над этой самой лучшей из живых планет!<br>
Включите свет и дайте звук —<br>
Я так хочу увидеть лес упрямых рук!<br>
Один из всех. Одно из двух...<br>
<br>
<span class='blue'>[Хор]</span><br>
Я вас прошу, включите свет<br>
Над этой самой лучшей из живых планет!<br>
Включите свет и дайте звук —<br>
Я так хочу увидеть лес упрямых рук!<br>
Один из всех. Одно из двух...<br>
<br>
Музыка и слова: Леонид Агутин<br>
  <br>
<span class='blue'>Источник: официальный текст под клипом Youtube</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
