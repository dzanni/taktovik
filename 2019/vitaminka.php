<?php
$title = 'Тима Белорусских - Витаминка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/zn0XeYg0hIs'";
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

<span class='blue'>[Куплет 1] Тк4цмм - abab<br></span>
Так беззаботно уходит вдаль<br>
Наша с тобой жизнь одна на двоих.<br>
Я прошу об одном, только не забывай<br>
Обо мне, как мы с тобой о всех остальных.<br>
<div class='refren'><span class='blue'>Тк2м/? - xaabb<br></span>
  Провожая печаль, <br>
Мы просто мило молчим,<br>
Просто и без причин, <br>
Ссылаясь на нет.<br>
И в этот момент</div>
<br>
<span class='blue'>[Припев х2] Ак4цж/ - AA<br></span>
Но все мои сюжеты по твоим картинкам.<br>
Девочка — разноцветная витаминка.<br>
Сегодня я буду любить тебя сильно,<br>
Пока в моей голове действие витамина.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Мой иммунитет стабилен из-за тебя,<br>
Из-за тебя стал ровно дышать.<br>
Так что теперь от тебя ни на шаг,<br>
Чтобы не волновалась душа. <span class='blue'>(Строка Тк3м)<br></span>
<div class='refren'><span class='blue'>Тк4цж/ - AA<br></span>
Да, бывали дни, когда нам было трудно,<br>
Как минимум потому что было не обоюдно.<br>
Но мы доплыли, по пути на дно тянуло судно.<br>
Такое вряд ли я забуду, и без фальши, <br>
Пускай наивно до жути, просто шагаем дальше, <br>
Зная, все будет лучше. <span class='blue'>(Строка Тк2ж)<br></span>
Все остальное пускай решит случай.<br>
Ты только мне скажи, если я стану скучным.<br>
И в этот момент</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Но все мои сюжеты по твоим картинкам.<br>
Девочка — разноцветная витаминка.<br>
Сегодня я буду любить тебя сильно,<br>
Пока в моей голове действие витамина.<br>
<br>
<span class='blue'><a href='https://genius.com/Tima-belorusskih-vitamin-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
