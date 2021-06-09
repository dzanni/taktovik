<?php
$title = 'Дора & Таня Волкова - Дорадура (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/R45Z7u2TA90'";
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

<span class='blue'>[Куплет 1] Х4ж/ - AAAA</span><br>
Закрываю дверь квартиры, <br>
Отключаю все мобилы.<br>
Недоступна для дебилов, <br>
Потому что я влюбилась<br>
  <div class='refren'>
  <span class='blue'>Тк2211м/ж - aaBB</span><br>
  В тебя а-а, <br>
  Тупого наглеца.<br>
  Отчего же? <br>
  Отчего же?</div>
<br>
<span class='blue'>[Припев] Х4ж/ - AAAA</span><br>
Всё потому, что Дора - дура, <span class='blue'>(Строка Я4ж)</span><br>
Супер-дура, Дора - дура.<br>
Потому, что Дора - дура, <br>
Супер-дура, Дора - дура.<br>
  <div class='refren'>Потому, что Дора дура, <br>
  Супер-дура, Дора - дура,<br>
  Потому, что Дора - дура...</div>
<br>
<span class='blue'>[Куплет 2] Тк2мм, Тк2жж? - abab, ABaB</span><br>
Я увидела твой взгляд, <br>
Заострённый на мне.<br>
Ты рукою помахал, <br>
Я помахала в ответ.<br>
  <div class='refren'>Ты пошёл ко мне навстречу,<br>
  Это было так глупо!<br>
  Ведь за спиною моей <br>
  Стояла твоя подруга. <span class='blue'>(Строка Тк3ж)</span><br></div>
<br>
<span class='blue'>[Припев]</span><br>
Всё потому, что Дора - дура, <br>
Супер-дура, Дора - дура.<br>
Потому, что Дора - дура, <br>
Супер-дура, Дора - дура.<br>
  <div class='refren'>Потому, что Дора дура, <br>
  Супер-дура, Дора - дура,<br>
  Потому, что Дора - дура, <br>
  Супер-дура, Дора - дура!</div>
<br>
<span class='blue'>[Перед-куплет]</span><br>
Ты позвал меня на встречу (ой)<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
Ты позвал меня на встречу,<br>
Я готовилась весь вечер.<br>
Выбирала, что надеть мне,<br>
Истрепала свои нервы.<br>
  <div class='refren'>
  <span class='blue'>Тк2м/ - aaaa</span><br>
  Пришла, ждала <br>
  Почти два часа<br>
  И ты написал: <br>
  "Sorry, я проспал".</div>
<br>
<span class='blue'>[Припев]</span><br>
Потому, что Дора - дура, <br>
Супер-дура, Дора - дура.<br>
Потому, что Дора - дура, <br>
Супер-дура, Дора - дура.<br>
  <div class='refren'>Потому, что Дора дура, <br>
  Супер-дура, Дора - дура,<br>
  Потому, что Дора - дура, <br>
  Супер-дура, Дора - дура!</div>
  <br>
<span class='blue'><a href='https://www.gl5.ru/d/dora/dora-doradura.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Рифма ж=м: навстрЕчу - моЕй<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
