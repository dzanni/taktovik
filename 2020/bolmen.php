<?php
$title = 'Дантес - Более или Менее (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/SmX8AiEljzM'";
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

<span class='blue'>[Куплет 1] Тк2-4ц/ - aa, AA, A'A'</span><br>
Не го- не гони- не гонись за ним,<br>
У него же взгляд - туман, в легких дым.<br>
Да черт с ним!<br>
Не бо- не боясь, небу ясному улыбаясь<br>
Упала в грязь напрасно!<br>
<br>
<span class='blue'>[Переход] Тк4ц3м/? - aaxa</span><br>
  Пой, пой, только не реви,<br>
  Он не стоит слёз твоих.<br>
  Ведь он, он забрал себе всё,<br>
  Что ты делила на двоих!<br>
<br>
<span class='blue'>[Припев] Тк2-4цд/м - A'A'A'bbbX</span><br>
Более или менее.<br>
Больно, но холодно в сезон отопления.<br>
Это преступление.<br>
Не кричи, постой!<br>
Бей посуду, бокал наполовину пустой (йой, йой)<br>
Бокал наполовину пустой (йой, йой)<br>
Бокал наполовину.<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Не зо- не зови- независимый, но всё же<br>
Остался должен мурашкам на коже.<br>
Нету, нету сил! Не тусила ты той ночью,<br>
А он уходит молча.<br>
<br>
<span class='blue'>[Переход]</span><br>
  Пой, пой, только не реви,<br>
  Он не стоит слёз твоих.<br>
  Ведь он, он забрал себе всё,<br>
  Что ты делила на двоих!<br>
<br>
<span class='blue'>[Припев]</span><br>
Более или менее.<br>
Больно, но холодно в сезон отопления.<br>
Это преступление.<br>
Не кричи, постой!<br>
Бей посуду, бокал наполовину пустой (йой, йой)<br>
Бокал наполовину пустой (йой, йой)<br>
Бокал наполовину.<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
Проданы билеты, на спектакль нет мест.<br>
Снегом замело любимый тёплый подъезд.<br>
Кто-то хочет помочь, кто-то высказать мнение.<br>
Ну как ты там? (как ты? как ты? как ты?)<br>
<br>
<span class='blue'>[Припев]</span><br>
Более или менее.<br>
Больно, но холодно в сезон отопления.<br>
Это преступление.<br>
Не кричи, постой!<br>
Бей посуду, бокал наполовину пустой (йой, йой)<br>
Бокал наполовину пустой (йой, йой)<br>
Бокал наполовину пустой.<br>
  <br>
(Наполовину пустой)<br>
<br>
<span class='blue'>Источник: официальный текст под клипом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
