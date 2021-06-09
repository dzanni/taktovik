<?php
$title = 'Sabi Miss - Шлепать (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/lZ9jLAtzKy8'";
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

<span class='blue'>[Куплет 1] Тк2-4ц - aa, AA, A'A'<br></span>
Я буду тебя шлепать!<br>
Я буду тебя шлепать за плохой рэп.<br>
Один шлёп за один куплет.<br>
Тебе даже это нравится — не секрет!<br>
Жаль, что больше куплетов нет!<br>
<div class='refren'>
Я буду тебя шлепать за твои текста (оу!)<br>
Словно ты читаешь с чистого листа.<br>
Ты думаешь, ты Бог, тигр (ррр),<br>
Но в моих глазах ты лишь лох, ​​пидор!</div>

В кругу своих друзей ты авторитет,<br>
Но кроме маминых котлет, у тебя нет котлет.<br>
В своих треках меня называешь bitch, но<br>
Повтори-ка это лично!<br>
<br>
<span class='blue'>[Переход х2] Тк23ж - AAA<br></span>
Я буду тебя шлепать, <br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
<br>
<span class='blue'>[Припев х2] (Тк23ж - AAAAA)<br></span>
Я буду тебя шлёпать! (ха-ха-ха-ха-ха-xa)<br>
Я буду тебя шлёпать! (ай, оу)<br>
Я буду тебя шлёпать!<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я буду тебя шлёпать!<br>
Я буду тебя шлёпать за твои биты (о)<br>
Не качает басc, не качаешь ты!<br>
Девочка на миллион, спрячь свои рубли!<br>
Ты читаешь про Phantom, сидя в Uber'е.<br>
<div class='refren'>
Руки убери, ведь ты псевдорэппер, и (и)<br>
За твои подкаты тебя банит рефери (ой!)<br>
Твой музыкальный стиль — это словно попурри,<br>
Две минуты напрягался, после сразу покурил!</div>

Шлёпать, я буду шлёпать этих дутых кур.<br>
Если ты главный экспонат, то я - Серега Шнур (да)<br>
Поставлю в ряд и буду словно шарики их лопать,<br>
Пока они все будут говорить - я буду тебя шлёпать! <span class='blue'>(Строка Тк5цж)</span><br>
<br>
<span class='blue'>[Переход]<br></span>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
Я буду тебя шлепать, <br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Я буду тебя шлёпать! (ха-ха-ха-ха-ха-xa)<br>
Я буду тебя шлёпать! (ай, оу)<br>
Я буду тебя шлёпать!<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
<br>
(Ха-ха-ха-ха-ха)<br>
(Ай, оу)<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
<br>
<span class='blue'>[Припев]<br></span>
Я буду тебя шлёпать! (ха-ха-ха-ха-ха-xa)<br>
Я буду тебя шлёпать! (ай, оу)<br>
Я буду тебя шлёпать!<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
Шлёп, шлёп, шлёп, шлёп, шлёпать!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/s/sabi-miss/sabi-miss-ya-budu-tebya-shlepat.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма м не группу согласных = ж: "тИг-р - пИдор". м=д: "рублИ - Uber´е".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
