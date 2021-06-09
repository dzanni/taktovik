<?php
$title = 'Элджей - Рваные джинсы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/AS_uBieKtmg'";
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

Sayonara Boy!<br>
Sayonara Boy!<br>
<br>
<span class='blue'>[Припев] Дк4цж - AAAA<br></span>
Детка, ты любишь рваные джинсы.<br>
О-о-о, о-о-очень рваные джинсы.<br>
Детка, ты любишь рваные джинсы.<br>
О-о-о, о-о-очень рваные джинсы.<br>
<br>
<span class='blue'>[Куплет 1] Тк4цж - AA<br></span>
Baby (Baby!), твои глаза, твои дреды.<br>
Люди вокруг нас всего лишь скелеты. <br>
Я хочу тебя даже одетой. <br>
Быть такими, такими, такими, как мы, под запретом.<br>
<div class='refren'>
В твоем лофте ты, ты, ты, ты в моей кофте. <br>
Фотки, фотки, фотки, фотки, если мы на тусовке.<br>
Любимые кроссовки топчут с тобою вместе.<br>
Мы жуём мятную жёвку под одну из моих песен.</div>
<br>
<span class='blue'>[Припев]<br></span>
Детка, ты любишь рваные джинсы.<br>
О-о-о, о-о-очень рваные джинсы.<br>
Детка, ты любишь рваные джинсы.<br>
О-о-о, о-о-очень рваные джинсы.<br>
<div class='refren'><span class='blue'>Тк34цдж - A'xA'A'<br></span>
О-о! О-о-о! О-о-о!<br>
О-о-о, о-о-очень рваные джинсы.<br>
О-о! О-о-о! О-о-о!<br>
О-о-о! О-о! О-о-о! О-о-о!</div>
<br>
<span class='blue'>[Куплет 2] Тк4цм/ж - aa, AA<br></span>
Девочка-чупачупс, перегазировка чувств.<br>
Я торчу на тебе, ведь я этого хочу.<br>
И ты тоже (тоже, тоже!), бегут мурашки по коже.<br>
Глаза-стекляшки...<br>
<div class='refren'>
В стакане газировка с ягодным сиропом.<br>
У нас передозировка, не звоните копам!<br>
В стакане газировка с ягодным сиропом.<br>
У нас передозировка, не звоните копам!</div>
<br>
<span class='blue'>[Припев]<br></span>
Детка, ты любишь рваные джинсы.<br>
О-о-о, о-о-очень рваные джинсы.<br>
Детка, ты любишь рваные джинсы.<br>
О-о-о, о-о-очень рваные джинсы.<br>
<div class='refren'>
О-о! О-о-о! О-о-о!<br>
  О-о-о, о-о-очень рваные джинсы.<br>
О-о! О-о-о! О-о-о!<br>
  О-о-о! О-о! О-о-о! О-о-о!</div>
<br>
Sayonara Boy!<br>
Sayonara Boy!<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/a/allj/7730-eldzhej-rvanie-dzhinsi-text-pesni.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
