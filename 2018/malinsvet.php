<?php
$title = 'Леша Свик - Малиновый свет (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ct15n6_ppmY'";
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
Это юность моя!<br>
Это юность моя!<br>
<br>
<span class='blue'>[Куплет 1] Тк32жм?- AbAb CCXb DeDe bbxb </span><br>
Твои соленые губы <br>
Снова целуют меня.<br>
Соленые губы, <br>
И это из-за меня!<br>
<div class='refren'>Ты не проси меня тише, <br>
Я так ненавижу!<br>
Мы будем этой ночью <br>
С тобою в такт!</div>
Нам далеко-далеко <br>
До перемен,<br>
Нам далеко-далеко <br>
До лучших измен.<br>
<div class='refren'>Это не из-за тебя, <br>
Это не из-за тебя,<br>
Я просто ухожу в отрыв, <br>
Когда наступит закат.</div>
<br>
<span class='blue'>[Припев x3] Л2мж - aBaBaaaB<br></span>
Малиновый свет <br>
Упал на окна,<br>
Танцует во тьме <br>
Пара влюблённых.<br>
Малиновый свет, <br>
Малиновый свет.<br>
Малиновый свет <br>
Искал нас долго. <br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Твои горячие руки<br>
Снова разбудят меня,<br>
Горячие руки <br>
Снова придушат меня,<br>
<div class='refren'>Опять вопросы, вопросы<br>
Куда меня часто заносит?<br>
А мне так нравится очень,<br>
Когда ревнуешь ко мне.</div>
Нам высоко-высоко <br>
До облаков.<br>
Так высоко-высоко, <br>
Но с тобою готов.<br>
<div class='refren'>Ты поджигая держись, <br>
Поджигая держись<br>
Ведь мы взлетаем с тобою <br>
В лучшую жизнь.</div>
<br>
<span class='blue'>[Припев x3]<br></span>
Малиновый свет <br>
Упал на окна,<br>
Танцует во тьме<br>
Пара влюблённых.<br>
Малиновый свет, <br>
Малиновый свет.<br>
Малиновый свет <br>
Искал нас долго. <br>
<br>
Малиновый свет.<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/l1/lesha-svik/11299-lyosha-svik-malinovij-svet-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
