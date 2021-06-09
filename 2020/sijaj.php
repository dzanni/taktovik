<?php
$title = 'Ramil` - Сияй (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/6hAg2vyWwfI'";
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

<span class='blue'>[Куплеты] Тк4цм/ж - аа, AA<br></span>
  Были бы другие цели, мысли, но<br>
  И твой поцелуй тут был бы ни при чём!<br>
  Целый мир, что дотла горит,<br>
  Погашу слезой, что по щекам твоим.<br>
    <div class='refren'>Я не простой, ты меня пойми!<br>
    Украл твой взгляд, слежу за двоих.<br>
    Касание губ, что по щекам моим,<br>
    Дай мне забыть, что было до зари.</div>
  Но ты ведь не такая, типа, как все!<br>
  Я просто подошел и сказал "ЗдрасьтЕ!"<br>
  Не надо нежных слов мне на закате,<br>
  Я падал и вставал, чтобы распять их!<br>
    <div class='refren'>Кто много говорил за меня "Постой!"<br>
    Я не вкусил, а ты говоришь: "Устроим!"<br>
    Сладкий яд, что принял на застолье,<br>
    Покидаю, созывать не стоит.</div>
<br>
<span class='blue'>[Припев] Тк1-6цм/? - aaaxaa<br></span>
  Сияй, сияй!<br>
  Если твое тело во тьме увижу не я.<br>
  Сияй!<br>
  Для меня боль - убитый мотив.<br>
  Я за тобой по пятам, ты от меня, но не улетай!<br>
  Просто сияй, просто сияй!<br>
    <div class='refren'>Сияй, сияй!<br>
    Если твое тело во тьме увижу не я.<br>
    Сияй!<br>
    Для меня боль - убитый мотив.<br>
    Я за тобой по пятам, ты от меня, но не улетай!<br>
    Просто сияй, просто сияй (у-у-уа)</div>
<br>
  <span class='blue'>[Финал]<br></span>
Просто сияй!   Просто сияй!<br>
  Просто сияй!   Просто сияй!<br>
    Просто сияй!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/r/ramil/ramil-siyai.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Слоговой [й]: постОй = устрОим = U-U.<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
