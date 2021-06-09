<?php
$title = 'LOBODA - Случайная (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/pVIvO83_Rtc'";
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

<span class='blue'>[Куплет 1] Ам2ж, Дв54м - ABAB, aa<br></span>
Ты пишешь мне письма<br>
Такие печальные,<br>
И в каждой странице<br>
Сплошное молчание.<br>
Простые ответы, <br>
«Увидимся снова»,<br>
Заклею в конверты <br>
Я каждое слово.<br>
<div class='refren'>Ты уйдешь и не посмотришь вслед.<br>
А я бегу на красный свет.</div>
<br>
<span class='blue'>[Припев] Я35//4мд - aaB'aaB'<br></span>
Так манят облака<br>
В чужие берега,<br>
А я поранилась тобой нечаянно.<br>
А я сама себя <br>
Сломала пополам,<br>
Влюбилась так в тебя отчаянно.<br>
<div class='refren'>Так манят облака<br>
  В чужие берега,<br>
А я поранилась тобой нечаянно.<br>
Я так ждала тебя, <br>
Узнала по шагам,<br>
А я твоя, твоя случайная.</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Нечётные числа, <br>
Неровные ноты,<br>
И больше нет смысла <br>
Включить поворотник.<br>
Уйду незаметно, <br>
Ну что мы наделали,<br>
Спасаясь от ветра <br>
В холодной постели?<br>
<div class='refren'>Не заплачу и не закричу<br>
И всё равно тебя прощу.</div>
<br>
<span class='blue'>[Припев]<br></span>
Так манят облака<br>
В чужие берега,<br>
А я поранилась тобой нечаянно.<br>
А я сама себя <br>
Сломала пополам,<br>
Влюбилась так в тебя отчаянно.<br>
<div class='refren'>Так манят облака<br>
  В чужие берега,<br>
А я поранилась тобой нечаянно.<br>
Я так ждала тебя, <br>
Узнала по шагам,<br>
А я твоя, твоя случайная.</div>
<br>
(Случайная…)<br>
(Случайная…)<br>
(Облака…)<br>
<br>
Не заплачу и не закричу,<br>
И всё равно тебя прощу.<br>
<br>
<span class='blue'>[Припев]<br></span>
Так манят облака<br>
В чужие берега,<br>
А я поранилась тобой нечаянно.<br>
А я сама себя <br>
Сломала пополам,<br>
Влюбилась так в тебя отчаянно.<br>
<div class='refren'>Так манят облака<br>
  В чужие берега,<br>
А я поранилась тобой нечаянно.<br>
Я так ждала тебя, <br>
Узнала по шагам,<br>
А я твоя, твоя случайная.</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/loboda_sluchainaya.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
