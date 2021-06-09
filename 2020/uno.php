<?php
$title = 'Little Big - Uno (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/L_dWvTCdDQ4'";
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

<span class='blue'>[Verse 1, Sonya & Ilich] Л4ц535жм? - AAAbCCCbCCb</span><br>
It's gonna take more than one "Мargarita"<br>
I'm gonna call you my sweet señorita<br>
I'm gonna leave after night only with ya<br>
<div class='refren'>All you have to do is to be ready for some action now</div>

Don't be a dummy, dummy<br>
I got that yummy, yummy<br>
Can we be chummy, chummy <br>
Right after midnight?<br>
Yeah, you so charming bunny<br>
Yeah, you so funny honey<br>
<div class='refren'>All you have to do is to be ready for some action now</div>
<br>
<span class='blue'>[Chorus, Ilich & Sonya] Л3-4цж/? - AAAxX<br></span>
Uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, dos, tres, cuatro, cinco, seis<br>
Uno, uno<br>
<br>
<span class='blue'>[Verse 2, Ilich] Л35жм? - AAAbCCCbCCb</span><br>
Ho! Are you ready?<br>
Ha! Hold it steady<br>
Ho! Come to daddy<br>
<div class='refren'>All you have to do is to be ready for some action now</div>

<span class='blue'>[Sonya & Ilich]<br></span>
Don't be a dummy, dummy<br>
I got that yummy, yummy<br>
Can we be chummy, chummy <br>
Right after midnight?<br>
The night is charming bunny<br>
You are so funny honey<br>
<div class='refren'>All you have to do is to be ready for some action now</div>
<br>
<span class='blue'>[Chorus, Ilich, Sonya & Both]<br></span>
Uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, dos, tres, cuatro, cinco, seis<br>
Uno, uno<br>
Uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, dos, tres, cuatro, cinco, seis<br>
<br>
<span class='blue'>[Bridge, Sonya]<br></span>
Uno, dos, tres, cuatro, cinco, seis<br>
Uno, dos, tres, cuatro, cinco, seis<br>
Uno, dos, tres, cuatro, cinco, seis<br>
Uno, dos, tres, cuatro, cinco, seis<br>
<br>
<span class='blue'>[Chorus, Both & Sonya]<br></span>
Uno, uno<br>
Uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, dos, tres, cuatro, cinco, seis<br>
Uno, uno<br>
Uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, uno, uno (Uno), dos (Dos), cuatro (Cuatro)<br>
Uno, dos, tres, cuatro, cinco, seis<br>
Uno, uno<br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/l/little_big/little-big-uno.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
