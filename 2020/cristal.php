<?php
$title = 'MORGENSHTERN - Cristal & МОЁТ (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wDsU4H2w48k'";
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
- Хитмейкер Моргенштерн...<br>
- Делают человеком года...<br>
- Алишер открывает заведение.<br>
- Рэпер Моргенштерн...<br>
- Моргенштерну всего 22.<br>
- Он набирает лямы просмотров...<br>
- ...как обладатель премии "Женщина года"...<br>
- Моргенштерн завоевывает титулы...<br>
- А он не только мегабогат, но и суперзнаменит.<br>
- Рэпер становится долларовым миллионером.<br>
- Музыкантом 2020-го года признан Моргенштерн!<br>
- Рэпер Моргенштерн...<br>
- Моргенштерн...<br>
- Моргенштерн...<br>
- Моргенштерн...<br>
- Моргенштерн...<br>
</span>
<br>

<span class='blue'>[Интро] Л1-3ж/ - AAA</span><br>
Ла-ла-ла-Ла-ла.<br>
Ла-ла-ла-Ла-ла-ла-Ла-ла.<br>
Ла-ла.<br>
<br>
<span class='blue'>[Припев] Л4344цм/м - aabb</span><br>
Я лью Cristal и Chandon Moët.<br>
Мечтал — теперь моё!<br>
Трачу на это, трачу на то, <br>
Трачу на это, трачу на то!<br>
Я лью Cristal и Chandon Moët.<br>
Мечтал — теперь моё!<br>
Трачу на это, трачу на то,<br>
Трачу на это, трачу на то!<br>
Я лью Cristal и Chandon Moët.<br>
Мечтал — теперь моё!<br>
Трачу на это, трачу на то, <br>
Трачу на это, трачу на то!<br>
Я лью Cristal и Chandon Moët.<br>
Мечтал — теперь моё!<br>
<br>
<span class='blue'>[Куплет] Я3м/ж - aa, AA</span><br>
Йа!<br>
S63 AMG (Е, е, е, е)<br>
Летит в ночной Москве (Let's go)<br>
Все сучки палят в след (Мой след)<br>
Slap bitch, тут семь нулей (Е)<br>
На мне ща VVS.<br>
Под жопой V и S.<br>
Yo, bitch, I got new Benz (New Benz)<br>
До-дорого? Пиздец! (Few-few)<br>
Большущий дядя-мальчик (У)<br>
Купил се новые тачки,<br>
Парочку-парочку новеньких тачечек! <span class='blue'>(Строка Тк4д)</span><br>
Спасибо за подписочку на Рамзан Ахматыча (Спасибо) <span class='blue'>(Строка Тк4д)</span><br>
Большущий дядя-мальчик (Few-few)<br>
Открыл се ресторанчик (KAIF)<br>
22 года, сука, кто двигается пиздаче? <span class='blue'>(Строка Тк5ж)</span><br>
<br>
<span class='blue'>[Припев]</span><br>
Я лью Cristal и Chandon Moët.<br>
Мечтал — теперь моё!<br>
Трачу на это, трачу на то, <br>
Трачу на это, трачу на то!<br>
Я лью Cristal и Chandon Moët.<br>
Мечтал — теперь моё!<br>
Трачу на это, трачу на то,<br>
Трачу на это, трачу на то!<br>
Я лью Cristal и Chandon Moët.<br>
Мечтал — теперь моё!<br>
Трачу на это, трачу на то, <br>
Трачу на это, трачу на то!<br>
Я лью Cristal и Chandon Moët.<br>
Мечтал — теперь моё!<br>
<br>
<span class='blue'>[Аутро]</span><br>
Слава, что ты сделал?<br>

  <br>
<span class='blue'><a href='https://genius.com/Morgenshtern-cristal-and-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
