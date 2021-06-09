<?php
$title = 'Ани Лорак - Ты еще любишь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/HrtCqTxzO0M'";
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

<span class='blue'>[Куплет1] Дк1-4мж - xAxAbb<br></span>
Как вышло так: <br>
Остановилось <br>
Сердце твое,<br>
Уже не билось <br>
Так <br>
С моим сердцем в такт.<br>
Дай же мне знак, <br>
Что происходит.<br>
Молчанье твое <br>
С ума сводит <br>
Меня.<br>
Я не хочу тебя терять.<br>
<br>
<span class='blue'>[Припев] Тк4цм - aabb<br></span>
Ты ещё любишь или нет?<br>
Есть ли в конце, в конце тоннеля свет?<br>
Ты ещё любишь? Просто ответь.<br>
Чтобы знала я, сгорать или гореть.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ну же, давай,<br>
Всё глубже раны.<br>
В душу сквозной,<br>
Я не устану.<br>
Знай, <br>
Сколько ни стреляй.<br>
Где же твой взгляд, <br>
Сильней молитвы.<br>
Выпила яд, <br>
Скорей спаси ты <br>
Нас.<br>
Прошу не дай же мне упасть.<br>
<br>
<span class='blue'>[Припев х3]<br></span>
Ты ещё любишь или нет?<br>
Есть ли в конце, в конце тоннеля свет?<br>
Ты ещё любишь? Просто ответь.<br>
Чтобы знала я, сгорать или гореть?<br>
<br>
Ты ещё любишь?<br>
Ты ещё любишь?<br>
<br>
Музыка и слова: А. Осадчук<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/a1/ani-lorak/5655-ani-lorak-ty-esche-lyubish-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Сверхкороткие строки куплетов.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
