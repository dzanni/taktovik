<?php
$title = 'Boulevard Depo - Carousel (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/F7tlju5mwy0'";
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
Каждый день — карусель, <br>
Они кружатся по комнатке,<br>
Воруют мое сердце, <br>
И на месяц я в покойниках (ага, я, я)<br>
Династия на проводе (я, я, прием)<br>
<br>
<span class='blue'>[Припев] Тк2мд? - aB'AB'B'<br></span>
Каждый день — карусель, <br>
Они кружатся по комнатке,<br>
Воруют мое сердце, <br>
И на месяц я в покойниках (ага, эй, я)<br>
Династия на проводе (я, я, прием)<br>
<br>
<span class='blue'>[Куплет] Тк2ж/ж? - AAAA<br></span>
А ты сидишь на подоконнике, <br>
Целуешь «Покахонтас».<br>
Все легко, и все так просто,<br>
Принимай не так серьезно всё. <span class='blue'>(Строка Тк3м)<br></span>
Ведь быть разным — это sauce.<br>
Будь прекрасной — это просто.<br>
Будь со мной в свой худший год,<br>
Я курю с нею мазы,<br>
Чтобы снова стать собою.<br>
<span class='blue'>Тк2мж - aBaB<br></span>
Я для них как карусель,<br>
Они катаются, как в слоумо.<br>
Я скучаю по ним всем,<br>
Пока лечу в какой-то город.<br>
<span class='blue'>Тк2жм - XaXa<br></span>
40к и я свободен, <br>
Делать все, курю XO.<br>
Сладкий хлеб, большая жопа<br>
Прямо на мое лицо.<br>
Но сейчас я не об этом!<br>
Что ты знаешь про любовь?<br>
Я молчал, но я всё понял,<br>
А вы лжете до сих пор.<br>
Но со мной им так тепло,<br>
Они цветут даже зимой.<br>
О, боги!<br>
<br>
<span class='blue'>[Припев]<br></span>
Карусель,<br>
Они кружатся по комнатке,<br>
Воруют мое сердце,<br>
И на месяц я в покойниках (ага, эй, я)<br>
Династия на проводе (я, я, прием)<br>
<div class='refren'>Каждый день — карусель,<br>
Они кружатся по комнатке,<br>
Воруют мое сердце,<br>
И на месяц я в покойниках (ага, эй, я)<br>
Династия на проводе (я, я, прием)</div>
<br>
<span class='blue'><a href='https://text-lyrics.ru/s/st/6470-elena-temnikova-sumasshedshiy-russkiy-ft-st-text-pesni.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
