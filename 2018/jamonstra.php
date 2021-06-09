<?php
$title = 'ВИА Гра - Я полюбила монстра (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/8fVwK7yx0Xo'";
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

<span class='blue'>[Куплет 1] Л3-4цмж - xaXXa</span><br>
Ты мог чуть ласковей быть со мной,<br>
Но так безжалостно был красив,<br>
Когда выплескивал правду<br>
В лицо водой ледяною.<br>
Теперь все будет, как ты просил.<br>
<div class='refren'>И словно двигаясь сквозь туман,<br>
Земли не чувствуя под собой,<br>
Я подошла к тебе близко,<br>
В глаза твои посмотрела<br>
И не увидела в них любовь.</div>
<br>
<span class='blue'>[Припев] Л2-5цм/? - aaaxbbbX</span><br>
А я могла бы жить для тебя!<br>
Просто жить для тебя!<br>
Могла бы умереть за тебя<br>
И воскреснуть опять.<br>
Скажи мне, почему?<br>
Сама я не пойму,<br>
Какая сила тянет меня к нему.<br>
Сестра, я полюбила монстра!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
И, как от света закрыв глаза.<br>
Мы оттолкнулись, что было сил,<br>
И отошли друг от друга,<br>
Не обернувшись ни разу.<br>
Теперь все будет, как ты просил.<br>
<br>
<span class='blue'>[Припев]</span><br>
А я могла бы жить для тебя!<br>
Просто жить для тебя!<br>
Могла бы умереть за тебя<br>
И воскреснуть опять.<br>
Скажи мне, почему?<br>
Сама я не пойму,<br>
Какая сила тянет меня к нему.<br>
Сестра, я полюбила монстра!<br>
<div class='refren'>
Я полюбила монстра.<br>
Сестра, я полюбила монстра.<br>
Я полюбила монстра.</div>
<br>
<span class='blue'>[Припев]</span><br>
А я могла бы жить для тебя!<br>
Просто жить для тебя!<br>
Могла бы умереть за тебя<br>
И воскреснуть опять.<br>
Скажи мне, почему?<br>
Сама я не пойму,<br>
Какая сила тянет меня к нему.<br>
Сестра, я полюбила монстра!<br>
<br>
Слова и музыка: Константин Меладзе<br>
<br>
<span class='blue'><a href='https://on-hit.ru/texts/tekst-pesni-via-gra-ja-poljubila-monstra/'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
