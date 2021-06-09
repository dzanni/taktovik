<?php
$title = 'GRIVINA - Я хочу (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/nhyy3cTUhbM'";
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

<span class='blue'>[Куплет 1] Тк32ж - XABBA</span><br>
Я надену белье с кружевами,<br>
Твои руки тянутся к телу.<br>
Прижмись ко мне ближе, <br>
Поцелуй ниже!<br>
Я этого давно так хотела.<br>
<div class='refren'>Снова бессонные ночи,<br>
Твой запах с ума меня сводит.<br>
Ты нужен мне очень, <br>
С тобой хочу жестче,<br>
Меня все так это заводит!</div>
<br>
<span class='blue'>[Переход] Дк23м? - abab</span><br>
Я хочу, так хочу,<br>
Я хочу с тобой на всю ночь!<br>
Зацелуй, меня всю!<br>
Я знаю, ты мне сможешь помочь!<br>
<div class='refren'>
Я хочу так хочу,<br>
Я хочу тебя до утра!<br>
Я с тобой улечу,<br>
Где не был ни ты, ни я!</div>
<br>
<span class='blue'>[Припев] Дк2-4цж - aaaa</span><br>
Я слышу, как дышишь,<br>
Ты пытаешься тише.<br>
Тише, тише, тише,<br>
Я ближе, ближе, ближе.<br>
<div class='refren'>
Слышу, как ты дышишь,<br>
Пытаешься тише.<br>
Тише, тише, тише,<br>
Что же сегодня нами движет?</div>
<br>
<span class='blue'>[Куплет 2] Тк2жм - XAbbA</span><br>
Разбросаны вещи,<br>
Разбита посуда.<br>
Двигаемся в такт, <br>
Ты мой - это факт<br>
И я твоей буду!<br>
<div class='refren'>
  <span class='blue'>Тк32жм - XaBBa</span><br>
  Видимо, в тебя я влюбилась.<br>
А может, это просто игра?<br>
Не бойся быть грубым,<br>
Хватая за руки,<br>
Мне очень нужна доза тебя!</div>
<br>
<span class='blue'>[Переход]</span><br>
Я хочу, так хочу,<br>
Я хочу с тобой на всю ночь!<br>
Зацелуй, меня всю!<br>
Я знаю, ты мне сможешь помочь!<br>
<div class='refren'>
Я хочу так хочу,<br>
Я хочу тебя до утра!<br>
Я с тобой улечу,<br>
Где не был ни ты, ни я!</div>
<br>
<span class='blue'>[Припев]</span><br>
Я слышу, как дышишь,<br>
Тише, тише, тише.<br>
Слышу, как ты дышишь.<br>
Тише, тише, тише.<br>
Что же сегодня нами движет?<br>
<br>
Я слышу, как дышишь,<br>
Ты пытаешься тише.<br>
Тише, тише, тише,<br>
Я ближе, ближе, ближе.<br>
<div class='refren'>Слышу, как ты дышишь,<br>
Пытаешься тише.<br>
Тише, тише, тише,<br>
Что же сегодня нами движет?</div>
<br>
Я слышу, как дышишь,<br>
Тише, тише, тише.<br>
Слышу, как ты дышишь.<br>
Тише, тише, тише.<br>
Что же сегодня нами движет?<br>
<br>
<span class='blue'><a href='https://perevod-pesni.ru/pesnya/pokazat/5345/grivina/tekst-perevod-pesni-ya-hochu-ya-nadenu-bele-s-kruzhevami/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
