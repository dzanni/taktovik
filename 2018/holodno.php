<?php
$title = 'ЭММА М, Мари Краймбрери, Lx24, Luxor - Холодно (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/G1w06wlsVHs'";
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

<span class='blue'>[Куплет 1, Мари Краймбрери, ЭММА М] Тр3ж? - AABB<br></span>
Де ми, чим далi, тим ближче.<br>
Скажи, це любовь, чи щось iнше?<br>
Лiто було подарунком, -<br>
Вбий мене своїм поцiлунком. <span class='blue'>(Строка Дк4ц)<br></span>
<br>
<span class='blue'>[Припев, ЭММА М, Мари Краймбрери, Lx24, Luxor] Л23дм - A'bA'b<br></span>
Менi холодно.<br>
В Москве -20, зима.<br>
Нам так холодно.<br>
У Києвi теж холода.<br>
Менi холодно. <br>
Длинные ночи без сна.<br>
Нам так холодно <br>
Без тебе; без тебя!<br>
<br>
<span class='blue'>[Куплет 2, Lx24] Д3ж? - AA<br></span>
Утром на свежие мысли,<br>
Строчки, проснувшись, увидишь.<br>
«Здравствуй - пишу тебе, - чудо,<br>
Ты самое моё доброе утро». <span class='blue'>(Строка Тк4цж)<br></span>
<br>
<span class='blue'>[Припев, ЭММА М, Мари Краймбрери, Lx24, Luxor]<br></span>
Менi холодно.<br>
В Москве -20, зима.<br>
Нам так холодно.<br>
У Києвi теж холода.<br>
Менi холодно. <br>
Длинные ночи без сна.<br>
Нам так холодно <br>
Без тебе; без тебя!<br>
<br>
<span class='blue'>[Куплет 3, Luxor] Тк2-5цж, Тк4цжм? - aa, AA, AbA'b<br></span>
Ну как тебе? <span class='blue'>(Строка Тк2м)<br></span>
Моя стихия от холода глохнет -<br>
Это любовь или опыт, мечта или омут,<br>
Ведь без тебя мир будет ледниковым!<br>
Как диско без лучей стробоскопа,<br>
Как риски без итога. Или как <br>
Низкий тон без нот высокого,<br>
Хит без версий ремиксовых, так.<br>
<div class='refren'>
Снова холодно, холодно, холодно в городе пробок. <br>
Ты мой ток, но между нами потерян провод. <br>
Бегу за тобой, в -20, в 9.40.<br>
Ну а что мне весь этот пафос? <br>
Искусственный праздник,<br>
Ведь среди всех этих масок <br>
Я не нашел то, что мир украсит!</div>
<br>
<span class='blue'>[Припев, ЭММА М, Мари Краймбрери, Lx24, Luxor]<br></span>
В Москве -20, зима.<br>
Нам так холодно...<br>
<br>
<span class='blue'>[Припев, ЭММА М, Мари Краймбрери, Lx24, Luxor]<br></span>
Менi холодно.<br>
В Москве -20, зима.<br>
Нам так холодно.<br>
У Києвi теж холода.<br>
Менi холодно. <br>
Длинные ночи без сна.<br>
Нам так холодно <br>
Без тебе; без тебя!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/e/emma-m/emma-m-mary-kraimbrery-lx24-luxor-holodno.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма д=ж: "стробоскОпа" - "высОкого".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
