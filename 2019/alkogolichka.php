<?php
$title = 'Артур Пирожков - Алкоголичка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/47JI4G-qYmc'";
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
<span class='i'>[Фонограмма] Зацепила меня, ослепила меня!<br>
[Артур Пирожков] И всё-таки, это лучшее, что я слышал за последние тридцать лет!<br>
[Первая чиксуля] Хайповый припевчик!<br>
[Вторая чиксуля] Клёвая круть!<br>
[Игорь] Ага! нарядное музло! Ха-ха!<br>
[Артур Пирожков] Опа! А это чо за олигархи подкатили на машине времени?<br>
[Обе чиксули] Ха-ха-ха-ха-ха!<br>
[Артур Пирожков] Не по адресу тормознулись, господа? Свалка дальше - метров триста!<br>
[Первый гопник] Я прошу прощения, но мы прибыли в правильное место назначения!<br>
[Второй гопник] Это наша локация, ошибка исключена!<br>
[Артур Пирожков] Давайте валите отсюда! Не видите что ли? Мы здесь культурно выпиваем!<br>
[Первый гопник] Ну так а мы за вами культурно допиваем!<br>
[Второй гопник] Неоспоримый факт!<br>
[Первый гопник] И, с нашей точки зрения, коллеги, вы немного задержались!<br>
[Артур Пирожков] Понятно!.. Игорь, а ну-ка убери этих покемонов с нашей территории!<br>
[Второй гопник] Теперь ты попробуй!<br>
[Гопница] А может, договоримся?<br>
[Артур Пирожков] А может, и договоримся?.. О! Батл!<br>
[Гопница] В смысле "ботл"?<br>
[Артур Пирожков] В смысле "батл"!<br>
[Гопница] Ну, батл - так батл!<br>
[Артур Пирожков] Дэнс-батл.<br>
[Гопница] Только музыка наша!<br>
[Артур Пирожков] Хорошо. Но пою я!<br>
</span>
<br>

<span class='blue'>[Куплет 1]  Тр1-3д/ - A'A'A'A'<br></span>
Ты вся упакована (е!) <br>
Вся нашпигована (да!) <br>
В общем, ты вся очарована,<br>
Околдована (уфф!) <br>
<div class='refren'>
<span class='blue'>Л3м/м - aabb</span><br>
Я нашей встрече рад (ай) <br>
И знаю весь расклад (ай) <br>
Только один пустяк: <br>
Что-то с тобой не так (ой) </div>
 <br>
<span class='blue'>[Припев] Л34цж/? - A'AAA A'AAA<br></span>
Несмотря на милое личико - <br>
Алкоголичка, алкоголичка!<br>
Счастье прогорает, как спичка - <br>
Алкоголичка, алкоголичка!<br>
<div class='refren'>
Несмотря на милое личико - <br>
Алкоголичка, алкоголичка!<br>
Всё, перевернулась страничка. <br>
Пока-пока, алкоголичка!</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Хочешь, пойдём ко мне (е!)<br>
Такой я один в стране (да!)<br>
Будет всё, как во сне - <br>
Просто доверься мне (ммм!)<br>
<div class='refren'>Я пред тобой стою (ай)<br>
И для тебя пою (ай)<br>
Но есть один пустяк: <br>
Что-то с тобой не так (ой)!</div>
<br>
<span class='blue'>[Припев] <br></span>
Несмотря на милое личико - <br>
Алкоголичка, алкоголичка!<br>
Счастье прогорает, как спичка - <br>
Алкоголичка, алкоголичка!<br>
<div class='refren'>Несмотря на милое личико - <br>
Алкоголичка, алкоголичка!<br>
Всё, перевернулась страничка. <br>
Пока-пока, алкоголичка!</div>
<br>
<span class='blue'>[Переход, бэк]<br></span>
Алкоголичка, алкоголичка!<br>
Алкоголичка, алкоголичка!<br>
 <br>
 <span class='blue'>[Припев] <br></span>
 Несмотря на милое личико - <br>
 Алкоголичка, алкоголичка!<br>
 Счастье прогорает, как спичка - <br>
 Алкоголичка, алкоголичка!<br>
 <div class='refren'>Несмотря на милое личико - <br>
 Алкоголичка, алкоголичка!<br>
 Всё, перевернулась страничка. <br>
 Пока-пока, алкоголичка!</div>
 <br>
<span class='blue'><a href='https://www.gl5.ru/artur-pirozhkov-alkogolichka.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
