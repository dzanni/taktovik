<?php
$title = 'Макс Барских - Моя любовь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/G4z7jTuhVL8'";
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

<span class='blue'>[Куплет 1, Макс Барских] Х3ж, Ан3цн2д - AA, A'A'<br></span>
Время лечит раны.<br>
 Мне бы вечно пьяным.<br>
Я искал тебя среди разных мест, где не ждут любовь<br>
(Не ждут любовь).<br>
И опять рассвет отвозил меня одного домой.<br>
<br>
<span class='blue'>[Припев] Дк4мж - aBaB<br></span>
Я попрошу у облаков<br>
Твою любовь себе навечно.<br>
И небо мне подарит ночь,<br>
Когда я тебя нечаянно встречу, -<br>
Моя любовь...<br>
<div class='refren'>Я каждый раз закрываю глаза,<br>
Когда смотрю в чужие лица -<br>
И в темноте хочу увидеть тебя<br>
И нечаянно влюбиться…</div>
<br>
<span class='blue'>[Куплет 2, Макс Барских]:<br></span>
Снова пьяный вечер, <br>
Между нами ветер.<br>
И уже давно я не жду любовь, как спасение<br>
(Как спасение).<br>
Я устал искать в каждой паре глаз отражение.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я попрошу у облаков<br>
Твою любовь себе навечно.<br>
И небо мне подарит ночь,<br>
Когда я тебя нечаянно встречу, -<br>
Моя любовь...<br>
<div class='refren'>Я каждый раз закрываю глаза,<br>
Когда смотрю в чужие лица -<br>
И в темноте хочу увидеть тебя<br>
И нечаянно влюбиться…</div>
<br>
<span class='blue'>[Backvocals chorus eng]</span><br>
<br>
<span class='blue'>[Припев]<br></span>
Я попрошу у облаков<br>
Твою любовь себе навечно.<br>
И небо мне подарит ночь,<br>
Когда я тебя нечаянно встречу, -<br>
Моя любовь...<br>
<div class='refren'>Я каждый раз закрываю глаза,<br>
Когда смотрю в чужие лица -<br>
И в темноте хочу увидеть тебя<br>
И нечаянно влюбиться…</div>
Моя любовь...<br>
<br>
Слова и музыка: Макс Барских<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/max-barskih-moya-lubov.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Х3 переходит в усложненный "кольцовский" пятисложник
(трехстопный дважды цезурированый анапест с дактилическими окончаниями).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
