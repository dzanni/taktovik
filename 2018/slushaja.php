<?php
$title = 'Владимир Пресняков - Слушая тишину (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/A_yu8cLGquk'";
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
<span class='blue'>[Куплет 1] Х34/3жм - AbAb</span><br>
Долгая дорога <br>
По реке без берегов.<br>
Я прошу немного, <br>
О тебе лишь пару слов.<br>
<div class='refren'>Разрезают воздух <br>
Мне твои шаги,<br>
Высохли все слёзы <br>
В русле той реки.</div>
Я тебя запомнил, <br>
Но постель пуста.<br>
Разбивают волны <br>
Замки из песка.<br>
<div class='refren'>Ревностью наполнен, <br>
Нет ничьей вины.<br>
Отпустил тебя на <br>
Все четыре стороны.</div>
<br>
<span class='blue'>[Припев] Тк2м? - abab</span><br>
Слушая тишину, <br>
Встречная полоса.<br>
Без тебя не могу:<br>
Моя песня в два голоса.<br>
<div class='refren'>Не замыкая круг, <br>
Не замедляя бег -<br>
Мне одна дорога,<br>
И та ведёт к тебе!</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Мы прошли так много, <br>
Моё сердце пополам.<br>
Не измерить столько, <br>
Лишь один туман.<br>
<div class='refren'>И под небосводом <br>
Мы летим на свет.<br>
Ты моя свобода - <br>
Вот и весь ответ!<br>
<br>
<span class='blue'>[Припев]</span><br>
Слушая тишину, <br>
Встречная полоса.<br>
Без тебя не могу:<br>
Моя песня в два голоса.<br>
<div class='refren'>Не замыкая круг, <br>
Не замедляя бег -<br>
Мне одна дорога,<br>
И та ведёт к тебе!</div>
<br>
<span class='blue'>[Бридж]</span><br>
Долгая дорога <br>
По реке без берегов...<br>
<br>
<span class='blue'>[Припев]</span><br>
Слушая тишину, <br>
Встречная полоса.<br>
Без тебя не могу:<br>
Моя песня в два голоса.<br>
<div class='refren'>Не замыкая круг, <br>
Не замедляя бег -<br>
Мне одна дорога,<br>
И та ведёт к тебе!</div>
Мне одна дорога, <br>
И та ведёт к тебе!<br>
Мне одна дорога, <br>
И та ведёт к тебе!<br>
<br>
Слова и музыка: Кирилл Павлов<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/vladimir-presnyakov-slushaya-tishinu.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма д=м: "полосА - гОлоса".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
