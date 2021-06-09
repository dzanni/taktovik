<?php
$title = 'Little Big - Hypnodancer (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/RhMYBfF7-hE'";
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
<span class='blue'>[Sonya; with Ilich] Х46м/ - aaaaaa</span><br>
I don't want to hear you say<br>
"I will go another way"<br>
"Should I go or should I stay eay-eay-eay?"<br>
If I have to go away<br>
This will go another way<br>
Cannot let you slip away eay-eay-eay<br>
<br>

<span class='blue'>[Hook: Ilich & Mr. Clown] Дв2мж? - aaaAaaaA</span><br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
Dance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
<br>
<span class='blue'>[Verse 2: Sonya; with Ilich]</span><br>
I just try to find my way<br>
Through whatever, come what may<br>
I will do it anyway eay-eay-eay<br>
It's just little game we play<br>
If feels good to get away<br>
There is nothing else to say eay-eay-eay<br>
<br>
<span class='blue'>[Hook: Ilich & Mr. Clown; with Sonya]<br></span>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
Dance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
Dance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
Dance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
<br>
<span class='blue'>[Bridge: Ilich & Sonya] Дв122м/2ж - aaaA<br></span>
Dance<br>
Go hypnodance<br>
Go hypnodance<br>
Go hypnodancer<br>
Dance<br>
Go hypnodance<br>
Go hypnodance<br>
Go hypnodancer<br>
Dance (Dancer)<br>
Go hypnodance (Dancer)<br>
Go hypnodance (Dancer)<br>
Go hypnodancer<br>
Dance (Dancer)<br>
Go hypnodance (Dancer)<br>
Go hypnodance (Dancer)<br>
Go hypnodancer<br>
<br>
<span class='blue'>[Hook: Ilich & Mr. Clown; with Sonya]<br></span>
Dance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
Dance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
Dance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
Dance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Hypnodance (Hey! Hey!)<br>
Go hypnodancer<br>
<br>
<span class='blue'>[Outro]<br></span>
Go hypnodancer!<br>
he! <br>
 <br>
<span class='blue'><a href='https://genius.com/Little-big-hypnodancer-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
