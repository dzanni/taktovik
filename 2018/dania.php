<?php
$title = 'МС Хованский - Даня, ты в порядке? (Дисс на Поперечного, слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/eqhU3dCqVro'";
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

<span class='i'> - Мне... меня ничо не задевает... Мне нравится смотреть,
  как Хован пытается типа... его, все его соцсети превращаются в попытку меня задеть.
  Мне кажется, это типа, блядь, бред ваще.<br>
  - Скажи, тебя это действительно не задевает?<br>
</span><br>

<span class='blue'>[Куплет 1] Л23ж - AA<br></span>
Заценил видос про тёлку,<br>
А конкретней — про зубную щёлку!<br>
Анус тут же загорелся,<br>
Поперечный запизделся!<br>
Даня твиты удаляет<br>
И себя смешным считает.<br>
Оправданий нам не нужно -<br>
Лучше вместе спросим дружно:<br>
<br>
<span class='blue'>[Припев] Тк2-4цжм AA...x<br></span>
Даня, ты в порядке?<br>
Ты в порядке? Ты в порядке, Даня?<br>
Даня, ты в порядке? <br>
Ты в порядке? Ты в порядке, Даня?<br>
Даня, ты в порядке?<br>
Ты в порядке? Ты в порядке, Даня?<br>
Даня, ты в порядке?<br>
Ты в порядке? Ты в порядке, Даня?<br>
<br>
<span class='blue'>[Куплет 2] Л23ж - AAbbxAxA<br></span>
Даня, ты в порядке?<br>
Ты скажи нам, ты в порядке, Даня?<br>
Пошути про педофилов.<br>
Стало легче? Посмеши дебилов!<br>
Ты любитель жёстких шуток,<br>
Ты попал в свою ловушку, Даня!<br>
Ты хотел отпиздить Принца,<br>
А попал ты в щель между зубами!<br>
<br>
<span class='blue'>[Припев]<br></span>
Даня, ты в порядке?<br>
Ты в порядке? Ты в порядке, Даня?<br>
Даня, ты в порядке? <br>
Ты в порядке? Ты в порядке, Даня?<br>
Даня, ты в порядке?<br>
Ты в порядке? Ты в порядке, Даня?<br>
Тебя выеб, тебя выеб Юра Хован!<br>
<br>
Ау!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Охладить бы твою жопу,<br>
Но не сможет и дворец Ледовый.<br>
Шутник на любые темы?<br>
Лицемер и друг бомжей!<br>
<br>
<span class='blue'>[Припев]<br></span>
Даня, ты в порядке?<br>
Ты в порядке? Ты в порядке, Даня?<br>
Даня, ты в порядке? <br>
Ты в порядке? Ты в порядке, Даня?<br>
Даня, ты в порядке?<br>
Ты в порядке? Ты в порядке, Даня?<br>
Даня, ты в порядке?<br>
Ты в порядке? Ты в порядке, Даня?<br>
<br>
<span class='blue'>[Куплет 4]<br></span>
Даня, ты в порядке?<br>
Ты скажи нам, ты в порядке, Даня?<br>
Даня записал видосик,<br>
Сидит ноет объебосик Даня!<br>
Даня переводит стрелки,<br>
Очень любит попизделки Даня!<br>
Ты хотел быть Луй Си Кеем,<br>
А стал на Клик-Клаке геем, Даня!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Даня, ты в порядке?<br>
Ты в порядке? Ты в порядке, Даня?<br>
Тебя выеб, тебя выеб Юра Хован!<br>
<br>
Original track: Michael Jackson - Smooth Criminal<br>
<br>
<span class='blue'><a href='https://genius.com/Mc-hovansky-danya-are-you-okay-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
