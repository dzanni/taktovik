<?php
$title = 'Витя АК ft. Макс АК - Азино три топора (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/qP303vxTLS8'";
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
<br>
N.B. Видео было удалено. Копию см., например, здесь:<br>
<br>
<iframe width='560' height='315' src='https://www.youtube.com/embed/vQkwQiFCiFg'
frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br><br>

<span class='blue'>[Интро]<br></span>
Два, три-ноль-семь, шесть-шесть!<br>
<br>
<span class='blue'>[Куплет: Витя АК + Макс АК] Тк3м, Тк3жм - aa, AbAb<br></span>
По-по-по-поднял бабла (у!) -<br>
Стали другими дела!<br>
Стали считаться со мной:<br>
Знают, кто теперь я!<br>
<br>
По-поднял бабла,<br>
Машина в линию дала!<br>
— У тебя талант, братан!<br>
— Ка-какой? — Играть онлайн!<br>
<br>
Все говорят: «АК, <br>
А как поднять бабла?»<br>
«Куда нажать?» — <span class='blue'>(Строка Тк2м)</span><br>
«А-А-Азино» три топора!<br>
<br>
Я трачу и не плачу<br>
То, что поднял вчера.<br>
Поймал удачу <span class='blue'>(Строка Тк2ж)</span><br>
И держу за оба крыла!<br>
<br>
<span class='blue'>[Припев: Витя АК + Макс АК] Тк2-3м - aa<br></span>
«Азино» три топора!<br>
На-на-началась игра!<br>
Все по-чесноку! Если поднял -<br>
Отгрузят бабла!<br>
Дёрнул за канат -<br>
И макака поймала банан.<br>
Сегодня я гуляю,<br>
И бабки не влазят в карман!<br>
<br>
<span class='blue'><a href='https://genius.com/Vitya-ak-azino-777-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
