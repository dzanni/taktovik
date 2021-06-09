<?php
$title = 'Ольга Бузова & Настя Кудри - Нам будет жарко (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kmgLnaAC7xU'";
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

<span class='blue'>[Куплет 1] Д3жм, Дв32жм - AbAb<br></span>
Хочешь - останься сегодня, <br>
Хочешь - останься со мной. <br>
Мы не уснем этой ночью, <br>
Мы полетаем с тобой. <br>
<div class='refren'>Ты подойди поближе, <br>
Будь смелей, <br>
Идём туда, где тише, <br>
Где нет людей... </div>
<br>
<span class='blue'>[Переход] Х3жм - AbAbAbb<br></span>
Это не опасно, <br>
Не сходи с ума. <br>
Мы взлетаем так, что <br>
Кругом голова. <br>
Не узнает папа, <br>
Где я до утра. <br>
Точно знаю я: <br>
<br>
<span class='blue'>[Припев] Л23жм - AAAx<br></span>
Нам будет жарко, <br>
Нам будет жарко, <br>
Да-да-да, жарко <br>
До утра, до утра, до утра. <br>
<br>
<span class='blue'>[Куплет 1] Д3м?, Дв32жм - AbAb<br></span>
Я растворяюсь в тебе, <br>
Я растворяюсь, как дым. <br>
Я не хочу слышать «нет». <br>
Ты - мой адреналин. <br>
<div class='refren'>Давай ходить по краю, <br>
Будь смелей. <br>
Голову теряя, <br>
Люби меня сильней. </div>
<br>
<span class='blue'>[Переход]<br></span>
Это не опасно, <br>
Не сходи с ума. <br>
Мы взлетаем так, что <br>
кругом голова. <br>
Не узнает папа, <br>
Где я до утра. <br>
Точно знаю я: <br>
<br>
<span class='blue'>[Припев]<br></span>
Нам будет жарко, <br>
Нам будет жарко, <br>
Да-да-да, жарко <br>
До утра, до утра, до утра. <br>
<br>
Музыка: Данил Воднев<br>
Слова: Настя Кудри и Ольга Бузова<br>
<br>
<span class='blue'>Источник: официальный текст под клипом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
