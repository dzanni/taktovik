<?php
$title = 'T-Fest & Скриптонит - Ламбада (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/4-Pp-MEdKIA'";
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

<span class='blue'>[Куплет 1: T-Fest] Тк4цж? - ABAB, AAAA<br></span>
Раздеваю догола малую. <span class='blue'>(Строка Тк3ж)<br></span>
Я раньше не видал её аппаратуру.<br>
Она хочет пить, хочет маракуйю.<br>
А я хочу ее, если хочу, то буду.<br>
<div class='refren'>
Каждый день - праздник. <span class='blue'>(Строка Тк2ж)<br></span>
Она говорит, что мой взгляд её дразнит.<br>
Снова закипит в охуевшем экстазе.<br>
Я в её поле фол, я в подкате, но сзади.</div>

(Э, вау) «каждый день делай» - это мое кредо!<br>
Я убираю ихних звезд, сдалав чистым небо.<br>
Все твои понты для нас уже давно не лэвел.<br>
Ты удивишься, но у нас всё ок, базарить нехуй!<br>
<div class='refren'>
I got 99 problems, <span class='blue'>(Строка Тк3ж)<br></span>
Но под всем этим огнём, нет, я не плавлюсь.<br>
Ты такая нежная, но я для тебя кактус.<br>
Суки ожидают, что когда-то я расслаблюсь (нет...)<br>
(Нет, нет, нет, нет, нет)<br>
(Нет, нет, нет, нет, нет)<br>
(Нет, нет, нет, нет, нет)</div>
<br>
<span class='blue'>[Припев x4: T-Fest] Тк1-3жм - AAAx<br></span>
Ламбада, <br>
Мы танцуем у бара,<br>
Весь день я рядом,<br>
Но еще тебя не видел на мне.<br>
<br>
<span class='blue'>[Куплет 2: Скриптонит] Тк4ц2мж - aaBaaB<br></span>
Я ронин для стервятников над ней (ей), <span class='blue'>(Строка Тк3м)<br></span>
Мой меч в огне, <br>
Бабки в воздух - дождь, мы как будто иудеи.<br>
В сумке есть конфеты, но они не для детей.<br>
С праздником, сучки! (сучки, сучки!)<br>
<div class='refren'>
Я на час, может, на три,<br>
Я достану свою трубку, и мы окажемся внутри<br>
Этой сучки (сучки).<br>
Да ты только посмотри!<br>
Она думает, нет бабок, на, возьми пачку, утри <br>
Носяндру этой сучке (сучке, сучке)</div>
<br>
<span class='blue'>Тк32мж -xXXxx<br></span>
Че они тут возомнили о себе?<br>
Спать будешь дома!<br>
Иди шевелить задом,<br>
Из моей кухни вон!<br>
Эй, Ти, покажи, как тут!<br>
<br>
<span class='blue'>[Припев x4: T-Fest] <br></span>
Ламбада, <br>
Мы танцуем у бара,<br>
Весь день я рядом,<br>
Но еще тебя не видел на мне.<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/c1/skriptonit/6915-tfest-skriptonit-lambada-text-pesni.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
