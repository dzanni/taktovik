<?php
$title = 'Ёлка - Мир открывается (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/JJ0G0sUBe2k'";
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

<span class='blue'>[Intro] Пс - A'A'<br></span>
Когда рядом ты... Когда рядом ты...<br>
Когда рядом ты... Когда рядом ты...<br>
<br>
<span class='blue'>[Первый куплет] Тр54цмж - aBaBCC<br></span>
Ты улыбаешься мне, ты касаешься моей души.<br>
И мне не страшно, другое неважно.<br>
Много с тобой ещё глупостей мы совершим.<br>
И никому не расскажем, держи меня ближе.<br>
У нашего берега самое тёплое море.<br>
И пусть мы не знаем, где завтра мы будем с тобой.<br>
<br>
<span class='blue'>[Припев] Дк4ц2мд? - aX'X'aX'X'a<br></span>
Мир открывается для нас двоих.<br>
Возьми меня за руку,<br>
Веди меня по волнам.<br>
Секунды тают, плавая в любви.<br>
И небо в глазах твоих, <br>
Когда рядом ты со мной,<br>
Говорит.<br>
<br>
<span class='blue'>[Второй куплет]<br></span>
Все растворяется, но не меняются твои черты.<br>
Спроси меня, как же я знаю о каждой?<br>
Много того, что разделим с тобой я и ты.<br>
Ведь мы так похожи и ты меня слышишь.<br>
Из шумного города, спящего в утренних пробках<br>
Мы снова уедем туда, где ласкает прибой.<br>
<br>
<span class='blue'>[Припев]<br></span>
Мир открывается для нас двоих.<br>
Возьми меня за руку,<br>
Веди меня по волнам.<br>
Секунды тают, плавая в любви.<br>
И небо в глазах твоих, <br>
Когда рядом ты со мной,<br>
Говорит.<br>
<br>
<span class='blue'>[Intro]<br></span>
Когда рядом ты... Когда рядом ты...<br>
Когда рядом ты... Когда рядом ты...<br>
<br>
<span class='blue'>[Припев]<br></span>
Мир открывается для нас двоих.<br>
Возьми меня за руку,<br>
Веди меня по волнам.<br>
Секунды тают, плавая в любви.<br>
И небо в глазах твоих, <br>
Когда рядом ты со мной,<br>
Говорит.<br>
<br>
Музыка: А. Веретенников<br>
Слова: А. Жвакин <br>
<br>
<span class='blue'><a href='https://www.gl5.ru/elka-mir-otkrivaetsya.html'
  target='_blank'>Источник</a></span><br>
  <br>
  <br>
  N.B. Рифмы обоих куплетов фонетически идентичны, финальный "й" - слоговой (море - прибой = AA).<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
