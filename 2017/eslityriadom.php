<?php
$title = 'EMIN & A´STUDIO - Если ты рядом (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xw-iZhko4Mc'";
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

<span class='blue'>[Куплет 1: A’Studio & Emin] Тк4дм - A'bA'b<br></span>
Как-нибудь понемногу мы с тобой<br>
Договоримся обо всём.<br>
Как-нибудь незаметно мы с тобой<br>
Эти холода переживём.<br>
Ведь мы вдвоём.<br>
<br>
<span class='blue'>[Переход] Тк4цм/д - aA'</span><br>
По крышам неслышно к нам спустилась зима,<br>
И так тихо-тихо на улицах города.<br>
<br>
<span class='blue'>[Припев] Л4цмж - aBaB<br></span>
Я люблю эту жизнь. Всё плохое не в счёт, -<br>
Если ты рядом, если ты близко.<br>
Я с тобой, ну а снег всё идёт и идёт, -<br>
Он заметает наши ошибки.<br>
<br>
<span class='blue'>[Куплет 2, A’Studio & Emin]<br></span>
Кажется, между нами километры льда,<br>
И мы сейчас на разных полюсах.<br>
Как-нибудь мы и с этим справимся,<br>
Мне нужен этот свет в твоих глазах.<br>
<br>
<span class='blue'>[Переход]</span><br>
По крышам не слышно к нам спустилась зима,<br>
И так тихо-тихо на улицах города.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я люблю эту жизнь. Всё плохое не в счёт,<br>
Если ты рядом, если ты близко.<br>
Я с тобой, ну а снег всё идёт и идёт, <br>
Он заметает наши ошибки.<br>
Он укрывает нашу любовь!<br>
<br>
<span class='blue'>[Инструментал]<br></span>
<br>
<span class='blue'>[Переход]<br></span>
По крышам неслышно к нам спустилась зима,<br>
И так тихо-тихо на улицах города.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я люблю эту жизнь. Всё плохое не в счёт,<br>
Если ты рядом, если ты близко.<br>
Я с тобой, ну а снег всё идёт и идёт, <br>
Он заметает наши ошибки.<br>
Он укрывает нашу любовь!<br>
<br>
Музыка и слова: Наталья Павлова<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/e/emin/emin-a-studio-esli-ti-ryadom.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
