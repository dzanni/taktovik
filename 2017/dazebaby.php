<?php
$title = 'Пошлая Молли - Даже моя бейби не знает (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ogeP8z5lwYo'";
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
Папа скажет, почему я плачу, как ёбаная сука!<br>
<br>
<span class='blue'>[Куплет 1] Тк34цмж? - aBCB aDxCD DDDD<br></span>
Я пою этот рэп о любви <br>
В рэп-клубе Detroit Rap City.<br>
Здесь повсюду иконы Slim Shady,<br>
Плюс надпись «Федералы сосите!»<br>
На меня смотрят кенты-и<br>
Улыбаются, как будто все знают.<br>
Они все знают даже то, что<br>
Даже моя baby, даже моя baby,<br>
Даже моя baby не знает, <br>
 В чью страницу я часами залипаю!<br>
Даже моя baby не знает,<br>
Да что-то моя baby не знает,<br>
Даже ФСБ ничего не узнает! <br>
<br>
Даже моя baby!<br>
Даже моя baby!<br>
Даже моя baby!<br>
Даже моя baby!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я пою этот рэп о любви, <br>
И ты понемногу все понимаешь.<br>
Что я пою этот рэп о тебе, <br>
Пока моя baby не подозревает!<br>
Со мной играют типы-и <br>
Улыбаются, как будто все знают.<br>
Они все знают даже то, что<br>
Даже моя baby, даже моя baby,<br>
Даже моя baby не знает, <br>
Чей номер набираю, а потом стираю,<br>
Даже моя baby не знает, <br>
Да что-то моя baby не знает,<br>
Даже ФСБ ничего не узнает!<br>
<br>
Даже моя baby!<br>
Даже моя baby!<br>
Даже моя baby!<br>
Даже моя baby!<br>
<br>
<span class='blue'>[Bridge]<br></span>
Даже моя baby не знает, <br>
Даже моя baby не знает,<br>
Да что-то моя baby не знает, <br>
Даже ФСБ ничего не узнает,<br>
Что я набираю и стираю,<br>
Набираю и стираю, набираю и стираю!<br>
Вот такая вот хуйня, брат! <span class='blue'>(Строка Тк2ж)</span><br>
<br>
<span class='blue'>[Куплет 3] Тк2-4цжм - AbABAbAB<br></span>
Что там даже её mother <br>
Тоже ничего не знает, нет! нет!<br>
Что там даже её sister <br>
Не подозревает!<br>
Что там даже её best friends <br>
Не раскроют мой большой секрет! (большой секрет)<br>
Во всем виновата осень (осень, осень!),<br>
Я как будто sad man!<br>
<br>
Эм-О-Эл-эл-И!<br>
<br>
<span class='blue'><a href="https://genius.com/Poshlaya-molly-even-my-baby-doesnt-know-lyrics"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
