<?php
$title = 'БАНД´ЭРОС - Дорога к тебе (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/4jmHzVXHl8Q'";
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

<span class='blue'>[Куплет] Тк2м - AA<br></span>
Я иду, как во сне,<br>
Но как добраться к тебе?<br>
Может, голос с небес <br>
Поможет с картой и без?<br>
И я, как в темном лесу,<br>
Наковыряю в носу.<br>
Я весь мир обойду, <br>
Я весь мир обойду.<br>
<br>
Беспрепятственно...<br>
Беспрепятственно...<br>
<br>
Я, как элитный виноград, <br>
Я не знаю преград.<br>
Я превращаюсь в вино, <br>
И мне уже все равно.<br>
Хоть бутылкой красивой, <br>
Хоть посылкой счастливой<br>
Долечу-донесусь, <br>
Я весь мир обойду.<br>
<br>
Беcпрепятственно...<br>
<br>
<span class='blue'>[Припев] Тк3дм? - A'A', aa<br></span>
Преодолевая расстояния,<br>
Я уже не знаю, то что я - не я.<br>
Но я найду тебя, как во сне.<br>
Я знаю есть короткая дорога к тебе, (дорога к тебе),<br>
Короткая дорога к тебе, дорога к тебе.<br>
Короткая дорога к тебе.<br>
<br>
<span class='blue'>[Куплет]<br></span>
Я иду, как во сне, <br>
Но как добраться к тебе?<br>
Может голос с небес<br>
Поможет с картой и без.<br>
И я, как в темном лесу, <br>
Наковыряю в носу.<br>
Я весь мир обойду, <br>
Я весь мир обойду.<br>
<br>
Беспрепятственно... умм...<br>
<br>
<span class='blue'>[Припев]<br></span>
Преодолевая расстояния,<br>
Я уже не знаю, то что я - не я.<br>
Но я найду тебя, как во сне.<br>
Я знаю есть короткая дорога к тебе, (дорога к тебе),<br>
Короткая дорога к тебе, дорога к тебе.<br>
Короткая дорога к тебе.<br>
<br>
<span class='blue'>[Куплет, декламация] Тк2-3м/ж - aa, AA<br></span>
Мне подскажет чувство шестое,<br>
Что тосковать о минувшем не стоит.<br>
У сожженных мостов остов, <br>
Все карты на стол,<br>
Хватит сложных историй.<br>
Счастье в чем-то простом, <br>
Ты в Москве, я в Ростове.<br>
Crazy love story, <br>
Разминулись с тобою раз сто.<br>
Улетай хоть во Владивосток,<br>
Но мой жар твое сердце растопит.<br>
На одной из частот<br>
Изучать я настроен.<br>
Глубину твоих глаз, <br>
Как Жак-Ив Кусто.<br>
Выражаю восторг <br>
И намерен добраться с тобою <br>
До дна той бутылки, пардон.<br>
<br>
Беспрепятственно... умм...<br>
<br>
<span class='blue'>[Припев]<br></span>
Преодолевая расстояния,<br>
Я уже не знаю, то что я - не я.<br>
Но я найду тебя, как во сне.<br>
Я знаю есть короткая дорога к тебе, (дорога к тебе),<br>
Короткая дорога к тебе, дорога к тебе.<br>
Короткая дорога к тебе.<br>
<br>
Музыка: А. Дулов<br>
Слова: А. Дулов, Р. Панич<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/b1/banderos/7954-band39eros-doroga-k-tebe-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
