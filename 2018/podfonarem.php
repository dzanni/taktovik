<?php
$title = 'RASA - Под фонарем (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/OmRlWnZdG2c'";
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

<span class='blue'>[Припев х2: Дарья Шейко & Виктор Поплеев] Тк23м - aaaa<br></span>
Танцы под фонарём, <br>
Музыка так орёт!<br>
Скорость спать не даёт, <br>
Мы убитые вдвоём!<br>
<br>
<span class='blue'>[Куплет 1: Дарья Шейко & Виктор Поплеев] Л24цм? - abab<br></span>
Я дыханье задержу (задержу)<br>
И на миг притворюсь твоей душой.<br>
И в сознаньи я хочу (я хочу)<br>
Каждый миг рисовать рядом с тобой!<br>
<div class='refren'>
    <span class='blue'>Л4цжм - AAbbAAbb<br></span>
А губы, губы, губы, губы, губы, твои губы!<br>
Дай мне минуту, дабы выводы обдумать.<br>
Чё тут думать? Надо брать!<br>
Брать тебя, брать тебя, брать тебя, брать!<br>
А губы, губы, губы, губы, губы, твои губы!<br>
Мало пополам нам будет это утро.<br>
Чё нам будет? Надо брать!<br>
Брать надо, брать надо, брать надо, брать!<br>
<br>
<span class='blue'>[Переход х2: Дарья Шейко & Виктор Поплеев] Тк2м - aaaa<br></span>
В этой комнате вдвоём<br>
 Друг другу поём.<br>
Громче звук, стук, звон, <br>
Музыка на весь район.<br>
<br>
<span class='blue'>[Припев х2: Дарья Шейко & Виктор Поплеев]<br></span>
Танцы под фонарём, <br>
Музыка так орёт!<br>
Скорость спать не даёт, <br>
Мы убитые вдвоём!<br>
<br>
<span class='blue'>[Куплет 2: Виктор Поплеев] Тк2м - abababb<br></span>
Ты внутри моей души,<br>
Каждый миг - он на тебе.<br>
И вновь Вселенная спешит,<br>
Мы словно на корабле.<br>
Иммунитет мой нерушим, <br>
Но пульс на нуле!<br>
На нуле, да-да, на нуле! <span class='blue'>(Строка Тк3м)<br></span>
<br>
<span class='blue'>[Переход х2: Дарья Шейко & Виктор Поплеев]<br></span>
В этой комнате вдвоём<br>
 Друг другу поём.<br>
Громче звук, стук, звон, <br>
Музыка на весь район.<br>
<br>
<span class='blue'>[Припев х4: Дарья Шейко & Виктор Поплеев]<br></span>
Танцы под фонарём, <br>
Музыка так орёт!<br>
Скорость спать не даёт, <br>
Мы убитые вдвоём!<br>
<br>
<span class='blue'>[Аутро х2: Виктор Поплеев]<br></span>
Танцы под фонарём, <br>
Музыка так орёт!<br>
Скорость спать не даёт, <br>
Мы убитые вдвоём!<br>
<br>
<span class='blue'><a href='https://genius.com/Rasa-russia-under-spotlight-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
