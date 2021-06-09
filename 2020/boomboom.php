<?php
$title = 'LOBODA & PHARAOH - Boom Boom (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aOZqcIRttf8'";
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

<span class='i'><span class='blue'>[Интро: LOBODA]</span><br>
La notion d'harmonie est une des clés de l'univers féminin:
elle implique la perfection dans l'immobilité, la justification
immédiate de chaque élément à partir du tout et sa participation passive à la totalité...<br></span>
<br>

<span class='blue'>[Куплет 1: LOBODA] Дк2ж/? - AA</span><br>
Crystal, платье.<br>
Первый, CArtier.<br>
Фонтан, bAd guy.<br>
Cash, BottEga.<br>
Сотка (сотка), карта.<br>
Жарко, ТулУм. <span class='blue'>(Строка Дк2м)</span><br>
<br>
<span class='blue'>[Припев: LOBODA] Л3-4м/ - aa...</span><br>
Детка любит boom-boom (boom-boom)<br>
Boom-boom (boom-boom, boom-boom)<br>
Таня любит boom-boom (boom-boom)<br>
Boom-boom (boom-boom)<br>
Аня тоже любит boom (boom-boom)<br>
Boom-boom (boom-boom)<br>
Катя любит boom-boom (boom-boom)<br>
Boom-boom (boom-boom)<br>
Вичола тоже любит bo-om!<br>
<br>
<span class='blue'>[Куплет 2: LOBODA]</span><br>
Гелик, Арчик.<br>
Новый... мальчик.<br>
Forbes (угу), охрана.<br>
Dolce (Dolce-Dolce-Dolce), рестораны.<br>
Куш, Майами (угу)<br>
Вегас, КанкУн. <span class='blue'>(Строка Дк2м)</span><br>
<br>
<span class='blue'>[Припев: LOBODA]</span><br>
Детка хочет boom-boom.<br>
Boom-boom.<br>
Маша хочет boom-boom.<br>
Boom-boom.<br>
Даша хочет boom-boom (boom-boom)<br>
Boom-boom (boom-boom)<br>
Саша тоже хочет boom.<br>
(Саша тоже хочет boom) (boom-boom)<br>
(Саша тоже хочет boom)<br>
Boom-boom (boom-boom)<br>
Коля тоже хочет boom.<br>
<br>
<span class='blue'>[Бридж: LOBODA]</span><br>
Boom-boom.<br>
Ха-ха-ха!<br>
Boom-boom.<br>
<br>
<span class='blue'>[Предкуплет: PHARAOH]</span><br>
Yuh, эй! Yuh (стоять!) yuh!<br>
Эй! Эй!<br>
<br>
<span class='blue'>[Куплет 3: PHARAOH] Тк2-3м/? - aa</span><br>
Она любит танцевать (эй)<br>
Её жопа в её мать (yuh)<br>
Молодой Фараон -<br>
Я сломал её кровать (йоу, эй, эй)<br>
У меня есть всё,<br>
Эй, йо, почти всё!<br>
И на мне VVS -<br>
Это водка, водник, секс!<br>
(Алё!)<br>
Я хо— я хочу тебе сказать (yuh)<br>
Просто встань на колени (эй)<br>
И начни мне... (bruh)<br>
<br>
<span class='blue'>[Предприпев: LOBODA]</span><br>
Детка хочет boom-boom.<br>
Лиля хочет boom-boom.<br>
Катя хочет boom-boom (а-ах)<br>
Натик хочет boom-boom.<br>
<br>
<span class='blue'>[Припев: LOBODA]</span><br>
Детка хочет boom-boom.<br>
Boom-boom.<br>
Маша хочет boom-boom.<br>
Boom-boom.<br>
Даша хочет boom-boom (boom-boom)<br>
Boom-boom (boom-boom)<br>
Саша тоже хочет boom.<br>
(Саша тоже хочет boom)<br>
(Саша тоже хочет boom)<br>
Boom-boom (boom-boom, boom-boom, boom-boom)<br>
Света тоже хочет.<br>
  <br>
<span class='blue'>[Финал: Лолита]</span><br>
Boom-boom.  <br>
    <br>
<span class='blue'><a href='https://genius.com/Loboda-and-pharaoh-boom-boom-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
