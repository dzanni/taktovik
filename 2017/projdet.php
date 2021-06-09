<?php
$title = 'SEREBRO - Пройдет (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/4H78rCl_cFI'";
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

<span class='blue'>[Куплет 1] Тк4цм - abab</span><br>
Постараюсь не упасть, я тебя сожму в руке.<br>
Один сделать шаг дай, тихо-тихо без фраз.<br>
Буду медленно я ждать, там, где-то в уголке.<br>
И если бы не знать этот непростой отказ.<br>
<br>
<span class='blue'>[Припев] Я4д - A'A'A'A'</span><br>
Пройдёт, я буду верить в лучшее.<br>
Пройдёт, мы были невезучие.<br>
Пройдёт, я буду мимо случая.<br>
Пройдёт, мы были невезучие.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
И магнитами меня ты потянешь, обещай.<br>
Один долгий твой взгляд только-только отдай.<br>
И пластинка знакомая до боли, но не моя.<br>
И если бы не знать наш холодный первый май.<br>
<br>
<span class='blue'>[Припев]</span><br>
Пройдёт, я буду верить в лучшее.<br>
Пройдёт, мы были невезучие.<br>
Пройдёт, я буду мимо случая.<br>
Пройдёт, мы были невезучие.<br>
<br>
Музыка: Максим Фадеев<br>
Слова: Ольга Серябкина<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/serebro_proidet.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
