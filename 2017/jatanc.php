<?php
$title = 'Леша Свик - Я хочу танцевать (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/2l9TtTDvNI8'";
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

<span class='blue'>[Куплет 1] Дк34цмж - ababXcc<br></span>
Запомни меня молодым, <br>
Запомни меня горячим.<br>
Запомни, что я никогда не грустил <br>
Из-за каждой моей неудачи.<br>
Никогда не грустил из-за брошенных девок, <br>
Они ведь все были тёлки!<br>
Я снова каждой напомню (Снова каждой напомню)<br>
<br>
<span class='blue'>[Переход] Дк4цж - AA<br></span>
Раз, два и три, четыре! <br>
Сука, вон из моей квартиры!<br>
Я сегодня буду на стиле, <br>
С теми, кого мы не забыли!<br>
Раз, два и три, четыре! <br>
Что вы за, сука, мне запретили?<br>
Мы же не пили и не курили, <br>
Так почему вы меня не пустили?<br>
<br>
<span class='blue'>[Припев х2] Тк4ц3м - aabb</span><br>
Слышь, бессоница, не веди меня домой (о-о)<br>
Этой ночью меня сильно забрало (о-о)<br>
Этой ночью на законы наплевать -<br>
Я хочу танцевать, я хочу танцевать!<br>
<br>
<span class='blue'>[Припев]</span><br>
Слышь, бессоница, не веди меня домой!<br>
Этой ночью меня сильно забрало.<br>
Этой ночью на законы наплевать -<br>
Я хочу танцевать, я хочу танцевать!<br>
<br>
<span class='blue'>[Куплет 2] Тк24цжм - AbAb<br></span>
Пока не село моё сердце - <br>
Завяжи мои глаза,<br>
Я не хочу видеть каждое место,<br>
Мне не нужна, не нужна тишина.<br>
Мне не нужны <br>
<div class='refren'>
<span class='blue'>Х2ж - AA<br></span>
Ани, Лены,<br>
Чувства в меру,<br>
Запах веры.<br>
Кавалеры, <br>
Что за первой <br>
Ищут вены!<br>
Дайте небо!</div>
<br>
  <span class='blue'>[Переход] Ак4цж/д - AA, A'A'<br></span>
С разбитыми сердцами мы роботами стали,<br>
И чувства не попадут нам в сердце, сколько бы не искали!<br>
Сколько бы не запрещали нам делать это заново -<br>
Я буду делать то, что меня радует, радует!<br>
<br>
<span class='blue'>[Припев х4]</span><br>
Слышь, бессоница, не веди меня домой (о-о)<br>
Этой ночью меня сильно забрало (о-о)<br>
Этой ночью на законы наплевать -<br>
Я хочу танцевать, я хочу танцевать!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/s/svik-lesha/lesha-svik-ya-hochu-tancevat.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
