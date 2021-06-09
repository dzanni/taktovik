<?php
$title = 'Елена Темникова - Вдох (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/1TC_Hd5e8is'";
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

<span class='blue'>[Куплет 1] Л23м - abab<br></span>
До постели следы, <br>
И нетрезвый рассвет в окне <br>
Ты меня поменял, <br>
Но вдыхаю тебя вдвойне. <br>
<br>
<span class='blue'>[Переход] Л2-5цжм? - AAbb<br></span>
Эти капли по телу совсем не от дождя, знаешь? <br>
Незаметно на твоих руках таю. <br>
Меньше света, мы спрячемся за полумрак, <br>
А дальше как? <br>
<br>
<span class='blue'>[Припев х2] Л3мммд - aaaA<br></span>
Я не чувствую вдох пока. <br>
Добавляешь мне яд в бокал. <br>
Мы, походу, сошли с ума: <br>
Этой ночью и тобой я зависима! <br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Снова делаю вдох, <br>
Понимаешь меня без слов. <br>
Без остатка с тобой <br>
Растворимся во мгле густой. <br>
<br>
<span class='blue'>[Переход]<br></span>
Эти капли по телу совсем не от дождя, знаешь? <br>
Незаметно на твоих руках таю. <br>
Меньше света, мы спрячемся за полумрак, <br>
А дальше как? <br>
<br>
<span class='blue'>[Припев х2]<br></span>
Я не чувствую вдох пока. <br>
Добавляешь мне яд в бокал. <br>
Мы, походу, сошли с ума: <br>
Этой ночью и тобой я зависима! <br>
<br>
<span class='blue'>[Переход, которого нет в клипе] Л2-5цм? - aabb<br></span>
Эти кадры в постели будут спрятаны от глаз. <br>
Только тише, мы не замечаем фраз.<br>
Меньше света, и прячемся за полумрак, <br>
А дальше как?<br>
<br>
<span class='blue'>Источник: текст, приложенный к клипу Youtube</a></span><br>
<br>
<br>
N.B. В припеве рифма м=д "с ума" - "зависима".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
