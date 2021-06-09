<?php
$title = 'Нюша - Ночь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/n__e1MhQA6k'";
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

<span class='blue'>[Куплет 1] Л3мж, Х46жм - aBaB, XXx<br></span>
В твоих глазах музыка, <br>
А в руках моё сердце.<br>
Я не хочу знать наверняка, <br>
Сколько дашь ему биться.<br>
<div class='ref'>
Тело моё неспокойно,<br>
Дело тут не только в ритме -<br>
Я хочу, чтоб было круто вместе нам.</div>
<br>
<span class='blue'>[Припев] Х6цу1м? - aaaaa<br></span>
Эта ночь знает, как тебе помочь.<br>
Ты со мной, и чужие мысли прочь!<br>
Если хочешь, я знаю как тебе помочь!<br>
Эта ночь знает, как тебе помочь!<br>
Эта, эта ночь. <span class='blue'>(Строка Х3м)<br></span>
<br>
<span class='blue'>[Куплет 2]<br></span>
В твоих глазах музыка, <br>
А в зубах мои нервы.<br>
Я так хочу падать в облака. <br>
Эту нежность дал мне ты.<br>
<div class='ref'>
Тело моё неспокойно,<br>
Дело тут не только в ритме -<br>
Я хочу, чтоб было круто вместе нам.</div>
<br>
<span class='blue'>[Припев]<br></span>
Эта ночь знает, как тебе помочь.<br>
Ты со мной, и чужие мысли прочь!<br>
Если хочешь, я знаю как тебе помочь!<br>
Эта ночь знает, как тебе помочь!<br>
Эта, эта ночь...<br>
<br>
Э-эта ночь...<br>
Оу! <br>
Эта ночь знает, как тебе помочь.<br>
Ты со мной, и чужие мысли прочь!<br>
Если хочешь, я знаю как тебе помочь!<br>
Эта ночь знает, как тебе помочь!<br>
Эта, эта ночь.<br>
Эта ночь знает, как тебе помочь.<br>
Ты со мной, и чужие мысли прочь!<br>
Если хочешь, я знаю как тебе помочь!<br>
Эта ночь знает как тебе помочь!<br>
Эта, эта ночь...<br>
<br>
Знает как тебе помочь! <br>
Эта ночь, ночь, ночь!<br>
Эта ночь знает, как тебе помочь!<br>
Эта ночь знает, как тебе помочь!<br>
Эта, эта ночь...<br>
<br>
<span class='blue'><a href='https://genius.com/Nyusha-noch-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Отклонения от естественного ударения ради ритма:
"В твоих глазах музыкА", "Эту нежность дал мнЕ ты".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
