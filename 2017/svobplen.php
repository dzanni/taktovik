<?php
$title = 'Валерий Меладзе - Свобода или сладкий плен (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/f6ftoOw77d0'";
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

<br>
<span class='blue'>[Куплет 1] Л6цжм - AbAb<br></span>
Вот и пролетело крохотное лето.<br>
Грустно улыбнувшись и накрыв волной.<br>
Словно лист осенний, унесенный ветром,<br>
Я спешу исправить ошибки, сделанные не мной.<br>
<br>
<span class='blue'>[Припев] Тк3332ж, Я4м - ABAB, abab<br></span>
  Но мне не хочется ходить по краю,<br>
Равнодушие читать на лицах.<br>
Я как будто бы опять листаю <br>
Пустые страницы.<br>
<div class='refren'>Я просто ждал тебя всю жизнь,<br>
Когда, казалось, смысла нет.<br>
Когда на каждый крик души, <br>
Молчанье слышал я в ответ.<br>
Я просто ждал тебя всю жизнь <br>
И ничего не ждал взамен.<br>
Что для тебя любовь, скажи, <br>
Свобода или сладкий плен?<br>
Свобода или сладкий плен?</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Все остановилось в равновесье зыбком<br>
На одно мгновенье и помчалось вновь.<br>
И никто не видит слезы сквозь улыбку,<br>
И никто не знает всей правды, кроме тебя одной.<br>
<br>
<span class='blue'>[Припев]<br></span>
Но мне не хочется ходить по краю,<br>
Равнодушие читать на лицах.<br>
Я как будто бы опять листаю <br>
Пустые страницы.<br>
<div class='refren'>Я просто ждал тебя всю жизнь,<br>
Когда, казалось, смысла нет.<br>
Когда на каждый крик души, <br>
Молчанье слышал я в ответ.<br>
Я просто ждал тебя всю жизнь <br>
И ничего не ждал взамен.<br>
Что для тебя любовь, скажи, <br>
Свобода или сладкий плен?<br>
Свобода или сладкий плен?<br>
<br>
Я просто ждал тебя всю жизнь,<br>
Когда, казалось, смысла нет.<br>
Когда на каждый крик души, <br>
Молчанье слышал я в ответ.<br>
Я просто ждал тебя всю жизнь <br>
И ничего не ждал взамен.<br>
Что для тебя любовь, скажи, <br>
Свобода или сладкий плен?<br>
Свобода или сладкий плен?<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/v1/valerii-meladze/8483-valerij-meladze-svoboda-ili-sladkij-plen-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Припев - логаэд на основе Х6цжм. Тактовик в припеве, в принципе, тоже можно считать за логаэд.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
