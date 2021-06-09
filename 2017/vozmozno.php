<?php
$title = 'МЫ - Возможно (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/B1yIJ706i78'";
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

<span class='blue'>[Припев х4: Daniel Shake & Ева Краузе] Тк2-4цж - ABAB<br></span>
Прости, мне придётся убить тебя,<br>
Ведь только так я буду знать точно,<br>
Что между нами ничего и никогда<br>
Уже не будет возможно.<br>
<br>
<span class='blue'>[Куплет: Ева Краузе & Daniel Shake] Дк32жм - AbAbAXBB<br></span>
Ты красным по гипсокартону<br>
Стекаешь, как речка, вниз.<br>
Взгляд опустил, что такого?<br>
Потом объясню. Спи!<br>
Как в старости ночью, спокойно<br>
Уйдёшь, не заметишь!<br>
Помягче выбрал подушку.<br>
Спи крепко, подружка!<br>
<br>
<span class='blue'>[Припев х4: Daniel Shake & Ева Краузе]<br></span>
Прости, мне придётся убить тебя,<br>
Ведь только так я буду знать точно,<br>
Что между нами ничего и никогда<br>
Уже не будет возможно.<br>
<br>
<span class='blue'><a href="https://genius.com/We-perhaps-lyrics"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Ритм первого четырехстишия куплета напоминает ритм стихотворения Марины Цветаевой 1913 года
(у нее тот же самый трехстопный дольник):
<br><br>
Идешь, на меня похожий,<br>
Глаза устремляя вниз.<br>
Я их опускала — тоже!<br>
Прохожий, остановись!<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
