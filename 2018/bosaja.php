<?php
$title = '#2Маши - Босая (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Vbtpm23ucw4'";
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

<span class='blue'>[Припев] Л23мж - aABaABA<br></span>
По лицу роса. <br>
Я к тебе босая<br>
И слова бросаю по ветру.<br>
По лицу роса. <br>
Я к тебе босая<br>
За тобой бегу на край света <br>
Босая!<br>
<br>
(Босая!)<br>
<br>
<span class='blue'>[Переход] Тк2жм? - abAbCbCb<br></span>
Если бы не ты, <br>
Где бы была я?<br>
Если бы не сила <br>
Моя, моря, моря<br>
Унесли бы ветром<br>
Полюса-паруса.<br>
Любовь была светом.<br>
Белая полоса.<br>
<br>
<span class='blue'>[Припев]<br></span>
По лицу роса. <br>
Я к тебе босая<br>
И слова бросаю по ветру.<br>
По лицу роса. <br>
Я к тебе босая<br>
За тобой бегу на край света <br>
Босая!<br>
<br>
(Босая!)<br>
<br>
<span class='blue'>[Куплет] Тк4цжм, Тк4цдм - AAaa, A'A'aa<br></span>
Я за тобой босиком по осколкам.<br>
Моё сердце ты протыкаешь иголкой.<br>
Ты колешь, колешь меня изнутри.<br>
Возьми и посмотри <span class='blue'>(Строка Тк2м)<br></span>
<div class='refren'>
На мою кожу, ты рассыпаешься,<br>
Засыпаешь со мной, просыпаешься.<br>
Без тебя никак, без тебя нельзя.<br>
Мои чувства от тебя к тебе скользят.</div>
<br>
<span class='blue'>[Припев х2]<br></span>
По лицу роса. <br>
Я к тебе босая<br>
И слова бросаю по ветру.<br>
По лицу роса. <br>
Я к тебе босая<br>
За тобой бегу на край света <br>
Босая!<br>
<br>
(Босая!)<br>
<br>
<span class='blue'>[Переход]<br></span>
Если бы не ты, <br>
Где бы была я?<br>
Если бы не сила <br>
Моя, моря, моря<br>
Унесли бы ветром<br>
Полюса-паруса.<br>
Любовь была светом.<br>
Белая полоса.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
По лицу роса. <br>
Я к тебе босая<br>
И слова бросаю по ветру.<br>
По лицу роса. <br>
Я к тебе босая<br>
За тобой бегу на край света <br>
Босая!<br>
<br>
(Босая!)<br>
(Босая!)<br>
<br>
Музыка: Мария Зайцева<br>
Слова: Маша Шейх<br>
<br>
<span class='blue'><a href='http://morepesen.ru/43080-2mashi-bosaya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
