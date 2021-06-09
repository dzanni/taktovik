<?php
$title = 'RASA & Kavabanga Depo Kolibri - Витамин (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kNBTeI54PWc'";
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

<span class='blue'>[Припев x2: Kavabanga Depo Kolibri] Л2ж? - AAAA<br></span>
Ты моя половина, <br>
Хапка витамина.<br>
Ай-яй-яй, не парируй, <br>
Я хочу нам мира-мира.<br>
<br>
<span class='blue'>[Куплет 1: RASA] Я3ж? - AAbB'AAbB'</span><br>
Будь самым-самым верным!<br>
Ты медленно и нежно <br>
Касаешься меня,<br>
И твое тело - аномалия. <span class='blue'>(Строка Тк2д)</span><br>
Срывай давай одежду.<br>
Мой кайф тебя удержит.<br>
Ты полностью вдыхай, <br>
Я твоя ненормальная. <span class='blue'>(Строка Дк2д)</span><br>
<br>
<span class='blue'>[Куплет 2: Kavabanga Depo Kolibri] Тк4цм - aa<br></span>
На пол шмотки, бред в голове.<br>
Мне в кайф исполнять с тобой каждый момент.<br>
Летать по планам миллион лет.<br>
Пули то левей, то тебе, то ли мне.<br>
Мы пара, аномалия на уме.<br>
Панорама, Вам, наверно бред!<br>
Только ты на уме, ты на уме!<br>
Только ты, только ты, только ты на уме!<br>
<br>
<span class='blue'>[Переход: Kavabanga Depo Kolibri] Х3ж? - AAA AAAa<br></span>
Хватит ведь утех нам, <br>
Нужен ритм техно.<br>
Техно-техно, <br>
Телом-телом делай.<br>
Хватит ведь утех нам, <br>
Нужен ритм техно.<br>
Техно-техно, <br>
В темно-темноте.<br>
<br>
<span class='blue'>[Припев x2: Kavabanga Depo Kolibri]<br></span>
Ты моя половина, <br>
Хапка витамина.<br>
Ай-яй-яй, не парируй, <br>
Я хочу нам мира-мира.<br>
<br>
<span class='blue'>[Куплет 3: Kavabanga Depo Kolibri] Тк32жм - AAAbbAb<br></span>
Пудра, рассыпанная пудра.<br>
Кто мы с тобой под утро?<br>
После встреч наших трудно,<br>
И в глазах моих мутно.<br>
Тайны горят в аду,<br>
Тела у всех на виду.<br>
Мы там, где не найдут нас,<br>
Ду-ду-ду!<br>
<div class='refren'>
  <span class='blue'>Дк2-4цжм - AbAb CCCC<br></span>
Я хочу тебя выпить.<br>
Хэй, давай полетай со мной.<br>
В одинаковом ритме.<br>
Хэй, будет так, будет так легко.<br>
Двигай со мной по полной.<br>
Наши тела, как волны.<br>
Волны, волны, <br>
Ты не будешь скромной.</div>
<br>
<span class='blue'>[Переход: Kavabanga Depo Kolibri]<br></span>
Хватит ведь утех нам, <br>
Нужен ритм техно.<br>
Техно-техно, <br>
Телом-телом делай.<br>
Хватит ведь утех нам, <br>
Нужен ритм техно.<br>
Техно-техно, <br>
В темно-темноте.<br>
<br>
<span class='blue'>[Припев x2: Kavabanga Depo Kolibri]<br></span>
Ты моя половина, <br>
Хапка витамина.<br>
Ай-яй-яй, не парируй, <br>
Я хочу нам мира-мира.<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/k/kavabanga/10816-rasa-kavabanga-depo-kolibri-vitamin-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. В припеве использована мелодия песни RASA
<a href='podfonarem.php'>"Под фонарем"</a>
  (вывешена на youtube
11.04.2018).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
