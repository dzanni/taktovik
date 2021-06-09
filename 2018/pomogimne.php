<?php
$title = 'Марьяна Ро - Помоги мне (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/jIiyI50TASc'";
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

<span class='blue'>[Куплет 1] Тк23мж - aaBaaB<br></span>
Расскажи о том, <br>
Что не сбудется потом,<br>
Все пройдет, я знаю, знаю.<br>
Так хотел один, <br>
Но ты мне необходим,<br>
Молча замираю, таю.<br>
<br>
<span class='blue'>[Переход] Дк4ц2дж? - A'BA'A'BA'<br></span>
Рядом быть хотя бы мысленно,<br>
Это так сложно,<br>
Ты — зависимость, <br>
Мы на расстояньи выстрела.<br>
Даже, возможно, <br>
Могу выстрелить.<br>
<div class='refren'>
  <span class='blue'>[Переход] Дк1-4цд/ - A'A'B'B'<br></span>
Так осталось мало времени,<br>
Где-то на грани потеряны,<br>
Но зачем мы это сделали?<br>
Сделали…</div>
<br>
<span class='blue'>[Припев] Дк2-4цж/ - AbbAA<br></span>
Я же кричу тебе: «Помоги мне!»<br>
Сломаны стены, <br>
Мы вне системы.<br>
Так не хочу забыть твое имя,<br>
Я же кричу тебе: «Помоги мне!»<br>
<div class='refren'>
Помоги мне…<br>
Я же кричу тебе: «Помоги мне!»<br>
Помоги мне…<br>
Я же кричу тебе: «Помоги мне!»</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Расскажи, когда <br>
Просыпались города,<br>
Незаметной тенью, тенью.<br>
Просто помолчи, <br>
Умоляю, не кричи!<br>
Я не знаю, кто мы, где мы.<br>
<br>
<span class='blue'>[Переход]<br></span>
Рядом быть хотя бы мысленно,<br>
Это так сложно,<br>
Ты — зависимость, <br>
Мы на расстояньи выстрела.<br>
Даже, возможно, <br>
Могу выстрелить.<br>
<div class='refren'>
Так осталось мало времени,<br>
Где-то на грани потеряны,<br>
Но зачем мы это сделали?<br>
Сделали…</div>
<br>
<span class='blue'>[Припев]<br></span>
Я же кричу тебе: «Помоги мне!»<br>
Сломаны стены, <br>
Мы вне системы.<br>
Так не хочу забыть твое имя,<br>
Я же кричу тебе: «Помоги мне!»<br>
<div class='refren'>
Помоги мне…<br>
Я же кричу тебе: «Помоги мне!»<br>
Помоги мне…<br>
Я же кричу тебе: «Помоги мне!»</div>
<br>
<span class='blue'><a href='https://on-hit.ru/texts/tekst-pesni-marjana-ro-pomogi-mne/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
