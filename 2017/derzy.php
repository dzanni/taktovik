<?php
$title = 'Дима Билан - Держи (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/j_LrXZbOAWQ'";
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

<span class='blue'>[Куплет 1]: Я42м - aaaaaa<br></span>
Давай с тобой мы отдохнём,<br>
С тобой вдвоём,
С тобой вдвоём.<br>
Мы этот мир перевернём
С тобой вдвоём!<br>
(С тобой вдвоём!)<br>
<br>
<span class='blue'>[Переход] Я5ж - XX<br></span>
Скажи, зачем нужны нам эти люди? -<br>
Мы никому об этом не расскажем.<br>
Давай с тобой мы отдохнём,<br>
С тобой вдвоём! Ага!<br>
<br>
<span class='blue'>[Припев] Тк23м - aaabaaab<br></span>
Держи! Держи!<br>
Руку мою держи!<br>
Что хочешь, скажи! <br>
Получишь! Держи! Ага!<br>
Держи! Держи! <br>
Руку мою держи!<br>
Что хочешь, скажи! <br>
Получишь! Держи! Ага!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Давай с тобой мы не уснём<br>
С тобой вдвоём. <br>
С тобой вдвоём<br>
Мы эту ночь перевернем<br>
C тобой вдвоём!<br>
(С тобой вдвоём!)<br>
<br>
<span class='blue'>[Переход]<br></span>
Скажи, зачем нужны нам эти люди, -<br>
Мы никому об этом не расскажем.<br>
<div class='refren'>Давай с тобой мы отдохнём,<br>
С тобой вдвоём! Ага!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Держи! Держи!<br>
Руку мою держи!<br>
Что хочешь, скажи! <br>
Получишь! Держи! Ага!<br>
Держи! Держи! <br>
Руку мою держи!<br>
Что хочешь, скажи! <br>
Получишь! Держи! Ага!<br>
<br>
<span class='blue'>[Инструментал]<br></span>
<br>
Держи! Держи!<br>
<br>
Держи! Держи!<br>
Руку мою держи!<br>
Что хочешь, скажи! <br>
Получишь! Держи! Ага!<br>
Держи! Держи! <br>
Руку мою держи!<br>
Что хочешь, скажи! <br>
Получишь! Держи! Ага!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/dima-bilan-derzhi.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
