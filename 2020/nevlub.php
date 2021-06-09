<?php
$title = 'Mary Gu - Не влюбляйся (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/8-PTbvQWa0I'";
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

<span class='blue'>[Куплет 1] Тк1-4цжжд? - ABC'ABC'AADD</span><br>
Если честно, <br>
Можно даже<br>
Не пытаться держать дистанцию,<br>
Если честно, <br>
Между нами<br>
Ещё минут 15 максимум.<br>
Станет тесно, <br>
Слишком тесно<br>
В этой комнате огромной.<br>
Я забуду забыть, ты забудешь запомнить.<br>
<br>
<span class='blue'>[Переход] Ак2мм - abab, ababaab</span><br>
И кто-то, а не я, <br>
Дотронется до души.<br>
Снова не про меня, <br>
И не мне напиши.<br>
И в чём тебя обвинять?<br>
У каждого своя жизнь!<br>
  <div class='refren'>И кто-то, но не ты, <br>
  Мне в баре нальёт ещё,<br>
  Я попробую остыть<br>
  К тебе за его счёт.<br>
  Но кроме пустоты,<br>
  Ничего внутри,<br>
  Вот чёрт!</div>
<br>
<span class='blue'>[Припев] Тк2дд? - A'B'A'B'</span><br>
Не влюбляйся, милая, <br>
Не люби, пожалуйста!<br>
Оттолкни его силою, <br>
Или он безжалостно<br>
  <div class='refren'>Растопчет и выбросит <br>
  Сердце твоё алое.<br>
  Не влюбляйся, милая, <br>
  Не люби, пожалуйста!</div>
<br>
<span class='blue'>[Куплет 2] Х4жж? - ABAB</span><br>
Мне пора бы сесть в машину <br>
И уехать без оглядки,<br>
Мне пора себе внушить, что <br>
Ты и без меня в порядке.<br>
  <div class='refren'>До утра из-за тебя не <br>
  Спать паршиво, если честно,<br>
  Ты такой же, как все, с кем мне<br>
  Рядом не место. <span class='blue'>(Строка Д2ж)</span></div>
<br>
<span class='blue'>[Переход]</span><br>
И кто-то, а не я, <br>
Дотронется до души.<br>
Снова не про меня, <br>
И не мне напиши.<br>
И в чём тебя обвинять?<br>
У каждого своя жизнь!<br>
  <div class='refren'>И кто-то, но не ты, <br>
  Мне в баре нальёт ещё,<br>
  Я попробую остыть<br>
  К тебе за его счёт.<br>
  Но кроме пустоты,<br>
  Ничего внутри,<br>
  Вот чёрт!</div>
<br>
  <span class='blue'>[Припев]</span><br>
  Не влюбляйся, милая, <br>
  Не люби, пожалуйста!<br>
  Оттолкни его силою, <br>
  Или он безжалостно<br>
    <div class='refren'>Растопчет и выбросит <br>
    Сердце твоё алое.<br>
    Не влюбляйся, милая, <br>
    Не люби, пожалуйста!</div>
<br>
<span class='blue'>[Финал] Тк2-3дм - A'bA'b</span><br>
Что с тобою, милая? <br>
Что с тобою, не пойму!<br>
Собиралась с силами, <br>
Но сдалась легко ему.<br>
  <div class='refren'>
  Почему колотится <br>
  Твоё сердце, милая?<br>
  Мир был явно против, но<br>
  Ты уже влюбилась.</div>
  <br>
<span class='blue'><a href='https://teksty-pesenok.ru/mary-gu/tekst-pesni-ne-vlyublyajsya/6808020/'
  target='_blank'>Источник</a></span><br>
  <br>
  <br>
P.S. Рифма д=ж: МИлая - влюбИлась.  <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
