<?php
$title = 'Марьяна Ро - Мега-звезда (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/JfWA0kJqDl4'";
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

<span class='blue'>[Куплет 1] Тк4цм/ж - aa, AA<br></span>
Я дую свои губки, я крашу свои реснички,<br>
Заплетаю я самые красивые косички.<br>
Не читаю романы, мне и так нормально.<br>
Любимая картина - это зеркало в ванной.<br>
И смотрю третий час, я нереально крута!<br>
Жую свою жвачку, инстаграмлю кота.<br>
Я листаю телефончик, все, кроме меня - не очень.<br>
Нам не о чем болтать, если ты меня не хочешь!<br>
<br>
<span class='blue'>[Припев] Л21м - aa<br></span>
Я мега-звезда! Звезда!<br>
Я мега-звезда! Звезда!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Одеваю каблучки и юбочку покороче,<br>
Ароматные духи, музычку погромче!<br>
Я иду на работу и все смотрят на меня.<br>
Не знаю, кем работаю, но это не беда!<br>
Я красотка на стиле, лучшая чикуля,<br>
Знаю каждую тусовку, там меня так любят<br>
За мои обалденные большие глаза.<br>
Отойди если ты не знаешь, что мне сказать!<br>
<br>
<span class='blue'>[Припев]<br></span>
Я мега-звезда! Звезда!<br>
Я мега-звезда! Звезда!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Да я устала, что в голове так мало,<br>
Я чуть меньше плясала и побольше почитала.<br>
Гуляла и дышала, мечтала и улыбалась.<br>
И другая красота сама меня украшала.<br>
Мой секрет очень прост - быть только собой,<br>
Ни на кого непохожей, если надо смешной.<br>
И не такой, как с обложек — это совсем не сложно!<br>
В настоящую меня влюбляется любой прохожий.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я мега-звезда! Звезда!<br>
Я мега-звезда! Звезда!<br>
Я мега-звезда! Звезда!<br>
Я мега-звезда! Звезда!<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/m1/marjyana-ro/9588-marjyana-ro-fatcat-megazvezda-text-pesni.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
