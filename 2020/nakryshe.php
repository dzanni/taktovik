<?php
$title = 'Dabro - На крыше (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/QlbgvHkuLdc'";
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

<span class='blue'>[Куплет 1] Тк3-5цм/м - aabb, aa...</span><br>
Твоё имя плюс моё на стене,<br>
Знает целый двор о тебе и обо мне.<br>
Наблюдая с высоты, виден целый мир,<br>
Суета, но на крыше мы совсем одни.<br>
  <div class='refren'>Маленькие люди, но огромные мечты,<br>
  Маленькое сердце ждёт большой любви.<br>
  Но ты не спеши, время не гони,<br>
  И запомни этот миг. <span class='blue'>(Строка Тк2м)</span></div>
<br>
<span class='blue'>[Припев х2] Я4442мм - xaxa</span><br>
На крыше городских домов<br>
Мы прятались от лишних глаз.<br>
Я целовал тебя тогда<br>
В свой первый раз.<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
А завтра снова я проснусь один,<br>
Я жду тебя, хотя есть миллион других.<br>
Буду вновь искать тебя среди толпы,<br>
И будто я не я, и будто разделился мир.<br>
  <div class='refren'>А хочешь просто помолчим?<br>
  А хочешь я приду к тебе, оставь ключи.<br>
  Мы сами нарисуем жизнь,<br>
  Ведь на то есть тысячи причин!</div>
<br>
<span class='blue'>[Припев х2] </span><br>
На крыше городских домов<br>
Мы прятались от лишних глаз.<br>
Я целовал тебя тогда<br>
В свой первый раз.<br>
<br>
<span class='blue'>[Куплет 3] </span><br>
С годами стали мы ещё сильней.<br>
Я благодарен Богу и ещё судьбе.<br>
Я настоящий, и моя любовь к тебе<br>
Ровно такая же, как в самый первый день.<br>
  <div class='refren'>С годами стали мы ещё сильней,<br>
  Я прилечу пусть даже на одном крыле.<br>
  Найду дорогу даже в темноте,<br>
  Чтобы снова о любви сказать тебе.</div>
<br>
<span class='blue'>[Припев х2] </span><br>
На крыше городских домов<br>
Мы прятались от лишних глаз.<br>
Я целовал тебя тогда<br>
В свой первый раз.<br>
  <br>
<span class='blue'>Источник: официальный текст под клипом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
