<?php
$title = 'Ольга Бузова -  Орбит без сахара (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/w3u1eOXGLP8'";
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

<span class='blue'>[Вступление] Я1м/ - xx</span><br>
А-а!<br>
У-у!<br>
<br>
<span class='blue'>[Куплет 1] Ан3м/ - aabb</span><br>
На тебя могу долго смотреть,<br>
И походу мы вместе навек!<br>
Якоря бросим в спальный район,<br>
И разлука нас там не найдёт.<br>
<br>
<span class='blue'>[Переход] Я54мж - aBaB</span><br>
А в отраженьи твоих шрамов я,<br>
Покуда сердце моё бьётся.<br>
Бежим по линии, назад нельзя!<br>
Скрестили то, что невозможно.<br>
<br>
<span class='blue'>[Припев х2] Л3д/ - A'A'A'</span><br>
Я жую «Орбит без сахара»,<br>
Тащусь от твоего запаха.<br>
Связало нас зодиаками,<br>
И эта ночь будет жаркая.<br>
<br>
<span class='blue'>[Пост-припев]</span><br>
А-а! (И эта ночь будет жаркая!)<br>
(А!) А-а! (И эта ночь будет жаркая!)<br>
А-а! (О-о!)<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Мы потушим сигналы в сети.<br>
Из окна - ночной шум от машин.<br>
Темнота, и в груди по низам,<br>
И во мне ты надолго пропал.<br>
<br>
<span class='blue'>[Переход]</span><br>
А в отраженьи твоих шрамов я,<br>
Покуда сердце моё бьётся.<br>
Бежим по линии, назад нельзя!<br>
Скрестили то, что невозможно.<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Я жую «Орбит без сахара»,<br>
Тащусь от твоего запаха.<br>
Связало нас зодиаками,<br>
И эта ночь будет жаркая.<br>
<br>
<span class='blue'>[Пост-припев]</span><br>
А-а! (И эта ночь будет жаркая!)<br>
(А!) А-а! (И эта ночь будет жаркая!)<br>
А-а! (О-о!)<br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/b/buzova_olga/olga-buzova-orbit-bez-sahara.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
