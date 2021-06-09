<?php
$title = 'Настя Кудри - TAMAGOTCHI (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Txqo4HjI0Kw'";
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

<span class='blue'>[Куплет 1] Тр4цжж? - ABAB<br></span>
Я не сладкая сука! Пацан, не рисуйся!<br>
Скоро взорву, пострадавших не будет.<br>
Я с тобой тупо не стану сюсюкать!<br>
Пускаем по кругу в валюте купюры.<br>
Ты вряд ли смог бы дергать за косы.<br>
Нравятся формы? Не джинсы потрогать!<br>
Нам надо больше, мы всегда готовы.<br>
Нам надо больше, мы всегда готовы.<br>
<br>
<span class='blue'>[Переход] Д4цу1ж/ - AAAA<br></span>
Я знаю, кто я... Я знаю, кто я...<br>
Я знаю, кто я... Я знаю, кто я...<br>
Я знаю, кто я... Я знаю, кто я...<br>
Я знаю, кто я... Я знаю, кто я...<br>
<br>
<span class='blue'>[Припев] Д4ж/ - A<br></span>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
<br>
<span class='blue'>[Куплет 2] Тр4цм/ж? - aa, AA<br></span>
Я знаю, кто я, элементарно!<br>
Или же трабл, это неважно.<br>
[Неразб.] нам дела.<br>
Я живу так, чтобы радовать глаз.<br>
[Неразб.] нельзя потеряться.<br>
Карма - подруга, фортуна - сестра.<br>
Наш оборот уже не засчитать.<br>
На моих коленях уселся сервал.<br>
Все что решаю - приносит мне нал.<br>
На заднем S-классе, куда-то в закат.<br>
За тонировкой не видно лица.<br>
Я улыбаюсь, ведь лето всегда!<br>
Каждый мой день, будто чья-то мечта.<br>
Время летит, это значит пора.<br>
Одета с витрины магаза в Милане.<br>
Сели на VIP на показе в Милане.<br>
Раздаю ссылки, купоны с призами.<br>
<br>
<span class='blue'>[Переход]<br></span>
Я знаю, кто я... Я знаю, кто я...<br>
Я знаю, кто я... Я знаю, кто я...<br>
Я знаю, кто я... Я знаю, кто я...<br>
Я знаю, кто я... Я знаю, кто я...<br>
<br>
<span class='blue'>[Припев]<br></span>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
Глазки не строю, я не Tamagotchi!<br>
<br>
<span class='blue'><a href='https://unotices.com/page-text.php?id=121901'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
