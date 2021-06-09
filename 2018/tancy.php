<?php
$title = 'Руки Вверх! - Танцы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/hCc9DemxX_s'";
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

<span class='blue'>[Куплет 1] Тк4цм - aa</span><br>
Больше не люблю, просто уходи.<br>
И уже не важно, что там впереди.<br>
Выстрелы в лоб, танцы нон-стоп.<br>
Ты бы хоть одела что-то, кроме чулок.<br>
Жаркие тела, ночь так темна.<br>
И уже со мною другая нежна.<br>
Не переживай так и не грусти.<br>
Это просто танцы, девочка, прости!<br>
<br>
<span class='blue'>[Припев х2] Дв24ж - AAAAA</span><br>
Танцы-танцы - <br>
Я так хочу с тобой остаться.<br>
И на волнах радиостанций <br>
Танцуют все под наши танцы.<br>
Танцы-танцы.<br>
Танцы-танцы - <br>
Я так хочу тебя касаться.<br>
И нам уже не удержаться,<br>
Узнают все про наши танцы.<br>
Танцы-танцы.<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Больше не люблю, ни к чему звонки.<br>
Жаль, что поздно понял, как мы далеки.<br>
Танцы без сна, ночь так пьяна.<br>
И уже другая меня сводит с ума.<br>
Дай громче звук, сердце - тук-тук.<br>
Как же раньше жил я без твоих нежных рук?<br>
Не переживай так, выходи, не стой!<br>
Это просто танцы, потанцуй со мной!<br>
<br>
(Танцы-танцы!)<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Танцы-танцы - <br>
Я так хочу с тобой остаться.<br>
И на волнах радиостанций <br>
Танцуют все под наши танцы.<br>
Танцы-танцы.<br>
Танцы-танцы - <br>
Я так хочу тебя касаться.<br>
И нам уже не удержаться,<br>
Узнают все про наши танцы.<br>
Танцы-танцы.<br>
<br>
Музыка и слова: Сергей Жуков<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/r1/rukivverh/10647-ruki-vverh-tanci-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
