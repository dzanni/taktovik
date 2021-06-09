<?php
$title = 'ВИА Гра - Моё сердце занято (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/X2qtOgoLSMM'";
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

<span class='blue'>[Куплет 1] Дк3334жм, Дк3жм - AbAb<br></span>
Зачем ты разгадывал тайны <br>
Там, где их просто нет?<br>
Зачем задал мне вопрос <br>
Без всякой надежды на ответ?<br>
<div class='refren'>Стучался не в двери, а в стены - <br>
Дверь ведь не заперта!<br>
Ты хотел откровений, <br>
Слушай меня тогда:</div>
<br>
<span class='blue'>[Припев] Л23дм - A'bA'b<br></span>
Моё сердце занято! <br>
Мои крылья просят высоты.<br>
Не ищи виноватого - <br>
Это сделал ты (ты, ты, ты!)<br>
<div class='refren'>Моё сердце занято, <br>
И оно не терпит пустоты.<br>
Не ищи виноватого -<br>
Это сделал ты (ты, ты, ты!)</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Зачем тебе знать мою правду?<br>
Правда у всех своя.<br>
Считай, если хочешь, что прав ты, <br>
Или уйди в отрыв, так как я.<br>
<div class='refren'>Стучался не в двери, а в стены - <br>
Дверь ведь не заперта!<br>
Ты хотел откровений, <br>
Слушай меня тогда:</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Моё сердце занято! <br>
Мои крылья просят высоты.<br>
Не ищи виноватого - <br>
Это сделал ты (ты, ты, ты!)<br>
<div class='refren'>Моё сердце занято, <br>
И оно не терпит пустоты.<br>
Не ищи виноватого -<br>
Это сделал ты (ты, ты, ты!)</div>
<br>
<span class='blue'>[Декламация] Х7мж? - aBaB<br></span>
Не хочу твоих привычных и размытых фраз,<br>
Я устала собирать любовь по осколкам.<br>
Упустили, потеряли наш последний шанс.<br>
Мы ломали всё, что строили с тобой так долго!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Не проси разрешенья остаться, <br>
Я, наверно, смогу быть без тебя.<br>
Доверять и опять обжигаться - <br>
Не живёт любовь на пустых словах!<br>
<br>
<span class='blue'>[Припев]<br></span>
Моё сердце занято! <br>
Мои крылья просят высоты.<br>
Не ищи виноватого -<br>
Это сделал ты (ты, ты, ты!)<br>
<div class='refren'>Моё сердце занято, <br>
И оно не терпит пустоты.<br>
Не ищи виноватого -<br>
Это сделал ты!</div>
<br>
Музыка: К. Меладзе<br>
Слова: К. Меладзе, М. Романова<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/via-gra-moe-serdce-zanyato.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
