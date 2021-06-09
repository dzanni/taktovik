<?php
$title = 'Filatov & Karas vs Виктор Цой - Остаться с тобой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/f6wdmiG7zQE'";
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

<span class='blue'>[Куплет 1: Alida Asilgareeva] Л2-4цм? - aaabb ccdd<br></span>
Прощальный парус крепче дна,<br>
Холодный блеск лишает сна.<br>
Твоя звезда. <br>
И без расчета неизвестно, доплыву ли до земли. <br>
Мираж, чужие корабли. <br>
<div class='refren'>
Пробиты плотные опоры, обороны треснул лед. <br>
Назад - нельзя - обратный отсчет. <br>
Ремни застегнуты, помеченный в последний бой, <br>
Но ты хотел бы остаться со мной!</div>
<br>
<span class='blue'>[Припев: Виктор Цой] Тр32м - aaaaaaxx<br></span>
Я хотел бы остаться с тобой! <br>
Просто остаться с тобой! <br>
Я хотел бы остаться с тобой! <br>
Просто остаться с тобой! <br>
Я хотел бы остаться с тобой! <br>
Просто остаться с тобой! <br>
Но высокая в небе звезда <br>
Зовет меня в путь! <br>
<br>
<span class='blue'>[Куплет 2: Alida Asilgareeva]<br></span>
Всем доказал - непобедим -<br>
Ценою бесконечных зим.<br>
Одна - один. <br>
Ценою времени, растраченного краской в темноте. <br>
 Ценою песен, не спетых обо мне. <br>
<div class='refren'>
 Ты растворен до половины, полоса преград, <br>
 Которых нет - затмевает путь назад. <br>
 И высота из пустоты образовалась над тобой, <br>
 Но ты хотел бы остаться со мной! </div>
<br>
 <span class='blue'>[Припев: Виктор Цой]<br></span>
 Я хотел бы остаться с тобой! <br>
 Просто остаться с тобой! <br>
 Я хотел бы остаться с тобой! <br>
 Просто остаться с тобой! <br>
 Но высокая в небе звезда, <br>
 Зовет меня в путь! <br>
<div class='refren'>
   <span class='blue'>Дк2-4цж - AABAAACC<br></span>
 Группа крови на рукаве, <br>
 Мой порядковый номер на рукаве. <br>
 Пожелай мне удачи в бою, <br>
 Пожелай мне... <br>
 Не остаться в этой траве, <br>
 Не остаться в этой траве, <br>
 Пожелай мне удачи! <br>
 Пожелай мне-э-э удачи!</div>
<br>
<span class='blue'><a href='https://www.youtube.com/watch?v=M8dN8nNOKNQ'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Вокал - Alida Asilgareeva. В припеве использована фонограмма песни Виктора Цоя "Группа крови".
Мелодия куплетов напоминает мелодию припева песни Андрея Губина
<a href='https://youtu.be/VX0OeGMVhQM'
  target='_blank'>"Девушки, как звезды"</a> (2002).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
