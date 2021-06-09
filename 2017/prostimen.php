<?php
$title = 'Дима Билан & Сергей Лазарев - Прости меня (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/4m25OSlKfWs'";
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

<span class='blue'>[Куплет 1, Сергей Лазарев] Дк54цм? - aabcbc<br></span>
Вдох вдоль потока слов может промолчать, хотя -<br>
Нет, ничего смелей этих синих глаз в меня.<br>
Ты меня не простишь, и я не прощу.<br>
В секунды не стало нас.<br>
Сквозь толщу воды я тихо ко дну, <br>
В пустоту, в тишину, и нет сомнений -<br>
<br>
<span class='blue'>[Переход] Л34цм - aabccb<br></span>
Прости, моя любовь,<br>
Кусая губы в кровь,<br>
Я сделал всё, что можно, всё, что нельзя.<br>
Прости, любовь моя,<br>
Всё дальше полюса,<br>
Весь мир на части, и уносит вода.<br>
<br>
<span class='blue'>[Припев] Л43цмж - aBacaBac<br></span>
Прости меня! Прости меня!<br>
Прости меня! Слышишь?<br>
Прости меня! Прости меня!<br>
Прости меня, моя любовь!<br>
Прости меня, в последний раз<br>
Мы в унисон дышим!<br>
Прости меня! Прости меня!<br>
Прости меня, моя любовь!<br>
<br>
<span class='blue'>[Куплет 2, Дима Билан]<br></span>
Ну заставь меня притворится на миг твоим.<br>
Как мне поверить вновь в эти тонкие миры?<br>
Так последние капли жадных секунд <br>
Глотаю, как воздух, злые слова. <br>
Бестрастно признают нашу вину,<br>
А после - мир застынет уже навсегда.<br>
<br>
<span class='blue'>[Переход]<br></span>
Прости, моя любовь,<br>
Кусая губы в кровь,<br>
Я сделал всё, что можно, всё, что нельзя.<br>
Прости, любовь моя,<br>
Всё дальше полюса,<br>
Весь мир на части, и уносит вода.<br>
<br>
<span class='blue'>[Припев]<br></span>
Прости меня! Прости меня!<br>
Прости меня! Слышишь?<br>
Прости меня! Прости меня!<br>
Прости меня, моя любовь!<br>
Прости меня, в последний раз<br>
Мы в унисон дышим!<br>
Прости меня! Прости меня!<br>
Прости меня, моя любовь!<br>
<br>
<span class='blue'>[Переход]<br></span>
Прости, моя любовь, <br>
Кусая губы в кровь,<br>
Я сделал всё, что можно, всё, что нельзя.<br>
Прости, любовь моя, <br>
Всё дальше полюса,<br>
Весь мир на части, и уносит вода.<br>
<br>
Моя любовь!<br>
Моя любовь!<br>
У-о!<br>
У-у-у!<br>
<br>
Моя любовь!<br>
<br>
Музыка: Roma Kenga<br>
Слова: Roma Kenga<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/dima-bilan-sergey-lazarev-prosti-menya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
