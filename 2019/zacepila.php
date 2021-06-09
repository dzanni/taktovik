<?php
$title = 'Артур Пирожков - Зацепила (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/XQYNUwYHV1c'";
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
[Принц] Роберт, сколько мы уже отсмотрели?<br>
[Роберт] Ваше высочество, семьдесят семь тысяч семьсот семьдесят семь. <br>
[Принц] Красивая цифра. Знаете что? Объявляйте перерыв.<br>
[Роберт] Слушаюсь!.. Дамы и господа, танцы!<br>
</span>
<br>
<span class='blue'>[Куплет 1] Х45жм/мм? - AAbccb<br></span>
Добрый вечер! Эй, полегче!<br>
Пусть он длится бесконечно.<br>
Нам сегодня было хорошо!<br>
Этот праздник не подвёл,<br>
Я почти уже ушёл,<br>
И тут она выходит на танцпол.<br>
<br>
<span class='blue'>[Переход] Тк3м/ж? - aabbССС<br></span>
Ну почему я просто не пошёл домой?<br>
Зачем сказал я, что сегодня холостой?<br>
Я танцевал так, как не снилось никому!<br>
Я не пойму! Ну почему? <span class='blue'>(Строка Тк2м)<br></span>
<div class='refren'>
И закружилось всё вокруг, как на репите,<br>
Ничего уже не помню, извините.<br>
Только помню голос: «Вы что творите?!»<br></div>
<br>
<span class='blue'>[Припев] Л2м/? - AAAA AAAA<br></span>
Зацепила меня,<br>
Ослепила меня,<br>
До порога довела, <br>
А любви не дала.<br>
<div class='refren'>Зацепила меня, <br>
Соблазнила меня,<br>
До порога довела, <br>
А любви не дала.</div>
Зацепила меня…<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Громче крики, громче звуки,<br>
Поднимите ваши руки!<br>
Эта вечеринка просто класс!<br>
Я не знаю, как мне быть,<br>
Как мне с ней заговорить?<br>
А, может, лучше что-то подарить?<br>
<br>
<span class='blue'>[Переход]<br></span>
Ну почему я просто не пошёл домой?<br>
Зачем сказал я, что сегодня холостой?<br>
Я танцевал так, как не снилось никому!<br>
Я не пойму!<br>
Ну почему?<br>
<div class='refren'>
И закружилось всё вокруг, как на репите,<br>
Ничего уже не помню, извините.<br>
Только помню голос: «Вы что творите?!»<br></div>
<br>
<span class='blue'>[Припев]<br></span>
Зацепила меня,<br>
Ослепила меня,<br>
До порога довела, <br>
А любви не дала.<br>
<div class='refren'>Зацепила меня, <br>
Соблазнила меня,<br>
До порога довела, <br>
А любви не дала.</div>
Зацепила меня…<br>
<br>
<span class='blue'>[Бэк-вокал x7]</span><br>
Зацепила меня… <br>
<br>
<span class='blue'>[Припев]<br></span>
Зацепила меня,<br>
Ослепила меня,<br>
До порога довела, <br>
А любви не дала.<br>
<div class='refren'>Зацепила меня, <br>
Соблазнила меня,<br>
До порога довела, <br>
А любви не дала.</div>
Зацепила меня…<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/artur-pirozhkov-zacepila.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
