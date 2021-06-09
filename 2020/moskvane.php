<?php
$title = 'Руки Вверх / Artik & Asti - Москва не верит слезам (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/tdOYZmtjBu4'";
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


<span class='blue'>[Припев, Аня Асти] Дк34цмм? - abab</span><br>
Москва не верит слезам,<br>
А я не верю глазам твоим.<br>
Это счастливый финал,<br>
Но только не для нас двоих.<br>
  <div class='refren'>Москва не верит!</div>
<br>
<span class='blue'>[Куплет 1, Сергей Жуков] Дв4443мм - abab</span><br>
Нам больше некуда бежать,<br>
Мы остались далеки.<br>
Я учусь тебя не ждать,<br>
А ты не ждёшь звонки.<br>
  <div class='refren'>
    <span class='blue'>Тр2жж? - ABAB</span><br>
  Закаты-рассветы, <br>
  Дым сигарет - он<br>
  Растает под утро, <br>
  Мысли раздеты.</div>
<span class='blue'>Ам3м/ - aa</span><br>
Не бойся, не верь, не проси!<br>
На улице ждёт такси.<br>
<br>
<span class='blue'>[Припев, Аня Асти]</span><br>
Москва не верит слезам,<br>
А я не верю глазам твоим.<br>
Это счастливый финал,<br>
Но только не для нас двоих.<br>
  <div class='refren'>Москва не верит слезам,<br>
  А я не верю глазам твоим.<br>
  Это счастливый финал,<br>
  Но только не для нас двоих.</div>
Москва не верит!<br>
<br>
<span class='blue'>[Куплет 2, Аня Асти]</span><br>
Нам больше нечего терять,<br>
Я уеду ровно в семь.<br>
Если говорить "Прощай",<br>
То только насовсем.<br>
  <div class='refren'>Закаты - рассветы, <br>
  Счастья минуты<br>
  Тратим просто на ветер - <br>
  Зная, что глупо.</div>
Не бойся, не плачь и не верь!<br>
Меня ждёт такси у дверей.<br>
<br>
<span class='blue'>[Припев, Аня Асти]</span><br>
Москва не верит слезам,<br>
А я не верю глазам твоим.<br>
Это счастливый финал,<br>
Но только не для нас двоих.<br>
  <div class='refren'>Москва не верит слезам,<br>
  А я не верю глазам твоим.<br>
  Это счастливый финал,<br>
  Но только не для нас двоих.</div>
Москва не верит!<br>
<br>
<span class='blue'>[Куплет 3, Артем Артик] Тк2-3мж - aBaB</span><br>
В ее глазах боль, <br>
Плачет ее сердце.<br>
Такси в аэропорт, <br>
И первым рейсом!<br>
  <div class='refren'>Подальше от него - <br>
  К черту такие чувства!<br>
  Он взял от неё всё, <br>
  Теперь в душе так пусто!</div>
<span class='blue'>Дв2мж - aBaB</span><br>
Дожди, дожди - <br>
Сплошные грозы.<br>
Не верь, не жди - <br>
Слишком поздно!<br>
  <div class='refren'>
  <span class='blue'>Дк4цм/ - аа</span><br>
  Все его обещания лишь только ложь,<br>
  Что же ты натворил? Потом поймёшь!</div>
<br>
<span class='blue'>[Припев, Аня Асти]</span><br>
Москва не верит слезам,<br>
А я не верю глазам твоим.<br>
Это счастливый финал,<br>
Но только не для нас двоих.<br>
  <div class='refren'>Москва не верит слезам,<br>
  А я не верю глазам твоим.<br>
  Это счастливый финал,<br>
  Но только не для нас двоих.</div>
Москва не верит!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/bi2-depressiya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
