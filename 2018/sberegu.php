<?php
$title = 'ALEKSEEV - Сберегу (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kUNUOvtG0uw'";
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

<span class='blue'>[Куплет 1] Л2-4жм - AAAbCCCb<br></span>
Моя свобода,<br>
Какого ты времени года?<br>
Какого ты цвета народа?<br>
Моя Куба здесь!<br>
А я однажды <br>
Сгорел к тебе солдат бумажный,<br>
Оставил след дождем вчерашним,<br>
Остался тем, кто есть!<br>
<br>
<span class='blue'>[Переход] Я4м - aa<br></span>
И мне не повернуть назад,<br>
Пока горят твои глаза!<br>
<br>
<span class='blue'>[Припев] Тк4ц2м - aaabaAAb<br></span>
И не надышаться тобою мне,<br>
И не убежать, мы на одной волне,<br>
Нас не удержать, мы станем нежней,<br>
Я все смогу!<br>
Я тебя найду среди сломанных стен,<br>
С нас небо рисует странные тени,<br>
И мы с тобою танцуем в этой пустоте,<br>
Я тебя сберегу!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Мои рассветы <br>
С какой я встречаю планеты?<br>
Кому посвящаю куплеты?<br>
Если сердце здесь?<br>
<br>
<span class='blue'>[Переход]<br></span>
И мне не повернуть назад,<br>
Пока горят твои глаза!<br>
<br>
<span class='blue'>[Припев]<br></span>
И не надышаться тобою мне,<br>
И не убежать, мы на одной волне,<br>
Нас не удержать, мы станем нежней,<br>
Я все смогу!<br>
Я тебя найду среди сломанных стен,<br>
С нас небо рисует странные тени,<br>
И мы с тобою танцуем в этой пустоте,<br>
Я тебя сберегу!<br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'>[Припев]<br></span>
И не надышаться тобою мне,<br>
И не убежать, мы на одной волне,<br>
Нас не удержать, мы станем нежней,<br>
Я все смогу!<br>
Я тебя найду среди сломанных стен,<br>
С нас небо рисует странные тени,<br>
И мы с тобою танцуем в этой пустоте,<br>
Я тебя сберегу!<br>

<br>
Слова и музыка: Кирилл Павлов<br>
<br>
<span class='blue'><a href='https://genius.com/Alekseev-sberegu-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
