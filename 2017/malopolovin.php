<?php
$title = 'Ольга Бузова - Мало половин (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Ro6GHxFj8uk'";
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

<span class='blue'>[Куплет 1] Дв27жм - AbAb<br></span>
Легче, проще, <br>
Уже не кажется так бесконечно без тебя.<br>
Ночи хочешь? <br>
Мне наплевать, чего теперь ты хочешь без меня.<br>
<br>
<span class='blue'>[Припев] Л4цм? - aaaa<br></span>
В моей Вселенной ты был господин,<br>
И никого вокруг, только ты один!<br>
Но оказалось, что ты не незаменим,<br>
Я открываю мир других мужчин!<br>
<div class='refren'>Мало половин, мало, мало половин!<br>
Мало половин, мало, мало половин!<br>
Мало половин, мало, мало половин!<br>
Я открываю мир других мужчин!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Чаще, слаще,<br>
Лучше, чем было - сделав выводы, я остаюсь.<br>
Настоящей,<br>
Я больше сильной и счастливой одна не боюсь <br>
Быть! <br>
<br>
<span class='blue'>[Переход] Дв57цм - aaaa<br></span>
И этот мир весь тянется ко мне,<br>
Тянется ко мне, тянет-тянется ко мне (тянется)<br>
(Мир) других мужчин, с ним я наедине -<br>
Я наедине, я на-я наедине!<br>
<br>
<span class='blue'>[Припев] Л4цм? - aaaa<br></span>
В моей Вселенной ты был господин,<br>
И никого вокруг, только ты один!<br>
Но оказалось, что ты не незаменим,<br>
Я открываю мир других мужчин!<br>
<div class='refren'>Мало половин, мало, мало половин!<br>
Мало половин, мало, мало половин!<br>
Мало половин, мало, мало половин!<br>
Я открываю мир других мужчин!</div>
<br>
<span class='blue'>[Куплет 3]<br></span>
Ближе вижу<br>
Я этот мир и улыбаюсь ему одному.<br>
Не обижу <br>
Себя и больше не позволю это никому.<br>
<br>
<span class='blue'>[Припев]<br></span>
В моей Вселенной ты был господин,<br>
И никого вокруг, только ты один!<br>
Но оказалось, что ты не незаменим,<br>
Я открываю мир других мужчин!<br>
<div class='refren'>Мало половин, мало, мало половин!<br>
Мало половин, мало, мало половин!<br>
Мало половин, мало, мало половин!<br>
Я открываю мир других мужчин!</div>
<br>
Мало половин, мало, мало половин!<br>
Мало половин, мало, мало половин!<br>
Мало половин, мало, мало половин!<br>
Я открываю мир других мужчин!<br>
<br>
Музыка: Роман Мясников<br>
Слова: Александр Степанов<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/b/buzova_olga/olga-buzova-malo-polovin.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
<br>N.B. Внутренние рифмы.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
