<?php
$title = 'Ольга Бузова - Люди не верили (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/K16fOK8h5sU'";
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

<span class='blue'>[Куплет 1] Ан2м? - aa</span><br>
Научиться любить, <br>
Свою боль отпустить.<br>
Пусть опять ошибусь,<br>
Но назад я не вернусь. <span class='blue'>(Строка Дк3м)</span><br>
Разные адреса, <br>
Важным быть перестал.<br>
От тебя спасена, <br>
Всё на свОих местах.<br>
<br>
<span class='blue'>[Переход] Тк4цм - aaaa</span><br>
Пусть кто-то скажет, мы уже не те.<br>
Сама я разберусь в своей судьбе.<br>
Слова не о любви прощу тебе.<br>
Я стану сильней, я стану сильней-ей.<br>
<br>
<span class='blue'>[Припев х2] Тк4ц4дм - AbAb</span><br>
А люди не верили, что крылья ангелы<br>
Расправят и улетят в облака.<br>
Упавшие ангелы с новыми силами<br>
Поднимутся в небеса, в небеса.<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
По следам пустоты<br>
Жизнь разводит мосты.<br>
После нашей любви<br>
Вдалеке твои шаги. <span class='blue'>(Строка Дк3м)</span><br>
Удалить номера, <br>
Накрывает волна.<br>
Даже если сама, <br>
Без тебя я смогла.<br>
<br>
<span class='blue'>[Переход]</span><br>
Пусть кто-то скажет, мы уже не те.<br>
Сама я разберусь в своей судьбе.<br>
Слова не о любви прощу тебе.<br>
Я стану сильней, я стану сильней-ей.<br>
<br>
<span class='blue'>[Припев х2]</span><br>
А люди не верили, что крылья ангелы<br>
Расправят и улетят в облака.<br>
Упавшие ангелы с новыми силами<br>
Поднимутся в небеса, в небеса.<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/o1/buzovaolga/7129-oljga-buzova-lyudi-ne-verili-text-pesni.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
