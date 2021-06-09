<?php
$title = 'Юлианна Караулова - Дикая пума (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/MV3dQa9DfUI'";
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

<span class='blue'>[Вступление] Дк3мж - aBaB</span><br>
Yves Saint Laurent, <br>
Maybach под клубом.<br>
Мой Бах — Lil Pump. <br>
Я хуже, чем ты думал!<br>
Я хуже, чем ты думал!<br>
(Ррра!)<br>
(РА-та-тА!)<br>
<br>
<span class='blue'>[Переход] Ам3ж/? - AAAA<br></span>
Fuego, fuego, fuego!<br>
Fuego, fuego, fuego!<br>
Ты Lego! Ты Lego! Мой Lego!<br>
Покажи мне своё альтер-эго! <span class='blue'>(Строка Ан3ж)<br></span>
<br>
<span class='blue'>[Куплет 1] Тк2жж - ABAB<br></span>
Я разберу тебя, мальчик,<br>
И соберу тебя снова!<br>
Эй, ну, чё ты там начал? <br>
Давай, не попсово (эй!)<br>
  <div class='refren'>Без эпатажа, гламура (ах) <br>
  Я уезжаю из клуба (ар-р-р)<br>
  Дикая пума! <br>
  Я хуже, чем ты думал!<br>
  (Но-О-йа-йО!)<br>
  Я хуже, чем ты думал!<br>
  (Ррра!)<br>
  (Но-О-йа-йО!)<br>
  (РА-та-тА!)<br>
  (Ой-ой!)</div>
<br>
<span class='blue'>[Куплет 2] Л2-3цжм? - AbAbCCCb<br></span>
Не бойся своих желаний, <br>
Вoy, бойся моих!<br>
Оставим эту ночь в тайне. <br>
Boy, ложь на двоих!<br>
  <div class='refren'>
  (А) такие моменты (такие моменты)<br>
  Вращают планеты.<br>
  Boy, это вендетта! <br>
  Запоминай этот миг!</div>
<span class='blue'>Дв43жж - ABAB<br></span>
Я чё-то подза… улыбалась. <br>
Прикусила губы.<br>
Чё-то подза… улыбалась. <br>
Я хуже, чем ты думал!<br>
(Но-О-йа-йО!)<br>
Я хуже, чем ты думал!<br>
(Ррра!)<br>
(Но-О-йа-йО!)<br>
(Ра-та-та!)<br>
(О-а!)<br>
(Но-О-йа-йО!)<br>
(О-о-о, йО-о-о!) <br>
(Но-О-йа-йО!)<br>
(А, йо!) <br>
<br>
<span class='blue'>[Финал]<br></span>
Yves Saint Laurent, <br>
Maybach под клубом.<br>
Мой Бах — Lil Pump. <br>
Я хуже, чем ты думал!<br>
 <br>
Я хуже, чем ты думал!<br>
(Ррра!)<br>
(Но-О-йа-йО!)<br>
(Ра-та-та!)<br>
(Ой-ой!)<br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/k/karaulova-julianna/julianna-karaulova-dikaya-puma.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
