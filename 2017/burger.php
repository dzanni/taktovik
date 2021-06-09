<?php
$title = 'FACE - Бургер (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/yfF0RBxY1PY'";
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

<span class='blue'>[Intro]<br></span>
Еду в магазин Gucci в Санкт-Петербурге (гррра)<br>
Она жрет мой хуй, как будто это бургер (бургер, бургер)<br>
Еду в магазин Gucci в Санкт-Петербурге (гррра)<br>
Она жрет мой хуй, как будто это бургер (бургер, бургер)<br>
Эйй, это Фэйс! <br>
Я лучший рэпер за последние тысячи лет (нахуй их всех)<br>
Я лучше чем Тупак, Бигги, Эминем, <br>
Кендрик, Джей Кол, твой батя и даже Лил Памп!<br>
Эщкере!<br>
<br>
<span class='blue'>[Hook] Тк4ж - AA<br></span>
Еду в магазин Gucci в Санкт-Петербурге (гррра)<br>
Она жрет мой хуй, как будто это бургер (бургер, бургер)<br>
Еду в магазин Gucci в Санкт-Петербурге (гррра)<br>
Она жрет мой хуй, как будто это бургер (бургер, бургер)<br>
Еду в магазин Gucci в Санкт-Петербурге (гррра)<br>
Она жрет мой хуй, как будто это бургер (бургер, бургер)<br>
Еду в магазин Gucci в Санкт-Петербурге (гррра)<br>
Она жрет мой хуй, как будто это бургер (бургер, бургер)<br>
<br>
<span class='blue'>[Verse] Тк4м/ж - aa, AA<br></span>
Еду в магазин Gucci в Санкт-Петербурге (гррра)<br>
Я настолько ебанутый, что лежал в дурке.<br>
Она жрет мой хуй, как будто это бургер (эй)<br>
Деньги синие как смурфы, красные как губы (ну да)<br>
На мне полный зал детей, на тебе пустые клубы!<br>
Я люблю своих людей, как ненавижу твою тупость (тупой)<br>
На лице татуировки (у меня, у меня), пальцы ей в пизду — я ловкий (да-да-да)<br>
Ты базаришь за стрелков, но в школе ты был лохом!<br>
Еду в магазин Gucci в Санкт-Петербурге (гррра)<br>
Gucci Gang, Gucci Squad, нахуй вас, придурки (да-да-да)<br>
Хочешь жить моей жизнью? Я бы так не думал (на-на-на)<br>
Моя жизнь — не сахар, кто вообще ее придумал (ты кто?)<br>
Нахуй твою жизнь, она всяко будет хуже (нахуй-нахуй)<br>
Отъебал ее прям в уши, я люблю поуже (да-да-да-да)<br>
Мои Gucci линзы двадцать тысяч на глазах.<br>
Мир намного ярче через Gucci, это факт (это факт!)<br>
<br>
<span class='blue'><a href='https://genius.com/Face-burger-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
