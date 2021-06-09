<?php
$title = 'PHARAOH - Smart (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/2NI1fDkToCA'";
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
Эй!<br>
Погромче!<br>
Бичес!<br>
<br>
<span class='blue'>[Припев] Х4м - aa<br></span>
Всегда смарт - я, как вода!<br>
Беру нож, иди сюда!<br>
Всегда смарт - я, как вода!<br>
Ору ей: «Иди сюда!»<br>
Всегда смарт - я, как вода!<br>
...я, как вода!<br>
Ору ей: «Иди сюда!»<br>
Всегда смарт - я, как вода!<br>
Беру нож, иди сюда!<br>
Всегда смарт - я, как вода!<br>
Ору ей: «Иди сюда!»<br>
Всегда смарт - я, как вода!<br>
Беру нож, иди сюда!<br>
Всегда смарт - я, как вода!<br>
Ору ей: «Иди сюда!»<br>
(Иди сюда!)<br>
<br>
<span class='blue'>[Куплет] Тк4цж - AA<br></span>
Мне похуй, если ты, тупое чмо, меня не любишь!<br>
У меня есть то, что ты не спиздишь и не купишь!<br>
Я вошёл в неё рукой и показал ей кукиш.<br>
Мне нужен только рот её, но bitch is so damn foolish<br>
Куча дорогих чужих тёлок в телефоне,<br>
Люблю есть сердца, ведь каждый день, как День влюблённых.<br>
Здесь сегодня дождь, значит, мы курим на районе,<br>
У падика я в маске, будто бы я, блять, наёмник!<br>
<span class='blue'>Дк32м? - aAAaaabb<br></span>
Не лезь ко мне домой!<br>
Плыву на ней — каноэ!<br>
Хочет ко мне в покои!<br>
Ей не достанусь — Ален Делон! <span class='blue'>(Строка Дк4цм)<br></span>
Кончил ей на Vilone<br>
Лишь одно правилО:<br>
Что правил нет, <br>
Не лезу в Директ!<br>
<br>
<span class='blue'>[Скит]<br></span>
Лучше дома посижу, в пизду этих уёбков!<br>
(What the fuck?!)<br>
<br>
<span class='blue'>[Припев]<br></span>
Всегда смарт - я, как вода!<br>
Беру нож, иди сюда!<br>
Всегда смарт - я, как вода!<br>
Ору ей: «Иди сюда!»<br>
Всегда смарт - я, как вода!<br>
Беру нож, иди сюда!<br>
Всегда смарт - я, как вода!<br>
Ору ей: «Иди сюда!»<br>
Всегда смарт - я, как вода<br>
Беру нож, иди сюда!<br>
Всегда смарт - я, как вода!<br>
Ору ей: «Иди сюда!»<br>
Всегда смарт - я, как вода!<br>
Беру нож, иди сюда!<br>
Всегда смарт - я, как вода!<br>
Ору ей: «Иди сюда!»<br>
(Иди сюда!)<br>
<br>
<span class='blue'><a href='https://genius.com/Pharaoh-smart-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
