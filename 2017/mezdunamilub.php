<?php
$title = 'SEREBRO - Между нами любовь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/qDZLDcex9uk'";
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

<span class='blue'>[Куплет 1: Ольга и Екатерина] Дк3жм? - AAAAbbA<br></span>
Я не держусь руками, <br>
За тобой, как за облаками.<br>
Я кусаю губами небо <br>
И тебя обнимаю<br>
Тут на высоте можно всё,<br>
Даже больше ещё.<br>
Я себя, я себя поджигаю, о-оу...<br>
<br>
На полпути теряя,<br>
Ты меня дождись, повторяю.<br>
Твои стихи надевая <br>
На себя, я в них утопаю.<br>
Тут на высоте можно всё, <br>
Знаю, что нас несёт.<br>
Я тебя, я тебя догоняю, о-оу...<br>
<br>
<span class='blue'>[Припев: SEREBRO] Л23м - аааа<br></span>
Между нами любовь!<br>
 Между нами любовь!<br>
Между нами любовь! <br>
Вот такая, вот такая любовь!<br>
Между нами любовь!<br>
 Между нами любовь!<br>
Между нами любовь! <br>
Вот такая, вот такая любовь!<br>
<br>
<span class='blue'>[Куплет 2: Ольга и Полина] Дк3жм? - AAAAbbb<br></span>
Мы ливнем падали в лето - <br>
Это было ярким моментом.<br>
В обрывке сна то, что где-то <br>
Помнят только наши рассветы. <br>
Может, мы ошиблись с тобой?<br>
Я в тебе с головой...<br>
Ты меня, ты меня успокой, о-оу...<br>
<br>
Ты, как всегда, потянешь <br>
За рукав меня и заглянешь<br>
В мои глаза и обманешь - <br>
Просто так со мной ты играешь.<br>
Может, мы ошиблись с тобой? <br>
Градус на нулевой.<br>
Навсегда, навсегда я с тобой, о-оу...<br>
<br>
<span class='blue'>[Припев: SEREBRO]<br></span>
Между нами любовь!<br>
 Между нами любовь!<br>
Между нами любовь! <br>
Вот такая, вот такая любовь!<br>
Между нами любовь! <br>
Между нами любовь!<br>
Между нами любовь! <br>
Вот такая, вот такая любовь!<br>
<br>
Музыка: Максим Фадеев<br>
Слова: О. Серябкина<br>
<br>
<span class='blue'>Источник: расшифровка клипа</span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
