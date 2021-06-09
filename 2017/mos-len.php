<?php
$title = 'Enjoykin — Москва - Ленинград (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/eylyro917zM'";
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

<span class='blue'>[Куплет 2] Дк5554цм/м - aa<br></span>
Я хочу встречать Новый год с тобой! - Давай!<br>
Я же буду мелькать перед глазами! - Мелькай!<br>
Я хочу, хочу Новый год с тобой встречать!<br>
Я тебе скажу всё, что я должен сказать!<br>
<br>
<span class='blue'>[Припев] Л3323м/м - aa<br></span>
Новый год! - Москва! - Ленинград!<br>
Новый год! Из крабов салат.<br>
Ходим в баню каждый год!<br>
Ленинград! - Москва! - Новый год!<br>
<br>
<span class='blue'>[Куплет 2] Дк4344цм/ - aaaa<br></span>
Я хочу встречать Новый год с тобой! <br>
Правда? - Глупый какой!<br>
Я хочу встречать Новый год с тобой! <br>
Только с тобой! Только с тобой!<br>
<br>
<span class='blue'>[Припев]<br></span>
Новый год! - Москва! - Ленинград!<br>
Новый год! Из крабов салат.<br>
Ходим в баню каждый год!<br>
Ленинград! - Москва! - Новый год!<br>
<br>
<span class='blue'>Источник: расшифровка фонограмым клипа<br></span>
<br>
<br>
N.B. На основе звуковой дорожки фильма "Ирония судьбы, или С легким паром" (1975).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
