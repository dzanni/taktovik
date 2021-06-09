<?php
$title = 'Ольга Бузова - Не виновата (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/EJbRswu4KgM'";
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

<span class='blue'>[Вступление] Тк4цж/м - AAbb<br></span>
На дискотеке так девчатам одиноко,<br>
Стоят в углу и крутят локон.<br>
Одинокие девчата так хотят...<br>
<br>
<span class='blue'>[Дроп] Дк4цм/ - a</span><br>
#OlgabUzovaIndahOuse<br>
<br>
Одинокие девчата так хотят...<br>
<br>
<span class='blue'>[Припев] Л2-3жм? - AAAbAAAb</span><br>
Но я не виновата, <br>
Что дэнсят ребята,<br>
Что дэнсят ребята <br>
Одни без девчат.<br>
Но я не виновата, <br>
Я не виновата,<br>
Что любят ребята <br>
Других ребят.<br>
<div class='refren'><span class='blue'>[Припев] Л3ж/ - AAAx</span><br>
На-нА-на-нА-на, на-нА-на!<br>
На-нА-на-нА-на, на-нА-на!<br>
На-нА-на-нА-на, на-нА-на!<br>
На-нА-на-нА-на, Oу, Оу! <span class='blue'>(Строка Л4цм)</span><br></div>
<br>
<span class='blue'>[Куплет 1] Л444ц2м/м - AAAbCCCb</span><br>
На танцполе зажигаются огни,<br>
И под стробоскопом мы с тобой одни.<br>
Ты, подруга, не поймёшь, увы, никак,<br>
Почему всё так!<br>
  <div class='refren'>И медляк заводит снова диск-жокей,<br>
  Он выходит на танцпол, идёт не к ней!<br>
  И девчачье сердце замирает вдруг,<br>
  Как и всё вокруг (Как и всё вокруг!)</div>
<br>
<span class='blue'>[Переход] Я5м/д? - aaB'B'</span><br>
А ты влюбилась словно в первый раз,<br>
Стоишь и не отводишь с него глаз.<br>
Ты умница, и ты красавица, <span class='blue'>(Строка Я4д)</span><br>
Но почему в тебя он не влюбляется?<br>
<br>
<span class='blue'>[Припев]</span><br>
Но я не виновата, <br>
Что дэнсят ребята,<br>
Что дэнсят ребята <br>
Одни без девчат.<br>
Но я не виновата, <br>
Я не виновата,<br>
Что любят ребята <br>
Других ребят.<br>
<div class='refren'>
На-нА-на-нА-на, на-нА-на!<br>
На-нА-на-нА-на, на-нА-на!<br>
На-нА-на-нА-на, на-нА-на!<br>
На-нА-на-нА-на, Оу, Оу!</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
По статистике одна из десяти <br>
Лишь должна стоять одна здесь и грустить. <br>
Но статистика, подруга, не верна, <br>
И ты не одна! <br>
  <div class='refren'>Вот, стоят здесь все девчата и ждут парней <br>
  На танцполе средь мерцающих огней. <br>
  И выходят дэнсить парни на танцпол. <br>
  Только в чём прикол?</div>
 <br>
<span class='blue'>[Скит] Дк6цм/м - aaaa</span><br>
О! <br>
Прикованы взглядом, вроде бы рядом, но так далеко (так далеко). <br>
И между вами, как океан между материков (У!) <br>
Весь твой пыл будто бы в раз охладило водой (водой). <br>
Почему он танцует, но не с тобой? <span class='blue'>(Строка Дк4цм)</span><br>
 <br>
<span class='blue'>[Переход]</span><br>
А ты влюбилась словно в первый раз, <br>
Стоишь и не отводишь с него глаз. <br>
Ты умница, и ты красавица, <br>
Но почему в тебя он не влюбляется? <br>
 <br>
<span class='blue'>[Дроп]</span><br>
#OlgabUzovaIndahOuse<br>
 <br>
<span class='blue'>[Припев]</span><br>
Но я не виновата, <br>
Что дэнсят ребята,<br>
Что дэнсят ребята <br>
Одни без девчат.<br>
Но я не виновата, <br>
Я не виновата,<br>
Что любят ребята <br>
Других ребят. (У!)<br>
 <br>
<span class='blue'>[Финал]<br></span>
На дискотеке так девчатам одиноко, <br>
Стоят в углу и крутят локон. <br>
Одинокие девчата так хотят <br>
Потанцевать, но нет ребят. <br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/b/buzova_olga/olga-buzova-ne-vinovata.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
