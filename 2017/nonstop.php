<?php
$title = 'Пошлая Молли - Нон Стоп (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xCo6kRAN-28'";
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
<br>
N.B. Видео было удалено. Вновь вывешено здесь:<br>
<br>
<iframe width='560' height='315' src='https://www.youtube.com/embed/pcI8C9i-aDw'
frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br><br>


<span class='blue'>[Интро] Я4м - xxxx<br></span>
Девчата пляшут под спидам,<br>
(Девчата пляшут под спидам),<br>
А ты стоишь как вкопаннЫй,<br>
(А ты стоишь как вкопаннЫй).<br>
Кроссовками ломают пол,<br>
(Кроссовками ломают пол),<br>
А ты стоишь как вкопаннЫй.<br>
Ну что за мать его дерьмо?<br>
<br>
<span class='blue'>[Куплет 1] Я3-5жм - XaBBxaX<br></span>
Я знаю, что ты хочешь,<br>
Ты хочешь танцевать!<br>
Ну-ну же, ну, давай же!<br>
Ну-ну же, ну, давай же!<br>
Я знаю, что ты знаешь этот трек, <br>
Готовься подпевать!<br>
Раз, два, три, четыре! <span class='blue'>(Строка Дк4цд)<br></span>
<br>
<span class='blue'>[Припев] Дк4цж/д - AA, A’A’<br></span>
Музыка громче, глаза закрыты -<br>
Это нон-стоп ночью открытий!<br>
Делай, что хочешь, я забываюсь!<br>
Это нон-стоп! Не прекращаясь!<br>
Музыка громче, глаза закрыты -<br>
Это нон стоп ночью открытий!<br>
Буду с тобою самой примерною,<br>
Утро в окне, и мы будем первые!<br>
<br>
<span class='blue'>[Куплет 2] Х4жм? - ХaXa, XxXx<br></span>
Этот трек <span class='blue'>(Строка Х2м)<br></span>
Делает тебя сильней,<br>
Он прикольней, чем колеса<br>
И роднее, чем портвейн.<br>
<div class='refren'>
Раза в три круче, чем <br>
Самый первый секс-партнер.<br>
Все девчата в таком трипе,<br>
Что аж мама не горюй!</div>
<br>
<span class='i'>- Пидарас!<br></span>
<br>
Прыгай так, прыгай так,<br>
Будто ты совсем дурак!<br>
Прыгай так-так и так так-так, <span class='blue'>(Строка Дк4цж)<br></span>
Ты же воздух, как-никак!<br>
<div class='refren'>
Прыгай так, прыгай так,<br>
Будто ты Чу-покемон,<br>
Будто бы вся твоя жизнь<br>
Не такое уж дерьмо!<br>
(Ну что за мать его дерьмо?)</div>
<br>
<span class='blue'>[Припев]<br></span>
Музыка громче, глаза закрыты -<br>
Это нон-стоп ночью открытий!<br>
Делай, что хочешь, я забываюсь!<br>
Это нон-стоп! Не прекращаясь!<br>
Музыка громче, глаза закрыты -<br>
Это нон стоп ночью открытий!<br>
Буду с тобою самой примерною,<br>
Утро в окне, и мы будем первые!<br>
<br>
Я задыхаюсь...<br>
<br>
Слова и музыка: Кирилл Бледный<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/p1/poshlaya-molli/6766-poshlaya-molli-non-stop-text-pesni.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
