<?php
$title = 'Noize MC - Грабли (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/UKxfpyYbh_4'";
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

<span class='blue'>[Куплет 1] Дк2-4цжд - ABB'BA'BA'B <br></span>
В этом году я вёл себя плохо:<br>
Не слушался, так себе кушал.<br>
Дедушка, ты будешь в ужасе!<br>
Как в прошлом году, даже хуже!<br>
<div class='refren'>
Говорил слова нехорошие,<br>
А те, что дал, все нарушил.<br>
Ноль выводов из ошибок прошлого, <span class='blue'>(Строка Дк3цд)</span><br>
Только выводок новых грешков ещё взял на душу. <span class='blue'>(Строка Дк5цж)</span></div>
  <span class='blue'>Дк2-4цжм - AbAb abXb<br></span>
Хулиганил, дразнился, дрался, напивался,<br>
Буянил, по полной жёг.<br>
Каким был, таким и остался.<br>
По-другому не смог.<br>
<div class='refren'>
Пожалуйста, положи для меня <span class='blue'>(Строка Дк3цм)</span><br>
Меня нового в свой мешок,<br>
А я залезу на табуретку <br>
И прочту тебе свой стишок!</div>
<br>
<span class='blue'>[Припев] Дк24цж - XAXAXBXB<br></span>
Я все исправлю (эй), <br>
Починю и налажу,<br>
Если снег новогодний <br>
На прошлогодние грабли не ляжет.<br>
Так что я не замечу<br>
До боли знакомых зубцов под подошвой,<br>
Если следующий год,<br>
Как всегда снова вдруг не окажется прошлым.<br>
М-м, е<br>
М-м, е<br>
М-м, е<br>
М-м, я<br>
<br>
<span class='blue'>[Куплет 2] (Дк2-4цжд - AAAA A'AAA')<br></span>
Я хотел бы найти себя утром под ёлкой<br>
Сильным, хорошим и добрым,<br>
В подарочной упаковке.<br>
С локтями, лентой прижатыми к рёбрам,<br>
<div class='refren'>
С чистой совестью, разумом, сердцем и лёгкими<br>
Простым и глубоким,<br>
Без желчных речей с подоплёкой,<br>
Без глума над недалёкими.</div>
<span class='blue'>(Дк2-4цжм - ABAA xaBa)<br></span>
Понявшим, принявшим, простившим и отпустившим.<br>
В чулке у камина - новая карма.<br>
Харе Рама, Ом, Харе Кришна!<br>
Красношубый всевышний<br>
<div class='refren'>
Пролез бы в трубу<br>
И под ёлку меня положил!<br>
Классный был бы подарок, <br>
Жаль, его я не заслужил!</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Я все исправлю (эй), <br>
Починю и налажу,<br>
Если снег новогодний <br>
На прошлогодние грабли не ляжет.<br>
Так что я не замечу<br>
До боли знакомых зубцов под подошвой,<br>
Если следующий год,<br>
Как всегда снова вдруг не окажется прошлым.<br>
<br>
М-м, е<br>
М-м, е<br>
М-м, е<br>
М-м, я<br>
<br>
<span class='blue'><a href="https://genius.com/Noize-mc-rake-lyrics"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
