<?php
$title = 'IC3PEAK - Смерти больше нет (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/MBG3Gdt5OGs'";
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

<span class='blue'>[Припев х2] Дк4цжм - AbAb<br></span>
Я заливаю глаза керосином.<br>
Пусть всё горит, пусть всё горит!<br>
На меня смотрит вся Россия.<br>
Пусть всё горит, пусть всё горит!<br>
<br>
<span class='blue'>[Куплет] Тк4цм/ж - aa, AA<br></span>
Я теперь готова ко всему на свете,<br>
Я отсидела свой срок в интернете.<br>
Выхожу на улицу гладить кота,<br>
А его переезжает тачка мента.<br>
<div class='refren'>Я иду по городу в чёрном худи.<br>
Тут обычно холодно, злые люди.<br>
Впереди меня ничего не ждёт,<br>
Но я жду тебя, ты меня найдёшь!</div>
<br>
<span class='blue'>[Бридж] Тк4цд/? - A'A'<br></span>
В золотых цепях я утопаю в болоте.<br>
Кровь моя чище чистых наркотиков.<br>
Вместе с другими тебя скрутят на площади,<br>
А я скручу в своей новой жилплощади.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Я заливаю глаза керосином.<br>
Пусть всё горит, пусть всё горит!<br>
На меня смотрит вся Россия.<br>
Пусть всё горит, пусть всё горит!<br>
<br>
<span class='blue'>[Куплет]<br></span>
Я теперь готова ко всему на свете,<br>
Я отсидела свой срок в интернете.<br>
Выхожу на улицу гладить кота,<br>
А его переезжает тачка мента.<br>
<div class='refren'>Я иду по городу в чёрном худи.<br>
Тут обычно холодно, злые люди.<br>
Впереди меня ничего не ждёт,<br>
Но я жду тебя, ты меня найдёшь!</div>
<br>
<span class='blue'>[Бридж х2]<br></span>
В золотых цепях я утопаю в болоте.<br>
Кровь моя чище чистых наркотиков.<br>
Вместе с другими тебя скрутят на площади,<br>
А я скручу в своей новой жилплощади.<br>
<br>
<span class='blue'>[Аутро х4] Х3м/ - x<br></span>
Смерти больше нет!<br>
<br>
<span class='blue'><a href='https://genius.com/Ic3peak-death-no-more-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма ж=д: "болОте" - "наркОтиков".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
