<?php
$title = 'LILY - Оттолкнулись (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/apVt7HEuZDI'";
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

<span class='blue'>[Куплет 1] Дк2-4ц - aBabX'Xx<br></span>
Любовь похожа на твой укус,<br>
Его не знала раньше.<br>
Если попробую на вкус,<br>
Что будет дальше?<br>
<div class='refren'>
Между тобой и мной касания,<br>
Мы взлетали в небо, пока не упали,<br>
Но ты мне дай свое тепло!</div>
<br>
<span class='blue'>[Припев x2] Дк4цжм - AAAx<br></span>
Мы оттолкнулись, но не взлетели,<br>
Ты сжег мой сердце, как карамели!<br>
Мы оттолкнулись, но не успели,<br>
Я потеряла, теряла любовь!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Рука застыла от нежных губ<br>
И тысячи объятий.<br>
Не впускай никого вокруг,<br>
Нас двоих хватит!<br>
<div class='refren'>Между тобой и мной дыхание.<br>
Как измерить чувством весь этот воздух?<br>
Но ты мне дай его тепло!</div>
<br>
<span class='blue'>[Припев x4]<br></span>
Мы оттолкнулись, но не взлетели,<br>
Ты сжег мой сердце, как карамели!<br>
Мы оттолкнулись, но не успели,<br>
Я потеряла, теряла любовь!<br>
<br>
Музыка: М. Фадеев <br>
Слова: О. Серябкина<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/l/lily/11585-lily-ottolknulisj-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
