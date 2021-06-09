<?php
$title = 'Ногу Свело! - Заебали! (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Aqz-lOHRoDo'";
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

<span class='i'>- А, бля. Угу... угу... угу... угу...<br></span>
<br>
<span class='blue'>[Припев] Л3534жм - AAbAAb</span><br>
Заебали, суки!<br>
Заебали, суки!<br>
Заебали, суки, вы меня!<br>
Заебали, суки!<br>
Заебали, суки!<br>
Заебали суки меня!<br>
<br>
<span class='blue'>[Куплет 1] Ан2жж - ABAB CDCD</span><br>
Все в каком-то тумане,<br>
Я иду по приборам.<br>
Никого на поляне -<br>
Все укрылись по норам.<br>
  <div class='refren'>В ожиданьи позора<br>
  Сердце гложет обида.<br>
  Мы — потомки террора,<br>
  Мы — посланцы ковида.</div>
<br>
<span class='blue'>[Переход] Я6ж/ - aa</span><br>
Горит на площади языческий костер,<br>
Мы в нем своих сжигаем братьев и сестер.<br>
<br>
<span class='blue'>[Припев]</span><br>
Заебали, суки!<br>
Заебали, суки!<br>
Заебали, суки, вы меня!<br>
Заебали, суки!<br>
Заебали, суки!<br>
Заебали суки меня!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Пусть узнают потомки,<br>
Как мы верили в байки,<br>
Угорая в Тик-Токе<br>
Убивались за лайки.<br>
  <div class='refren'>Но потом оказалось:<br>
  Все вокруг — это зона<br>
  Кузовов автозаков<br>
  И дубинок ОМОНа.</div>
<br>
<span class='blue'>[Переход]</span><br>
Горит на площади языческий костер,<br>
Мы в нем своих сжигаем братьев и сестер.<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
Мы поели таблетки<br>
И проснулись под вечер.<br>
Двадцать лет в этом веке<br>
Отмотал наш диспетчер.<br>
  <div class='refren'>Проблевались от водки<br>
  И холодных сосисок<br>
  И пошерили фотки<br>
  Силиконовых сисек.</div>
<br>
<span class='blue'>[Припев]</span><br>
Заебали, суки!<br>
Заебали, суки!<br>
Заебали, суки, вы меня!<br>
Заебали, суки!<br>
Заебали, суки!<br>
Заебали суки меня!<br>
<br>
<span class='blue'>[Переход] Л23мм? - abab</span><br>
Е-е-е!<br>
Заебали меня!<br>
Е-е-е!<br>
Заебали меня!<br>
<br>
<span class='blue'>[Припев]</span><br>
Заебали, суки!<br>
Заебали, суки!<br>
Заебали, суки, вы меня!<br>
Заебали, суки!<br>
Заебали, суки!<br>
Заебали суки меня!<br>
  <br>
  <span class='i'>- Снято!<br></span>
    <br>
<span class='blue'><a href='https://text-pesni.com/pesnya/pokazat/565694413/nogu-svelo/tekst-perevod-pesni-zaebali/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
