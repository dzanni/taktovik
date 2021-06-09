<?php
$title = 'IC3PEAK - Сказка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/y13sm8OJTf4'";
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

<span class='blue'>[Припев х2] Х4жм - XaXa<br></span>
Я из страшной русской сказки, <br>
Всё равно откуда ты!<br>
Не боюсь дневного света, <br>
Здесь и так хватает мглы.<br>
<div class='refren'>Мир подарит, сколько просишь, <br>
Заберёт, когда не ждёшь.<br>
Не играю в твои игры, <br>
Ты когда-нибудь умрёшь!</div>
<br>
<span class='blue'>[Куплет 1] Х4жм - XaXa<br></span>
Набираю грудью воздух, <br>
Чтобы больше не дышать.<br>
Всё, что ранит, забываю, <br>
Чтобы раниться опять.<br>
<br>
<span class='blue'>[Переход х4] Дв25м/<br></span>
Ля-ля-ля-ля!<br>
Расколдуй меня-а-а-а!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Было больно — снова будет, <br>
Я не плачу по тебе!<br>
Это холод выжигает<br>
Слёзы на моём лице.<br>
Не хотела бы я видеть<br>
То, что скрыто впереди!<br>
Тянет сердце грузом в пропасть,<br>
Каменея изнутри.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я из страшной русской сказки, <br>
Всё равно, откуда ты!<br>
Не боюсь дневного света, <br>
Здесь и так хватает мглы.<br>
<div class='refren'>Мир подарит, сколько просишь, <br>
Заберёт, когда не ждёшь.<br>
Не играю в твои игры, <br>
Ты когда-нибудь умрёшь!</div>
<br>
<span class='blue'>[Куплет 3] Л32мм - abab<br></span>
Прикоснись ко мне, <br>
Это я, это я!<br>
Снова снюсь тебе, <br>
Это я, это я!<br>
<br>
<span class='blue'>[Переход х4]<br></span>
Ля-ля-ля-ля!<br>
Расколдуй меня!<br>
<br>
<span class='blue'>[Аутро х8] Тк2м/<br></span>
Моё имя — твой страх, <br>
Кровоточит на губах!<br>
<br>
<span class='blue'><a href='https://genius.com/Ic3peak-fairytale-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
