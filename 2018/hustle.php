<?php
$title = 'Miyagi & Andy Panda - Hustle (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/m51LZLiivZQ'";
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


<span class='i'>- Hey, what´s up?<br>
- Здравствуй, а что такое hustle?<br></span>
<br>
<span class='blue'>[Интро] Тк2м - aa<br></span>
На-на-на-на-на! <br>
На-на-на-на-на!<br>
На-на-на-на-на! <br>
На-на-на-на-на!<br>
На-на-на-на-на!<br>
 На-на-на-на-на!<br>
На-на-на-на-на!<br>
<br>
<span class='blue'>[Куплет 1, Эндшпиль|Andy Panda] Тк4цм/ж - aa, AA<br></span>
Ты сука и не стоишь той воды, что на дне бонга,<br>
Мои братья смотрят на тебя, как на подонка.<br>
Отберу твой стафф - у тебя начнётся ломка.<br>
Лучше bad this bitch, эй, лучше делай громко!<br>
<div class='refren'>
Круглые доходы, пау, дорогие тряпки.<br>
Сложные мажоры, получите без оглядки!<br>
Я как Дэнни Оушен, вокруг мои ребятки.<br>
Если выкупаешь, то-то засверкают блядки!</div>

Бабули на житу, вангую будет good, не так ли?<br>
Мои будки скурят всё от головы до пятки.<br>
Покуда ты пацан, моя улица на завтрак<br>
Хавает таких, как ты - уходи в осадок!<br>
<div class='refren'>
Я гудел, я кричал - посмотри, как разъебал!<br>
Panda круче твоих Gucci, мои «найки» - мой напалм.<br>
Я буду всё и сейчас, давай неси свои цветы,<br>
Кроме девушек их любят мужики, на вдохни!</div>
<br>
<span class='blue'>[Припев х2, MiyaGi & Эндшпиль|Andy Panda] Тк4цм - aa<br></span>
Объясни мне, ман, что такое Hustle?<br>
(Что такое, что такое, что такое Hustle?)<br>
Объясни мне, ман, что такое Hustle?<br>
(Что такое, что такое, что такое Hustle?)<br>
<br>
<span class='blue'>[Переход, MiyaGi] Тк4цм - aa<br></span>
Just have a nice day, bitch get out the way,<br>
I waiting my train, don´t smoke my brain!<br>
I´m a hustla, motherfuckers, don´t be afraid!<br>
La-di-da-di-da-di-day, la-di-da-di-da-di-day!<br>
<div class='refren'>
  Just have a nice day, bitch get out the way,<br>
I waiting my train, don´t smoke my brain!<br>
I´m a hustla, motherfuckers, don´t be afraid!<br>
La-di-da-di-da-di-day, la-di-da-di-da-di-day!</div>

ХА-ха-ха, хА-ха-ха, ха-ха-хА! Hustle!<br>
ХА-ха-ха, хА-ха-ха, ха-ха-хА! Hustle!<br>
ХА-ха-ха, хА-ха-ха, ха-ха-хА! Hustle!<br>
La-di-da-di-da-di-day, la-di-da-di-da-di-day!<br>
<br>
<span class='blue'>[Куплет 2, MiyaGi] Тк2-4цм/ж - aa, AA<br></span>
Весь мой Bronx Rock´n´Roll,<br>
Enemies sucks my dick, that’s all.<br>
Never, never call me - без церемоний.<br>
Best moment it´s all muse control.<br>
<div class='refren'>
MiyaGi, Andy Panda-Panda -<br>
Вместе банда-банда.<br>
Что такое Hustle?<br>
Ну-ка покажи, ну-ка покажи, ман.</div>
<br>
<span class='blue'>[Припев х2, MiyaGi & Эндшпиль|Andy Panda]<br></span>
Объясни мне, ман, что такое Hustle?<br>
(Что такое, что такое, что такое Hustle?)<br>
Объясни мне, ман, что такое Hustle?<br>
(Что такое, что такое, что такое Hustle?)<br>
<br>
<span class='blue'>[Финал х2, MiyaGi]<br></span>
На-на-на-на-на! <br>
...<br>
На-на-на-на-на! <br>
<br>
<span class='blue'><a href='https://www.gl5.ru/m/miyagi/miyagi-endshpil-andy-panda-hustle.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
