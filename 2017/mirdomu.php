<?php
$title = 'Зара - Мир вашему дому (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/r6My_1QWNR4'";
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

<span class='blue'>[Куплет 1] Тк4цжм - AbAb<br></span>
Пара-пара человек - это целая планета.<br>
С края рая до Земли рукою не достать.<br>
Перекрёсток звёздных рек, я вешаю на карте небо.<br>
Нам там та-там надо, там надо летать.<br>
<div class='refren'>Города ускорят бег, с каждым днём живём быстрее,<br>
Забывая посмотреть на звёзды по ночам.<br>
Пара-пара человек могут стать одной Вселенной.<br>
Нам там та-там надо любить и мечтать.</div>
<br>
<span class='blue'>[Припев] Ан3м? - xxx<br></span>
Я тебе подарю этот мир<br>
Разноцветный и яркий - лови!<br>
Не грусти, несмотря ни на что!<br>
Мир вашему дому,<br>
И пусть будет всё хорошо!<br>
<div class='refren'>Я тебе подарю этот мир, -<br>
Он наполнен цветами и красками.<br>
Не грусти, несмотря ни на что!<br>
Мир вашему дому,<br>
И пусть будет всё хорошо!</div>
<br>
<span class='blue'>Тк23жм? - AbAb<br></span>
Мир вашему дому,<br>
И пусть будет всё хорошо!<br>
Мир вашему дому!<br>
Пусть всё сбудется!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
А когда погаснет свет, время в темноте зависнет.<br>
Вспоминаю главную свою причину жить.<br>
Пара-пара человек поменяет ход событий.<br>
Нам там та-там надо учиться любить.<br>
<br>
<span class='blue'>[Припев x2]<br></span>
Я тебе подарю этот мир<br>
Разноцветный и яркий - лови!<br>
Не грусти, несмотря ни на что!<br>
Мир вашему дому, <br>
И пусть будет всё хорошо!<br>
<div class='refren'>Я тебе подарю этот мир, -<br>
Он наполнен цветами и красками.<br>
Не грусти, несмотря ни на что!<br>
Мир вашему дому, <br>
И пусть будет всё хорошо!</div>
<br>
Мир вашему дому, <br>
И пусть будет всё хорошо!<br>
Мир вашему дому!<br>
 Пусть всё сбудется!<br>
<br>
Мир Вашему дому!<br>
<br>
Музыка: Алексей Романоf<br>
Слова: Александр Ковалев <br>
<br>
<span class='blue'><a href='https://www.gl5.ru/zara-mir-vashemu-domu.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
