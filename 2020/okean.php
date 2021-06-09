<?php
$title = 'Мари Краймбрери - Океан (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/1jCQ1q-c7NI'";
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

<span class='blue'>[Куплет 1] Л23жм - AbAbAA</span><br>
Как красиво <br>
На песке остается след,<br>
Как курсивом<br>
Ото всех пережитых лет. <br>
Всё, спасибо.<br>
Я устала от всех, и я хочу быть счастливой. <span class='blue'>(Строка Л4цж)</span><br>
  <div class='refren'>
  <span class='blue'>Тк2-5цж/ - AAAA'</span><br>
  Только мне скучно.  <br>
  Знаешь, без тебя мне так скучно.<br>
  Ты так громко на моем беззвучном,<br>
  Пока на шее то, что делает нас неразлучными.</div>
<span class='blue'>Л3м/ - aaa</span><br>
Ты там не гони и,<br>
Окей, извини, и<br>
Забей на туман, и.<br>
<br>
<span class='blue'>[Припев] Я5мм - abab</span><br>
Танцуй, как будто рядом океан,<br>
И утром мы проснемся не в Москве.<br>
Хочу с тобой увидеть много стран<br>
И целоваться на глазах у всех.<br>
<br>
<span class='blue'>[Куплет 2] Дк32дж? - A'BA'BB</span><br>
Танцуй, как будто прошлое<br>
Стало лишь прошлым,<br>
А между нами не пошлые<br>
Разговоры о кольцах<br>
На пальцах, а не устройствах.<br>
  <div class='refren'>
  <span class='blue'>Тр2дж - A'BA'B</span><br>
  Будто эта бессонница<br>
  Нам к лицу в этом мире,<br>
  И никто не дотронется,<br>
  Пока мы в квартире.</div>
<span class='blue'>Дк4ц3жм - AbAb</span><br>
Сотри номер бывшего, не пригодится,<br>
Я от тебя ни на шаг!<br>
Нельзя тебя знать и в тебя не влюбиться.<br>
Нельзя, ты пойми, никак!<br>
  <div class='refren'>
  <span class='blue'>Дк3-4цдммм? - X'axa</span><br>
  Ты мне говоришь это, и так не верится, <br>
  Что мог остыть вулкан<br>
  И самая вспыльчивая твоя<br>
  Спокойно плывет по волнам.</div>
<br>
<span class='blue'>[Припев]</span><br>
Танцуй, как будто рядом океан,<br>
И утром мы проснемся не в Москве.<br>
Хочу с тобой увидеть много стран<br>
И целоваться на глазах у всех.<br>
  <div class='refren'>Танцуй, как будто рядом океан,<br>
  И утром мы проснемся дальше жить.<br>
  Хочу с тобой увидеть много стран (много стран)<br>
  И любить, и дружить. <span class='blue'>(Строка Ан2м)</span></div>
  <br>
<span class='blue'>[Бэк]</span><br>
(Рядом океан)<br>
(Рядом океан)<br>
Танцуй, как будто рядом океан (океан)<br>
(О-о, о-о)<br>
Хочу с тобой увидеть много стран.<br>
(Видеть много стран)<br>
(Видеть много стран)<br>
<br>
<span class='blue'>[Припев]</span><br>
Танцуй, как будто рядом океан,<br>
И утром мы проснемся не в Москве.<br>
Хочу с тобой увидеть много стран<br>
И целоваться на глазах у всех.<br>
  <div class='refren'>Танцуй, как будто рядом океан,<br>
  И утром мы проснемся дальше жить.<br>
  Хочу с тобой увидеть много стран (много стран)<br>
  И любить, и дружить.</div>
  <br>
<span class='blue'><a href='https://teksty-pesenok.ru/rus-mari-krajmbreri/tekst-pesni-okean/6792703/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Рифма ж=д: беззвУчным - неразлУчными.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
