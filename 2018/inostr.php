<?php
$title = 'T-Fest - Иностранец (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/l4RXpM7pGFg'";
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

<span class='blue'>[Припев] Тк4цд - A''A''<br></span>
Я везде, как иностранец, слышишь, мы разные!<br>
Я спешу, но не опаздываю, лёжа на заднике.<br>
Десять тысяч километров, да, я снова в самике!<br>
Мы заберём твои бумажки, но мы не карманники!<br>
<br>
<span class='blue'>[Куплет 1] Тк4цм/ж? - aa, AA<br></span>
Суета — мне это надо! <span class='blue'>(Строка Тк2ж)<br></span>
Я не привык считать дни до своей зарплаты.<br>
Я типа весь такой один, но нас дохуя тут!<br>
Если мне что-то надо, то я просто забираю.<br>
<div class='refren'>
  <span class='blue'>Тк34цм - aa<br></span>
Эй, мне похуй, кто звезда в этом году!<br>
Я делал деньги не для сук, а на еду.<br>
Ты назовёшь этих мышей своим крю.<br>
Они зашли и через дыры с корабля бегут.</div>
<br>
<span class='blue'>[Припев]<br></span>
Я везде, как иностранец, слышишь, мы разные!<br>
У тебя проблемы? У меня тоже, но они разные.<br>
У тебя есть суки? У нас тоже, они разные.<br>
У тебя монеты, а у нас купюры красные.<br>
<div class='refren'>
Везде, как иностранец, слышишь, мы разные!<br>
У тебя проблемы? У меня тоже, но они разные.<br>
У тебя есть суки? У нас тоже, они разные.<br>
У тебя монеты, а у нас купюры красные.</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я всегда на телефоне — двадцать дел за три минуты.<br>
Из квадратов треугольник — мы меняем все маршруты.<br>
Для них сделал больше братьев — я не называю сквад,<br>
Нас встречают наши люди — Черновцы или Москва.<br>
<div class='refren'>
Смотри, кто вокруг меня, от него коллекторА.<br>
Это лучшая команда, сборная за все года.<br>
Мы летим, как будто стая, забирая всё лавэ.<br>
Наша простота для них — самый чистый беспредел!</div>
<br>
<span class='blue'>[Бридж] Тк24цж - aa<br></span>
Не пытайся рассказать мне<br>
Про пиздатые тряпки!<br>
Ведь мы из лужи, и мы выросли в этом.<br>
Всё, что надето здесь, становится трендом.<br>
<div class='refren'>Не пытайся рассказать мне<br>
За пиздатые тряпки!<br>
Ведь мы из лужи, и мы выросли в этом.<br>
Всё, что надето здесь, становится трендом.</div>
<br>
<span class='blue'>[Припев]<br></span>
Я везде, как иностранец, слышишь, мы разные!<br>
У тебя проблемы? У меня тоже, но они разные.<br>
У тебя есть суки? У нас тоже, они разные.<br>
У тебя монеты, а у нас купюры красные.<br>
<div class='refren'>
Везде, как иностранец, слышишь, мы разные!<br>
У тебя проблемы? У меня тоже, но они разные.<br>
У тебя есть суки? У нас тоже, они разные.<br>
У тебя монеты, а у нас купюры красные.</div>
<br>
<span class='blue'><a href='https://genius.com/T-fest-a-foreigner-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
