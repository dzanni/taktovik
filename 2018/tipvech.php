<?php
$title = 'Пошлая Молли - Типичная вечеринка с бассейном (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ccdHspHSJQ8'";
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

<span class='blue'>[Интро = Бридж] Дк4ц2ж/дм? - XaaX'aa<br></span>
(Эй!)<br>
Это типичная вечеринка с бассейном.<br>
О, боже мой! (О, боже мой!) <br>
О, боже мой! (О, боже мой!)<br>
Почему я пью водку из бумажного стаканчика?<br>
Что со мной? (Что со мной?) <br>
Что со мной? (Что со мной?)<br>
<br>
<span class='blue'>[Куплет 1] Чт4ц2? - X'X'AAХB'B''<br></span>
Я переодеваюсь в платье своей бабушки,<br>
Ме-ня снимает на мобилу бейби эмо-девочка.<br>
Та самая девочка, которая влюбилась (Oh)<br>
В капитана футбольной команды, oh my Jesus!<br>
Кто-то там нарисует хуй на щеке неудачника,<br>
Того, которого весь класс <br>
Опускает головой в унитаз (slam)<br>
<br>
<span class='blue'>[Предприпев] Дк4ц3цж - AA<br></span>
Это типичная вечеринка с бассейном (k-k-k)<br>
Школьная вечеринка с бассейном.<br>
<br>
<span class='blue'>[Припев х2] Л3м - aa<br></span>
И я прыгаю в одежде в бассейн!<br>
И я прыгаю в надежде на секс!<br>
<br>
<span class='blue'>[Бридж]<br></span>
Это типичная вечеринка с бассейном.<br>
О, боже мой! (О, боже мой!) <br>
О, боже мой! (О, боже мой!)<br>
Почему я пью водку из бумажного стаканчика?<br>
Что со мной? (Что со мной?) <br>
Что со мной? (Что со мной?)<br>
<br>
<span class='blue'>[Куплет 2] (Чт4ц2 - A''aBBBCC)<br></span>
А королева школы упала с неба в унитаз,<br>
Это я ей отравил бухло, чтоб не смеялась с нас.<br>
Не смеялась с нас, когда поём после занятий (сука)<br>
Мы ещё покажем этим пидорам, кто классный!<br>
Неожиданно ворвались во двор моя мама с папой,<br>
Теперь я буду точно дома <br>
Всю неделю драить окна!<br>
<br>
<span class='blue'>[Предприпев]<br></span>
Это типичная вечеринка с бассейном (k-k-k)<br>
Школьная вечеринка с бассейном.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
И я прыгаю в одежде в бассейн!<br>
И я прыгаю в надежде на секс!<br>
<br>
<span class='blue'>[Куплет 3] Тк2-4цм/ж - aa, AA<br></span>
(Сейчас будет типичный куплет Ники Минаж)<br>
Yeaw<br>
I need men can to flow, motherfucka<br>
Motherfucka, no blocka<br>
Motherfuckinʹ fuck<br>
Motherfucka, no shit<br>
(Th-th-tha~)<br>
Motherfucka, me not wanna shit<br>
And Iʹm kissin' a bride<br>
To motha-motherfuckinʹ shit<br>
And Iʹm mother-fuck out, mane<br>
Tha fuckinʹ no shit, my honey<br>
Flexinʹ, dopinʹ at gangsta show<br>
I donʹt wanna keep no blood soon on master shop<br>
<br>
<span class='blue'>[Бридж]<br></span>
Это типичная вечеринка с бассейном.<br>
О, боже мой! (О, боже мой!) <br>
О, боже мой! (О, боже мой!)<br>
Почему я пью водку из бумажного стаканчика?<br>
Что со мной? (Что со мной?) <br>
Что со мной? (Что со мной?)<br>
<br>
<span class='blue'>[Аутро] Х2м - aa<br></span>
Что со мной? (Что со мной?)<br>
Что со мной? (Что со мной?)<br>
Что со мной? (Что со мной?)<br>
Что со мной? (Что со мной?)<br>
Что со мной? (Что со мной?)<br>
Что со мной? (Что со мной?)<br>
Что со мной? (Что со мной?)<br>
Что со мной? (Что со мной?)<br>
<br>
<span class='blue'><a href='https://genius.com/Poshlaya-molly-typical-pool-party-lyrics'
  target='_blank'>Источник</a></span><br>
  <br>
  <br>
  N.B. Естественное ударение в песне игнорируется для сохранения ритма.
  В пяти первых строках 1-го и 2-го куплетов почти строго соблюдается расстояние в три
  безударных слога между ударными. Для этих куплетов мы придумали термин
  Чт - "четырехсложник с переменной анакрузой".
  Рифма жертвуется ради паралелизма: "бабушки - девочка", "fuck - sheet".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
