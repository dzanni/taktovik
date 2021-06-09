<?php
$title = 'Монеточка - Последняя дискотека (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xvGMys5Cgkk'";
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

<span class='blue'>[Припев] Л3ж? - ABBB'BBBA<br></span>
Последняя дискотека,<br>
И ленты в крови, и платье.<br>
Как классно, что в этот праздник<br>
Ты надела всё самое красное!<br>
Тебя эти раны красят -<br>
Узоры кровавых ссадин.<br>
Тебе так подходят пряди<br>
Багряные эти. <span class='blue'>(Строка Л2ж)<br></span>
<br>
<span class='blue'>[Хук]<br></span>
Последняя дискотека!<br>
Последняя дискотека!<br>
<br>
<span class='blue'>[Куплет 1] Я6ж (Чт3ж) - AA<br></span>
Мы танцевали в школьном зале в ритме диско,<br>
Лакали «ягу», будто это папин виски.<br>
Топор судьбы в руках химички звонко свистнул,<br>
Она сказала: «Вы все так мне ненавистны!<br>
Вся ваша мудрость умещается в наколке!<br>
Вся ваша юность — это надпись на футболке!»<br>
<div class='refren'>
<span class='blue'>Тк4цж - XX<br></span>
Ты обещала маме вырасти, но только не сегодня<br>
Мама знаю, ты не рада, но мне правда надо!</div>
<br>
<span class='blue'>[Припев]<br></span>
Последняя дискотека,<br>
И ленты в крови, и платье.<br>
Как классно, что в этот праздник<br>
Ты надела всё самое красное!<br>
Тебя эти раны красят -<br>
Узоры кровавых ссадин.<br>
Тебе так подходят пряди<br>
Багряные эти.<br>
<br>
<span class='blue'>[Куплет 2] Тк5цм/ж - aa, АА<br></span>
Уже завтра взрослый мир покажет лысый свой затылок.<br>
Он с букетом роз к нам из разбитых папиных бутылок.<br>
Уже завтра затрепещут бабочки-клинки в желудках,<br>
И печальной правдой станут наши алко-нарко-шутки.<br>
<div class='refren'>А пока, теряя стразы, убегай от этих мест,<br>
От прыщей замазанных, от напомаженных принцесс,<br>
На последнем танце адский диск заест, мы начнём замес!<br>
Пол в осколках. Дискотека. Посмотри на этот блеск!</div>
<br>
<span class='blue'>[Припев]<br></span>
Последняя дискотека,<br>
И ленты в крови, и платье.<br>
Как классно, что в этот праздник<br>
Ты надела всё самое красное!<br>
Тебя эти раны красят -<br>
Узоры кровавых ссадин.<br>
Тебе так подходят пряди<br>
Багряные эти.<br>
<br>
<span class='blue'>[Хук]<br></span>
Последняя дискотека!<br>
Последняя дискотека!<br>
<br>
<span class='blue'><a href='https://genius.com/Monetochka-last-disco-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
