<?php
$title = 'Монеточка - Запорожец (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/dIhODj9je80'";
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

<span class='blue'>[Куплет 1] Д34ж - ABAB<br></span>
Нас в этом городе двое -<br>
Четверо, если считать отраженье.<br>
Зеркало в луже плохое:<br>
Делает хуже любое движенье.<br>
<div class='refren'>
Глупая, что ты бормочешь?<br>
Домики чьи-то рисуешь в тетрадке.<br>
Ты нереальная очень<br>
В блике случайном моей зажигалки.</div>
<br>
<span class='blue'>[Припев х2] Л2д? - A'B'A'B' A'C'A'C'<br></span>
Кормили хлебушком <br>
Соек вроде бы<br>
С лучшей девушкой <br>
В этом городе.<br>
Запорожец дедушкин, <br>
Дворники снег метут,<br>
Посидим до следующей <br>
Хорошей песни тут.<br>
<br>
<span class='blue'>[Куплет 2] Тр2-4ж - ABBA<br></span>
Над колдобинами сотрясается бампер.<br>
Жаль, что куплета не слышно,<br>
Веснушек не видно,<br>
Испорчена лампа.<br>
<div class='refren'>
  <span class='blue'>Тр43мж - aBaB<br></span>
В мозг чем-тот там отдаёт, цвет плывёт, <br>
Остановят нас только ступеньки.<br>
Мой грязный город, мой конченный год<br>
Стал похож на твою акварельку.</div>
<br>
<span class='blue'>[Переход] Л3м? - abcx abcb<br></span>
Все собаки вернулись домой,<br>
Все дети нашлись здесь.<br>
Теперь навсегда хорошо, <br>
Причина тому - ты.<br>
Хочу посидеть с тобой, <br>
Обнять унести, съесть.<br>
Просто смолоть в порошок <br>
И вынюхать весь!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Кормили хлебушком <br>
Соек вроде бы<br>
С лучшей девушкой <br>
В этом городе.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/m/monetochka/monetochka-zaporozhets.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
