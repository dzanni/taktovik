<?php
$title = 'Елена Темникова - Казался странным (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wBmXhVELbpY'";
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

<span class='blue'>[Куплет 1] Тк3д, Ам2ж, Тк3м - A'A'A'A', AAA, aa<br></span>
В эту ночь мы без сознания <br>
Влюблены, только не знаю я, <br>
Остаться или выбрать окончание,<br>
Попросив ещё на прощание.<br>
<div class='refren'>Когда станет пусто <br>
И чувства отпустят.<br>
Мы это пропустим <br>
И снова закрутим.</div>
<div class='refren1'>Под цвет бессонных ночей, <br>
Теперь нам будет легче.</div>
<br>
<span class='blue'>[Припев 2x] Л2жм - AbAb<br></span>
Ты казался странным<br>
В этот вечер там.<br>
Мы только разыграли<br>
Наш первый тайм.<br>
И на чувства больше <br>
Нам попасться сложно<br>
И меняться поздно.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Посмотри, и тоже захочется <br>
Разделить, ведь скоро закончатся.<br>
И линии нас держат крепче, чем всегда,<br>
Разливая сон на остатки льда.<br>
<div class='refren'>Когда станет пусто, <br>
И чувства отпустят,<br>
Коснемся губами <br>
И просто оставим</div>
<div class='refren1'>Глаза полузакрытыми, <br>
Бокалы недопитыми.<br></div>
<br>
<span class='blue'>[Припев 2x]<br></span>
Ты казался странным<br>
В этот вечер там.<br>
Мы только разыграли<br>
Наш первый тайм.<br>
И на чувства больше <br>
Нам попасться сложно<br>
И меняться поздно.<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/e1/elena-temnikova/8252-elena-temnikova-kazalsya-strannim-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Отклонения от естественого ударения. Рифма д=м "ночей-легче". <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
