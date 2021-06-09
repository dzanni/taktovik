<?php
$title = 'Ленинград - Путина, конечно, жалко (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/1SwJeTeYK6k'";
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

<span class='blue'>[Куплет 1] Х4ж - ABAB</span><br>
  Путина, конечно, жалко:<br>
Столько лет одно и то же!<br>
Нет, табако или алко<br>
Он себе позволить может,<br>
<div class='refren'>
Но немного. В кабинете<br>
Только, чтоб никто не видел,<br>
 Выкурит по сигарете<br>
С кем-нибудь, кто служит в МИДе.</div>
<br>
<span class='blue'>[Припев] Тк32жм, Л13м - AbAb, aax</span><br>
Это сложно, сложно, <br>
Как у Путина стезя: <br>
Вроде бы, ему все можно,<br>
Вроде бы, ему все можно,<br>
Вроде бы, ему все можно,<br>
Но нельзя!<br>
<br>
Опа! <br>
Ой-ой-ой!<br>
(Нельзя!)<br>
Ой-ой-ой!<br>
 Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
(Нельзя!)<br>
Ой-ой-ой!<br>
 Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
(Нельзя!)<br>
<br>
<span class='blue'>[Куплет 2] Х4мж, Х4жм - aBaB, AbAb</span><br>
Или выпьет по писят,<br>
Но без русского размаха!<br>
Камеры везде висят,<br>
 Палево повсюду, нахуй!<br>
<div class='refren'>
В личной жизни он степенен.<br>
Ну а где? Когда? И с кем?<br>
Ну не гулять ему ж, как Ленин,<br>
В женском, сука, парике!</div>
<br>
<span class='blue'>[Припев]</span><br>
Это сложно, сложно, <br>
Как у Путина стезя: <br>
Вроде бы, ему все можно,<br>
Вроде бы, ему все можно,<br>
Вроде бы, ему все можно,<br>
Но нельзя!<br>
<br>
Ой-ой-ой!<br>
 Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
(Нельзя!)<br>
Ой-ой-ой!<br>
 Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
(Нельзя!)<br>
Ой-ой-ой!<br>
 Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
(Нельзя!)<br>
Ой-ой-ой!<br>
 Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
<br>
<span class='blue'>[Куплет 3] Х4м, Х4ж - abab, ABAB</span><br>
Все не так, как у людей!<br>
Мимо рта и по усам!<br>
Ну не в Кремль ж ему блядей<br>
Вызывать, подумай сам!<br>
<div class='refren'>
Вот и ездит он по встречам -<br>
То охота, то рыбалка,<br>
То Шойгу зайдет, то Сечин.<br>
Путина, конечно, жалко! </div>
<br>
<span class='blue'>[Припев]</span><br>
Это сложно, сложно, <br>
Как у Путина стезя:<br>
Вроде бы, ему все можно,<br>
Вроде бы, ему все можно,<br>
Вроде бы, ему все можно,<br>
Но по факту, так-то ничего нельзя!<br>
<br>
Ой-ой-ой!<br>
 Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
(Нельзя!)<br>
Ой-ой-ой!<br>
 Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
(Нельзя!)<br>
Ой-ой-ой! <br>
Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
(Нельзя!)<br>
Ой-ой-ой!<br>
 Ой-ой-ой-ой-ой-ой-ой-ой-ой!<br>
(Нельзя!)<br>
<br>
<span class='blue'>Источник - текст, приложенный к клипу Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
