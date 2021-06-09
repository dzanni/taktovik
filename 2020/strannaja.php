<?php
$title = 'Владимир Пресняков - Странная (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/hMwSoFyVFtk'";
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
<span class='blue'>[Куплет 1] Л2ммж - abCabC</span><br>
Там, где прячется день <br>
За нашим окном<br>
И мир такой влюбленный,<br>
Мы лиловый рассвет <br>
Смешали со льдом,<br>
И пусть бушуют волны!<br>
  <div class='refren'>
  <span class='blue'>Л24цмм? - aabaab</span><br>
  Далеко-далеко <br>
  Все проблемы веков,<br>
  И я хочу поскорей тебя обнять.<br>
  И ты танцуешь, любовь,<br>
  Со мной сегодня,<br>
  И только для меня.</div>
<br>
<span class='blue'>[Припев] Тк4цдм - A'bA'b</span><br>
Какая ты странная, странная, странная!<br>
Невыносимая, но вся моя.<br>
А в сердце останется самое главное -<br>
Что в этом мире только ты и я.<br>
  <div class='refren'>Какая ты странная, странная, странная!<br>
  Танцуй, танцуй у неба на краю!<br>
  А в песне останется самое главное -<br>
  Что я тебя сильнее всех люблю.</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Между мной и тобой <br>
Свободный полет,<br>
Быстрое теченье.<br>
Мы летим высоко <br>
И только вперед<br>
Без правила движенья.<br>
  <div class='refren'>Глубоко-глубоко, <br>
  Почему так легко<br>
  От улыбки твоей, мне не понять!<br>
  И ты танцуешь, любовь, <br>
  Со мной сегодня<br>
  И только для меня.</div>
<br>
<span class='blue'>[Припев х2]</span><br>
Какая ты странная, странная, странная!<br>
Невыносимая, но вся моя.<br>
А в сердце останется самое главное -<br>
Что в этом мире только ты и я.<br>
  <div class='refren'>Какая ты странная, странная, странная!<br>
  Танцуй, танцуй у неба на краю!<br>
  А в песне останется самое главное -<br>
  Что я тебя сильнее всех люблю.</div>
  <br>
<span class='i'>
- Танцуй, танцуй у неба на краю!  <br>
  А в песне останется самое главное...  <br>
- Так, ну чо, еще дубль [неразб.] делаем? Или достаточно уже?  <br>
-  ...Что я тебя сильнее всех люблю...  <br>
- [Неразб.]  <br>
</span>
  <br>
<span class='blue'><a href='https://text-pesni.com/pesnya/pokazat/565692618/vladimir-presnyakov/tekst-perevod-pesni-strannaya/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Анжамбеман (enjambement, т.е. фонетический разрыв слова):<br>
<br>
Далеко-далеко <br>
Все проблемы веков,<br>
И я хочу поскорей тебя обнять.<br>
И ты танцуешь, любовь,<br>
Со мной <span class='bold'>сего-<br>
дня</span>, и только для меня.<br>
<br>
UU-UU- <br>
UU-UU-<br>
UU-UU- U-U-<br>
UUU-UU-<br>
U-<span class='bold'>U-<br>
U</span>U-U-U-<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
