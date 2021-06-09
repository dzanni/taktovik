<?php
$title = 'MBAND - Ниточка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/t1iTDM8IEBk'";
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

<span class='blue'>[Куплет 1] Л23дм - A'A'bA'A'b<br></span>
Утром придёт ветер<br>
И заберёт этот <br>
Розовый дурман и дым!<br>
Утром придёт ветер <br>
И разорвёт сети,<br>
Те, в которых дремлешь ты!<br>
<div class='refren'>
  <span class='blue'>Дк3ж - AAAAAA<br></span>
Сколько хрустальных зАмков<br>
Мы разбили на части?<br>
Мы всё бежали за счастьем,<br>
И открывали напрасно <br>
Разным души настежь!</div>
<br>
<span class='blue'>[Припев] Л3мж? - aBaBaX'<br></span>
Мне не хватает тебя <br>
(Даже когда ты рядом!)<br>
Так не хватает тебя <br>
(Мне большего не надо!)<br>
Как ты сильна и тонка -<br>
Не исчезай, не оборвись, <span class='blue'>(Строка Л4цм)<br></span>
Ниточка! <span class='blue'>(Строка Л1д)<br></span>
<br>
<span class='blue'>[Куплет 2]<br></span>
Утром придёт ветер, <br>
Развеет в пыль эти <br>
Неотложные дела.<br>
Утром придёт ветер<br>
И разорвёт сети, <br>
Разведёт нас по углам.<br>
<div class='refren'>
Небо глядит на нас <br>
Своим всевидящим оком.<br>
Просить мне не о чем толком.<br>
Всё у меня хорошо<br>
И ровно, в общем, только -<br>
<br>
<span class='blue'>[Припев]<br></span>
Мне не хватает тебя <br>
(Даже, когда ты рядом!)<br>
Так не хватает тебя <br>
(Мне большего не надо!)<br>
Как ты сильна и тонка -<br>
Не исчезай, не оборвись...<br>
<div class='refren'>
Мне не хватает тебя <br>
(Даже, когда ты рядом!)<br>
Так не хватает тебя <br>
(мне большего не надо!)<br>
Как ты сильна и тонка -<br>
Не исчезай, не оборвись, <br>
Ниточка!</div>
<br>
Мне не хватает тебя,<br>
Так не хватает тебя, <br>
Как ты сильна и тонка -<br>
Не исчезай, не оборвись...<br>
<br>
Мне не хватает тебя <br>
(Даже, когда ты рядом!)<br>
Так не хватает тебя <br>
(Мне большего не надо!)<br>
Как ты сильна и тонка -<br>
Не исчезай, не оборвись,<br>
Ниточка!<br>
<br>
Слова и музыка: К. Меладзе<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/m/mband/10250-mband-nitochka-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
