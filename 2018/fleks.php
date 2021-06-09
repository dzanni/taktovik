<?php
$title = 'Слава КПСС - Пацанский флекс (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/r4yu0TLGia4'";
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
<span class='blue'>[Интро]<br></span>
И мне похуй!<br>
И мне...<br>
И мне похуй!<br>
<br>
<span class='blue'>[Куплет 1, x2] Ак2цжм - AbAbAbbb<br></span>
И мне похуй, что это было <br>
На сотне старых дискотек.<br>
Твои родители качались <br>
Под такой же трек.<br>
И мне похуй, что это было,<br>
Да твой заёбанный отец<br>
Выдавал под хаусец <br>
 Пацанский флекс.<br>
<br>
<span class='blue'>[Припев] Я2м - aaaa<br></span>
Пацанский флекс!<br>
Пацанский флекс!<br>
Пацанский флекс!<br>
Пацанский флекс!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Похуй, что это было <br>
На дискотеках 90-х!<br>
В мясо пьяная кобыла (сучка) <br>
Почувствовала себя взрослой.<br>
Да, это было,<br>
Но всё равно, как первый секс.<br>
Рэпчик под хаусец,<br>
Пацанский флекс.<br>
<br>
<span class='blue'>[Припев]<br></span>
Пацанский флекс!<br>
Пацанский флекс!<br>
Пацанский флекс!<br>
Пацанский флекс!<br>
<br>
<span class='blue'>[Бридж] Тк5цм - a<br></span>
Буду погибать молодым, буду погибать!<br>
Буду погибать молодым, буду погибать!<br>
Буду погибать молодым, буду погибать!<br>
Буду погибать молодым (буду погибать)<br>
Буду погибать молодым, буду погибать!<br>
Буду погибать молодым, буду погибать!<br>
Буду погибать молодым, буду погибать!<br>
Буду погибать молодым (буду погибать)<br>
<br>
<span class='blue'>[Куплет 3, х2] AXAAbAb<br></span>
И мне похуй, что это было,<br>
И мне похуй, что это будет!<br>
Денег нет на мобиле, <br>
Один билет до могилы.<br>
И мне похуй, что это было, <br>
Я не знаю, зачем я здесь.<br>
Мясо с трёх, как мудила, <br>
И пацанский флекс.<br>
<br>
<span class='blue'>[Припев]<br></span>
Пацанский флекс!<br>
Пацанский флекс!<br>
Пацанский флекс!<br>
Пацанский флекс!<br>

<br>
<span class='blue'><a href='https://genius.com/Slava-kpss-male-flex-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
