<?php
$title = 'MATRANG - Вода (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/3HxAzEUjs7Y'";
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
<span class='blue'>[Куплет 1] Л2-6цжм - AAbbCCx<br></span>
Слушай, мне не нужны твои советы вовсе!<br>
Меня бросает в сон твоих объятий возле.<br>
И пока тихо, пусть тикают наши пути!<br>
Меня позови!<br>
Уставший город в невесомости тихо засыпает,<br>
На часах ноль-ноль, фонари качаются,<br>
И ты изрядно пьяна, не выключишь свет.<br>
Ммм...<br>
<br>
<span class='blue'>[Припев] Тк4цм - aaaabbbb<br></span>
Я тихо морю говорил, это морю говорил,<br>
Это морю говорил, это морю говорил.<br>
Я тихо морю говорил, это морю говорил,<br>
Это морю говорил это морю говорил.<br>
Твоя любовь на самом деле вода,<br>
На самом деле вода, на самом деле вода!<br>
Твоя любовь на самом деле вода,<br>
На самом деле вода, на самом деле вода!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Душно, весь мир из пикселей, как тамагочи.<br>
Меня еще трясет после безумной ночи.<br>
И если солнце не выжжет остатки тоски,<br>
Их смоют дожди.<br>
И знаешь, повод тебя не любить тихо нагнетает!<br>
Я писал, но, но руки всё стирают сами.<br>
Ты, походу, одна встречаешь рассвет.<br>
Ммм...<br>
<br>
<span class='blue'>[Припев]<br></span>
Я тихо морю говорил, это морю говорил,<br>
Это морю говорил, это морю говорил.<br>
Я тихо морю говорил, это морю говорил,<br>
Это морю говорил это морю говорил.<br>
Твоя любовь на самом деле вода,<br>
На самом деле вода, на самом деле вода!<br>
Твоя любовь на самом деле вода,<br>
На самом деле вода, на самом деле вода!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Твоя любовь на самом деле вода,<br>
На самом деле вода, на самом деле вода!<br>
Твоя любовь на самом деле вода,<br>
На самом деле вода, на самом деле вода!<br>
Твоя любовь на самом деле вода,<br>
На самом деле вода, на самом деле вода!<br>
<br>
<span class='blue'><a href='https://genius.com/Matrang-water-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма д=ж: "засыпает" - "качаются".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
