<?php
$title = 'Мари Краймбрери - AMORE (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/znQ6YqqJit4'";
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
<span class='i'>- Неужели ты никогда не хотела вернуться?<br>
</span><br>

<span class='blue'>[Куплет 1] Тр2д? - ABA'B'CDCD<br></span>
Сильные волны, <br>
Громкие люди,<br>
Ныряем за золотом, <br>
Тонем в прелюдиях.<br>
Море предательски <br>
С дьявольским опытом<br>
На обстоятельства <br>
Орёт в ответ шёпотом.<br>
<div class='refren'>
  <span class='blue'>Тк4цм - aa<br></span>
Мы не одни такие здесь сидим у берега -<br>
Вот тебе моя love story, вот тебе моя тоска!<br>
Вот тебе моя одежда, вот тебе мои ключи -<br>
Только, только замолчи! (Только, только замолчи!)</div>
<br>
<span class='i'>- В каком возрасте ты почувствуешь себя взрослым?<br>
</span><br>
<br>
<span class='blue'>[Припев х2] Л24м - abbabb<br></span>
Уезжаешь - не спать!<br>
Уезжаешь - и пусть!<br>
А море, море помнит всё наизусть.<br>
Разучусь целовать <br>
И когда-то вернусь -<br>
Сказать, что море, море, я остаюсь!<br>
<br>
<span class='blue'>[Куплет 2] Дк2-5ц?<br></span>
Знает ли твоя девочка, <br>
Кого она любит?<br>
Сколько ещё праздников <br>
С тобой отмечать будет.<br>
Сколько ещё поломанных судеб<br>
На этом берегу,<br>
Сколько людей, которые любят <br>
Друг друга, но не берегут!<br>
<div class='refren'>
На перекур<br>
В мир эгоистов и дур<br>
Сгоняю на пару недель туристом и вернусь <br>
На волны бурные, <br>
Где нецензурные <br>
Брошу на ветер <br>
В потушенной сигарете. <span class='blue'>(Строка Ак2ж)</span></div>
<br>
<span class='blue'>[Припев х2]<br></span>
Уезжаешь - не спать!<br>
Уезжаешь - и пусть!<br>
А море, море помнит всё наизусть.<br>
Разучусь целовать <br>
И когда-то вернусь -<br>
Сказать, что море, море, я остаюсь!<br>
<br>
<span class='blue'>[Инструментал]<br></span>
<br>
<span class='blue'>[Припев х2]<br></span>
Уезжаешь - не спать!<br>
Уезжаешь - и пусть!<br>
А море, море помнит всё наизусть.<br>
Разучусь целовать <br>
И когда-то вернусь -<br>
Сказать, что море, море, я остаюсь!<br>
<br>
Слова и музыка: Мари Краймбрери<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/m/mari-kraimbreri/mari-kraimbreri-amore.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма ж=д:<br>
<br>
  <div class='i'>Сильные вОлны, <br>
  Громкие лЮди,<br>
  Ныряем за зОлотом, <br>
  Тонем в прелЮдиях.</div>
<br>
Последний куплет не имеет четкой стофы и основан на свободном сочетании рифм и ассонансов.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
