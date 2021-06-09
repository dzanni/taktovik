<?php
$title = 'Гречка - Люби меня люби (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/oTzirCuvn-E'";
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

<span class='blue'>[Куплет] Л2-4цм - aabbx<br></span>
Непокорная моя любовь<br>
Любит не меня уже который год.<br>
Те же стены и цветы, <br>
Те же люди и стихи,<br>
Те же мысли и слова вслух.<br>
<br>
<span class='blue'>[Припев] Л2мж - abbCaddC<br></span>
Люби меня, люби<br>
Жарким огнем<br>
Ночью и днем, <br>
Сердце сжигая!<br>
Люби меня, люби, <br>
Не улетай,<br>
Не исчезай, <br>
Я умоляю!<br>
Люби меня, люби!<br>
Люби меня, люби!<br>
<br>
<span class='blue'>[Куплет]<br></span>
Непокорная моя любовь<br>
Любит не меня уже который год.<br>
Те же стены и цветы, <br>
Те же люди и стихи,<br>
Те же мысли и слова вслух.<br>
<br>
<span class='blue'>[Припев]<br></span>
Люби меня, люби<br>
Жарким огнем<br>
Ночью и днем, <br>
Сердце сжигая!<br>
Люби меня, люби, <br>
Не улетай,<br>
Не исчезай, <br>
Я умоляю!<br>
Люби меня, люби!<br>
Люби меня, люби!<br>
<br>
<span class='blue'>[Бридж]<br></span>
Люби меня, люби!<br>
Люби меня, люби!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Люби меня, люби<br>
Жарким огнем<br>
Ночью и днем, <br>
Сердце сжигая!<br>
Люби меня, люби, <br>
Не улетай,<br>
Не исчезай, <br>
Я умоляю!<br>
<br>
Люби меня, люби!<br>
<br>
<span class='blue'><a href='https://genius.com/Grechka-love-me-love-me-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
