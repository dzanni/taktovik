<?php
$title = 'DREZDEN - Эдельвейс (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Nx2PoxZ3fPA'";
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

<span class='blue'>[Интро] Л3м/ - aa<br></span>
Эдельвейс-вейс-вейс.<br>
Эдельвейс-вейс-вейс.<br>
<br>
<span class='blue'>[Куплет 1] Х4жм - AbAb<br></span>
Черный дым и белый холод<br>
Разлучают нас с тобой.<br>
Над скульптурой - серп и молот,<br>
Атлантида под Луной.<br>
  <div class='refren'>Пролетают эдельвейсы<br>
  Командора Джимми Ли,<br>
  Хаоситы прячут пейсы<br>
  И съедают горсть земли.</div>
<br>
<span class='blue'>[Припев] Тк2-4цдм - A'bA'b<br></span>
Будешь вспоминать алтайских вересков<br>
На губах янтарный мед,<br>
Фотографий деда дембельских<br>
Ярко-алый переплет.<br>
  <div class='refren'>
  <span class='blue'>Х4дм - A'bA'b<br></span>
  Эскадрильи юных орликов<br>
  Сквозь Галактики плывут,<br>
  Аргонавтов и паломников<br>
  Ариель с Мирандой ждут.</div>
Эдельвейс! <span class='blue'>(Строка Л1м?)</span><br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Миллионы парасеков<br>
Рассекаем, как листок.<br>
Плыть с дракарами норвегов<br>
Через Леду на Восток.<br>
  <div class='refren'>Как дельфины будем плавать<br>
  На свидания с Землей.<br>
  Ты в экране будешь плакать,<br>
  Звездный мальчик - твой герой.</div>
<br>
  <span class='blue'>[Припев]<br></span>
  Будешь вспоминать алтайских вересков<br>
  На губах янтарный мед,<br>
  Фотографий деда дембельских<br>
  Ярко-алый переплет.<br>
    <div class='refren'>Эскадрильи юных орликов<br>
    Сквозь Галактики плывут,<br>
    Аргонавтов и паломников<br>
    Ариель с Мирандой ждут.</div>
Эдельвейс-вейс-вейс.<br>
Эдельвейс-вейс-вейс.<br>
Эдельвейс-вейс-вейс.<br>
Эдельвейс-вейс-вейс.<br>
<br>
<span class='blue'>[Припев]<br></span>
Будешь вспоминать<br>
Алтайских вересков<br>
На губах янтарный мед,<br>
Фотографий деда дембельских<br>
Ярко-алый переплет.<br>
  <div class='refren'>Эскадрильи юных орликов<br>
  Сквозь Галактики плывут,<br>
  Аргонавтов и паломников<br>
  Ариель с Мирандой ждут.</div>
Эдельвейс!<br>
Эдельвейс!<br>
 <br>
<span class='blue'><a href='https://text-pesni.com/pesnya/pokazat/565683119/drezden/tekst-perevod-pesni-edelvejs-drezden/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
