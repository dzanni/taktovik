<?php
$title = 'Radio Tapok & Батя - Old Town Road (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/bF1qc26DSo0'";
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

<span class='blue'>[Припев] Тк4цм/ - aa</span><br>
Еа, вдоль городских дорог, приминая снег,<br>
Я буду мчать на своём коне.<br>
Вдоль городских дорог, приминая снег,<br>
Я буду мчать на своём коне.<br>
<br>
<span class='blue'>[Куплет 1: Radio Tapok] Тк2м/? - aa</span><br>
Мои лошадки позади, <br>
Цепи на груди,<br>
Чёрный балахон, <br>
На ногах ботинки в тон.<br>
Мой скакун хорош, <br>
Заводи свой Porsche!<br>
Я оставлю в зеркалах <br>
Ухмылку твоей рожи! <span class='blue'>(Строка Тк2ж)</span><br>
<br>
<span class='blue'>[Распевка х2] Тк3ж/ - aa</span><br>
Что же ты хотел сказать мне?<br>
Что ты хотел сказать мне?<br>
<br>
<span class='blue'>[Куплет 2: Батя] Тк2ж/ - AA</span><br>
Под ногами трактор,<br>
Стальной характер,<br>
Пиво греет душу, <br>
Просится наружу,<br>
Жизнь словно родео<br>
В разгар посева,<br>
На рубаху свитер <br>
Прикупил в «Магните».<br>
<br>
<span class='i'>- Слышь, почём аппарат? А ты, это, в карты играешь?<br></span>
<br>
<span class='blue'>[Распевка х2]</span><br>
Что же ты хотел сказать мне?<br>
Что ты хотел сказать мне?<br>
<br>
<span class='blue'>[Припев]</span><br>
Еа, вдоль городских дорог, приминая снег,<br>
Я буду мчать на своём коне.<br>
Вдоль городских дорог, приминая снег,<br>
Я буду мчать на своём коне.<br>
<br>
<span class='blue'>[Куплет 3: Radio Tapok] Тк2м/жм - aaXa</span><br>
Угар достал, <br>
Я живу как рок-стар,<br>
Снова слил кучу денег <br>
На покупку гитар,<br>
  <div class='refren'>Поскорей домой бы, приминая снег,<br>
  Где буду мчать на своём коне.</div>
<br>
<span class='blue'>[Припев: x3]</span><br>
Еа, вдоль городских дорог, приминая снег,<br>
Я буду мчать на своём коне.<br>
Вдоль городских дорог, приминая снег,<br>
Я буду мчать на своём коне.<br>
  <br>
<span class='blue'><a href='https://ru.musinfo.net/lyrics/radio-tapok/old-town-road-lil-nas-x-cover'
  target='_blank'>Источник</a></span><br>
<br>
<br>
Lil Nas X cover. <br>
<br>
N.B. Рифма м=ж: "Porshe [порш] - рожи" ("ш" после "р" используется как слоговая согласная).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
