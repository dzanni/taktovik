<?php
$title = 'Валерия - Космос (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/8fZAZQCH7YI'";
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

<span class='i'>- Пятьдесят секунд полета. Давление в камерах сгорания в норме.<br>
- Сто секунд полета. Параметры конструкции ракеты-носителя в норме.<br>
- Самочувствие нормальное.<br>
- Есть отделение первой ступени.<br>
- Подтверждаем отделение первой ступени.<br>
- Есть уменьшение перегрузки.<br>
- Солнце светит!<br>
</span>
<br>
<span class='blue'>[Куплет 1] Х4344м - AbAb<br></span>
Это так же, как и быть <br>
На одной волне.<br>
Это так же, как и плыть <br>
Под одним наедине.<br>
Это так же, как искать <br>
На двоих одно.<br>
Это так же, как молчать, <br>
Понимая все без слов. <br>
<br>
<span class='blue'>[Припев] Д2ж - AA<br></span>
Это все космос!<br>
Это все космос, <br>
С нами серьезно.<br>
Это все космос…<br>
<br>
<span class='i'>- Внимание, двенадцатый! Двенадцатый, поехали!</span><br>
<br>
Это все просто<br>
Счастье и звезды. <br>
Это все космос… <br>
Это все космос! <br>
Маленький остров, <br>
Где невесомость. <br>
Это наш космос… <br>
Это все космос, <br>
С нами серьезно. <br>
Это все космос… <br>
<br>
<span class='i'>- Двенадцатый, поехали! Шестая [нрзб.] вперед!</span><br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Это так же, как летать, <br>
Без тебя нет сил. <br>
Это так же, как дышать, <br>
Отрываясь от земли.<br>
 Это так же, как делить <br>
 Пополам весь мир. <br>
 Это так же, как любить,<br>
Одинаковые сны. <br>
<br>
<span class='blue'>[Припев]<br></span>
Это все космос!<br>
Это все космос, <br>
С нами серьезно.<br>
Это все космос…<br>
Это все просто<br>
Счастье и звезды. <br>
Это все космос… <br>
Это все космос! <br>
Маленький остров, <br>
Где невесомость. <br>
Это наш космос… <br>
 <br>
<span class='i'>- Как нас слышите?</span><br>
 <br>
Это все космос, <br>
С нами серьезно. <br>
Это все космос… <br>
<br>
Это все космос!<br>
Это все космос! <br>
<br>
<span class='i'>- Двигатели первой и второй ступени работают нормально.</span><br>
<br>
Это все космос,
С нами серьезно.<br>
Это все космос…<br>
<br>
<span class='i'>- Полет нормальный.</span><br>
<br>
Это все просто<br>
Счастье и звезды. <br>
Это все космос… <br>
Это все космос! <br>
Маленький остров, <br>
Где невесомость. <br>
Это наш космос… <br>
Это все космос, <br>
С нами серьезно. <br>
Это все космос… <br>
 <br>
Это все космос…<br>
<br>
<span class='i'>- Транспортный пилотируемый корабль Союз МС-03 выведен на орбиту
искусственного спутника Земли. Репортаж окончен.<br>
- Солнце светит!</span><br>
<br>
<span class='blue'>Источник: текст под роликом Youtube</span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
