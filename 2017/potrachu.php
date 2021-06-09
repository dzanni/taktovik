<?php
$title = 'Егор Крид - Потрачу (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/JYd29LxU3-c'";
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

<span class='blue'>[Куплет 1] Тк4цм/ж - aa, AA</span><br>
Я бы улетел с тобою, не брав парашюты,<br>
Убрал все стрелки на часах, не считая минуты.<br>
В этой малышке столько секса, меня бес попутал,<br>
Меня так мАнит, как кусаешь мои губы грубо.<br>
Мы разливаем по бокалам самый лучший сорт,<br>
Ты мне пишешь смс: икс-о, икс-о, икс-о! (Икс-о, икс-о, икс-о!)<br>
Самый сладкий сон, самый сладкий дым,<br>
Тут так много дам, но мне нужна лишь ты!<br>
<br>
<span class='blue'>[Припев] Тк4цм - abab</span><br>
И я потрачу на тебя свой самый лучший день (лучший день)!<br>
Потрачу на тебя свою лучшую ночь!<br>
Потрачу все, чтобы тебя раздеть,<br>
Сегодня я хочу напиться... (Я!) <span class='blue'>(Строка Тк2ж)</span><br>
<div class='refren'>
И я потрачу на тебя свой самый лучший день!<br>
И я потрачу на тебя свою лучшую ночь!<br>
Потрачу все, потрачу все, чтобы тебя раздеть.<br>
Сегодня я хочу напиться за твою любовь.</div>

И я потрачу на тебя свой самый лучший день.<br>
И я потрачу на тебя свою лучшую ночь.<br>
Потрачу все, потрачу все, чтобы тебя раздеть.<br>
Сегодня я хочу напиться за твою любовь.<br>
<br>
<span class='blue'>[Куплет 2] Тк2ж - AAAAAAAA</span><br>
Тише, тише, <br>
Ты все ближе-ближе!<br>
Люблю и ненавижу, <br>
Я люблю и ненавижу.<br>
С тобою никого не слышу, <span class='blue'>(Строка Тк3ж)</span><br>
Никого не вижу.<br>
Наша любовь все выше, <br>
Поцелуи ниже.<br>
<div class='refren'>
  <span class='blue'>Тк3м? - aaabbb</span><br>
Но ты перевернула вверх дном. <br>
Я тупо забыл обо всём, <br>
И мысли теперь об одном (Е!)<br>
Но ты (но ты), самый крепкий мой алкоголь (самый крепкий мой), <span class='blue'>(Строка Тк4цм)</span><br>
Допиваю, запиваю тобой, <br>
И мы выезжаем домой (домой, домой…)<br>
<br>
<span class='blue'>[Припев х4]</span><br>
И я потрачу на тебя свой самый лучший день!<br>
И я потрачу на тебя свою лучшую ночь!<br>
Потрачу все, потрачу всё, чтобы тебя раздеть,<br>
Сегодня я хочу напиться за твою любовь!<br>
<br>
This! <br>
Plug in on the beat! <br>
<br>
<span class='blue'><a href="https://perevod-pesni.ru/pesnya/pokazat/1647/egor-krid/tekst-perevod-pesni-potrachu/"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
