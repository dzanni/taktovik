<?php
$title = 'Елена Темникова ft. ST – Сумасшедший русский (OST Защитники, слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Z-6GIiHP1wM'";
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

<span class='blue'>[Елена Темникова] Л2дж? - A'bA'B'</span><br>
Мы еще далеко, <br>
Далеко от мира.<br>
Мира, где зло и добро <br>
Меряются силами.<br>
<div class='refren'><span class='blue'>Л3мм? - abab</span><br>
  В мире, где мало любви,<br>
В мире, где царит вражда.<br>
Этот мир не спасти, <br>
Не спасти мне без тебя.<br>
Не спасти мне без тебя.</div>
<br>
<span class='blue'>[ST] Тк4-6цм/ж - aa, AA</span><br>
Это моя Москва, но в чужих руках.<br>
На небесах мне скажут, в чем я был не прав.<br>
У Москва-реки рос, тут моя земля.<br>
Мы с неба не хватали звезд, но были как одна семья.<br>
Такими сделали себя мы сами.<br>
В этом мире добро может быть только с кулаками. <br>
<div class='refren'>(Оп...) сегодня у тебя есть выбор. <span class='blue'>(Строка Тк3ж)</span><br>
У тебя есть выбор, какой мне выбрать калибр.<br>
(Оп...) если бы ты знал наших, знал бы что ответят.<br>
Не стоит делить шкуру не убитого медведя.</div>
<br>
<span class='blue'>[Припев: ST х2] Тк3мж - aBaB</span><br>
Кто, кто, кто, кто, кто?<br>
Кто этот сумасшедший русский?<br>
<br>
<span class='blue'>[Елена Темникова]</span><br>
Мы еще далеко, <br>
Далеко от мира.<br>
Мира, где зло и добро <br>
Меряются силами.<br>
<div class='refren'>
  В мире, где мало любви,<br>
В мире, где царит вражда.<br>
Только мы, я и ты, <br>
Будем вместе до конца.<br>
Будем вместе до конца.</div>
<br>
<span class='blue'>[ST]</span><br>
Мир еще не готов, но мы к миру готовы.<br>
Мы как наш климат, ну а климат в России суровый.<br>
Кто нам придет с войной, наступит на свои же мины.<br>
Если случится что-то, знай, что мы будем едины.<br>
Это мой поединок, и мне не нужен приказ.<br>
Обратной дороги здесь нет ни для кого из нас.<br>
<div class='refren'>Сегодня у тебя есть выбор. <br>
У тебя есть выбор, какой мне выбрать калибр.<br>
(Оп...) наше время пришло выйти из темноты.<br>
Скажи, кто твой супергерой, и я скажу, кто ты.</div>
<br>
<span class='blue'>[Припев: ST х2]</span><br>
Кто, кто, кто, кто, кто?<br>
Кто этот сумасшедший русский?<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/s/st/6470-elena-temnikova-sumasshedshiy-russkiy-ft-st-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Слоговая согласная: вы-бор - кали-бр.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
