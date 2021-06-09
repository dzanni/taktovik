<?php
$title = 'Шарлот & MORGENSHTERN - Малышка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/jPQQBB8aB_M'";
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
<span class='blue'>[Припев, Шарлот] Л23ж/ - AAAA</span><br>
Хэй, малышка! <br>
У тебя слишком классная стрижка!<br>
Хэй, малышка! <br>
Мы стоим под дождём слишком близко!<br>
<br>
<span class='blue'>[Куплет 1, Шарлот] Тк3-5цм/ж -  aa, AA</span><br>
Я ношу очки, где нету <br>
Чёрного и белого цвета.<br>
В городе бардак, мне наплевать на это.<br>
Если с неба падает камень - <br>
Моя собака до последнего рядом.<br>
Если дома нет еды - <br>
Моя кошка чистит нычки и углы.<br>
<br>
  <span class='blue'>Тк3-5цм/ - aaaa</span><br>
  Ведь мне нету тридцати!<br>
  Я в семье всегда был самым молодым.<br>
  Ведь мне нету тридцати!<br>
  Я прихожу на концерт, пою песню своей мечты.<br>
<br>
<span class='blue'>[Припев, Шарлот]</span><br>
Хэй, малышка! <br>
У тебя слишком классная стрижка!<br>
Хэй, малышка! <br>
Мы стоим под дождём слишком близко!<br>
 <br>
<span class='blue'>[Переход, Шарлот] Л3дм? - A'bA'b</span><br>
Эй, только не выдумывай!<br>
Бери за руку подружку и беги!<br>
Эй, только не выдумывай!<br>
Не напридумывай дешёвые стихи!<br>
<br>
(Фиу! Фиу!)<br>
<br>
<span class='blue'>[Куплет 2, MORGENSHTERN] Х2-4м/ - aa...</span><br>
Это блок (блок, фиу)<br>
Money long (long, е)<br>
На мне hoe (hoe)<br>
Она дала мне dope (dope) <span class='blue'>(Строка Я3м)</span><br>
  <div class='refren'>Сука, это блок (блок)<br>
  (Йе) money long (фиу, бэ)<br>
  На мне hoe (йе)<br>
  Как-же заебло!</div>
<br>
Сука, это блок (блок, йе)<br>
На мне hoe (hoe, йе)<br>
Как ты заебла (брр)<br>
Я хочу любовь!<br>
Детка, я хочу любовь! <br>
Ты не то, <br>
Ты не то, <br>
Всё не то!<br>
Детка, я хочу домой!<br>
Детка, я хочу домой!<br>
<br>
<span class='blue'>Х4м/ - xxxx</span><br>
Прыгаю в любимый Мерс (wroom-wroom!)<br>
И я еду по Москве (йе)<br>
Чё за номер мне звонит? (прр-прр-прр-прр)<br>
Я его уже забыл (за-был)<br>
<br>
<span class='blue'>Х3344ж/ - xxxx</span><br>
Папа хочет party (пррр-пау)<br>
Папа, ну куда ты? (Хватит, стой)<br>
Сотни сук в моей кровати (фу-фу-фу-фу)<br>
Но ни с одной не буду спать я (нет) <span class='blue'>(Строка Я4ж)</span><br>
<br>
 <span class='blue'>Дв4м/ - aa...</span><br>
Детка, ты не моя boo, <br>
Я выгоню тебя к утру!<br>
А завтра новую найду (йе-э)<br>
Детка, я тебе не вру - <br>
Да, я так многим говорю.<br>
Но детка, я тебя люблю (люблю)<br>
<br>
<span class='blue'>[Припев х2, Шарлот]</span><br>
Хэй, малышка! <br>
У тебя слишком классная стрижка!<br>
Хэй, малышка! <br>
Мы стоим под дождём слишком близко!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/sh/sharlot/sharlot-morgenshtern-malishka.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
