<?php
$title = 'Настя Каменских - Lomala (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ssmBWdVyG-8'";
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

<span class='blue'>[Куплет 1] Дв6ц3жм - AbAb<br></span>
Представляю я, как ты меня целуешь,<br>
Целуешь ты меня.<br>
Как по телу пальцем ты меня рисуешь,<br>
Рисуешь ты меня.<br>
<div class='refren'>
  <span class='blue'>Я45//6м - AbAb<br></span>
Придёт тоска, стучит в висках<br>
И ноет так, что не могу дышать!<br>
Тоска, тоска... Уйди, тоска!<br>
Я даже со слезами буду танцевать.</div>
<br>
<span class='blue'>[Переход] Л4цм - aa<br></span>
Буду танцевать, я буду танцевать,<br>
Я даже со слезами-зами буду танцевать!<br>
Буду танцевать, я буду танцевать,<br>
Я буду даже со слезами-зами танцевать!<br>
Я буду танцевать, бу-буду танцевать!<br>
<br>
<span class='blue'>[Припев] Тк4ц3мд? - aB'aB<br></span>
Потеряла голову, спать не могу, хочу к нему!<br>
Потеряла голову, сломал программу мне.<br>
Потеряла голову, хочу к нему, хочу к нему!<br>
Тоска всю ночь меня ломала.<br>
<div class='refren'>
  <span class='blue'>Тк34цжм - AbAb<br></span>
Ломала, ло-ло-ломала,<br>
Ломала, тоска ломала всю ночь!<br>
Ломала, тебя мне не хватало!<br>
Тоска ломала, теперь гоню её прочь.</div>
<br>
<span class='blue'>[Бридж] Дк2-4цм - aaaa<br></span>
Прочь, тоска! (прочь, тоска!)<br>
Моё сердце разбито в кусках (разбито в кусках)<br>
Мои мысли зажаты в тисках.<br>
Собирай чемоданы и вали, тоска!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Представляю я, как мы с тобою вместе,<br>
Как вместе мы с тобой.<br>
Ты всё глубже, и мне всё интересней,<br>
Я не дружу с тоской!<br>
<div class='refren'>
Уйди, прошу, тоска, тоска!<br>
Я так хочу ему в глаза сказать,<br>
Что прилечу, что я хочу,<br>
Что даже со слезами буду танцевать!</div>
<br>
<span class='blue'>[Переход]<br></span>
Буду танцевать, я буду танцевать,<br>
Я даже со слезами-зами буду танцевать.<br>
Я буду танцевать, я буду танцевать,<br>
Я даже бу-бу-бу-буду танцевать!<br>
<br>
<span class='blue'>[Припев]<br></span>
Потеряла голову, спать не могу, хочу к нему!<br>
Потеряла голову, сломал программу мне.<br>
Потеряла голову, хочу к нему, хочу к нему!<br>
Тоска всю ночь меня ломала.<br>
<div class='refren'>
Ломала, ло-ло-ломала,<br>
Ломала, тоска ломала всю ночь!<br>
Ломала, тебя мне не хватало!<br>
Тоска ломала, теперь гоню её прочь.</div>
<br>
<span class='blue'>[Аутро]<br></span>
Буду танцевать.<br>
Ломала! Тоска ломала!<br>
Ломала! Тоска ломала!<br>
<br>
Слова и музыка: А. Потапенко<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kamenskih-nastya/nastya-kamenskih-nk-lomala.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма ж=д: "прогрАмму мне - ломАла".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
