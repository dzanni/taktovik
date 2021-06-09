<?php
$title = 'Хлеб - Плачу на техно (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/V5r3oFlTo0w'";
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

<span class='blue'>[Куплет 1: Кирилл Трифонов] Тк3-6цм - abab<br></span>
Ночью уснуть не могу никак<br>
И пришел я на техно, чтоб найти тебя снова тут.<br>
«Вэнсы» твои, как год назад,<br>
Но рядом «найки» уже не мои топчат знакомый мне грув.<br>
<div class='refren'>Ты была лишь моя, лишь моя,<br>
И мы вместе мечтали купить что-то в Кузнецком мосту!<br>
Ты была лишь моя, лишь моя,<br>
Вила Лобос играет для вас, а я слезы еле держу!</div>
<br>
<span class='blue'>[Припев х2: Кирилл Трифонов] Тк4цж - AA<br></span>
Плачу на техно, я плачу на техно!<br>
Ты не со мной, слезы льются на рейве!<br>
<br>
<span class='blue'>[Бридж: Кирилл Трифонов]<br></span>
Ночью уснуть не могу никак<br>
И пришел я на техно, чтоб найти тебя снова тут.<br>
«Вэнсы» твои, как год назад,<br>
Но рядом «найки» уже не мои топчат знакомый мне грув.<br>
<br>
<span class='blue'>[Куплет 2: Кирилл Трифонов]<br></span>
Ты была лишь моя, лишь моя!<br>
И мы вместе мечтали купить что-то в Кузнецком мосту!<br>
Ты была лишь моя, лишь моя!<br>
Нина Кравиц играет для вас, и я слез уже не держу!<br>
<div class='refren'>Плачу навзрыд, слезы бегут по щекам<br>
И со щек кап-кап мне на новый Стонак.<br>
Я жил лишь тобой, но ты сказала: «Гудбай!»<br>
И я горько рыдаю, словно вновь закрыли Outline!</div>
<br>
<span class='blue'>[Припев х2: Кирилл Трифонов]<br></span>
Плачу на техно, я плачу на техно!<br>
Ты не со мной, слезы льются на рейве!<br>
<br>
<span class='blue'><a href='https://genius.com/Hleb-cry-on-techno-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
