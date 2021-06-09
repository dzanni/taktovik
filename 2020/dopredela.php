<?php
$title = 'Валерия & Максим Фадеев - До предела (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/doB4li7Kn94'";
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
Хо-хо-хО.<br>
Хо (хо-хо)<br>
<br>

<span class='blue'>[Куплет 1, Валерия] Я4жм - AbAb</span><br>
Я делаю всегда всё поздно,<br>
Теряю, будто в первый раз,<br>
Свою любовь - и вот, бесслёзно,<br>
Опять давлю из всех на газ.<br>
  <div class='refren'><span class='blue'>[Максим Фадеев]</span><br>
  Мелькают лица и мгновенья;<br>
  Но только где-то через век<br>
  Я понимаю с сожаленьем -<br>
  То был любимый человек.</div>
<br>
<span class='blue'>[Припев x2] Я4жж - ABAB</span><br>
Как, разогнавшись до предела,<br>
Узнать секунду по примете.<br>
Ту самую, когда задело,<br>
Ту самую - одну на свете!<br>
<br>
<span class='blue'>[Вокализ: Максим Фадеев]</span><br>
ХЭ-ээ-ХЭ-о.<br>
<br>
<span class='blue'>[Куплет 2, Максим Фадеев]</span><br>
Пытаюсь развернуть планету,<br>
Из всех давлю на тормоза.<br>
Врываюсь снова в это лето,<br>
В толпе ищу её глаза.<br>
  <div class='refren'>
  <span class='blue'>[Валерия] Я4жж - ABAB</span><br>
  И потеряв ещё лет двести,<br>
  Вернув момент, когда влюбилась;<br>
  Но жизнь-то не стоит на месте,<br>
  Лишь только я остановилась.</div>
<br>
<span class='blue'>[Припев x2]</span><br>
Как, разогнавшись до предела,<br>
Узнать секунду по примете.<br>
Ту самую, когда задело,<br>
Ту самую - одну на свете!<br>
<br>
<span class='blue'>[Переход]</span><br>
Ту самую - одну...<br>
Ту самую - одну...<br>
Ху-у-У!<br>
<br>
<span class='blue'>[Припев x2]</span><br>
Как, разогнавшись до предела,<br>
Узнать секунду по примете.<br>
Ту самую, когда задело,<br>
Ту самую - одну на свете!<br>
<br>
<span class='blue'>[Финал]</span><br>
Хэ-хЭ-хэ.<br>
Ту самую - одну (ху-ху)<br>
Ху-хУ-у-у.<br>
ХУ-у-у.<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/maxim-fadeev-valeriya-do-predela.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
