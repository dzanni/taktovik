<?php
$title = 'Ани Лорак - Сумасшедшая (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/8pj5WcA_MnM'";
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

<span class='blue'>[Куплет 1] Тк4цж - AAAA<br></span>
Всё, что тебе надо знать обо мне - это моё имя.<br>
Я не такая, как все. Сколько их у тебя было?<br>
Всё не просто но ты, а ты такой милый -<br>
И вопросы мои немного наивны.<br>
<br>
<span class='blue'>[Переход] Тк34цдм - A'a<br></span>
А ты делай сам, делай сам выводы -<br>
Нравишься ли мне, или се ля ви.<br>
<br>
<span class='blue'>[Припев] Тк3жмд - AAxX'<br></span>
Разбегусь и прыгну тебе в руки -<br>
Удержи меня, схожу с ума в разлуке<br>
И смеюсь, сотрясая небеса.<br>
Здравствуй, Солнце, я — сумасшедшая!<br>
Здравствуй, Солнце, я — сумасшедшая!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Скажи, почему меня тянет к тебе, и что же за игры<br>
В этом мире, где мы так просто ранимы!<br>
И на вдохе к тебе, хочу я поближе,<br>
Чтоб в обьятиях твоих стать самой счастливой.<br>
<br>
<span class='blue'>[Переход]<br></span>
А ты делай сам, делай сам выводы -<br>
Нравишься ли мне, или се ля ви.<br>
<br>
<span class='blue'>[Припев]<br></span>
Разбегусь и прыгну тебе в руки -<br>
Удержи меня, схожу с ума в разлуке<br>
И смеюсь, сотрясая небеса.<br>
Здравствуй, Солнце, я — сумасшедшая!<br>
Здравствуй, Солнце, я — сумасшедшая!<br>
<br>
<span class='blue'>[Переход]<br></span>
А ты делай сам, делай сам выводы -<br>
Нравишься ли мне, или се ля ви.<br>
<br>
<span class='blue'>[Припев]<br></span>
Разбегусь и прыгну тебе в руки -<br>
Удержи меня, схожу с ума в разлуке<br>
И смеюсь, сотрясая небеса.<br>
Здравствуй, Солнце, я — сумасшедшая!<br>
Здравствуй, Солнце, я — сумасшедшая!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/ani-lorak-sumasshedshaya.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. На фонограмме весь переход распет как Тк4цм: "а ты дЕлай сам, дЕлай сам | вЫводЫ".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
