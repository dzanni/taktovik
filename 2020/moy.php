<?php
$title = 'LOBODA - Мой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/G-kCOYB8Nu0'";
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

<span class='blue'>[Куплет 1] Я556м/мж - AAbXCCb</span><br>
Я променяю боль на сигарету,<br>
И на Repeat поставлю песню эту,<br>
И буду танцевать сегодня до утра<br>
С тобою вместе.<br>
И напишу четыре ровных строчки<br>
И не поставлю между ними точки,<br>
Лишь буду танцевать, с тобою танцевать.<br>
<br>
<span class='blue'>[Припев] Я447ж/жм - AAbCCb</span><br>
Вернись, мой сумасшедший мальчик!<br>
И пусть мы стали чуть постарше,<br>
Я знаю, что ты будешь ждать и помнить обо мне,<br>
Обо мне, и-йе, и йе!<br>
Оставь мою ошибку в прошлом,<br>
Представь, что стала я хорошей,<br>
А ты - мой самый-самый лучший день в календаре!<br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'>[Куплет 2]<br></span>
Давай не будем выходить из дома,<br>
Отключим новости и телефоны.<br>
И будем до утра сегодня танцевать<br>
С тобою вместе.<br>
По радио мой новый хит играет,<br>
Скажи мне, что же дальше будет с нами?<br>
Никто из нас с тобой ни в чём не виноват!<br>
(Никто не виноват!)<br>
<br>
<span class='blue'>[Припев]</span><br>
Вернись, мой сумасшедший мальчик!<br>
И пусть мы стали чуть постарше,<br>
Я знаю, что ты будешь ждать и помнить обо мне,<br>
Обо мне, и-йе, и йе!<br>
Оставь мою ошибку в прошлом,<br>
Представь, что стала я хорошей,<br>
А ты - мой самый-самый лучший день в календаре!<br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'>[Куплет 3] Я5ж/ж? - aabb<br></span>
Возьми свою печаль и тёмные очки.<br>
Везёт меня к тебе холодное такси,<br>
Играет стильный бит, и мир летит с петель,<br>
Но ты — мой самый лучший день (день, день)!<br>
<br>
<span class='blue'>[Припев]</span><br>
Вернись, мой сумасшедший мальчик!<br>
И пусть мы стали чуть постарше,<br>
Я знаю, что ты будешь ждать и помнить обо мне,<br>
Обо мне, и-йе, и йе!<br>
Оставь мою ошибку в прошлом,<br>
Представь, что стала я хорошей,<br>
А ты - мой самый-самый лучший день в календаре!<br>
<br>
Музыка: Кирилл Павлов<br>
Слова: Артём Иванов и Кирилл Павлов<br>
<br>
 <span class='blue'><a href='https://www.gl5.ru/loboda-moi.html'
   target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
