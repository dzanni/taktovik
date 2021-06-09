<?php
$title = 'Мари Краймбрери - Пряталась в ванной (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ox5BNg_jb_k'";
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

<span class='i'>Влияние среды и общества превращают наш внутренний мир<br>
в полыхающий, заброшенный дом.<br>
Обстоятельства заводят каждого из нас в свою "ванную",<br>
где мы прячемся, вознося стены вокруг себя.<br>
И мы остаёмся наедине со своими страхами и болью,<br>
сковывающими нас в тупике безысходности.<br>
Из которого далеко не каждый сможет выбраться<br>
с высоко поднятой головой.<br>
</span>
<br>

<span class='blue'>[Куплет 1] Л25цмм? - aaaxabba</span><br>
Не посмела держать,<br>
И лучший друг делает худший расклад.<br>
И, как на зло, в городе не снегопад, <br>
И все увидят соль по дороге домой. <br>
Она стала дрожать,<br>
А лучший друг не знает, куда себя деть,<br>
Меняет планы, пытаясь никак не задеть<br>
больную тему. Даже за руку страшно держать. <br>
(За руку страшно держать) <br>
 <br>

<span class='blue'>[Припев] Л42жж? - AbAb <br></span>
Мир вокруг неё крутил, <br>
Называл странной. <br>
Выхода не находила, <br>
Пряталась в ванной. <br>
<div class='refren'><span class='blue'>Х3д/ - A'A'<br></span>
Плакать будет долго ли? <br>
Гадали да думали. </div>
Поутру пила espresso <br>
Возле фонтана, <br>
Небо с интересом <br>
Наблюдало за планом. <br>
<div class='refren'>Станет легче, знает ли? <br>
Гадали да думали. </div>
 <br>
<span class='blue'>[Куплет 2] Тк5ж/ - AAAA<br></span>
Мир гладок да гадок, и они сходят с ума от догадок. <br>
И почему по вкусу сладок осадок от града? <br>
И почему проходит время и новому рада?<br>
Что это, блин, за правда, если вечной не стала баллада? <br>
<div class='refren'>
  <span class='blue'>Тк4цм/ - AAAA  <br></span>
Ла-ла-ла! Как могла, так и берегла. <br>
Говорила, без него умрёт, но жива. <br>
Так, получается, врала - она тоже врала. <br>
И без ответа это всё. Такие вот дела. </div>
 <br>
 <span class='blue'>[Припев] <br></span>
 Мир вокруг неё крутил, <br>
 Называл странной. <br>
 Выхода не находила, <br>
 Пряталась в ванной. <br>
 <div class='refren'>Плакать будет долго ли? <br>
 Гадали да думали. </div>
 Поутру пила espresso <br>
 Возле фонтана, <br>
 Небо с интересом <br>
 Наблюдало за планом. <br>
 <div class='refren'>Станет легче, знает ли? <br>
 Гадали да думали. </div>
 <br>
<span class='blue'>[Инструментал] <br></span>
 <br>
 <span class='blue'>[Припев] <br></span>
 Мир вокруг неё крутил, <br>
 Называл странной. <br>
 Выхода не находила, <br>
 Пряталась в ванной. <br>
 <div class='refren'>Плакать будет долго ли? <br>
 Гадали да думали. </div>
 Поутру пила espresso <br>
 Возле фонтана, <br>
 Небо с интересом <br>
 Наблюдало за планом. <br>
 <div class='refren'>Станет легче, знает ли? <br>
 Гадали да думали. </div>
 <br>
Слова и музыка: Мари Краймбрери <br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/m/mari-kraimbreri/mari-kraimbreri-pryatalas-v-vannoi.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
