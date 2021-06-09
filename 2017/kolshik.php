<?php
$title = 'Ленинград - Кольщик (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ktiONWfSL48'";
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

<span class='blue'>[Первый куплет] Х4жм AbAb</span><br>
Жили мы на моей хате,<br>
Он не заносил в общак.<br>
Ну, короче, без понятий<br>
И всегда на кислых щах.<br>
<br>
<span class='blue'>[Припев] Х5//44мж aBaB</span><br>
Наколи мне брови, наколи!<br>
Кольщик, наколи мне брови!<br>
В память о большой любви,<br>
Чтобы взгляд мой стал суровей!<br>
<br>
Наколи! Наколи!<br>
<br>
<span class='blue'>[Второй куплет]</span><br>
Он базарил о высоком<br>
И по кухне всё шнырял.<br>
Он бодяжил водку с соком<br>
И любил "Мадрид Реал".<br>
<br>
<span class='blue'>[Припев]</span><br>
Наколи мне брови, наколи!<br>
Кольщик, наколи мне брови!<br>
В память о большой любви,<br>
Чтобы взгляд мой стал суровей!<br>
<br>
Наколи! Наколи!<br>
Наколи! Наколи!<br>
Наколи! Наколи!<br>
Наколи! Наколи!<br>
Наколи! Наколи!<br>
<br>
<span class='blue'>[Третий куплет] Я4ц5цн2ж - AABB</span><br>
Играет бас, играет соло,<br>
Потом споёт она, как брови наколола.<br>
Давай нам пой, да говори, да,<br>
Свою историю, прекрасная Флори-да.<br>
<br>
<span class='blue'>[Четвертый куплет]</span><br>
А потом рванул на волю,<br>
Он походу соскочил.<br>
Мне оставил дочку Олю<br>
И под ковриком ключи.<br>
<br>
<span class='blue'>[Припев]</span><br>
Наколи мне брови, наколи!<br>
Кольщик, наколи мне брови!<br>
В память о большой любви,<br>
Чтобы взгляд мой стал суровей!<br>
<br>
Наколи! Наколи!<br>
Наколи!<br>
<br>
<span class='blue'>Источник: расшифровка клипа<br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
