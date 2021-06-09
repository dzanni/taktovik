<?php
$title = 'T-Fest - Окно (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/2g3i93vg62g'";
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

<span class='blue'>[Переход] Х7м - aaaa<br></span>
Я готов был выпрыгнуть сквозь заднее окно,<br>
Чтоб не слышать все те разговоры про любовь.<br>
Я готов был пулями прямо себе в висок,<br>
Чтоб не слушать то, о чём ты мне сейчас несешь.<br>
<br>
 <span class='blue'>[Припев] Л23м - abab<br></span>
Разговоры про любовь!<br>
А-а-а, а-а-а, а-а-а! (А-а-а)<br>
Разговоры про любовь!<br>
А-а-а, а-а-а, а-а-а! (А-а-а)<br>
<br>
<span class='blue'>[Куплет 1] Дк2-4цж/д - AA, A'A'<br></span>
Это нам больно, как панихида,<br>
Но я победитель своего ритма.<br>
Жизнь снова без позитива,<br>
Ведь твой рот забирает улыбаться Ризу.<br>
На кОстях шестерки (У)<br>
На картах лишь джокеры (У)<br>
Суки на шее, как чокеры.<br>
Суки хотят, чтоб их звали девчонками!<br>
<div class='refren'>
  <span class='blue'>Л3м - abab<br></span>
И не спрашивай, о чём болит душа!<br>
Просто выкачивай с меня моё лавэ (Выкачивай прям всё)<br>
Я беру все твои чувства напрокат,<br>
Но не лечи меня за то, чего тут нет!</div>
<br>
<span class='blue'>[Припев]<br></span>
Разговоры про любовь!<br>
А-а-а, а-а-а, а-а-а! (А-а-а)<br>
Разговоры про любовь!<br>
А-а-а, а-а-а, а-а-а! (А-а-а)<br>
<br>
А-а-а, а-а-а!<br>
А-а-а, а-а-а!<br>
<br>
<span class='blue'>[Куплет 2] Тк2м - abab, xaxa<br></span>
Сколько нужно нам,<br>
Чтоб выделить себя?<br>
И типа чистоган,<br>
Бан или пьедестал?<br>
Сколько нужно мне,<br>
Чтобы выкинуть тебя <br>
С разговора о любви?<br>
То, что ты хочешь сказать?<br>
<br>
<span class='blue'>[Переход]<br></span>
Я готов был выпрыгнуть сквозь заднее окно,<br>
Чтоб не слышать все те разговоры про любовь.<br>
Я готов был пулями прямо себе в висок,<br>
Чтоб не слушать то, о чём ты мне сейчас несешь.<br>
<br>
<span class='blue'>[Припев]<br></span>
Разговоры про любовь!<br>
А-а-а, а-а-а, а-а-а! (А-а-а)<br>
Разговоры про любовь!<br>
А-а-а, а-а-а, а-а-а! (А-а-а)<br>
<br>
<span class='blue'>[Переход]<br></span>
Я готов был выпрыгнуть сквозь заднее окно,<br>
Чтоб не слышать все те разговоры про любовь.<br>
Я готов был пулями прямо себе в висок,<br>
Чтоб не слушать то, о чём ты мне сейчас несешь.<br>
<br>
<span class='blue'>[Припев]<br></span>
Разговоры про любовь!<br>
<br>
<span class='blue'><a href='https://genius.com/T-fest-window-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
