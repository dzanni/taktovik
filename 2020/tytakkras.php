<?php
$title = 'NILETTO - Ты такая красивая (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wJ3hcbePVbo'";
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

<span class='blue'>[Интро] Х6мжмм - aXaa</span><br>
Не догонишь, не поймаешь, не вернешь!<br>
Убежала вдаль красивая девчонка.<br>
Ты же знаешь, ты же гонишь, ты же врешь!<br>
Убежала, заскучаешь - вновь придешь!<br>
<br>
<span class='blue'>[Куплет 1] Ан2ж/ - AAAA</span><br>
Это-это случайно<br>
Мы с тобой повстречались.<br>
Ты была так печальна,<br>
Я дарил тебе радость.<br>
  <div class='refren'>Ты сказала, что можно (можно)<br>
  Сделать тебя счастливой.<br>
  Оказалось, так сложно (сложно)<br>
  Победить у строптивой!</div>
<br>
<span class='blue'>[Куплет 2] Л3м/? - aa...</span><br>
Ты лимитированный тираж (а)<br>
Мне бы тебя догнать! (а)<br>
Чтобы тебя догнать,<br>
(Я) учился играть в Road Rush!<br>
(Я) учился писать стихи,<br>
(Я) учился на других целоваться, <span class='blue'>(Строка Л3ж)</span><br>
Чтобы тебя потом целовать! <span class='blue'>(Строка Л4цм)</span><br>
<br>
<span class='blue'>[Бридж]</span><br>
Не догонишь, не поймаешь, не вернешь!<br>
Убежала вдаль красивая девчонка.<br>
Ты же знаешь, ты же гонишь, ты же врешь!<br>
Убежала, заскучаешь - вновь придешь!<br>
<br>
<span class='blue'>[Припев] Тк2424цд/м - A'A'Abbb</span><br>
Ты такая красивая (йа-йа)<br>
Такая красивая (йа-йа)<br>
Смотрю в твои глаза (о-о) прохожу мимо!<br>
Не догнать тебя,<br>
Не догнать тебя,<br>
Не догнать тебя-тебя, не догнать!<br>
  <div class='refren'>Ведь ты такая красивая (йа-йа)<br>
    Ведь ты такая красивая (йа-йа)<br>
    Смотрю в твои глаза (о-о) прохожу мимо!<br>
    Не догнать тебя,<br>
    Не догнать тебя,<br>
    Не догнать тебя-тебя, не догнать!</div>
<br>
<span class='blue'>[Бридж]</span><br>
Не догонишь, не поймаешь, не вернешь!<br>
Убежала вдаль красивая девчонка.<br>
Ты же знаешь, ты же гонишь, ты же врешь!<br>
Убежала, заскучаешь - вновь придешь!<br>
<br>
<span class='blue'>[Припев]</span><br>
Ты такая красивая (йа-йа)<br>
Такая красивая (йа-йа)<br>
Смотрю в твои глаза (о-о) прохожу мимо!<br>
Не догнать тебя,<br>
Не догнать тебя,<br>
Не догнать тебя-тебя, не догнать!<br>
  <div class='refren'>Ведь ты такая красивая (йа-йа)<br>
  Такая красивая (йа-йа)<br>
  Смотрю в твои глаза, прохожу мимо!<br>
  Не догнать тебя,<br>
  Не догнать тебя,<br>
  Не догнать тебя-тебя, не догнать!</div>
  <br>
<span class='blue'><a href='https://genius.com/Niletto-youre-so-beautiful-lyrics'
  target='_blank'>Источник</a></span><br>
  <br>
    <br>
N.B. Рифма ж=м: целовАться - целовАть; д=ж: красИвая - мИмо.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
