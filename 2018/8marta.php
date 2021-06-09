<?php
$title = 'Вадим Галыгин & Ленинград - 8 Марта (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aEFCUtv0DF0'";
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
[Расшифровка беседы на суржике, которая предшествует песне,
не приводится]<br>
<br>
<span class='blue'>[Куплет 1] Тк2м - aaaa<br></span>
Восьмае сакавік,<br>
Не прыйшоў мужык,<br>
Праўда быў мужык, <br>
Быў, ды раптам знік.<br>
<div class='refren'>Восьмае сакавік, <br>
На гародзе снегавік,<br>
Ты скажы мне, снегавік - <br>
Дзе ён, мой мужык?</div>
<br>
<span class='blue'>[Припев х2] Л3м - aaaa<br></span>
Восьмага сакавіка <br>
Лезя ў трусы рука,<br>
Хочацца мужыка<br>
Восьмага сакавіка...<br>
<br>
<span class='blue'>[Частушка] Х4ж - AA<br></span>
Сижу пьяная на хате,<br>
А вавёрка всё лохматей!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Восьмае сакавік,<br>
На гародзе снегавік,<br>
Дзе ж ты, мой мужык,<br>
Куды ты раптам знік?<br>
<div class='refren'>Восьмае сакавік,<br>
Не прыйшоў мужык,<br>
Не прыйшоў мужык,<br>
А згадзіўся снегавік.</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Восьмага сакавіка <br>
Лезя ў трусы рука,<br>
Хочацца мужыка<br>
Восьмага сакавіка...<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Восьмае сакавік, <br>
На гародзе снегавік,<br>
Ты скажы мне, снегавік -<br>
Дзе ён, мой мужык?<br>
<br>
<span class='blue'>[Припев х3]<br></span>
Восьмага сакавіка <br>
Лезя ў трусы рука,<br>
Хочацца мужыка<br>
Восьмага сакавіка...<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/s/shnurov-sergey/leningrad-galigin-8-marta.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
