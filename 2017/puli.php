<?php
$title = 'Луна - Пули (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/agngX2PJBEs'";
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

<span class='blue'>[Куплет 1] Тк4цжм - ABABссDсD<br></span>
На мне следы от твоих мыслей,<br>
Я замечаю их рисунки.<br>
Уже ночь, так почему тебе не спится?<br>
И ты так хочешь гладить мою спинку.<br>
<div class='ref'>На мне следы от твоей лжи.<br>
Я так прошу тебя - хотя бы ночью мне не ври.<br>
Зрачки, как пули, руки отпусти и сердце в клочья. <span class='blue'> (Строка Тк5цж)</span><br>
Я так прошу - хотя бы ночью мне не ври.<br>
Зрачки, как пули, сердце в клочья.</div>
<br>
<span class='blue'>[Припев] Л5ц2мд aaB'<br></span>
Пули летят, летят в сторону мою.<br>
Пули твоей любви, раздень меня всю,<br>
И я как голая.<br>
Пули летят, летят в сторону мою.<br>
Пули твоей любви, раздень меня всю,<br>
И я как голая.<br>
Пули летят, летят в сторону мою,<br>
Пули твоей любви, раздень меня всю,<br>
И я как голая.<br>
<br>
<span class='blue'>[Куплет 2] Тк4цж - AAAAXBB<br></span>
На мне следы твоих сомнений.<br>
Я замечаю на стене дурные тени.<br>
Уже ночь, я чувствую тебя мгновенье. <span class='blue'> (Строка Тк5цж)</span><br>
Во сне ты смотришь на мои колени.<br>
<div class='ref'>
На мне следы твоих желаний,<br>
Я так прошу тебя, себя не бойся!<br>
Руки отпусти, и посмотри, как сердце бьется.</div>
<br>
<span class='blue'>[Припев]<br></span>
Пули летят, летят в сторону мою.<br>
Пули твоей любви, раздень меня всю,<br>
И я как голая.<br>
Пули летят, летят в сторону мою.<br>
Пули твоей любви, раздень меня всю,<br>
И я как голая.<br>
<br>
<span class='blue'>[Куплет 3] Тк4ц3жд?, Х3ж - AB'aB', ABAABA<br></span>
На моих губах алая помада.<br>
Ночка будет тёмная.<br>
Твоя игрушка смотрит на меня,<br>
И я уже совсем не скромная.<br>
<div class='ref'>
Скорость набираешь.<br>
Снова под контролем.<br>
Ты меня увозишь. <br>
Делай всё, что хочешь -<br>
Я тебе позволю. <br>
Делай всё, что хочешь!</div>
<br>
<span class='blue'>[Аутро]<br></span>
Делай всё, что хочешь!<br>
Делай всё, что хочешь!<br>
Делай всё, что хочешь!<br>
Делай всё, что хочешь!<br>
<br>
Музыка: Alessandro Del Shucko<br>
Слова: Kristina Bardash<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/l/luna_ua/puli.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. м = ж (помада - на меня)<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
