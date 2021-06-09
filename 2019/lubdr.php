<?php
$title = 'Вера Брежнева - Любите друг друга (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wXEE_oQUUHs'";
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

<span class='blue'>[Куплет 1] Д4жж - ABAB</span><br>
Я не могу останавливать время,<br>
Я не могу поворачивать реки,<br>
Я не мечтаю быть понятой всеми<br>
И принадлежу одному человеку. <span class='blue'>(Строка Ам4ж)</span><br>
<br>
<span class='blue'>[Переход 1] Х46цу1жм? - AAbAAb</span><br>
Нету ничего выше,<br>
Нету ничего больше,<br>
Ничего сильней истинной любви!<br>
И она во мне дышит, <br>
И она летать сможет,<br>
И её ничем не остановить.<br>
<br>
<span class='blue'>[Припев] Л3322жм - AbCbAdCd</span><br>
Люди, любите друг друга,<br>
Не сжигайте мосты!<br>
Обнимайте, обнимайте,<br>
Дайте теплоты!<br>
Люди, любите друг друга,<br>
Вместе и до конца!<br>
Открывайте, открывайте <br>
Двери и сердца!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Я не умею угадывать мысли,<br>
И уже точно не стану иною.<br>
Но я хочу, чтобы счастливы были<br>
Люди, которые рядом со мною.<br>
<br>
<span class='blue'>[Переход 1]</span><br>
Нету ничего выше,<br>
Нету ничего больше,<br>
Ничего сильней истинной любви!<br>
И она во мне дышит, <br>
И она летать сможет,<br>
И её ничем не остановить.<br>
<br>
<span class='blue'>[Припев]</span><br>
Люди, любите друг друга,<br>
Не сжигайте мосты!<br>
Обнимайте, обнимайте,<br>
Дайте теплоты!<br>
Люди, любите друг друга,<br>
Вместе и до конца!<br>
Открывайте, открывайте <br>
Двери и сердца!<br>
<br>
<span class='blue'>[Переход 2] Л2ж/жм - ABCdABCd</span><br>
Ведь все люди сёстры<br>
И все люди братья -<br>
Открывайте, открывайте <br>
Двери и сердца!<br>
Ведь все люди сёстры <br>
И все люди братья -<br>
Открывайте, открывайте<br>
Двери и сердца!<br>
<br>
<span class='blue'>[Припев]</span><br>
Люди, любите друг друга,<br>
Не сжигайте мосты!<br>
Обнимайте, обнимайте,<br>
Дайте теплоты!<br>
Люди, любите друг друга,<br>
Вместе и до конца!<br>
Открывайте, открывайте <br>
Двери и сердца!<br>
<br>
<span class='blue'>[Переход 2]</span><br>
Ведь все люди сёстры<br>
И все люди братья -<br>
Открывайте, открывайте <br>
Двери и сердца!<br>
Ведь все люди сёстры <br>
И все люди братья -<br>
Открывайте, открывайте<br>
Двери и сердца!<br>
<br>
<span class='blue'>[Финал]<br></span>
Люди, любите друг друга!<br>
Люди, любите друг друга!<br>
<br>
Слова и музыка: Кнстантин Меладзе<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/vera-brezhneva-lubite-drug-druga.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
