<?php
$title = 'Ленинград - i_$uss (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/S6ygE226h-0'";
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

<span class='i'>
- Ну чо, поехали? Марочку за мамочку.<br>
- Ну так чо? Нас скоро попрет?<br>
- Вик, попрет, попрет! Ты, главное, верь!<br>
(Неразб.)<br>
- Малышка, пошли!<br>
</span>
<br>
<span class='blue'>[Куплет 1] Я4жм - AbAb<br></span>
Желание перекреститься<br>
Я потушила не спеша.<br>
Забилось сердце, словно птица,<br>
И в пятки бросилась душа.<br>
<br>
<span class='blue'>[Припев] Я4м/ - aaaa<br></span>
Ты был прекрасен, как Исус<br>
В произведениях искусств.<br>
Я думала, что вознесусь<br>
От красоты или от чувств.<br>
Ты был прекрасен, как Исус<br>
В произведениях искусств.<br>
Я думала, что вознесусь<br>
От красоты... ты, ты... <span class='blue'>(Строка Я3м)<br></span>
<br>
<span class='blue'>[Пост-припев] Д2м/ - aa...a<br></span>
Ты как Исус, ты как Исус!<br>
Ты как Исус, ты как Исус!<br>
Ты как Исус, ты как Исус!<br>
Ты как Исус, ты как Исус!<br>
<br>
<span class='i'>- Вика, блядь! Ты что там, заснула? Я ссать хочу, выходи!</span><br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Лиловый свет лился из окон.<br>
Дыша, ты завершал ерша.<br>
Спадавший с плеч игривый локон<br>
Твой образ стильный завершал.<br>
<br>
<span class='blue'>[Припев]<br></span>
Ты был прекрасен, как Исус<br>
В произведениях искусств.<br>
Я думала, что вознесусь<br>
От красоты или от чувств.<br>
Ты был прекрасен, как Исус<br>
В произведениях искусств.<br>
Я думала, что вознесусь<br>
От красоты... ты, ты...<br>
<br>
<span class='blue'>[Пост-припев]<br></span>
Ты как Исус, ты как Исус!<br>
Ты как Исус, ты как Исус!<br>
Ты как Исус, ты как Исус!<br>
Ты как Исус, ты как Исус!<br>
<br>
<span class='blue'>[Читка: Шнур] Я3м/ж - aa, AA<br></span>
Вошел он, как с полотен,<br>
Как будто, не из плоти, <br>
Как будто, не из крови,<br>
И пусть не остановит <br>
Ничто, и все другие <br>
Священны(е) литургии, <br>
СовЕршится обряд,<br>
Прольется анти-яд.<br>
Как белый лист, чиста, <br>
Разверзнуты уста.<br>
Внимай же и вкуси, <br>
О, несвятая дама,<br>
Священных смузи, амен!<br>
<br>
<span class='blue'>[Куплет 3] Я4жж - ABAB<br></span>
Как ритмы тем играло тихо,<br>
Ты полубоком-полубогом<br>
Вошел, взяла несмело грех на...<br>
На душу в смысле самом строгом.<br>
<br>
<span class='blue'>[Припев]<br></span>
Ты был прекрасен, как Исус<br>
В произведениях искусств.<br>
Я думала, что вознесусь<br>
От красоты или от чувств.<br>
Ты был прекрасен, как Исус<br>
В произведениях искусств.<br>
Я думала, что вознесусь<br>
От красоты... ты, ты...<br>
<br>
<span class='blue'>[Пост-припев]<br></span>
Ты как Исус, ты как Исус!<br>
Ты как Исус, ты как Исус!<br>
Ты как Исус, ты как Исус!<br>
Ты как Исус, ты как Исус!<br>
<br>
<span class='blue'><a href='https://genius.com/Leningrad-i-uss-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
