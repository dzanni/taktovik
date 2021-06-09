<?php
$title = 'Cream Soda & Хлеб - Плачу на техно (2020) (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/L1Snj1Pt-Hs'";
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

<span class='blue'>[Интро] Л3ж/ - AA<br></span>
Никаких больше вечеринок!<br>
Ты рисуешь старые картины!<br>
<br>
<span class='blue'>[Куплет 1] Тк3-6цм - abab<br></span>
Ночью уснуть не могу никак<br>
И пришла я на техно, чтоб найти тебя снова тут.<br>
«Вэнсы» твои, как год назад,<br>
Но рядом «найки» уже не мои топчат знакомый мне грув.<br>
<div class='refren'>Ты же был лишь моим, лишь моим,<br>
И мы вместе мечтали купить что-то в Кузнецком мосту!<br>
Ты же был лишь моим, лишь моим,<br>
Вила Лобос играет для вас, а я слезы еле держу!</div>
<br>
<span class='blue'>[Припев х4] Тк4цж - AA<br></span>
Плачу на техно, я плачу на техно!<br>
Ты не со мной, слезы льются на рейве!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Плачу навзрыд, слезы бегут по щекам<br>
И со щек кап-кап мне на новый Стонак.<br>
Я жила лишь тобой, ты сказала мне: «Гудбай!»<br>
И я горько рыдаю, словно вновь закрыли Outline!</div>
<div class='refren'>Ты же был лишь моим, лишь моим,<br>
И мы вместе мечтали купить что-то в Кузнецком мосту!<br>
Ты же был лишь моим, лишь моим,<br>
Нина Кравиц играет для вас, а я слез уже не держу!</div>
<br>
<span class='blue'>[Припев х4]<br></span>
Плачу на техно, я плачу на техно!<br>
Ты не со мной, слезы льются на рейве!<br>
 <br>
<span class='blue'>Источник: расшифровка фонограммы клипа.</span><br>
 <br>
 <br>
P.S.  Перепев от женского имени <a href='../2017/plachun.php'>одноименной песни</a> 2017 года группы "Хлеб". <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
