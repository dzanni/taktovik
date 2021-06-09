<?php
$title = 'Юлианна Караулова - Ариведерчи (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/-vilNkMF7F8'";
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

<span class='blue'>[Куплет 1] Л4ц2мж - aaaBcccB</span><br>
Уже давно телефон молчит,<br>
Как будто в голову встроен чип.<br>
Все до одной перечитаны <br>
Твои смски.<br>
Достанешь меч, я достану щит.<br>
Мы бесконечность, и все звучит!<br>
Наверно, поздно уже лечить,<br>
Дели на отрезки!<br>
<br>
<span class='blue'>[Припев] Тк34цм/ - aa</span><br>
Ариведерчи, Вась!<br>
Если позвоню - значит напилась!<br>
Ариведерчи, Сергей!<br>
Я давно подозревала, что ты злодей!<br>
Ариведерчи, Артем!<br>
Твои слова совсем ни о чем!<br>
Ариведерчи, Антон!<br>
Ну какой же ты...<br>
Ну какой же ты...<br>
<br>
<span class='i'>- Знаешь, посмотри на меня как бы. А теперь вот пошел! Понимаешь?<br></span>
<br>
<span class='blue'>[Куплет 2]</span><br>
Уже давно я устала ждать,<br>
Я не пойду за тобой рыдать.<br>
Ну что еще я могу опять<br>
Тебе, ну скажи мне?<br>
Уже твой поезд давно ушел,<br>
Стало спокойно и хорошо,<br>
Ну как тебе обьяснить еще,<br>
Что это точка?<br>
<br>
<span class='blue'>[Припев]</span><br>
Ариведерчи, Вась!<br>
Если позвоню - значит напилась!<br>
Ариведерчи, Сергей!<br>
Я давно подозревала, что ты злодей!<br>
Ариведерчи, Артем!<br>
Твои слова совсем ни о чем!<br>
Ариведерчи, Антон!<br>
Ну какой же ты...<br>
Ну какой же ты...<br>
<br>
<span class='blue'>[Аутро] Тк23м/ж - aa, AA</span><br>
Такая крутая (ага) <br>
Но чувствами не играю (нет-нет)<br>
Я отпускаю <br>
Твою перелетную стаю.<br>
Прощай, прощаю, <br>
До пульса, да через край!<br>
Good luck, good bye!<br>
Ты не мой кайф!<br>
Ариведерчи!<br>
 <br>
 Музыка: Денис Дейнега <br>
 Текст аутро: Саша ST <br>
  <br>
<span class='blue'><a href='https://genius.com/Yulianna-karaulova-arrivederci-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Рифма д распета в м: <br>
<br>
Как будто в голову встроен чИп<br>
Все до одной перечитанЫ <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
