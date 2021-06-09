<?php
$title = 'Ани Лорак - Новый бывший (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kVwG31I5TcI'";
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

<span class='blue'>[Куплет 1] Ам4мж - aBaB<br></span>
Я двери закрою и станет легко.<br>
Не действует больше твоё притяженье.<br>
Ты больше не боль, для меня ты никто.<br>
Игра воспаленного воображенья.<br>
<div class='refren'>Фантомные чувства не ранят уже,<br>
Я все равнодушно сотру и забуду.<br>
Я выключу свет на твоем этаже<br>
И ждать перестану звонок твой, как чудо.<br>
(Звонок твой, как чудо).</div>
<br>
<span class='blue'>[Припев х2] Х4ж - AABB<br></span>
Стоп игра! - и будь что будет!<br>
Победителей не судят!<br>
Боль моя - вулкан остывший.<br>
Ты теперь мой новый бывший!<br>
<br>
Мой... мой...<br>
Мой... мой... новый бывший.<br>
Мой... мой...<br>
Мой... мой... новый бывший.<br>
Мой... мой...<br>
Мой... мой... новый бывший.<br>
Мой... мой...<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я больше такого, как ты не найду.<br>
Скажу я тебе, милый мой, на прощанье:<br>
«Ты слева девятый в десятом ряду.<br>
Тебе посвящаю минуту молчанья».<br>
(Минуту молчанья)<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Стоп игра! - и будь что будет!<br>
Победителей не судят!<br>
Боль моя - вулкан остывший.<br>
Ты теперь мой новый бывший!<br>
<br>
Мой... мой...<br>
Мой... мой... новый бывший.<br>
Мой... мой...<br>
Мой... мой... новый бывший.<br>
Мой... мой...<br>
Мой... мой... новый бывший.<br>
Мой... мой...<br>
Мой... мой...<br>
<br>
<span class='blue'>[Декламация] Ам4м - AAAA<br></span>
Не будет ночных сообщений тревожных,<br>
Что ты до сих пор всех на свете дороже.<br>
Ты нашу любовь проиграл безнадежно.<br>
Тебя больше нет - ты в прошлом.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Стоп игра! - и будь что будет!<br>
Победителей не судят!<br>
Боль моя - вулкан остывший.<br>
Ты теперь мой новый бывший!<br>
<br>
Мой... мой...<br>
Мой... мой... новый бывший.<br>
Мой... мой...<br>
Мой... мой... новый бывший.<br>
Мой... мой...<br>
Мой... мой... новый бывший.<br>
Мой... мой...<br>
Мой... мой...<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/a1/ani-lorak/8588-ani-lorak-novij-bivshij-text-pesni.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
