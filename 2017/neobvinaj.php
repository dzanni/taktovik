<?php
$title = 'Елена Темникова - Не обвиняй меня (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Hy0hg7HrBlQ'";
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

<span class='blue'>[Куплет 1] Тк4цд - A'A'B'B'<br></span>
Телом и душой в твоей тихой гавани.<br>
Делаешь всё, чтобы слёзы не капали.<br>
Даришь мне то счастье заветное,<br>
Тревоги с тобой едва лишь заметные.<br>
<br>
<span class='blue'>[Переход] Тк2жд - XA'A'<br></span>
Но только, только<br>
Не обвиняй ни в чём,<br>
Ведь я ни при чём!<br>
<br>
<span class='blue'>[Припев х2] Л2мж - aBaB<br></span>
Не обвиняй меня,<br>
Ведь я не святая.<br>
От любви к тебе<br>
Своё сердце сжигаю.<br>
Не обвиняй меня,<br>
Ведь я не святая<br>
А ты?<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Меня оберегай, ведь я для тебя живу,<br>
Счастье где-то рядом, и это всё наяву.<br>
Говорят пускай, что мы слишком разные,<br>
Главное одно - любовью мы связаны.<br>
<br>
<span class='blue'>[Переход]<br></span>
Но только, только<br>
Не обвиняй ни в чём,<br>
Глядя в глаза мои!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Не обвиняй меня,<br>
Ведь я не святая.<br>
От любви к тебе<br>
Своё сердце сжигаю.<br>
Не обвиняй меня,<br>
Ведь я не святая<br>
А ты?<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Не обвиняй меня,<br>
Ведь я не святая.<br>
От любви к тебе<br>
Своё сердце сжигаю.<br>
Не обвиняй меня,<br>
Ведь я не святая<br>
А ты?<br>
<br>
<span class='blue'>Источник: официальный текст под клипом Youtube</span><br>
<br>
<br>
N.B. Рифма д=м "не обвиняй ни в чем - ведь я ни при чем - глядя в глаза мои".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
