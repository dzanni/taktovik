<?php
$title = 'Баста & Zivert - неболей (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/u0PrLVWDU4M'";
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

<span class='blue'>[Интро: Баста]</span><br>
С неба лей, <br>
С неба лей, <br>
С неба лей,<br>
С неба-неба-неба лей,<br>
С неба лей, <br>
С неба-неба лей,<br>
Дождь, пока меня ты ждешь (м-м)<br>
<br>

<span class='blue'>[Припев: Zivert] Х2-5мм - aabaaaabaa</span><br>
С неба лей!<br>
С неба-неба-неба-неба лей,<br>
Дождь, пока меня ты ждешь!<br>
Не болей!<br>
Небо-небо-небо – не болей! <br>
(Не болей о-е-е)<br>
С неба лей!<br>
С неба-неба-неба-неба лей,<br>
Дождь, пока меня ты ждешь!<br>
Не болей!<br>
Небо-небо-небо – не болей!<br>
<br>
<span class='blue'>[Куплет 1: Баста и Zivert] Дк15цмм - abababab</span><br>
Я бы мог<br>
Сделать солнце ярче, чтобы растаял лед.<br>
Ты бы мог,<br>
Но между мной и тобой - ни холодно, ни тепло!<br>
(Ты бы мог)<br>
Я бы мог<br>
Улыбнуться, но в этой песне только минор. <br>
(Я бы мог)<br>
Ты бы мог, <br>
Но в этой истории слишком много "но".<br>
(Слишком много "но")<br>
<br>
<span class='blue'>[Припев: Zivert]</span><br>
С неба лей!<br>
С неба-неба-неба-неба лей,<br>
Дождь, пока меня ты ждешь!<br>
Не болей!<br>
Небо-небо-небо – не болей! <br>
(Не болей о-е-е)<br>
С неба лей!<br>
С неба-неба-неба-неба лей,<br>
Дождь, пока меня ты ждешь!<br>
Не болей!<br>
Небо-небо-небо – не болей!<br>
<br>
<span class='blue'>[Куплет 2: Баста и Zivert]</span><br>
Я бы мог <br>
Всё объяснить, но это значит – подвести итог.<br>
Ты бы мог, <br>
И всё закончится плохо, я знаю наперед.<br>
(Я бы мог)<br>
Я бы мог, <br>
Прости, но слишком жестоким был урок. <br>
(Ты бы мог)<br>
Ты бы мог, <br>
Но когда уходит любовь, бессилен бог.<br>
(Слишком много "но")<br>
(Слишком много "но")<br>
<br>
<span class='blue'>[Припев: Zivert]</span><br>
С неба лей!<br>
С неба-неба-неба-неба лей,<br>
Дождь, пока меня ты ждешь!<br>
Не болей!<br>
Небо-небо-небо – не болей! <br>
(Не болей о-е-е)<br>
С неба лей!<br>
С неба-неба-неба-неба лей,<br>
Дождь, пока меня ты ждешь!<br>
Не болей!<br>
Небо-небо-небо – не болей!<br>
<br>
<span class='blue'>[Куплет 3: Zivert и Баста] Дк2-3м/м? - aaaabbX</span><br>
Быть рядом надо ли? <br>
Чувства – это лифт.<br>
И чем выше мы от земли,<br>
Тем невесомей флирт.<br>
Не каждому везёт <br>
Забивать на всё.<br>
Я снова близко к сердцу.<br>
  <div class='refren'>
  <span class='blue'>Тк1-3мж - abab</span><br>
  Пусть хоть дождь, хоть снег -<br>
  Мой дом пуст.<br>
  Холод ночью, наболтаем децибел, <br>
  Я не злюсь, <br>
  Это точка, это точно разобьет. <br>
  Наизусть <br>
  Знаю, что ты скажешь мне в ответ, <br>
  Моя грусть.<br>
  Я просто не успел - <br>
  И пусть!<br>
  Хоть в дождь, хоть в снег - <br>
  Я вернусь.<br>
  Ещё пара сигарет<br>
  На краю,<br>
  И нас нет, и нас нет!</div>
<br>
<span class='blue'>[Припев х2: Zivert]</span><br>
С неба лей!<br>
С неба-неба-неба-неба лей,<br>
Дождь, пока меня ты ждешь!<br>
Не болей!<br>
Небо-небо-небо – не болей! <br>
(Не болей о-е-е)<br>
С неба лей!<br>
С неба-неба-неба-неба лей,<br>
Дождь, пока меня ты ждешь!<br>
Не болей!<br>
Небо-небо-небо – не болей!<br>
  <br>
<span class='blue'><a href='https://genius.com/And-zivert-dont-ill-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
