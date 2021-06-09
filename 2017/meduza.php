<?php
$title = 'MATRANG - Медуза (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kacHLh3fPpg'";
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

<span class='blue'>[Куплет 1] Х4м - abab<br></span>
Мы с тобою звездопад, <br>
Два билета на паром.<br>
Танцевали до утра <br>
Под неоновым дождём.<br>
Мы меняем города, <br>
Обстоятельства на сон.<br>
Откровенная вчера - <br>
Ты сегодня мне никто.<br>
<div class='ref'>Отпечатки на руках, <br>
Заводной магнитофон.<br>
Время - тихая вода, <br>
Утекающая вон.<br>
Кто не видит в небе знак -<br>
Потеряет восемь ног.<br>
Снова в мире пустота, <br>
А в медузе осьминог.</div>
<br>
<span class='blue'>[Припев х2] Ан12м - aaaa<br></span>
Медуза! <br>
Медуза, медуза!<br>
Мы друзья!<br>
Медуза, медуза!<br>
<br>
<span class='blue'>[Куплет 2] <br></span>
Не по доброму смеясь, <br>
Нажимаю на курок. <br>
Убиваю твою грязь, <br>
Она падает на пол. <br>
Остаётся чистота - <br>
Твоё белое нутро, <br>
И бездонные глаза - <br>
Ты актриса моих снов. <br>
<div class='ref'>Ты приехала на час, <br>
  Но останешься со мной. <br>
Почитай мне до утра,<br>
 Обжигай меня всю ночь. <br>
Не получится унять <br>
Настоящую любовь! </div>
 <br>
<span class='blue'>[Проигрыш]<br></span>
(Медуза! Медуза!) <br>
<span class='blue'>[Проигрыш]<br></span>
(Медуза! Медуза!) <br>
 <br>
 <span class='blue'>[Припев х4] <br></span>
 Медуза! <br>
 Медуза, медуза!<br>
 Мы друзья!<br>
 Медуза, медуза!<br>
 <br>
 Слова: Алан Хадзарагов<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/m/matrang/matrang-meduza.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Куплеты попадают в наиболее распространенный размер русского рэпа
Тк4ц (строка с двумя парами ударений, разделенная паузой), однако это
чистый четырехстопный хорей в духе "Ленинграда". В припеве отступление от
нормы ударения: "МедузА!"<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
