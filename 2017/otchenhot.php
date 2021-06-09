<?php
$title = 'Диана Арбенина и Ночные снайперы - Оченьхотела (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/bdHehi02-Zk'";
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

<span class='blue'>[Куплет 1] Дк4ц2м? - abbacca</span><br>
Очень хотела прыгнуть с моста.<br>
Секунды тик-так. <br>
Отчаяние в такт. <br>
Стала ненужной, прости красота, <br>
Стала вчерашней, <br>
Простой и не важной.<br>
Не стоит считать до ста! <span class='blue'>(Строка Дк3м)</span><br>
<br>
<span class='blue'>[Припев] Дк4ц3м - aabbxb</span><br>
Без тебя нет ее, без тебя ее нет!<br>
Море - закат, суша - рассвет!<br>
Могла только так она, <br>
И верно - была права:<br>
Он говорил, он говорил,<br>
Ей говорил слова.<br>
<br>
<span class='blue'>[Куплет 3] Дк4цм - aaaaa</span><br>
Камешек в воду, от тела круги;<br>
Спины изумительно нежный прогиб,<br>
Вчера целовались, сегодня - погиб.<br>
И все при своих, и я рада за них;<br>
И все при своих, когда топят других!<br>
<br>
<span class='blue'>[Припев]</span><br>
Без тебя нет ее, без тебя ее нет!<br>
Море - закат, суша - рассвет!<br>
Могла только так она, <br>
И верно - была права:<br>
Он говорил, он говорил,<br>
Ей говорил слова.<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
Очень хотела - и мост проводил;<br>
И он по мостам никогда не ходил,<br>
Но знает, узнает, что ждет впереди,<br>
<div class='refren'>
Но выживут только влюбленные,<br>
Только влюбленные, только влюбленные,<br>
Только влюбленные, только влюбленные,<br>
Только влюбленные, только!</div>
<br>
<span class='blue'>[Припев]</span><br>
Без тебя нет ее, без тебя ее нет!<br>
Море - закат, суша - рассвет!<br>
Могла только так она, <br>
И верно - была права:<br>
Он говорил, он говорил...<br>
<br>
<span class='blue'>[Припев]</span><br>
Без тебя нет ее, без тебя ее нет!<br>
Море - закат, суша - рассвет!<br>
Могла только так она, <br>
И верно - была права:<br>
Он говорил, он говорил,<br>
Ей говорил слова.<br>
Он говорил, он говорил,<br>
Ей говорил слова.<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/nochnie-snaiperi-ochen-hotela.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
