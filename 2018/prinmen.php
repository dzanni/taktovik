<?php
$title = 'Ольга Бузова - Принимай меня (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/XSOOYnLhMHE'";
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

<span class='blue'>[Припев] Х5цу14жм - XaXa<br></span>
Принимай меня близко к сердцу, <br>
Близко к телу принимай.<br>
Принимай меня, как лекарство,<br>
Как к лекарству привыкай.<br>
<div class='refren'>
<span class='blue'>Х5цу14жж - ABAB<br></span>
Принимай меня и не бойся, <br>
Мне в груди не разболеться.<br>
Успокойся, успокойся, <br>
Принимай меня ближе к сердцу.</div>
<br>
<span class='blue'>[Куплет 1] Х4-5мж - aBaB<br></span>
Принимай меня по капле грёз,<br>
Принимай всерьёз меня, как воздух.<br>
По следам души любовь найдёшь,<br>
Приходи ко мне по звёздам.<br>
<div class='refren'>
  <span class='blue'>Дк3мм - abab<br></span>
Принимай меня в мелочах<br>
И за два часа до сна<br>
Дыши мной в затяг<br>
И в затяг люби меня.</div>
<br>
<span class='blue'>[Припев]<br></span>
Принимай меня близко к сердцу, <br>
Близко к телу принимай.<br>
Принимай меня, как лекарство,<br>
Как к лекарству привыкай.<br>
<div class='refren'>Принимай меня и не бойся, <br>
Мне в груди не разболеться.<br>
Успокойся, успокойся, <br>
Принимай меня ближе к сердцу.</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Принимай меня без капли лжи,<br>
Я в тебе открою тайну.<br>
На губах дыхание дрожит, <br>
Удержи его руками.<br>
<div class='refren'>
Принимай любовь мою за мир<br>
И за два часа до сна<br>
Дыши мной, как есть,<br>
И, как есть, люби меня.</div>
<br>
<span class='blue'>[Припев]<br></span>
Принимай меня близко к сердцу, <br>
Близко к телу принимай.<br>
Принимай меня, как лекарство,<br>
Как к лекарству привыкай.<br>
<div class='refren'>Принимай меня и не бойся, <br>
Мне в груди не разболеться.<br>
Успокойся, успокойся, <br>
Принимай меня ближе к сердцу.</div>
<br>
<span class='blue'>[Аутро]<br></span>
Принимай…<br>
<br>
Музыка: А. Шаповалов<br>
Слова: А. Шаповалов и Л. Архипенко<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/b/buzova_olga/olga-buzova-prinimai-menya.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
