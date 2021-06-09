<?php
$title = 'Время и Стекло - Лох (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aj10Ab6Cws8'";
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

<span class='blue'>[Вступление, Додо] Х4м/ - a</span><br>
Стекло. Время. Амстердам.<br>
<br>
<span class='blue'>[Куплет 1, Додо] Тк4цм/? - aa</span><br>
Что значит, не злись? Ты такой нарцисс!<br>
Если бы тебя не отогнала - ты бы долго вис. <span class='blue'>(Строка Тк5цм)</span><br>
На ушах, на понтах, отмечал в постах.<br>
Страх, какой затрах! Да ну тебя на нах!<br>
  <div class='refren'>
  Like that! (Like that!) Это, сука, бред!<br>
  Ну кто берёт напрокат в дождь велосипед?<br>
  Теперь иди катайся сам по своим углам!<br>
  До тебя я любила этот Амстердам!</div>
<span class='blue'>Л4мж? - AbAb</span><br>
Ты зажал за парко-тикет,<br>
Но на нарко-цирк купил билет!<br>
Время будет тик-тик тикать,<br>
Я не буду ждать, пока он марку съест! (нет!)<br>
  <div class='refren'>
  <span class='blue'>Х2-5м/ж? - AABB AAcc</span><br>
  Easy, easy!<br>
  Нам сюда можно без визы.<br>
  Нас в Европе знают -<br>
  Мы завсегдатаи фестивалей.</div>
Easy, easy!<br>
Вы, практически унизив,<br>
Отпустите под залог!<br>
Мой парень - лох!<br>
<br>
<span class='blue'>[Припев, Додо] Я2м/ - aaa</span><br>
Мой парень - лох! (лох!) <br>
Мой парень - лох! (лох!)<br>
Мой парень - лох!<br>
  <div class='refren'>
  Мой парень - лох! (лох!) <br>
  Мой парень - лох!<br>
  Мой парень - лох!</div>
Мой парень - лох! (лох!) <br>
Мой парень - лох! (лох!)<br>
Мой парень - лох!<br>
  <div class='refren'>
  Мой парень - лох! (лох!) <br>
  Мой парень - лох!<br>
  Мой парень...</div>
<br>
<span class='blue'>[Переход, Додо] Тк4цж/ - AA(A)</span><br>
Мы сыграли роли, мы даже не боролись.<br>
На руке остался купленный самой себе Rolex.<br>
(Самой себе Rolex) Rolex.<br>
<div class='refren'>
Мы сыграли роли, мы даже не боролись.<br>
На руке остался купленный самой себе Rolex.<br>
(Rolex!) Rolex.</div>
<br>
<span class='blue'>[Куплет 2, Позитив] Дк2жм - AbAb</span><br>
4:20 - <br>
По мостам <br>
Туристы мацают <br>
Амстердам.<br>
9:15 - <br>
Coffee shop. <br>
Мы ожидаем, <br>
Прикупиться шоб.<br>
<div class='refren'>
<span class='blue'>Дк2-4цж/ - aaaaaa</span><br>
Местные нам без печали<br>
В спину кричали: <br>
"Чарли? Чарли!"<br>
Но мы не покупали, <br>
Потому что знали,<br>
Сколько палева сюда приходит кораблями! <span class='blue'>(Строка Тк4цж)</span></div>
<br>
<span class='blue'>[Скит, Позитив] Л4цм/? - aaaa</span><br>
Не покупай, не покупай! (нет!)<br>
Не покупай на улице, не покупай! (не покупай!)<br>
Не покупай, не покупай!<br>
Не покупай, а лучше выкупай! (лучше выкупай)<br>
<div class='refren'>
<span class='blue'>Тк4-6цм/ - aa</span><br>
Что с этого момента любой мент<br>
Тебя закроет на замок без проблем.<br>
При виде полицая Вадим высадился и убёг...<br>
- Девушка, это чей? - Простите, это мой!</div>
<br>
<span class='blue'>[Припев, Додо]</span><br>
Мой парень - лох! (лох!) <br>
Мой парень - лох! (лох!)<br>
Мой парень - лох!<br>
  <div class='refren'>
  Мой парень - лох! (лох!) <br>
  Мой парень - лох!<br>
  (Да, твой парень лох!)</div>
Мой парень - лох! (лох!) <br>
Мой парень - лох! (лох!)<br>
Мой парень - лох!<br>
  <div class='refren'>
  Мой парень - лох! (лох!) <br>
  Мой парень - лох!<br>
  (Да, твой парень лох!)</div>
<br>
<span class='blue'>[Переход, Додо]</span><br>
Мы сыграли роли, мы даже не боролись.<br>
На руке остался купленный самой себе Rolex.<br>
(Самой себе Rolex). Rolex.<br>
<div class='refren'>
Мы сыграли роли, мы даже не боролись.<br>
На руке остался купленный самой себе Rolex.<br>
Rolex.</div>
<br>
<span class='blue'>[Финал]</span><br>
Tэ, тэ-тэ, твой парень - лох!<br>
Это, сука, бред!<br>
Мой парень, мой парень!<br>
Мой парень - лох!<br>
<div class='refren'>
Мы сыграли роли, мы даже не боролись.<br>
Тэ, тэ, лох!<br>
Ты зажал за парко-тикет!<br>
Мой парень - лох!<br>
Парень! Лох!</div>
Лох!<br>
Лох!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/vremya-i-steklo-loh.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Рифма д=ж (либо слоговое "ть"): "четыре двАдцать - туристы мАцают".<br>



<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
