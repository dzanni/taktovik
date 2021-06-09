<?php
$title = 'Земфира - Остин (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ddnjNMv6-Ts'";
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

<span class='blue'>[Куплет 1] Дк2-4цж|ж - AAXXXA AABBBXA</span><br>
Здравствуй, Остин! <br>
Привет, Остин!<br>
Давно не виделись, столько пены.<br>
Всё ли в порядке?<br>
Как там Робби? Его тачки?<br>
Ты выглядишь плохо: кожа да кости!<br>
Что с тобой, Остин? <br>
А у нас осень.<br>
И как-то мне не кошерно.<br>
Веду себя скверно.<br>
Чувствую себя скверно.<br>
Всё время хочу напиться.<br>
Так что, Остин,<br>
<br>
<span class='blue'>[Припев]<br></span>
Заходи в гости!<br>
Заходи в гости!<br>
Заходи в гости!<br>
<br>
<span class='blue'>[Куплет 2] Дк23м|дм - AAB'CB'CX'A<br></span>
Здравствуй, Остин! <br>
Привет, Остин!<br>
Такие странные новости, <br>
Ты ли это?<br>
Откуда столько жестокости?<br>
Как же Кэтрин? <br>
Её чувства? Цветы и праздники?<br>
Поматросил и бросил?!<br>
<span class='blue'>Дк2-3ж|м/ж - AAXbbCCAA</span><br>
Что же ты, Остин? <br>
Как так, Остин?<br>
А я как инок -<br>
Очень верная, но<br>
Очень нервная и<br>
Всегда на грани.<br>
Всё время боюсь сорваться<br>
И лопнуть от злости.<br>
Спаси меня, Остин!<br>
Забери меня, Остин!<br>
<br>
<span class='blue'>[Рефрен] Л32жм? - AAAbAAAb<br></span>
Ты бесишь меня, Остин!<br>
Ты бесишь меня, Остин!<br>
Ты бесишь меня, Остин!<br>
Бесишь меня!<br>
Ты бесишь меня, Остин!<br>
Ты бесишь меня, Остин!<br>
Ты бесишь меня, Остин!<br>
Бесишь меня!<br>
<br>
<span class='blue'>[Припев]<br></span>
Заходи в гости!<br>
  <br>
  <span class='blue'><a href='https://genius.com/Zemfira-ostin-lyrics'
    target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
