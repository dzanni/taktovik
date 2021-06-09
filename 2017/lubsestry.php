<?php
$title = 'Пошлая Молли - Любимая песня твоей сестры (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/itKsZDpIxx4'";
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

<span class='blue'>[Припев] Л4ц1дж? - A’BA’B<br></span>
Я очень рад, что ты раздеваешься, <br>
Потому что,<br>
Потому, что ты одеваешься <br>
В хуй пойми что.<br>
<br>
<span class='blue'>[Куплет 1] Л3м/2д - aA'aaA'A'<br></span>
Мне стыдно с тобой гулять,<br>
Ты сумасшедшая,<br>
ЦеловалА асфальт,<br>
ПерепутАл кровать,<br>
Трахнул на маминой -<br>
Это не правильно!<br>
<br>
<span class='blue'>[Переход] Дк2м - aa<br></span>
В горле ком,<br>
Объяснюсь потом.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я очень рад, что ты раздеваешься, <br>
Потому что,<br>
Потому, что ты одеваешься <br>
В хуй пойми что.<br>
<br>
<span class='blue'>[Куплет 2] <br></span>
Сколько можно тАнцевать?<br>
Ты бесконечная - <br>
Нюхать, не спать, не спать!<br>
Перестал тебя пАнимать,<br>
Плачешь без повода - <br>
Ты еще та пизда!<br>
<br>
<span class='blue'>[Переход]<br></span>
В горле ком,<br>
Объяснюсь потом.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я очень рад, что ты раздеваешься, <br>
Потому что,<br>
Потому, что ты одеваешься <br>
В хуй пойми что.<br>
<br>
<span class='blue'>[Куплет 3] <br></span>
Мне стыдно с тобой гулять,<br>
Ты сумасшедшая, <br>
ЦеловалА асфальт.<br>
Как это пАнимать,<br>
Как это пАнимать?<br>
<br>
<span class='blue'>[Припев]<br></span>
Я очень рад, что ты раздеваешься, <br>
Потому что,<br>
Потому, что ты одеваешься <br>
В хуй пойми что.<br>
<br>
<span class='blue'>[Куплет 4] <br></span>
Мне стыдно с тобой гулять,<br>
Ты сумасшедшая, <br>
ЦеловалА асфальт.<br>
Как это пАнимать,<br>
Как это пАнимать?<br>
Как это пАнимать?<br>
<br>
(Всё, всё, всё!)<br>
<br>
Слова и музыка: Кирилл Бледный<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/p/poshlaya_molly/lubimaya_pesnya_tvoei_sestri.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
