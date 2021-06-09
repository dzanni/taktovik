<?php
$title = 'MC Хованский - Илон Маск (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/GfmussDBrUQ'";
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

<span class='blue'>[Припев х2] Тр2м - abab abab<br></span>
Я, как Илон Маск, <br>
Снова в игре!<br>
Давим на газ, <br>
Хова камбэк!<br>
«Тесла» под зад, <br>
Копы в огне,<br>
Как Илон Маск, <br>
Я снова в игре!<br>
<br>
<span class='blue'>[Куплет 1] Тк4цж - AA<br></span>
Подпалил твой зад мой куплет-ракета,<br>
Залетаю на биты, будто бы «Тесла» в небо.<br>
Вы игру перевернули? Чё-то незаметно!<br>
Ты — мамкин хуй, я — член совета!<br>
Моргенштерн? Иди сюда, падла!<br>
Меня впервые в жизни задиссила швабра!<br>
Ты не «Изиреп», ты просто — Изи!<br>
Какой ты русский рэпер? Ты даже меня не пиздил!<br>
<br>
<span class='blue'>[Предприпев] Тк4цж - AAАА<br></span>
Мой хуй тяжёлый, будто «Фалкон Хеви»!<br>
Твой хайп никчёмный, будто Птаха в рэпе!<br>
Я запускаю спутники на небо,<br>
Чтобы раздать свой рэп по всей планете!<br>
<br>
<span class='blue'>[Припев 2 х2] Ам2ж - AA<br></span>
Зови меня Илон (Илон Маск, я как Илон Маск)<br>
Зови меня Илон (Илон Маск, я как, я как Илон Маск)<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Я, как Илон Маск, <br>
Снова в игре!<br>
Давим на газ, <br>
Хова камбэк!<br>
«Тесла» под зад, <br>
Копы в огне,<br>
Как Илон Маск, <br>
Я снова в игре!<br>
<br>
<span class='blue'>[Куплет 2] Тк34цм/ж - aa, AA<br></span>
Да, жизнь — огромный «Версус» Гуфа с Птахой (хуйня)<br>
Я в ней — весёлый пьяный Ресторатор.<br>
Птаха не понял меня, <br>
На его языке сейчас всё объясню:<br>
«БУ-бу-бу, бУ-бу-бу, бУ-бу-бу-бУ!»<br>
Не ищи меня больше, ты так заебал!<br>
Тебе нужен мой номер? Я кину «Пейпал»!<br>
<br>
<span class='blue'>[Предприпев]<br></span>
Мой хуй тяжёлый, будто «Фалкон Хеви»!<br>
Твой хайп никчёмный, будто Птаха в рэпе!<br>
Я запускаю спутники на небо,<br>
Чтобы раздать свой рэп по всей планете!<br>
<br>
<span class='blue'>[Припев 2 х4]</span><br>
Зови меня Илон (Илон Маск, я как Илон Маск)<br>
Зови меня Илон (Илон Маск, я как, я как Илон Маск)<br>
   <br>
   <span class='blue'><a href='https://genius.com/Mc-hovansky-ilon-mask-lyrics'
     target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
