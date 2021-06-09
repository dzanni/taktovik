<?php
$title = 'Елена Темникова - Не модные (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Pl8u2kY_3IQ'";
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

<span class='blue'>[Куплет 1] Тк23жм - AbAb<br></span>
Я в твоей худи, <br>
Идём на балкон.<br>
Мне похуй, что увидят люди, <br>
О них мы потом (О них мы потом)<br>
<div class='refren'>
  <span class='blue'>Ам3мд? - aB'aB'<br></span>
Ну что мы решаем теперь? <br>
И твой ответ положительный.<br>
Уютный, холодный отель. <br>
Зачем мы торопим события?<br>
  <span class='blue'>Ам3ж - AABB<br></span>
Но, кажется нам, это круто,<br>
 И мы выжигаем минуты.<br>
Тату фиолетовым цветом, <br>
Тату с фиолетовым сердцем.</div>
<br>
<span class='blue'>[Припев х2] Л23дм? - AAbbAAbb<br></span>
Такие не модные, <br>
Греешь губы холодные.<br>
Мы кожей пытаемся уловить <br>
Этот мотив.<br>
Такие не модные - <br>
Шепчут губы холодные<br>
Мысли вслух, речитатив -<br>
Как мы хотим.<br>
<br>
<span class='blue'>[Куплет 2] Тк23дж - A'BA'B<br></span>
Дым сигаретами <br>
Замаскируем,<br>
Нам лучше раздетыми - <br>
Себе рекомендуем, дуем.<br>
<div class='refren'>
<span class='blue'>Тк2ж - ABAB<br></span>
А пока в твоей худи <br>
Немодной, но тёплой (немодной, но теплой)<br>
И пусть все так и будет, <br>
И снаружи бьёт по стеклам, <br>
По стеклам.</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Такие не модные, <br>
Греешь губы холодные.<br>
Мы кожей пытаемся уловить <br>
Этот мотив.<br>
Такие не модные - <br>
Шепчут губы холодные<br>
Мысли вслух, речитатив -<br>
Как мы хотим.<br>
<br>
<span class='blue'><a href='https://genius.com/Elena-temnikova-ne-modnye-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
