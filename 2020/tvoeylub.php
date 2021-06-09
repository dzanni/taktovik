<?php
$title = 'Ани Лорак - Твоей любимой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/bBewwoYoEHo'";
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

<span class='blue'>[Куплет 1] Тк3-4цмм - abab</span><br>
Где-то в глубине души  <br>
Себе нарисовала образ твой.  <br>
И мне некуда спешить,  <br>
Когда окутана твоим волшебством.  <br>
<br>
<span class='blue'>[Переход] Тр2м/? - aaxx</span><br>
Больше нет сил мне ждать,  <br>
Сложно так без тебя,  <br>
Кто же, если не ты, <br>
Сможет помочь?  <br>
<br>
<span class='blue'>[Припев х2] Я4жж? - ABAB</span><br>
Хочу я быть твоей любимой<br>
И просыпаться с тобой рядом.<br>
Может, характер мой ранимый,<br>
А может, и влюбилась вправду!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Цвет твоих зелёных глаз<br>
Знакомым почерком писал «люблю».<br>
Каждый миг, как в первый раз,<br>
Я в поцелуях кайф с тобою ловлю.<br>
<br>
<span class='blue'>[Переход]</span><br>
Больше нет сил мне ждать,  <br>
Сложно так без тебя,  <br>
Кто же, если не ты, <br>
Сможет помочь?  <br>
<br>
<span class='blue'>[Припев х2]</span><br>
Хочу я быть твоей любимой<br>
И просыпаться с тобой рядом.<br>
Может, характер мой ранимый,<br>
А может, и влюбилась вправду!<br>
  <br>
<span class='blue'>Источник: официальный текст под роликом Youtube</span><br>
<br>
<br>
N.B. Текст стремится к силлабике: попытка выровнять строки по числу слогов, игнорируя
естественное ударение. В нечетных строках куплетов использован 4-стопный хорей,
в четных его попытались удлинить, наращивая безударные слоги. И в тех, и в других
строках при этом оказалось случайным образом либо 3, либо 4 обязательных ударения,
т.е. получился тактовик с неупорядоченным чередованием 3-х и 4-х стоп.<br>



<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
