<?php
$title = 'Супер Жорик - Хочу тибя любицца (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kV8PvgqFsAg'";
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

<span class='blue'>[Куплет 1] Я43жм - aaabcccb<br></span>
Зачем надела это платье?<br>
Зачем твой платье в леопарде?<br>
Смотрел и спереди и сзади<br>
И позабыл всех слов,<br>
(Вашпе всех слов).<br>
Зачем ресницами махала?<br>
Зачем мне сердце колыхала?<br>
Любов мне душу запихала,<br>
Конкретную любов!<br>
(Love!)<br>
<br>
<span class='blue'>[Припев] Тк2ж/? - X'XAA<br></span>
Шикарная женщина, <br>
Садись ко мне машина,<br>
Ты будешь моя львица,<br>
Хочу тибя любицца!<br>
(Хочу тибя любицца) <br>
<div class='refren'>
  <span class='blue'>Я3жм - AAAbAAAb<br></span>
Хочу тибя любицца! <br>
Хочу тибя любицца!<br>
Хочу тибя любицца! <br>
Серьезно, не шучу! <br>
Хочу тибя любицца! <br>
Хочу тибя любицца! <br>
Хочу тибя любицца! <br>
Женицца не хочу!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Проходят дни, проходят ночи,<br>
А я скучаю тебя очень.<br>
Наверно, ми с тобою хочем<br>
Встретицца опять! <span class='blue'>(Строка Х3м)<br></span>
Чтоб ти миня потанцевала,<br>
Потом расцеловаливала<br>
И леопардом называла,<br>
Чтоб для тибя рычать!<br>
<br>
<span class='blue'>[Припев]<br></span>
Шикарная женщина, <br>
Садись ко мне машина,<br>
Ты будешь моя львица,<br>
Хочу тибя любицца!<br>
(Хочу тибя любицца) <br>
<div class='refren'>
Хочу тибя любицца! <br>
Хочу тибя любицца!<br>
Хочу тибя любицца! <br>
Серьезно, не шучу! <br>
Хочу тибя любицца! <br>
Хочу тибя любицца! <br>
Хочу тибя любицца! <br>
Женицца не хочу!</div>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'>[Припев]<br></span>
Шикарная женщина, <br>
Садись ко мне машина,<br>
Ты будешь моя львица,<br>
Хочу тибя любицца!<br>
(Хочу тибя любицца) <br>
<div class='refren'>
Хочу тибя любицца! <br>
Хочу тибя любицца!<br>
Хочу тибя любицца! <br>
Серьезно, не шучу! <br>
Хочу тибя любицца! <br>
Хочу тибя любицца! <br>
Хочу тибя любицца! <br>
Женицца не хочу!</div>
 <br>
<span class='blue'>[Аутро]<br></span>
Хочу тибя любицца!<br>
Хочу тибя любицца! <br>
Хочу...<br>
  <br>
<span class='i'>
[Жорик] Сочинский бонжур! Ррр!  <br>
[Девушка] Мне кажется, Вы меня преследуете!  <br>
[Жорик] Вам не кажется!<br>
</span>

  <br>
<span class='blue'><a href='https://on-hit.ru/texts/super-zhorik-mihail-galustjan-hochu-tibja-ljubicca/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
