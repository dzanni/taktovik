<?php
$title = 'Макс Корж - Оптимист (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/48StRIVxK7A'";
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

Е!<br>
<br>
<span class='blue'>[Куплет 1] Д4м? - aa<br></span>
Эй, отключай телефон! <span class='blue'>(Строка Д3м)<br></span>
В тачку бегом - это пляжный сезон.<br>
После заката вернётесь с толпой <br>
В город, что погружается в гон.<br>
По-быстрому забежали домой <br>
Переодеться и бахнуть по сто.<br>
Лучшие годы цепляют волной, <br>
И со всех ног - <span class='blue'>(Строка Д2м)<br></span>
<br>
<span class='blue'>[Припев] Дк4цм<br></span>
Туда, где бит подбивает на движ. <br>
Музыка в центре с баров шумит.<br>
В голову залетает мотив, <br>
Его уже не остановить.<br>
Движ забирает магнит, <span class='blue'>(Строка Дк3м)<br></span>
Этот малый мне напоминает мой Минск. <span class='blue'>(Строка Тк4цм)<br></span>
Он без бабок идет на движ, <br>
Стопудовый оптимист.<br>
<br>
<span class='blue'>[Куплет 2] Дк4цм - aa<br></span>
Эй, братишка, выкрути звук. <br>
Мы на машине петляем по кругу.<br>
Выбрались развеяться, посмотреть, <br>
Как народ отдыхает тут.<br>
Две фотки в бумажнике и на пальце кольцо,<br>
Значит, нам расслабляться рано еще.<br>
Кружочек, второй, и пора пацанам, <br>
Завтра взрослые дела. <span class='blue'>(Строка Дк4м)<br></span>
<br>
<span class='blue'>[Припев]<br></span>
Но бит подбивает на движ. <br>
Музыка в центре с баров шумит.<br>
В голову залетает мотив, <br>
Его уже не остановить.<br>
Движ забирает магнит, <br>
Этот малый мне напоминает мой Минск.<br>
Он без бабок идет на движ, <br>
Стопудовый оптимист.<br>
<br>
Оптимист!<br>
Оптимист!<br>
<br>
<span class='blue'>[Припев]<br></span>
Туда, где бит подбивает на движ. <br>
Музыка в центре с баров шумит.<br>
В голову залетает мотив, <br>
Его уже не остановить.<br>
Движ забирает магнит, <br>
Этот малый мне напоминает мой Минск.<br>
Он без бабок идет на движ, <br>
Стопудовый оптимист.<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/m1/max-korj/8232-maks-korzh-optimist-text-pesni.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
