<?php
$title = 'LOBODA - Мира мало (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/F5PNo18xa4E'";
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

<span class='blue'>[Куплет 1] Я334ммж - abCabC</span><br>
Один и тот же сон, <br>
Один и тот же бит,<br>
И я уже иду по краю,<br>
Ты снова тратишь мой <br>
Доверия лимит<br>
И от себя не отпускаешь.<br>
<br>
<span class='blue'>[Предприпев] Тк4цмм - abab</span><br>
И я не сдержу-у-у у-у-ураган,<br>
И ты обещания свои, как всегда (как всегда)<br>
И я не сдержу-у-у у-у-ураган,<br>
И ты не забудешь тех ночей никогда (никогда)<br>
<br>
<span class='blue'>[Припев] Дк4цдж? - A'BA'B</span><br>
Ой, мама, ой, что ж я наделала?!<br>
Он неземной, а я всё летала!<br>
Ой, мама, ой, я вовсе не смелая!<br>
Душу свою не тому отдавала.<br>
  <div class='refren'>Ой, мама, ой, что ж я наделала?!<br>
  Он неземной, а я всё летала!<br>
  Ой, мама, ой, я больше не смелая,<br>
  Мне без него теперь мира мало.</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Ты хочешь взять таймаут,<br>
Я выдыхаю дым.<br>
Мы продолжаем портить нервы.<br>
Порочный твой бэкграунд<br>
Меня почти убил,<br>
Но я пойду с тобой наверх.<br>
<br>
<span class='blue'>[Предприпев]</span><br>
И я не сдержу-у-у у-у-ураган,<br>
И ты обещания свои, как всегда (как всегда)<br>
И я не сдержу-у-у у-у-ураган,<br>
И ты не забудешь тех ночей никогда.<br>
<br>
<span class='blue'>[Припев]</span><br>
Ой, мама, ой, что ж я наделала?!<br>
Он неземной, а я всё летала!<br>
Ой, мама, ой, я вовсе не смелая!<br>
Душу свою не тому отдавала.<br>
  <div class='refren'>Ой, мама, ой, что ж я наделала?!<br>
  Он неземной, а я всё летала!<br>
  Ой, мама, ой, я больше не смелая,<br>
  Мне без него теперь мира мало.</div>
<br>
<span class='blue'>[Переход]</span><br>
Ой, мама, ой!<br>
<br>
<span class='blue'>[Припев]</span><br>
Ой, мама, ой, что ж я наделала?!<br>
Он неземной, а я всё летала!<br>
Ой, мама, ой, я вовсе не смелая!<br>
Душу свою не тому отдавала.<br>
  <div class='refren'>Ой, мама, ой, что ж я наделала?!<br>
  Он неземной, а я всё летала!<br>
  Ой, мама, ой, я больше не смелая,<br>
  Мне без него теперь мира мало.</div>
 <br>
 <span class='blue'><a href='https://genius.com/Loboda-mira-malo-lyrics'
   target='_blank'>Источник</a></span><br>
 <br>
  <br>
P.S.  Рифма "ж" = "м", либо слоговой [х]: нЕрвы - навЕрх. <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
