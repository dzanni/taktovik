<?php
$title = 'Enjoykin - Брат (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Dko8PT5kD5g'";
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
 <span class='blue'>Тк3м - abab <br></span>
Слышь, скажи бандитам своим,<br>
 Я слово своё держу! <br>
 Слышь, скажи бандитам своим, <br>
 Кто брата тронет - завалю! <br>
 <br>
 <span class='blue'>[Припев] Тк2-4цм? - aaXa aaa<br></span>
 Я на рыбалке ногу проколол, <br>
 А ты меня тащил домой. <br>
 А помнишь, я сома испугался? <br>
 А ты смеялся надо мной! <br>
 Я на рыбалке ногу проколол, <br>
 А ты меня тащил домой. <br>
 Ты брат! Брат мой! <br>
<br>
 <span class='blue'>Тк4ц3м? - aAxa <br></span>
 Скажи, скажи, в чём сила, брат? <br>
 Я вот думаю, что сила в правде. <br>
 Кто прав - тот и сильней. <br>
Что сила в правде, брат. <br>
 <br>
  <span class='blue'>Х4м - aa<br></span>
 Я узнал, что у меня <br>
 Есть огромная семья: <br>
 И тропинка, и лесок, <br>
 В поле каждый колосок. <br>
 Я узнал, что у меня, <br>
 Есть огромная семья. <br>
 Это Родина моя, <br>
 Всех люблю на свете я! <br>
 <br>
   <span class='blue'>Дв23м - abab<br></span>
 Ты умный, брат.  <br>
 Зачем живем, скажи? <br>
 Знаешь, брат, <br>
  Хороший ты мужик! <br>
 Прорвемся, брат! <br>
  Ты подожди, родной!   <span class='blue'>(Строка Дк3м)<br></span>
 Прорвемся, брат! <br>
  Не бойся, я с тобой! <br>
 <br>
 <span class='blue'>[Припев] <br></span>
 Я на рыбалке ногу проколол, <br>
 А ты меня тащил домой. <br>
 А помнишь, я сома испугался? <br>
 А ты смеялся надо мной! <br>
 Я на рыбалке ногу проколол, <br>
 А ты меня тащил домой. <br>
 Ты брат! Брат мой! <br>
<br>
<span class='blue'>
  Источник: текст под роликом Youtube</span><br>
<br>
<br>
N.B. Песня смонтирован из реплик фильмов Алексея Балабанова "Брат" (1997) и "Брат 2" (2000).<br>
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
