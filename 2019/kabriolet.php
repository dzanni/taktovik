<?php
$title = 'Ленинград - Кабриолет (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Z8qU0GdW88Q'";
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

<span class='i'>
(Звонит телефон)<br>
- Да, котенок!.. Я у Ирки. За... засиделись, малыш. А что, сегодня уже суббота?..
Да, ну конечно, помню! Я уже села, завела машину и еду. Скоро буду. Все хорошо, малыш!<br>
<br>
- Солнечное, пляж Ласковый. Ёб твою мать! Блядь! Блядь!<br>
</span>
<br>
<span class='blue'>[Куплет 1] Х34мж - aBaB<br></span>
Может я ку-ку, <br>
В «Мерседесике» без крыши<br>
Еду к мужику, <br>
А вас, чё, это колышет?<br>
<div class='refren'>Еду и рулю, <br>
В Питере температура<br>
Близится к нулю, <br>
Но я протестная натура!</div>
<br>
<span class='blue'>[Припев] Х4жм - AbAb<br></span>
За рулём кабриолета, <br>
Я врубаю ЛетовА,<br>
И пускай уже не лето, <br>
Это фиолетовА!<br>
<div class='refren'><span class='blue'>Х5ж/ - AAAA<br></span>
Всё идёт по пла-a-a-a-ну!<br>
Всё идёт по пла-a-a-a-ну!<br>
Всё идёт по пла-a-a-a-ну!<br>
Всё идёт по пла-a-a-a-ну!</div>
<br>
<span class='i'>
- Я тебе говорю, быстро собирай вещи. Через пять минут встречаемся на районе. Понял?!<br></span>
<br>
(За рулём кабриолета, <br>
Я врубаю ЛетовА,<br>
И пускай уже не лето, <br>
Это фиолетовА!<br>
Всё идёт по пла-a-a-a-ну!)<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Это омский движ, <br>
Город есть такой сибирский.<br>
Чё ты мне грубишь? <br>
Видишь, на протесте киска!<br>
<div class='refren'><span class='blue'>Х34жж - ABAB<br></span>
Сумочка от Gucci, <br>
Сука, прыгает на горке.<br>
Эх, припев ебучий, <br>
Подпеваю я Егорке.</div>
<br>
<span class='blue'>[Припев]<br></span>
За рулём кабриолета, <br>
Я врубаю ЛетовА,<br>
И пускай уже не лето, <br>
Это фиолетовА!<br>
<div class='refren'>Всё идёт по пла-a-a-a-ну!<br>
Всё идёт по пла-a-a-a-ну!<br>
Всё идёт по пла-a-a-a-ну!<br>
Всё идёт по пла-a-a-a-ну!</div>
<br>
<span class='blue'>[Припев]<br></span>
За рулём кабриолета, <br>
Я врубаю ЛетовА,<br>
И пускай уже не лето, <br>
Это фиолетовА!<br>
<div class='refren'>Всё идёт по пла-a-a-a-ну!<br>
Всё идёт по пла-a-a-a-ну!<br>
Всё идёт по пла-a-a-a-ну!<br>
Всё идёт по пла-a-a-a-ну!</div>
<br>
<span class='i'>
- Абонент временно недоступен. Перезвоните позже. This subscriber is not availible now.
Please, call later.<br>
- Пиздец!<br>
</span>
<br>
<span class='blue'><a href='https://genius.com/Leningrad-cabriolet-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Упоминается песня Егора Летова "Всё идет по плану" (1988).<br>
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
