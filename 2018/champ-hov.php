<?php
$title = 'МС Хованский - Чемпионы (дисс на Шнурова и Слепакова, слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ei8VEHIA-ME'";
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
<span class='blue'>[Куплет 1: МС Хованский] Х4ж, Х4мж - ABAB, aBaB<br></span>
Постановочные бифы,<br>
Им не верит слепо Хова,<br>
Не встает чё-то на диссы,<br>
Что Шнура, что Слепакова!<br>
<div class='refren'>
Обратите все вниманье,<br>
Кем не хочет быть Серёга!<br>
Москвичом и так не станешь,<br>
Если ты чья-то шестерка!</div>

Бросить пить я тоже смог,<br>
Мы прям братья по несчастью!<br>
Вроде завязал Шнурок,<br>
Но, походу, развязался!<br>
<div class='refren'>
<span class='blue'>Ан4м - aaaa<br></span>
  Хоть Москву лишний раз я не прочь подосрать,<br>
Я люблю Петербург, не люблю «Ленинград»!<br>
Это выборы, выборы, я тоже рад!<br>
Не напомнишь, Серёга, мне, кто кандидат?</div>
<br>
<span class='blue'>[Припев: Ник Черников & МС Хованский] Х43мж - aaaaBbBB<br></span>
Где, скажите, эпатаж? <br>
(Где лабутены и вояж?!) <span class='blue'>(Строка Тк3м)<br></span>
Где ваш острый персонаж? <br>
(Проебал весь антураж!)<br>
Что с Серёгой и Семёном? <br>
(Алё, Семён?) <span class='blue'>(Строка Я2м)<br></span>
Были чемпионы, <br>
Но теперь гондоны!<br>
<br>
<span class='blue'>[Куплет 2: МС Хованский]<br></span>
Упрекнул бы за продажность, <br>
Только, сука, вот зараза:<br>
Не сказать, что моя жопа <br>
Прям не продана ни разу!<br>
<div class='refren'>Пососитесь уже, киски! <br>
Прямо в парке крикнем: «Горько!»<br>
Тут базарят за столицы <br>
Бомж и хач из Пятигорска!</div>

Ты ж скорее Глухаков, <br>
Ведь лажаешь нереально,<br>
Медведь на ухо наступил <span class='blue'>(Строка Я4м)<br></span>
И, походу, бля, буквально!<br>
<div class='refren'>
Боже мой, какая мерзость, <br>
Что меня не взяли тоже:<br>
Я б въебашил с вами вместе <br>
По одной бело-дорожке!</div>
<br>
<span class='blue'>[Припев: Ник Черников & МС Хованский]<br></span>
Где, скажите эпатаж?<br>
Где ваш острый персонаж?<br>
Что с Серёгой и Семёном?<br>
Были чемпионы, <br>
Но теперь гондоны!<br>
<div class='refren'>Где, скажите, эпатаж? <br>
(Где лабутены и вояж?!)<br>
Где ваш острый персонаж? <br>
(Проебал весь антураж!)<br>
Что с Серёгой и Семёном? <br>
(Алё, Семён?)<br>
Были чемпионы, <br>
Но теперь гондоны!</div>

<br>
<span class='blue'><a href='https://genius.com/Mc-hovansky-champions-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Ответ на песни "Ленинграда" и Семена Слепакова
<a href='pobaz.php'>"Побазарим за культуру"</a> (24.08.2018),
<a href='nemoskv.php'>"Не хочу быть москвичом"</a> (18.08.2018) и
<a href='champions.php'>"Чемпионы"</a> (24.06.2018). За песни
 "Не хочу быть москвичом" и "Побазарим за культуру" соцсети обвинили
 Шнурова и Слепакова в продажности: якобы песни созданы как
 предвыборная агитация мэра Москвы Сергея Собянина. Исполнители эти
 обвинения отвергли.
<br>
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
