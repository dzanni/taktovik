<?php
$title = 'Би-2 ft. John Grant - Виски (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/J15eegjEVZk'";
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
<span class='blue'>[Куплет: John Grant] Х2м - abab</span><br>
Мой Бог суров, <br>
Сложна судьба, <br>
И мой острог – <br>
Моя изба. <br>
<div class='refren'>Но даже в мой <br>
  Дремучий лес <br>
Кривой тропой <br>
Пришел прогресс. </div>
<br>
<span class='blue'>[Припев: Би-2] Дк2ж - ABAB</span><br>
Пускай круто <br>
Меня заносит, <br>
Душа чуда<br>
Сейчас просит.<br>
<div class='refren'>Что в Иркутске, <br>
Что в Норильске  <br>
Какой русский <br>
Не пьет виски?</div>
<br>
<span class='blue'>[Куплет: John Grant]</span><br>
Лицом сердит  <br>
И нравом груб, <br>
Любовь хранит  <br>
Тройной тулуп.<br>
<div class='refren'>Но тает снег  <br>
И рвет меха <br>
Гармошка фир-<br>
мы Yamaha.</div>
<br>
<span class='blue'>[Би-2]</span><br>
Пускай круто <br>
Меня заносит, <br>
Душа чуда<br>
Сейчас просит.<br>
<div class='refren'>Что в Иркутске, <br>
Что в Норильске  <br>
Какой русский <br>
Не пьет виски?</div>
<br>
<span class='blue'>[Би-2 & John Grant]</span><br>
Пускай круто <br>
Меня заносит, <br>
Душа чуда<br>
Сейчас просит.<br>
<div class='refren'>Что в Иркутске, <br>
Что в Норильске  <br>
Какой русский <br>
Не пьет виски?</div>
<br>
<span class='blue'><a href='https://text-lyrics.ru/b1/bi-2/8329-bi2-viski-ft-john-grant-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
В основе -  самый ходовой размер русских частушек - 4-стопный хорей с парной рифмовкой
(Х4м/ж), восходящий к 2-иктному танцевальному тактовику (собственно, для поющих он и есть тактовик).
Здесь размер усложнен - вместо 4-стопного хорея - соответственно 2-стопный хорей и дольник.<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
