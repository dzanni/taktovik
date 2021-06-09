<?php
$title = 'Милена Чижова - Зая (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/4Gy98w4svJM'";
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

<span class='blue'>[Куплет 1] Тк4ц3ж - AA<br></span>
Я царица, только вот потеряла корону.<br>
Я королева, слетевшая с трона.<br>
Я как ангел, но, правда, потеряла крылья -<br>
Часть моего стиля... <span class='blue'>(Строка Тк2ж)</span><br>
<div class='ref'>
Теперь я страдаю, как сука.<br>
iPhone в режиме «без звука».<br>
Мне все равно не пишут парни, я им не интересна.<br>
Делаю шаги сама, никакого прогресса.</div>
Все это будто проклятье,<br>
Для кого ношу красивые платья.<br>
Я зарегалась в Badoo, все, с меня хватит!<br>
Даже там нет взаимной симпатии.<br>
<br>
<span class='blue'>[Переход] Тк2-4цж - AAABAAхB<br></span>
Опять это по новой.<br>
 Снова эта френдзона.<br>
Ничего кроме игнора. <br>
Дело не в маленьких сиськах. Нет!<br>
Опять это по новой.<br>
 Снова эта френдзона.<br>
Ну и плевать! <br>
У меня зато есть охуительный виски!<br>
<br>
<span class='blue'>[Припев х2] Л42жм - AbAb<br></span>
И я такая зая, зая, зая, <br>
Где мой супергерой?<br>
Но я такая злая, зая, зая, <br>
Заебись мне одной!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Мне дико не везет с парнями.<br>
Я пытаюсь ухватиться за любого двумя руками.<br>
Вместо этого - семь кошек дома.<br>
Все потому что потеряла крылья, на пару с короной.<br>
<div class='ref'>
Двадцатая любовь без ответа.<br>
Крашусь только в надежде на это.<br>
Мне не нужен олигарх, я в них не шарю.<br>
Сойдет обычной повар, чтобы просто мог жарить.</div>
Я просыпаюсь одна в постели.<br>
Верните мне корону за вознагражденье!<br>
Без нее не работает волшебное зелье.<br>
Все впустую, тупо похмелье!<br>
<br>
<span class='blue'>[Переход]<br></span>
Опять это по новой.<br>
 Снова эта френдзона.<br>
Ничего кроме игнора. <br>
Дело не в маленьких сиськах. Нет!<br>
Опять это по новой.<br>
 Снова эта френдзона.<br>
Ну и плевать! <br>
У меня зато есть охуительный виски!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
И я такая зая, зая, зая, <br>
Где мой супергерой?<br>
Но я такая злая, зая, зая, <br>
Заебись мне одной!<br>
<br>
Музыка и слова: Дмитрий Эбергарт<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/ch/chizhova_milena/milena-chizhova-zaya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
