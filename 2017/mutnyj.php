<?php
$title = 'Elvira T - Мутный (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/rc8j3wiFAfw'";
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

<span class='blue'>[Куплет 1] Тк2-4цжм - AXxAx<br></span>
Я в старой твоей олимпийке,<br>
Мы пьём за наше здоровье<br>
До десяти бокалов подряд,<br>
В дешёвых ботинках -<br>
Мы не хотим дорого платить.<br>
<div class='refren'>
  <span class='blue'>Тк4цд - A'A'A'A'<br></span>
Мы самые ненормальные в этом городе,<br>
И я что-то чувствую к тебе вроде бы.<br>
С первой ноты угадаю твою мелодию,<br>
Твои глаза круче лёгких наркотиков.</div>
<br>
<span class='blue'>[Переход] Дк2-4цмж - aaaXa<br></span>
Я одна не дойду, проводи.<br>
Ты же тоже быть не любишь один.<br>
Любовь отправим на карантин,<br>
Не держи меня в клетке -<br>
Лучше меня отпусти (а-а)!<br>
Лучше меня отпусти (а-а)!<br>
<br>
<span class='blue'>[Припев х2] Тк4цж - AABB<br></span>
Мы одни в квартире на жёстком стиле -<br>
Вне зоны доступа для всех, но друзья нас простили.<br>
Ты такой мутный, и почему-то<br>
Я хочу сбежать от тебя каждое утро!<br>
<br>
<span class='blue'>[Куплет 2] Тк4ц3м? - xaXa<br></span>
Наши с тобой бывшие пусть дальше врут, <br>
Что им без нас хорошо.<br>
Не знаю, как твоя, но мой прошлый парень<br>
Явно с катушек сошёл.<br>
<div class='refren'>
Нам круто вместе терять сознание.<br>
Пускай плывут дома, бетонные здания.<br>
Пускай плывут дворы, подъезды и хаты,<br>
Пусть поцелуи сухие и ноги ватные.</div>
<br>
<span class='blue'>[Переход]<br></span>
Я одна не дойду, проводи.<br>
Ты же тоже быть не любишь один.<br>
Любовь отправим на карантин,<br>
Не держи меня в клетке -<br>
Лучше меня отпусти (а-а)!<br>
Лучше меня отпусти (а-а)!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Мы одни в квартире на жёстком стиле -<br>
Вне зоны доступа для всех, но друзья нас простили.<br>
Ты такой мутный, и почему-то<br>
Я хочу сбежать от тебя каждое утро!<br>
<br>
Хочу сбежать от тебя, хочу сбежать!<br>
Хочу сбежать от тебя, хочу сбежать!<br>
Хочу сбежать от тебя!<br>
Хочу сбежать!<br>
Хочу сбежать от тебя, хочу сбежать!<br>
Хочу сбежать от тебя, хочу сбежать!<br>
Хочу сбежать от тебя!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Мы одни в квартире на жёстком стиле -<br>
Вне зоны доступа для всех, но друзья нас простили.<br>
Ты такой мутный, и почему-то<br>
Я хочу сбежать от тебя каждое утро!<br>
<br>
Слова: Эльвира Тугушева<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/elvira-t-mutnij.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
