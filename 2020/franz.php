<?php
$title = 'Миша Марвин & Ханна - Французский поцелуй (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/IYbvwzJMjw4'";
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

<span class='blue'>[Припев, Миша Марвин] Х4м/м - aabb</span><br>
Твой французский поцелуй -<br>
Ты целуй меня, целуй!<br>
Твои губы, как цветы<br>
С ароматами весны.<br>
  <div class='refren'>Твой французский поцелуй -<br>
  Ты целуй меня, целуй!<br>
  Ведь когда были вдвоём,<br>
  Мне казалось — я влюблён.</div>
<br>
<span class='blue'>[Куплет 1, Миша Марвин] Я3322м/д - aaB'B'</span><br>
Скажи, ну, как ты там? <br>
Ну, как твои дела?<br>
Давно не слышались, <br>
Давно не виделись.<br>
  <div class='refren'>
    <span class='blue'>Я32мд - aB'aB'</span><br>
  Твоя другая жизнь <br>
  За океанами -<br>
  А я смотрю, как здесь <br>
  Все ходят парами.</div>
<span class='blue'>Дв4м/ж - aaBB</span><br>
А помнишь, как любили мы? (любили мы)<br>
Как дарил тебе цветы?<br>
Как любил тебя ночами, <br>
И соседи нам стучали?<br>
    <div class='refren'>
    <span class='blue'>Я3м/м? - aabb</span><br>
    Я помню каждый день,<br>
    Каждую ночь с тобой.<br>
    Сладкий вкус твоих губ<br>
    Останется со мной!</div>
<br>
<span class='blue'>[Припев, Миша Марвин & Ханна]</span><br>
Твой французский поцелуй -<br>
Ты целуй меня, целуй!<br>
Твои губы, как цветы<br>
С ароматами весны.<br>
  <div class='refren'>Твой французский поцелуй -<br>
  Ты целуй меня, целуй!<br>
  Ведь когда были вдвоём,<br>
  Мне казалось — ты влюблён.</div>
<br>
<span class='blue'>[Куплет, Ханна & Миша Марвин] Я3м/мм? - aaxa</span><br>
Привет, ну, как ты там?<br>
Ну, как твои дела?<br>
Ты, если что, прости, <br>
Если обиделА.<br>
  <div class='refren'>Судьба решила так. <br>
  Пришлось сказать: Пока!<br>
  Но просится к тебе<br>
  Опять моя душа.</div>
Я помню, как любили мы (любили мы)<br>
Как дарил ты мне цветы (цветы)<br>
Твои песни на гитаре,<br>
И соседи нам кричали.<br>
    <div class='refren'>Да, да, я помню всё,<br>
    Хоть рядом нет тебя.<br>
    Последний поцелуй<br>
    В душе моей всегда.</div>
<br>
<span class='blue'>[Припев, Миша Марвин & Ханна]</span><br>
Твой французский поцелуй -<br>
Ты целуй меня, целуй!<br>
Твои губы, как цветы<br>
С ароматами весны.<br>
  <div class='refren'>Твой французский поцелуй -<br>
  Ты целуй меня, целуй!<br>
  Ведь когда были вдвоём,<br>
  Мне казалось — ты влюблён.</div>
<br>
<span class='blue'>[Переход, Миша Марвин] Х2м/ - aaxaa</span><br>
Поцелуй!<br>
Ты целуй!<br>
О-о-о!<br>
Поцелуй!<br>
Ты целуй!<br>
<br>
<span class='blue'>[Припев х2, Миша Марвин & Ханна]</span><br>
Твой французский поцелуй -<br>
Ты целуй меня, целуй!<br>
Твои губы, как цветы<br>
С ароматами весны.<br>
  <div class='refren'>Твой французский поцелуй -<br>
  Ты целуй меня, целуй!<br>
  Ведь когда были вдвоём,<br>
  Мне казалось — ты влюблён.</div>
  <br>
  <span class='blue'>[Переход, Миша Марвин]</span><br>
Ты целуй!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/h/hanna/hanna-misha-marvin-francuzskij-pocelui.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
