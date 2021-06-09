<?php
$title = 'IOWA - Я заболела (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Os1dSz82SXU'";
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

<span class='blue'>[Куплет 1] Тк4ц3жм - AbAb<br></span>
Лето было пепельно-золотым.<br>
Чувства были сильно помяты.<br>
Нет, не боялась я темноты,<br>
Я была сама виновата,<br>
<div class='refren'>
Что не умела вязать узлы,<br>
В том, что промолчала когда-то.<br>
Только как лечить эту пустоту?<br>
Знаю, я сама виновата!</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Я заболела, я заболела, <br>
Я заболела тобой!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
В моих руках жёлтые цветы.<br>
Глаза слезятся от ветра.<br>
Мы не заварим чая в ледяной воде:<br>
Мы две стороны одной монеты.<br>
<div class='refren'>
Айсбергом ты на моём пути.<br>
Остаться, уйти? Не понятно.<br>
Но как же лечить эту пустоту?<br>
Я сама виновата!</div>
<br>
<span class='blue'>[Припев х4] Д43жм? - Ab<br></span>
Я заболела, я заболела, <br>
Я заболела тобой!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Лето было пепельно-золотым<br>
И уже катилось к закату.<br>
Отцвели давно наши сады,<br>
Осень во всем виновата!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Я не успела, я не успела понять, <span class='blue'>(Строка Д5цм?)<br></span>
Как заболела тобой.<br>
Я не успела, в этом всё дело,<br>
Я заболела тобой!<br>
<br>
<span class='blue'>[Куплет 4]<br></span>
Лето было пепельно-золотым<br>
И уже катилось к закату.<br>
Отцвели давно наши сады,<br>
Осень во всем виновата!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Я не успела, я не успела понять, <br>
Как заболела тобой.<br>
Я не успела, в этом всё дело,<br>
Я заболела тобой!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/i/iowa/iowa-ya-zabolela-toboi.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
