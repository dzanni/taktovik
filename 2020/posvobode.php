<?php
$title = 'ДДТ - Песня о Свободе (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/UavO9mYpfuU'";
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




<span class='blue'>[Куплет 1] Л2-4цммм/ - ababccc</span><br>
 Тошно душе <br>
 Среди равнодушных стен,<br>
 Холод-клише, <br>
 Сумерки перемен,<br>
 Они за столом поют <br>
 Что-то про свой уют<br>
 В сытую ночь к черному дню...<br>
<div class='refren'>
 Серая ночь, <br>
 В окнах дымит рассвет,<br>
 Солнце взойдет, <br>
 А, может быть, больше нет!<br>
 Ночь без любви, пусты <br>
 Между людьми мосты,<br>
 Нет ничего, есть только ты...</div>
<br>
<span class='blue'>[Припев] Ам2ж|ж - ABBA</span><br>
 Свобода, свобода, <br>
 Так много, так мало!<br>
 Ты нам рассказала, <br>
 Какого мы рода!<br>
<div class='refren'>
<span class='blue'>Ам2жж - ABAB</span><br>
  Ни жизни, ни смерти, <br>
 Ни лжи не сдаешься,<br>
 Как небо под сердцем, <br>
 В тоске моей бьешься...</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
 Темный подъезд, <br>
 Еще одного, одну,<br>
 Боль на полу <br>
 Капля за каплей в нас.<br>
 В этой ночи она <br>
 Рваная, как страна,<br>
 Сгребает золу остывающих глаз...<br>
<div class='refren'>
 Серая речь <br>
 В темном больном окне,<br>
 Сдаться и лечь <br>
 В серую ночь во мне -<br>
 Нет не могу, прости, <br>
 В мертвую жизнь врасти,<br>
 Нет, не она в этой горсти!</div>
<br>
<span class='blue'>[Припев]</span><br>
 Свобода, свобода, <br>
 Так много, так мало!<br>
 Ты нам рассказала, <br>
 Какого мы рода!<br>
<div class='refren'>
  Ни жизни, ни смерти, <br>
 Ни лжи не сдаешься,<br>
 Как небо под сердцем, <br>
 В тоске моей бьешься...</div>
 Свобода, свобода, <br>
 Так много, так мало!<br>
 Ты нам рассказала, <br>
 Какого мы рода!<br>
<div class='refren'>
  Ни жизни, ни смерти, <br>
 Ни лжи не сдаешься,<br>
 Как небо под сердцем, <br>
 В груди моей бьешься...</div>
<br>
 <span class='blue'><a href='https://www.gl5.ru/ddt-pesnya-o-svobode.html'
   target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
