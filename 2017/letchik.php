<?php
$title = 'Би-2 - Лётчик (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ZxmQjHGtuVg'";
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

<span class='blue'>[Куплет 1] Х6ж - AABB</span><br>
Я не знаю, где ошиблись мы в расчетах.<br>
Может, в плотности воздушного потока.<br>
В состоянии свободного похмелья<br>
Над пустыней был торжественно расстрелян.<br>
<div class='refren'>Камнем тянет изнуряющая ноша,<br>
Может перед кем-то провинился в прошлом?<br>
Потеряв надежду, взвесив душу в храмах,<br>
Все апостолы уходят на рекламу.</div>
<br>
<span class='blue'>[Припев] Я4цн1ж - AABB<br></span>
Но если верить не по понятьям,<br>
Кусок металла - мое распятье,<br>
Ночные звёзды - мои медали,<br>
Я сбитый лётчик, меня достали!<br>
<br>
<span class='blue'>[Куплет 2] Я6ж - AABB<br></span>
Я вижу тех, кем этот праздник был заказан,<br>
Но тело плохо подчиняется приказам.<br>
Играет музыка невыносимо громко,<br>
И в вальсе кружатся горящие обломки.<br>
<div class='refren'>Застыл в гримассе образ преломленья света.<br>
В сухом остатке - неудобные ответы.<br>
Насколько важен результат моей работы?<br>
Теперь на это мне плевать с высокой ноты!</div>
<br>
<span class='blue'>[Припев]<br></span>
Но если верить не по понятьям,<br>
Кусок металла - мое распятье,<br>
Ночные звёзды - мои медали,<br>
Я сбитый лётчик, меня достали!<br>
<br>
<span class='blue'>[Инструментал]<br></span>
<br>
<span class='blue'>[Припев x2]<br></span>
Но если верить не по понятьям,<br>
Кусок металла - мое распятье,<br>
Ночные звёзды - мои медали,<br>
Я сбитый лётчик, меня достали!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/bi2-letchik.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
Первый припев - 6-стопный хорей, второй - 6-стопный ямб.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
