<?php
$title = 'Стас Михайлов, Artik & Asti - Возьми мою руку (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/zWrSzE_dQ5o'";
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

<span class='blue'>[Куплет 1] Л1-4цмд? - aaaB'XaaaB'</span><br>
С тобой вдвоем эти пути <br>
Еще пройдем, только живи,<br>
Ведь ради любви<br>
Возвращаются.<br>
  <div class='refren'>И где бы ты ни был,</div>
Я остаюсь с тобой, мон ами,<br>
Умоляю тебя, не уходи!<br>
Те, кто любят, как мы,<br>
Не прощаются.<br>
  <div class='refren'>
  <span class='blue'>Дк2жм - AAAx</span><br>
  Ты нужен, как воздух<br>
  Знаю, просто -<br>
  До и после<br>
  Будешь ты моей!</div>
<br>
<span class='blue'>[Припев] Ам3м/м? - aabb</span><br>
Возьми мою руку скорей,<br>
Чтоб сердце забилось сильней.<br>
По краю хожу за тобой,<br>
У неба прошу, чтобы быть с тобой. <span class='blue'>(Строка Дк4цм)</span><br>
  <div class='refren'>Возьми мою руку скорей,<br>
  Чтоб сердце забилось сильней.<br>
  По краю хожу за тобой,<br>
  У неба прошу, чтобы быть с тобой.</div>
Быть с тобой!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
На память мне видела сны,<br>
Что у меня есть еще ты,<br>
Но вот как, увы,<br>
У нас получается.<br>
  <div class='refren'>Но слышишь, ты просто знай,</div>
Я остаюсь с тобой, мон ами,<br>
Умоляю тебя, не уходи,<br>
Те, кто любят, как мы,<br>
Не прощаются.<br>
  <div class='refren'>Ты нужна мне, как воздух<br>
  Знаю, просто, <br>
  До и после<br>
  Будешь ты моей!</div>
<br>
<span class='blue'>[Припев]</span><br>
Возьми мою руку скорей,<br>
Чтоб сердце забилось сильней.<br>
По краю хожу за тобой,<br>
У неба прошу, чтобы быть с тобой.<br>
  <div class='refren'>Возьми мою руку скорей,<br>
  Чтоб сердце забилось сильней.<br>
  По краю хожу за тобой,<br>
  У неба прошу, чтобы быть с тобой.</div>
Быть с тобой!<br>
<br>
<span class='blue'>[Куплет 3] Дк2-4цжж?, Дк3-4цжм - ABAB, AbAb</span><br>
Ты светишь мне ярче, чем звезды.<br>
Ярче, чем солнце на небосводе<br>
И только с тобой я живой,<br>
С тобой в небо, как птица свободен.<br>
  <div class='refren'>Ты даришь мне крылья, ведь я летаю,<br>
  Это небо в глазах твоих.<br>
  И будто бы целый мир замер <br>
  Сейчас только для нас двоих.</div>
Все в мире не вечно,<br>
А вечно лишь только наше мгновенье.<br>
Держу тебя за руку все крепче,<br>
Космическое притяженье.<br>
  <div class='refren'>Мы любили друг друга  <br>
    Во всех предыдущих жизнях, да, я уверен, <span class='blue'>(Строка Дк5цж)</span><br>
  Мы будем во всех параллелях,  <br>
  Сквозь время. <span class='blue'>(Строка Дк1ж)</span></div>
<br>
<span class='blue'>[Припев]</span><br>
Возьми мою руку скорей,<br>
Чтоб сердце забилось сильней.<br>
По краю хожу за тобой,<br>
У неба прошу, чтобы быть с тобой.<br>
  <div class='refren'>Возьми мою руку скорей,<br>
  Чтоб сердце забилось сильней.<br>
  По краю хожу за тобой,<br>
  У неба прошу, чтобы быть с тобой.</div>
Быть с тобой!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/bi2-depressiya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
