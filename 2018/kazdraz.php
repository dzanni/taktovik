<?php
$title = 'Монеточка - Каждый раз (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/siq8HBSa5f0'";
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
[Вводная речь Урганта пропущена]<br>
<br>
<span class='blue'>[Припев х2] Тк4цм - abab</span><br>
Если б мне платили каждый раз,<br>
Каждый раз, когда я думаю о тебе,<br>
Я бы бомжевала возле трасс,<br>
Я бы стала самой бедной из людей.<br>
<br>
<span class='blue'>[Куплет 1] Я4м - abba, abab</span><br>
«Где ты, когда ты не онлайн, <br>
Когда я жду тебя в сети?<br>
В какие ссылки перейти, <br>
Чтоб просто оказаться там?<br>
<div class='refren'>О чём ты думаешь сейчас?<br>
Давай, среди берёз густых<br>
Читать любимый твой рассказ -<br>
Страничку я, страничку ты.</div>
<span class='blue'>Л3ж - ABABCCCC</span><br>
Или в гости — просто чаю!»<br>
И сердцами WhatsApp закидан.<br>
Но я снова не отвечаю. <br>
Я инкогнито-инкогнита!<br>
<div class='refren'>Но если б мне платили, милый, <br>
  Каждый раз, когда взгляд твой дымный<br>
Мне мерещится где-то мимо, <br>
Каждый раз, когда снишься ты мне!</div>
<br>
<span class='blue'>[Припев х2]</span><br>
Если б мне платили каждый раз,<br>
Каждый раз, когда я думаю о тебе,<br>
Я бы бомжевала возле трасс,<br>
Я бы стала самой бедной из людей.<br>
<br>
<span class='blue'>[Куплет 2] Тк3дж - A'BA'B</span><br>
Старая конфорка плещет, но<br>
На двоих одна заварка.<br>
За окном темно, в окне трещина,<br>
Лампочка-луна над парком.<br>
<div class='refren'><span class='blue'>Тк34цм - abab</span><br>
  Я опять кручу на пальце прядь, <br>
Пахну, как мамины духи.<br>
Хочешь меня снять-снять-снять, <br>
А я хочу писать стихи-стихи.</div>
Уезжай, чай не допивай. <br>
Снег или дождь там — уходи!<br>
Пусть хоть всего переморосит, <br>
Пусть хоть торнадо унесёт вдаль!<br>
<div class='refren'>Может, есть ещё твой трамвай?<br>
  Может, нет? Всё равно иди!<br>
Там промозглый седой февраль —<br>
Он теперь, как и ты, один!</div>
И тебя не жаль, не жаль, не жаль.<br>
Хоть слоу-мо в дыме сигарет<br>
Даже в миноре под рояль, <br>
Даже под грустную скрипку - нет!<br>
<div class='refren'>Если б ты не любил стихи, <br>
   Превратилась бы в звонкий ямб.<br>
Если б был наркотою ты -<br>
Фитоняшкой бы стала я!</div>
<br>
<span class='blue'>[Припев х2]</span><br>
Если б мне платили каждый раз,<br>
Каждый раз, когда я думаю о тебе,<br>
Я бы бомжевала возле трасс,<br>
Я бы стала самой бедной из людей.<br>
<br>
<span class='blue'><a href='https://genius.com/Monetochka-every-time-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
