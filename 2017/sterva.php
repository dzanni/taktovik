<?php
$title = 'LOBODA - Стерва (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/1GMolGQRObQ'";
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

<span class='blue'>[Куплет 1] Л4цжм? - AbAb<br></span>
Я помню, начиналось всё, как в сказке:<br>
Цветы и ласки, нелепые слова.<br>
Ты улыбался так прекрасно,<br>
И так опасно кружилась голова.<br>
<br>
<span class='blue'>[Переход] Дк4цж - AA<br></span>
Быть не хочу в твоей нирване!<br>
Всё это было, как в тумане!<br>
Меня накрыло с головою,<br>
И это ты называешь любовью?<br>
<br>
<span class='blue'>[Припев] Л32дж - A'BA'B<br></span>
Стерва, ну что ты наделала,<br>
В любовь играя?<br>
Сердце стучится так преданно - <br>
Не отпускает.<br>
<div class='refren'>
Стерва, ну что ты наделала? <br>
Дошла до края!<br>
Сердце разбито и предано, <br>
Да кто ты такая?</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Давай без лишних слов и оправданий,<br>
Всё так оставим, свернём на полпути.<br>
Я не хочу нелепых обещаний,<br>
Я ухожу, а ты меня прости.<br>
<br>
<span class='blue'>[Переход]<br></span>
Быть не хочу в твоей нирване!<br>
Всё это было, как в тумане!<br>
Меня накрыло с головою,<br>
Ты забери его, детка, с собою!<br>
<br>
<span class='blue'>[Припев]<br></span>
Стерва, ну что ты наделала,<br>
В любовь играя?<br>
Сердце стучится так преданно - <br>
Не отпускает.<br>
<div class='refren'>
Стерва, ну что ты наделала? <br>
Дошла до края!<br>
Сердце разбито и предано, <br>
Да кто ты такая?</div>
<br>
<span class='blue'>[Куплет 3] Я3мж - aBaB<br></span>
Так больно и смешно,<br>
В меня попало снова!<br>
Прощай, моя любовь...<br>
Не говори ни слова!<br>
<div class='refren'>А я лечу на свет <br>
По замкнутому кругу,<br>
Передавай привет <br>
Новому другу! <span class='blue'>(Строка Д2ж)<br></span>
<br>
<span class='blue'>[Припев]<br></span>
Стерва, ну что ты наделала,<br>
В любовь играя?<br>
Сердце стучится так преданно - <br>
Не отпускает.<br>
<div class='refren'>
Стерва, ну что ты наделала? <br>
Дошла до края!<br>
Сердце разбито и предано, <br>
Да кто ты такая?</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/loboda_sterva.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
