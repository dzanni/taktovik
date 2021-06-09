<?php
$title = 'Ольга Бузова - В огне (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Ldb6S-eKPdQ'";
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

<span class='blue'>[Куплет 1] Дв2мж? - xAxA</span><br>
Больна, тобой... <br>
Ломит, дозу! <br>
Опять в тебе...<br>
Сносит, поздно! <br>
<br>
 <span class='blue'>[Переход] Тк2жм? - AbAb AbA</span><br>
На мелкие кусочки<br>
Растворяюсь я в тебе. <br>
Этот запах ночи<br>
Застрянет в моей голове,  <span class='blue'>(Строка Тк3м)</span><br>
Мурашками по коже<br>
Прилипаю я к тебе. <br>
Пора снять замочек… <br>
 <br>
<span class='blue'>[Припев] Л3222м/ - AAAA</span><br>
Всё сейчас в огне! <br>
Всё тело в огне! <br>
Твои губы на мне! <br>
Сладкий рассвет. <br>
Всё сейчас в огне! <br>
Всё тело в огне! <br>
Твои губы на мне! <br>
Сладкий рассвет! <br>
Всё сейчас в огне! <br>
<div class='refren'>
<span class='blue'>Х46цу1м/ - aa</span><br>
Ты в огне, мы в огне-е-е! <br>
Я в огне, ты в огне, мы в огне-е-е! </div>
 <br>
 <span class='blue'>[Куплет 1]</span><br>
Без слов сказать, <br>
В глазах — искра! <br>
Мало тебя, <br>
Тоска, скучать. <br>
 <br>
 <span class='blue'>[Переход]</span><br>
 На мелкие кусочки<br>
 Растворяюсь я в тебе. <br>
 Этот запах ночи<br>
 Застрянет в моей голове, <br>
 Мурашками по коже<br>
 Прилипаю я к тебе. <br>
 Пора снять замочек… <br>
 <br>
  <span class='blue'>[Припев]</span><br>
 Всё сейчас в огне! <br>
 Всё тело в огне! <br>
 Твои губы на мне! <br>
 Сладкий рассвет. <br>
 Всё сейчас в огне! <br>
 Всё тело в огне! <br> <br>
 Твои губы на мне! <br>
 Сладкий рассвет! <br>
 Всё сейчас в огне! <br>
 <div class='refren'>
 Ты в огне, мы в огне-е-е! <br>
 Я в огне, ты в огне, мы в огне-е-е! </div>
 <br>
 <span class='blue'>[Припев]</span><br>
 Всё сейчас в огне! <br>
 Всё тело в огне! <br>
 Твои губы на мне! <br>
 Сладкий рассвет. <br>
 Всё сейчас в огне! <br>
 Всё тело в огне! <br>
 Твои губы на мне! <br>
 Сладкий рассвет! <br>
 Всё сейчас в огне! <br>
 <br>
<span class='blue'><a href='https://on-hit.ru/texts/olga-buzova-v-ogne/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
