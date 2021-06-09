<?php
$title = 'Ленинград - Цой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/WuFyjV7LaQc'";
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

<span class='blue'>[Куплет 1] Л2-4жм - AbAbCCb<br></span>
Я на балконе <br>
Курил с фарцой,<br>
В магнитофоне<br>
Пилил нам Цой.<br>
Надменным делал лицо я,<br>
Танцую стоя под Цоя,<br>
И улыбался с хитрецой!<br>
<br>
<span class='blue'>[Припев]  Х3ж - AAAA AAA<br></span>
Просто в 90-м <br>
Поломали нос нам,<br>
Не в простом, а просто, <br>
Просто в 90-м!<br>
<div class='refren'>Просто в 90-м <br>
Поломали нос нам,<br>
Не в простом, а просто (А-а)</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
На остановке<br>
Почти пустой<br>
Стоял неловкий <br>
Под знаком «Стой».<br>
О чем-то пелось Мадонне,<br>
Пивко плескалось в бидоне,<br>
Район был полон гопотой.<br>
<br>
<span class='blue'>[Припев]<br></span>
Просто в 90-м <br>
Поломали нос нам,<br>
Не в простом, а просто, <br>
Просто в 90-м!<br>
<div class='refren'>Просто в 90-м <br>
Поломали нос нам,<br>
Не в простом, а просто (А-а)</div>
<br>
<span class='blue'>[Бридж х2]<br></span>
Просто в 90-м!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Я на Садовой, <br>
Сейчас — Сенной,<br>
Мимо столовой<br>
Как основной.<br>
Штаны чуть шире, чем надо,<br>
Играет где-то ламбада,<br>
Услышал шепот за спиной.<br>
<br>
<span class='blue'>[Припев]<br></span>
Просто в 90-м <br>
Поломали нос нам,<br>
Не в простом, а просто, <br>
Просто в 90-м!<br>
<div class='refren'>Просто в 90-м <br>
Поломали нос нам,<br>
Не в простом, а просто (А-а)</div>
<br>
<span class='blue'>[Бридж х6]<br></span>
Просто в 90-м!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Дальше действовать будем мы!<br>
<br>
<span class='blue'><a href='https://genius.com/Leningrad-tsoi-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
