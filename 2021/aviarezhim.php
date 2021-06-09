<?php
$title = 'Аня Pokrov - Авиарежим (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/5oAlWb_Uph8'";
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

<span class='blue'>[Интро]</span><br>
Ха-ха, ха-ха!<br>
<br>
<span class='blue'>[Переход] Дв3жм - AAAbAAAb</span><br>
Волнуешься, как море, <br>
Ты у меня в игноре.<br>
Ты смотришь мои стори,<br>
Но больше не пиши!<br>
Я не буду с тобою,<br>
Я не хочу бэд боя!<br>
Сердце на паролях — <br>
Авиарежим!<br>
<br>
<span class='blue'>[Припев х4] Я23м/ - aa</span><br>
Жим-жим, жим-жим, <br>
На авиарежим!<br>
<br>
<span class='blue'>[Куплет 1] Я6цж/ - AAAA</span><br>
На авиарежим я ставлю свои мысли.<br>
Не слышишь ты отказа даже по-английски.<br>
Ты хочешь мне признаться, но ты в зоне риска (ха)<br>
Волнуешься, как будто я твой Олимпийский!<br>
  <div class='refren'>
  <span class='blue'>Тк4цм/м - aabb</span><br>
  Ты меня искал, ау-ау,<br>
  Мы на разных полюсах, не гони волну!<br>
  Один поцелуй, да и тот не в счет.<br>
  Оплачу твою любовь — запиши на мой счет!</div>
<br>
<span class='blue'>[Переход]</span><br>
Волнуешься, как море, <br>
Ты у меня в игноре.<br>
Ты смотришь мои стори,<br>
Но больше не пиши!<br>
Я не буду с тобою,<br>
Я не хочу бэд боя!<br>
Сердце на паролях — <br>
Авиарежим!<br>
<br>
<span class='blue'>[Припев х4]</span><br>
Жим-жим, жим-жим, <br>
На авиарежим!<br>
<br>
<span class='blue'>[Куплет 1]</span><br>
У тебя жим-жим-жим, у меня спорт режим (wroom-wroom)<br>
Девочка-самурай достаёт ножи.<br>
Раньше ты не видел такой красоты.<br>
Хлоп-хлоп-хлоп парень ресницами, смотри, не улети!<br>
  <div class='refren'>
  <span class='blue'>Тк4цж/ - AAAA</span><br>
  Бой, меня не тронь, убери-ка свои лапки (лапки)<br>
  Мне не нужна любовь, у меня и так всё гладко (ха)<br>
  У меня есть кола, сериал и шоколадки,<br>
  И мне слишком хорошо одной в кроватке (у)</div>
<br>
<span class='blue'>[Переход]</span><br>
Волнуешься, как море, <br>
Ты у меня в игноре.<br>
Ты смотришь мои стори,<br>
Но больше не пиши!<br>
Я не буду с тобою,<br>
Я не хочу бэд боя!<br>
Сердце на паролях — <br>
Авиарежим!<br>
<br>
<span class='blue'>[Припев х4]</span><br>
Жим-жим, жим-жим, <br>
На авиарежим!<br>
<br>
  <span class='blue'><a href='https://on-hit.ru/texts/anja-pokrov-aviarezhim/'
    target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
