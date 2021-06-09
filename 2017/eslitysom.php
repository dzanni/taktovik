<?php
$title = 'Олег Майами - Если ты со мной (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/N89_ZTq4CJ0'";
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

<span class='blue'>[Куплет 1] Л4цж - AAAA</span><br>
Я хочу тебе верить, быть просто рядом.<br>
Будет наша любовь в твоей помаде.<br>
Мокрый-мокрый асфальт учу глазами.<br>
Без тебя не могу, но ты же знаешь:<br>
<br>
<span class='blue'>[Припев] Л32жм - AB'AB'<br></span>
Если ты со мной в этом мире, <br>
Тогда, без сомнения,<br>
Каждая секунда в жизни <br>
Имеет значение!<br>
<div class='refren'>Если ты со мной в этом мире, <br>
Тогда, без сомнения,<br>
Каждая минута в жизни <br>
Имеет значение!</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Маяки городов теряю будто -<br>
Это просто любовь в тумане мутном.<br>
Я хочу целый мир толкнуть руками,<br>
Чтобы только сейчас мы не молчали!<br>
<br>
<span class='blue'>[Припев]<br></span>
Если ты со мной в этом мире, <br>
Тогда, без сомнения,<br>
Каждая секунда в жизни <br>
Имеет значение!<br>
<div class='refren'>Если ты со мной в этом мире, <br>
Тогда, без сомнения,<br>
Каждая минута в жизни <br>
Имеет значение!</div>
<br>
<span class='blue'>[Song Instrumental Bridge]<br></span>
<br>
<span class='blue'>[Припев х2]<br></span>
Если ты со мной в этом мире, <br>
Тогда, без сомнения,<br>
Каждая секунда в жизни <br>
Имеет значение!<br>
<div class='refren'>Если ты со мной в этом мире, <br>
Тогда, без сомнения,<br>
Каждая минута в жизни <br>
Имеет значение!</div>
<br>
<span class='blue'><a href="https://www.gl5.ru/m/mayami-oleg/oleg-mayami-esli-ti-so-mnoi.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
