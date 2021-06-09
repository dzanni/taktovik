<?php
$title = 'Луна - Free Love (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Ssb2AMR-kEo'";
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

<span class='blue'>[Куплет 1] Л4цм - aabb<br></span>
Твои невинные сны — как ледяной артефакт,<br>
Всегда расскажут о нас, они — сильнейший экстракт.<br>
Дорога кончилась здесь, а впереди лишь туман.<br>
И нас отпустит, поверь, мы обойдемся без ран.<br>
<br>
<span class='blue'>[Хук] Л2м - xaxa<br></span>
Ты – раб моих ног,<br>
Ты – раб моих снов,<br>
Мой маленький принц,<br>
Я – королева миров.<br>
<br>
<span class='blue'>[Переход] Тк4цм - aa<br></span>
Давай лучше поиграем в свободную любовь.<br>
Жить, как птичка в клетке – прерванный полет.<br>
<br>
<span class='blue'>[Припев] Л3м - abab<br></span>
Free love,<br>
Free love,<br>
Free love.<br>
Игра в свободную любовь.<br>
Free love,<br>
Free love,<br>
Free love.<br>
Игра в свободную любовь.<br>
<br>
<span class='blue'>[Куплет 2] Тк4цж/д - AA, A'A'<br></span>
Это как солнечный свет, по стеклу скользящий,<br>
Как удар по губам ненавязчивый.<br>
Это глоток воды среди волшебной пустоши,<br>
А ты боишься, малыш, раньше времени струсивший.<br>
Запомни эти слова, они нежнее, чем иней,<br>
Они расправятся с нами, как месть жестокой богини.<br>
Запомни музыки яд, не бойся, это не больно,<br>
Это как черные скалы, мощные волны.<br>
<br>
<span class='blue'>[Хук]<br></span>
Ты – раб моих ног,<br>
Ты – раб моих снов,<br>
Мой маленький принц,<br>
Я – королева миров.<br>
<br>
<span class='blue'>[Переход]<br></span>
Давай лучше поиграем в свободную любовь.<br>
Жить, как птичка в клетке – прерванный полет.<br>
<br>
<span class='blue'>[Припев]<br></span>
Free love,<br>
Free love,<br>
Free love.<br>
Игра в свободную любовь.<br>
Free love,<br>
Free love,<br>
Free love.<br>
Игра в свободную любовь.<br>
Free love,<br>
Free love,<br>
Free love.<br>
Игра в свободную любовь.<br>
Free love,<br>
Free love,<br>
Free love.<br>
Игра в свободную любовь.<br>
<br>
<span class='blue'>[Хук]<br></span>
Ты – раб моих ног,<br>
Ты – раб моих снов,<br>
Мой маленький принц,<br>
Я – королева миров.<br>
<br>
<span class='blue'>[Переход]<br></span>
Давай лучше поиграем в свободную любовь.<br>
Жить, как птичка в клетке – прерванный полет.<br>
<br>
<span class='blue'>[Припев]<br></span>
Free love,<br>
Free love,<br>
Free love.<br>
Игра в свободную любовь.<br>
Free love,<br>
Free love,<br>
Free love.<br>
Игра в свободную любовь.<br>
<br>
<span class='blue'>[Аутро]<br></span>
Свободную любовь,<br>
Свободную любовь,<br>
Свободную любовь,<br>
Свободную любовь...<br>
<br>
Музыка: Shumno, Alexandr Voloschuk, Alexandr Kariev<br>
Слова: Kristina Bardash<br>
<br>
<span class='blue'><a href="https://genius.com/Luna-free-love-lyrics"
  target="_blank">Источник</a><br></span>
<br>
<br>
P.S. ж=д (скользЯщий - ненавЯзчивый)<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
