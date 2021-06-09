<?php
$title = 'Хлеб - Сом (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/UMfMekip6y8'";
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

<span class='blue'>[Куплет 1] Тк2-4цм/?</span><br>
Лето, вечер, жара —<br>
Это далеко не город Москва.<br>
Есть я — есть она,<br>
И мы целуемся на берегу реки (yea)!<br>
<br>
У нас постелен плед, играет «Руки вверх»,<br>
Но не из мафона, а просто в моей голове. <span class='blue'>(Строка Тк5цм)</span><br>
Плед скомкался — мы лежим на траве,<br>
Трава колет спину, но я готов потерпеть.<br>
<br>
(У-е), месяц мы уже с тобой,<br>
(У-е), я познакомил тебя с папой, мамой,<br>
(У-е), и только этим вечером ты намекнула мне, <br>
Что я могу рассчитывать на у-е.<br>
<br>
Ты улыбаешься игриво — вау, так, <br>
И предлагаешь без одежды плавать прям щас,<br>
И я уже в воде, словно Флеш (фр) —<br>
Там стою без трусов — в чём родила мать.<br>
<br>
Но, shit, я так долго этого ждал,<br>
Но о-па, и кричу: «Стой там!»<br>
Тяжело поверить, и я молчу пока —<br>
Ведь как объяснить, что без рук поймал сома!<br>
<br>
<span class='blue'>[Припев] Тк34цмж? - aBaxaBaX'<br></span>
Клюнул — сом! Подсекай!<br>
Я испугался, но в целом был не против.<br>
Клюнул — сом! На червя!<br>
И я понял любовь к рыбалке мужиков.<br>
<div class='refren'>(Хлеб) Клюнул — сом! (подсекай!)<br>
Теперь рыбалка станет и моим хобби!<br>
Клюнул — сом! На червя!<br>
А зимой куплю себе аквариум!</div>
<br>
<span class='blue'>[Переход] Дк4цм/ - aa</span><br>
Я без трусов, сом без зубов -<br>
Это борьба двух разных миров.<br>
Я без трусов, сом без зубов — <br>
Это борьба двух разных миров.<br>
<br>
<span class='blue'>[Куплет 2] Тк4цм/ж - aa, AA</span><br>
Сом пытается заглотить наживку,<br>
Туда — сюда, треплет её быстро,<br>
Сом не знает, что этот червь — не червь,<br>
Но старается, думая, что червь — червь.<br>
<br>
Ты хочешь с берега ко мне в воду прийти?<br>
Но стоп, я ждал месяц — теперь ты подожди!<br>
Мне, если честно, не часто везет,<br>
Грыжа рассосалась, и вот сом взял в [рот]<br>
<br>
<span class='blue'>[Припев]<br></span>
Рот! — сом! Подсекай!<br>
Я испугался, но в целом был не против.<br>
Клюнул — сом! На червя!<br>
И я понял любовь к рыбалке мужиков!<br>
<div class='refren'>(Хлеб) Клюнул — сом! (подсекай!)<br>
Теперь рыбалка станет и моим хобби!<br>
Клюнул — сом! На червя!<br>
А зимой куплю себе аквариум!</div>
<br>
<span class='i'>Слов нету, дорогая!.. Сука, кроссовки тяжелые!</span><br>
<br>
<span class='blue'><a href="https://on-hit.ru/texts/tekst-pesni-hleb-som/"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
