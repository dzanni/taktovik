<?php
$title = 'Слава - Однажды ты (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/-mAAmC0DsJQ'";
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

<span class='blue'>[Куплет 1] Л4ц3ж - AABCCB<br></span>
Ты не думай обо мне, не зови, я все та же.<br>
И живу я, как все, лучше даже.<br>
Я про нас так легко забываю.<br>
Ты не думай обо мне, не зови, я устала.<br>
За тебя столько раз умирала,<br>
Но сейчас я, как прежде, живая.<br>
<br>
<span class='blue'>[Припев] Я6цмж - aBaB<br></span>
Однажды ты уже не сможешь без меня,<br>
И остановится Земля, просто запомни!<br>
Однажды ты уже не сможешь без меня -<br>
Согрела я тебя в других тёплых ладонях.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
«Я забуду о тебе», - мои птицы кричали.<br>
Только ты, пожимая плечами, -<br>
Не стрелял, а ведь мог одиночным.<br>
Я забуду о тебе, и, что было, неважно!<br>
Новый день не похож на вчерашний.<br>
Потерял, но одно знаю точно.<br>
<br>
<span class='blue'>[Припев]<br></span>
Однажды ты уже не сможешь без меня,<br>
И остановится Земля, просто запомни!<br>
Однажды ты уже не сможешь без меня -<br>
Согрела я тебя в других тёплых ладонях.<br>
<br>
<span class='blue'>[Инструментал]<br></span>
<br>
<span class='blue'>[Припев]<br></span>
Однажды ты уже не сможешь без меня,<br>
И остановится Земля, просто запомни!<br>
Однажды ты уже не сможешь без меня -<br>
Согрела я тебя в других тёплых ладонях.<br>
<br>
Музыка: Игорь Азаров<br>
Слова: Кира Дымов<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/slava-odnazhdi-ti.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Куплет - Ан с одним 3-слоговым минетрвалом.
В припеве на фонограмме цезура не в середине строки, как можно ожидать по печатному тексту, а свободная.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
