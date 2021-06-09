<?php
$title = 'Ногу Свело! - Дышать! (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/lu8KeiDQOy0'";
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

<span class='i'>- Неизвестный мужчина, 40-45 лет, анамнез неизвестен.<br>
- На счет "три"! Раз. два, три!<br>
- Пульса нет.<br>
- Зрачки широкие, на свет не реагирует.<br>
- Начинаем реанимацию!<br>
- Качаем!<br></span>
<br>
<span class='blue'>[Куплет 1] Я6д/д, Я6664д/д - A'A'B'B'</span><br>
Нет, я не связывался с левыми кредитами.<br>
Не занимался сексом с трансвеститами. <span class='blue'>(Строка Я5д)</span><br>
Не торговал ни героином, ни оружием<br>
И к олигархам относился с равнодушием.<br>
  <div class='refren'>Я не игрался ни в свободу, ни в политику.<br>
  Мне было по фигу на мнения и критику.<br>
  Я к светским львицам относился с раздражением,<br>
  А к проституткам - с уважением.</div>
<br>
<span class='blue'>[Припев] Л34мж? - aBaBaCC</span><br>
Жить, встать и бежать —<br>
Это всё, что я умею!<br>
Жить, встать и кричать —<br>
Это все, что я имею!<br>
Жить, встать и дышать<br>
Несмотря на параною -<br>
Лишь бы ты всегда была со мною! <span class='blue'>(Строка Л5ж)</span><br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Нет, я ни разу не ворочал миллионами,<br>
Не отправляла солдат под танки батальонами<br>
И никогда не занимался детским трафиком.<br>
Смазливым Барби не был папиком.<br>
  <div class='refren'>Не понимал, как избивают за то, что гей,<br>
  Пытают кошек и собак, стреляют в голубей.<br>
  Не понимал, когда бросаются гранатами<br>
  И ходят в масках с автоматами.</div>
<br>
<span class='blue'>[Припев]</span><br>
Жить, встать и бежать —<br>
Это всё, что я умею!<br>
Жить, встать и кричать —<br>
Это все, что я имею!<br>
Жить, встать и дышать<br>
Несмотря на параною -<br>
Лишь бы ты всегда была со мною!<br>
<br>
<span class='blue'>[Вокализ] Л12ж|ж (или Л12ж/) - AAAA</span><br>
ЛА-а.<br>
ЛА-а-а-А-а.<br>
ЛА-а-а-А-а.<br>
ЛA-а.<br>
<br>
<span class='blue'>[Припев]</span><br>
Жить, встать и бежать —<br>
Это всё, что я умею!<br>
Жить, встать и кричать —<br>
Это все, что я имею!<br>
Жить, встать и дышать<br>
Между небом и землею -<br>
Лишь бы ты всегда была со мною!<br>
Лишь бы ты всегда была со мною!<br>
<br>
<span class='blue'>[Аутро]</span><br>
Нет, я не связывался с левыми кредитами,<br>
Не занимался сексом с трансвеститами,<br>
Не торговал не героином, не оружием<br>
И к олигархам относился с равнодушием.<br>
    <br>
<span class='blue'><a href='https://on-hit.ru/texts/nogu-svelo-dyshat/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
