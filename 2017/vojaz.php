<?php
$title = 'Ленинград - Вояж (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/sl_pxCAcJz4'";
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

Вояж<br>
Вояж<br>
Вояж<br>
Вояж<br>
<br>
<span class='blue'>[Первый куплет: Ленинград] Х4ж - AABB<br></span>
Все твои подруги-суки<br>
Часто ездят за границу,<br>
Чтобы фоточки в Фейсбуки<br>
Залепить, как говориться.<br>
<div class='refren'>
В Инстаграме свои рожи<br>
Похудевшие хуячат.<br>
Мы с тобой поедем тоже<br>
По путевке по горящей.</div>
<br>
<span class='blue'>[Припев x2: Ленинград] Я4441жм - AAbb<br></span>
На фоне Эйфелевой башни<br>
С айфона селфи заебашим,<br>
А на хуя ж еще нам наш<br>
Вояж?<br>
<br>
<span class='blue'>[Второй куплет: Ленинград]<br></span>
Заебашим мы не хуже,<br>
Чем твои эти паскуды.<br>
Устриц будем жрать на ужин<br>
В ресторане из посуды.<br>
<div class='refren'>
Полетим на самолете,<br>
Купим в Дютике напитки<br>
Мол, не только вы, блять, пьёте <br>
Джины с тоником по скидке.</div>
<br>
<span class='blue'>[Припев x2: Ленинград]<br></span>
На фоне Эйфелевой башни<br>
С айфона селфи заебашим,<br>
А на хуя ж еще нам наш<br>
Вояж?<br>
<br>
<span class='blue'>[Третий куплет: ST] Х4жм, Х4ж - XaXa, XAXA, ABAB<br></span>
Бля, Серёг, ну ты реально<br>
Охуительный мужик!<br>
То баб водишь на Ван Гога,<br>
То увозишь в Геленджик.<br>
<div class='refren'>
А теперь еще с Парижем<br>
Чую, вскоре хлебну горя,<br>
Ведь могу свозить свою я<br>
Разве что ли в Евпаторий!</div>
А она листает ленту ту же,<br>
Петля на шее туже<br>
На моей на Эйфелевой,<br>
Ведь теперь ей нужен ужин.<br>
<div class='refren'>
Устрицы, вино, серьезно?<br>
Седалище не треснет?<br>
Я прошу тебя, Серёжа,<br>
Проще рожа, реже песни!</div>
<br>
<span class='blue'>[Припев: Ленинград]<br></span>
На фоне Эйфелевой башни<br>
С айфона селфи заебашим.<br>
А на хуя ж еще нам наш<br>
Вояж?<br>
<br>
<span class='blue'>[Четвертый куплет: Ленинград]<br></span>
Я возьму кредит под это.<br>
Дело надо, блять, обстряпать<br>
Отдыхаем, хули - лето!<br>
Ты возьми у Светы шляпы!<br>
<div class='refren'>
Мама последит за кошкой,<br>
Едем мы к врагам проклятым.<br>
Мы присядем на дорожку.<br>
На Париж, как в 45-ом!</div>
<br>
<span class='blue'>[Припев x2: Ленинград]<br></span>
На фоне Эйфелевой башни<br>
С айфона селфи заебашим.<br>
А на хуя ж еще нам наш<br>
Вояж?<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/s/st/9118-leningrad-voyazh-text-pesni.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
