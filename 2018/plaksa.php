<?php
$title = 'Мальбэк - Плакса (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/iE9HdLgL69A'";
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
  - Ты думаешь, если ты [неразб.], я охуенно тебе сделаю?
  Ты думаешь, я охуенно тебе сделаю? <br>
  - Почему ты говоришь, почему?<br>
  - Потому что ты охуел! Ты, сука, срешь в настроение, меня дергаешь, ебать,
  каждый, сука, каждый вариант времени! Сука, я тебе сказала, [неразб.]<br>
  - Вот щас оборзела!<br>
  - Сука, все мои честные...<br>
  - Тьфу!<br>
</span>
<br>
<span class='blue'>[Куплет 1] Л32мж - aBaB<br></span>
Я больше не страдаю по тебе,<br>
Хотя я тот еще плакса.<br>
А эти мысли давят в голове,<br>
Но не могу я им сдаться.<br>
<div class='refren'>
Быть может, я и правда не в себе<br>
Или могу притворяться.<br>
А эти мысли давят в голове,<br>
Но не могу я им сдаться.</div>
<br>
<span class='blue'>[Переход х2] Тк4цж - AA<br></span>
Больше не могу чувствовать свободу!<br>
Больше не войду с тобой в эту воду!<br>
<br>
<span class='blue'>[Припев х2] Дк4цм - aa<br></span>
Что тебе надо от меня-йа-йа!<br>
Что тебе надо от меня-йа-йа!<br>
Я не тот, кто тебя поймет!<br>
Я не тот, эй, я не тот!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я стою перед тобой, как наверху,<br>
И мне предложено сдаться (руки вверх!)<br>
Но ты знаешь, никуда не убегу<br>
И не буду пытаться!<br>
<div class='refren'>
  <span class='blue'>Х4жм - AbAb<br></span>
Не заметил, как тот ветер<br>
Мне принес тебя к утру.<br>
На рассвете этот ветер <br>
Мне принес тебя, из губ<br>
<span class='blue'>Тк2м - aaaa<br></span>
Вдруг сорвалась вся боль,<br>
Ты являлась собой, <br>
Моей высотой<br>
Сотни лет под водой!</div>
<br>
<span class='blue'>[Переход х2]<br></span>
Больше не могу чувствовать свободу!<br>
Больше не войду с тобой в эту воду!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Что тебе надо от меня-йа-йа!<br>
Что тебе надо от меня-йа-йа!<br>
Я не тот, кто тебя поймет!<br>
Я не тот, эй, я не тот!<br>
<br>
<span class='blue'>[Аутро]<br></span>
 Эй!<br>
Я больше не страдаю по тебе,<br>
Хотя я тот еще плакса.<br>
<br>
<span class='blue'><a href='https://genius.com/Malbec-crybaby-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
