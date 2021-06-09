<?php
$title = 'Настя Кудри - Моветон (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Sd74-Wg3hQk'";
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


<span class='blue'>[Куплет 1] Тк4цм, Тк4цж - aa, AA<br></span>
В этих местах отдыхает бомонд,<br>
Им непонятно, откуда здесь он:<br>
Круглый живот и полно понтов -<br>
Подуставший Ален Делон.<br>
<div class='refren'>
Между нами люди, целый коридор.<br>
Не боится расстоянья твой одеколон.<br>
Так нагло вмешался в мой разговор.<br>
Видимо, не знаешь, что такое дурной тон.</div>

Значит, научу тебя хорошим манерам.<br>
Мой телохранитель - твоя проблема.<br>
Вижу, как лицо превращается в мема.<br>
Вот, познакомься - Валера!<br>
<br>
<span class='blue'>[Переход] Л34цжм - AbAb<br></span>
Ты такой неприятный,<br>
В чёрно-белом пальто.<br>
Убери свои лапы,<br>
Ведь для меня это моветон!<br>
<br>
<span class='blue'>[Припев] Л34цжм - AbAbAbxb<br></span>
Так откровенно сверлит <br>
Твой моветон, твой моветон -тон!<br>
Действует мне на нервы <br>
Твой моветон, твой моветон -тон!<br>
Презрительный, надменный <br>
Твой моветон, твой моветон -тон.<br>
Ты, наверно, без ума, без ума, без ума, <br>
Без ума от тебя, Ален Делон.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ты не оставлял попыток совсем -<br>
Видимо, решил затроллить нас всех.<br>
От одного вида тянет на смех.<br>
Зачем ты вышел на свет?<br>
<div class='refren'>
Туфли на остром, волосы лаком.<br>
Вязаный свитер цвета салата.<br>
Где производят эти экспонаты? -<br>
Мне не- не- не- непонятно!</div>

И здесь вообще не пахнет этикетом.<br>
Дизайнер плакал над манекеном.<br>
Хватит давить, пожалей мои нервы!<br>
Вон ходит Барби - стань ее Кеном!<br>
<br>
<span class='blue'>[Переход]<br></span>
Ты такой неприятный,<br>
В чёрно-белом пальто.<br>
Убери свои лапы,<br>
Ведь для меня это моветон!<br>
<br>
<span class='blue'>[Припев x2]<br></span>
Так откровенно сверлит <br>
Твой моветон, твой моветон -тон!<br>
Действует мне на нервы <br>
Твой моветон, твой моветон -тон!<br>
Презрительный, надменный <br>
Твой моветон, твой моветон -тон.<br>
Ты, наверно, без ума, без ума, без ума, <br>
Без ума от тебя, Ален Делон.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kudri-nastya/nastya-kudri-moveton.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
