<?php
$title = 'Макс Корж - Малый повзрослел 2.0 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/phay358QUE8'";
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

<span class='blue'>[Куплет 1] Л1-5м - abbcaacxc</span><br>
Ночь. <br>
Крыши частных секторов.<br>
Собаки воют со дворов.<br>
Лишь луна и звезды тлеют, тлеют в темноте.<br>
Знаешь, что? <br>
Я сёдня не вернусь домой,<br>
Я так давно того хотел.<br>
Только не волнуйся за меня -<br>
Малый повзрослел!<br>
<br>
<span class='blue'>[Припев] Л1-3мж</span><br>
Ей-ей, ей-ей!<br>
У-у!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Йоу-йоу, йоу-йоу!<br>
У-у!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Малый повзрослел!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Я иду (туда), <br>
Туда, где меня ждет любовь,<br>
А за ней пустая боль.<br>
Погрущу немного и утоплю её в темноте.<br>
И айда <br>
Там, где куча пацанов,<br>
Где признают, если смел.<br>
Батя, не волнуйся за меня!<br>
Малый повзрослел!<br>
<br>
<span class='blue'>[Припев]</span><br>
Ей-ей, ей-ей!<br>
У-у!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Йоу-йоу, йоу-йоу!<br>
У-у!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Малый повзрослел!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
И плевать, <br>
Куда ветер занесёт<br>
От болот и до вершин!<br>
Будь уверен - выживу в любой дыре<br>
А пока <br>
По двору машину не ищи.<br>
Для твоих звонков мобильный сел,<br>
Батя, просто привыкай -<br>
Малый повзрослел!<br>
<br>
<span class='blue'>[Декламация] Дк2-4цм - aaXaa aaaaa</span><br>
Красный свет,<br>
Перекресток и первый мент.<br>
Вырубай фары, петляй дворами, <br>
Вой сирен!<br>
Малый повзрослел!<br>
Шумный флэт<br>
В коридоре дикий слэм,<br>
Мусор с балкона, плакаты со стен.<br>
Охуели совсем!<br>
Малый повзрослел!<br>
<br>
<span class='blue'>[Припев]</span><br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
У-у!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Малый повзрослел!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
Ля-ля-ля, ля-ля-ля, ля-ля-ля-ля!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/m1/max-korj/6042-maks-korzh-malyy-povzroslel-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Куплеты можно трактовать и как двусложник, и как тактовик, и как
логаэд с переменной анакрузой, что логичнее, так как при таком рассмотрении
структура строф идентична.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
