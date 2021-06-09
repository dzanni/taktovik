<?php
$title = 'Хабиб - Ягода малинка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Rt2zZSaOFtw'";
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

<span class='blue'>[Интро]</span><br>
Всем девчонкам посвящается!<br>
<br>
<span class='blue'>[Припев x2] Тк4ц2м|ж? - aaBBa</span><br>
Ягода-малинка, оп-оп-оп!  <br>
Крутит головой, залетает в топ.  <br>
Такая ты грустинка,  <br>
Холодная как льдинка!  <br>
Хлопает глазами влево, вправо, в потолок!<br>
<br>
<span class='blue'>[Куплет 1] Тр2мм - abab</span><br>
Номер один - <br>
Девочка Краш!<br>
Не ем уже день, <br>
Не сплю уже два.<br>
  <div class='refren'>Номер один -<br>
  Сказка моя!<br>
  Где же мой Джинн,<br>
  Загадал бы тебя!</div>
<span class='blue'>Л2-4цм/м - aabbb</span><br>
Реки, реки, реки - в реках ты у меня.<br>
Вот бы ща с тобою траляля тополя!<br>
Пойдем со мной в кино!<br>
А хочешь - не в кино!<br>
Да-да, хоть на Луну - мне все равно!<br>
<br>
<span class='blue'>[Припев x2]</span><br>
Ягода-малинка, оп-оп-оп!  <br>
Крутит головой, залетает в топ.  <br>
Такая ты грустинка,  <br>
Холодная как льдинка!  <br>
Хлопает глазами  <br>
Влево, вправо, в потолок!<br>
<br>
<span class='blue'>[Куплет 2] Л23мж - aBaB</span><br>
Ай-яй-яй-яй! <br>
Ягода-малинка!<br>
Ой-ёй-ёй-ёй! <br>
Ты моя грустинка!<br>
  <div class='refren'>Номер один -<br>
    Сказка моя!<br>
    Где же мой Джинн,<br>
    Загадал бы тебя!</div>
Реки, реки, реки - в реках ты у меня.<br>
Вот бы ща с тобою траляля тополя!<br>
Пойдем со мной в кино!<br>
А хочешь - не в кино!<br>
Да-да, хоть на Луну - мне все равно!<br>
  <br>
  <span class='blue'>[Припев x2]</span><br>
  Ягода-малинка, оп-оп-оп!  <br>
  Крутит головой, залетает в топ.  <br>
  Такая ты грустинка,  <br>
  Холодная как льдинка!  <br>
  Хлопает глазами влево, вправо, в потолок!<br>
  <br>
<span class='blue'>[Финал]</span><br>
Ай-яй-яй-яй! <br>
Ягода-малинка!<br>
Ой-ёй-ёй-ёй! <br>
Ты моя грустинка!<br>
Ай-яй-яй-яй! <br>
Ягода-малинка!<br>
Ой-ёй-ёй-ёй! <br>
  <br>
<span class='blue'>Источник: официальный текст под клипом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
