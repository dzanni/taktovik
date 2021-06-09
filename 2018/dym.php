<?php
$title = 'Леша Свик - Дым (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/szEgSYloU-0'";
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
<span class='blue'>[Переход] Я6цм - aa<br></span>
Ты любишь этот дым. Ты любишь этот дым.<br>
Ты любишь этот дым. Ты любишь этот дым.<br>
<br>
<span class='blue'>[Куплет 1] Дк3мд - aaaB'aaX'B<br></span>
Детка, смотри в глаза.<br>
 Смотри в мои глаза.<br>
Ты знаешь, я устал.<br>
Мои, походу, красные.<br>
Детка, я завязал.<br>
Знаешь, я завязал -<br>
Похуй, что на времени <br>
Уже 4:20.<br>
<div class='refren'>
  <span class='blue'> Дк2ж - AA<br></span>
Но мы снова, снова<br>
С ней курим дома.<br>
Снова, снова <br>
Дикое порно.<br>
Снова, снова<br>
Дыма так много.<br>
Но нам так похуй, <br>
Но нам так похуй.</div>
  <span class='blue'>Тк4цж - AA<br></span>
Я залечу тебе, но чтобы не убило.<br>
И ты такая, сразу меня полюбила.<br>
А я запомню эти, эти, эти танцы,<br>
Где нам по 20, где нам по 20.<br>
<br>
<span class='blue'>[Припев х3] Л4цм - abab<br></span>
Ты любишь этот дым, дым, дым, дым, дым.<br>
А я не помню, как тебя нашёл.<br>
И знаешь - это ты, ты, ты, ты, ты,<br>
Мой вечный поджог, мой вечный поджог.<br>
<br>
<span class='blue'>[Переход]<br></span>
Ты любишь этот дым. Ты любишь этот дым.<br>
Ты любишь этот дым. Ты любишь этот дым.<br>
Ты любишь этот дым. Ты любишь этот дым.<br>
Ты любишь этот дым. Ты любишь этот дым.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
А на часах полночь, полночь,  <span class='blue'>(Строка Дк4цж)<br></span>
Кто мы с тобою?<br>
Волны волны <br>
Снова накроют.<br>
Много-много<br>
Белого дыма.<br>
Мы так красивы. <br>
Мы так красивы.<br>
<div class='refren'>
    <span class='blue'>Тк2ж? - AA<br></span>
А ты пускаешь снова <br>
Эти кольца дыма.<br>
Я понял, что с тобою <br>
Нам необходимо.<br>
Ведь мы так молоды<br>
И, кажется, успешны.<br>
Мы без одежды, <br>
Мы без одежды.<br>
<br>
<span class='blue'>[Припев х3]<br></span>
Ты любишь этот дым, дым, дым, дым, дым.<br>
А я не помню, как тебя нашёл.<br>
И знаешь - это ты, ты, ты, ты, ты,<br>
Мой вечный поджог, мой вечный поджог.<br>
<br>
Ты любишь этот дым.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/s/svik-lesha/lesha-svik-dim.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
