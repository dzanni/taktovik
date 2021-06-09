<?php
$title = 'Сергей Лазарев - Так красиво (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/0IrL8J4hmTs'";
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

<span class='blue'>[Куплет 1] Тк3ж - ABAB<br></span>
Твоя любовь издавала звуки,<br>
Похожие на шум океана.<br>
Твоя любовь подавала руки,<br>
Чтобы залечивать ими раны.<br>
Твоя любовь прижимала к сердцу<br>
Так тихо-тихо и не отпускала.<br>
Твоя любовь возвращала в детство. <br>
Дарила всё, чего не хватало.<br>
<br>
<span class='blue'>[Припев х2] Л3ж AA...A<br></span>
Твоя любовь - это так красиво. <br>
Твоя любовь - этих тактов сила.<br>
Твоя любовь - лишь моё cветило. <br>
Твоя любовь - это так красиво.<br>
Твоя любовь - это так красиво. <br>
Твоя любовь - этих тактов сила.<br>
Твоя любовь меня доводила, <br>
Но твоя любовь - это так красиво.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Твоя любовь подпускала близко. <br>
Прощала крики, по нервам била.<br>
Прощала боль, признавала риски.<br>
Твоя любовь во мне всё мирила.<br>
Твоя любовь, прикасаясь к телу,<br>
 Меняла временно запах кожи.<br>
Твоя любовь становилась целым<br>
Из двух частей, что так не похожи.<br>
<br>
<span class='blue'>[Припев]<br></span>
Твоя любовь - это так красиво. <br>
Твоя любовь - этих тактов сила.<br>
Твоя любовь - лишь моё cветило. <br>
Твоя любовь - это так красиво.<br>
Твоя любовь - это так красиво. <br>
Твоя любовь - этих тактов сила.<br>
Твоя любовь меня доводила, <br>
Но твоя любовь - это так красиво.<br>
<br>
<span class='blue'>[Song Instrumental Bridge]<br></span>
<br>
<span class='blue'>[Припев х2]<br></span>
Твоя любовь - это так красиво. <br>
Твоя любовь - этих тактов сила.<br>
Твоя любовь - лишь моё cветило. <br>
Твоя любовь - это так красиво.<br>
Твоя любовь - это так красиво. <br>
Твоя любовь - этих тактов сила.<br>
Твоя любовь меня доводила, <br>
Но твоя любовь - это так красиво.<br>
<br>
Музыка и слова: А. Шаповалов<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/sergey-lazarev-tak-krasivo.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Припев - логаэд из сжимающегося Тк куплета.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
