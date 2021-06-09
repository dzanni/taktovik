<?php
$title = 'Анна Плетнёва - Воскресный ангел (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Tw6j5wLMzWE'";
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

<span class='i'>- Ты когда-нибудь убегала из дома?<br>
- Э...<br>
- Yes.<br>
- Oui.<br>
- Да.<br>
- Oui.<br>
- Ye, once.<br></span>
<br>
<span class='blue'>[Куплет 1] Дк4ц3жм - AA'AbCCCb<br></span>
Воскресный ангел остался без дома,<br>
Потерянный ходит по улицам города,<br>
С надеждой смотря в закрытые окна,<br>
Прозрачные, как лица людей.<br>
<div class='refren'>
Он не понимает, когда все случилось,<br>
И почему время остановилось.<br>
Он просто проспал и не увидел<br>
Эфира ночных новостей.</div>
<br>
<span class='blue'>[Припев] Л2-4цжм - AAbbb bbbbb<br></span>
А я роняю небо на землю,<br>
Да, я роняю небо на землю.<br>
Я роняю эту боль, <br>
 Мне не нужен алкоголь,<br>
Мне нужна твоя любовь!<br>
(Мне нужна твоя любовь)<br>
<div class='refren'>
Мне нужна, мне нужна твоя любовь (твоя любовь)<br>
Мне нужна, мне нужна твоя любовь!<br>
Я роняю эту боль,<br>
Мне не нужен алкоголь,<br>
Мне нужна твоя любовь!<br>
(Мне нужна твоя любовь)</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Привычный холод, известный с детства,<br>
Обычный путь от метро «Павелецкая».<br>
Вроде никто не заметил подмены,<br>
Сломавшей его изнутри.<br>
<div class='refren'>
Воскресный ангел домой не вернется,<br>
Ему ничего больше не остается,<br>
Как просто гулять и заглядывать в окна<br>
Отныне живущих в сети.</div>
<br>
<span class='blue'>[Припев]<br></span>
А я роняю небо на землю,<br>
Да, я роняю небо на землю.<br>
Я роняю эту боль, <br>
 Мне не нужен алкоголь,<br>
Мне нужна твоя любовь!<br>
(Мне нужна твоя любовь)<br>
<div class='refren'>
Мне нужна, мне нужна твоя любовь (твоя любовь)<br>
Мне нужна, мне нужна твоя любовь!<br>
Я роняю эту боль,<br>
Мне не нужен алкоголь,<br>
Мне нужна твоя любовь!<br>
(Мне нужна твоя любовь)</div>
<br>
<span class='blue'>[Аутро]<br></span>
Мне нужна, мне нужна твоя любовь (твоя любовь)<br>
Мне нужна, мне нужна твоя любовь!<br>
Я роняю эту боль,<br>
Мне не нужен алкоголь,<br>
Мне нужна твоя любовь!<br>
<div class='refren'>
Мне нужна, мне нужна твоя любовь (твоя любовь)<br>
Мне нужна, мне нужна твоя любовь!<br>
Я роняю эту боль,<br>
Мне не нужен алкоголь,<br>
Мне нужна твоя любовь!<br>
(Мне нужна твоя любовь)</div>

Мне нужна, мне нужна твоя любовь (твоя любовь)<br>
Мне нужна, мне нужна твоя любовь!<br>
Я роняю эту боль,<br>
Мне не нужен алкоголь,<br>
Мне нужна твоя любовь!<br>
(Мне нужна твоя любовь)<br>
<br>
<span class='i'>- Если честно, я убегала потому, что мне на... я хотела,
  мне надо было... я должна была быть одной. И я... я бы это сделала опять
  в тех обстановках.<br>
  - А щас бы ты бы это сделала?<br>
  - В этот момент - нет! Сейчас всё прекрасно.<br>
</span>
 <br>
<span class='blue'><a href='https://perevod-pesni.ru/pesnya/pokazat/565655757/anna-pletneva/tekst-perevod-pesni-voskresnyj-angel/'
  target='_blank'>Источник</a></span><br>
 <br>
  <br>
   N.B. Рифма д=ж: "дОма - гОрода", "дЕтства - ПавелЕцкая".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
