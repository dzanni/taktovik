<?php
$title = 'PUNKISS - Мать-одиночка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xcrtRRTE9GI'";
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

<span class='blue'>[Куплет 1] Х4м? - Xaxa<br></span>
Я пошёл выбрасывать мусор<br>
И увидел тебя<br>
Ты сказала: «Отвали!<br>
Я недавно родила» (У!)<br>
<br>
<span class='blue'>[Припев] Дк4цж? - AAAA<br></span>
Мать-одиночка, мать-одиночка,<br>
У тебя (у тебя!) родилась дочка!<br>
Мать-одиночка, мать-одиночка,<br>
Пойдём ко мне, будем делать сыночка!<br>
<br>
<span class='blue'>[Бридж] Дк2м - aaax<br></span>
Мать, мать!<br>
Я ебал твою мать!<br>
Мать, мать!<br>
У-у-у-у!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я пошёл в торговый центр,<br>
Как на зло, тут ты была.<br>
Очень злобно посмотрев, <br>
Ты сказала мне: «Ублюдок,<br>
Я залетела от тебя» (У!)<br>
<br>
<span class='blue'>[Припев]<br></span>
Мать-одиночка, мать-одиночка,<br>
У тебя родилась дочка!<br>
Мать-одиночка, мать-одиночка,<br>
Поздравляю с сыночком! <span class='blue'>(Строка Дк2ж)<br></span>
<br>
<span class='blue'>[Бридж]<br></span>
Мать, мать!<br>
Я ебал твою мать!<br>
Мать, мать!<br>
<br>
<span class='blue'>[Куплет 3] Тк4цдм - X'xX'aa<br></span>
И тут понял я, что нужно быть ответственней<br>
И совсем перестал мусор выносить<br>
Я боюсь тебя встретить на улице<br>
Это будет такой пиздец<br>
Ты скажешь Серёже: «Это твой отец!»<br>
<br>
<span class='blue'>[Припев]<br></span>
Мать-одиночка, мать-одиночка,<br>
Теперь у тебя сыночек и дочка!<br>
Мать-одиночка, мать-одиночка,<br>
Вот и всё, в истории точка!<br>
<br>
<span class='blue'>[Аутро] Х4цн1ж - AAAX'<br></span>
Нефиг трахаться с мудаками!<br>
Нефиг трахаться с мудаками!<br>
Нефиг трахаться с мудаками!<br>
Нефиг трахаться!<br>
<br>
<span class='blue'><a href='https://genius.com/Punkiss-single-mother-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
