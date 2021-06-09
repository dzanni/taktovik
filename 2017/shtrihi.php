<?php
$title = 'Burito - Штрихи (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kn6LXpEcRp8'";
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

<span class='blue'>[Куплет 1] Дк2-4ц - XA’XA’, xaX’a<br></span>
Мы штрихи одного рисунка.<br>
Черно-белая графика.<br>
Безликие тени на пустых перекрестках<br>
В сетях городского трафика.<br>
<div class='refren'>Когда ночь остановит свой взгляд<br>
На созвучие сказанных слов.<br>
Поминутными мутными формами в воздухе<br>
Разольется любовь.</div>
<br>
<span class='blue'>[Припев] Дк4-6цм - abab<br></span>
Снова бегут по небу облака (бегут облака),<br>
Мягкими перьями белыми укрывая внизу города.<br>
В этих районах мы скроемся наверняка (мы скроемся наверняка),<br>
Наши сердца не разлучит никто, никогда, никогда.<br>
<br>
<span class='blue'>[Куплет 2] XaX'a, A'A'A'a<br></span>
Мы все те же, что месяцем раньше.<br>
Только взглядом уже не совсем.<br>
Черным по белому, белым по черному.<br>
Краски снова станут ничем.<br>
<div class='refren'>Распадаясь, становясь частотами<br>
Четными и нечетными. <br>
Радиоэфирными волнами. <br>
Нас кто-то встретит еще.</div>
<br>
<span class='blue'>[Припев]<br></span>
Снова бегут по небу облака (бегут облака),<br>
Мягкими перьями белыми укрывая внизу города.<br>
В этих районах мы скроемся наверняка (мы скроемся наверняка),<br>
Наши сердца не разлучит никто, никогда, никогда.<br>
<br>
Эй-а!<br>
Эй-а!<br>
Эй-а!<br>
Эй-а-а!<br>
<br>
<span class='blue'>[Куплет 3] Д4цм/ж - AAbb, aabB<br></span>
Ледяные камни, горячее сердце.<br>
В нас топят надежду, но мы верим, как прежде.<br>
Руки Вселенной держат нас.<br>
И льется любовь прямо сейчас.<br>
<div class='refren'>
Разольется любовь, моя любовь.<br>
Разольется по венам моя любовь.<br>
Твое сердце согреет моя весна.<br>
Разольется любовь не напрасно. <span class='blue'>(Строка Дк3ж)</span></div>
<br>
<span class='blue'>[Припев]<br></span>
Снова бегут по небу облака (бегут облака),<br>
Мягкими перьями белыми укрывая внизу города.<br>
В этих районах мы скроемся наверняка (мы скроемся наверняка),<br>
Наши сердца не разлучит никто, никогда, никогда.<br>
<br>
Эй-а!<br>
Эй-а!<br>
Эй-а!<br>
Эй-а-а!<br>
<br>
<span class='i'>- Возьми очки!</span><br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/b/burito/8782-burito-shtrihi-text-pesni.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B.: д=ж "нечетными - еще", "весна-напрасно".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
