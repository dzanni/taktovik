<?php
$title = 'Мальбэк ft. Сюзанна - Гипнозы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/2l1MkA5dSmo'";
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

<span class='i'>
- Я здесь для того, чтобы помогать людям чувствовать. Я это давно поняла.
И это не то, зачем обычно люди здесь появляются. Понимаешь?<br>
- Да.<br>
- Вот. Поэтому я нонсенс, я нонсенс, я нонсенс. Я нонсенс - я гиперсенс!<br>
</span>
<br>
Я люблю тебя!<br>
<br>
<span class='blue'>[Куплет 1: Мальбэк] Х4м? - aaaa</span><br>
Сердце закричит <span class='blue'>(Строка Х3м)</span><br>
Без технических причин.<br>
Слишком пьяный я в ночи, <br>
Нам не подобрать ключи.<br>
<div class='refren'>
И никто не виноват,<br>
Друг для друга мы звучим.<br>
Ты в объятья заключи<br>
И в моей груди стучи.</div>
<span class='blue'>Тк4цд - A’A’A’A’</span><br>
Холодными ладонями мир, в котором тонем мы,<br>
Неизвестной глубины повсюду пробоины.<br>
Холодными ладонями мир, в котором тонем мы,<br>
Неизвестной глубины повсюду пробоины.<br>
<br>
<span class='blue'>[Припев х2: Сюзанна] Л23жм - AbAbAA<br></span>
Дай мне собраться, <br>
В смысле, я не могу.<br>
Ритмы пульсаций, <br>
Я для тебя в цвету.<br>
Сон, просыпаться. <br>
Ритмы пульсаций.<br>
<br>
<span class='blue'>[Куплет 1: Мальбэк]</span><br>
Сколько нам вдвоем дышать, (Бесконечно!)<br>
Только нам одним решать.<br>
Мы на лезвии ножа, (Навсегда!) <br>
Слишком голая душа. <br>
<div class='refren'>
Сколько нам вдвоем дышать, (Бесконечно!) <br>
Только нам одним решать.<br>
Мы на лезвии ножа, <br>
Слишком голая душа. (Навсегда!)</div>
<br>
<span class='blue'>[Переход: Сюзанна] Ан1жм - AbAbAbAb<br></span>
Бесконечно! <br>
Навсегда!<br>
Бесконечно! <br>
Навсегда!<br>
Бесконечно! <br>
Навсегда!<br>
Бесконечно! <br>
Навсегда!<br>
<br>
<span class='blue'>[Припев х2: Сюзанна]<br></span>
Дай мне собраться, <br>
В смысле, я не могу.<br>
Ритмы пульсаций, <br>
Я для тебя в цвету.<br>
Сон, просыпаться. <br>
Ритмы пульсаций.<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/m1/maljbek/8777-maljbek-gipnozi-ft-syuzanna-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
