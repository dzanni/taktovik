<?php
$title = 'Егор Крид & MOLLY - Если ты меня не любишь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/RI4ALqHtGrs'";
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

<span class='i'>- Алё!<br>
  - Алло!<br>
- Да?<br>
- Привет!<br>
- Здорово!<br>
- Слушай, как правильно, Молли или Малли?<br>
- Молли.<br>
- Молли?<br>
- Молли.<br>
- Окей.<br>
</span>
<br>
<span class='blue'>[Припев: MOLLY] Х43жм - AbAb<br></span>
Если ты меня не любишь,<br>
То я тоже нет.<br>
Если ты меня забудешь,<br>
То и я в ответ.<br>
<br>
Это Егор Крид!<br>
<br>
<span class='blue'>[Куплет 1, Егор Крид] Дк13м - abcabc<br></span>
С тобой <br>
Не могу найти контроль <br>
Теперь. <br>
Домой <br>
Я отправлю свою любовь <br>
Трезветь.<br>
Не стОит! <br>
Это слухи, я не такой, <br>
Не верь!<br>
Но порой, <br>
Эти суки ломятся в дверь!<br>
О, нет!<br>
<div class='refren'>
<span class='blue'>Тк4цм - aaaa<br></span>
Но как ты могла, но как ты могла<br>
Раздеть все наши чувства догола?<br>
Говорить другому все те же слова:<br>
(Бла-бла-бла...)</div>
<br>
<span class='blue'>[Переход: Егор Крид] - Тк34цм? - aaXa</span><br>
Но я же знаю, что ты без меня<br>
Не хочешь-хочешь-хочешь-хочешь!<br>
А с тобою нам быть нельзя,<br>
И будет эта песня для тебя!<br>
<br>
<span class='blue'>[Припев х2: MOLLY]<br></span>
Если ты меня не любишь,<br>
То я тоже нет.<br>
Если ты меня забудешь,<br>
То и я в ответ.<br>
<br>
<span class='blue'>[Куплет 2: Molly] Тк3жм? - AbAb<br></span>
Поцелую долго, долго,<br>
Дальше можно всё забыть.<br>
Колол меня иголкой,<br>
Не оставляя правой нить.<br>
<div class='refren'>
<span class='blue'>[Вставка = Переход]<br></span>
Теперь, как в небо, небо, небо, небо,<br>
Смотрю в глаза их не я.<br>
Любила ночью, а кто-то за меня!</div>
<span class='blue'>Тк3м - abab<br></span>
Если я в чужих руках,<br>
Помни, что ты сказал тогда.<br>
Лучше ты нЕ прощай, стучит в висках -<br>
<br>
<span class='blue'>[Переход: MOLLY]</span><br>
Но я же знаю, что ты без меня<br>
Не хочешь-хочешь-хочешь-хочешь!<br>
А с тобою нам быть нельзя,<br>
И будет эта песня для тебя!<br>
<br>
<span class='blue'>[Припев х2: Егор Крид]<br></span>
Если ты меня не любишь,<br>
То я тоже нет.<br>
Если ты меня забудешь,<br>
То и я в ответ.<br>
<br>
<span class='blue'>[Припев х2: MOLLY]<br></span>
Если ты меня не любишь,<br>
То я тоже нет.<br>
Если ты меня забудешь,<br>
То и я в ответ.<br>
<br>
<span class='i'>- Молли!<br>
- Окей!<br></span>
<br>
<span class='blue'>[Припев х2: MOLLY & Егор Крид]<br></span>
Если ты меня не любишь,<br>
То я тоже нет.<br>
Если ты меня забудешь,<br>
То и я в ответ.<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/k/kreed/esli_ti_menya_ne_lubish.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
