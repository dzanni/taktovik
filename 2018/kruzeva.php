<?php
$title = 'LIRANIV - Кружева (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ROxAQcjy9Es'";
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

<span class='blue'>[Переход] <br></span>
(Медленно падали, <br>
Медленно падали <br>
Мы в любовь, и надо ли? <br>
Нам с тобой надо ли?) <br>
Медленно падали, <br>
Медленно падали <br>
Мы в любовь, и надо ли? <br>
Нам с тобой надо ли? <br>
 <br>
 <span class='blue'>[Припев] Х4м - aa<br></span>
(Лезет детка на рожон -  <br>
Я тобою поражен! <br>
Ты снимаешь кружева - <br>
Боже, как ты хороша!) <br>
Лезет детка на рожон -  <br>
Я тобою поражен! <br>
Ты снимаешь кружева - <br>
Боже, как ты хороша! <br>
 <br>
  <span class='blue'>[Куплет 1] Дв34 - AbAb, AABB etc.<br></span>
И ведь не хотела, детка, <br>
Даже не ждала меня! <br>
Вот батарейка села, детка! <br>
Но зачем ты мне врала? <br>
Все эти разговоры манят, <br>
Левые подруги дразнят, <br>
Не кричи так грубо <br>
И не ори мне в рупор! <br>
 <br>
   <span class='blue'>[Вставка] Дк3мж - aBaB</span><br>
Э-ля, э-ля, э-э-э! (Come on!) <br>
Э-ля, э-ля, у-у! <br>
Э-ля, э-ля, э-э-э! (Come on! Э!) <br>
Э-ля, э-ля, у-у! (у-у) <br>
Э-ля, э-ля, э-э-э! (Come on! Э!) <br>
Э-ля, э-ля, у-у! <br>
 <br>
<span class='blue'>[Припев х2] <br></span>
Лезет детка на рожон -  <br>
Я тобою поражен! (Э) <br>
Ты снимаешь кружева - <br>
Боже, как ты хороша! <br>
 <br>
  <span class='blue'>[Переход х2] Тк2дм - A'A'A'A'bB'b<br></span>
Медленно падали, <br>
Медленно падали <br>
Мы в любовь, и надо ли? <br>
Нам с тобой надо ли? <br>
Говорить, что не дано, <br>
Делать то, что нЕ было. <br>
Мы с тобою, как в кино (о-о-о, о-о-о) <br>
 <br>
   <span class='blue'>[Куплет 2] <br></span>
Кулаками нА стол,<br>
Как это опасно! <br>
Феромоны плавятся, <br>
Нет, не безопасно! <br>
<div class='refren'>
Видимость на нуле, <br>
Затуманило глаза, <br>
Ты на мне, а я в тебе - <br>
Это так прекрасно! </div>

Топик одеваешь белый, <br>
Что же ты наделала? <br>
Тянешь ко мне свои руки - <br>
На, держи, что ты хотела! <br>
<div class='refren'>
  Запахи мартини манят, <br>
Забрала белая ночь. <br>
Руки ко мне снова тянешь. <br>
Руки прочь! Где скотч? </div>
 <br>
  <span class='blue'>[Вставка]</span><br>
Э-ля, э-ля, э-э-э! (Come on!) <br>
Э-ля, э-ля, у-у! <br>
Э-ля, э-ля, э-э-э! (Come on!) <br>
Э-ля, э-ля, у-у! <br>
Э-ля, э-ля, э-э-э! (Come on! Э!) <br>
Э-ля, э-ля, у-у! (у-у) <br>
Э-ля, э-ля, э-э-э! (Come on!) <br>
Э-ля, э-ля, у-у! <br>
 <br>
  <span class='blue'>[Припев х2] <br></span>
Лезет детка на рожон -  <br>
Я тобою поражен! (Э) <br>
Ты снимаешь кружева -<br>
Боже, как ты хороша!<br>
 <br>
  <span class='blue'>[Переход х2] <br></span>
Медленно падали, медленно падали <br>
Мы в любовь, и надо ли? <br>
Нам с тобой надо ли <br>
Говорить, что не дано, <br>
Делать то, что нЕ было. <br>
Мы с тобою как в кино (о-о-о, о-о-о) <br>
   <br>
   <span class='blue'>Источник: Расшифровка фонограммы клипа</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
