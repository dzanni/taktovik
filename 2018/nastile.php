<?php
$title = 'Время и Стекло - На стиле (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/tJ7JcweIOZ4'";
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

<span class='blue'>[Интро 1] Тк2-4цжм - AbAb</span><br>
А мы на стиле! (Угу!)<br>
Даже не думай что-то отменять -<br>
У нас всё остаётся в силе. (Угу!)<br>
Мы эту ночь сегодня будем разукрашивать, <span class='blue'>(Формально строка Тк4цд)</span><br>
А мы на стиле! (Уэ-у-у!)<br>
Даже не думай что-то отменять.<br>
У нас всё остаётся в силе.<br>
<br>
<span class='blue'>[Интро 2] Тк2м/ж - aa, AA</span><br>
Татухи набили, <br>
Губы налепили, <br>
Ногти напилили.<br>
Негатив удалили, <br>
Позитив на стиле.<br>
И До-до на стиле <br>
Оn the dance floor!<br>
Это «Время и Стекло»!<br>
Lets go!<br>
<br>
<span class='blue'>[Куплет 1] Тк32жм - AbAbcc</span><br>
Со мной всё в порядке, мама,<br>
(Мама, I'm a star.)<br>
Просто стала я сама себе рекламой.<br>
Мой life-style, <br>
Мама, все заценили.<br>
Мама, мама, я у тебя на стиле, е-а...<br>
<br>
<span class='blue'>[Припев] Л4цж, Л4цм - AA, aa</span><br>
А-а-э-а... А мы на стиле... <br>
А-а-э-а... А мы на стиле...<br>
Eh! А-э-а... А мы на стиле...<br>
А-а-э-а... A-a-a...<br>
Mama-a-ma-star, a-ma-super-duper-star.<br>
Mama-a-ma-star, a-ma-super-duper-star.<br>
Ma-mama-a-ma-star, a-ma-super-duper-star.<br>
Mama-a-ma-star, a-ma-(super-duper-super-duper).<br>
<br>
<span class='blue'>[Куплет 2] Л24цж - AABAAB</span><br>
Всё в стиле, мы на стиле.<br>
Заскочили, затусили.<br>
От-скочили и на стиле отвалили к маме.<br>
Всё в стиле, мы на стиле.<br>
Минимально загрустили.<br>
От-пустили грусть, себя развеселили сами.<br>
<br>
<span class='blue'>[Припев]</span><br>
А-а-э-а... А мы на стиле... <br>
А-а-э-а... А мы на стиле...<br>
Eh! А-э-а... А мы на стиле...<br>
А-а-э-а... A-a-a...<br>
Mama-a-ma-star, a-ma-super-duper-star.<br>
Mama-a-ma-star, a-ma-super-duper-star.<br>
Ma-mama-a-ma-star, a-ma-super-duper-star.<br>
Mama-a-ma-star, a-ma-(super-duper-super-duper).<br>
<br>
<span class='blue'>[Интро 1]</span><br>
А мы на стиле! (Уэ-у-у!)<br>
Даже не думай что-то отменять -<br>
У нас всё остаётся в силе. (Уэ-у-у!)<br>
Мы эту ночь сегодня будем разукрашивать, <br>
 А мы на стиле! (Уэ-у-у!)<br>
Даже не думай что-то отменять.<br>
У нас всё остаётся в силе.<br>
<br>
<span class='blue'>[Интро 2]</span><br>
Татухи набили, <br>
Губы налепили, <br>
Ногти напилили.<br>
Негатив удалили, <br>
Позитив на стиле.<br>
И До-до на стиле <br>
Оn the dance floor!<br>
<br>
<span class='blue'>[Куплет 3] Тк34цж - aaaaa</span><br>
А-а-э-а... А мы на стиле!<br>
Сняли видео и в интернет залили.<br>
Фильм о стиле, на стиле <br>
Фоточки в автомобиле.<br>
Это всё неважно, важно то, что мы на стиле. (у!)<br>
<br>
<span class='blue'>[Припев]</span><br>
Mama-a-ma-star, a-ma-super-duper-star.<br>
Mama-a-ma-star, a-ma-super-duper-star.<br>
Ma-mama-a-ma-star, a-ma-super-duper-star.<br>
Mama-a-ma-star, a-ma-(super-duper-super-duper).<br>
<br>
У-а-о-о!<br>
У-у-у-у-у-у-у-у!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/v1/time-glass/6082-vremya-i-steklo-na-stile-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Фрагмент [Интро 2] похож на "Тараканище" Чуковского:<br>
<br>
Волки на кобыле,<br>
Львы в автомобиле,<br>
Зайчики в трамвайчике,<br>
Жаба на метле, -<br>
<br>
И на детскую считалку:<br>
<br>
...чай пили, чашки били,<br>
По-турецки говорили.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
