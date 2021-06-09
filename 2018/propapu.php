<?php
$title = 'Вячеслав Мясников - Шедевральная песня про папу (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/nlOuD10qjQg'";
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

<span class='blue'>[Интро] Дк3ж - ABAB<br></span>
Кто-то зовёт их «батя»,<br>
Кто-то «отцом» называет,<br>
А я называю - «папа»,<br>
Ведь лучше его не бывает!<br>
<br>
<span class='blue'>[Куплет 1] Дк3343м - abab, Дк3343мж, Дк3мж - aBaB<br></span>
Папа очень был скромный всегда,<br>
Улыбался на мой он вопрос.<br>
Почему ты, папа, всегда уходил,<br>
Когда приходил Дед Мороз?<br>
<div class='refren'>
И в шесть лет на машине вдвоём<br>
Мы с тобой на безлюдной дороге,<br>
И я впервые сижу за рулём,<br>
А педали жмут папины ноги.</div>

Он ремня тебе дать обещал,<br>
Ты внутри холодел от вины,<br>
Но из брюк он ремень доставал лишь тогда,<br>
Когда мама стирала штаны.<br>
<div class='refren'>
Он под утро может придти,<br>
Опоздать на сутки домой.<br>
Но папа себе никогда не простит<br>
Опозданье на утренник твой!</div>
<br>
<span class='blue'>[Припев] Дк4ц3м? - abaxb<br></span>
Те минуты, что я с тобой проводил,<br>
Мне не забыть никогда.<br>
Спасибо папа за то, что ты был,<br>
За то, что ты есть,<br>
За то, что ты будешь всегда!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Воспитание сыновей -<br>
Ничего нет для папы важнее!<br>
Но дочек папы всегда<br>
Почему-то любят сильнее.<br>
<div class='refren'>
Я хочу, чтобы все из людей<br>
Понимали все эти масштабы.<br>
Половина души у детей<br>
Называется словом «папы»!</div>

Меня жизнь заставляет познать<br>
Неизвестные раньше этапы,<br>
Просто отцом ещё мало стать,<br>
Постараться стать надо папой!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Те минуты, что я с тобой проводил,<br>
Мне не забыть никогда.<br>
Спасибо папа за то, что ты был,<br>
За то, что ты есть,<br>
За то, что ты будешь всегда!<br>
<br>
<span class='blue'>[Интро]<br></span>
Кто-то зовёт их «батя»,<br>
Кто-то «отцом» называет,<br>
А я называю - «папа»,<br>
Ведь лучше его не бывает!<br>
<br>
<span class='blue'><a href='http://teksti-pesenok.ru/3/Vyacheslav-Myasnikov/tekst-pesni-Pesnya-pro-papu'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
