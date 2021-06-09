<?php
$title = 'Артем Пивоваров - Дежавю/Позови (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/2mSVWFrmQVo'";
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

<span class='bold'>[Дежавю]</span><br>
<br>
<span class='blue'>[Куплет 1] Л3жм? - AbAb</span><br>
К нам приплывают печали,<br>
К нам долетает салют<br>
Безумных, ярых желаний.<br>
Freedom – моя любовь!<br>
  <div class='refren'>К нам приплывают морями<br>
  Приливов радостных чувств.<br>
  Запомни каждое чудо.<br>
  Freedom – моя любовь!</div>
<br>
<span class='blue'>[Переход] Дк4цм/ - aaaa</span><br>
Приятно, приятно быть, как вода!<br>
Магия утра и каждого дня.<br>
Приятно, приятно плыть в никуда.<br>
Туда, где не был я никогда.<br>
<br>
<span class='blue'>[Припев х2] Л4цм/ - aaaa</span><br>
Там дежа, там дежа, там дежавю.<br>
Сон или явь? Или сон наяву?<br>
В том дежа, том дежа, том дежавю<br>
Ловлю твою вибрацию!<br>
<br>
<span class='blue'>[Куплет 2] Я5554м/? - aX'ab aXbb</span><br>
Сиреневый, сиреневый туман.<br>
По ветру мы летим потоками. <span class='blue'>(Строка Я4д)</span><br>
Рисунками наскальными во снах<br>
Всё повторим, всё повторим.<br>
  <div class='refren'>Сиреневый, сиреневый закат.<br>
  Поверишь ты так сильно, так же явно. <span class='blue'>(Строка Я5ж)</span><br>
  Рисунками, и по воде круги,<br>
  Всё повторим, всё повторим.</div>
<br>
<span class='blue'>[Припев х2]</span><br>
Там дежа, там дежа, там дежавю.<br>
Сон или явь? Или сон наяву?<br>
В том дежа, том дежа, том дежавю<br>
Ловлю твою вибрацию!<br>
<br>
(Туда, где не был я никогда)<br>
<br>
<span class='blue'>[Припев]</span><br>
Там дежа, там дежа, там дежавю.<br>
Сон или явь? Или сон наяву?<br>
В том дежа, том дежа, том дежавю<br>
Ловлю эту вибрацию!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/p/pivovarov-artem/artem-pivovarov-dezhavu.html'
  target='_blank'>Источник</a></span><br>
  <br>
  <span class='bold'>[Позови]</span><br>
<br>
<span class='blue'>[Куплет 1] Дк4цм/</span><br>
Позови за собой ты ураганом.<br>
Поведи за собой в дальние дали.<br>
Позови меня (э - э - э)<br>
Позови меня (э - э - э)<br>
  <div class='refren'>Позови за восходом солнца вдаль.<br>
  Позови за собой, ты что-то знаешь!<br>
  Позови меня (э - э - э)<br>
  Позови меня (э - э - э)</div>
<br>
<span class='blue'>[Припев] Дк5цжм - AbAb</span><br>
И я горю - и ты гори, пылая!<br>
Благодарю тебя за то, что ты - я.<br>
И я горю - и ты гори, пылая!<br>
Знаю - не знаю, верю — не верю я.<br>
<br>
<span class='blue'>[Переход] Л2жм - AbAbAb bbbbbb</span><br>
Somebody show me,<br>
Somebody to love!<br>
Somebody show me,<br>
Somebody to love!<br>
The night is over,<br>
I cant get enough -<br>
Show me your love!<br>
Show me your love!<br>
  <div class='refren'>
  Show me your love!<br>
  Show me your love!<br>
  Show me your love!<br>
  Show me your love!</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Позови за собой за океаны -<br>
И гори же, гори все ярче пламя.<br>
Позови меня (э - э - э)<br>
Позови меня (э - э - э)<br>
  <div class='refren'>Между нами бескрайние равнины.<br>
  Между нами лишь ливни проливные.<br>
  Воду лей в меня (э - э - э)<br>
  Воду лей в меня (э - э - э)</div>
<br>
(Но-но-но-но)<br>
<br>
<span class='blue'>[Припев]</span><br>
Но я горю - и ты гори, пылая!<br>
Благодарю тебя за то, что ты - я.<br>
И я горю - и ты гори, пылая!<br>
Знаю - не знаю, верю — не верю я.<br>
<br>
<span class='blue'>[Переход, бэк-вокал]</span><br>
Somebody show me,<br>
Somebody to love!<br>
Somebody show me,<br>
Somebody to love!<br>
The night is over,<br>
I cant get enough -<br>
Show me your love!<br>
Show me your love!<br>
<br>
<span class='blue'>[Переход]</span><br>
Somebody show me,<br>
Somebody to love!<br>
Somebody show me,<br>
Somebody to love!<br>
The night is over,<br>
I cant get enough -<br>
Show me your love!<br>
Show me your love!<br>
  <div class='refren'>
  Show me your love!<br>
  Show me your love!<br>
  Show me your love!<br>
  Show me your love!</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/p/pivovarov-artem/artem-pivovarov-pozovi.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Слоговой [л]: вдАль = знАешь.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
