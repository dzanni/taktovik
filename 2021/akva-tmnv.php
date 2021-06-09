<?php
$title = 'TMNV - Аквадискотека (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/hlYmgB0yYLA'";
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

<span class='blue'>[Припев 1] Х24ж/, Х2248ж/м - AAAAAA, AAbb</span><br>
В руку клюшку,<br>
В калик плюшку,<br>
Ставим Леху на прослушку!<br>
Домик-пушка,<br>
Топ-церквушка,<br>
Две площадки под вертушку.<br>
Взял чекушку,<br>
Друг подружку,<br>
Не пришей два восемь два!<br>
Вова, позови меня на аквадискотеку, а!<br>
<br>
<span class='blue'>[Припев 2 х2] Х4м/ - aa</span><br>
Это диска диска да!<br>
Аква дискотека, ха!<br>
Это диска диска да!<br>
Аква дискотека, ха!<br>
Это диска диска да!<br>
Аква дискотека, ха!<br>
Вова, позови меня на аква дискотеку, а!<br>
<br>
<span class='blue'>[Куплет] Дк3д/ - A'A'...</span><br>
Дико валит Энерджи,<br>
Вова с нами как tEEnager,<br>
Чёрный мерин AMG,<br>
Гелик катится в ГЕленджик,<br>
В бункере все пЕрежил,<br>
Двинул сюда на Пэ-эм-жэ,<br>
К нАм на тусу гонят Б КЭмбербетч, Трамп и Кеннеди! <span class='blue'>(Строка Дк6цд)</span><br>
<br>
<span class='blue'>[Припев 1] </span><br>
В руку клюшку,<br>
В калик плюшку,<br>
Ставим Леху на прослушку!<br>
Домик-пушка,<br>
Топ-церквушка,<br>
Две площадки под вертушку.<br>
Взял чекушку,<br>
Друг подружку,<br>
Не пришей два восемь два!<br>
Вова, позови меня на аква дискотеку, а!<br>
<br>
<span class='blue'>[Припев 2] </span><br>
Это диска диска да!<br>
Аква дискотека, ха!<br>
Это диска диска да!<br>
Аква дискотека, ха!<br>
Это диска диска да!<br>
Аква дискотека, ха!<br>
Вова, позови меня на аква дискотеку, а!<br>
  <br>
  <span class='blue'><a href='https://zapoem.com/tmnv-akvadiskoteka.html'
    target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Песня навеяна расследованием Алексея Навального
<a href='https://youtu.be/ipAnwilMncI' target="_blank">"Дворец для Путина.
  История самой большой взятки"</a>, вышедшего
19 января 2021 г. Среди объектов дворца в расследовании упоминается аквадискотека.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
