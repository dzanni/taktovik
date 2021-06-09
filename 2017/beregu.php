<?php
$title = 'Егор Крид - Берегу (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/dE0jKIaAB5k'";
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

<span class='blue'>[Куплет 1] Л4цж? - AABB<br></span>
Я смотрю в небо, что оно прячет?<br>
Какие секреты, и почему плачет?<br>
Поговорю с Богом. Пускай прошу глупость -<br>
Побыть с нею рядом, хоть на минуту.<br>
<div class='refren'>
Ты всегда будешь светом, а я - твоей тенью.<br>
Словами ранила больно, оказалось смертельно.<br>
Счастье было так близко, - и мы это знаем.<br>
Себя виню я за это, ведь мы ценим, когда теряем. <span class='blue'>(Строка Л5цж)<br></span></div>
<br>
<span class='blue'>[Припев х2] Л1-4цм - aaaa<br></span>
Я берегу тебя внутри разбитой души.<br>
Не знаю, кто за нас всё решил.<br>
Прости за то, что счастья лишил.<br>
Прости.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я по рукам связан, ведь мы так похожи -<br>
Хотим друг от друга одного и того же.<br>
Минута молчания, после слов, что не любишь.<br>
Я свободен дышать, но дышать глубоко без тебя мне не нужно!  <span class='blue'>(Строка Л6цж)<br></span>
<div class='refren'>
Изменил себя в корне, тогда в чём же причина?<br>
Зачем ты лезвия острые о моё сердце сточила!<br>
Счастье было так близко - и мы это знаем.<br>
Себя виню я за это, ведь мы ценим, когда теряем.</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Я берегу тебя внутри разбитой души.<br>
Не знаю, кто за нас всё решил.<br>
Прости за то, что счастья лишил.<br>
Прости.<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/k/kreed/egor-kreed-beregu.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Куплет - логаэд с переменной анакрузой.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
