<?php
$title = 'Burito - По волнам (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/jqyJ4xW2gb0'";
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

<span class='blue'>[Куплет 1] Дк4ц4жм - XaXa<br></span>
Софиты и глянец, я иностранец<br>
Для своей собственной души.<br>
Люди несутся, но остаются<br>
Посреди города и лжи.<br>
<br>
<span class='blue'>[Подводка] Л2-4м - axax<br></span>
Иди со мной, <br>
Нам надо быть очень далеко.<br>
Я сам не свой, <br>
Иди со мной, иди...<br>
<br>
<span class='blue'>[Припев] Л23м - aaabaaab<br></span>
По волнам, <br>
По волна-волнам.<br>
К твоим рукам <br>
Так долго по волнам иду я.<br>
По волнам, <br>
По волна-волнам.<br>
Знаю сам, <br>
Что просто не смогу без тебя.<br>
<br>
<span class='blue'>[Куплет 2] Дк4ц4м - xaxa<br></span>
Вокруг никого, не видны маяки.<br>
Мы расставили сети для себя.<br>
Не знаешь ли ты, сколько мы все.<br>
Слепо прожили не любя.<br>
<br>
<span class='blue'>[Подводка]<br></span>
Пой со мной,<br>
Нам надо быть громче всех сейчас.<br>
Плачь и пой, <br>
Иди со мной, иди...<br>
<br>
<span class='blue'>[Припев]<br></span>
По волнам, <br>
По волна-волнам.<br>
К твоим рукам <br>
Так долго по волнам иду я.<br>
По волнам, <br>
По волна-волнам.<br>
Знаю сам, <br>
Что просто не смогу без тебя.<br>
<br>
<span class='blue'>[Куплет 3] Дк2-4ц - aa, A'A'<br></span>
Холодными каплями, солью на раны.<br>
Мы с тобой океаны, мы с тобой океаны.<br>
Голоса одной драмы и сердца друг у друга<br>
Украли мы, пропали мы.<br>
Так долго искали и ждали мы.<br>
Теперь вдвоем до самого края мы.<br>
Готовы ли мы, сможем ли мы?<br>
Понять, что любовь и вечность - синонимы.<br>
<br>
<span class='blue'>[Припев]<br></span>
По волнам, <br>
По волна-волнам.<br>
К твоим рукам <br>
Так долго по волнам иду я.<br>
По волнам, <br>
По волна-волнам.<br>
Знаю сам, <br>
Что просто не смогу без тебя.<br>
<br>
Музыка: И. Бурнышев, А. Лысков, О. Устинова<br>
Слова: И. Бурнышев<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/b/burito/6494-burito-po-volnam-text-pesni.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
