<?php
$title = 'Олег Кензов - #РакетаБомбаПетарда (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/YkItnbwx1eo'";
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
- Всем девушкам посвящается! Потому что вы ракеты, бомбы, петарды!</span><br>
<br>
<span class='blue'>[Интро]</span><br>
Рррракета, бомба, петарррррррда…<br>
УА, УА! Е!<br>
<br>
<span class='blue'>[Куплет 1] Я5мм - abab</span><br>
А ты опять танцуешь на столе, <br>
Я ничего поделать не могу,<br>
И вся посуда-суда на земле, <br>
И я опять, опять к тебе бегу.<br>
  <div class='refren'>
  <span class='blue'>Я14жм? - AbAb</span><br>
    О, боже,<br>
    Не знаю, что в тебе нашел (я)<br>
    Но все же,<br>
    Когда ты рядом, хорошо!</div>
<br>
<span class='blue'>[Переход] Тк3д/м - A'A'bb</span><br>
А ты четкая, такая четкая, <br>
Такая че, такая че, такая четкая!<br>
А ты четкая, такая че? <br>
(Малышки, а вы такие ниче!)<br>
А ты такая ниче!<br>
<br>
<span class='blue'>[Припев] Л35жд - AAAB'AAAB'</span><br>
Ракета, бомба, петарда. <br>
Мне быть с тобою так надо.<br>
Ракета, бомба, петарда, <br>
Пушка, пушка, пушка, пушка, девочка.<br>
Ракета, бомба, петарда. <br>
Мне быть с тобою так надо.<br>
Ракета, бомба, петарда, <br>
Пушка, пушка, пушка, пушка, девочка.<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
А ты опять взяла мой телефон <br>
И что-то в нем пытаешься найти.<br>
Малышка, я же только твой, камон!<br>
Никто у нас не встанет на пути.<br>
  <div class='refren'>О, боже, <br>
    Ну что ж ты делаешь со мной!<br>
  По коже <br>
  Мурашки от тебя волной.</div>
<br>
<span class='blue'>[Переход]</span><br>
А ты четкая, такая четкая, <br>
Такая че, такая че, такая четкая?<br>
А ты четкая, такая че? <br>
А ты такая ниче!<br>
<br>
<span class='blue'>[Припев]</span><br>
Ракета, бомба, петарда. <br>
Мне быть с тобою так надо.<br>
Ракета, бомба, петарда, <br>
Пушка, пушка, пушка, пушка, девочка.<br>
Ракета, бомба, петарда. <br>
Мне быть с тобою так надо.<br>
Ракета, бомба, петарда, <br>
Пушка, пушка, пушка, пушка, девочка.<br>
<br>
<span class='i'>- Танцуйте! [Неразб.], ты мой звезда!</span><br>
<br>
<span class='blue'>[Переход]</span><br>
А ты четкая, такая четкая, <br>
Такая че, такая че, такая четкая?<br>
А ты четкая, такая че? <br>
А ты такая ниче!<br>
<br>
<span class='blue'>[Припев]</span><br>
Ракета, бомба, петарда. <br>
Мне быть с тобою так надо.<br>
Ракета, бомба, петарда, <br>
Пушка, пушка, пушка, пушка, девочка.<br>
Ракета, бомба, петарда. <br>
Мне быть с тобою так надо.<br>
Ракета, бомба, петарда, <br>
Пушка, пушка, пушка, пушка, девочка.<br>
<br>
<span class='blue'>Источник: официальный текст под клпом Youtube</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
