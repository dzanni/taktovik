<?php
$title = 'Градусы - Хочется (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Puy6whV8nc0'";
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

<span class='blue'>[Куплет 1] Л3дм - A'A'bb<br></span>
Хочется писать и не хочется.<br>
В руках опять «Сто лет одиночества».<br>
Да что такое, ёлки, со мной?<br>
Сказал бы, что ли, доктор какой!<br>
<div class='refren'>То не отхожу от холодильника,<br>
В темноте он вместо светильника,<br>
То весело без явных причин.<br>
Да просто я остался один!</div>
<br>
<span class='blue'>[Припев] Л4ц3жм - AAbb<br></span>
Я не могу уснуть вторые сутки,<br>
Что будет дальше даже думать жутко.<br>
В голове лишь дым...<br>
Я не могу больше быть один!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
И никто не капает на мозги,<br>
Можно посидеть чисто по-мужски.<br>
Весь день лежу, смотрю в потолок,<br>
Опять забыл полить твой цветок.<br>
<div class='refren'>Можно бы, конечно, но всё не так,<br>
Хоть бейся головой об дверной косяк!<br>
Посуду вымыл и сварил суп.<br>
А всё-таки, она - лучший друг!</div>
<br>
<span class='blue'>[Припев x2]<br></span>
Я не могу уснуть вторые сутки,<br>
Что будет дальше даже думать жутко.<br>
В голове лишь дым...<br>
Я не могу больше быть один!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Ладно, подожду до десятого,<br>
А после - сразу в центр Курпатова.<br>
Надеюсь, он-то не подведёт!<br>
А вдруг я уйду, она придёт?!<br>
<br>
<span class='blue'>[Припев x2]<br></span>
Я не могу уснуть вторые сутки,<br>
Что будет дальше даже думать жутко.<br>
В голове лишь дым...<br>
Я не могу больше быть один!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/gradusy_hochetsya.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Ударения на фонограмме отклоняются от нормативного русского ударения
ради унификации ритма: например, поется "И никто не кАпает нА мозги" -UUU-UU-UU вместо нормативного
"и никтО не кАпает на мозгИ" UU-U-UUUU-.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
