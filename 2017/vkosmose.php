<?php
$title = 'SEREBRO - В Космосе (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/19A_rFyugnc'";
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

<span class='i'>
- Как можно отпустить человека, если ты его любишь?<br>
- Только за то, что ты его любишь, ты должна ему дать возможность уйти.<br>
- А у тебя было такое?<br>
- Да, было однажды. Один раз.<br>
- Как долго тебе быдо больно?<br>
- Долго. А верить надо! В этом-то и смысл жизни, чтобы верить! Верить и любить!
Вот и всё. Закрой - простынешь! Холодно, уже холодно.<br>
</span><br>

<span class='blue'>[Куплет 1] Ан3мж - aBaB</span><br>
Ты акценты расставь без меня.<br>
Я поправлю тебя осторожно.<br>
Не хочу я хотеть без тебя.<br>
Без тебя это мне невозможно.<br>
Руки сильно сжимают мои.<br>
Я хочу, чтобы было надолго.<br>
Это лучше, чем ты говорил.<br>
Если б знала тогда я, насколько.<br>
<br>
<span class='blue'>[Припев] Л23дм - X'aX'a</span><br>
Я с тобой в Космосе.<br>
Я тебя так ждала.<br>
Не обижай меня,<br>
Чтобы я не ушла.<br>
Я с тобой в Космосе.<br>
Без тебя я не смогла.<br>
Не отпускай меня,<br>
Чтобы я не ушла.<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Если скажешь, что дальше нельзя,<br>
Я найду сотни раз слово «можно».<br>
Где пределы любви для тебя?<br>
Может, где-то ты чувствуешь сложно.<br>
Ты всегда для меня впереди,<br>
И я чувствую, как тебя много.<br>
Если даже устанешь в пути,<br>
Буду я за двоих очень долго.<br>
<br>
<span class='blue'>[Припев]</span><br>
Я с тобой в Космосе.<br>
Я тебя так ждала.<br>
Не обижай меня,<br>
Чтобы я не ушла.<br>
Я с тобой в Космосе.<br>
Без тебя я не смогла.<br>
Не отпускай меня,<br>
Чтобы я не ушла.<br>
<br>
<span class='blue'>[Проигрыш]</span><br>
<br>
Музыка: Даниил Бабичев<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/s/serebro/8260-serebro-v-kosmose-text-pesni.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Рифмы первого и второго куплетов идентичны.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
