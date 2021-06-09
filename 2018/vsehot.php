<?php
$title = 'Пошлая Молли - Все хотят меня поцеловать (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aWzfLSrpp9s'";
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
Эм-О!<br>
Squirreled!<br>
<br>
<span class='blue'>[Куплет 1] Дк4цж, Дк4цм - AAAA, aaaa<br></span>
Эй, кс-кс, подрочи ногами -<br>
Я подпишусь на тебя в инстаграме!<br>
У меня есть немного травки,<br>
Я в смешной пижаме. <span class='blue'>(Строка Дк3ж)<br></span>
<div class='refren'>
Снова эти ФБР<br>
Хотят запретить давать концерт,<br>
Но я всё равно прилечу к тебе<br>
На своей именной звезде!</div>
<br>
<span class='blue'>[Припев] Тк1-4цмж - aaBaaB aaaaaB<br></span>
Сука, сука, сука, сука, ай!<br>
Прыгнул в толпу, никто не поймал!<br>
А твой бойфренд даже не пытался!<br>
Сука, сука, сука, сука, сука, сука, ай!<br>
Все хотят меня поцеловать, <br>
Целоваться!<br>
Сука, сука, сука, сука, сука, сука, ай!<br>
Прыгнул в толпу, никто не поймал, никто не поймал!<br>
Ебать!<span class='blue'>(Строка Тк1м)<br></span>
Сука, сука, сука, сука, ай!<br>
Все хотят меня поцеловать, <br>
Целоваться!<br>
<br>
<span class='blue'>[Куплет 2] Тк34цж - AAAA<br></span>
Пятнадцатилетние мочалки<br>
Кричали повсюду кричалки,<br>
А я всё ещё люблю ту грустную девчонку<br>
С глазами, как у собаки!<br>
<div class='refren'>
Повсюду эти ФБР<br>
Доебут меня за трек про клей!<br>
Но я всё равно прилечу к тебе,<br>
Хоть даже на мертвом Курте Кобейне!</div>
<br>
<span class='blue'>[Припев]<br></span>
Сука, сука, сука, сука, ай!<br>
Прыгнул в толпу, никто не поймал (никто не поймал)!<br>
А твой бойфренд всё же облажался!<br>
Сука, сука, сука, сука, сука, сука, ай!<br>
Все хотят меня поцеловать, <br>
Целоваться!<br>
Сука, сука, сука, сука, сука, сука, ай!<br>
Прыгнул в толпу, никто не поймал, никто не поймал!<br>
Ебать!<br>
Сука, сука, сука, сука, ай!<br>
Все хотят меня поцеловать!<br>
Я всё трахнул!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Хэй!<br>
Эм-О-Эл-эл-И! (Прыгнул в толпу, никто не поймал)<br>
Эм-О-Эл-эл-И! (Я всё трахнул)<br>
Хэй! <br>
Эм-О-Эл-эл-И! (Как же дохуя у меня бабла)<br>
Эм-О-Эл-эл-И!<br>
Хэй!<br>

<br>
<span class='blue'><a href='https://genius.com/Poshlaya-molly-everyone-wants-to-kiss-me-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
