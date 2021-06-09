<?php
$title = 'Zivert & NILETTO - Fly 2 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/bCn92IKdU8s'";
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

<span class='blue'>[Вступление, Zivert] Я2м/ - aaa</span><br>
I’m gone away.<br>
I’m gone away.<br>
I’m gone away.<br>
<br>
<span class='blue'>[Куплет 1, NILETTO] Х34м/ - аа...</span><br>
Самый лучший чилл, <br>
Если все вокруг молчит.<br>
Только музыка, <br>
Но она у нас внутри.<br>
Мы как светлячки, <br>
Загораемся в ночи.<br>
Бесконечный штиль <br>
Мы нашли. <span class='blue'>(Строка Х2м)</span><br>
<br>
<span class='blue'>[Переход, NILETTO] Тк2-4цмж? - aAaAAa</span><br>
Выше облаков вдыхай!<br>
Наши птицы порхают.<br>
Научи меня их любить в offline!<br>
Давай их сосчитаем!<br>
Там нас с тобой не хватает.<br>
Ко мне прижмись и улетай!<br>
<br>
<span class='blue'>[Припев, Zivert] Дк2-4цм/ - aa...</span><br>
I’m gone away.<br>
You never wait for me to stay.<br>
But as long as we have this day<br>
We can be brave and make it right.<br>
  <div class='refren'>I’m gone away.<br>
  You never wait for me to stay.<br>
  But as long as we have this day<br>
  We can be brave and make it right.<br>
  Only fly, only fly.</div>
<br>
<span class='blue'>[Пост-припев, Zivert] Дв445мм - abbabb</span><br>
We can build a wonder world.<br>
Just follow me and dance all night.<br>
‘Cause nothing stops the music in your mind (a-a-a)<br>
  <div class='refren'>We can build a wonder world.<br>
  Just follow me and dance all night.<br>
  ‘Cause nothing stops the music in your mind.</div>
<br>
<span class='blue'>[Куплет 2, NILETTO]</span><br>
Если это сон, <br>
То пускай в нем будет все.<br>
Время как песок, <br>
Ловим счастье, кто где смог.<br>
Опиши без слов, <br>
Что такое эта love,<br>
И за горизонт <br>
На двоих!<br>
<br>
<span class='blue'>[Переход, NILETTO]</span><br>
Выше облаков вдыхай!<br>
Наши птицы порхают.<br>
Научи меня их любить в offline.<br>
Давай их сосчитаем!<br>
Там нас с тобой не хватает.<br>
Ко мне прижмись и улетай!<br>
<br>
<span class='blue'>[Припев, Zivert]</span><br>
I’m gone away.<br>
You never wait for me to stay.<br>
But as long as we have this day<br>
We can be brave and make it right.<br>
  <div class='refren'>I’m gone away.<br>
  You never wait for me to stay.<br>
  But as long as we have this day<br>
  We can be brave and make it right.<br>
  Only fly, only fly.</div>
<br>
<span class='blue'>[Пост-припев, Zivert]</span><br>
We can build a wonder world.<br>
Just follow me and dance all night.<br>
‘Cause nothing stops the music in your mind (a-a-a)<br>
  <div class='refren'>We can build a wonder world.<br>
  Just follow me and dance all night.<br>
  ‘Cause nothing stops the music in your mind.</div>
<br>
<span class='blue'>[Финал, Zivert]</span><br>
Da-da-dance all night.<br>
Da-da-dance all night.<br>
Da-da-dance all night.<br>
Da-da-dance all night.<br>
Da-da-dance all night.<br>
Da-da-dance all night.<br>
‘Cause nothing stops the music in your mind.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/z/zivert/zivert-niletto-fly-2.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
