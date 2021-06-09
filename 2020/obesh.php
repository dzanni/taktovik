<?php
$title = 'Ани Лорак - Обещаю (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/khdjE923dcc'";
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

<span class='blue'>[Куплет 1] Я45мж - aBaB<br></span>
Я помню твоих рук тепло (тепло)<br>
И взгляды, обжигающие тело<br>
Ты знаешь, мне не всё равно (всё равно)<br>
Любви твоей всегда я так хотела!<br>
<br>
<span class='blue'>[Припев] Х46жм - AAbAAb<br></span>
Обещаю - не забуду, <br>
Ты моё восьмое чудо!<br>
За тобою по осколкам, ноги в кровь!<br>
Обещаю - не забуду, <br>
Если хватит сил на чудо<br>
Сохранить навек свою к тебе любовь!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
И если нам не по пути,<br>
То почему нас сводят все дороги?<br>
Нам это трудно отпустить,<br>
Ведь мы не знаем, что останется в итоге. <span class='blue'>(Строка Я6ж)<br></span>
<br>
<span class='blue'>[Припев]<br></span>
Обещаю - не забуду, <br>
Ты моё восьмое чудо!<br>
За тобою по осколкам, ноги в кровь!<br>
Обещаю - не забуду, <br>
Если хватит сил на чудо<br>
Сохранить навек свою к тебе любовь!<br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'>[Припев]<br></span>
Обещаю - не забуду, <br>
Ты моё восьмое чудо!<br>
За тобою по осколкам, ноги в кровь!<br>
Обещаю - не забуду, <br>
Если хватит сил на чудо<br>
Сохранить навек свою к тебе любовь!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/ani-lorak-obeschau.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
