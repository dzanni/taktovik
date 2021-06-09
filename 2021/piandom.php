<?php
$title = 'Клава Кока - Пьяную домой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/WVUB1pxplbg'";
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

<span class='blue'>[Припев] Тк3мж - aBaB aCaC CC</span><br>
Забери пьяную домой,<br>
Завтра мне будет стыдно!<br>
Забери пьяную домой,<br>
Тока не ругайся сильно!<br>
  <div class='refren'>Забери пьяную домой,<br>
  Делай со мной все, что хочешь!<br>
  Забери пьяную домой,<br>
  Да, этой ночью!</div>
А, этой ночью!<br>
А, этой ночью!<br>
<br>
<span class='blue'>[Куплет 1] Л23мж? - aaBccB</span><br>
Мой пароль — апероль.<br>
Smokey eyes, face-контроль.<br>
Ты не жди меня, я буду поздно!<br>
Пьяные СМС, <br>
Мой сигнал — SOS<br>
И у тебя ко мне потерян доступ!<br>
<br>
<span class='blue'>[Переход] Л4цжж - ABAB</span><br>
Танцевать я буду долго-долго,<br>
Хоть на ногах стою я еле-еле.<br>
И во мне всего так много-много,<br>
Но я к тебе хочу на самом деле!<br>
<br>
<span class='blue'>[Припев]</span><br>
Забери пьяную домой,<br>
Завтра мне будет стыдно!<br>
Забери пьяную домой,<br>
Тока не ругайся сильно!<br>
  <div class='refren'>Забери пьяную домой,<br>
  Делай со мной все, что хочешь!<br>
  Забери пьяную домой,<br>
  Да, этой ночью!</div>
А, этой ночью!<br>
А, этой ночью!<br>
<br>
<span class='blue'>[Куплет 2] Л42м/м - aabb</span><br>
Посмотри и заблудись,<br>
Мои stories — лабиринт!<br>
Удалить и забыть,<br>
Удалить и запить!<br>
  <div class='refren'>Дай себя я накручу,<br>
  Позвоню, но промолчу.<br>
  Мой косяк, sorry, зай!<br>
  Приезжай, забирай!</div>
<br>
<span class='blue'>[Переход]</span><br>
Танцевать я буду долго-долго,<br>
Хоть на ногах стою я еле-еле.<br>
И во мне всего так много-много,<br>
Но я к тебе хочу на самом деле!<br>
<br>
<span class='blue'>[Припев]</span><br>
Забери пьяную домой,<br>
Завтра мне будет стыдно!<br>
Забери пьяную домой,<br>
Тока не ругайся сильно!<br>
  <div class='refren'>Забери пьяную домой,<br>
  Делай со мной все, что хочешь!<br>
  Забери пьяную домой,<br>
  Да, этой ночью!</div>
<br>
Слова: Клава Кока, SashaDoutra, Константин Кокшаров <br>
Музыка: Клава Кока, SashaDoutra, Константин Кокшаров, Максим Иваник<br>
<br>
  <span class='blue'><a href='https://text-pesni.com/pesnya/pokazat/565699506/klava-koka/tekst-perevod-pesni-pyanuyu-domoj/'
    target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
