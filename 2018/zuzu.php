<?php
$title = 'Ленинград ft. Глюк’oZa & ST - Жу-Жу (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/a-GQDCtt1Vk'";
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
[Диалог и японская песенка из начала клипа и финальных титров пропущены]<br>
<br>
<span class='blue'>[Куплет 1, Глюк’oZa] Х5ж - AABB<br></span>
Оля недовольна «Мерседесом».<br>
Коля недоволен лишним весом.<br>
Он и своей «Маздой» недоволен.<br>
«Мерседес» его б устроил Олин.<br>
<br>
<span class='blue'>[Припев] Тк2-4цм - aaaaaa<br></span>
А я вам так скажу, а я вам та-а-а-к скажу!<br>
Я же, вот, езжу на «Пежо» и не пизжу!<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Езжу на «Пежо» и не пизжу!<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Жу-жу-жу-жу!<br>
<br>
<span class='blue'>[Куплет 2, Глюк’oZa] Х5жм? - AAbb<br></span>
Толя часто недоволен Олей.<br>
И зарплатой тоже недоволен.<br>
Крутятся, как белки в колесе<br>
В нашем офисе, и недовольны все. <span class='blue'>(Строка Тк4цм)<br></span>
<br>
<span class='blue'>[Припев]<br></span>
А я вам так скажу, а я вам та-а-а-к скажу!<br>
Я же, вот, езжу на «Пежо» и не пизжу!<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Езжу на «Пежо» и не пизжу!<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Жу-жу-жу-жу!<br>
<br>
<span class='blue'>[Куплет 3, ST] Тк4цж - AA<br></span>
А я в пробке на тонировке<br>
Опускаю стекла нажатьем кнопки.<br>
И что я вижу? А слева пыжик.<br>
Рулю ближе к нему я для стыковки.<br>
В ее глазах читаю я вопрос: «Хуя се!»<br>
Видать, я первый в ее жизни на S-классе!<br>
Я массе подарю развитие событий,<br>
Но промолчу, что на S-классе я водитель!<br>
<br>
<span class='blue'>[Припев]<br></span>
А я вам так скажу, а я вам та-а-а-к скажу!<br>
Я же, вот, езжу на «Пежо» и не пизжу!<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Езжу на «Пежо» и не пизжу!<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Жу-жу-жу-жу!<br>
<br>
<span class='blue'>[Куплет 4, Глюк’oZa]<br></span>
Муж у Оли тоже недоволен.<br>
Он начальник Толин, Олин, Колин.<br>
Оля хочет вместо «Мерса» «Б-ху»<br>
От того, что просто делать нехуй!<br>
<br>
<span class='blue'>[Припев]<br></span>
А я вам так скажу, а я вам та-а-а-к скажу!<br>
Я же, вот, езжу на «Пежо» и не пизжу!<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Езжу на «Пежо» и не пизжу!<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Жу-жу-жу-жу!<br>
<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Езжу на «Пежо» и не пизжу!<br>
Жу-жу-жу-жу! Жу-жу-жу-жу!<br>
Жу-жу-жу-жу!<br>
<br>
<span class='blue'><a href='https://genius.com/Leningrad-ju-ju-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
