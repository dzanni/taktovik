<?php
$title = '5sta Family - Многоэтажки (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/DpN1AvXDRks'";
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

<span class='blue'>[Куплет 1] Дк34цжм, Тк2322м - XaXa, abab<br></span>
Дороги запутаны в кольца,<br>
Но у нас по ним был один маршрут.<br>
Мне хотелось вернуться обратно,<br>
Но печально знать, что тебя не ждут.<br>
<div class='refren'>Среди крыш и домов,<br>
Пустых улиц и ночных фонарей<br>
Я спешил к ней одной,<br>
И я спешил к ней скорей!</div>
<br>
<span class='blue'>[Переход] Я6цм - aa<br></span>
Теперь я разрываюсь между двух столиц.<br>
Внезапно всё исчезло, словно стая птиц.<br>
<br>
<span class='blue'>[Припев] Тк24цмж - aBaB<br></span>
Где ты? Где я? <br>
Что между нами, нам никто не скажет.<br>
Где ты? Где я? <br>
Мы потерялись среди многоэтажек.<br>
Где ты? И где я? <br>
Что между нами, нам никто не скажет.<br>
Где ты? И где я?<br>
Мы потеряли любовь среди многоэтажек.<br>
<br>
Мы потеряли любовь среди многоэтажек.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Одиноким остаться<br>
В ритме мегаполиса так легко.<br>
Я смотрю на высотки столицы,<br>
И не вижу звезд сквозь бетон и стекло.<br>
<div class='refren'>Я пройдусь пешком<br>
Вдоль Москвы реки или вдоль Невы.<br>
И я не знаю, кто я.<br>
И я не знаю, кто ты.</div>
<br>
<span class='blue'>[Переход]<br></span>
Теперь я разрываюсь между двух столиц.<br>
Внезапно всё исчезло, словно стая птиц.<br>
<br>
<span class='blue'>[Припев]<br></span>
Где ты? Где я? <br>
Что между нами, нам никто не скажет.<br>
Где ты? Где я? <br>
Мы потерялись среди многоэтажек.<br>
Где ты? И где я? <br>
Что между нами, нам никто не скажет.<br>
Где ты? И где я?<br>
Мы потеряли любовь среди многоэтажек.<br>
<br>
<span class='blue'>[Скит] Тк4цм/ж - aa, AA<br></span>
Вязались тонкими нитями среди Москвы и Питера.<br>
Мы потерялись и нашлись в водовороте событий.<br>
Я не знаю, как мне быть, твои слова на репите.<br>
Мне не найти тебя среди бетонных перекрытий.<br>
<div class='refren'>Но знаешь, я не отпускаю нашу Love Story.<br>
Я обещал – с тобой и в счастье и в горе.<br>
И если полный дестрой нас с тобой накроет,<br>
Я соберу обломки и буду снова строить.</div>
Эти многоэтажки многое значат для нас:<br>
Пересечения улиц, проспектов и трасс.<br>
Мы натворили глупостей, наговорили фраз,<br>
Но если сердце еще бьется – значит, есть шанс.<br>
<br>
<span class='blue'>[Припев]<br></span>
Где ты? Где я? <br>
Что между нами, нам никто не скажет.<br>
Где ты? Где я? <br>
Мы потерялись среди многоэтажек.<br>
Где ты? И где я? <br>
Что между нами, нам никто не скажет.<br>
Где ты? И где я?<br>
Мы потеряли любовь среди многоэтажек.<br>
<br>
Мы потеряли любовь среди многоэтажек!<br>
Мы потеряли любовь среди многоэтажек!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/5sta_family_mnogoetazhki.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Обилие размеров, финал - декламация со сплошной рифмой.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
