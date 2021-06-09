<?php
$title = 'Наргиз - Я буду всегда с тобой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/GmrnG1FjvPA'";
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

<span class='blue'>[Куплет 1] Тк2//33мж - xXxX<br></span>
Погоди!<br>
Не хочу с тобой прощаться.<br>
Холодный снег на губах.<br>
Полузакрытые чувства.<br>
Ты и я<br>
Ничего не обещали.<br>
Может быть, что-то еще,<br>
Может быть, мы потеряли.<br>
<br>
<span class='blue'>[Припев х2] Дк1-3м - abbbaaa<br></span>
А я<br>
Буду всегда с тобой.<br>
Буду твоей судьбой,<br>
Буду твоей звездой <br>
Рядом я<br>
И скажу, не тая:<br>
"Буду всегда твоя!"<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Всё равно, <br>
Уходя, ты повернешься.<br>
Губы шептали тебе, <br>
Как я безумно любила.<br>
Я с тобой,<br>
Больше ничего не надо.<br>
Только мне сердце открой.<br>
Я навсегда буду рядом.<br>
<br>
<span class='blue'>[Припев х2] <br></span>
А я<br>
Буду всегда с тобой.<br>
Буду твоей судьбой,<br>
Буду твоей звездой <br>
Рядом я<br>
И скажу, не тая:<br>
"Буду всегда твоя!"<br>
<br>
Музыка и слова: Максим Фадеев<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/z/zakirova-nargiz/ya_budu_vsegda_s_toboi.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
