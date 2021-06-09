<?php
$title = 'DJ SMASH - Моя любовь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wscTLSeKbyU'";
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

<span class='blue'>[Куплет] Дк4цж - AAAA<br></span>
Забирай все что хочешь, но только не это.<br>
Остальное бери и жги, никто не заметит.<br>
Забывай даже имя, но только не это.<br>
Остальное сотри, как пыль с белого цвета.<br>
<br>
<span class='blue'>[Припев] Л4цж? - AAAA<br></span>
А моя любовь туманом не станет.<br>
Она еще выше — и все же за гранью.<br>
А моя любовь ночами мерцает,<br>
Ты ее видишь, она это знает.<br>
Она это знает!<br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'>[Припев]<br></span>
А моя любовь туманом не станет.<br>
Она еще выше — и все же за гранью.<br>
А моя любовь ночами мерцает,<br>
Ты ее видишь, она это знает.<br>
Она это знает!<br>
(Она это знает!)<br>
<br>
Она это знает!<br>
(Она это знает!)<br>
<br>
Она это знает!<br>
<br>
<span class='blue'>Источник: расшифровка клипа</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
