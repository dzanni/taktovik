<?php
$title = 'Баста ft. - Сансара (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aiCL0-U9WxI'";
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
<span class='blue'>[Куплет] Тк4ц2м - aabb</span><br>
Делай вопреки, делай от руки,<br>
Мир переверни, небо опрокинь.<br>
В каждом наброске, в каждом черновике,<br>
Учитель продолжается в своем ученике.<br>
<div class='refren'>Всю мою жизнь я иду ко дну,<br>
Всю мою жизнь я искал любовь,<br>
Чтобы любить одну. </div>
Они сказали – <br>
Нас поздно спасать и поздно лечить.<br>
Плевать, ведь наши дети будут лучше, чем мы.<br>
Лучше, чем мы… Лучше, чем мы…<br>
<br>
<span class='blue'>[Припев х2] Дк1-3жд - AAB'B'AAbB'<br></span>
Когда меня не станет, <br>
Я буду петь голосами<br>
Моих детей <br>
И голосами их детей.<br>
Нас просто меняют местами,<br>
Таков закон сансары, <br>
Круговорот людей.<br>
О-о-ой, мама…<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Нас не стереть, мы живем назло,<br>
Пусть не везет, но мы свое возьмем.<br>
Это небо вместо сцены, здесь всё вверх ногами.<br>
И эти звезды в темноте – тобой зажжённый фонарик.<br>
<div class='refren'>Тысяча меня до меня, и после меня<br>
Будет тысяча меня и в тысячах не меня -<br>
Тысяча меня.</div>
И мы снова вдребезги и нас не починить.<br>
Плевать, ведь наши дети будут лучше, чем мы.<br>
Лучше, чем мы… Лучше, чем мы…<br>
Лучше, чем мы…<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Когда меня не станет, <br>
Я буду петь голосами<br>
Моих детей <br>
И голосами их детей.<br>
Нас просто меняют местами,<br>
Таков закон сансары, <br>
Круговорот людей.<br>
О-о-ой, мама…<br>
<br>
<span class='blue'>[Припев х3]<br></span>
Когда меня не станет, <br>
Я буду петь голосами<br>
Моих детей <br>
И голосами их детей.<br>
Нас просто меняют местами,<br>
Таков закон сансары, <br>
Круговорот людей.<br>
О-о-ой, мама…<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/b1/basta/7265-basta-sansara-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
