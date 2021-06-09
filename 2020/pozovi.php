<?php
$title = 'Сабина Ахмедова - Позови меня с собой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/s3DLQCJXMeQ'";
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

<span class='i'>
- Найти правильную женщину. Добиться ее внимания. Удердать рядом. Это вызов!<br>
- Значит, я твой вызов?<br>
<br>
- Самое сложное...<br>
<br>
- Ты когда входишь в комнату, все мужики сворачивают голову.<br>
- Неправда!<br>
- Правда! Они тебя хотят, а ты недоступна!</span><br>
<br>
<span class='blue'>[Куплет 1] Л52жм43м/ - aBaBccc</span><br>
Снова от меня ветер злых перемен<br>
Тебя уносит,<br>
Не оставив мне даже тени взамен,<br>
И он не спросит.<br>
Может быть, хочу улететь я с тобой<br>
Жёлтой осенней листвой,<br>
Птицей за синей мечтой.<br>
<br>
<span class='blue'>[Припев] Х4мж - aBaB</span><br>
Позови меня с собой,<br>
Я приду сквозь злые ночи,<br>
Я отправлюсь за тобой,<br>
Что бы путь мне ни пророчил.<br>
<span class='blue'>Х4446мжмм - aXaa</span><br>
Я приду туда, где ты<br>
Нарисуешь в небе солнце,<br>
Где разбитые мечты<br>
Обретают снова силу высоты. <span class='blue'>(Строка Х6м)</span><br>
<br>
<span class='i'>- Я же бездна! А значит, без стыда и без совести!</span><br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Сколько я искала тебя сквозь года<br>
В толпе прохожих!<br>
Думала, ты будешь со мной навсегда,<br>
Но ты уходишь.<br>
Ты теперь в толпе не узнаешь меня,<br>
Только, как прежде, любя, <br>
Я отпускаю тебя.<br>
<br>
<span class='blue'>[Припев]</span><br>
Позови меня с собой,<br>
Я приду сквозь злые ночи,<br>
Я отправлюсь за тобой,<br>
Что бы путь мне ни пророчил.<br>
Я приду туда, где ты<br>
Нарисуешь в небе солнце,<br>
Где разбитые мечты<br>
Обретают снова силу высоты.<br>
<br>
<span class='i'>- Не люблю уже! Не люблю!<br>
- Ну, а [неразб.] своего ты любишь?<br>
- И его не люблю! Никого не люблю!<br></span>
<br>
Каждый раз, как только спускается ночь<br>
На спящий город,<br>
Я бегу из дома бессонного прочь<br>
В тоску и холод.<br>
Я ищу среди снов безликих тебя,<br>
Но в двери нового дня<br>
Я вновь иду без тебя.<br>
<br>
<span class='blue'>[Припев]</span><br>
Позови меня с собой,<br>
Я приду сквозь злые ночи,<br>
Я отправлюсь за тобой,<br>
Что бы путь мне ни пророчил.<br>
Я приду туда, где ты<br>
Нарисуешь в небе солнце,<br>
Где разбитые мечты<br>
Обретают снова силу высоты.<br>
<br>
<span class='i'>- Ты моя женщина! Запомни!<br></span>
<br>
<span class='blue'>[Припев х2]</span><br>
Позови меня с собой,<br>
Я приду сквозь злые ночи,<br>
Я отправлюсь за тобой,<br>
Что бы путь мне ни пророчил.<br>
Я приду туда, где ты<br>
Нарисуешь в небе солнце,<br>
Где разбитые мечты<br>
Обретают снова силу высоты.<br>
<br>
<span class='blue'><a href='https://d2.fullmp3.net/text/42222-palina-pozovi-menya-s-soboy.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Песня для сериала "Содержанки", заимствованная из репертуара Аллы Пугачевой.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
