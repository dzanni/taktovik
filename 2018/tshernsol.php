<?php
$title = 'Би-2 - Черное солнце (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/PisI9l29k4E'";
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

<span class='blue'>[Куплет 1] Ам4жм - AbAb<br></span>
В багровых тонах расцвела паранойя.<br>
В соседней Вселенной случилась война.<br>
Магнитное поле неравного боя<br>
Смертельной волной приближается к нам.<br>
<br>
<span class='blue'>[Припев] Д4ц2ж? - AAAA<br></span>
Если взорвётся чёрное солнце,<br>
Все в этой жизни перевернётся,<br>
Привычный мир никогда не вернётся,<br>
Он не вернётся!<br>
В колокол бьёт, объявляя тревоги,<br>
Печальный призрак нашей свободы.<br>
Но не услышат и не помогут<br>
Мёртвые Боги!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
В бескрайней ночи источники света.<br>
Мерцание звёзд – огоньки сигарет.<br>
Последний парад начинают планеты,<br>
И каждый получит счастливый билет.<br>
<br>
<span class='blue'>[Припев]<br></span>
Если взорвётся чёрное солнце,<br>
Все в этой жизни перевернётся,<br>
Привычный мир никогда не вернётся,<br>
Он не вернётся!<br>
В колокол бьёт, объявляя тревоги,<br>
Печальный призрак нашей свободы.<br>
Но не услышат и не помогут<br>
Мёртвые Боги!<br>
<br>
<span class='blue'><a href='https://genius.com/2-bi-2-black-sun-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
