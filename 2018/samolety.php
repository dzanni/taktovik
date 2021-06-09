<?php
$title = 'Леша Свик - Самолеты (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Crpoldg7d6s'";
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

<span class='blue'>[Куплет 1] Л4цм - AA<br></span>
Пристегни ремни, нам пора взлетать.<br>
Знаешь, это так легко - что-то снова отпускать!<br>
Думать, что другой город порешал<br>
Все мои проблемы, зная, что это не так.<br>
<br>
<span class='blue'>[Переход] Я4м - abab<br></span>
Я так хотел к тебе назад, <br>
Но так боялся высоты.<br>
Как же я долго-долго ждал, <br>
Как же я много-много пил!<br>
<div class='refren'>
Кто кого чаще предавал, <br>
Когда находимся вдали?<br>
Как же я долго-долго ждал,<br>
Как же я много-много пил!</div>
<br>
<span class='blue'>[Припев х2] Л4цж? - AA<br></span>
В небесах самолёты, само-самолеты.<br>
Вечно улетаем - врём, что ненадолго.<br>
Сядем вновь в самолёты, само-самолеты.<br>
Где тебя найти, вряд ли скажут мне пилоты.<br>
<br>
<span class='blue'>[Бэк-вокал]<br></span>
Само-самолёты, само-самолёты, само-самолёты.<br>
Само-самолёты, само-самолёты, само-самолёты.<br>
<br>
<span class='blue'>[Куплет 2] Тк4цж - AA<br></span>
Когда к твоим губам я прикасался губами,<br>
Все самолёты, как один, легко разбивали.<br>
Я им так запрещал делить тебя с облаками -<br>
И как они знали, как они знали?<br>
<br>
<span class='blue'>[Переход x2]<br></span>
Побереги свои глаза <br>
И не смотри на мой полёт.<br>
Видишь, я вольным-вольным стал. <br>
Благодарю тебя за всё!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
В небесах самолёты, само-самолеты.<br>
Вечно улетаем - врём, что ненадолго.<br>
Сядем вновь в самолёты, само-самолеты.<br>
Где тебя найти, вряд ли скажут мне пилоты.<br>
<br>
<span class='blue'>[Бэк-вокал]<br></span>
Само-самолёты, само-самолёты, само-самолёты.<br>
Само-самолёты, само-самолёты, само-самолёты.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/s/svik-lesha/lesha-svik-samoleti.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
