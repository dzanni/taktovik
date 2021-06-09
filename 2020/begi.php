<?php
$title = 'DJ Smash ft. Poёt - Беги (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/GxqEiWneRng'";
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

<span class='blue'>[Куплет 1] Дв1-4жм - AAbAAb</span><br>
Мокро.<br>
Который день ужасно мокро.<br>
Проклятый дождь!<br>
Кровью,<br>
Залились кровью наши окна,<br>
И скоро ты уйдешь.<br>
  <div class='refren'>
  <span class='blue'>Д2мжмм? - aBax</span><br>
  Лужи и соль,<br>
  Талые реки.<br>
  Я беру кольт,<br>
  А ты беги! <span class='blue'>(Строка Дк2м)</span><br></div>
<br>
<span class='blue'>[Припев] Тр3мж - aBaB</span><br>
Беги, дорогая, беги!<br>
Беги ради папы и мамы!<br>
Если услышишь шаги,<br>
Делай круги и зигзаги!<br>
  <div class='refren'>
  <span class='blue'>Тр3м|ж - aBBa</span><br>
  О, беги! <span class='blue'>(Строка Дк2м)</span><br>
  Пока не затянутся раны.<br>
  Беги ради папы и мамы,<br>
  Пока не сотрешь каблуки.</div>
<span class='blue'>Я5м/ - aaa</span><br>
Па-лУм-па пА-ра-пА-ра пА-ра пА!<br>
Ма-рУм-па пА-ра-пА-ра пА-ра пА!<br>
Ма-рУм-па пА!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Хватит!<br>
В грязи увязло твое платье.<br>
Не захлебнись!<br>
И, кстати,<br>
Все еще верю - мы поладим,<br>
Вернемся в наши дни.<br>
  <div class='refren'>
  <span class='blue'>Л3дм? - A'bA'b</span><br>
  Где свет и тепло в объятиях,<br>
  Я не узнаю себя,<br>
  Но в прошлом давно утопия,<br>
  Со мной быть сейчас нельзя.</div>
Только не верь<br>
В эти уловки,<br>
Взламывай дверь<br>
И налегке...<br>
<br>
<span class='blue'>[Припев]</span><br>
Беги, дорогая, беги!<br>
Беги ради папы и мамы!<br>
Если услышишь шаги,<br>
Делай круги и зигзаги!<br>
  <div class='refren'>О, беги!<br>
  Пока не затянутся раны.<br>
  Беги ради папы и мамы,<br>
  Пока не сотрешь каблуки.</div>
Па-лум-па па-ра-па-ра па-ра па!<br>
Ма-рум-па па-ра-па-ра па-ра па!<br>
Ма-рум-па па!<br>
<br>
<span class='blue'>[Куплет 3] Дк3жм? - AbAb</span><br>
Я до пяти считаю,<br>
Беги и назад не смотри!<br>
Но раньше времени стреляю, <span class='blue'>(Строка Тк3ж)</span><br>
Всего лишь на раз-два-три!<br>
<br>
<span class='blue'>[Припев]</span><br>
Беги, дорогая, беги!<br>
Беги ради папы и мамы!<br>
Если услышишь шаги,<br>
Делай круги и зигзаги!<br>
  <div class='refren'>О, беги!<br>
  Пока не затянутся раны.<br>
  Беги ради папы и мамы,<br>
  Пока не сотрешь каблуки.</div>
Па-лум-па па-ра-па-ра па-ра па!<br>
Ма-рум-па па-ра-па-ра па-ра па!<br>
Ма-рум-па па!<br>
  <br>
<span class='blue'>Источник: официальный текст под клипом Youtube</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
