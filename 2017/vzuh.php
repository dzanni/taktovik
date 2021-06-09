<?php
$title = 'Марьяна Ро - Вжух, как это клево! (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ugMaWo8q2dY'";
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

<span class='blue'>[Куплет 1] Дв3343мж, Дв3343ж - AAbb, AABB<br></span>
Времени нет вечно, <br>
Но я безупречна,<br>
Шлю подружкам новый твит.<br>
Спасибо Veet, Veet!<br>
<div class='refren'>Пишут мне в коменты <br>
Супер-комплименты.<br>
С новыми полосками <br>
Быть красивой просто!</div>
<br>
<span class='blue'>[Припев] Л4цж - AAA<br></span>
Вжух, вжух, как это ново!<br>
Вжух, вжух, как это клёво!<br>
Вжух, вжух, проще простого!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
В любое время года<br>
Быть свободной - мода.<br>
За мой идеальный вид<br>
Спасибо, Veet, Veet!<br>
<div class='refren'>Ни тереть, ни мазать - <br>
Всё тебе и сразу!<br>
И открыты все дорожки<br>
Гладким моим ножкам.</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Вжух, вжух, как это ново!<br>
Вжух, вжух, как это клёво!<br>
Вжух, вжух, проще простого!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Плюс новая текстура,<br>
Простая процедура.<br>
Считай от одного до двух,<br>
Все вместе: вжух, вжух!<br>
<br>
<span class='blue'>[Переход]<br></span>

Вжух, вжух. О-уо-уо-у!<br>
<br>
Вжух, вжух - ни тереть, ни мазать!<br>
Вжух, вжух - всё тебе и сразу!<br>
Вжух, вжух - проще простого!<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/r/rozhkova-marianna/rozhkova_marianna_vzhukh_kak_eto_klevo.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Рифма д=ж (полосками - просто).<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
