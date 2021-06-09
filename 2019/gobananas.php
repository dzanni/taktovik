<?php
$title = 'Little Big - Go Bananas (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ADlGkXAz1D0'";
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

<span class='blue'>[Hook, Ilich] Х53мм - aaabaaaab<br></span>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
<br>
<span class='blue'>[Pre-Verse, Sonya] Дв1-5м/ - aax<br></span>
Now (Oop! Oop!)<br>
Oh let me see you go ba-na-nas (Oop! Oop!)<br>
Oh let me see you go<br>
<br>
<span class='blue'>[Verse, Ilich & Sonya] Л34м/ - aaaa<br></span>
I'm gonna nuts right now<br>
I'm gonna, I'm gonna fruits right now (Oop!)<br>
I'm gonna lose my mind<br>
I'm gonna, I'm gonna lose my mind (Oop!)<br>
<span class='blue'>[Verse, Ilich & Sonya] Л5цм/ - aaaa<br></span>
Go bananas, be like Banana Man<br>
Go bananas, be like Banana Man<br>
Go bananas, be like Banana Man<br>
Go bananas, be (Oop! Oop!) like Banana Man<br>
<br>
<span class='blue'>[Pre-Hook, Ilich]<br></span>
Bana-nana-nana-na na-na<br>
Bana-nana-nana-na na-na<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
Bana-nana-nana-na na-na<br>
Bana-nana-nana-na na-na<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
<br>
<span class='blue'>[Hook, Ilich]<br></span>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
<br>
<span class='blue'>[Bridge, Ilich & Sonya] Л1-4цм/ж - abbaaab<br></span>
I'm Banana Man<br>
Banana<br>
Banana<br>
I'm Banana, I'm Banana Man (Banana)<br>
I'm Banana, I'm Banana Man (Banana)<br>
I'm Banana, I'm Banana Man (Banana)<br>
I'm Banana (I'm Banana, I'm Banana Man)<br>
<br>
<span class='blue'>[Hook, Ilich]<br></span>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
Bana-nana-nana-na na-na (Ay!)<br>
Bana-nana-nana-na na-na (Now!)<br>
Bana-nana-nana-na na-na<br>
Ya! I'm Banana Man<br>
 <br>
<span class='blue'><a href='https://genius.com/Little-big-go-bananas-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
