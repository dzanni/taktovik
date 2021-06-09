<?php
$title = 'SHLAKOBLOCHINA ft. FEARMUCH - Новая сила киски (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xfjZxgcI0yI'";
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

<span class='blue'>[Интро]</span><br>
One, two, three, four!<br>
Break it down, bitch!<br>
<br>
<span class='blue'>[Куплет 1] Дк2-3ж/ - AA...</span><br>
Почитай вслух мою киску!<br>
Она как ириска!<br>
Возьми меня, я близко!<br>
Здесь вовсе не кисло!<br>
  <div class='refren'>Мы вместе зависнем.<br>
  Целуй меня, я близко!<br>
  Мы вместе зависнем.<br>
  Целуй меня, я близко!</div>
<br>
<span class='blue'>[Переход] Дв2ж/ - AA...</span><br>
(Ах!) Моя киска <br>
(Ох!) Без прописки.<br>
Налей мне виски!<br>
Налей мне виски!<br>
  <div class='refren'>(Ах!) Моя киска <br>
  (Ах!) Cловно искра.<br>
  Будь к ней близко!<br>
  Будь к ней близко!</div>
<br>
<span class='blue'>[Припев х2] Л3ж/? - AA...</span><br>
Новая сила киски!<br>
Новая сила киски!<br>
Сука, ты в зоне риска!<br>
Сука, ты в зоне риска!<br>
  <div class='refren'>Новая сила киски.<br>
  Задержан и обыскан.<br>
  Обласкан и затискан.<br>
  Обласкан и затискан.</div>
<br>
<span class='blue'>[Переход]</span><br>
(Ах!) Моя киска <br>
(Ох!) Без прописки.<br>
Налей мне виски!<br>
Налей мне виски!<br>
<br>
<span class='blue'>[Куплет 2, FEARMUCH] Дв3жж - ABAB</span><br>
Ты прошла проверку<br>
И зашла в гримерку.<br>
Мы с тобой в притирку,<br>
Как морковь и терка.<br>
  <div class='refren'>Ты сладкая конфетка (ммм)<br>
  Шикарная обертка (а)<br>
  Выглядишь эффектно -<br>
  Твердая пятерка (ах)</div>
<br>
<span class='blue'>Тк4цм/ - AAAA</span><br>
When I pull up that pussy pack,<br>
Выпрыгивай с трусов, время рассекать!<br>
Я скручу тебя быстрей косяка.<br>
Потискать киску – это классика (мяу) <span class='blue'>(Строка Тк4цд)</span><br>
<div class='refren'>Давно не видел я таких классных форм,<br>
  Для твоей киски есть шикарный корм.<br>
  <span class='blue'>Тк2жж - ABAB</span><br>
  И вижу очень близко, <br>
  Ты куда, дама?<br>
  Познакомлю твою киску<br>
  Со своим удавом!</div>
<br>
<span class='blue'>[Переход]</span><br>
(Ах!) Моя киска <br>
(Ох!) Без прописки.<br>
Налей мне виски!<br>
Налей мне виски!<br>
  <div class='refren'>(Ах!) Моя киска <br>
  (Ах!) Cловно искра.<br>
  Будь к ней близко!<br>
  Будь к ней близко!</div>
<br>
<span class='blue'>[Припев х2]</span><br>
Новая сила киски!<br>
Новая сила киски!<br>
Сука, ты в зоне риска!<br>
Сука, ты в зоне риска!<br>
  <div class='refren'>Новая сила киски.<br>
  Задержан и обыскан.<br>
  Обласкан и затискан.<br>
  Обласкан и затискан.</div>
<br>
<span class='blue'>[Переход]</span><br>
(Ах!) Моя киска <br>
(Ох!) Без прописки.<br>
Налей мне виски!<br>
Налей мне виски!<br>
  <br>
<span class='blue'><a href='https://on-hit.ru/texts/shlakoblochina-novaja-sila-kiski/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Финальный слог дактилического окончания зарифмован с мужским окончанием: "косякА - клАссикА".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
