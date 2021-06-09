<?php
$title = 'Макс Барских - По секрету (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/llkdF0HH0HA'";
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

<span class='blue'>[Куплет 1] Дв34жм - AbAAb</span><br>
С тобою не сравнится (С тобою не сравнится)  <br>
Целая вселенная (Целая вселенная).  <br>
Ты лишь могла мне сниться (а-а)  <br>
Размытые границы (а-а)<br>
Я так давно искал тебя (Хо-хо-хо-хо)  <br>
  <br>
<span class='blue'>[Переход] Я34жм - AbAb <br></span>
Но ты же непростая<br>
И в чём-то сумасшедшая!  <br>
Но я с тобой летаю,<br>
По новой узнаю себя.  <br>
  <div class='refren'>
  <span class='blue'>Дв3334ж/м - AAbb<br></span>
  Несёт меня по краю, <br>
  От земли до рая, <br>
  От рая до земли -<br>
  И это только о любви.  </div>
  <br>
<span class='blue'>[Припев] Л2-5ж/м - AAAbbA AAAbbb <br></span>
И по секрету -  <br>
Я слаб, когда ты раздета!  <br>
И на двоих сигарета <br>
Одна <br>
Подожжена,  <br>
И ты моя планета! <br>
  <div class='refren'>И по секрету -  <br>
  Я слаб, когда ты раздета!  <br>
  И на двоих сигарета <br>
  Одна  <br>
  Подожжена,  <br>
  Но ты моя двадцать девятая, тлеешь, весна!  </div>
  <br>
<span class='blue'>[Куплет 2]  <br></span>
Ты бываешь разной (Ты бываешь разной)  <br>
Стихия вечного огня (Стихия вечного огня)  <br>
Ты — личность, и мне важно,  <br>
Ты — личность, и мне важно  <br>
Быть самым сильным для тебя (Хо-хо-хо-хо)<br>
  <br>
  <span class='blue'>[Переход]  <br></span>
  Но ты же непростая<br>
  И в чём-то сумасшедшая!  <br>
  Но я с тобой летаю,<br>
  По новой узнаю себя.  <br>
    <div class='refren'>Несёт меня по краю, <br>
    От земли до рая, <br>
    От рая до земли -<br>
    И это только о любви.  </div>
  <br>
  <span class='blue'>[Припев]  <br></span>
  И по секрету -  <br>
  Я слаб, когда ты раздета!  <br>
  И на двоих сигарета <br>
  Одна <br>
  Подожжена,  <br>
  И ты моя планета! <br>
    <div class='refren'>И по секрету -  <br>
    Я слаб, когда ты раздета!  <br>
    И на двоих сигарета <br>
    Одна  <br>
    Подожжена,  <br>
    Но ты моя двадцать девятая, тлеешь, весна!  </div>
  <br>
[Musical bridge]  <br></span>
  <br>
<span class='blue'>[Финал]  <br></span>
И по секрету...<br>
<br>
<span class='blue'>[Припев]  <br></span>
И по секрету -  <br>
Я слаб, когда ты раздета!  <br>
И на двоих сигарета <br>
Одна <br>
подожжена, <br>
И ты моя планета! <br>
  <div class='refren'>И по секрету -  <br>
  Я слаб, когда ты раздета!  <br>
  И на двоих сигарета <br>
  Одна  <br>
  Подожжена  <br>
  Но ты моя двадцать девятая, тлеешь, весна!  </div>
  <br>
<span class='blue'><a href='https://www.gl5.ru/max-barskih-po-sekretu.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Рифма "д" распета в "м":  <br>
 <br>
И в чём-то сумасшедшаЯ! <br>
Целая вселеннаЯ <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
