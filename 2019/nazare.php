<?php
$title = 'Альянс - На заре (1987) (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/tUBVEKzsZ-k'";
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
<span class='blue'>[Куплет 1] Х4442м/мм - aabсaabс<br></span>
Ровный бег моей судьбы, <br>
Ночь, печаль и блеск души. <br>
Лунный свет и майский дождь <br>
В небесах.<br>
 <br>
Долгий век моей звезды, <br>
Сонный блеск земной росы, <br>
Громкий смех и райский мёд <br>
В небесах. <br>
 <br>
<span class='blue'>[Припев] Х24мм - abab<br></span>
На заре...<br>
Голоса зовут меня! <br>
На заре...<br>
Голоса зовут меня! <br>
 <br>
<span class='blue'>[Куплет 2] <br></span>
Солнца свет и сердца звук, <br>
Робкий взгляд и сила рук, <br>
Звёздный час моей мечты<br>
В небесах. <br>
 <br>
<span class='blue'>[Припев] <br></span>
На заре...<br>
Голоса зовут меня! <br>
На заре...<br>
Гголоса зовут меня!<br>
На заре...<br>
Голоса зовут меня! <br>
На заре...<br>
Небеса зовут меня! <br>
На заре... <br>
 <br>
<span class='blue'><a href='https://genius.com/Alyanc-na-zare-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
