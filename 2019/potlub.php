<?php
$title = 'MOLLY - Потому что любовь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/uUsBGnWG8vo'";
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

<span class='blue'>[Куплет 1] Л2мж - AbAbCCx<br></span>
Я ждала перемен,<br>
Обещая любить, но<br>
Зря я забыла спросить: <br>
«Ты один или с кем-то?»<br>
Теперь поздно!<br>
 Поверь просто! <br>
Видно всё по глазам (А-а!)<br>
<br>
<span class='blue'>[Переход] Л444ц3жм - Xxaa<br></span>
Ладно, по тормозам! Давай, до завтра!<br>
Любовь под кожей, непохоже со мной.<br>
Поезд пустой, я в тебе с головой -<br>
Но не буду, не буду с тобой.<br>
<br>
<span class='blue'>[Припев х2] Д3334м/? - aaaa<br></span>
Ну почему не со мной, <br>
Ну почему ты с другой?<br>
Сделаю вид, что ты мой - <br>
Всё потому, потому что любовь!<br>
<br>
<span class='i'>- Даша, как думаешь, он меня любит?<br>
- Всё может быть!<br></span>
<br>
<span class='blue'>[Куплет 2]<br></span>
Глубже вдох задержу, <br>
На прощанье пошутим.<br>
Я тебе всё расскажу - <br>
Может быть, и отпустит!<br>
Ведь там, где ты,<br>
Там нет черты.<br>
До утра две весны!<br>
<br>
<span class='blue'>[Переход]<br></span>
Ладно, по тормозам! Всё так нескладно!<br>
И день, и ночь хочет чем-то помочь.<br>
Мой фант потерь, он уже у дверей -<br>
Но всё будет, всё будет окей!<br>
<br>
<span class='i'>- Я уезжаю!<br></span>
<br>
<span class='blue'>[Припев х2]<br></span>
Ну почему не со мной, <br>
Ну почему ты с другой?<br>
Сделаю вид, что ты мой - <br>
Всё потому, потому что любовь!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/m/molly/molly-potomu-chto-lubov.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
