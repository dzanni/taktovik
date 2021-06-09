<?php
$title = 'Ольга Бузова - Давай останемся дома (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ephvjV7mhi8'";
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

<span class='i'>
- Давай останемся дома?<br>
- Давай останемся дома!<br></span>
<br>
<span class='blue'>[Куплет 1] Тк2-4цм/ - aaaa</span><br>
Посмотри, что со мной!<br>
Этот мир сам не свой.<br>
Погналась за мечтой - <br>
Я тебя нашла, не вводя пароль!<br>
  <div class='refren'><span class='blue'>Тр2жм - AbAb</span><br>
  Ближе, всё ближе,<br>
  Опыта ноль,<br>
  Два сердца бесстыжих,<br>
  В крови алкоголь!</div>
<span class='blue'>Тк4цж/ - AA</span><br>
Зачем же нам улицы, взгляды прохожих?<br>
Как будто в зеркало смотрю, и мы так похожи!<br>
<br>
<span class='blue'>[Припев] Тр2жж? - ABAB</span><br>
Давай останемся дома,<br>
Закроем все двери!<br>
Под светом неона<br>
В нашей атмосфере!<br>
  <div class='refren'><span class='blue'>Тк4цм/ - AA</span><br>
  И нам некуда бежать, некуда спешить,<br>
  Я просто хочу одним тобою жить!</div>
Давай останемся дома,<br>
Закроем все двери!<br>
Под светом неона<br>
В нашей атмосфере!<br>
  <div class='refren'>И нам некуда бежать, некуда спешить,<br>
  Я просто хочу одним тобою жить!<br>
  Одним тобою жить!</div>
<br>
<span class='blue'>[Куплет 2] Тк2-4цд/м - A'A'bb</span><br>
Видишь, как душно в городе!<br>
Стая птиц - висят на проводе<br>
Одинокие сердца<br>
В поисках любви, ищут без конца.<br>
  <div class='refren'><span class='blue'>Тр2дд - A'B'A'B'</span><br>
  Как дороги-дороги<br>
  Наши мгновения!<br>
  Пусть в маленькой комнате<br>
  Тонут сомнения.</div>
<span class='blue'>Тк4цм/ - aa</span><br>
Я выключу музыку и по губам<br>
Прочитаю все эти слова.<br>
<br>
<span class='blue'>[Припев]</span><br>
Давай останемся дома,<br>
Закроем все двери!<br>
Под светом неона<br>
В нашей атмосфере!<br>
  <div class='refren'>И нам некуда бежать, некуда спешить,<br>
  Я просто хочу одним тобою жить!</div>
Давай останемся дома,<br>
Закроем все двери!<br>
Под светом неона<br>
В нашей атмосфере!<br>
  <div class='refren'>И нам некуда бежать, некуда спешить,<br>
  Я просто хочу одним тобою жить!<br>
  Одним тобою жить!</div>
 <br>
<span class='blue'>Источник: расшифровка фонограммы клипа</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
