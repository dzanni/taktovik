<?php
$title = 'Мари Краймбрери - Не в адеквате (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wJ2jjzyHjCs'";
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

<span class='blue'>[Куплет 1] Тк32мж?, Тк4цм/ж/д - aBBaCC, aa, AA, A'A'<br></span>
Мне больше не надо пить, <br>
Чтобы набрать тебя, <br>
Это уже не симпатия,<br>
(А-а-а-а!)<br>
Ну хватит уже дружить,<br>
Обними меня смело (а)!<br>
Я давно так хотела (а)! <br>
(Возьми мое тело!)<br>
<div class='refren'>
Мне надоело делать вид, что я не всерьёз.<br>
Давай увидимся, есть тут один вопрос.<br>
Я устала намекать на одно и тоже,<br>
Но похоже... вот и я о том же...<br>
Давай сменим вид на город на вид на горы.<br>
Светофоры все с красного на зеленый.<br>
Ведь я же знаю, ты любишь такие party,</div>
<br>
<span class='blue'>[Припев] Дк32дм?, Л33//2мд - AAA'bA'A'A'b, aB'aB'<br></span>
Когда мы не в адеквате, <br>
На мне рваное платье,<br>
И ты смотришь внимательно, <br>
Палишься сам,<br>
Что хочешь в мои объятия, <br>
Хочешь снимать с меня,<br>
Ты хочешь снимать с меня <br>
Всё по ночам (а! а!) -<br>
<div class='refren'>
(А), а я тебе не дам, дам, дам <br>
Сделать фото, когда я раздетая!<br>
Я не из этих дам, дам, дам, <br>
Но нам круто и без этого!<br>
Я тебе не дам, дам, дам <br>
Сделать фото, когда я раздетая!<br>
Я не из этих дам, дам, дам, <br>
Но нам круто и без этого!<br></div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ты любишь, когда я без -<br>
Когда с тобою рядом (а!)<br>
Без этих нарядов.
(А-а-а-а-а!)<br>
Я бешеный интерес -<br>
Это уже неизбежно! (а!)<br>
Мы то грубо, то нежно, <br>
То грубо, то нежно.<br>
<div class='refren'>
То, что между нами - необъяснимо толком.<br>
На твои вопросы все отвечаю колко.<br>
Ненормальная стерва, тебе же нравится!<br>
Да и сам ты псих - начинается!<br>
На моих губах ты, на твоих дым,<br>
А я не знаю, что сказать остальным,<br>
Ведь это все происходит на автомате,</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Когда мы не в адеквате, <br>
На мне рваное платье,<br>
И ты смотришь внимательно, <br>
Палишься сам,<br>
Что хочешь в мои объятия, <br>
Хочешь снимать с меня,<br>
Ты хочешь снимать с меня <br>
Всё по ночам (а! а!) -<br>
<div class='refren'>
А, а я тебе не дам, дам, дам <br>
Сделать фото, когда я раздетая!<br>
Я не из этих дам, дам, дам, <br>
Но нам круто и без этого!<br>
Я тебе не дам, дам, дам <br>
Сделать фото, когда я раздетая!<br>
Я не из этих дам, дам, дам, <br>
Но нам круто и без этого!<br></span>
<br>
Музыка и слова: Мари Краймбрери<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/m/mari-kraimbreri/mari-kraimbreri-ne-v-adekvate.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Финальная строка куплетов рифмуется с зачином припева.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
