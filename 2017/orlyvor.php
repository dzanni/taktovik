<?php
$title = 'Максим Фадеев & Григорий Лепс - Орлы или вороны (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/KG-7yu2GNko'";
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
<span class='blue'>[Куплет 1] Дк43жм - ABCdABCd<br></span>
Скажи мне, что я не знаю,<br>
Покой пролей в мою душу,<br>
Ведь счастье не за горами - <br>
Оно там, где хотят.<br>
Зачем же мы потерялись <br>
Cреди историй ненужных?<br>
Надежды не оправдались, <br>
Никто не виноват.<br>
<br>
<span class='blue'>[Припев х2] Тр2мд - aB'aB'<br></span>
По дороге одной, <br>
Но в разные стороны.<br>
Кто мы с тобой,<br>
Орлы или вороны?<br>
<br>
<span class='blue'>[Куплет 2]:<br></span>
Скажи мне, кто не ошибся, <br>
Не сбился в жизни ни разу?<br>
Кто первый остановился,<br>
Когда его несёт?<br>
Ломали нетерпеливо, <br>
В упор не слушая разум.<br>
Хотели, чтобы красиво,<br>
Но всё наоборот.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
По дороге одной, <br>
Но в разные стороны.<br>
Кто мы с тобой,<br>
Орлы или вороны?<br>
<br>
<span class='blue'>[Инструментал]<br></span>
<br>
<span class='blue'>[Припев х4]<br></span>
По дороге одной, <br>
Но в разные стороны.<br>
Кто мы с тобой,<br>
Орлы или вороны?<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/maxim-fadeev-grigrij-leps-orli-ili-voroni.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
