<?php
$title = 'Леонид Агутин ft. Уилли Кей - Самба (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/TECLAIWQIMg'";
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

<span class='blue'>[Куплет 1] Л2-4жм AABBccddd<br></span>
Она возникла незаметно <br>
В том платье, подхваченным ветром.  <br>
Она беспечно танцевала,  <br>
И солнце ее обнимало.  <br>
На самом деле или нет? <br>
Я видел ярко-белый свет,  <br>
Что догорит одной  <br>
Утренней звездой  <br>
Само собой.  <br>
 <br>
<span class='blue'>[Припев] Л1-5ж - AABBCCDED<br></span>
Самба,  <br>
На берегу ансамбль.  <br>
Но убегу ли я? Вряд ли! <br>
В этот неоправданно нарядный  <br>
Город,  <br>
Что неизменно молод,  <br>
Где выплывает на берег  <br>
Каждый,  <br>
И неважно  <br>
Здесь, во что он верит!  <br>
 <br>
 <span class='blue'>[Куплет 2]</span><br>
Она не может по-другому; <br>
Боюсь, что мне это знакомо. <br>
До неизбежного рассвета <br>
Цепляться за краешек лета. <br>
Не замечая пустоты, <br>
болтая с вечностью «на ты», <br>
Я счастливо брёл домой <br>
И шумел прибой, <br>
Само собой. <br>
<br>
<span class='blue'>[Испанский куплет: Уилли Кей] Тк4цжм - XxXx<br></span>
Y sámbame y que salga el sol perdido entre tu lecho, <br>
Estoy preso entre los besos que no te di, <br>
Y el alma se enamora aunque vague triste y sola, <br>
У de tus olas dame agua pa beber.<br>
<br>
<span class='blue'>[Макаронический куплет: Леонид Агутин & Уилли Кей] Кей: Тк4ц2мж - xxX<br></span>
Не замечая пустоты, <br>
Olvida todo y dame de tu amor, <br>
Болтая с вечностью «на ты», <br>
Y vamos los dos, <br>
Я счастливо брёл домой <br>
И шумел прибой, <br>
Само собой. <br>
Olvida todo y samba. <br>
<br>
<span class='blue'>[Припев]<br></span>
Самба,  <br>
На берегу ансамбль.  <br>
Но убегу ли я? Вряд ли! <br>
В этот неоправданно нарядный  <br>
Город,  <br>
Что неизменно молод,  <br>
Где выплывает на берег  <br>
Каждый,  <br>
И неважно  <br>
Здесь, во что он верит! <br>
<br>
<span class='blue'>[Макаронический припев: Леонид Агутин & Уилли Кей] Кей: Тк4ц2мж - aaX<br><br></span>
Que me embarga la pasión, <br>
Y me nace esta canción, <br>
Que es para ti morena. <br>
И неважно здесь, во что он верит!<br>
<br>
Музыка и слова: Леонид Агутин<br>
<br>
<span class='blue'>Источник: официальный текст клипа Youtube</span><br>
<br>
<br>
N.B. Логаэд на основе Х4 в куплете, на основе Дк в припеве. Похожие ритимические рисунки ранее
использованы в песнях "Остров" (1996, сл. и муз. Л. Агутина, ср. "Просто /Ты одинокий остров" - "Самба /На берегу ансамбль") и
"Осенний джаз" (1995, муз. Ю. Варума, сл. К. Крастошевского, ср. "Звучит в ночи осенний джаз, /Танцуй со мной в последний раз. /Поёт и плачет саксофон,
/Нам в эту ночь играет он" и "Не замечая пустоты, / Болтая с вечностью «на ты»"). <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
