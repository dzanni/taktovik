<?php
$title = 'Глюк’oZа - Мурашки (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xeYbHmWhk8k'";
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

<span class='blue'>[Припев x2] Л3ж/м - AAbb</span><br>
У меня мурашки по коже.<br>
Ты, походу, по уши тоже!<br>
И по нам стекает дождь,<br>
Усиливая дрожь.<br>
<br>
<span class='blue'>[Куплет 1] Дк4цм/м? - aabb</span><br>
Мы не герои сладких книг:<br>
Алые губы, глаза — магнит.<br>
Вытяни карту, я буду дамой пик! <span class='blue'>(Строка Дк5цм)</span><br>
Вылечит градусы, но всего на миг.<br>
  <div class='refren'>
  <span class='blue'>Тк4цд/м - A'A'A'bb</span><br>
  Пылает каждый мой атом, и<br>
  Motherfucka love в моей голове матами,<br>
  Ты такой дурак со своими подкатами.<br>
  Кто ты мне — новый мир или яд? <br>
  Или ты, или я?  <span class='blue'>(Строка Тк2м)</span></div>
<br>
<span class='blue'>[Припев]</span><br>
У меня мурашки по коже.<br>
Ты, походу, по уши тоже!<br>
И по нам стекает дождь,<br>
Усиливая дрожь.<br>
У меня мурашки по коже.<br>
Ты, походу, по уши тоже!<br>
И по нам стекает дождь,<br>
Усиливая дрожь.<br>
(Усиливая дрожь).<br>
<br>
<span class='blue'>[Куплет 2] Дк4цм/ж? - aaBB</span><br>
Без разрешения и стыда.<br>
Нет, не волшебник, но угадал.<br>
Мои эмоции все с одной ноты:<br>
Су-ка, кто ты? <span class='blue'>(Строка Дк2ж)</span><br>
  <div class='refren'>
  <span class='blue'>Дк2-4цд/ж - A'A''BBBB</span><br>
  В голову мыслила <br>
  Вина и выстрелами<br>
  Выбросы адреналина, <br>
  Тихо борются внутри меня две половины.<br>
  Платье на минус, <br>
  Разум на вынос!<br>
  (Су-ка, кто ты?)</div>
<br>
<span class='blue'>[Припев]</span><br>
У меня мурашки по коже.<br>
Ты, походу, по уши тоже!<br>
И по нам стекает дождь,<br>
Усиливая дрожь.<br>
У меня мурашки по коже.<br>
Ты, походу, по уши тоже!<br>
И по нам стекает дождь,<br>
Усиливая дрожь.<br>
(Усиливая дрожь).<br>
<br>
<span class='blue'>[Припев x2]</span><br>
У меня мурашки по коже.<br>
Ты, походу, по уши тоже!<br>
И по нам стекает дождь,<br>
Усиливая дрожь.<br>
  <br>
<span class='blue'><a href='https://genius.com/Glukoza-murashki-lyrics'
  target='_blank'>Источник</a></span><br>
  <br>
    <br>
P.S. Рифма г=д: "мЫслила - вЫстрелами".
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
