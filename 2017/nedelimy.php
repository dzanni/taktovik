<?php
$title = 'Artik & Asti - Неделимы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/St9BslKyfgE'";
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

<span class='blue'>[Куплет 1: Asti] Тк4цмж, Тк4цм/ж - aBaB, aa, AA<br></span>
Давай забудем всё и убежим от всех.<br>
И пусть целый мир подождёт нас, мы пропали до завтра.<br>
Только в твоих я руках будто бы таю, как снег.<br>
Ты для меня - моя крепость, моя вера и правда.<br>
<div class='refren'>Я за тебя свое сердце, я свою жизнь, свою душу.<br>
Только один мне так нужен, мой самый лучший.<br>
Снова в мурашках все плечи, просто целуй меня нежно.<br>
Держи меня крепче, всё безупречно!</div>
<br>
<span class='blue'>[Припев x2: Artik & Asti] Дк42444ж - XAXAX<br></span>
Глаза в глаза, ладонь в ладонь, <br>
И это навечно!<br>
Спасибо, что делаешь счастливей.<br>
Между нами космос и бесконечность.<br>
Мы - одно целое, мы неделимы.<br>
<br>
<span class='blue'>Дк5м - aa<br></span>
Мы неделимы с тобой, с тобой, с тобой!<br>
Мы неделимы с тобой, с тобой, с тобой!<br>
<br>
<span class='blue'>[Куплет 2: Artik]<br></span>
Что-то так тянет к тебе, будто бы сердце - магнит.<br>
Я губами касаюсь, и всё вокруг нас горит.<br>
Стираем все грани, тону в твоём океане.<br>
То, что сейчас между нами - ураган и цунами.<br>
<br>
<span class='blue'>[Переход: Artik & Asti] Дк31м - abcdabcd<br></span>
Мне так мало тебя сейчас.<br>
Подари мне ещё один вдох.<br>
Научи меня вновь летать<br>
Высоко!<br>
Будь со мной, как в последний раз -<br>
Чтобы снова по телу ток,<br>
Я хочу тебя ощущать <br>
Так легко.<br>
<br>
<span class='blue'>[Припев x2: Artik & Asti]<br></span>
Глаза в глаза, ладонь в ладонь, <br>
И это навечно!<br>
Спасибо, что делаешь счастливей.<br>
Между нами космос и бесконечность.<br>
Мы - одно целое, мы неделимы.<br>
<br>
Мы неделимы с тобой, с тобой, с тобой!<br>
Мы неделимы с тобой, с тобой, с тобой!<br>
Мы неделимы.<br>
Мы неделимы.<br>
Мы неделимы.<br>
<br>
Слова: Artik<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/artik_asti_nedelimi.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
