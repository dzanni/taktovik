<?php
$title = 'Рита Дакота - Уходи (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/9d22tKL4r7M'";
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

<span class='i'>[Лукашенко] Страну они не получат! И мы эту страну никому не отдадим!<br>
[Митингующие] Уходи! Уходи! Уходи! Уходи!<br>
Уходи! Уходи! Уходи! Уходи!<br>
</span>
<br>
<span class='blue'>[Интро] Ан6м/ - aa</span><br>
Уходи, уходи, уходи, уходи, уходи, уходи!<br>
Уходи, уходи, уходи, уходи, уходи, уходи!<br>
<br>
<span class='blue'>[Куплет 1] Тр2жж - ABAB</span><br>
Девять ноль всемь,<br>
Кровь на асфальте.<br>
Чужие люди<br>
В сцепке, как братья.<br>
  <div class='refren'>В спину - гранаты.<br>
  Страшно до дрожи.<br>
  Но надо когда-то!</div>
<span class='blue'>Х2ж/ - AA</span><br>
Верым! Можам! <br>
Пераможам!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
26 - долго, <br>
Но 5 - еще дольше,<br>
Мирные люди <br>
Не смогли больше (терпеть)!<br>
  <div class='refren'>Кто-то под утро <br>
  Домой не вернулся,<br>
  Но он испугался,<br>
  И Бог улыбнулся.</div>
<br>
(Уходи!.. Уходи!..<br>
Бог улыбнулся...<br>
Уходи!.. Уходи!..<br>
Когда он испугался...<br>
Уходи!.. Уходи!..<br>
Бог улыбнулся...)<br>
<br>
<span class='blue'>[Припев] Л5554цм/ - aaaa</span><br>
Как тебе спится, Саша, по ночам?<br>
Что тебе снится, Саша, отвечай!<br>
Как ты в глаза посмотришь матерям?<br>
Расскажи нам! Расскажи нам! Расскажи нам!<br>
<br>
<span class='blue'>[Куплет 3] Л23жм? - AbAb</span><br>
Белый, как совесть,<br>
Красный, как кровь на его руках.<br>
Этого не простить,<br>
Это запомнят на века.<br>
  <div class='refren'>На Белой Руси<br>
  Черные пятна твоих зверей.<br>
  Но за нами правда -<br>
  И мы сильней! <span class='blue'>(Строка Л2м)</span><br></div>
<br>
<span class='blue'>[Припев х2]</span><br>
Как тебе спится, Саша, по ночам?<br>
Что тебе снится, Саша, отвечай!<br>
Как ты в глаза посмотришь матерям?<br>
Расскажи нам! Расскажи нам! Расскажи нам!<br>
<br>
<span class='blue'>[Финал]</span><br>
Уходи, уходи, уходи, уходи, уходи, уходи!<br>
Уходи, уходи, уходи, уходи, уходи, уходи!<br>
Уходи, уходи, уходи, уходи, уходи, уходи!<br>
Уходи, уходи, уходи, уходи, уходи, уходи!<br>
  <br>
<span class='blue'>Источник: расшифровка фонограммы клипа</span><br>
<br>
<br>
P.S. Выбран один из многих неофициальных клипов - тот, который собрал больше
просмотров на момент вывешивания (22.08.2020).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
