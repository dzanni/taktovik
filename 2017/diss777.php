<?php
$title = 'MC Хованский - Дисс на Азино три топора (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/t9gtkOEi41Y'";
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

<span class='blue'>[Интро]<br></span>
«Азино» семь-семь-семь.<br>
<br>
<span class='blue'>[Куплет] Тк3мм - abab<br></span>
За-за-зашел на сайт (у!)<br>
Пива с чипсонами взял.<br>
Где мой любимый халат? (где?)<br>
Ща как гляну сериал!<br>
<div class='refren'>
Да-давай включай!<br>
Рекламу скорей, и погнал!<br>
Только не она, Господь, прошу! <span class='blue'>(Строка Тк4цм)</span><br>
Но вот опять! <span class='blue'>(Строка Тк2м)</span></div>
Все говорят: «АК, <br>
А как поднять бабла?» (как?)<br>
Куда нажать, <span class='blue'>(Строка Тк2м)</span><br>
Чтоб закрылась вся эта хуйня?<br>
<div class='refren'><span class='blue'>Я3жм - AbAb<br></span>
Люблю «Игру престолов»,<br>
Но не люблю АК<br>
Готов на что угодно, <br>
Чтоб началась «Игра»!</div>
<br>
<span class='blue'>[Припев] Тк2-4цмм - xaxa<br></span>
«Азино» три топора<br>
За-за-заебло меня!<br>
Больше не могу,<br>
Вокруг везде злоебучий спам!<br>
<div class='refren'>Дернул за канат —<br>
Табуретка упала на пол.<br>
Я больше не могу жить<br>
В галактике трех топоров!</div>
<br>
<span class='blue'><a href="https://genius.com/Mc-hovansky-azino-diss-lyrics"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Пародия на рекламный ролик <a href='azino.php'>"Азино три топора"</a> (вывешен на Youtube 7.09.2017).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
