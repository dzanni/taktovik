<?php
$title = 'ДДТ - Метель (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/VAyJPrK6WQ8'";
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

<span class='blue'>[Куплет 1] Х4мм - abab</span><br>
Коронована луной,<br>
Как начало - высока,<br>
Как победа - не со мной,<br>
Как надежда - нелегка.<br>
За окном стеной метель,<br>
Жизнь по горло занесло.<br>
Сорвало финал с петель,<br>
Да поела всё тепло.<br>
<br>
<span class='i'>- Москва!</span><br>
<br>
<span class='blue'>[Припев] Л2-3мм? - abab<br></span>
Играй, как можешь, сыграй!<br>
Закрой глаза и вернись!<br>
Не пропади, но растай<br>
Да колее поклонись!<br>
Моё окно отогрей,<br>
Пусти по полю весной!<br>
Не доживи, но созрей,<br>
И будешь вечно со мной!<br>
И будешь вечно со мной!<br>
И будешь вечно со мной!<br>
Со мной...<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Ищут землю фонари,<br>
К небу тянется свеча,<br>
На снегу следы зари -<br>
Крылья павшего луча.<br>
Что же, вьюга, наливай,<br>
Выпьем время натощак.<br>
Я спою, ты в такт пролай<br>
О затерянных вещах.<br>
<br>
<span class='blue'>[Припев]<br></span>
Играй, как можешь, сыграй!<br>
Закрой глаза и вернись!<br>
Не пропади, но растай<br>
Да колее поклонись!<br>
Моё окно отогрей,<br>
Пусти по полю весной!<br>
Не доживи, но созрей,<br>
И будешь вечно со мной!<br>
И будешь вечно со мной!<br>
И будешь вечно со мной!<br>
Со мной...<br>
<br>
<span class='blue'>[Куплет 3] Х4м|м - abba</span><br>
Осторожно, не спеша,<br>
С белым ветром на груди,<br>
Где у вмерзшей в лёд ладьи<br>
Ждет озябшая душа...<br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'>[Припев]<br></span>
Играй, как можешь, сыграй!<br>
Закрой глаза и вернись!<br>
Не пропади, но растай<br>
Да колее поклонись!<br>
Моё окно отогрей,<br>
Пусти по полю весной!<br>
Не доживи, но созрей,<br>
И будешь вечно со мной!<br>
И будешь вечно со мной!<br>
И будешь вечно со мной! (ей-ей-е)<br>
Со мной...<br>
  <br>
<span class='blue'><a href='https://www.karaoke.ru/song/5568.htm'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
