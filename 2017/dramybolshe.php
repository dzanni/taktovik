<?php
$title = 'Полина Гагарина - Драмы больше нет (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/GxjcY8nqlhg'";
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

<span class='blue'>[Куплет 1] Тк46цмж - aBaBaсс<br></span>
Дышать тобой до боли, до хрипоты.<br>
Дыханием одним не могу согреться.<br>
И догорают сами собой мосты,<br>
И что-то больно ранило прямо в сердце.<br>
<div class='refren'>Ушли за горизонт наши корабли,<br>
Я подниму над головой белый флаг.<br>
Просто знай, что тебе я не враг. <span class='blue'>(Строка Тк6цм)</span></div>
<br>
<span class='blue'>[Припев] Тк46цжм - AAbb<br></span>
Драмы больше нет! Нет больше драмы.<br>
Время на душе, время на душе лечит раны.<br>
Драмы больше нет. Нету обид.<br>
Больше не болит, больше не болит, больше не болит!<br>
<br>
<span class='blue'>[Куплет 2]:<br></span>
Мы побежим опять по следам своим,<br>
Шагами рассекая прохладный ветер.<br>
Напополам не разделить целый мир.<br>
Ты знаешь, что мы оба с тобой в ответе!<br>
<div class='refren'>Ушли за горизонт наши корабли,<br>
Остались в сердце только кусочки льда.<br>
Но ты знай - я с тобой навсегда!</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Драмы больше нет! Нет больше драмы.<br>
Время на душе, время на душе лечит раны.<br>
Драмы больше нет. Нету обид.<br>
Больше не болит, больше не болит, больше не болит!<br>
<br>
Не болит!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/polina_gagarina_drami_bolshe_net.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
