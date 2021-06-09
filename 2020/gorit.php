<?php
$title = 'DOROFEEVA - gorit (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/yjrpGqaN6Fs'";
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

<span class='blue'>[Интро] Я3м/ - aaaa</span><br>
Ла!<br>
Ла-ла-ла-ла-ла-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
<br>
Ла-ла-ла-ла-ла-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
<br>
<span class='blue'>[Куплет 1] Л3332жм? - AxAx</span><br>
Запускаю мысли выше крыши.<br>
Побежа-побежа-ла я!<br>
Кричу, но ты не слышишь.<br>
Отпусти, отпусти!<br>
  <div class='refren'>
  <span class='blue'>Дв4жж - AAB(B)CCBx</span><br>
  Подобно ветру, вся и сразу,<br>
  Без шаблонов, чувства, фразы.<br>
  Дрожь по телу от постели.<br>
  Ты (идешь по телу)<br>
  Мои глаза тебе всё скажут,<br>
  От тебя меня так мажет.<br>
  Не будет все, как мы хотели!<br>
  Je suis folle de toi! <span class='blue'>(Здесь: Дв3м)</span></div>
<br>
<span class='blue'>[Припев] Я3м/жм? - aaBa aaBa</span><br>
Пусть горит моя душа,<br>
Хочу, чтоб до утра,<br>
А, может, даже дольше,<br>
А, может, навсегда!<br>
  <div class='refren'>Горит моя душа,<br>
  Ни ночи нет, ни дня,<br>
  А, может, даже больше,<br>
  А, может, никогда!</div>
<br>
Ла-ла-ла-ла-ла-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
А, может, даже дольше!<br>
А, может, навсегда!<br>
<br>
Ла-ла-ла-ла-ла-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
А, может, даже больше!<br>
А, может, никогда!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Опускаю руки твои ниже.<br>
Полете-полете-ла я.<br>
Ты по телу мне дыханьем пишешь<br>
Под постом, где в постели.<br>
  <div class='refren'>Путались под простынями,<br>
  Мыслями коснись, губами,<br>
  И мы с тобой не знаем сами.<br>
  (Мы не знаем сами)<br>
  Какой огонь мы разжигаем,<br>
  Лишь расставшись, мы узнаем.<br>
  Пою с закрытыми глазами!<br>
  Je suis folle de toi!</div>
<br>
<span class='blue'>[Припев]</span><br>
Пусть горит моя душа,<br>
Хочу, чтоб до утра,<br>
А, может, даже дольше,<br>
А, может, навсегда!<br>
  <div class='refren'>Горит моя душа,<br>
  Ни ночи нет, ни дня,<br>
  А, может, даже больше,<br>
  А, может, никогда!</div>
<br>
Ла-ла-ла-ла-ла-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
А, может, даже дольше!<br>
А, может, навсегда!<br>
<br>
Ла-ла-ла-ла-ла-ла!<br>
Ла-ла-ла-ла-ра-ла!<br>
А, может, даже больше!<br>
А, может, никогда!<br>
<br>
А может, а может!<br>
А, может, даже больше!<br>
А, может, никогда!<br>
А может, а может!<br>
А, может, даже больше!<br>
А, может, никогда!<br>
<br>
А, может, даже больше (больше)<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/bi2-depressiya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
