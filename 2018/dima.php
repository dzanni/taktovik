<?php
$title = 'Ида Галич - Дима (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/CEa7Y6kiwyE'";
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

<span class='blue'>[Куплет 1] Я5ж - AA<br></span>
Я не пойду с тобой на дискотеку -<br>
Там бабы, сиськи и все разодеты.<br>
Останусь дома и винишко вмажу,<br>
Умру одна, и пусть потом все скажут:<br>
<br>
<span class='blue'>[Припев] Л3жм - AAbb bbb<br></span>
Наше счастье прошло мимо!<br>
Что же ты натворил, Дима?<br>
В Инстаграме ты не лайкнул меня<br>
И добавил эту сучку в друзья!<br>
<div class='refren'>Эту сучку в друзья!<br>
И эту сучку в друзья!<br>
Эту сучку в друзья!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я не пойду с тобой по ресторанам -<br>
Я не могу смотреть на эти пары.<br>
Одна поеду ночью в караоке -<br>
И там спою так, что все будут в шоке!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Наше счастье прошло мимо!<br>
Что же ты натворил, Дима?<br>
В Инстаграме ты не лайкнул меня<br>
И добавил эту сучку в друзья!<br>
<div class='refren'>Эту сучку в друзья!<br>
И эту сучку в друзья!<br>
Эту сучку в друзья!</div>
<br>
<span class='i'>- Ваш счет!<br>
- Дима! Дим!<br>
<br>
<span class='blue'>Л32мж - aaB<br></span>
- Нет, я молодой, <br>
Просто седой,<br>
Снег упал на плечи!<br>
  </span>
<br>
<span class='blue'><a href='https://www.gl5.ru/g/galich-ida/ida-galich-dima.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
