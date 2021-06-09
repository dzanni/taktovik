<?php
$title = 'Назима & Валерия - Тысячи историй (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/hxy5ACj6CDM'";
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

<span class='blue'>[Припев] Х541м|ж - aaBBa</span><br>
Мы расскажем всеми нотамИ<br>
Тысячи историй о любви,<br>
Друг на друга так похожи,<br>
Без которых жить не можем <br>
Мы.<br>
  <div class='refren'>Стали целым части половин,<br>
  Наполняем счастьем новый мир.<br>
  Находя среди прохожих,<br>
  Без кого уже не сможем <br>
  Жить.</div>
<br>
<span class='blue'>[Куплет 1] Тк2-4цм|м - aabba</span><br>
Скоро я найду тебя, <br>
Видимо, что-то мне даёт понять:<br>
Среди нас столько людей,<br>
В пучине сетей <br>
Страшно себя потерять.<br>
  <div class='refren'>Провожая поезда <br>
    Взглядами, дальше только пустота. <br>
    Подарил веру в любовь, <br>
  Живая я вновь,<br>
  Снова с чистого листа.</div>
<span class='blue'>Тк2-4цж/ж? - AABBx</span><br>
До тебя в прошлом только драма (до тебя)<br>
Жизнь - это не мультики с экрана, <span class='blue'>(Строка Тк3ж)</span><br>
Это моя муза <br>
Под удары пульса,<br>
Что такое чувство для тебя?<br>
<br>
<span class='blue'>[Припев]</span><br>
Мы расскажем всеми нотамИ<br>
Тысячи историй о любви,<br>
Друг на друга так похожи,<br>
Без которых жить не можем <br>
Мы.<br>
  <div class='refren'>Стали целым части половин,<br>
  Наполняем счастьем новый мир.<br>
  Находя среди прохожих,<br>
  Без кого уже не сможем <br>
  Жить.</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
На двоих одна душа,<br>
Ты меня снова научил дышать.<br>
Вспоминаю мир без тебя,<br>
Ночь, тишина, <br>
Я сочиняла жизнь для нас (жизнь для нас)<br>
  <div class='refren'>Видела любовь во снах,<br>
  Время нас лечит, исчезает страх.<br>
  Забываю тысячи ран,<br>
  Стерев номера,<br>
  Как долго я тебя ждала.</div>
  <span class='blue'>Тк2-4цж/м - AAbbb</span><br>
Пойми, любовь приходит к нам не сразу (не сразу)<br>
Когда сердце молчит, подскажет разум.<br>
Годы пролетят,<br>
А рядом только семья,<br>
Что такое чувство для тебя?<br>
<br>
<span class='blue'>[Припев]</span><br>
Мы расскажем всеми нотамИ<br>
Тысячи историй о любви,<br>
Друг на друга так похожи,<br>
<br>
<span class='i'>
- Хорошо, что мы отрепетировали!<br>
- Конечно, хорошо!<br>
- Это было очень!<br>
- [неразб.] это просто бомба у нас! Ты правильно встала!.. Здравствуйте!
[неразб.] Знаешь, я думаю, по-хорошему, на эту песню клип надо снимать.
Прям, я прям чувствую!<br>
- Надо подумать, где.<br>
- Да что думать, вообще! Такая песня! Да где угодно! В лифте! Ммм...<br>
- Ну. Можно.<br>
- Кстати, хорошая мысль.<br>
</span>
<br>
<span class='blue'>[Припев]</span><br>
Мы расскажем всеми нотамИ...<br>
<br>
<span class='i'>
- Все гениальное просто вообще, на самом деле.<br>
- Ну да.<br>
</span>
<br>
Тысячи историй о любви...<br>
<br>
<span class='i'>
- Блин, а у меня есть история....<br>
</span>
<br>
Друг на друга так похожи,<br>
Без которых жить не можем <br>
Мы.<br>
  <div class='refren'>Стали целым части половин,<br>
  Наполняем счастьем новый мир.<br>
  Находя среди прохожих,<br>
  Без кого уже не сможем <br>
  Жить (сможем жить)</div>
<br>
<span class='i'>
- Ха-ха-ха!<br>
- Ха-ха-ха!<br>
</span>
<br>
<span class='blue'><a href='https://teksty-pesenok.ru/rus-nazima/tekst-pesni-tysyachi-istorij-ft-valeriya/6737794/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
