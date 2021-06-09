<?php
$title = 'LUCAVEROS - В одно касание (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Pv_oVOVpSCU'";
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

<span class='blue'>[Куплет 1] Тк4цм - aa<br></span>
Твои нежные объятья для меня, как яд.<br>
Ладони в твоих волосах, вдыхаю аромат.<br>
Ведь ты та самая звезда, что ярче всех Плеяд,<br>
Единственная героиня всех моих тирад.<br>
<div class='refren'>
Мои лёгкие касанья, твой тающий взгляд,<br>
Впадаем в дикую нирвану, секунды летят.<br>
И через миг ты скинешь с тела парящий наряд,<br>
Ведь без него ты словно камень в шестьдесят карат.</div>
<br>
<span class='blue'>[Переход х2] Тк4цж - AA<br></span>
А я целую каждый дюйм твоей кожи,<br>
Дюйм твоей кожи очень осторожно.<br>
Ты мой ангел, и ты мне всего дороже,<br>
Мне всего дороже, мне всего дороже.<br>
<br>
<span class='blue'>[Припев х2] Я4д - A'A'<br></span>
Это любовь в одно касание (Е-э) <br>
Это любовь в одно касание.<br>
Ведь это словно испытание (Е-э) <br>
Когда с тобой на расстоянии.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Твои нежные объятья для меня, как сон.<br>
Ты то, как сакура, нежна, то как холодна, как бетон.<br>
Будто тестируешь мой гнев и лезешь на рожон.<br>
Слёзы - оружие твое, буду сражён.
<div class='refren'>
Мои легкие касанья, сердца в унисон.<br>
Я смотрю в твои глаза, чаруясь красотой.<br>
А ты уснёшь, ко мне прижавшись своею щекой,<br>
Возьму тебя в свои объятья, обрету покой.</div>
<br>
<span class='blue'>[Переход х2]<br></span>
А я целую каждый дюйм твоей кожи,<br>
Дюйм твоей кожи очень осторожно.<br>
Ты мой ангел, и ты мне всего дороже,<br>
Мне всего дороже, мне всего дороже.<br>
<br>
<span class='blue'>[Припев х4]<br></span>
Это любовь в одно касание (Е-э) <br>
Это любовь в одно касание.<br>
Ведь это словно испытание (Е-э) <br>
Когда с тобой на расстоянии.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/l/lucaveros-emir/lucaveros-v-odno-kasanie.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
