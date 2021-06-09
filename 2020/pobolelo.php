<?php
$title = 'HENSY - Поболело и прошло (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/vIw8R8ezJrA'";
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

<span class='blue'>[Припев х2] Дв4м/ - axaa, aaaa</span><br>
Да подальше всё пошло!<br>
Поболело и прошло!<br>
Кто расскажет о любви,<br>
В которой прячется тепло?<br>
  <div class='refren'>Где обиды, а где боль?<br>
  Всё пройдёт само собой!<br>
  Как на рану сыпать соль?<br>
  Ведь ранило меня стрельбой.</div>
<br>
<span class='blue'>[Куплет] Тк2-4цм/ж - aa, AA</span><br>
Я брожу по улицам один.<br>
К чёрту этот карантин!<br>
Я болен тобой был,<br>
Расстреляла мой тыл!<br>
Находила сто причин,<br>
Дабы нам не быть вместе<br>
Типа, тебе со мной стало тесно!<br>
Ой, сложно быть одному!<br>
Вроде и места себе не нахожу.<br>
Да, да, да, хватит мне врать!<br>
Я был как Хатико, тебе — лишь бы слинять!<br>
Ну, а теперь дверь закрыта,<br>
Давай, ищи выход! <br>
Я не хочу тебя понимать.<br>
Друзья говорили, типа, к этому шло<br>
А я в ответ: "Да, пошло оно всё!"<br>
Поболит, заживёт, поболит и пройдёт.<br>
Эй, вот увидишь, пройдёт!<br>
<br>
<span class='blue'>[Припев]</span><br>
Да подальше всё пошло!<br>
Поболело и прошло!<br>
Кто расскажет о любви,<br>
В которой прячется тепло?<br>
  <div class='refren'>Где обиды, а где боль?<br>
  Всё пройдёт само собой!<br>
  Как на рану сыпать соль?<br>
  Ведь ранило меня стрельбой.</div>
<br>
<span class='blue'>[Финал]</span><br>
Ты ранила меня стрельбой!<br>
Ты ранила меня-а (е!)<br>
Ты ранила меня стрельбой!<br>
Ты ранила меня-а (е!)<br>
  <div class='refren'>
  Ты ранила меня стрельбой!<br>
Ты ранила меня-а (е!)<br>
  Ты ранила меня стрельбой!<br>
  Ранила меня, ранила меня!</div>
  <br>
<span class='blue'><a href='https://www.gl5.ru/h/hensy/hensy-pobolelo-i-proshlo.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
