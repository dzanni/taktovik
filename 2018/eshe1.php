<?php
$title = 'Filatov & Karas vs Лигалайз - Еще один день (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/yuUA1_jzLo8'";
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

<span class='blue'>[Интро]<br></span>
Без тебя!<br>
Без тебя!<br>
А! Т!<br>
<br>
<span class='blue'>[Куплет 1: Лигалайз] Дк4цж, Д4цм, Дк4жм - aa, AA, abab, AbAb<br></span>
Над уровнем неба, или как там?<br>
Ты в Монтенегро или Аликанте.<br>
Я так недавно искал на карте<br>
Места, где были с тобой тем мартом.<br>
<div class='refren'>
Вроде бы рядом, но далеко так!<br>
И вспоминаю не без икоты.<br>
На сердце рана, сплошная драма<br>
Хоть в Амстердамах, хоть на курортах.</div>

Еще один день, еще одна тень,<br>
И с ними пришла о-сень.<br>
И лезут в слова одна дребедень,<br>
Банальны, как смыслы все.<br>
<div class='refren'>
Одна пустота, и солнцу не рад.<br>
Не слышишь меня со-всем.<br>
По кругу опять песня одна:<br>
Филатов, Кэрэс и Лига — всем!</div>
<br>
<span class='blue'>[Припев] Тр34цм - aa<br></span>
Еще один день без тебя.<br>
Еще один день, прожитый зря.<br>
Еще один день без тебя.<br>
Еще один день (еще один)!<br>
Еще один день без тебя.<br>
Еще один день, прожитый зря.<br>
Еще один день без тебя.<br>
Еще один день…<br>
<br>
<span class='blue'>[Хук]<br></span>
Еще один день!<br>
Еще один день!<br>
Еще один день!<br>
Еще один день!<br>
<br>
<span class='blue'>[Куплет 2: Лигалайз]<br></span>
Еще один день, прожитый зря,<br>
Опять без тебя за-ря!<br>
Картинку вдвоем уже не листать,<br>
Любови потух за-ряд!<br>
<div class='refren'>
Ну хватит стоять — поднять якоря!<br>
Нас новые ждут мо-ря!<br>
Закрыто то шоу, где нам хорошо,<br>
Июль наш ушел, и пусть говорят!</div>

Грустно и пусто, и вру себе сам,<br>
Что хватит ветра моим парусам!<br>
Что время чем-то восполнит чувства,<br>
И так скучаю по твоим глазам!<br>
<div class='refren'>
Напеть пытаюсь мелодию музык,<br>
Но наш мотив не находит Shazam!<br>
На дно иду с терзаний грузом,<br>
Тянут слова, что не сказал!<br>
<br>
<span class='blue'>[Бридж]<br></span>
Еще один день без тебя,<br>
Еще один день, прожитый зря!<br>
Еще один день без тебя,<br>
Еще один день!<br>
<br>
<span class='blue'>[Куплет 3: Лигалайз]<br></span>
В одной квартире как две планеты,<br>
Два разных мира, два континента,<br>
Доносит ветром обрывки эхо,<br>
Кричим так громко, но нет ответа!<br>

<div class='refren'>
Злым рикошетом - простая правда,<br>
Что наше лето давно за МКАДом,<br>
Уходит дальше и не вернется,<br>
А сердце бьется, а сердце бьется!</div>

Вернись, надежда, и всё, как прежде!<br>
Мы поступили с теплом небрежно,<br>
Теперь пустые, одна одежда,<br>
Две скорлупы, что помнят нежность.<br>
<div class='refren'>
И остается гонять ответы.<br>
Одни метанья и лучик света.<br>
Воспоминанья, как кинолента.<br>
Где наше лето? Где наше лето?</div>
<br>
<span class='blue'>[Аутро]<br></span>
Еще один день!<br>
Еще один день!<br>
Еще один день!<br>
<br>
<span class='blue'><a href='https://www.youtube.com/watch?v=M8dN8nNOKNQ'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Много внутренних рифм: цезурные окончания рифмуются с окончаниями строк, и
в этом случае строка может не рифмоваться с другими строками. Мы не стали
делить эти строки, чтобы созранить единую графическую схему.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
