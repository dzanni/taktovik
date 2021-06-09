<?php
$title = 'GAZIROVKA - Mad-ma (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/KlWHhQBaBVU'";
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

<span class='blue'>[Припев] Л32мж - AAAx<br></span>
Мад- мад- мад- мадмазель.<br>
Мадма- мадмазель.<br>
Мад- мад- мад- мадмазель.<br>
Мад- мад- мад- мад-<br>
Мад- мад- мад- мадмазель.<br>
Мадма- мадмазель.<br>
Мад- мад- мад- мадмазель.<br>
Мад- мад- мадмазель.<br>
<br>
<span class='blue'>[Куплет 1] Тк4цж - AA<br></span>
Зачем ты варишь свои джинсы?<br>
Мне так не понятно, хоть я уже влюбился.<br>
Добиваю кофе, я врубаю профи.<br>
Твои глаза - конфетки тофи (фетки тофи)<br>
<div class='refren'>
<span class='blue'>Я43жм? - AbAb<br></span>
Такие шорты точно модны,<br>
Ты ого-го! <span class='blue'>(Строка Я2м)<br></span>
Такие туфли вне погоды -<br>
Channel, Louis Vuitton.<br>
Такие бедра точно плотно <br>
Танцуют под-под-под.<br>
Такие треки очень модны. <br>
Я здесь, мы не знакомы!</div>
<br>
(Мад- мад- мад- мад- мад-)<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Мад- мад- мад- мадмазель.<br>
Мадма- мадмазель.<br>
Мад- мад- мад- мадмазель.<br>
Мад- мад- мад- мад-<br>
Мад- мад- мад- мадмазель.<br>
Мадма- мадмазель.<br>
Мад- мад- мад- мадмазель.<br>
Мад- мад- мадмазель.<br>
<br>
<span class='blue'>[Куплет 2] Тк2ж - AAAA<br></span>
Красные линзы (красные линзы)<br>
Пошлые мысли (пошлые мысли)<br>
Ахуехали джинсы (ахуехали джинсы)<br>
Мы с тобою здесь зависли (мы с тобою здесь за ви-ви-ви)<br>
<div class='refren'>
  <span class='blue'>Л1-3ж - AABBAACCCC<br></span>
Звуки вырезают <br>
Уши, мелькают<br>
Руки,<br>
Привет, подруги!<br>
Звуки подрывают<br>
Руки, вырезают<br>
Уши.<br>
Я буду лучшим!<br>
Детка, с тобой мы в танце кружим.<br>
Детка, с тобой мы свет потушим!</div>
<br>
(Мад- мад- мад- мад- мад-)<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Мад- мад- мад- мадмазель.<br>
Мадма- мадмазель.<br>
Мад- мад- мад- мадмазель.<br>
Мад- мад- мад- мад-<br>
Мад- мад- мад- мадмазель.<br>
Мадма- мадмазель.<br>
Мад- мад- мад- мадмазель.<br>
Мад- мад- мадмазель.<br>
<br>
<span class='blue'>[Припев 2: Girl] Л23м - aa<br></span>
Джентль- джентльмен<br>
Е, е, джентельмен.<br>
Джентль- джентльмен<br>
Е, е, е, джентельмен.<br>
<div class='refren'>
Джентль- джентльмен<br>
Е, е, е, джентельмен.<br>
Джентль- джентльмен<br>
Е, е, е, джентельмен.</div>

Джентль- джентльмен<br>
Е, е, е, джентельмен.<br>
Джентль- джентльмен<br>
Е, е, е, джентельмен.<br>
Джентль- джентльмен<br>
<div class='refren'>
Е, е, е, джентельмен.<br>
Джентль- джентльмен<br>
Е, е, е, джентельмен.<br>
Джентль- джентльмен.</div>
<br>
<span class='blue'>[Аутро]<br></span>
Мад- мад- мадмазель.<br>
<br>
<span class='blue'><a href='https://genius.com/Gazirovka-mad-ma-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
