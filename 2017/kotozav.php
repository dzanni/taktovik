<?php
$title = 'Семен Слепаков - Котозависимость (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xIGHZ6fv6TM'";
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

<span class='blue'>[Куплет 1] Дк3343м? - aaXa, xaxa, aaaa<br></span>
Вот уже целый год <br>
Есть в моей жизни кот.<br>
Он поселился в моей квартире<br>
И здесь очень нагло живёт.<br>
Думает кот, что он крут! <br>
Думает кот, что я слаб.<br>
Кот полагает, что я его <br>
Тупой неуклюжий раб.<br>
<div class='refren'>Что должен я с ним играть, <br>
В лотке наполнитель менять,<br>
Что Бог так сильно любит кота,<br>
Что даже создал меня!<br>
Он может сорвать карниз <br>
И в тапке оставить сюрприз,<br>
Но я, несмотря ни на что, выполняю<br>
Каждый его каприз.</div>
<br>
<span class='blue'>[Припев] Дк3343дм - A'A'bb<br></span>
Я потерял независимость, <br>
У меня котозависимость.<br>
Котик, котейка, котэ, котан! <br>
Мама, твой сын - котоман!<br>
От этого не избавиться, <br>
Но мне это даже нравится.<br>
Мама, не плачь, передай всей родне,<br>
Что мальчик твой счастлив вполне.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
В дверь мне звонят друзья,<br>
Но неподвижен я.<br>
Кот задремал у меня на коленях -<br>
Ребята, зайдите в другое время!<br>
В шерсти костюм опять - <br>
Не стану ее счищать.<br>
Пора перестать на работе уже <br>
Отношения с котом скрывать!<br>
<div class='refren'>В моих соцсетях уж год<br>
  Сплошной беспрерывный кот.<br>
Друзья перестали давно ставить лайки<br>
И ждут, когда он умрёт.<br>
Пятница, вечер, клуб.<br>
 Шёпот манящих губ.<br>
Но, бросив подружек, я еду домой: <br>
Скучает друг маленький мой.<br>
<br>
Но еду к коту я домой. <br>
Тоскует друг маленький мой.<br>
Но еду к коту я домой.<br>
<br>
<span class='blue'>[Переход]<br></span>
Мне не нужна независимость, <br>
Мне в радость котозависимость.<br>
Мама, ситуация крайне проста: <br>
Твой сын очень плотно подсел на кота.<br>
От этого не избавиться, <br>
Но мне это даже нравится.<br>
Мама, должна ты меня понять: <br>
У тебя у самой их пять.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я потерял независимость, <br>
У меня котозависимость.<br>
Котик, котейка, котэ, котан! <br>
Мама, твой сын - котоман!<br>
От этого не избавиться, <br>
Но мне это даже нравится.<br>
Мама, не плачь, передай всей родне,<br>
Что мальчик твой счастлив вполне.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/semen_slepakov_kotozavisimost.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
