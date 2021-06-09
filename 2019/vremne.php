<?php
$title = 'Егор Крид - Время не пришло (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/TUsGX0Fv6xg'";
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

<span class='blue'>[Припев х2] Х4ж/? - AA<br></span>
Детка, я влюблен! <span class='blue'>(Строка Х3ж)<br></span>
Не беру твой телефон!<br>
Ты же знаешь, я с другой!<br>
Забывай меня, и всё!<br>
Наше время не пришло. <br>
Наше время не пришло.<br>
<br>
<span class='blue'>[Куплет 1] Тр2мж - aBaB<br></span>
Так просто сказать,<br>
Когда ты не рядом,<br>
Так просто молчать,<br>
Когда все ясно по взгляду.<br>
Не просто прощать,<br>
Когда рушишь клятву,<br>
Мы хотим доверять,<br>
Но так сложно понять,<br>
Где ложь, а где правда! (Йо!)<br>
<div class='refren'>
  <span class='blue'>[Куплет 1] Тк4-7цм/ж - aa, AA<br></span>
  Какие панчлайны? В отношениях и так все не просто!<br>
Мы всегда на пути, туда, где нам страшно и где очень остро.<br>
Наш маленький остров - наша постель,<br>
Но снова другая кровать и снова не ты, снова дурацкий отель!</div>
<br>
<span class='blue'>[Переход] Тк4ц2м/? - Xaa <br></span>
Ты прости, отпусти и будь с ним счастливой,<br>
Но только тихий мой дом запомнил любовь<br>
И твой запах духов.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Детка, я влюблен!<br>
Не беру твой телефон!<br>
Ты же знаешь, я с другой!<br>
Забывай меня, и всё!<br>
Наше время не пришло. <br>
Наше время не пришло.<br>
<br>
<span class='blue'>[Куплет 2] Ан2-4мж? - xAAAAAxA<br></span>
Давай! <br>
Подчинять и сдаваться (да)<br>
Разъярять, обижаться (да)<br>
Отпускать, чтоб цепляться (да)<br>
Разрешать и ошибаться, <br>
Позволять ревновать, но не соревноваться.<br>
(Ес)ли собрать все по миру слова о любви,<br>
То рассказ о тебе будет вкратце.<br>
<div class='refren'>
<span class='blue'>Тк4цм/ж - aa, AA<br></span>
  Мы как Канье и Ким (нет), больше как Джоли и Питт!<br>
Ты меня видишь с другой, я тебя вижу с другим.<br>
Соври и скажи, что не ёкнет внутри.<br>
Мы не Барби и Кен, <span class='blue'>(Строка Тк2м)<br></span>
Хотя, лучше б за нас все решили, как в «Симсе».<br>
Хочешь вернуться в тот день, ощутить всё?<br>
Просто усни - мы там очутимся!</div>
<br>
<span class='blue'>[Переход]<br></span>
Ты прости, отпусти и будь с ним счастливой,<br>
Но только тихий мой дом запомнил любовь<br>
И твой запах духов.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Детка, я влюблен!<br>
Не беру твой телефон!<br>
Ты же знаешь, я с другой!<br>
Забывай меня, и всё!<br>
Наше время не пришло. <br>
Наше время не пришло.<br>
(Время не пришло).<br>
<br>
<span class='blue'>[Финал] Дк2-6цм/ж? - xx, XX<br></span>
Просто ответь мне, что для тебя значит любить?<br>
Что для тебя значит любовь?<br>
Ведь кто-то сказал мне, что ее не бывает.<br>
Ну, мы же им не верим!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kreed/egor-kreed-vremya-ne-prishlo.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
