<?php
$title = 'Босиком по солнцу - А по темным улицам гуляет дождь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ozqhwa9K0gk'";
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

<span class='blue'>[Куплет 1] Тк3-4цм/м? - aabb</span><br>
Одинокий вечер без тебя,<br>
Тебя нет со мной, скучаю я…<br>
И пустует наш столик на двоих,<br>
Догорают свечи, я одна (о-о-о)<br>
<br>
<span class='blue'>[Припев] Тк4цмм - abab</span><br>
А по тёмным улицам гуляет дождь!<br>
Фонарей далёких мерцает свет!<br>
Ты сегодня уже, наверно, не придёшь…<br>
Тебя нет сейчас со мною, нет!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Где сейчас ты, почему ты не пришёл?<br>
Неужели дождь помехой стал?<br>
Ты ведь знаешь, я сейчас одна…<br>
Плюй на дождь и приходи!<br>
<br>
<span class='blue'>[Припев]</span><br>
А по тёмным улицам гуляет дождь!<br>
Фонарей далёких мерцает свет!<br>
Ты сегодня уже, наверно, не придёшь…<br>
Тебя нет сейчас со мною, нет!<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
Одинокий вечер без тебя,<br>
Не нужны мне даже все мои друзья,<br>
За окном дождь давно утих,<br>
Но пустует наш столик на двоих…<br>
<br>
<span class='blue'>[Припев]</span><br>
А по тёмным улицам гуляет дождь!<br>
Фонарей далёких мерцает свет!<br>
Ты сегодня уже, наверно, не придёшь…<br>
Тебя нет сейчас со мною, нет!<br>
<br>
<span class='blue'><a href='https://teksty-pesenok.ru/rus-bosikom-po-solncu/tekst-pesni-a-po-temnym-ulicam-gulyaet-d/1754344/'
  target='_blank'>Источник</a></span><br>
  <br>
    <br>
P.S. В некоторых случаях вместо фонетической рифмы - ассоциация по смежности (метонимия):
двоих - одна, пришел - стал, я одна - приходи!<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
