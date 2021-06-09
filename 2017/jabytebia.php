<?php
$title = 'Анита Цой - Я бы тебя (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/GKdaUJw_GEg'";
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

<span class='blue'>[Куплет 1] Дв52мж - aBaB<br></span>
Мы могли за горизонт лететь,<br>
 Когда любили.<br>
Все слова, что ты сказал в тот день, <br>
Покрылись пылью.<br>
<br>
<span class='blue'>[Переход] Л322ммж - abCabC<br></span>
Я не верю, что уже всё прошло,<br>
Бесполезно теперь <br>
Ворошить нашу память.<br>
Если б только ты однажды пришёл,<br>
Постучал в мою дверь <br>
И решил всё исправить -<br>
<br>
<span class='blue'>[Припев] Л3ж - AAAAAAAA<br></span>
Я бы тебя простила.<br>
 Я бы печаль забыла.<br>
Снова тебе открыла <br>
Двери в сердце, милый.<br>
Я бы тебя впустила. <br>
Я бы тепло дарила.<br>
Снова тебе открыла<br>
Все секреты мира!<br>
<br>
<span class='blue'>[Куплет 2]:<br></span>
Ты ушёл, оставив в сердце дым<br>
Пустых сомнений,<br>
Вырвал с корнем всё и стал чужим<br>
Без сожалений.<br>
<br>
<span class='blue'>[Переход]<br></span>
Я не верю, что уже всё прошло,<br>
Бесполезно теперь <br>
Ворошить нашу память.<br>
Если б только ты однажды пришёл,<br>
Постучал в мою дверь <br>
И решил всё исправить -<br>
<br>
<span class='blue'>[Припев]<br></span>
Я бы тебя простила. <br>
Я бы печаль забыла.<br>
Снова тебе открыла<br>
Двери в сердце, милый.<br>
Я бы тебя впустила. <br>
Я бы тепло дарила.<br>
Снова тебе открыла <br>
Все секреты мира!<br>
<br>
<span class='blue'>[Инструментал]<br></span>
<br>
<span class='blue'>[Припев]<br></span>
Я бы тебя простила.<br>
Я бы печаль забыла.<br>
Снова тебе открыла...<br>
<br>
Я бы тебя простила. <br>
Я бы печаль забыла.<br>
Снова тебе открыла <br>
Двери в сердце, милый.<br>
Я бы тебя впустила. <br>
Я бы тепло дарила.<br>
Снова тебе открыла <br>
 Все секреты мира!<br>
<br>
Все секреты мира!<br>
<br>
Музыка: Polyna, А. Сахаров<br>
Слова: Polyna<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/anita-coi-ya-bi-tebya.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
