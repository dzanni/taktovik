<?php
$title = 'Соня Таюрская - Самоизоляция (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/E4TScvoxprw'";
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

<span class='i'>[Расшифрована только песня, анонс "Карантиновидения" пропущен] <br></span>
 <br>

<span class='blue'>[Куплет 1] Тк3-6цм/ - aaaa<br></span>
Я в четырех стенах заточена,<br>
Полки моей души пусты, и я совсем одна.<br>
Одиночество - вирус, и я заражена,<br>
И я хочу начать всё с чистого листа.<br>
<br>
<span class='blue'>[Переход] Тк2жж? - ABA'B, AAXA<br></span>
Вокруг все носят маски,<br>
Я не доверяю людям.<br>
Между нами дистанция:<br>
Пойми, так лучше будет!<br>
  <div class='refren'>
  Меня терзают муки,<br>
  Одиночество - сука!<br>
  Я устала бороться,<br>
  Я умываю руки!</div>
<br>
<span class='blue'>[Припев] Тк24цд - A'bA'bb<br></span>
Самоизоляция! (ия!)<br>
Я самоизлированная, изолированная я!<br>
Самоизоляция! (ия!)<br>
Я самоизлированная, изолированная я!<br>
Я самоизолированна-я! <span class='blue'>(Строка Тк3м)<br></span>
 <br>
<span class='blue'>Источник: расшифровка фонограммы клипа</span><br>
<br>
<br>
P.S. Стартовая песня проекта группы Little Big "Карантиновидение-2020".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
