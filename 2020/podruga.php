<?php
$title = 'Слава и Мамина дочь - Подруга (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/JuLloOMkJeI'";
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
<span class='blue'>[Куплет 1] Тк34ц33ж/ж - AABB</span><br>
У нас с тобой все было гармонично,<br>
Пока не прочитала я твою страничку,<br>
И снежный ком признаний и запретов<br>
Обрушился на мою планету.<br>
<br>
<span class='blue'>[Переход] Тк2жж - ABAB</span><br>
"Забей на это", — <br>
Мне сердце шептало.<br>
"Забей на все на это", — <br>
Говорила мне мама.<br>
<br>
<span class='blue'>[Припев х2] Тк4цж/ж - AABB</span><br>
А я не буду плакать подруге в жилетку,<br>
В сердце ей поставлю черную метку.<br>
Я не знаю, как так получилось:<br>
Моя подруга в тебя влюбилась.<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
У нас с тобой все было безупречно,<br>
Пока я с ней тебя не увидела вместе.<br>
Ты нежно обнимал ее за плечи,<br>
Я навсегда запомню этот вечер.<br>
<br>
<span class='blue'>[Переход]</span><br>
"Забей на это", — <br>
Мне сердце шептало.<br>
"Забей на все на это", — <br>
Говорила мне мама.<br>
<br>
<span class='blue'>[Припев х2]</span><br>
А я не буду плакать подруге в жилетку,<br>
В сердце ей поставлю черную метку.<br>
Я не знаю, как так получилось:<br>
Моя подруга в тебя влюбилась.<br>
<br>
<span class='blue'>[Проигрыш]</span><br>
<br>
<span class='blue'>[Пред-припев]</span><br>
А я не буду плакать подруге в жилетку...<br>
В сердце ей поставлю черную метку...<br>
<br>
<span class='blue'>[Припев]</span><br>
А я не буду плакать подруге в жилетку,<br>
В сердце ей поставлю черную метку.<br>
Я не знаю, как так получилось:<br>
Моя подруга в тебя влюбилась.<br>
А я не буду плакать...<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/slava-podruga.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
