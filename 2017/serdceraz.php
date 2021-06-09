<?php
$title = 'Валерия - Сердце разорвано (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/o41Padp6Ph8'";
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

Сердце разорвано! Сердце разорвано!<br>
<br>
<span class='blue'>[Припев] Дк45цм - aaaa<br></span>
Сердце разорвано – это моя вина,<br>
Ведь я доверилась тебе сама.<br>
Сердце разорвано! Кому же я с ним нужна?<br>
И я теперь одна схожу с ума.<br>
<div class='refren'>Сердце разорвано! Сердце разорвано!<br>
Сердце разорвано! Кому же я с ним нужна?<br>
И я теперь одна схожу с ума.</div>
<br>
<span class='blue'>[Куплет 1] Дк4ц3жм - AbAb<br></span>
Эти глупые игры между нами <br>
Смысл теряют опять.<br>
Эти тонкие нити разорвались,<br>
Ты сердце мое отобрал.<br>
<br>
<span class='blue'>[Переход] Л3м - abab<br></span>
Все чувства, разбитые в такт.<br>
Я снова теряю себя.<br>
Я не прочитала твой знак <br>
О том, что расстаться пора!<br>
<br>
<span class='blue'>[Припев]<br></span>
Сердце разорвано – это моя вина,<br>
Ведь я доверилась тебе сама.<br>
Сердце разорвано! Кому же я с ним нужна?<br>
И я теперь одна схожу с ума.<br>
<div class='refren'>Сердце разорвано! Сердце разорвано!<br>
Сердце разорвано! Кому же я с ним нужна?<br>
И я теперь одна схожу с ума.</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Закрывала глаза и пыталась забыться, <br>
Но не обманешь себя.<br>
И то, что заставит сердце влюбиться, <br>
Я до сих пор не нашла.<br>
<br>
<span class='blue'>[Переход]<br></span>
Все чувства, разбитые в такт.<br>
Я снова теряю себя.<br>
Я не прочитала твой знак <br>
О том, что расстаться пора!<br>
<br>
<span class='blue'>[Припев]<br></span>
Сердце разорвано – это моя вина,<br>
Ведь я доверилась тебе сама.<br>
Сердце разорвано! Кому же я с ним нужна?<br>
И я теперь одна схожу с ума.<br>
<div class='refren'>Сердце разорвано! Сердце разорвано!<br>
Сердце разорвано! Кому же я с ним нужна?<br>
И я теперь одна схожу с ума.</div>
<br>
Сердце разорвано!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/v1/valeriya/7890-valeriya-serdce-razorvano-text-pesni.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
