<?php
$title = 'Луна - Огонёк (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/SDCyy8JLAt4'";
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

<span class='blue'>[Куплет 1] Х43мж - aBaB<br></span>
На меня ты посмотри<br>
В этот раз последний,<br>
А потом лишь уходи,<br>
Пропадай бесследно.<br>
<div class='ref'>Я хочу тебя поймать<br>
Фотоаппаратом,<br>
Но не сходятся, видать, <br>
Все координаты.</div>
В сердце трепет, в нервах страх,<br>
Холодно и пусто.<br>
Ты же спрячешься в ветрах,<br>
Будет тебе грустно.<br>
<div class='ref'>Обо мне не вспоминай,<br>
Уходи бесследно,<br>
Я скажу тебе «Прощай!»,<br>
Друг мой заповедный.<br>
<br>
<span class='blue'>[Припев] Х43мж - aBaB<br></span>
Тихий огонек угас,<br>
Догорел беззвучно.<br>
Здесь играет мирный джаз,<br>
Все благополучно.<br>
<div class='ref'>Ты уходишь на войну -<br>
Я страдаю дома.<br>
Оставляй меня одну<br>
И мои альбомы.</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ты прости, что не ждала,<br>
Что тебе осталась.<br>
У меня свои дела,<br>
И пропала жалость.<br>
<div class='ref'>На войне как на войне -<br>
Говорят, опасно.<br>
Тихо плачу в тишине,<br>
Я со всем согласна.</div>
Все уходят на войну,<br>
Ты пошел за ними.<br>
Вряд ли я тебя верну,<br>
Нам не стать святыми.<br>
<div class='ref'>Я хочу, чтоб ты ушел<br>
Со своим терпеньем.<br>
Ты, конечно, будешь зол<br>
После возвращенья.</div>
<br>
<span class='blue'>[Припев]<br></span>
Тихий огонек угас,<br>
Догорел беззвучно.<br>
Здесь играет мирный джаз,<br>
Все благополучно.<br>
<div class='ref'>Ты уходишь на войну -<br>
Я страдаю дома.<br>
Оставляй меня одну<br>
И мои альбомы.</div>
Тихий огонек угас,<br>
Догорел беззвучно.<br>
Здесь играет мирный джаз,<br>
Все благополучно.<br>
<div class='ref'>В небе вспышки без конца<br>
И бушуют грозы.<br>
Я осталась без венца -<br>
Не сбылись прогнозы.</div>
<br>
Музыка: Alexandr Voloschuk<br>
Слова: Dmitry Hirsh & Kristina Bardash<br>
<br>
<span class='blue'><a href="https://genius.com/Luna-light-lyrics"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
