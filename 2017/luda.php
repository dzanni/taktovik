<?php
$title = 'Людмила Соколова - Люда хочет войти (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/f67tWI1aAn4'";
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

<span class='i'>- Ты не стой у нее на пути!<br>
Люда хочет войти! Люда хочет войти!<br>
- Ясно те?<br>
- Лёх! Лёх, ты чо?<br>
- Ничо!<br>
- Ну и вали!.. [В телефон] Лен, ну чо? Ты подъедешь?.. Да когда он твоим-то был?.. Зая, мне реально плохо!..
Да отдам я тебе их! Ни разу не надевала!.. Какая карма, Лен? Ты чо несешь? [Себе] Нет, Люда,
надо чо-то делать! <br></span>
<br>
<span class='blue'>[Куплет 1] Тк4ц3жм - AaaaBccB<br></span>
Опасная, как пуля шальная,<br>
Выходит на танцпол вся загадочная.<br>
Заводит себя, доводит себя,<br>
Ну, просто необыкновенная. <br>
Парила, улетала, чудила.<br>
Она на вкус кипящая кровь с молоком.<br>
А в голове дым, вернее, дурдом. <br>
Она на баре переборщила. <br>
<br>
<span class='blue'>[Припев] Дк4цм - aa<br></span>
Ты не стой у нее на пути!<br>
Люда хочет войти! Люда хочет войти!<br>
Люда!<br>
<br>
<span class='i'>- Грёбаные, бл... туфли!</span><br>
<br>
... не стой у нее на пути!<br>
Люда хочет войти! Люда хочет войти!<br>
Люда!<br>
Люда!<br>
Люда! <br>
<br>
<span class='i'>- Ты думаешь, я из-за твоего Убера возить перестану?
Я Убера мать возил! Садись, будь мужиком! Поехали, э?</span><br>
<br>
Люда хочет войти! Люда хочет войти! <br>
Люда!<br>
<br>
<span class='blue'>[Куплет 2] AbbbCddd<br></span>
Ее собой пленила текила,<br>
И вот уже желаний водоворот.<br>
Кружит хоровод, балдеет народ.<br>
Кайфует, и Людмилу все прет и прет.<br>
Она танцует без остановки,<br>
Давно уже не действует дезодорант.<br>
Упала в шпагат — харизма, талант.<br>
Людмила — уникальнейший экспонат.<br>
<br>
<span class='blue'>[Припев]<br></span>
Ты не стой у нее на пути!<br>
Люда хочет войти! Люда хочет войти!<br>
 Люда!<br>
... не стой у нее на пути!<br>
Люда хочет войти! Люда хочет войти!<br>
 Люда!<br>
Люда! <br>
Люда! <br>
Люда хочет войти!<br>
 Люда!<br>
<br>
Люда! <br>
(Она хочет войти!)<br>
Люда! <br>
Люда!<br>
Люда! <br>
Люда!<br>
<br>
Ты не стой у нее на пути!<br>
Люда хочет войти! Люда хочет войти!<br>
 Люда!<br>
... не стой у нее на пути!<br>
Люда хочет войти! Люда хочет войти!<br>
 Люда!<br>
Люда!<br>
 Люда! <br>
Люда!<br>
Люда хочет войти! <br>
Люда!<br>
<br>
<span class='i'>- Эй-эй, руки убери! Я капоэйрой занималась!</span><br>
<br>
<span class='blue'><a href="https://cl5.ru/publ/lyudmila-sokolova-lyuda-hochet-vojti-tekst-pesni-slova.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
