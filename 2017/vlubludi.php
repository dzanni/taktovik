<?php
$title = 'Настя Каменских - Влюбленные люди (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/dRn-H244dcE'";
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

<span class='blue'>[Куплет 1] Л1-4цмж - abCbabaaC<br></span>
Я вижу снег -<br>
Он станет льдом,<br>
Если меня ты вдруг забудешь.<br>
Или станет водой, <br>
Тот снег.<br>
Просто дай мне ладонь<br>
В ответ.<br>
Сыпет снег, <br>
И Святым вечер будет.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я вижу свет - <br>
Он станет тьмой,<br>
Если меня ты вдруг забудешь.<br>
Или станет огнём<br>
Тот свет,<br>
Мы с с тобою вдоём, <br>
И снег<br>
Сыпет, зная о том,<br>
Что мы влюблённые люди.<br>
<br>
<span class='blue'>[Аутро]<br></span>
Или станет водой, <br>
Тот снег.<br>
Просто дай мне ладонь<br>
В ответ.<br>
Сыпет снег, <br>
И Святым вечер будет.<br>
<br>
Музыка: Д. Саратский<br>
Слова: А. Потапенко <br>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kamenskih-nastya/nastya-kamenskih-nk-vlublennie-ludi.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
