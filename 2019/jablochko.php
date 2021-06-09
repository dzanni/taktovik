<?php
$title = 'Отава Ё - Яблочко 2019 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/k7TxSDRqdC4'";
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

<span class='i'>- Эх, говори Москва, разговаривая Россия!</span><br>
<br>
<span class='blue'>[Куплеты]<br></span>
<br>
<span class='blue'>Тк1221ддмд - X'A'xA'<br></span>
Эх, яблочко,<br>
Куда ж ты котишься?<br>
Ко мне в рот попадешь,<br>
Не воротишься!<br>
Ко мне в рот попадешь,<br>
Не воротишься!<br>
<br>
<span class='blue'>Тк1222ддмд - X'A'xA'<br></span>
Эх, яблочко,<br>
Да на завалинке<br>
Продает офицер<br>
Стары валенки.<br>
<br>
<span class='blue'>Тк1222ддмд - X'A'xA'<br></span>
Эх, яблочко,<br>
Катись по бережку,<br>
Раз купил товар,<br>
Давай денежку!<br>
Раз купил товар,<br>
Давай денежку!<br>
<br>
<span class='blue'>Тк21мд- xA'xA'<br></span>
Спекулянт, спекулянт<br>
Спекулирует,<br>
А народная власть<br>
Реквизирует.<br>
А народная власть<br>
Реквизирует.<br>
<br>
<span class='blue'>[Припев] Л2ц3д/м - A'A'xx<br></span>
Ла-ла-лай, ла-лай-ла-ла,<br>
Ла-ла-лай, ла-лай-ла-ла,<br>
Ла-ла-ла, ла-ла-ла-лай!<br>
Ла-ла-лай, ла-лай-ла-ла,<br>
Ла-ла-лай, ла-лай-ла-ла,<br>
Ла-ла-ла, ла-ла-ла-лай!<br>
Хумпа-хумпа-хей!<br>
<br>
<span class='blue'>Тк12дд - X'A'X'A'<br></span>
Эх, яблочко,<br>
Да на тарелочке,<br>
Кому водку пить,<br>
А кому девочек!<br>
Кому водку пить,<br>
А кому девочек!<br>
<br>
<span class='blue'>Тк1222ддмд - X'A'xA'<br></span>
Эх, яблочко,<br>
Да соку спелого,<br>
Полюбила я<br>
Парня смелого.<br>
<br>
<span class='blue'>Тк1222дд - X'A'Х'A'<br></span>
Эх, яблочко,<br>
Да цвета красного,<br>
Пойду за сокола,<br>
Пойду за ясного!<br>
Пойду за сокола,<br>
Пойду за ясного!<br>
<br>
<span class='blue'>Тк2дд - X'A'Х'A'<br></span>
Не за Ленина,<br>
Да не за Троцкого,<br>
(А за кого?)<br>
А за матросика<br>
Краснофлотского.<br>
За матросика<br>
Краснофлотского!<br>
<br>
<span class='blue'>Тк1222ддмд - X'A'xA'<br></span>
Эх, яблочко,<br>
Да с голубикою,<br>
Подходи, буржуй,<br>
Глазик выколю.<br>
Подходи, буржуй,<br>
Глазик выколю.<br>
<br>
<span class='blue'>Тк1221ддмд - X'A'xA'<br></span>
Эх, яблочко,<br>
Да не докотится,<br>
А буржуйская власть<br>
Не воротится!<br>
А буржуйская власть<br>
Не воротится!<br>
<br>
<span class='blue'>Тк1221ддмд - X'A'xA'<br></span>
Эх, яблочко,<br>
Да огородное,<br>
Прижимай кулаков,<br>
Все народное!<br>
Прижимай кулаков,<br>
Все народное!<br>
<br>
<span class='blue'>Тк1221ддмд - X'A'xA'<br></span>
Эх, яблочко,<br>
Да ты хрустальное,<br>
А квартира у нас<br>
Коммунальная.<br>
А квартира у нас<br>
Коммунальная.<br>
<br>
<span class='blue'>[Припев]<br></span>
Ла-ла-лай, ла-лай-ла-ла,<br>
Ла-ла-лай, ла-лай-ла-ла,<br>
Ла-ла-ла, ла-ла-ла-лай!<br>
  <div class='refren'>Ла-ла-лай, ла-лай-ла-ла,<br>
  Ла-ла-лай, ла-лай-ла-ла,<br>
  Ла-ла-ла, ла-ла-ла-лай!<br>
  Ла-ла-лай, ла-лай-ла-ла,</div>
Ла-ла-лай, ла-лай-ла-ла,<br>
Ла-ла-ла, ла-ла-ла-лай!<br>
Ла-ла-лай, ла-лай-ла-ла,<br>
Ла-ла-лай, ла-лай-ла-ла,<br>
Ла-ла-ла, ла-ла-ла-лай!<br>
  <div class='refren'>Хумпа-хумпа-хей!<br>
    Хей!</div>
 <br>
<span class='blue'><a href='https://lyricstranslate.com/ru/ekh-yablatshka-%D1%8D%D1%85-%D1%8F%D0%B1%D0%BB%D0%BE%D1%87%D0%BA%D0%BE-oh-little-apple.html'
  target='_blank'>Источник</a></span><br>
 <br>
  <br>
P.S.  Куплеты - комбинации строк Тк1д, Тк2д, Тк2м, причем четные, рифмующиеся строки -
всегда с дактилическим окончанием. Проще говоря, в строке может быть одно или два ударения,
в первой и третьей строках последнее ударение может падать на финальный или третий с конца слог,
а во второй и четвертой строках - только на третий с конца.  <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
