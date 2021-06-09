<?php
$title = 'LOBODA - Новый Рим (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Rc6KG1_e33o'";
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
<span class='blue'>[Куплет 1] Я2-3д/д? - A'A'A'A'B'B'B'b</span><br>
По кромке лезвия,<br>
Я палевная бестия.<br>
Туда, где весело,<br>
Пропала б без вести!<br>
На фиолетовый, <br>
Где между силуэтов мы<br>
Уже раздетые <br>
На самом верхнем этаже.<br>
  <div class='refren'>
    <span class='blue'>Я2-3ж/ж? - AbAbСССС</span><br>
  Бокал Martini, <br>
  И он срывает skinny на мне. <span class='blue'>(Строка Л4м)</span><br>
  На эндорфине <br>
  Срывает также мой неглиже. <span class='blue'>(Строка Л4м)</span><br>
  Добавим темпа, <br>
  Фанат твоего тембра.<br>
  Вселился демон <br>
  И нимб он съел мой.</div>
<br>
<span class='blue'>[Припев] Тк2мд - aB'aB'</span><br>
И мне плевать, плевать <br>
На твои желания!<br>
Это игра, игра <br>
На выживание!<br>
  <div class='refren'>
  <span class='blue'>Тк2мм - abab</span><br>
  А я сейчас с другим - <br>
  И нам так хорошо!<br>
  Мы строим Новый Рим <br>
  Тебе назло! (Уху!)</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Мелькали молнии. <br>
Мы на балконе голые.<br>
Дым по квартире <br>
Стелился волнами.<br>
Я на беззвучном,<br>
Редкая сучка.<br>
За сто пропущенных - <br>
И мне не стыдно нихуя!<br>
  <div class='refren'>Ты любишь Первый, <br>
  А я люблю картины (Хо-хо!)<br>
  Какой ты скучный <br>
  И не спортивный.<br>
  Шаткие нервы <br>
  У тебя, наверное.<br>
  Мы строим Третий, <br>
  А ты в резерве.</div>
<br>
Кхм-кхм...<br>
<br>
<span class='blue'>[Припев]</span><br>
И мне плевать, плевать <br>
На твои желания!<br>
Это игра, игра <br>
На выживание!<br>
  <div class='refren'>А я сейчас с другим - <br>
  И нам так хорошо!<br>
  Мы строим Новый Рим <br>
  Тебе назло! (Уху!)</div>
<br>
Кхм-кхм...<br>
<br>
<span class='blue'>[Скит] Дк2мж - aaaBaxaB</span><br>
Listen my flow!<br>
Выше музло!<br>
Малышка Lo - <br>
Синоним страсти.<br>
Сучки in a row <br>
Bite'ят мой style.<br>
Даже J. Lo <br>
Меня копипастит.<br>
  <div class='refren'>
  <span class='blue'>Дк24цмж? - aaBaaB</span><br>
  Под каблуком <br>
  Думай о том,<br>
  Что цвет моей подошвы — красный.<br>
  Самый топ, кипяток, <br>
  Dirty talk, шок.<br>
  Твоя Mutter говорит — я опасна!</div>
Всё на Zero! <br>
Ты — как Нерон,<br>
Только поджигаешь всё на свете.<br>
Listen my flow!<br>
Малышка Lo<br>
Летит в Новый Рим на private jet'е.<br>
  <div class='refren'>
  <span class='blue'>Тк2джмж - A'A'A'BccВ</span><br>
  Чтобы со мной ни было - <br>
  Всегда под объективами<br>
  В Дубаи, на Мальдивах я... <br>
  Стоп, хватит!<br>
  Выживешь ты или я -<br>
  Это игра,<br>
  Будь со мной аккуратен!</div>
<br>
  <span class='blue'>[Припев]</span><br>
  И мне плевать, плевать <br>
  На твои желания!<br>
  Это игра, игра <br>
  На выживание!<br>
    <div class='refren'>А я сейчас с другим - <br>
    И нам так хорошо!<br>
    Мы строим Новый Рим <br>
    Тебе назло! (Уху!)</div>
 <br>
Ха-ха! <br>
 <br>
 <span class='blue'><a href='https://www.gl5.ru/loboda-novij-rim.html'
   target='_blank'>Источник</a></span><br>
 <br>
P.S. Строки "На самом верхнем этаже" и "И мне не стыдно нихуя!"
(Я4м) спеты как Я4м, но зарифмваны с Я3д, то есть с намеком, что последним ударным слогом
можно считать третий с конца: "На самом верхнем Этаже" и "И мне не стыдно нИхуя".<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
