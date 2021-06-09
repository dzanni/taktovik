<?php
$title = 'Даня Милохин - Я дома (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/NM4C3wnXzxE'";
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

<span class='i'>- Просыпайся, [неразб.]<br></span>
<br>
<span class='blue'>[Припев х2] Л21жж - ABAB</span><br>
Угадай, где я? <br>
Я дома!<br>
Угадай, как я? <br>
Я в норме!<br>
  <div class='refren'>
  <span class='blue'>Дк2221мж - aBaB</span><br>
  У меня цель,<br>
  И я о ней помню!<br>
  Я варю контент,<br>
  Как повар.</div>
<br>
<span class='blue'>[Куплет 1] Тк4цм/? - aa</span><br>
Лали собирает Lego, я пишу трек. <span class='blue'>(Строка Тк5цм)</span><br>
Ты стоишь, я поднимаюсь наверх (короновирус)<br>
Больше работы - ближе успех!<br>
Понял, почему теперь я лучше их всех?<br>
Я не трачу зря время (фиу!) Что будет потом (что?)<br>
Ты выйдешь погулять, а я закончу альбом.<br>
Карантин не навсегда! Догоняй или стой!<br>
Даня вас предупреждал, что нужно думать головой!<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Угадай, где я? <br>
Я дома!<br>
Угадай, как я? <br>
Я в норме!<br>
  <div class='refren'>У меня цель,<br>
  И я о ней помню!<br>
  Я варю контент,<br>
  Как повар.</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Я родился в России. Детка, я непобедим!<br>
В генах сила ушатать врагов один за другим!<br>
Мы с малышкой chill all day - спасибо, карантин.<br>
Если хочешь навредить, не стой на пути!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/m/milohin-danya/danya-milohin-ya-doma.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
