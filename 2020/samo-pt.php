<?php
$title = 'Пающие трусы - Самоизоляция (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/zMEdXSf8wXw'";
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
  - Все нормально, дубль четыре, проба. Проба, бля!</span><br>
<br>
<span class='blue'>[Куплет 1] Я5дм? - A'A'A'bA'A'A'b</span><br>
А за окном уже цветёт акация,  <br>
Она от нас на самоизоляции.  <br>
Устали мы, бля, без эякуляции  <br>
Трахаться онлайн-креатив. <span class='blue'>(Строка неточный Х5м)</span><br>
  <div class='refren'>Хоть на душе весенние вибрации,  <br>
  Быть не с тобою имею мотивацию.  <br>
  Забыла как включать сигнализацию,  <br>
  А на экране - твой презерватив!  </div>
  <br>
<span class='blue'>[Припев] Я24мж? - aBaBCC</span><br>
Ай-яй-яй-яй!  <br>
Какой подлец коронавирус!  <br>
Ай-яй-яй-яй!  <br>
Мне так страдать не приходилось!  <br>
Ай-яй-яй-яй!  <br>
Я так хочу и всё, и сразу: <br>
Твою любовь и нефтебазу!  <br>
  <br>
<span class='blue'>[Куплет 2]</span><br>
А за окном уже цветёт акация,  <br>
Моя и твой ещё на реставрации.  <br>
Все говорят, что это провокация,  <br>
В крови один сплошной адреналин.  <br>
  <div class='refren'>А на душе весенние вибрации.  <br>
  Как надоела, бляха, мастурбация!  <br>
  Я жду, когда произойдёт ротация  <br>
  И апробация других мужчин.  </div>
  <br>
<span class='blue'>[Припев]</span><br>
Ай-яй-яй-яй!  <br>
Какой подлец коронавирус!  <br>
Ай-яй-яй-яй!  <br>
Мне так страдать не приходилось!  <br>
Ай-яй-яй-яй!  <br>
Я так хочу и всё, и сразу: <br>
Твою любовь и нефтебазу!  <br>
  <br>
<span class='blue'>[Аутро]</span><br>
Уа, пацаны! Сиди дома, не гуляй!  <br>
Оп-оп-оп-оп!  <br>
То!<br>
  <br>
<span class='blue'><a href='https://on-hit.ru/texts/pajushhie-trusy-samoizoljacija/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
