<?php
$title = 'EMIN ft. Jose Mamedov - Сердце пополам (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wbFEKZkQ2uE'";
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

<span class='blue'>[Куплет 1, Emin] Х4м - abaab<br></span>
Этой ночью за окном<br>
Расплескалась тишина.<br>
Мы сегодня не вдвоем,<br>
Сердце занято твое <br>
Переливами дождя.<br>
<div class='refren'>
Знаешь, мне немного жаль<br>
Грустный свет туманных звезд.<br>
Там небесным кораблям<br>
Негде бросить якоря.<br>
Кто-то солнце не зажег.<br>
Кто-то солнце не зажег.</div>
<br>
<span class='blue'>[Припев, Emin] Х2-4мж - aaaabbb(b)<br></span>
Снова сердце пополам, <br>
Сердце пополам!<br>
Мы по разным полюсам, <br>
Разным полюсам!<br>
Без тебя бессонница,<br>
Ночи без конца,<br>
И нет солнца, <br>
Нет солнца!<br>
<div class='refren'>
Снова сердце пополам, <br>
Сердце пополам!<br>
Мы по разным полюсам, <br>
Разным полюсам!<br>
Без тебя бессонница,<br>
Ночи без конца,<br>
И нет солнца! <span class='blue'>(Строка Я2ж)</span></div>
<br>
<span class='blue'>[Куплет 2, Emin]<br></span>
Звезды будут обнимать<br>
Темной ночью хрупкий стан.<br>
Как тебя мне разгадать?<br>
Ускользаешь ты опять<br>
В предрассветный тот туман.<br>
<div class='refren'>Ветер снова вдаль унес<br>
Все слова, что не сберег.<br>
Там небесным кораблям<br>
Негде бросить якоря.<br>
Кто-то солнце не зажег.<br>
Кто-то солнце не зажег.</div>
<br>
<span class='blue'>[Припев, Emin]<br></span>
Снова сердце пополам, <br>
Сердце пополам!<br>
Мы по разным полюсам, <br>
Разным полюсам!<br>
Без тебя бессонница,<br>
Ночи без конца,<br>
И нет солнца, <br>
Нет солнца!<br>
<div class='refren'>
Снова сердце пополам, <br>
Сердце пополам!<br>
Мы по разным полюсам, <br>
Разным полюсам!<br>
Без тебя бессонница,<br>
Ночи без конца,<br>
И нет солнца!</div>
<br>
<span class='blue'>[Припев, Emin]<br></span>
Снова сердце пополам, <br>
Сердце пополам!<br>
Мы по разным полюсам, <br>
Разным полюсам!<br>
Без тебя бессонница,<br>
Ночи без конца,<br>
И нет солнца!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Этой ночью за окном...<br>
<br>
<span class='blue'><a href='https://всепесни.рф/song/emin/serdtse_popolam'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма д=ж=м на ассонансе (совпадении согласных): "бессОнница" - "концА" - "сОлнца".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
