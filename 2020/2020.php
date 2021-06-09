<?php
$title = 'ДДТ - 2020 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/37n4lmOklXE'";
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

<span class='blue'>[Куплет 1] Тр4цжм - AbAb</span><br>
Уходит, крестясь, год две тысячи двадцать,<br>
Но легкие наши, как прежде, легки.<br>
Похоронили безвременно павших,<br>
Сплюнули пули, достали стихи.<br>
<br>
  <div class='refren'><span class='blue'>[Припев] Л4цм/м - aabb</span><br>
  Ах, нелегко, нелегко-о-о,<br>
  Небо так близко и далеко.<br>
  Новые рифмы смывают грим,<br>
  Мир изменился, он стал другим.</div>
<br>
<span class='blue'>[Куплет 2] </span><br>
Белая птица летит над домами,<br>
На кухнях салюты кипят в инстаграм.<br>
Цепью живой ночь раздвинем руками,<br>
Выйдем навстречу голодным ветрам.<br>
<br>
  <div class='refren'><span class='blue'>[Припев]</span><br>
  Ах, высоко, высоко-о-о,<br>
  Небо так близко и далеко.<br>
  Не увернуться, не сдать назад,<br>
  Больше не будет, как прежде, брат!</div>
<br>
<span class='blue'>[Куплет 3] </span><br>
Смотрит история в новые дали,<br>
Раны промыла холодным дождем.<br>
То, что вчера мы в огне потеряли,<br>
В пепле ожившем сегодня найдем.<br>
<br>
  <div class='refren'><span class='blue'>[Припев]<br></span>
  Ах, нелегко, нелегко-о-о,<br>
  Небо так близко и далеко.<br>
  Выключив звезды и маяки,<br>
  Осень выводит свои полки.<br>
  Ах, высоко, высоко-о-о,<br>
  Небо так близко и далеко.<br>
  Новые рифмы смывают грим,<br>
  Мир изменился, он стал другим.</div>
<br>
 <span class='blue'><a href='https://reproduktor.net/ddt/2020-song/'
   target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
