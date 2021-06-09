<?php
$title = 'LOBODA - Instadrama (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/lfH17rgr_Xw'";
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

<span class='blue'>[Куплет 1] Ан3мж - aBaB<br></span>
Вот и мы расстаёмся с тобой,<br>
Закрывая на сердце все двери.<br>
Ты становишься снова мечтой<br>
И моей самой главной потерей.<br>
<div class='refren'>
Мы смотрели друг другу в глаза<br>
И считали упавшие звёзды.<br>
Видно, небо решило за нас -<br>
Этим птицам летать уже поздно.</div>
<br>
<span class='blue'>[Припев] Я331ж|м? - AAbbA<br></span>
Останемся друзьями<br>
На память в Инстаграме.<br>
И снова день за днём <br>
Я наш фотоальбом <br>
Листаю.<br>
Холодными ночами <br>
Одна под небесами<br>
Сгораю вся дотла, <br>
И к жизни без тебя <br>
Я привыкаю.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Где-то там, в суете новых дней,<br>
По чужим адресам разбежались<br>
Двое самых счастливых людей<br>
В незаконченном ярком романе.<br>
<div class='refren'>
Я останусь в последней главе -<br>
Там, где вечер лиловым закатом<br>
Мне напомнит опять о тебе<br>
И о том, как любила когда-то.</div>
<br>
<span class='blue'>[Припев]<br></span>
Останемся друзьями<br>
На память в Инстаграме.<br>
И снова день за днём <br>
Я наш фотоальбом <br>
Листаю.<br>
Холодными ночами <br>
Одна под небесами<br>
Сгораю вся дотла, <br>
И к жизни без тебя <br>
Я привыкаю.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Останемся друзьями<br>
На память в Инстаграме.<br>
И снова день за днём <br>
Я наш фотоальбом <br>
Листаю.<br>
Холодными ночами <br>
Одна под небесами<br>
Сгораю вся дотла, <br>
И к жизни без тебя <br>
Я привыкаю.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/loboda-instadrama.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
