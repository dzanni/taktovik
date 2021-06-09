<?php
$title = 'Tanny Volkova - Жру (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/UmLE38K8zDs'";
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

<span class='blue'>[Интро] Л4цм - aa<br></span>
Бургер, ножки, десерты жру!<br>
Бургер, ножки, десерты жру!<br>
<br>
<span class='blue'>[Припев] Л2-4цж? - ABA'xABA'<br></span>
Скажу я кратко (жру!),<br>
Я жру и не толстею.<br>
Люблю сладкое… (жру!)<br>
Жир - мой хит, жир - мой хит!<br>
Скажу я кратко (жру!),<br>
Я жру и не толстею.<br>
Люблю сладкое, сладкое, сладкое.<br>
<br>
<span class='blue'>[Куплет] Х3444жм? - AbAb<br></span>
Очереди в Маке <br>
Отстояла два часа.<br>
Меня это не пугает, <br>
Ведь Биг Мак забрала я! (А!)<br>
Выхожу из лифта, <br>
Томный взгляд через очки<br>
Я иду в магазинчик, <br>
Чтоб купить себе еды!<br>
<div class='refren'>
  <span class='blue'>Л2жм? - AAAbCCCb<br></span>
  Да-да-да-да, я не скрою,<br>
Пожрать люблю и много!<br>
Не считаю калорий<br>
Я под конец дня.<br>
Не задавай мне вопросов, <br>
Тут все легко и просто -<br>
Достаю одну ножку<br>
И жру! Вот это да!</div>
<br>
<span class='blue'>[Припев]<br></span>
Скажу я кратко (жру!),<br>
Я жру и не толстею.<br>
Люблю сладкое… (жру!)<br>
Жир - мой хит, жир - мой хит!<br>
Скажу я кратко (жру!),<br>
Я жру и не толстею.<br>
Люблю сладкое, сладкое, сладкое.<br>
<br>
<span class='blue'>[Бридж] Л2м - aa<br></span>
Зацени мой жир!<br>
Зацени мой жир!<br>
Зацени мой жир!<br>
Зацени мой жир!<br>
<br>
Автор бита: Jimmy Square beats (Женя Дзюба)<br>
<br>
<span class='blue'><a href='https://perevod-pesni.ru/pesnya/pokazat/565655683/tanny-volkova/tekst-perevod-pesni-zhru-maryana-ro-vzhuh-20-parodiya/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Пародия на клип Марьяны Ро <a href='http://www.taktovik.ru/2018/vzuh2.php'>"Вжух 2.0"</a>, вывешенный на Youtube 17.04.2018.
Соблюдение рифмовки строже, чем в оригинале.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
