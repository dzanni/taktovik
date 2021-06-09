<?php
$title = 'ALEKSEEV - Чувствую душой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/r6c3C-2NDgk'";
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

<span class='blue'>[Припев] Тк3дм - A'B'B'cA'B'B'c<br></span>
А мы летим вместе с птицами,<br>
Чтобы в эту жизнь посмотреть с конца.<br>
Всё пройдёт, но свет твоего лица<br>
Навсегда со мной.<br>
И над холодными крышами<br>
Падаем, как будто с небес вода.<br>
Ты ведь не поверишь, но я всегда<br>
Чувствую тебя душой.<br>
<br>
<span class='blue'>[Куплет 1] Л43жм? - AAbA'b<br></span>
В никуда промокшие будни<br>
В никуда продрогшие люди<br>
Вдаль несут свой крест.<br>
Я уже не помню начала,<br>
Только в этом зале для нас с тобой<br>
Давно нет мест.<br>
<br>
<span class='blue'>[Припев]<br></span>
А мы летим вместе с птицами,<br>
Чтобы в эту жизнь посмотреть с конца.<br>
Всё пройдёт, но свет твоего лица<br>
Навсегда со мной.<br>
И над холодными крышами<br>
Падаем, как будто с небес вода.<br>
Ты ведь не поверишь, но я всегда<br>
Чувствую тебя душой.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
В никуда все птицы и песни.<br>
В города, где мы были вместе<br>
Не найти пути.<br>
Твой я или нет, я не знаю,<br>
Но когда-нибудь ты меня за всё,<br>
За всё простишь.<br>
<br>
<span class='blue'>[Припев]<br></span>
И мы летим вместе с птицами,<br>
Чтобы в эту жизнь посмотреть с конца.<br>
Всё пройдёт, но свет твоего лица<br>
Навсегда со мной.<br>
И над холодными крышами<br>
Падаем, как будто с небес вода.<br>
Ты ведь не поверишь, но я всегда<br>
Чувствую тебя душой.<br>
<br>
Музыка: Р. Квинта<br>
Слова: В. Куровский<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/a/alekseev/5354-alekseev-chuvstvuyu-dushoy-feel-soul-text-pesni.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
