<?php
$title = 'IOWA - Плохо танцевать (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/5UAiMYccBRQ'";
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

<span class='blue'>[Куплет 1] Л4ц2жд? - AB'B'B'xAB'B'B'<br></span>
Ты говоришь, что я плохо танцую.<br>
Ты снимал на видео, <br>
Из окна я видела.<br>
Думаешь, обиделась? <br>
Парень, нет!<br>
Кто не танцует плохо, тот не рискует.<br>
Будут мне завидовать, <br>
Сохраняя видео.<br>
Все что я выдаю.<br>
<br>
<span class='blue'>[Припев] Л1-3мд - aB'B'aB'B'<br></span>
Принимаю этот импульс в себе.<br>
Знаками, <br>
Мы общаемся знаками.<br>
Хаотично в танце меня веди <br>
Так себе,  <br>
Будут танцы так себе. <br>
<div class='refren'>
<span class='blue'>Тк4цжд - AAB'B'<br></span>
Плохо танцевать – плохо, плохо! <br>
Плохо танцевать – плохо, плохо! <br>
Плохо танцевать – это тоже позиция. <br>
Я добавлю сахар в эти кислые лица. <br>
Плохо танцевать – плохо, плохо! <br>
Плохо танцевать – плохо, плохо! <br>
Плохо танцевать – это тоже позиция. <br>
Я добавлю сахар в эти кислые лица.</div>
<span class='blue'>Л34цмж - aaaBaaaB<br></span>
 Ду-ду-да-да-та-да!  <br>
 Я-та-да-да-та-да! <br>
 Ду-ду-да-да-та-да! <br>
 Ду-ду-ду-ду-та-да! Ду-ду-та-да-ду! <br>
 Ду-ду-да-да-та-да!  <br>
 Я-та-да-да-та-да! <br>
 Ду-ду-да-да-та-да! <br>
 Ду-ду-ду-ду-та-да! Ду-ду-та-да-ду! <br>
 <br>
<span class='blue'>[Куплет 2]<br></span>
Ты говоришь, мои движенья нелепы.<br>
Просто я открытая, <br>
Прямо под софитами <br>
На танцпол выйду я.<br>
Не понимаешь, это как быть раздетым.<br>
Выпускаю пламя я, <br>
Отменяю правила <br>
И танцую для себя.<br>
<br>
<span class='blue'>[Припев]<br></span>
Принимаю этот импульс в себе.<br>
Знаками, <br>
Мы общаемся знаками.<br>
Хаотично в танце меня веди.<br>
Так себе, <br>
Будут танцы так себе.<br>
<div class='refren'>
Плохо танцевать – плохо, плохо! <br>
Плохо танцевать – плохо, плохо! <br>
Плохо танцевать – это тоже позиция. <br>
Я добавлю сахар в эти кислые лица. <br>
Плохо танцевать – плохо, плохо! <br>
Плохо танцевать – плохо, плохо! <br>
Плохо танцевать – это тоже позиция. <br>
Я добавлю сахар в эти кислые лица.</div>
Ду-ду-да-да-та-да!  <br>
Я-та-да-да-та-да! <br>
Ду-ду-да-да-та-да! <br>
Ду-ду-ду-ду-та-да! Ду-ду-та-да-ду! <br>
Ду-ду-да-да-та-да!  <br>
Я-та-да-да-та-да! <br>
Ду-ду-да-да-та-да! <br>
Ду-ду-ду-ду-та-да! Ду-ду-та-да-ду! <br>
<br>
<div class='refren'>
  Плохо танцевать тоже позиция.<br>
Добавлю сахар в эти кислые лица.<br>
Да, плохо танцевать тоже позиция.<br>
Добавлю сахар… Сссахар!<br>
<br>
Да, плохо танцевать тоже позиция.<br>
Добавлю сахар в эти кислые лица.<br>
Да, плохо танцевать тоже позиция.<br>
Добавлю сахар… Сссахар!</div>
<br>
Ду-ду-да-да-та-да!  <br>
Я-та-да-да-та-да! <br>
Ду-ду-да-да-та-да! <br>
Ду-ду-ду-ду-та-да! Ду-ду-та-да-ду! <br>
Ду-ду-да-да-та-да!  <br>
Я-та-да-да-та-да! <br>
Ду-ду-да-да-та-да! <br>
Ду-ду-ду-ду-та-да! Ду-ду-та-да-ду! <br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/i/iowa/8517-iowa-ploho-tancevatj-text-pesni.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Куплеты - скорее логаэд, чем тактовик.
д=ж "позиция -лица". Фрагмент "ду-ду" учтен как Ак4ц.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
