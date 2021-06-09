<?php
$title = 'IC3PEAK - Марш (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xqohApD6Ng8'";
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

<span class='blue'>[Интро х4] Х3жд - AB'AB'AB'</span><br>
ЛЯ-ля-ля-ля-лЯ-ля <br>
ЛЯ-ля-ля-ля-лЯ-ля-ля <br>
 <br>
<span class='blue'>[Припев] Д4д/? - A'A'A''AAA'A'A</span><br>
Твоё лицо совершенно такое же, <br>
А это здание есть в каждом городе. <br>
Вместо гирлянды — колючая проволока, <br>
А за заборами нет горизонта. <br>
Окна забиты, я в двух капюшонах. <br>
Кто там на улице помимо холода? <br>
Танк, припаркованный прям за воротами, -<br>
Он не стреляет, стоит тут для понта. <br>
 <br>
<span class='blue'>[Куплет] Х6цм/? - aabb</span><br>
Я будто чужая в своей родной семье, <br>
Но я не боюсь, и я не вру себе. <br>
Моё тело в шрамах, а ладонь в грязи, <br>
Я ищу свой дом и корни, как и ты. <br>
  <div class='refren'>Я будто чужая в своей родной семье, <br>
  Но я не боюсь и я не вру себе. <br>
  Моё сердце в сколах, а в глазах тоска, <br>
  Не вернусь обратно больше никогда. </div>
<span class='blue'>Д4м/? - aabb</span><br>
Воздух вокруг с каждым годом душней, <br>
Я не хочу убивать людей! <br>
Без приглашения заходят в мой дом<br>
Новое слово и новый закон. <br>
 <br>
<span class='blue'>[Бридж х6]</span><br>
ЛЯ-ля-ля-ля-лЯ-ля <br>
ЛЯ-ля-ля-ля-лЯ-ля-ля <br>
 <br>
 <span class='blue'>[Припев]</span><br>
 Твоё лицо совершенно такое же, <br>
 А это здание есть в каждом городе. <br>
 Вместо гирлянды — колючая проволока, <br>
 А за заборами нет горизонта. <br>
 Окна забиты, я в двух капюшонах. <br>
 Кто там на улице помимо холода? <br>
 Танк, припаркованный прям за воротами, - <br>
 Он не стреляет, стоит тут для понта. <br>
 <br>
 <span class='blue'><a href='https://genius.com/Ic3peak-marching-lyrics'
   target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
