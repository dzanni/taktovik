<?php
$title = 'Настя Кудри - Рандеву (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/i71rKPTfRSw'";
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

<span class='blue'>[Припев] Дв42жм - AXAbAAAb</span><br>
От заката до рассвета -<br>
Горячий воздух.<br>
От заката до рассвета - <br>
Рандеву.<br>
От заката до рассвета - <br>
Порвём билеты.<br>
Мама, не обманешь сердце, <br>
Я сдаюсь!<br>
<br>
<span class='blue'>[Куплет 1] Тк12ж - AAAA</span><br>
Так опасно, <br>
Когда ты где-то рядом.<br>
Я как раз там. <br>
Я, я так пикантна.<br>
На испанском <br>
Гитара зазвучала.<br>
В своём танце <br>
Похож на Неймара.<br>
<br>
<span class='blue'>[Переход] Тк3ж - AA</span><br>
Сеньор, не говори мне ни слова.<br>
Эй, телефон вне зоны.<br>
<br>
<span class='blue'>[Припев]</span><br>
От заката до рассвета -<br>
Горячий воздух.<br>
От заката до рассвета - <br>
Рандеву.<br>
От заката до рассвета - <br>
Порвём билеты.<br>
Мама, не обманешь сердце, <br>
Я сдаюсь!<br>
<br>
<span class='blue'>[Куплет 2] Тк3м - aaaa</span><br>
Водопады соблазнов в нём,<br>
Губы в губы, забирай их целиком.<br>
Мы танцуем танец под дождём,<br>
Нам до рассвета ещё далеко.<br>
<div class='refren'>
  <span class='blue'>Дк24ц//3ж - aAaa</span><br>
А ты такой чуткий (ты)!<br>
Поправляешь чёлку, поправляю чулки.<br>
Иностранные шутки<br>
Разбавляют словами поступки.</div>
  <span class='blue'>Дк4цм/ж - aa, AA</span><br>
Наш отель — ателье, в нём я — кутюрье,<br>
Оставляю в подарок следы на спине.<br>
Тут одежда бумажна рвётся на части,<br>
И счастье строчит по запястьям.<br>
<br>
<span class='blue'>[Переход]</span><br>
Сеньор, не говори мне ни слова.<br>
Эй, телефон вне зоны.<br>
<br>
<span class='blue'>[Припев]</span><br>
От заката до рассвета -<br>
Горячий воздух.<br>
От заката до рассвета - <br>
Рандеву.<br>
От заката до рассвета - <br>
Порвём билеты.<br>
Мама, не обманешь сердце, <br>
Я сдаюсь!<br>
<br>
<span class='blue'><a href='https://text-pesni.su/page/nastja-kudri-randevu/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
