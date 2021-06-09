<?php
$title = 'Зомб - PANAMERA (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Vha-RmRZvPY'";
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
Еа! У-у! Я-а-а!<br>
Sin is all!<br>
Sin, sin, sin is all!<br>
Еа! Еа! Джи-джи! (Еа! Джи-джи!)<br>
Э-э-э!<br>
Go!<br>
<br>
<span class='blue'>[Припев] Л4ц3ж - AA<br></span>
Roof is on fire, ma. Roof is on fire. <br>
Эта детка словно прямиком из рая (айа) <br>
Roof is on fire, ma. Roof is on fire. <br>
 Когда рядом ты, я голову теряю! (о)<br>
No, no better! (хо) No, no better!  <br>
 Эти формы, детка, будто Panamera! <br>
No, no better! (хо) No, no better!  <br>
 Эти формы, детка, будто Panamera! <br>
 <br>
 <span class='blue'>[Куплет] Тк3-5цм/ж - aaaa, AAAA<br></span>
 Ей сегодня всё, что хочешь, буквально, любой каприз.<br>
  В личном топе номер раз, девочка супер-приз.<br>
   И я сегодня только твой, ты не идешь на компромисс.<br>
    Что ты делаешь со мною? Детка, остановись! (о)<br>
    <div class='refren'>
     И чтобы нам проснутся вместе, не нужна причина. <br>
     Кожа цвета мокачино, ты меня разоблачила. <br>
     Пусть с тобою не знакомы мы почти, но<br>
     Ты так этого хотела и ты это получила. </div>

     В спальне жарко, будто бы на Малибу-у. <br>
     Она моя ммм... ммм... она моя Бу... <br>
     Кто там звонит, малая, не бери трубу! <br>
     Она уедет рано утром, но куда - я не ебу! <br>
       <div class='refren'>
     А пока огонь, мы не спешим звонить пожарным. <br>
     Авиарежим, чтобы никто не помешал нам. <br>
     А пока огонь, мы не спешим звонить пожарным. <br>
     Авиарежим, чтобы никто не помешал нам. </div>
<br>
     <span class='blue'>[Переход]<br></span>
     Э (э-э-э), Э (э-э-э-э)<br>
     Чтобы никто не помешал нам!<br>
     Roof is on fire!<br>
     Roof is on fire!<br>
     Айа, айа, айа!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Roof is on fire, ma. Roof is on fire. <br>
Эта детка словно прямиком из рая (айа) <br>
Roof is on fire, ma. Roof is on fire. <br>
 Когда рядом ты, я голову теряю! (о)<br>
No, no better! (хо) No, no better!  <br>
 Эти формы, детка, будто Panamera! <br>
No, no better! (хо) No, no better!  <br>
 Эти формы, детка, будто Panamera! <br>
 <br>
<span class='blue'>[Аутро]<br></span>
Е! <br>
Вау, вау, вау, вау, вау!<br>
   Ччч!<br>
   <br>
<span class='blue'>Источник: Текст под клипом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
