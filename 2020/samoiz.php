<?php
$title = 'Саша Гудков & Иван Ургант - Самоизоляция (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/4BEPFJh4A9M'";
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

<span class='blue'>[Припев, Саша Гудков] Л2дж?<br></span>
Самоизоляция,<br>
Самоизоляция, <br>
Когда запираешь, <br>
Когда заключаешь<br>
В квартире ты сам себя.<br>
<br>
<span class='blue'>Бридж, Саша Гудков] Л4цж/<br></span>
СИди дома, детка, сИди дома!<br>
<br>
<span class='blue'>[Куплет 1, Саша Гудков] Тк4цж/ж, Л3ж<br></span>
Если прилетел из Берлина и Кореи, <br>
Ирана, Ю-Эс-Эй или склона Куршавеля,<br>
<div class='refren'>Детка, сИди дома!</div>
Ты в маске и на ручки льёшь вонючий санитайзер,<br>
Но не играй с судьбой — дома ты останься!<br>
<div class='refren'>Детка, сИди дома!<br>
Детка, сИди дома!<br>
Детка, сИди дома!</div>
<br>
<span class='blue'>[Припев, Саша Гудков]<br></span>
Самоизоляция,<br>
Самоизоляция, <br>
Когда запираешь, <br>
Когда заключаешь<br>
В квартире ты сам себя.<br>
<br>
<span class='blue'>[Пост-припев, Саша Гудков] Тк4цж/ж<br></span>
А-а, э-э-э! Вся работенка -<br>
А-а, э-э-э! На удалёнке!<br>
А-а, э-э-э! Не стой с чихнувшим!<br>
А-а, э-э-э! Набрызгай ручки!<br>
<br>
<span class='blue'>[Куплет 2, Иван Ургант] Тк2-4цм/ж<br></span>
Слежу в окно:<br>
Голубь за окном клюёт бетон.<br>
Мою руки, не моюсь целиком.<br>
Чистил мышке низ, пил из утюга,<br>
Постирал лежак кота, пока<br>
Я заперт в квартире,<br>
Представлял себя Zivert.<br>
Всё, что было на Wiki,<br>
Я прочитал про имя "Игорь".<br>
<br>
<span class='blue'>[Куплет 3, Саша Гудков] Тк4цм/ж<br></span>
А, Миши Бублика заценить трекан<br>
И понять, с чего вдруг сошёл с ума Джиган!<br>
На всё это и многое время<br>
Есть, когда ты дома! <span class='blue'>(Строка Тк3ж)<br></span>
<br>
<span class='blue'>[Припев, Саша Гудков]<br></span>
Самоизоляция,<br>
Самоизоляция, <br>
Когда запираешь, <br>
Когда заключаешь<br>
В квартире ты сам себя.<br>
<br>
<span class='blue'>[Пост-припев, Саша Гудков]<br></span>
А-а, э-э-э! Посиди-ка дома!<br>
А-а, э-э-э! Завернись-ка в штору!<br>
А-а, э-э-э! Экономь бумагу!<br>
А-а, э-э-э! Помой собаку!<br>
 <br>
<span class='i'>[Саша Гудков] Вань, я не выйду! Я пока на самоизоляции! Две недели еще!
Все, пока, давай! Позвони потом!<br></span>
 <br>
<span class='blue'><a href='https://genius.com/Gudkov-music-self-isolation-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
