<?php
$title = 'Руки Вверх! - Плачешь в темноте (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/an7t6eBbGm0'";
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

<span class='blue'>[Куплет 1] Х34мж - aBaB</span><br>
Я летал во сне,<br>
Я летел к тебе по звездам.<br>
Прикоснись ко мне, <br>
Пока нам еще всё можно.<br>
<br>
<span class='blue'>[Припев х2] Я3433м - aaaa</span><br>
Но дом наш опустел,<br>
И слезы на твоем лице.<br>
И ты плачешь в темноте, <br>
Ты плачешь в темноте...<br>
<br>
Ты плачешь в темноте, <br>
Ты плачешь в темноте...<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Как мне дальше жить<br>
С этой бесконечной болью?<br>
Как могли разбить <br>
Всё, что звали мы любовью?<br>
<br>
<span class='blue'>[Припев]</span><br>
Но дом наш опустел, <br>
И стынет ужин на плите.<br>
Ты плачешь в темноте, <br>
Ты плачешь в темноте!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Сожжены мосты <br>
И тебе совсем не спится.<br>
Всё, что хочешь ты -<br>
Просто взять и растворится.<br>
<br>
<span class='blue'>[Припев]</span><br>
Но дом наш опустел, <br>
И слезы на твоем лице.<br>
А ты плачешь в темноте, <br>
Ты плачешь в темноте.<br>
<br>
Ты плачешь в темноте, <br>
Где-то плачешь в темноте...<br>
<br>
<span class='blue'>[Повтор куплета 1]</span><br>
И я летал во сне,<br>
Я летел к тебе по звездам.<br>
Прикоснись ко мне, <br>
Пока нам еще всё можно.<br>
<br>
<span class='blue'>[Припев]</span><br>
Но дом наш опустел, <br>
И слезы на твоем лице.<br>
А ты плачешь в темноте, <br>
Ты плачешь в темноте...<br>
<br>
Плачешь в темноте...<br>
<br>
Но дом наш опустел, <br>
И слезы на твоем лице.<br>
И ты плачешь в темноте, <br>
Ты плачешь в темноте...<br>
<br>
<span class='blue'>Источник: расшифровка клипа</span><br>



<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
