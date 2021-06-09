<?php
$title = 'IC3PEAK - Грустная сука (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/zf99kdFw9b8'";
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

<span class='blue'>[Предприпев] Дк4цжж? - ABAB<br></span>
Я никогда не была глупой,<br>
Я никогда не буду счастливой.<br>
Грустная сука, грустная сука -<br>
Да, это мой осознанный выбор!<br>
<div class='refren'>Я никогда не точила клыки,<br>
Я сразу была рождена острозубой.<br>
Грустная сука, грустная сука -<br>
Да, это мой осознанный выбор!</div>
<br>
<span class='blue'>[Припев х2] Тр4ц3мд - aB'aB'<br></span>
Перекрестись, когда видишь меня!<br>
Подрываю твои убеждения.<br>
Порчу твой день своим блеклым лицом,<br>
Не волнуют твои возмущения.<br>
<div class='refren'>Дикие псины боятся меня<br>
И огня, это не совпадение!<br>
Сижу и плюю на твой мраморный пол,<br>
Скалю зубы на тень в отражении.</div>
<br>
<span class='blue'>[Предприпев х2]<br></span>
Я никогда не была глупой,<br>
Я никогда не буду счастливой.<br>
Грустная сука, грустная сука -<br>
Да, это мой осознанный выбор!<br>
<div class='refren'>Я никогда не точила клыки,<br>
Я сразу была рождена острозубой.<br>
Грустная сука, грустная сука -<br>
Да, это мой осознанный выбор!</div>
<br>
<span class='blue'>[Куплет х4] Дк34цж|м - AbbA<br></span>
Здесь мне никто не хозяин!<br>
Лакшери лайф — не мой стайл!<br>
Я люблю грязь — это мой кайф!<br>
Улыбаюсь, только кусая!<br>
<br>
<span class='blue'>[Припев]<br></span>
Перекрестись, когда видишь меня!<br>
Подрываю твои убеждения.<br>
Порчу твой день своим блеклым лицом,<br>
Не волнуют твои возмущения.<br>
<div class='refren'>Дикие псины боятся меня и огня,<br>
Это не совпадение!<br>
Сижу и плюю на твой мраморный пол,<br>
Скалю зубы на тень в отражении.</div>
<br>
<span class='blue'><a href='https://genius.com/Ic3peak-sad-bitch-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
