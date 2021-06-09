<?php
$title = 'Elvira T - Не будь дурой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/gQvtaSR0A9Y'";
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

<span class='blue'>[Куплет 1] Тк4ц3м - abab<br></span>
Он тебе вчера не перезвонил,<br>
Потому что не хотел, не хотел.<br>
Он говорил, что ездил по делам.<br>
Да, по делам, но не по тем, не по тем.<br>
<div class='refren'>
И ты простила его, как обычно опять -<br>
По своей доброте, дуроте.<br>
А он сегодня любил какую-то блядь -<br>
И ты не знаешь, что делать теперь.</div>
<br>
<span class='blue'>[Припев] Дк4цжм? - XaXa<br></span>
Не будь дурой, я серьезно!<br>
Ты же скоро всё поймешь!<br>
Почитай литературы!<br>
Таких, как он, много ещё найдешь.<br>
<div class='refren'>
Не будь дурой! <br>
Не будь дурой!<br>
Не будь дурой! <br>
Не будь дурой!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Милая моя, он выбрал тебя,<br>
Потому что ты скромна, ты не предашь.<br>
Может, пару раз и возил на моря,<br>
Только всё растёт не в твою пользу стаж.<br>
<div class='refren'>
Милая, беги скорее от него,<br>
И наплевать на его зодиак.<br>
Ты сама же знаешь, что он неплохой -<br>
Просто с ним никак.</div>

<span class='blue'>[Припев]<br></span>
Не будь дурой, я серьезно!<br>
Ты же скоро всё поймешь!<br>
Почитай литературы!<br>
Таких, как он, много ещё найдешь.<br>
<div class='refren'>
Не будь дурой! <br>
Не будь дурой!<br>
Не будь дурой! <br>
Не будь дурой!</div>
<br>
Не будь дурой, я серьезно!<br>
Ты же скоро всё поймешь!<br>
Почитай литературы!<br>
Таких, как он, много...<br>
<br>
Не будь дурой, я серьезно!<br>
Ты же скоро всё поймешь!<br>
Почитай литературы!<br>
Таких, как он, много ещё найдешь.<br>
<div class='refren'>
Не будь дурой! <br>
Не будь дурой!<br>
Не будь дурой! <br>
Не будь дурой!</div>
<br>
<span class='blue'><a href="https://www.gl5.ru/elvira-t-ne-bud-duroi.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
