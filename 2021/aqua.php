<?php
$title = 'Александр Гудков - Аквадискотека (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/jKw3n1Gsrtw'";
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

<span class='blue'>[Интро] </span><br>
Аква-диско-тека!<br>
<br>
<span class='blue'>[Припев] Х3ж/ж - AABB</span><br>
Аквадискотека, <br>
Аквадискотека!<br>
Царь среди досуга,<br>
Здесь мне будет супер!<br>
  <div class='refren'>Аквадискотека, <br>
  Аквадискотека!<br>
  Здесь я к слову "супер"<br>
  Добавляю "пупер"!</div>
<br>
<span class='blue'>[Куплет] Тк4цм/ж - аа, AA</span><br>
Ты зовёшь меня в кино и пропустить по бокалу.<br>
Зовёшь вдыхать кальянный дым, чиллить на покрывале,<br>
Смотреть над морем закат в мраморном будуаре.<br>
Ты просто не понимаешь, это супербанально!<br>
Я дико зеваю в саду земных наслаждений.<br>
Я как дельфин, я гений, отведал всех развлечений!<br>
Я многое видел, даже за гранью бытия.<br>
Чтоб не тухло либидо, нужна мощная струя!<br>
<br>
<span class='blue'>[Бридж: Александр Гудков]</span><br>
Аква-диско-тека (У-у-у-у-у!)<br>
Аква-диско-тека!<br>
<br>
<span class='blue'>[Припев [2]]</span><br>
Аквадискотека, <br>
Аквадискотека!<br>
Царь среди досуга,<br>
Здесь мне будет супер!<br>
  <div class='refren'>Аквадискотека, <br>
  Аквадискотека!<br>
  Здесь я к слову "супер"<br>
  Добавляю "пупер"!</div>
<br>
Музыка: Cream Soda<br>
  <br>
  <span class='blue'><a href='https://genius.com/Alexander-gudkov-aquadiscoteka-lyrics'
    target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Песня навеяна расследованием Алексея Навального
<a href='https://youtu.be/ipAnwilMncI' target="_blank">"Дворец для Путина.
  История самой большой взятки"</a>, вышедшего
19 января 2021 г. Среди объектов дворца в расследовании упоминаются кальянная, шест для
эротических танцев и аквадискотека.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
