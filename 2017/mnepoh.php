<?php
$title = 'FACE - Мне похуй (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/h4MqcpOUWVo'";
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

<span class='blue'>[Вступление]<br></span>
Эй, я, я, брра.<br>
Эй, Фэйс, Фэйс.<br>
Эй, эй, Фэйс.<br>
Я!<br>
<br>
<span class='blue'>[Припев] Л2цж - XX, AA, XAXA<br></span>
Я курю, и мне похуй, <br>
Я бухаю, и мне похуй<br>
Жру таблетки и мне похуй<br>
Трахнул суку без гандона <br>
И мне похуй<br>
Двадцать тысяч на кроссовки<br>
Трачу деньги на хуйню <br>
И трачу их без остановки<br>
Я курю и мне похуй, <br>
Я бухаю и мне похуй<br>
Жру таблетки и мне похуй<br>
Трахнул суку без гандона <br>
И мне похуй<br>
Двадцать тысяч на кроссовки<br>
Трачу деньги на хуйню <br>
И трачу их без остановки<br>
<br>
<span class='blue'>[Куплет 1] Тк4цм/ж - aa, AA<br></span>
Чтобы трахнуться со мной предъявите документ<br>
И я не верю этим сукам, я не верю этим девкам<br>
Фейс контроль на фейс член, вам должно быть по 16<br>
Русский рэп сосет мой хуй, а мне всего лишь 19<br>
Старая школа эй, я, новая школа эй, я <br>
Дайте мне женщин своих, репера <br>
Ведь они вас не любят, а любят меня <br>
Средний палец всем моим учителям<br>
Ваши дети меня слышат, когда плачут по ночам<br>
Она любит меня, да она любит меня<br>
Она не любит тебя, но она любит меня<br>
Да я бездарь и мне похуй, ваши рифмы, ваши батлы<br>
Мы на улицах не будем слушать, как нас посылают нахуй<br>
<br>
<span class='blue'>[Припев]<br></span>
Я курю и мне похуй, <br>
я бухаю и мне похуй<br>
Жру таблетки и мне похуй<br>
Трахнул суку без гандона <br>
и мне похуй<br>
Двадцать тысяч на кроссовки<br>
Трачу деньги на хуйню <br>
и трачу их без остановки<br>
Я курю и мне похуй, <br>
я бухаю и мне похуй<br>
Жру таблетки и мне похуй<br>
Трахнул суку без гандона <br>
и мне похуй<br>
Двадцать тысяч на кроссовки<br>
Трачу деньги на хуйню <br>
и трачу их без остановки<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Угадайте почему она молчит со мной вдвоём<br>
Она занята работой, а работа её ртом<br>
Я смеюсь над рэперами, что подумали мы байтим<br>
Я ебал твою подругу, так что подружился с её батей<br>
На моих ногах "гоша", но на моих ногах "вансы"<br>
Они на моем хуе, будто это кастинг "танцы"<br>
Не проходишь, не подходишь, да я лакшери ребёнок<br>
Я с разбитым сердцем, сука, но я все равно влюблённый<br>
Мы ебали негретянку, это было прямо в ванной<br>
После трахнули двух мамок, это было очень странно<br>
За собой следи, ублюдок, ведь за мной следить не надо<br>
Возможно мы ебались с твоей мамой<br>
<br>
<span class='blue'>[Припев]<br></span>
Я курю и мне похуй, <br>
я бухаю и мне похуй<br>
Жру таблетки и мне похуй<br>
Трахнул суку без гандона <br>
и мне похуй<br>
Двадцать тысяч на кроссовки<br>
Трачу деньги на хуйню <br>
и трачу их без остановки<br>
Я курю и мне похуй, <br>
я бухаю и мне похуй<br>
Жру таблетки и мне похуй<br>
Трахнул суку без гандона <br>
и мне похуй<br>
Двадцать тысяч на кроссовки<br>
Трачу деньги на хуйню <br>
и трачу их без остановки<br>
<br>
<span class='blue'><a href="https://genius.com/Face-mne-pohuy-lyrics"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. м=ж (мужская рифма на месте женской): документ - девкам.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
