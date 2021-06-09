<?php
$title = 'NLO - Цыгане (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/KOP1UCNg6nw'";
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

<span class='blue'>[Куплет 1] Л23жж - (B)ABAB ABAB</span><br>
Мало, <br>
Мы уже день ви-<br>
сим, но нам все мало!<br>
Наши потери <br>
В этом только налом.<br>
  <div class='refren'>Мы улетели <br>
  Даже выше дао.<br>
  Можно как все, но <br>
  Только что бы дало?!</div>
<br>
<span class='blue'>[Переход] Л3мж? - (B)aB(B)aB</span><br>
ЛА-ла, лА-ла.<br>
Я выключаю свет, <br>
Чтобы она не спала.<br>
ЛА-ла, лА-ла, лА-ла.<br>
Нас ожидает кекс <br>
И гора отравы.<br>
<br>
<span class='blue'>[Припев] Х3443жм - aaaBaaaB</span><br>
МОя, заблуди <br>
МЕня на моем пути,<br>
Пару дней уже кутИм, <br>
НО мы не устали!<br>
  <div class='refren'>На моей груди<br>
  Я ей не даю уйти,<br>
  ДелаЕм то, что хотим,<br>
  Любим как цыгане!</div>
(Как, как, как цыгане)<br>
  <br>
  <span class='blue'>[Куплет 2] Тк2мж - aBaB aBaB</span><br>
Мы уже не в себе, <br>
Но этого нам мало,  <br>
Не понимая где,<br>
И что с нами стало.  <br>
  <div class='refren'>МалАя круче всех, <br>
  И она не устала,  <br>
  Не покидай постель, <br>
  Там повсюду лава!  </div>
  <br>
  <span class='blue'>[Переход]</span><br>
  Ла-ла, ла-ла.<br>
  Я выключаю свет, <br>
  Чтобы она не спала.<br>
  Ла-ла, ла-ла, ла-ла.<br>
  Нас ожидает кекс <br>
  И гора отравы.<br>
  <br>
  <span class='blue'>[Припев]</span><br>
  Моя, заблуди <br>
  Меня на моем пути,<br>
  Пару дней уже кутИм, <br>
  Но мы не устали!<br>
    <div class='refren'>На моей груди<br>
    Я ей не даю уйти,<br>
    Делаем то, что хотим,<br>
    Любим как цыгане!</div>
  Моя, заблуди <br>
  Меня на моем пути,<br>
  Пару дней уже кутИм, <br>
  Но мы не устали!<br>
    <div class='refren'>На моей груди<br>
    Я ей не даю уйти,<br>
    Делаем то, что хотим,<br>
    Любим как цыгане!</div>
(Как, как, как цыгане)<br>
<br>
  <span class='blue'>[Финал]</span><br>
Цыгане.<br>
Цыгане.<br>
Цыгане.<br>
Цыгане.<br>
    <br>
<span class='blue'>Источник: официальный текс под клипом Youtube</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
