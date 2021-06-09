<?php
$title = 'Ида Галич - Ты попал (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/OY--aOpE0Q4'";
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

<span class='i'>- Проходим, пожалуйста! Так! Это - гейша. Гейши были невероятно
  образованными и всегда знали, о чем поговорить с мужчинами. Что же, это -
  куритизанки. Куртизанки имели дело с королями и властью. Они были не только
  очень красивыми, но и очень умными. Ну, а это - это эскортницы. <br>
  - А чем знамениты эскортницы?<br>
  - Вы знаете, эскортницы потрясающе справляются с фильтрами vsco
  и просто превосходно пользуются фэйстюном.<br>
- Чо вылупились?<br>
</span><br>

<span class='blue'>[Куплет 1] Тр4цж - AA<br></span>
Словно дикая кошка с большими глазами,<br>
Вокруг серые мыши, а я — звезда в инстаграме!<br>
И, мужчин примеряя, как новое платье,<br>
Всегда знаю, в чем выйти на модное пати.<br>
<div class='refren'>
Мои острые ногти и губы вкуса ванили<br>
Столько лохов в мой капкан заманили!<br>
Зубы и сердце одеты в виниры,<br>
На холодный расчет попадают банкиры.</div>
<br>
<span class='blue'>[Припев х2] Л2м - aa<br></span>
И ты попал!<br>
По-по-попал!<br>
По-по-попал!<br>
По-по-попал!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Для меня ночной клуб — это место охоты,<br>
Хорошую прибыль дают ночные походы.<br>
Для меня мужики — это сочное мясо,<br>
Никакие ласки не заменят баксы.<br>
<div class='refren'>
В голове у меня только мани, мани,<br>
Руки всегда по локоть в чьем-то кармане.<br>
Лед и пламя во мне сочетаются ровно,<br>
Сначала я жгучая, а потом я холодная.</div>
<br>
<span class='blue'>[Припев х2]<br></span>
И ты попал!<br>
По-по-попал!<br>
По-по-попал!<br>
По-по-попал!<br>
<br>
<span class='blue'>[Куплет 3] Л3334цж - AA<br></span>
Инстаграм торгует телом без прелюдий,<br>
Вместо лиц мелькают в топах только груди.<br>
У меня есть фото из Парижа, Ниццы,<br>
Меня снимают там, пока тебе все это снится!<br>
<br>
<span class='blue'>[Припев]<br></span>
Ты попал!<br>
По-по-попал!<br>
По-по-попал!<br>
По-по-попал!<br>
И ты попал!<br>
По-по-попал!<br>
По-по-попал!<br>
По-по-попал!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
И ты попал!<br>
По-по-попал!<br>
По-по-попал!<br>
По-по-попал!<br>
<br>
(И ты попал!)<br>
<br>
<span class='i'>- Это была лучшая экскурсия в моей жизни!</span><br>
<br>
Музыка: А. Чёрный<br>
Слова: Ю. Капицын<br>
<br>
<span class='blue'><a href='http://on-hit.ru/texts/tekst-pesni-ida-galich-ty-popal/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма д=ж: "рОвно - холОдная".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
