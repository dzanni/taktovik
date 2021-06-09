<?php
$title = 'Burito & Лариса Долина - Капкан (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/HE6mM3hXUMg'";
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
<span class='blue'>[Куплет 1] Дк3-4цжммм - AAbccb</span><br>
Падали по миллиметрам,<br>
Вставали и гнулись от ветра,<br>
Но не боялись открыть глаза.<br>
Сколько нас упало вниз<br>
Под громкие крики: "Ты только держись!"<br>
Ты только держись, пройдет гроза!<br>
<br>
<span class='blue'>[Переход] Ак2-6цм/ - aaaa</span><br>
Мы прощались и возвращались в обман.<br>
Мы прощались и голосами своими души вели сквозь туман,<br>
Попадая в капкан,<br>
Попадая в капкан.<br>
<br>
<span class='blue'>[Припев] Дк3-5цмм? - abab</span><br>
Прощай, но помни об одном:<br>
Рядом с тобой всегда моя душа,<br>
И если ночь пришла в твой старый дом,<br>
Идет и свет, не спеша, не спеша!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Таяли в слоях пепла<br>
В холодную воду из пекла,<br>
Но не искали внутри себя зла.<br>
Мыслями мы одни,<br>
Друг за другом сплетаются дни<br>
В грани вечно живого узла.<br>
<br>
<span class='blue'>[Переход]</span><br>
Мы прощались и возвращались в обман.<br>
Мы прощались и голосами своими души вели сквозь туман,<br>
Попадая в капкан,<br>
Попадая в капкан.<br>
<br>
<span class='blue'>[Припев х3]</span><br>
Прощай, но помни об одном:<br>
Рядом с тобой всегда моя душа,<br>
И если ночь пришла в твой старый дом,<br>
Идет и свет, не спеша, не спеша!<br>
  <br>
Слова и музыка: И. Бурнышев<br>
  <br>
<span class='blue'><a href='https://text-pesni.com/pesnya/pokazat/565697227/burito/tekst-perevod-pesni-kapkan-ft-larisa-dolina-burito/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
