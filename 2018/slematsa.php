<?php
$title = 'Little Big & Руки Вверх! - Слэмятся пацаны (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/dLACj0TpCRc'";
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

<span class='blue'>[Intro: Little Big]<br></span>
They love it when I turn up the bass<br>
Check this, check-check this out<br>
<br>
<span class='blue'>[Куплет 1: Little Big] Тк2м/ж - aa, AA<br></span>
We laugh at the contract <br>
Alive with the contact<br>
DJ bring the jam (jam) <br>
People bring the slam (slam)<br>
Push it like it’s crossfit<br>
Middle of the moshpit<br>
Bang is in the plan (plan) <br>
We love the slam (slam)<br>
Better have a fanny pack <br>
Don’t bring in your fancy back<br>
You might lose an arm (arm) <br>
You might lose a leg (leg)<br>
Round around the moshpit <br>
I think we must’ve lost it<br>
I’m losing my mind, <br>
Enjoying my time<br>
<br>
<span class='blue'>[Припев х2: Сергей Жуков] Тк2м/ж - aa, AA<br></span>
Стоят девчонки, <br>
Стоят в сторонке.<br>
Короткие юбчонки, <br>
Короткие юбчонки.<br>
<div class='refren'>
Слэмятся пацаны, <br>
Пацаны, пацаны.<br>
Спортивные штаны, <br>
Штаны, штаны.</div>
<br>
<span class='blue'>[Куплет 2: Little Big]<br></span>
We laugh at the contract<br>
Alive with the contract<br>
DJ bring the jam (jam) <br>
People bring the slam (slam)<br>
Don’t come when you’re high <br>
Put up my heart your high feels<br>
We don’t care for glam (glam)<br>
We just want the slam (slam)<br>
My heartbeat is racing <br>
The peoples is spacing<br>
DJ bring the jam (jam) <br>
It’s going down (down)<br>
Can’t wait ’till the beat drop <br>
I think I’m in clouds, so<br>
Best spin all around <br>
Rolling in the crowd<br>
<br>
<span class='blue'>[Припев х2: Сергей Жуков]<br></span>
Стоят девчонки, <br>
Стоят в сторонке.<br>
Короткие юбчонки, <br>
Короткие юбчонки.<br>
<div class='refren'>
Слэмятся пацаны, <br>
Пацаны, пацаны.<br>
Спортивные штаны, <br>
Штаны, штаны.</div>
<br>
<span class='blue'>[Окончание: Сергей Жуков]<br></span>
Стоят девчонки, <br>
Стоят в сторонке.<br>
Короткие юбчонки, <br>
Короткие юбчонки.<br>
<div class='refren'>
Слэмятся пацаны, <br>
Пацаны, пацаны.<br>
Спортивные штаны, <br>
Штаны, штаны.</div>
<br>
<span class='i'>[Диктор новостей] Известный певец, лидер группы "Руки Вверх!" подозревается в создании
тоталитарной организации "Свидетели слэма и мошпита". Жуков и его подельники
задержаны. В ходе обыска в поселковом клубе были обнаружены полтора миллиона
рублей, ювелирные украшения, различные ценности и даже договор дарения
квартиры. Сотрудник правоохранительных органов, три года проработавший
под прикрытием в "Свидетелях слэма" награжден внеочередным званием
и поездкой в пансионат "Золотая узда". </span><br>
<br>
Ла-лай-ла-лай-ла,<br>
Ла-ра-ла-ла-ла-лай-ла,<br>
Ла-ла-ла-ла-ла-лай-ла,<br>
Ла-ла-ла-ла-ла-лай-ла,<br>
Ла-ла-ла-ла-ла-лай-ла,<br>
Ла-лай-ла, ла-лай!<br>
Ла-ла-ла-ла-ла-лай-ла,<br>
Ла-лай-ла, ла-лай!<br>
А-а!<br>
<br>
<span class='blue'><a href='http://www.perevod-pesen.ru/little-big-ruki-vverx-slemyatsya-pacany/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Припев <span class='i'>Стоят девчонки, /Стоят в сторонке. /Короткие юбчонки, /Короткие юбчонки</span>
отсылает к припевам песен "Стоят девчонки" (1966, <span class='i'>Стоят девчонки, /Стоят в сторонке</span>)
и "Ну где же вы, девчонки?" (1999, <span class='i'>Ну где же вы, девчонки, /Короткие юбчонки?</span>). Последняя - из репертуара
группы "Руки Вверх!"<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
