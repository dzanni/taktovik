<?php
$title = 'Би-2 - Ля-ля тополя (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/7_c3mmvF02o'";
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
<span class='i'>- Когда мы вчетвером, нам хорошо. А когда мы в последний раз вот так, вот, куда-то вместе? Ну?<br>
- Старик, ну, это жизнь такая!<br>
- Да это не жизнь такая, это мы ее такой делаем!<br></span>
<br>
<span class='blue'>[Куплет 1] Тр32м - aaabba<br></span>
Сколько воды утекло,<br>
И теперь всё равно,<br>
Что кровь, что вино!<br>
Больше не буду жалеть.<br>
Попробуй, ответь,<br>
Кому повезло?<br>
<br>
<span class='blue'>[Припев] Ам23мж - aaBaaB<br></span>
Ля-ля тополя,<br>
Сбежим с корабля<br>
На бал в санитарной карете.<br>
Ля-ля тополя,<br>
Всем доброго дня,<br>
И пусть не кончается лето!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Слезы ползут по лицу,<br>
И твой поцелуй <br>
Горчит, словно хмель.<br>
Если Земля - это шар<br>
То больная душа <br>
Устоит ли на ней?<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Ля-ля тополя,<br>
Сбежим с корабля<br>
На бал в санитарной карете.<br>
Ля-ля тополя,<br>
Всем доброго дня,<br>
И пусть не кончается лето!<br>
<br>
<span class='i'>- Надо дать счастью шанс. Тогда оно, возможно, случится!<br></span>
<br>
<span class='blue'><a href='https://genius.com/2-bi-2-la-la-topolya-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
