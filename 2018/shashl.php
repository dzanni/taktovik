<?php
$title = 'Хлеб - Шашлындос (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/AgVZ6LoAm8g'";
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

<span class='blue'>[Интро: Александр Шулико] Тк2-4ц - xXxx<br></span>
В тачках летим!<br>
Мы торопимся, ведь жизнь лишь одна!<br>
Слышишь, братик, нам не до шуток!<br>
Мы летим, чтобы забрать свой кусок.<br>
<br>
<span class='blue'>[Куплет 1: Александр Шулико] Ан43м? - abab<br></span>
На ногах Adidas, самый новый коллаб,<br>
Стрелка в пол. Дядя коп, адиос!<br>
На ногах Adidas, самый ровный коллаб,<br>
Стрелка в пол, мы летим на шашлындос!<br>
<br>
<span class='blue'>[Припев х2] Тк2м - aaaa<br></span>
Шашлындос, шашлындос!<br>
Шашлындос, шашлындос!<br>
Шашлындос, шашлындос!<br>
Мы летим на шашлындос!<br>
<br>
<span class='blue'>[Переход: Кирилл Трифонов] Л3м - aa<br></span>
Чем чаще она пьет из горла (А-А-А-А-А, Е)<br>
Тем чаще ее взгляд на меня (А-А-А-А-А)<br>
<br>
<span class='blue'>[Куплет 2: Денис Кукояка]<br></span>
Ночью нам не до сна - до утра дым костра.<br>
Скажем сну, скажем сну адиос!<br>
Она рядом со мной, не отдам никому!<br>
Ее губы на вкус...<br>
<br>
<span class='blue'>[Припев]<br></span>
Шашлындос, шашлындос!<br>
Шашлындос, шашлындос!<br>
Шашлындос, шашлындос!<br>
Мы летим на шашлындос!<br>
Шашлындос, шашлындос!<br>
Шашлындос, шашлындос!<br>
Шашлындос, шашлындос!<br>
Мы летим на шашлындос!<br>
<br>
<span class='blue'><a href='https://genius.com/Hleb-barbecue-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
