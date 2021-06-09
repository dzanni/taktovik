<?php
$title = 'Karna.val - Психушка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/sugLR3ttJVU'";
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

<span class='blue'>[Вступление]</span><br>
— Алло! Не, не знаю, где он. Вы что, думаете, я его насильно держать буду? Ха-ха-ха!<br>
<br>
<span class='blue'>[Куплет 1] Х4ж/ж, Х4жж - AABB, ABAB</span><br>
Заперла тебя дома, <span class='blue'>(Строка Д2ж)</span><br>
Недоступны телефоны.<br>
Дальше от друзей-знакомых <br>
Забрала своего boy`я.<br>
  <div class='refren'>Я связала твои руки,<br>
  Все истерики наружу.<br>
  Не пойму, ну почему-же <br>
  Превратилось всё в психушку?</div>
(Ха-ха-ха-ха!)<br>
<br>
<span class='blue'>[Припев] Л24ж/ж? - AABB</span><br>
Я люблю, ненавижу - <br>
У меня срывает крышу.<br>
Это всё, потому что <br>
В моей голове психушка!<br>
  <div class='refren'>Я люблю, ненавижу - <br>
  У меня срывает крышу.<br>
  Это всё потому что,<br>
  Потому что, потому что <br>
  Психушка!</div>
<br>
<span class='blue'>[Пост-припев 1] Л1-2жм? - AbAb</span><br>
Психушка (Вверху)<br>
Психушка (Психушка)<br>
Психушка (Мы вверху)<br>
(Ты ку-ку)<br>
(Ха-ха-ха-ха!)<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Меня бесит, что ты милый,<br>
Бесит вся твоя забота!<br>
И поэтому, насильно<br>
Запираю тебя дома.<br>
  <div class='refren'>На тебе эксперименты,<br>
  Чтоб запомнил все моменты!<br>
  И не может быть уж дружбы,<br>
  Превратилось всё в психушку.</div>
<br>
<span class='blue'>[Припев]</span><br>
Я люблю, ненавижу - <br>
У меня срывает крышу.<br>
Это всё, потому что <br>
В моей голове психушка!<br>
  <div class='refren'>Я люблю, ненавижу - <br>
  У меня срывает крышу.<br>
  Это всё потому что,<br>
  Потому что, потому что <br>
  Психушка!</div>
<br>
<span class='blue'>[Пост-припев 2]</span><br>
Психушка (Вверху)<br>
Психушка (Психушка)<br>
Психушка (Мы вверху)<br>
(Ха-ха-ха-ха!)<br>
Психушка (Вверху)<br>
Психушка (Психушка)<br>
Психушка (Мы вверху)<br>
<br>
<span class='blue'>[Финал]</span><br>
Я люблю...  <br>
А я люблю... <br>
Я люблю...  <br>
Я люблю, ненавижу!  <br>
  <br>
Слова: Валентина Карнаухова<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/k/karna-val/karna-val-psihushka.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
