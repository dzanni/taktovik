<?php
$title = 'MONATIK & Вера Брежнева - ВЕЧЕРиНОЧКА (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/X7Y0Ssx7TI4'";
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

<span class='blue'>[Куплет 1] Дв3мм - abab</span><br>
Тихие слова, <br>
Линии твоих губ.<br>
Кругом голова, <br>
Самый громкий звук.<br>
  <div class='refren'>Все твои друзья <br>
  Так же, как вчера<br>
  Ведут себя никак, <br>
  Так совсем нельзя! (да)</div>
Ты совсем одна <br>
Среди зависти подруг. <span class='blue'>(Строка Тк2м)</span><br>
Кругом голова, <br>
Самый громкий звук.<br>
  <div class='refren'>Ты совсем как я — <br>
  Двигаешься в такт,<br>
  А твои друзья <br>
  Ведут себя никак.</div>
<br>
<span class='blue'>[Припев1] Л2ц4цдж - A'BA'B</span><br>
Вечериночка, вечериночка.<br>
Ребята танцуют, хоть не умеют.<br>
Вечериночка (хах), вечериночка.<br>
Хотела бы верить! Хотел бы поверить!<br>
<br>
<span class='blue'>[Припев 2] Л3м/, Л3344цм/ж - aaaa, aaBB</span><br>
Что мы с тобой навсегда,<br>
Что мы с тобой не вода.<br>
Что мы с тобой навсегда (да)<br>
Что мы с тобой не вода.<br>
  <div class='refren'>Что мы с тобой навсегда,<br>
  Что мы с тобой не вода (да)<br>
  Что мы с тобой навсегда рядом,<br>
  Что слова не вода, падай!</div>
<br>
<span class='blue'>[Проигрыш]</span><br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Синий стробоскоп <br>
Сверкает нам с тобой.<br>
Даже гороскоп <br>
Нам предсказал любовь.<br>
  <div class='refren'>Кругом голова, <br>
  Здесь самый громкий звук.<br>
  Тихие слова <br>
  Шёпотом твоих губ.</div>
Мы ещё нули, <br>
Нам ещё нельзя.<br>
Ведут себя никак <br>
Все твои друзья.<br>
<br>
<span class='blue'>[Припев1]</span><br>
Вечериночка, вечериночка.<br>
Ребята танцуют, хоть не умеют.<br>
Вечериночка (м-м-м), вечериночка.<br>
Хотела бы верить! Хотел бы поверить!<br>
<br>
<span class='blue'>[Припев 2]</span><br>
Что мы с тобой навсегда,<br>
Что мы с тобой не вода.<br>
Что мы с тобой навсегда (да)<br>
Что мы с тобой не вода.<br>
  <div class='refren'>Что мы с тобой навсегда,<br>
  Что мы с тобой не вода (да)<br>
  Что мы с тобой навсегда рядом,<br>
  Что все слова не вода, падай!</div>
<br>
<span class='blue'>[Переход] Л2ж/ - AAAAAA</span><br>
Вечер, вечер!<br>
Вечер, вечер!<br>
Делают дети!<br>
Вечер, вечер!<br>
Вечер, вечер!<br>
Делают дети!<br>
<br>
<span class='blue'>[Куплет 3: MONATIK] Тк2-4цм|ж? - aaBBa</span><br>
Этот вечер забирает всех под стробоскоп.<br>
Здесь есть работа для бёдер и стоп.<br>
Каждый бодр, и лодыри не с нами,<br>
Стёрты все грани, <br>
Забыли про "стоп"!<br>
  <div class='refren'>
  <span class='blue'>Тк2ж|д? - AB'B'xA</span><br>
  Простые движенья (простые движенья)<br>
  Даже все неумелые (даже все неумелые)<br>
  Приобретают уверенность (да)<br>
  И разрывают танцпол, <br>
  Ведь с нами Вера!<br>
  Вера!</div>
<span class='blue'>Тк2-4цмж? - aaaBB'</span><br>
В меру хотел, но нельзя отойти!<br>
Нельзя обойти, <br>
Это место — реальный магнит!<br>
Манит, манит - и точка<br>
Это вечериночка!<br>
  <div class='refren'>
  <span class='blue'>Тк14цжд - AB'AB'A</span><br>
  Эй, Вера!<br>
  Ты покажи им, как надо двигаться!<br>
  Вера (э-эй! э-эй!)<br>
  Давай, устроим им вечериночку, <br>
  Вера!</div>
<br>
<span class='blue'>[Куплет 4: Вера Брежнева] Тк2жмдждд - AbbC'AD'D'C'</span><br>
И даже солнце провожая,<br>
Мне всё равно тепло с тобой,<br>
Всё равно светло с тобой,<br>
Это вечериночка!<br>
  <div class='refren'>Холодный воздух согревая,<br>
  Всё равно на мнения -<br>
  Танцую, что умею я!<br>
  Вечериночка. <span class='blue'>(Строка Тк1д)</span><br></div>
<br>
<span class='blue'>[Финал] Дв3жд - AB'AB'</span><br>
Танцую, что умею!<br>
Это вечериночка!<br>
Танцую, что умею!<br>
Это вечериночка!<br>
  <br>
<span class='blue'>[Звучит фонограмма]</span><br>
<span class='i'>
<span class='blue'>Дв31мж - aaaX</span><br>
Вокруг тебя весь мир...  <br>
Вокруг тебя весь мир...  <br>
Вокруг тебя весь мир<br>
Кружит.  <br>
<span class='blue'>Тк4цм/ - aaaa</span><br>
Я знаю пароль,  я вижу ориентир,  <br>
Я верю только в это, любовь спасет мир!  <br>
Я знаю пароль, я вижу ориентир,  <br>
Я верю, только любовь спасет мир!  <br>
</span>
<br>
<span class='blue'><a href='https://www.gl5.ru/m/monatik-dima/monatik-vera-brezhneva-vecherinochka.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма ж=д, обусловленная игрой слов
(вечеринчка = вечер и ночка): "тОчка - вечерИночка".<br>
<br>
Вероятно, на создателей песни повлияли ритм и манера исполнения
песни из репертуара Анжелики Варум и Леонида Агутина "Королева" (1997).<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
