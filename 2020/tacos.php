<?php
$title = 'Little Big - Tacos (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/nUwTnJ8yFXY'";
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

<span class='blue'>[Вступление, Ильич] Х4м/ - aaaa<br></span>
Ay-yay-yay, I like to eat!<br>
Ay-yay-yay, I like do it!<br>
Ay-yay-yay, I like to eat!<br>
Ay-yay-yay, I like (AAAAAAA) <span class='blue'>(Строка Х3м)<br></span>
<br>
<span class='blue'>[Припев, Ильич и все] Л4цжж - ABAB<br></span>
Tacos, tacos, tacos, tacos,<br>
Tacos, tacos! Burrito, burrito!<br>
Tacos, tacos, tacos, tacos,<br>
Tacos, tacos! Burrito, burrito!<br>
  <div class='refren'>
  <span class='blue'>Л46цжж - ABAB<br></span>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, na- Burrito, burrito!<br>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, na- Burrito, burrito!</div>
<br>
<span class='blue'>[Куплет 1, Ильич, Соня и все] Тк4цмм - abab<br></span>
I like to eat (Woop), you like to eat (Woop)<br>
Everybody wanna have a dinner like me<br>
I like to eat (Yeah), you like to eat (Yeah)<br>
Everybody wanna have a dinner like me (Woop)<br>
  <div class='refren'>
  <span class='blue'>Х4цу12жм - AbAb<br></span>
  "Yum, yum, yum", everybody:<br>
  Yum, yum, yum!<br>
  "Yum, yum, yum", everybody:<br>
  Yum, yum, yum! (AAAAAAA)</div>
<br>
<span class='blue'>[Припев, Ильич и все]<br></span>
Tacos, tacos, tacos, tacos,<br>
Tacos, tacos! Burrito, burrito!<br>
Tacos, tacos, tacos, tacos,<br>
Tacos, tacos! Burrito, burrito!<br>
  <div class='refren'>Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, na- Burrito, burrito!<br>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, na- Burrito, burrito!</div>
<br>
<span class='blue'>[Куплет 2, Ильич, Соня и все]<br></span>
I like to eat (Yeah), you like to eat (Yeah)<br>
Everybody wanna eat salts and sweets (Woop)<br>
I like to eat (Yeah), you like to eat (Yeah)<br>
Everybody wanna eat salts and sweets (Woop)<br>
  <div class='refren'>
  <span class='blue'>Х2ж/ - XXXx<br></span>
  Pizza! Pizza!<br>
  Curry! Curry!<br>
  Sushi! Sushi!<br>
  Borsch! <span class='blue'>(Строка Х1м)<br></span></div>
<br>
<span class='blue'>[Переход, Ильич и Соня]<br></span>
(Wooh, uh! Wooh, uh!) Ay-yay-yay, I like to eat!<br>
(Wooh, uh! Wooh, uh!) Ay-yay-yay, I like do it!<br>
(Wooh, uh! Wooh, uh!) Ay-yay-yay, I like to eat!<br>
(Wooh, uh!) Ay-yay-yay, I like... Everybody!<br>
(Wooh, uh! Wooh, uh!) Ay-yay-yay, I like to eat!<br>
(Wooh, uh! Wooh, uh!) Ay-yay-yay, I like do it!<br>
(Wooh, uh! Wooh, uh!) Ay-yay-yay, I like to eat!<br>
(Wooh, uh!) Ay-yay-yay, I like (AAAAAAA)<br>
<br>
<span class='blue'>[Припев, Ильич и все]<br></span>
Tacos, tacos, tacos, tacos,<br>
Tacos, tacos! Burrito, burrito!<br>
Tacos, tacos, tacos, tacos,<br>
Tacos, tacos! Burrito, burrito!<br>
  <div class='refren'>Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, na- Burrito, burrito!<br>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, nachos,<br>
  Nachos, nachos, nachos, na- Burrito, burrito!</div>
<br>
<span class='blue'>[Финал]<br></span>
Ay-yay-yay, I like to eat!<br>
Ay-yay-yay, I like do it!<br>
Ay-yay-yay, I like to eat!<br>
Ay-yay-yay, I like (AAAAAAA)<br>
Ay-yay-yay, I like to eat!<br>
Ay-yay-yay, I like do it!<br>
Ay-yay-yay, I like to eat!<br>
Ay-yay-yay, I like...<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/l/little_big/little-big-tacos.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
