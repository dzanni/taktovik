<?php
$title = 'Enjoykin - Я просто устала (ft. Марьяна Ро, слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Nu-bgxG23Do'";
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

<span class='blue'>[Куплет 1] Тр2мж - aBacaBac<br></span>
В этом видео я <br>
Не буду кривляться,<br>
 В этом видео я <br>
 Просто буду собой. <br>
 Я старалась всегда <br>
 Улыбаться, смеяться. <br>
 Я плачу сейчас, <br>
 Что случилось со мной? <br>
 <br>
 <span class='blue'>[Припев] Ам23жм - AAbAAb<br></span>
 Я просто устала, <br>
 Я не понимаю,<br>
  Я просто хочу отпустить! <br>
  Я просто устала, <br>
  Я всё отпускаю, <br>
  Я больше не буду грустить! <br>
<br>
<span class='blue'>[Куплет 2] Тр3332ж - ABABB<br></span>
  Я хочу стать мудрее и просто <br>
  С душой ко всем относиться. <br>
  Я хочу стать счастливее просто <br>
  Хочу измениться, <br>
  Хочу измениться! <br>
  <br>
  <span class='blue'>[Припев]<br></span>
  Я просто устала, <br>
  Я не понимаю,<br>
   Я просто хочу отпустить! <br>
   Я просто устала, <br>
   Я всё отпускаю, <br>
   Я больше не буду грустить! <br>
     <br>
<span class='blue'>Источник: текст под клипом Youtube<br></span>
<br>
<br>
N.B. На основе видеообращения Марьяны Ро <a href='https://www.youtube.com/watch?v=yrjb8WpJpRA'
  target='_blank'>"Я просто устала"</a>, вывешенного на Youtube 6 янв. 2017.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
