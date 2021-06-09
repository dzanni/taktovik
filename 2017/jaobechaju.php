<?php
$title = 'Настя Кудри & Алексей Воробьев - Я обещаю (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/RkbOi3wqN9w'";
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

<span class='blue'>[Припев: Алексей Воробьёв] Дк45цжм - AAxX<br></span>
Я обещаю забыть тебя утром,<br>
Когда мы будем рядом с теми, кого не любим.<br>
Если ты снова скажешь мне «прости»,<br>
Я обещаю, прощая, тебе все прощаю.<br>
<br>
<span class='blue'>[Куплет 1: Настя Кудри] Л34цдм - A'A'A'x<br></span>
Ты уходишь, не замечая их.<br>
Обижаю чувства нечаянно.<br>
Шею давят воспоминая,<br>
Что встречаем опять случайно в других.<br>
<div class='refren'>
  <span class='blue'>Тк3-5цм/ж - aa<br></span>
Ищем похожий мир<br>
И снова счет по битвам 1:1.<br>
Кто снова победил в этом поединке полов?<br>
Мы проиграли оба и растеряли любовь.</div>
<br>
<span class='blue'>[Переход: Настя Кудри] Тк4ц3м/ - aaaa<br></span>
И где-то среди будней и других людей<br>
Мятая, мятая постель.<br>
Я не могу больше стать твоей, <br>
Обратной дороги нет!<br>
<br>
<span class='blue'>[Припев: Алексей Воробьёв]<br></span>
Я обещаю забыть тебя утром,<br>
Когда мы будем рядом с теми, кого не любим.<br>
Если ты снова скажешь мне «прости»,<br>
Я обещаю, прощая, тебе все прощаю.<br>
Прощая, тебе все прощаю!<br>
<br>
<span class='blue'>[Куплет 2: Настя Кудри] Ак4цм/ - aa<br></span>
Но мне так хочется иногда написать тебе.<br>
Опять начать с чистого листа.<br>
Но через полчаса снова вытру глаза,<br>
И мне не надо помощи, я справлюсь сама.<br>
Теперь ты чужой, мне даже не друг.<br>
Я с тобой не верю в эту игру.<br>
Невменяемая суета эта вокруг<br>
Залечит на сердце ожоги губ.<br>
<br>
<span class='blue'>[Переход: Настя Кудри]<br></span>
И где-то среди будней и других людей<br>
Мятая, мятая постель.<br>
Я не могу больше стать твоей, <br>
Обратной дороги нет!<br>
<br>
<span class='blue'>[Припев: Алексей Воробьёв]<br></span>
Я обещаю забыть тебя утром,<br>
Когда мы будем рядом с теми, кого не любим.<br>
Если ты снова скажешь мне «прости»,<br>
Я обещаю, прощая, тебе все прощаю.<br>
Прощая, тебе все прощаю!<br>
Прощая, тебе все прощаю!<br>
<br>
Слова: Алексей Воробьев, Юрий Стрелкин, Илья Жихарев<br>
Музыка: Алексей Воробьев, Сергей Рахматов, Роман Мясников<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/a1/alexeysparrow/8609-nastya-kudri-ya-obeschayu-ft-aleksej-vorobjyov-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
