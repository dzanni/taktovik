<?php
$title = 'Егор Крид - Слеза (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/p5wbLXdVvgQ'";
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
<span class='blue'>[Интро]<br></span>
С тобой я не могу, и без тебя никак...<br>
С тобой я не могу, и без тебя никак...<br>
И снова упадет…<br>
Это Егор Крид...<br>
<br>
<span class='i'>- Блядь!.. Что те надо?<br>
- Ты можешь без меня?.. Я не могу... Я не могу!<br></span>
<br>
<span class='blue'>[Куплет 1] Л32мж, Дк34цж -  aBaBaBaB, ABAB<br></span>
Чувствую запах твой<br>
 На моей кофте.<br>
Закрою глаза рукой -<br>
 Ты снова напротив.<br>
Мы попрощались с тобой <br>
Не на той ноте.<br>
И снова под утро домой <br>
На автопилоте.<br>
<div class='refren'>О чёрт, меняю отели, <br>
Эти модели в постели мне так надоели! <span class='blue'>(Строка Дк5цж)</span><br>
Я снова растерян<br>
И снова пишу, но сотру сообщенья.</div>
<br>
<span class='blue'>[Переход] Тк2д? - AB'A'B'<br></span>
Чувства остались, <br>
Но не обращай внимания!<br>
Каждый раз, когда ты с ним, <br>
Не вспоминай меня!<br>
<br>
<span class='blue'>[Припев х2] Я3м - abababxb</span><br>
С тобой я не могу, <br>
И без тебя никак,<br>
Мой самый лучший друг <br>
И самый злейший враг!<br>
С тобой я не могу, <br>
И без тебя никак,<br>
И снова упадет <br>
Разбитая слеза.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Чувствами на душу<br>
Накричали в мгновенье,<br>
Мысли не напишу - <br>
Их заткнули сомненья.<br>
Выпью до дна любовь,<br>
До опьяненья<br>
Может и глупо, но <br>
Мне пох… на их мненье!<br>
<div class='refren'>
Остановите! Снова так тянет,<br>
К тому, что так давно не магнитит.<br>
История двух ненормальных,<br>
И кто же подскажет, как быть им?</div>
<br>
<span class='blue'>[Переход]<br></span>
Чувства остались, <br>
Но не обращай внимания!<br>
Каждый раз, когда ты с ним, <br>
Не вспоминай меня!<br>
<br>
<span class='blue'>[Припев х2]</span><br>
С тобой я не могу, <br>
И без тебя никак,<br>
Мой самый лучший друг <br>
И самый злейший враг!<br>
С тобой я не могу, <br>
И без тебя никак,<br>
И снова упадет <br>
Разбитая слеза.<br>
<br>
<span class='blue'>[Декламация] Тр2-4цдж? - A'A'XA'A'BxB<br></span>
Я тебя себе выдумал,<br>
Или себя тебе выдумал.<br>
Я придумал тот мир, в котором все ссоры<br>
Решат поцелуем, не криками.<br>
Но нет же, так хочется выиграть!<br>
Твой первый ход, в середине ставь крестик.<br>
А конец у игры постоянно вничью,<br>
Когда можно бы просто быть вместе.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
С тобой я не могу, <br>
И без тебя никак,<br>
Мой самый лучший друг <br>
И самый злейший враг!<br>
С тобой я не могу, <br>
И без тебя никак,<br>
И снова упадет <br>
Разбитая слеза.<br>
<br>
<span class='blue'><a href='http://on-hit.ru/texts/tekst-pesni-egor-krid-sleza/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Композиция была <a href='https://youtu.be/v8s5Uh47XbM'
target='_blank'>обвинена в плагиате</a> - заимствовании мелодии
Dua Lipa <a href='https://youtu.be/k2qgadSvNyU'
  target='_blank'>"New Rules"</a> (2017, более 1 млрд просмотров к моменту выхода
  клипа Крида).

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
