<?php
$title = 'Zivert - Многоточия (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/1OOgGxYYKP0'";
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
<span class='blue'>[Интро] Дк3дд? - A'B'A'B'</span><br>
Они так здорово бродят по улицам -<br>
Влюблённые, медленно, с радостью.<br>
Верят, что все обязательно сбудется <span class='blue'>(Строка Дк4цд)</span><br>
Да как им хватает наглости!<br>
  <div class='refren'>
  Чувствуют себя нужными.<br>
  Свет им на лица падает.<br>
  Сегодня просто простужена -<br>
  Обычно они меня радуют.</div>
<br>
<span class='blue'>[Куплет 1] Дк4343цм/м - aabb</span><br>
Полутона, недо-Луна,<br>
Не идеально влюблена.<br>
Кто не спеша, тот чувствует шанс.<br>
Не всегда можно убежать.<br>
<br>
<span class='blue'>[Припев х4] Тр3мм - abab</span><br>
Если не о чем больше молчать, <br>
Время уже не летит -<br>
Нужно уметь отпускать, <br>
Нужно кому-то уйти.<br>
<br>
<span class='blue'>[Куплет 2] Тк3дм? - A'bA'b</span><br>
Знаю, что любить сложно меня.<br>
Ты веришь, заживем однажды.<br>
Вместо слов — многоточия,<br>
Гнал бы лучше ты прочь меня!<br>
  <div class='refren'>Знаю, что любить сложно меня — <br>
  Не взаимный счет. <br>
  Ты веришь, заживем однажды, <br>
  Но рана не заживет!</div>
Вместо слов — многоточия, <br>
Не хочется ночевать.<br>
Гнал бы лучше ты прочь меня, <br>
Но ты стал среди прочих сам.<br>
<br>
<span class='blue'>[Припев х4]</span><br>
Если не о чем больше молчать, <br>
Время уже не летит -<br>
Нужно уметь отпускать, <br>
Нужно кому-то уйти.<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/z/zivert/zivert-mnogotochiya.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма "г=д": "слОжно меня - многотОчия".

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
