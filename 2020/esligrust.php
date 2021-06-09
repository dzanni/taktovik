<?php
$title = 'Rauf & Faik, NILETTO - Если тебе будет грустно (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/d4li3Bk95Co'";
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

<span class='blue'>[Интро] Ак2ж/ - AAAAA</span><br>
Ла-ла-ла-Лэ-ла-ла, Лэ-ла!<br>
Ла-ла-ла-Лэ-ла-ла-ла, Лэ-ла!<br>
Ла-ла-ла-ла-Лэ-ла-ла, Лэ-ла!<br>
Ла-ла-ла-ла-Лэ-ла!<br>
Ла-ла-ла-ла-Лэ-ла!<br>
<br>
<span class='blue'>[Куплет 1] Тк3жм - AAb(b)CCb(b)</span><br>
Вот: мы встречались с тобою полгода,  <br>
И бывала в душе непогода,   <br>
Но мы встретим тот ясный день.   <br>
(ПарАп-пам-ле-фап-тИра-лЭй!)<br>
Я так счастлив, я снова влюбился,   <br>
Я не похож на красивого принца,   <br>
Но осталось пару недель.  <br>
(Пап-Э-вам-тИра-лЭй!)<br>
  <br>

<span class='blue'>[Припев] Тк34ц32жм - AbAb</span><br>
Если тебе будет грустно,   <br>
Приходи туда, где провожали мы закат.  <br>
Если тебе будет пусто (а-а)   <br>
Не забывай меня!  <br>
  <div class='refren'>Если тебе будет грустно,   <br>
  Приходи туда, где провожали мы закат.  <br>
  Если тебе будет пусто (а-а),   <br>
  Не забывай меня (а) <br>
  Не забывай меня (а) <br>
  Не забывай меня (а) <br>
  Не забывай меня (а) </div>
  <br>
<span class='blue'>[Куплет 2] Л1333ж/ - AAAAx</span><br>
Лето, <br>
Расскажи о том, что наболело.   <br>
Под дождем бежал к тебе с букетом,   <br>
Оказалось ты промокла с кем-то   <br>
Другим, пам-пЭрам-тЭй!<br>
  <div class='refren'>
  <span class='blue'>Тк4цм/? - aa</span><br>
  Аромат ее волос! Эх, зря играл с тобой,   <br>
  Думала - не думала, что не заберу домой (йе!)</div>
  <br>
<span class='blue'>[Припев]</span><br>
Если тебе будет грустно,   <br>
Приходи туда, где провожали мы закат.  <br>
Если тебе будет пусто,   <br>
Не забывай меня!   <br>
  <div class='refren'>Если тебе будет грустно,   <br>
  Приходи туда, где провожали мы закат.  <br>
  Если тебе будет пусто (а-а)   <br>
  Не забывай меня (а)   </div>
Если тебе будет грустно,   <br>
Приходи туда, где провожали мы закат.  <br>
Если тебе будет пусто (а-а)   <br>
Не забывай меня (а)   <br>
Не забывай меня (а)   <br>
Не забывай меня (а)   <br>
Не забывай меня (а)   <br>
Не забывай меня (а)   <br>
  <br>
<span class='blue'>[Куплет 3 х2] Л23дм? - A'bA'bA'bx</span><br>
Ты подходи на ту улицу,   <br>
Гуляли мы с тобой,   <br>
Там все желания сбудутся,   <br>
Не спорь, не спорь, не спорь,   <br>
Ты навсегда моя спутница.  <br>
Долой, долой, долой  <br>
Всех тех, кто будет после тебя!  <br>
  <br>
<span class='blue'>Источник: официальный текст под клипом Youtube</span><br>
<br>
<br>
P.S. Холостые концевые строки: "Другим, пам-пЭрам-тЭй!", "Всех тех, кто будет после тебя".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
