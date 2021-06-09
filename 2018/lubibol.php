<?php
$title = 'Валерия - Любовь и боль (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/FUDq7vSR0Dg'";
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

<span class='blue'>[Куплет 1] Тк7цм? - abab<br></span>
Помнишь, однажды зал стал пустым, свет погас —<br>
Это ты в первый раз отнял у меня музыку души.<br>
А я, из тысяч лиц за столько лет и не нашла<br>
Никого, кто б реки горькие из слёз моих осушил.<br>
<br>
<span class='blue'>[Припев] Тк1-5м? - aX'aa<br></span>
Нельзя! <br>
Я звала любовью боль, а так нельзя!<br>
Вновь не станет зола пламенем.<br>
А я - отрекаюсь, отпускаю, Бог - судья, <br>
Я любила тебя.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Полон огромный зал. Ну, что же ты прячешь взгляд!<br>
Виновато время ли, что его никак не вернуть назад?<br>
Тысячам этих лиц всю боль свою я раздам -<br>
Если дороже душа моя, любовь моя их сердцам!<br>
<br>
<span class='blue'>[Припев]<br></span>
Нельзя! <br>
Я звала любовью боль, а так нельзя!<br>
Вновь не станет зола пламенем.<br>
А я - отрекаюсь, отпускаю, Бог - судья, <br>
Я любила тебя.<br>
<br>
Нельзя! <br>
Я звала любовью боль, а так нельзя!<br>
Нельзя! <br>
Я звала любовью боль, а так нельзя!<br>
Нельзя! <br>
Нельзя! <br>
Я звала любовью боль, а так нельзя!<br>
Я любила тебя.<br>
<br>
Музыка: Виктор Дробыш <br>
Слова: Ирина Дубцова<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/valeria-lubov-i-bol.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
