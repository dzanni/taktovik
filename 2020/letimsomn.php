<?php
$title = 'Артур Пирожков - Летим со мной (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/7G7fXJ25898'";
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

<span class='blue'>[Куплет 1] Л24мм4ж/ - ababCC</span><br>
Если не я, <br>
Что тогда произойдёт?<br>
Если не ты, <br>
Кто же нас с тобой спасёт<br>
От ненужных потрясений, <br>
От обмана и сомнений?<br>
Йа-а, йе-йе!<br>
<div class='refren'>Здесь только мы, <br>
И больше никого вокруг.<br>
Если не мы, <br>
Кто услышит сердца стук?<br>
И в газетах выйдет новость -<br>
Мы с тобою в невесомости!<br>
И-и, йе-йе!</div>
<br>
<span class='blue'>[Припев х2] Дв35м/? - aaaX</span><br>
Летим, летим со мной, <br>
На краю Вселенной берег мой!<br>
Летим, летим со мной, <br>
На краю Вселенной!<br>
Летим, летим со мной, <br>
На краю Вселенной берег мой!<br>
Летим, летим со мной, <br>
На краю Вселенной!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Не упадём <br>
Мы на Землю никогда.<br>
Взорвись огнём, <br>
Как сверхновая звезда.<br>
И все остальные звёзды <br>
Станут нам родными сёстрами.<br>
Йе-йе!<br>
<div class='refren'>Погаснет свет,  <br>
Но глаза твои горят.<br>
Нам дела нет, <br>
Что там люди говорят.<br>
Только на твоей орбите  <br>
Я нашёл свою обитель.<br>
О-о, йе-йе!</div>
<br>
<span class='blue'>[Припев х2]</span><br>
Летим, летим со мной, <br>
На краю Вселенной берег мой!<br>
Летим, летим со мной, <br>
На краю Вселенной!<br>
Летим, летим со мной, <br>
На краю Вселенной берег мой!<br>
Летим, летим со мной, <br>
На краю Вселенной!<br>
<br>
<span class='blue'>[Переход]</span><br>
Летим, летим со мной!<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Летим, летим со мной, <br>
На краю Вселенной берег мой!<br>
Летим, летим со мной, <br>
На краю Вселенной!<br>
Летим, летим со мной, <br>
На краю Вселенной берег мой!<br>
Летим, летим со мной, <br>
На краю Вселенной!<br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/artur-pirozhkov-letim-so-mnoi.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
