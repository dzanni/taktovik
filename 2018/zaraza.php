<?php
$title = 'Elvira T - Зараза (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/N6mR1PT9CCQ'";
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

<span class='blue'>[Куплет 1] Дк3ж - ABAB<br></span>
Я и днём вижу сны – честно!<br>
Но тебя никогда в них нету.<br>
И тебе, вероятно, тесно<br>
Быть в чужой голове и куплетах.<br>
<div class='refren'>
Столица мне всё рассказала<br>
Про тебя и твои приключенья.<br>
Ты другим показался сначала -<br>
Отчаянным, неподдельным.</div>

Ты смотрел на меня и не верил,<br>
Что так сильно тебя полюбили.<br>
Если мы попадем на телек,<br>
Мы испортим хорошие фильмы.<br>
<div class='refren'>
Я тебе много не рассказала.<br>
Да и в этом уже нету толку.<br>
Пусть тебя привозят вокзалы,<br>
Только не на мою остановку.</div>
<br>
<span class='blue'>[Припев х2] Тк4цж - AAAA<br></span>
А ты же говорила, мама, сразу,<br>
Что это не любовь, это – зараза.<br>
Мама, пойми, отключился разум!<br>
Будто с тобой так не было ни разу?!<br>
<br>
<span class='blue'>[Куплет 2] Тк2-6цж - ABAB<br></span>
Ты отдал мне без страховки<br>
Своё сердце нараспашку.<br>
Столичный мэр сносит хрущёвки,<br>
В которых нам сносило башню.<br>
<div class='refren'>
Каждый день примерно тыща<br>
Твоих одержимых сообщений.<br>
Иногда ты меня вообще не слышишь,<br>
Будто мы с тобой в разных измереньях.</div>

<span class='blue'>Тк35цм - abab<br></span>
Даже если зима за окном,<br>
Мне на градусы будет плевать!<br>
Я в одном платье без пальто<br>
Выбегу, чтобы напоследок тебя обнять.<br>
<div class='refren'>
  <span class='blue'>Тк3-5цдм - A'bA'b<br></span>
Ты влюбился без памяти, по уши,<br>
И наверно, так будет всегда.<br>
Помнишь первую встречу... Прошло лет сто уже;<br>
Если б можно было, я бы тогда не пришла!</div>
<br>
<span class='blue'>[Припев х2]<br></span>
А ты же говорила, мама, сразу,<br>
Что это не любовь, это – зараза.<br>
Мама, пойми, отключился разум -<br>
Будто с тобой так не было ни разу?!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/elvira-t-zaraza.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
