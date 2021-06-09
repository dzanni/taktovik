<?php
$title = 'Ольга Бузова - Неправильная (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/gVeEKDAOdw8'";
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

<span class='blue'>[Припев х2] Тк3д? - AA'A'A''<br></span>
Ты знаешь все мои сокровенные тайны<br>
И шепотом просишь, чтобы я не растаяла.<br>
Но я растворяюсь в тебе не по правилам,<br>
Не твоя, очень неправильная.<br>
<br>
<span class='blue'>[Куплет 1] Л2жд - aB'aB'cB'cB'<br></span>
Сделай музыку громче<br>
Нам с тобою на прощание!<br>
По фразам, по строчкам <br>
Пустые в уши обещания.<br>
Ты рядом со мною, <br>
Но этой ночью мы расстанемся.<br>
Играешь любовью, <br>
И сам снова обжигаешься.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Ты знаешь все мои сокровенные тайны<br>
И шепотом просишь, чтобы я не растаяла.<br>
Но я растворяюсь в тебе не по правилам,<br>
Не твоя, очень неправильная.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Не завешены окна, <br>
С тобой мы больше не скрываемся.<br>
Ладони намокли, <br>
И сердце вырваться пытается.<br>
Ты взглядом наводишь, <br>
Но утро быстро приближается.<br>
В глаза мне не смотришь,<br>
Тобой снова обжигаюсь я.<br>
<br>
<span class='blue'>[Припев х4]<br></span>
Ты знаешь все мои сокровенные тайны<br>
И шепотом просишь, чтобы я не растаяла.<br>
Но я растворяюсь в тебе не по правилам,<br>
Не твоя, очень неправильная.<br>
  <br>
<span class='blue'><a href="https://text-lyrics.ru/o1/buzovaolga/8687-oljga-buzova-nepraviljnaya-text-pesni.html"
  target="_blank">Источник</a><br></span>
  <br>
    <br>
  N.B. Куплет - строфный логаэд, в припеве ж=д (тайны - растаяла),
  г=д (правилам - неправильная).  <br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
