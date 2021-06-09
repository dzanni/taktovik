<?php
$title = 'Ленинград - Золото (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/u98m7axPHZM'";
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

<span class='blue'>[Припев] Я3жж - ABAB<br></span>
Все бабы любят бабки,<br>
И, в фитнесе потея,<br>
Наманикюря лапки,<br>
Мы тянем богатея.<br>
<div class='refren'>Все бабы любят бабки<br>
И, в фитнесе потея,<br>
Наманикюря лапки,<br>
Мы тянем богатея.<br>
А-а-а-а,<br>
Мы тянем богатея.<br>
А-а-а-а,<br>
Мы тянем богатея.</div>
<br>
<span class='blue'>[Куплет 1] Дк4ц3мж - aBaB<br></span>
Красота, как известно - это товар<br>
В нашем мире большом капитала.<br>
Как воспел ее в фильмах Альмодовар,<br>
Красота — это то, что с ней стало!<br>
<div class='refren'>
И на рынке услуг конкурентной возни<br>
Через пот тренировок и трений,<br>
Поломав старый мир на пути к новизне<br>
Появляется женский гений.</div>
<br>
<span class='blue'>[Припев]<br></span>
Все бабы любят бабки,<br>
И, в фитнесе потея,<br>
Наманикюря лапки,<br>
Мы тянем богатея.<br>
<div class='refren'>Все бабы любят бабки<br>
И, в фитнесе потея,<br>
Наманикюря лапки,<br>
Мы тянем богатея.<br>
А-а-а-а,<br>
Мы тянем богатея.<br>
А-а-а-а,<br>
Мы тянем богатея.</div>
<br>
<span class='blue'>[Куплет 2] Дк4ц3мм - abab<br></span>
Даже если товарищ в хламину пьяный<br>
Ручищами машет впотьмах,<br>
Ищет жопу, как минимум, он Кардашьян:<br>
Отпечатана жопа в умах<br>
<div class='refren'>Среднестатистических мужчин,<br>
Но мужчина как гиря глуп!<br>
И это — одна из тысяч причин,<br>
Чтобы снова идти в фитнес-клуб.</div>
<br>
<span class='blue'>[Припев]<br></span>
Все бабы любят бабки,<br>
И, в фитнесе потея,<br>
Наманикюря лапки,<br>
Мы тянем богатея.<br>
<div class='refren'>Все бабы любят бабки<br>
И, в фитнесе потея,<br>
Наманикюря лапки,<br>
Мы тянем богатея.<br>
А-а-а-а,<br>
Мы тянем богатея.<br>
А-а-а-а,<br>
Мы тянем богатея.</div>
<br>
<span class='blue'>[Куплет 3]<br></span>
Нагружаясь весами сквозь лишний вес,<br>
Телка к счастью торит дорогу.<br>
И, меняя живот на подтянутый пресс,<br>
За питаньем следит она строго!<br>
<div class='refren'>Потому что война и победа одна,<br>
И она для одной — смерть всем сукам!<br>
И работа ее тяжела, но видна<br>
По налезшему платью и брюкам.</div>
<br>
<span class='blue'>[Припев]<br></span>
Все бабы любят бабки,<br>
И, в фитнесе потея,<br>
Наманикюря лапки,<br>
Мы тянем богатея.<br>
<div class='refren'>Все бабы любят бабки<br>
И, в фитнесе потея,<br>
Наманикюря лапки,<br>
Мы тянем богатея.<br>
А-а-а-а,<br>
Мы тянем богатея.<br>
А-а-а-а,<br>
Мы тянем богатея.</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/s/shnurov-sergey/leningrad-zoloto.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
