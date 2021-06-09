<?php
$title = 'Оля Полякова - Королева ночи (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Eo-4AUBnpRg'";
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

<span class='blue'>[Куплет 1] Х4м - xabba xcccc<br></span>
Я так верила тебе: <br>
Говорил мне о любви.<br>
Ты цветы мне присылал, <br>
Мои руки целовал,<br>
Когда мы были одни.<br>
<div class='refren'>
Оказалось, не одной <br>
Обещания давал!<br>
Всё увидела вчера, <br>
И как будто умерла <br>
Для меня любовь моя.</div>
<br>
<span class='blue'>[Переход] Дк4ц3ж - AA<br></span>
Вытру слёзы, стану красивой.<br>
Я сегодня хочу быть счастливой!<br>
<br>
<span class='blue'>[Припев] Дв1-3жм - AABBCCd AEAECCd<br></span>
Я королева ночи <br>
Сегодня точно.<br>
Глаза не прячу <br>
Я больше не заплачу.<br>
Ты теперь свободный.<br>
Делай что угодно, <br>
Прощай!<br>
<div class='refren'>
Я королева ночи <br>
Сегодня буду,<br>
А это значит: точно <br>
Тебя забуду.<br>
Ты теперь свободный.<br>
Больше ты не модный, <br>
Давай!</div>
<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ну а дальше, кто куда.<br>
Телефонные звонки.<br>
Абонент мой для тебя <br>
Недоступен навсегда.<br>
Не пиши и не звони!<br>
<div class='refren'>
Я уже пережила, <br>
И обратно не вернусь.<br>
Ты уже всё показал <br>
И меня ты потерял.<br>
Больше я не поведусь.</div>
<br>
<span class='blue'>[Переход]<br></span>
Вытру слёзы, стану красивой.<br>
Я сегодня хочу быть счастливой!<br>
<br>
<span class='blue'>[Припев]<br></span>
Я королева ночи <br>
Сегодня точно.<br>
Глаза не прячу <br>
Я, больше не заплачу.<br>
Ты теперь свободный.<br>
Делай что угодно, <br>
Прощай!<br>
<div class='refren'>
Я королева ночи <br>
Сегодня буду,<br>
А это значит: точно <br>
Тебя забуду.<br>
Ты теперь свободный.<br>
Больше ты не модный, <br>
Давай!</div>
<br>
Дорогие девочки! Если вы уходите в одинокую ночь,
то обязательно станьте ее королевой! А-а!<br>
<br>
<span class='blue'>[Припев]<br></span>
Я королева ночи <br>
Сегодня точно.<br>
Глаза не прячу <br>
Я, больше не заплачу.<br>
Ты теперь свободный.<br>
Делай что угодно, <br>
Прощай!<br>
<div class='refren'>
Я королева ночи <br>
Сегодня буду,<br>
А это значит: точно <br>
Тебя забуду.<br>
Ты теперь свободный.<br>
Больше ты не модный, <br>
Давай!</div>
<br>
Слова и музыка: О. Животкова<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/p/polyakova-olya/olya-polyakova-koroleva-nochi.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
