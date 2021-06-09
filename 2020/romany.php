<?php
$title = 'Филипп Киркоров - Романы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/VcPigheMWsI'";
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

<span class='blue'>[Вступление]</span><br>
Романы, романы и песни мои.<br>
Романы, романы и песни мои.<br>
<br>
<span class='blue'>[Куплет 1] Я5ж/ - AA</span><br>
Ты меня забудешь на рассвете,<br>
Мы с тобой ведём себя, как дети.<br>
<br>
<span class='blue'>[Переход] Л3дм - A'bA'b</span><br>
А твоя слеза беспризорная<br>
Не даёт покоя мне никак.<br>
А твоя слеза монотонная,<br>
Не даёт покоя мне она.<br>
<br>
<span class='blue'>[Припев] Ам45мм - aabaab</span><br>
Романы, романы и песни мои - <br>
Всё только о ней, о любви до зари.<br>
И манит, и манит, и снова кружит ураган (ураган)<br>
Романы, романы и песни мои.<br>
Так мало нам нужно с тобой для любви!<br>
Ты помни и знай: я по-прежнему твой талисман (твой талисман)<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
И горит звезда в закате алом.<br>
Заболит душа, мне тебя мало!<br>
<br>
<span class='blue'>[Переход]</span><br>
А твоя слеза беспризорная<br>
Не даёт покоя мне никак.<br>
А твоя слеза монотонная,<br>
Не даёт покоя мне она.<br>
<br>
<span class='blue'>[Припев]</span><br>
Романы, романы и песни мои - <br>
Всё только о ней, о любви до зари.<br>
И манит, и манит, и снова кружит ураган (ураган)<br>
Романы, романы и песни мои.<br>
Так мало нам нужно с тобой для любви!<br>
Ты помни и знай: я по-прежнему твой талисман (твой талисман)<br>
<br>
<span class='blue'>[Vocals drop]</span><br>
Романы, романы и песни мои.<br>
Романы, романы и песни мои.<br>
<br>
<span class='blue'>[Переход 2] Ам3мж - aBaB</span><br>
Все песни мои о тебе.<br>
Романы, романы, романы.<br>
Все песни мои о тебе.<br>
Романы, романы, романы.<br>
<br>
<span class='blue'>[Припев]</span><br>
Романы, романы и песни мои - <br>
Всё только о ней, о любви до зари.<br>
И манит, и манит, и снова кружит ураган (ураган)<br>
Романы, романы и песни мои.<br>
Так мало нам нужно с тобой для любви!<br>
Ты помни и знай: я по-прежнему твой талисман (твой талисман)<br>
 <br>
 <span class='blue'><a href='https://www.gl5.ru/philipp-kirkorov-romani.html'
   target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
