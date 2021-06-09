<?php
$title = 'Кристина Кошелева - Больше нет сил (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/W4jDbM6cTA4'";
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

<span class='blue'>[Куплет 1] Х23м? - abab<br></span>
Посмотри, <br>
Я перед тобой.<br>
Набери меня, <span class='blue'>(Строка Х3м)<br></span>
Если будет сбой.<br>
<br>
<span class='blue'>[Переход] Х4жм - AAx<br></span>
Я не буду больше верить,<br>
Я закрою наши двери,<br>
Я хочу тебе сказать:<br>
<br>
<span class='blue'>[Припев х2] Л32м - aaaa aaxa<br></span>
Сука, больше нет сил! <br>
Ты не простил.<br>
Раньше говорил, <br>
Что меня любил.<br>
Сука, больше нет сил! <br>
Ты не простил,<br>
А я тебя люблю - <br>
Ну а ты, любил?<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Всё пройдёт. <br>
Холодно, закрой (Ммм)<br>
Ты звездой<br>
 Светишь надо мной.<br>
<br>
<span class='blue'>[Переход]<br></span>
Я не буду больше верить,<br>
Я закрою наши двери,<br>
Я хочу тебе сказать:<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Сука, больше нет сил! <br>
Ты не простил.<br>
Раньше говорил, <br>
Что меня любил.<br>
Сука, больше нет сил! <br>
Ты не простил,<br>
А я тебя люблю - <br>
Ну а ты любил?<br>
<br>
О-о-о!<br>
Я тебя люблю,<br>
Ну а ты любил?<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Сука, больше нет сил! <br>
Ты не простил.<br>
Раньше говорил, <br>
Что меня любил.<br>
Сука, больше нет сил! <br>
Ты не простил,<br>
А я тебя люблю - <br>
Ну а ты любил?<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kosheleva-kristina/kristinaya-kosheleva-bolshe-net-sil.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
