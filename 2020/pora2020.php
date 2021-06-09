<?php
$title = 'Ногу Свело! - Пора прощаться, 2020 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/MA9PU-rf6Yo'";
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

<span class='blue'>[Припев] Я4жм - AAAbAAAb</span><br>
Пора прощаться, 2020!<br>
Мы каждый день устали драться.<br>
Сюжетам всех галлюцинаций <br>
За новостями не успеть.<br>
  <div class='refren'>Пора прощаться, 2020!<br>
  На стыке двух цивилизаций<br>
  Нам остается лишь нажраться,<br>
  Чтоб в 21-м протрезветь.</div>
<br>
<span class='blue'>[Куплет 1] Я24жм - AAbCCb</span><br>
Герои сказки<br>
Надели маски.<br>
Плесни вакцины, сомелье!<br>
Как это круто -<br>
Проснуться утром<br>
Лицом в салате оливье!<br>
<br>
<span class='blue'>[Переход] Я43мж - aBaB</span><br>
Мы нервно смотрим на часы,<br>
Свои года считая.<br>
Разносят Санта Клаусы<br>
Подарки из Китая.<br>
<br>
<span class='blue'>[Припев]</span><br>
Пора прощаться, 2020!<br>
Мы каждый день устали драться.<br>
Сюжетам всех галлюцинаций <br>
За новостями не успеть.<br>
  <div class='refren'>Пора прощаться, 2020!<br>
  На стыке двух цивилизаций<br>
  Нам остается лишь нажраться,<br>
  Чтоб в 21-м протрезветь.</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
За эту сумму<br>
Я Вам по Zoom-у<br>
Спою, раздевшись догола.<br>
Верхом на стуле<br>
Скачу, и хули?<br>
Ковид, расслабься - твоя взяла! <span class='blue'>(Строка Я4цн1м)<br></span>
<br>
<span class='blue'>[Переход]</span><br>
Мы нервно смотрим на табло -<br>
Какой там курс валюты?<br>
Куда Вас, сударь, к черту занесло <span class='blue'>(Строка Я45м)</span><br>
Ветрами смуты? <span class='blue'>(Строка Я2ж)<br></span>
<br>
<span class='blue'>[Припев]</span><br>
Пора прощаться, 2020!<br>
Мы каждый день устали драться.<br>
Сюжетам всех галлюцинаций <br>
За новостями не успеть.<br>
  <div class='refren'>Пора прощаться, 2020!<br>
  На стыке двух цивилизаций<br>
  Нам остается лишь нажраться,<br>
  Чтоб в 21-м протрезветь.</div>
<br>
<span class='blue'>[Переход]</span><br>
Мы нервно смотрим на часы,<br>
Свои года считая.<br>
Кладем в таможне на весы<br>
Подарки из Китая.<br>
<br>
<span class='blue'>[Припев]</span><br>
Пора прощаться, 2020!<br>
Мы каждый день устали драться.<br>
Сюжетам всех галлюцинаций <br>
За новостями не успеть.<br>
  <div class='refren'>Пора прощаться, 2020!<br>
  На стыке двух цивилизаций<br>
  Нам остается лишь нажраться,<br>
  Чтоб в 21-м протрезветь.</div>
  <br>
<span class='blue'>Источник: официальный текст под клипом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
