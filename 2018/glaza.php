<?php
$title = 'Мальбэк ft. Лиза Громова - Глаза (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/z_rQ4iS52EY'";
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

<span class='blue'>[Куплет 1: Лиза Громова] Дв32жм - AAbAAb AAcDDc<br></span>
И там, где тают звезды,<br>
Очень просто <br>
Выбрать верный курс.<br>
В морях сверкают грозы<br>
Звонко грозно,<br>
Ищут нужный курс.<br>
<div class='refren'>
Нам так непросто,<br>
Но мы перед штормом <br>
Повернем назад,<br>
Доплыв до света края,<br>
Загляну я <br>
В твои холодные глаза. <span class='blue'>(Строка Дв4м)</span></div>
<br>
<span class='blue'>[Куплет 2, х2: Мальбэк] Х4жм? - AAAbAAAb<br></span>
Наверно, <span class='blue'>(Строка Я1ж)</span></br>
Завтра за окном инферно<br>
Все вокруг так эфемерно,<br>
Падает твоя слеза.<br>
Наверно, <br>
Я с тобой убью все нервы,<br>
А, быть может, буду первый,<br>
Кто открыл твои глаза!<br>
<br>
<span class='blue'>[Припев, х2: Мальбэк] Дк2мж - aBaB<br></span>
Летали с тобой,<br>
Летали вслепую,<br>
Этот танец-любовь <br>
Я с тобой танцую!<br>
<br>
<span class='blue'>[Куплет 3: Лиза Громова] Х4м? - aa<br></span>
Мы сливаемся с толпой,<br>
Время дышит в спину - вой.<br>
Я слышу, вижу -  <span class='blue'>(Строка Я2ж)<br></span>
Тени пляшут под луной.<br>
Потеряли ритм, шаг,<br>
Потеряли руки, враг.<br>
Ты забудешь меня скоро,   <span class='blue'>(Строка Х4ж)<br></span>
Только мне тебя никак!<br>
<div class='refren'>
  <span class='blue'>Тк23жм - AAbAAb<br></span>
Стынет кровь в венах, <br>
Встречи откровенно <br>
Тают в твоих глазах.<br>
Жизни во вселенных, <br>
Поезд переменных,<br>
Прятки в чужих руках.</div>
<br>
<span class='blue'>[Переход: Лиза Громова] Тк2м - aa<br></span>
А-а-а-а!<br>
В твоих глазах!<br>
А-а-а-а!<br>
В твоих глазах!<br>
В твоих глазах!<br>
А-а-а-а!<br>
В твоих холодных глазах!<br>
В твоих холодных глазах!<br>
В твоих...<br>
<br>
<span class='blue'>[Припев, х2: Мальбэк]<br></span>
Летали с тобой,<br>
Летали вслепую,<br>
Этот танец-любовь <br>
Я с тобой танцую!<br>
<br>
<span class='blue'>[Куплет 4: Мальбэк] Я4м? - abab<br></span>
Твои холодные глаза<br>
Налились кровью до краев.<br>
С неба упавшая слеза -<br>
Ей не нарушить мой покров.<br>
<div class='refren'>
Твои холодные глаза <br>
Покрыли коркой океан.<br>
Мы поменяли полюса<br>
И отдались чужим ветрам.</div>
Шепотом плыли голоса,<br>
Их провожали на такси<br>
Твои холодные глаза.<br>
Наверное, ты меня прости.<br>
<div class='refren'>
Туман заставит нас терпеть,<br>
Молча смотреть, как бирюза<br>
В твоих глазах стала, как медь,<br>
И начинается гроза.</div>
<br>
<span class='blue'><a href='https://genius.com/Leningrad-ju-ju-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
