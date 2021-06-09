<?php
$title = 'Моя Мишель - Ты мне нравишься (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/jRn6NHJtdB4'";
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
<span class='blue'>[Куплет 1] Дк3м?<br></span>
Фары до шести, <br>
Выходи, я выхожу искать.<br>
И твой пес мастиф <br>
Очень мил, ага!<br>
В тебе Либерти,<br>
Позавидует сам Ален Вуди,<br>
И Аston Martin, ага!<br>
Чересчур будет, будь что будет!<br>
<br>
<span class='blue'>[Припев] Тк4ц3дм - A'bA'b<br></span>
Ты мне нравишься, ты мне нравишься,<br>
Ты мне нравишься, да!<br>
Ты мне нравишься, ты мне нравишься,<br>
Пойдем гулять!<br>
<br>
<span class='blue'>[Куплет 2] Х4535м - abab<br></span>
Обещаю сок, шот, сок,<br>
Или что ты там на утро пьешь?<br>
Парень все сечет!<br>
Ну, давай еще, еще, еще!<br>
<br>
<span class='blue'>[Припев]<br></span>
Ты мне нравишься, ты мне нравишься,<br>
Ты мне нравишься, да!<br>
Ты мне нравишься, ты мне нравишься,<br>
Пойдем гулять!<br>
<br>
О-о-о, о-о-о-о!<br>
О-о-о, о-о-о-о-о!<br>
О-о-о, о-о-о-о!<br>
О-о-о, о-о-о-о-о!<br>
<br>
<span class='blue'>[Куплет 3] Х3334мд - aB'aB'<br></span>
Каблуки клик-клак!<br>
Мам, плохие новости!<br>
Вижу, что мудак,<br>
Только я иду знакомиться!<br>
<br>
<span class='blue'>[Припев]<br></span>
Ты мне нравишься, ты мне нравишься,<br>
Ты мне нравишься, да!<br>
Ты мне нравишься, ты мне нравишься,<br>
Пойдем гулять!<br>
<br>
Ты мне нравишься, ты мне нравишься...<br>
Ты мне нравишься, ты мне нравишься...<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Ты мне нравишься, ты мне нравишься,<br>
Ты мне нравишься, да!<br>
Ты мне нравишься, ты мне нравишься,<br>
Пойдем гулять!<br>
<br>
Музыка и слова: Татьяна Ткачук<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/m1/moya-mishelj/8936-moya-mishelj-ti-mne-nravishjsya-text-pesni.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. д=ж (АлЕн Вуди - будь что бУдет).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
