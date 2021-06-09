<?php
$title = 'Глюк’oZа - Танцевач (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/8IyuPweCj3k'";
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

<span class='blue'>[Куплет 1] Тк3-6цм/ж? - aaBB<br></span>
Ночь, и полный клуб <br>
Набитых портмоне и пухлых губ, <br>
И все такие на пафосе, на модном стиле -<br>
И не танцуют, словно застыли.<br>
<br>
<span class='blue'>[Переход] Х3м/ - aa<br></span>
Но нашлось одно<br>
Сильное звено!<br>
 <br>
<span class='blue'>[Припев х2] Х3м/ж - aaBB<br></span>
Вышел на дискач <br>
Парень-танцевач! <br>
Просто захлебнуться - <br>
Руки, ноги гнутся! <br>
Вышел на дискач <br>
Парень-танцевач! <br>
Крутятся на палке  <br>
Девчонки-танцевалки! <br>
<div class='refren'>
Вышел на дискач <br>
Парень-танцевач! <br>
Просто захлебнуться - <br>
Руки, ноги гнутся! <br>
Вышел на дискач <br>
Парень-танцевач! <br>
Крутятся на палке  <br>
Девчонки-целовалки! </div>
<br>
<span class='blue'>[Куплет 2] <br></span>
Звук и сердца стук, <br>
А все стоят, как статуи золотые. <br>
Такие в образе – ну типа бомонд, типа крутые -<br>
Хлещут коктейли недорогие. <br>
 <br>
 <span class='blue'>[Переход]<br></span>
 Но нашлось одно<br>
 Сильное звено!<br>
  <br>
 <span class='blue'>[Припев х2] <br></span>
 Вышел на дискач <br>
 Парень-танцевач! <br>
 Просто захлебнуться - <br>
 Руки, ноги гнутся! <br>
 Вышел на дискач <br>
 Парень-танцевач! <br>
 Крутятся на палке  <br>
 Девчонки-танцевалки! <br>
 <div class='refren'>
 Вышел на дискач <br>
 Парень-танцевач! <br>
 Просто захлебнуться - <br>
 Руки, ноги гнутся! <br>
 Вышел на дискач <br>
 Парень-танцевач! <br>
 Крутятся на палке  <br>
 Девчонки-целовалки! </div>
 <br>
 <span class='blue'>[Переход]<br></span>
 Но нашлось одно<br>
 Сильное звено!<br>
  <br>
 <span class='blue'>[Припев х2] <br></span>
 Вышел на дискач <br>
 Парень-танцевач! <br>
 Просто захлебнуться - <br>
 Руки, ноги гнутся! <br>
 Вышел на дискач <br>
 Парень-танцевач! <br>
 Крутятся на палке  <br>
 Девчонки-танцевалки! <br>
 <div class='refren'>
 Вышел на дискач <br>
 Парень-танцевач! <br>
 Просто захлебнуться - <br>
 Руки, ноги гнутся! <br>
 Вышел на дискач <br>
 Парень-танцевач! <br>
 Крутятся на палке  <br>
 Девчонки-целовалки! </div>
 <br>
<span class='blue'><a href='https://www.gl5.ru/glukoza-tancevach.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
