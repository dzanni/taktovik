<?php
$title = 'Ленинград - Не хочу быть москвичом (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wIfaMhGPYoI'";
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
<span class='blue'>[Куплет 1: Сергей Шнуров] Х4жм - AbAb<br></span>
Я Москву люблю не очень,<br>
Как любой провинциал.<br>
Даже Красную я площадь,<br>
Никогда не целовал.<br>
<div class='refren'>
  <span class='blue'>Х4ж - ABAB<br></span>
Все добро столовой ложкой<br>
Под себя гребет не глядя,<br>
И ведут велодорожки<br>
Непременно в парк «Зарядье».</div>

Парк Культуры и прогулок,<br>
Ну, а выпить не с кем, блядь.<br>
Не найдешь тут закоулок,<br>
И приходится гулять!<br>
<br>
<span class='blue'>[Припев] Х43мд<br></span>
Где, скажите, Эрмитаж?<br>
(Да у меня культурный стаж) <span class='blue'>(Строка Я4м)<br></span>
Где же Пушкин в кителе?<br>
(Смерить не хотите ли?)<br>
Не «Аллё» нам ваш «Гараж»,<br>
(Аллё, гараж!) <span class='blue'>(Строка Я2м)<br></span>
Вся культура — в Питере!<br>
<br>
<span class='blue'>[Куплет 2: Сергей Шнуров]<br></span>
Ленки ходят да Наташки,<br>
Не москвички коренные.<br>
Сломаны пятиэтажки,<br>
В моде здания иные.<br>
<div class='refren'>
Где найти приют окурку,<br>
Не ответит даже ясень.<br>
Я базарю за культурку,<br>
И расклад, походу, ясен.</div>
<br>
<span class='blue'>[Припев]<br></span>
Где, скажите, Эрмитаж?<br>
(Да у меня культурный стаж)<br>
Где же Пушкин в кителе?<br>
(Смерить не хотите ли?)<br>
Не «Аллё» нам ваш «Гараж»,<br>
(Аллё, гараж!)<br>
Вся культура — в Питере!<br>
(У, блин!)<br>
<br>
<span class='blue'>[Куплет 3: Сергей Шнуров]<br></span>
Жизнь в столице не тупая,<br>
Острая, как суп харчо.<br>
Но дохуя в Москве вай-фая,<br>
Но не хочу быть москвичом.<br>
<div class='refren'>
Чтоб по кругу в электричке<br>
Мчать, как белка в колесе.<br>
Написал страничке личной,<br>
Как же заебали все!</div>
<br>
<span class='blue'>[Припев]<br></span>
Где, скажите, Эрмитаж?<br>
Где же Пушкин в кителе?<br>
Не «Аллё» нам ваш «Гараж»,<br>
Вся культура — в Питере!<br>
<div class='refren'>
Где, скажите, Эрмитаж?<br>
(Да у меня культурный стаж)<br>
Где же Пушкин в кителе?<br>
(Смерить не хотите ли?)<br>
Не «Аллё» нам ваш «Гараж»,<br>
(Алло, гараж!)<br>
Вся культура — в Питере!</div>
<br>
<span class='blue'>[Аутро: Сергей Шнуров]<br></span>
Ясен хуй!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/l1/leningrad/11613-leningrad-ne-hochu-bitj-moskvichom-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
