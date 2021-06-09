<?php
$title = 'IOWA - Красота (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/NbZvoxc9LrY'";
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

<span class='blue'>[Куплет 1] Тк32ж - ABABBB ABBB</span><br>
Вести себя дерзко - модно, <br>
Даже немного на грани.<br>
Броско оденься, но чтобы (Э-э-э!)<br>
На брюках спортивных полоски<br>
Узкие туфли-сандали (Э-э-э!)<br>
Не закрывали!<br>
<div class='refren'>
Вести себя дерзко - модно, <br>
Сегодня ты прочнее стали.<br>
И где бы ты не появлялся, <br>
Тебя обсуждали!</div>

<span class='blue'>Тк32мж - aaxA</span><br>
Что в жизни ты совершил? (что) <br>
Упустил или заслужил? (что)<br>
Веришь в себя? Да! <br>
Значит - победил ты!<br>
<br>
<span class='blue'>[Переход] Л32мж - aabbaaCC</span><br>
И как раньше, чешем в клуб, <br>
Сумки в круг.<br>
Вот, знает каждый идиот - <br>
Russian Squad! (Russian Squad!)<br>
И как раньше, чешем в клуб, <br>
Сумки в круг.<br>
Это не просто, <br>
Держать стиль из 90-ых! (Еа!)<br>
<br>
<span class='blue'>[Припев] Л32мд - aabbaaCC</span><br>
Здесь красота,<br>
Внутри вся красота!<br>
Во мне вся красота! <br>
Пацаны качают кепками!<br>
Здесь красота, <br>
Во мне вся красота!<br>
В тебе вся красота! <br>
Слова и поцелуи будут крепкими! (Да-и!)<br>
Слова и поцелуи! <br>
Слова и поцелуи! Слова и поцелуи!<br>
 Слова и поцелуи!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Встречают тебя, как прежде -<br>
По взгляду и по одежде!<br>
Заводишь быстро новых знакомых (Э-это!)<br>
В футболке и олимпийке <br>
Стремишься быть всегда на пике (на пике),<br>
Но взгляд немного дикий!<br>
<div class='refren'>
Носи, в общем, что угодно! <br>
Почувствуй себя свободно<br>
В куртке на голое тело -<br>
В тебе все дело!</div>

И если загрустил - отпусти <br>
Того, кому не по пути!<br>
Веришь с себя? Да! <br>
Значит - победил ты!<br>
<br>
<span class='blue'>[Переход]</span><br>
И как раньше, чешем в клуб, <br>
Сумки в круг.<br>
Вот, знает каждый идиот - <br>
Russian Squad!<br>
И как раньше, чешем в клуб, <br>
Сумки в круг.<br>
Мода меняется, <br>
А что же останется...<br>
<br>
<span class='blue'>[Припев]</span><br>
Здесь красота,<br>
Внутри вся красота!<br>
Во мне вся красота! <br>
Пацаны качают кепками!<br>
Здесь красота, <br>
Во мне вся красота!<br>
В тебе вся красота! <br>
Слова и поцелуи будут крепкими!<br>
<br>
Здесь красота,<br>
Во мне вся красота! <br>
Внутри вся красота!<br>
Пацаны качают кепками!<br>
Здесь красота, <br>
Внутри вся красота!<br>
Во мне вся красота!<br>
Слова и поцелуи будут крепкими! (Да!)<br>
<br>
Слова и поцелуи! <br>
Слова и поцелуи! Слова и поцелуи! <br>
Слова и поцелуи будут крепкими!<br>
<br>
Слова и поцелуи!<br>
 Слова и поцелуи будут крепкими!<br>
Слова и поцелуи!<br>
Слова и поцелуи!<br>
 Слова и поцелуи будут крепкими! <br>
<br>
<span class='blue'><a href="http://perevod-pesni.ru"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. ж=м в финале куплетов и перехода.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
