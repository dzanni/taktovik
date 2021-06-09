<?php
$title = 'Ольга Бузова - Хит-парад (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/gMQPlC02PQY'";
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

<span class='blue'>[Припев]<br></span>
Слышишь, Амур!<br>
Ты не попал в хит-парад моих мыслей,<br>
Не присылай больше мне свои письма!<br>
Ты не попал, или этот твой выстрел <br>
 Был не тому!<br>
<br>
<span class='blue'>[Куплет 1] Тк23//2дм - A'A'A'bC'C'C'b<br></span>
Тебе что-то не нравится? <br>
А мне какая разница?<br>
Ведь мной не полюбится, <br>
Как не крути, дорогой!<br>
<div class='refren'>Так в жизни случается - <br>
Любовь не получается.<br>
А значит, получится <br>
В чем-то другом!</div>
<br>
<span class='blue'>[Припев] Тр4ц2жм - AAAbAAAb<br></span>
Ты не попал в хит-парад моих мыслей,<br>
Не присылай больше мне свои письма!<br>
Ты не попал, значит, мимо твой выстрел, <br>
Слышишь, Амур!<br>
Ты не попал в хит-парад моих мыслей,<br>
Не присылай больше мне свои письма!<br>
Ты не попал, или этот твой выстрел <br>
Был не тому!<br>
<br>
Ты не попал… Ты не попал…<br>
Ты не попал… Ты не попал…<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
И вновь оповещения, <br>
Ты хочешь общения.<br>
Но твои сообщения <br>
Больше не буду читать.<br>
<div class='refren'>Зачем мне обещания? <br>
Смайл шлю на прощание,<br>
И о нашем свидании <br>
Ты не мечтай!</div>
<br>
<span class='blue'>[Припев]<br></span>
Ты не попал в хит-парад моих мыслей,<br>
Не присылай больше мне свои письма!<br>
Ты не попал, значит, мимо твой выстрел, <br>
Слышишь, Амур! (Слышишь, Амур!)<br>
Ты не попал в хит-парад моих мыслей,<br>
Не присылай больше мне свои письма.<br>
Ты не попал, или этот твой выстрел <br>
Был не тому!<br>
<br>
Ты не попал… Ты не попал…<br>
Ты не попал… Ты не попал…<br>
<br>
Тебе что-то не нравится?..<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/o1/buzovaolga/8326-oljga-buzova-hitparad-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Ритмически и мелодически близкий рисунок припева - в песне "Осенний поцелуй"
из репертуара Аллы Пугачевой (музыка Аллы Пугачевой, слова Игоря Николаева, 1992):<br>
<br>
<span class='i'>Осенний поцелуй после жаркого лета,<br>
Ты, может быть, один так почувствовал это.<br>
Ты, может быть, один захотел этот вечер<br>
Со мною испить до дна.<br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
