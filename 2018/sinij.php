<?php
$title = 'Филипп Киркоров - Цвет настроения синий (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/IAuzNXGmkL4'";
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
<span class='i'>[Голос за кадром] Спешу сообщить вам, друзья, что вы слишком инфантильны.
  Из-за этого ваше баловство переходит все границы.
  Проще говоря, весьма незрелы в своем поведении!<br></span>
<br>
<span class='blue'>[Вступление]<br></span>
Цвет настроенья синий.<br>
Цвет настроенья синий.<br>
<br>
<span class='blue'>[Куплет 1] Л65м - aabb<br></span>
Она убежала от нелепой суеты,<br>
Ни капли стеснения с приходом темноты.<br>
Страсть, страсть над ней имеет власть.<br>
Всё, громче звук и понеслась!<br>
<br>
<span class='blue'>[Припев х2] Тк3ж - aaaa<br></span>
Цвет настроенья синий.<br>
Внутри Martini, а в руках бикини.<br>
Под песню «Синий иней»<br>
Она так чувствует себя богиней.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Влияние ночи очень трудно предсказать.<br>
По телу мурашки, и ей хочется кричать.<br>
Да, да, она сейчас звезда!<br>
Все предрассудки ерунда!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Цвет настроенья синий.<br>
Внутри Martini, а в руках бикини.<br>
Под песню «Синий иней»<br>
Она так чувствует себя богиней.<br>
<br>
Цвет настроенья...<br>
Цвет настроенья...<br>
Цвет настроенья...<br>
Цвет настроенья синий.<br>
<br>
<span class='i'>
[Ургант] И тут она разворачивается. У нее во рту леденец, она достает, он синий -
отсылка к названию. И она тебе вставляет его в рот, ты стоишь, и она, вот, следующий кадр,
разворачивается и просто уходит. Всё!<br>
<br>
[Киркоров] Ваня, ты ебанулся? Она никогда эту хуйню делать не будет. И вообще,
всё, что ты сейчас рассказал, это какая-то дичь. Ну чо тебе не нравится моя идея для клипа, а?<br>
<br>
[Ургант] Ну какая идея? Ты стоишь, поешь песню, и тебе старухи несут цветы?<br>
<br>
[Киркоров] Ну, это же круто! Ну?<br>
<br>
[Ургант] Окей, давай снимать! Давай снимать так.<br>
<br>
[Киркоров] Ну. Алё! Спасибо, Ванечка, спасибо тебе, дорогой!<br>
</span>
<br>
<span class='blue'>[Припев]<br></span>
Цвет настроенья синий.<br>
Внутри Martini, а в руках бикини.<br>
Под песню «Синий иней»<br>
Она так чувствует себя богиней.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/philipp-kirkorov-cvet-nastroeniya-sinij.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
