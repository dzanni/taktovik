<?php
$title = 'KAZKA - Плакала (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/5Fv19KVVya8'";
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

<span class='blue'>[Куплет 1] Л1-5цм/м - aabbbba<br></span>
Врятую світ слів твоїх буду - ціла.<br>
За рік образ не складу ціну я. <br>
Горять, <br>
Мости горять, <br>
I сліз моря.<br>
Та знай, це гра моя,<br>
Менше слів - більше діла.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Врятую від слів твоїх хоч би тіло,<br>
Загнав під лід не знайду душу я.<br>
Болить, <br>
Ой як болить, <br>
I кров кипить,<br>
Та донька вже не спить,<br>
Менше слів - більше діла.<br>
<br>
<span class='blue'>[Припев] Л6ц4мд - aB'aB'<br></span>
Поплакала, і знов фіалка розцвіла,<br>
Засяяв день таємними знаками.<br>
І мама молода, й закохана мала,<br>
На кухні всі однаково плакали.<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Зотліла ніч, зранку все стало сіре.<br>
Знайти нові кольори мушу я.<br>
А лице умий дощем, <br>
Що треба ще?<br>
Хай серцю під плащем - <br>
Менше слів, більше віри.<br>
<br>
<span class='blue'>[Припев x2]<br></span>
Поплакала, і знов фіалка розцвіла,<br>
Засяяв день таємними знаками.<br>
І мама молода, й закохана мала,<br>
На кухні всі однаково плакали.<br>
<br>
<span class='blue'>[Припев x2]<br></span>
Поплакала, і знов фіалка розцвіла,<br>
Засяяв день таємними знаками.<br>
І мама молода, й закохана мала,<br>
На кухні всі однаково плакали.<br>
<br>
<span class='blue'><a href='https://perevod-pesni.ru/ijql'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
