<?php
$title = 'Катя Адушкина - Beauty Bomb (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/h40MjkSoPq4'";
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

<span class='blue'>[Куплет 1] Л32жм - AAbAbcc<br></span>
Вкусно и без брендов<br>
Я взрываю тренды <br>
В пух и прах!<br>
На витринах, стендах<br>
Манекены в слезах!<br>
(Ха-а, ха-а, ха-а)<br>
Если хочешь ты их спасти,<br>
(Ха-а, ха-а, ха-а)<br>
В инстаграме найди мой ник!<br>
<br>
<span class='blue'>[Предприпев] Х1-3ж - aa<br></span>
Метко<br>
Стелет beauty-детка,<br>
Красит губы к лету,<br>
Сладкая конфета.<br>
Влюблена планета,<br>
Как Шекспир в Джульетту,<br>
Без чужих советов<br>
Из модерна в ретро<br>
Эта детка!<br>
<br>
<span class='blue'>[Припев] Дк1-3м<br></span>
Beauty bomb!<br>
Hey, beauty bomb!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Prada на оправе,<br>
Тени в красках от кутюр. <span class='blue'>(Строка Л4м)<br></span>
Мэйком день поправим<br>
Без фальшивых купюр.<br>
(Ха-а, ха-а, ха-а)<br>
За обложкой огромный мир,<br>
(Ха-а, ха-а, ха-а)<br>
Открываем его весь, смотри!<br>
<br>
<span class='blue'>[Предприпев]<br></span>
Метко<br>
Стелет beauty-детка,<br>
Красит губы к лету,<br>
Сладкая конфета.<br>
Влюблена планета,<br>
Как Шекспир в Джульетту,<br>
Без чужих советов<br>
Из модерна в ретро<br>
Эта детка!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Beauty bomb!<br>
Hey!<br>
Hey!<br>
Hey, beauty bomb!<br>
<br>
<span class='blue'>[Куплет 3] Л3м - aaaa<br></span>
(М, ммМ, мммМм!)<br>
(М, ммМ, мммМм!)<br>
(М, ммМ, мммМм!) На миг в красках утону.<br>
(М, ммМ, мммМм!) Магнит я для всех вокруг.<br>
(М, ммМ, мммМм!) МанИт в лето сочный лук.<br>
(М, ммМ, мммМм!) Молчи или убегу!<br>
<br>
<span class='blue'>[Припев]<br></span>
Beauty bomb!<br>
Hey!<br>
Hey!<br>
Hey, nine-one-one!<br>
One!<br>
Nine!<br>
Nine-one-one!<br>
<br>
<span class='blue'><a href='https://genius.com/Katya-adushkina-beauty-bomb-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
