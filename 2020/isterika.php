<?php
$title = 'Karna.val - Истерика (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/G-BjWEEw5Fs'";
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

<span class='blue'>[Интро]</span><br>
Мама, я хочу тебе кое-что рассказать. Слушаешь?<br>
<br>

<span class='blue'>[Куплет 1] Тк2мм? - abab</span><br>
Потеряла аппетит, <br>
Не хочу гулять.<br>
Когда он снова не звонит, <br>
Не нахожу себя.<br>
  <div class='refren'>Не знаю, как бы намекнуть<br>
  О том, что невзначай <br>
  Сердце моё пронзил Амур,<br>
  И хочется кричать</div>
О том, что там внутри, <br>
Стучит так тяжело,<br>
О том, что мой хрустальный мир <br>
Теперь занят тобой.<br>
  <div class='refren'>Мамуль, ну как привлечь <br>
  Внимание его?<br>
  Это большой секрет (Тшш) <br>
  Его зовут Е... (Тссс!) его зовут (Да)</div>
<br>
<span class='blue'>[Припев] Тк2221мд? - aB'aB'</span><br>
Мама, я влюблена!<br>
Это временно!<br>
Он смотрит на меня — <br>
Истерика!<br>
  <div class='refren'>Мама, я влюблена!<br>
  Что же делать нам?<br>
  Он смотрит на меня — <br>
  Истерика!</div>
<br>
<span class='blue'>[Пост-припев] Л4цж/? - AAX'Ax</span><br>
ПА-па-па-пА-ра-па, па-па-Па-ра-пА-ра, <br>
УА-па-па-пА-ра-па, па-па-Па-ра-пА-ра.<br>
Истерика!<br>
ПА-па-па-пА-ра-па, па-па-Па-ра-пА-ра, <br>
УА-па-па-пА-ра, па-рА! <span class='blue'>(Строка Л3м)</span><br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Когда я рядом с ним, <br>
Время бежит быстрей (Тик-так)<br>
Гуляли по Москве (Вдвоём)<br>
Вдвоём встречать рассвет.<br>
  <div class='refren'>От камер новостей <br>
  С тобою убегу.<br>
  Мы скроемся от всех (Да) <br>
  Нас всё равно найдут (Вот, блин)</div>
Он пальцем выводил <br>
Моё имя на песке (Моё)<br>
Мама, волнуюсь я, <br>
Где сейчас и с кем (Не знаю)<br>
  <div class='refren'>Но кто девочка с картинки, <span class='blue'>(Строка Тк2ж)</span><br>
  Он так и не сказал!<br>
  Мой плюшевый медведь — <br>
  Его зовут Потап (Он один такой)</div>
<br>
<span class='blue'>[Припев х2]</span><br>
Мама, я влюблена!<br>
Это временно!<br>
Он смотрит на меня — <br>
Истерика!<br>
  <div class='refren'>Мама, я влюблена!<br>
  Что же делать нам?<br>
  Он смотрит на меня — <br>
  Истерика!</div>
<br>
<span class='blue'>[Пост-припев]</span><br>
ПА-па-па-пА-ра-па, па-па-Па-ра-пА-ра, <br>
УА-па-па-пА-ра-па, па-па-Па-ра-пА-ра.<br>
Истерика!<br>
ПА-па-па-пА-ра-па, па-па-Па-ра-пА-ра, <br>
УА-па-па-пА-ра, па-рА!<br>
  <br>
<span class='blue'>[Аутро]</span><br>
Мама, я влюблена —   <br>
Это навсегда!<br>
  <br>
<span class='blue'><a href='https://genius.com/Karnaval-ru-hysterics-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
