<?php
$title = 'Ленинград - Фотосессия (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/3USKQQUXFjU'";
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

<span class='blue'>[Куплет 1] Х5жм? - AbAb</span><br>
Я все время в образе, в позе,<br>
В ракурсе, как чудо, хороша,<br>
Я стою, как роза на морозе,<br>
И без ретуши моя душа.<br>
  <div class='refren'>Я парю над миром этим бренным,<br>
  Бабочкой лечу, лечу к костру.<br>
  Сделаю ебало вдохновенным,<br>
  Фото выложу, потом его сотру. <span class='blue'>(Строка Х6м)</span></div>
<br>
<span class='blue'>[Припев] Х4жм - AbAb</span><br>
Фотосессия на вилле<br>
Или в лесополосе.<br>
Я такая вся на стиле,<br>
Чтобы а...хуели все.<br>
Охуели все.<br>
Охуели все.<br>
Охуели все.<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Я загадочная женщина, как нимфа,  <span class='blue'>(Строка Х6ж)</span></div>
У меня духовный мир большой.<br>
Это стопроцентная, бля, инфа,<br>
Обнимаю всех своей душой.<br>
  <div class='refren'>У меня здоровая лишь пища,<br>
  Я вам будни светом подсвечу.<br>
  Выпью вечером бокал винища,<br>
  Книжку почитаю под свечу.</div>
<br>
  <span class='blue'>[Припев]</span><br>
  Фотосессия на вилле<br>
  Или в лесополосе.<br>
  Я такая вся на стиле,<br>
  Чтобы а...хуели все.<br>
  Охуели все.<br>
  Охуели все.<br>
  Охуели все.<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
Я натура тонкая такая,<br>
Что Земфиру слушая в тиши,<br>
Если вспомнишь ты меня, икая,<br>
И под фоточкой сердечко напиши. <span class='blue'>(Строка Х6м)</span><br>
<br>
<span class='blue'>[Припев]</span><br>
Фотосессия на вилле<br>
Или в лесополосе.<br>
Я такая вся на стиле,<br>
Чтобы ах...<br>
<br>
Фотосессия на вилле<br>
Или в лесополосе.<br>
Я такая вся на стиле,<br>
Чтобы а...хуели все.<br>
Охуели все.<br>
Охуели все.<br>
Охуели все.<br>
<br>
<span class='i'>
- Мне недавно приснился Бог и сказал, что у тебя нет парня потому, что ты особенная девочка.
Ты - малышка на миллион, нет достойных тебя. <br>
- Да нихуя себе! И вообще, парятся что, толстые? Только худые.</span><br>
<br>
Охуели все.<br>
<br>
<span class='i'>
- Я по гороскопу Весы, так что не садись на меня, чтобы не расстраиваться!<br>
- Ты по гороскопу мудак.</span><br>
<br>
Охуели все.<br>
Охуели все.<br>
 <br>
<span class='blue'><a href='https://lyricstranslate.com/ru/leningrad-photosession-lyrics.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
