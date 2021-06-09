<?php
$title = 'Enjoykin - Нецветные розы (ft. Диана Шурыгина, слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/3jR-OCl4rG0'";
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

<span class='blue'>[Куплет 1] Х6ц5жм - AbAb<br></span>
Я сидела дома, никуда не выходила, <br>
Мальчика из армии ждала,<br>
 И моя соседка, и моя соседка <br>
 Нас на день рожденья позвала. <br>
 <div class='refren'>
 Мы знакомились, играли в карты (Фьюить-Ха!) <span class='blue'>(Строка Х5ж)<br></span>
  И пила я водку в первый раз! <br>
  Несколько стаканчиков - это много как бы <br>
  Тут истерика и началась! </div>
<br>
<span class='blue'>[Припев] Дв36ц//4жм - AAbAAb<br></span>
  Нецветные розы, <br>
  Страсть, невинность, слёзы. <br>
  Девочки должны наивными не быть! <br>
  Нецветные розы, <br>
  Нецветные розы, <br>
  Водку никогда не пить!<br>
  <br>
  <span class='blue'>[Куплет 2] Я56цмж?- aBaB<br></span>
   Мы собрались на нижнем этаже, <br>
   Где сауна, бильярдный столик. <br>
   Играла громко музыка уже, <br>
   Не понимала я, что происходит!<br>
   <br>
   <span class='blue'>[Припев]<br></span>
     Нецветные розы, <br>
     Страсть, невинность, слёзы. <br>
     Девочки должны наивными не быть! <br>
     Нецветные розы, <br>
     Нецветные розы, <br>
     Водку никогда не пить!<br>
     <br>
<span class='blue'>Источник: текст под клипом Youtube<br></span>
<br>
<br>
N.B. На напев "Мурки". Баллада на основе <a href='https://youtu.be/H0bVWh0L54Q'
  target='_blank'>резонасной истории</a>, произошедшей в ночь на 1 апреля 2017 г. на вечеринке в Ульяновске с 21-летним студентом
  сельхозакадемии Сергеем Семеновым и 16-летней студенткой колледжа Дианой Шурыгиной. Суд принял версию
  Шурыгиной, что секс между молодыми людьми был изнасилованием, и Семенов попал в колонию. Некоторые строки песни -
  это реальные реплики Шурыгиной в телепередаче "Пусть говорят".<br>
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
