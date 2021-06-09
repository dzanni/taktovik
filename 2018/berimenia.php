<?php
$title = 'Ольга Бузова - Бери меня (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/t4ZS-T_LNeU'";
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

<span class='blue'>[Куплет 1] Дк513д - A'A'B'A'A'B'<br></span>
Что-то есть в твоих глазах, глазах нескромное,<br>
Невесомое, <br>
Не скрывай свои ощущения.<br>
Что-то есть в твоих словах, словах огромное,<br>
От которого <br>
Вылетаешь во всех направлениях.<br>
<br>
<span class='blue'>[Припев] Л52цмж - aaaBaaaBB<br></span>
А ты бери-бери меня, меня!<br>
А ты бери-бери меня, меня!<br>
А ты бери-бери меня, меня!<br>
Полетаем, полетаем…<br>
А ты бери-бери меня, меня!<br>
А ты бери-бери меня, меня!<br>
Полетаем, полетаем…<br>
Полетаем, полетаем…<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Что-то в твоих облаках опять по-новому,<br>
С нами в комнате <br>
Замечаю сегодня особенно.<br>
Что-то между нами навсегда бессонное,<br>
Безусловное, <br>
Накрывает нас теплыми волнами.<br>
<br>
<span class='blue'>[Припев]<br></span>
А ты бери-бери меня, меня!<br>
А ты бери-бери меня, меня!<br>
А ты бери-бери меня, меня!<br>
Полетаем, полетаем…<br>
А ты бери-бери меня, меня!<br>
А ты бери-бери меня, меня!<br>
Полетаем, полетаем…<br>
Полетаем, полетаем…<br>
<br>
<span class='blue'>[Аутро]<br></span>
Полетаем, полетаем…<br>
Полетаем, полетаем…<br>
Полетаем, полетаем…<br>
Полетаем, полетаем…<br>
<br>
<span class='blue'><a href='https://genius.com/Olga-buzova-take-me-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
