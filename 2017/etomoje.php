<?php
$title = 'Егор Крид - Это моё (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/uBv6BtYVw50'";
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

<span class='blue'>[Интро] Х3м? - aaaaaa</span><br>
Это мое… (Хм…) <span class='blue'>(Строка Тк2м)</span><br>
Это все мое…<br>
Это Егор Крид!<br>
Это все мое!<br>
Абсолютно все!<br>
Это все мое!<br>
<div class='refren'><span class='blue'>Тк4цж -  AA</span><br>
Молоды, но дерзки и на новой моде.<br>
Я выбираю то, что мне подходит. </div>
<br>
(Йа!)<br>
<br>
<span class='blue'>[Куплет 1] Тк2-4цмж - xaxaxaXa, aa, AbAb<br></span>
Я на бите, акулы в воде.<br>
Это мое!<br>
Менталитет только вперед.<br>
Это мое!<br>
Меня везет черный гелик с тусы домой.<br>
Ведь это мое.<br>
Выложил в stories красотку в crop-top'е<br>
С хештегом #ЭТО МОЕ!<br>
<div class='refren'>
Они кричали мне «Рэп не твое»,<br>
Но я выпустил «Что они знают?» альбом!<br>
И все что они знали облом,<br>
СМИ пишет - «я рэпер», но хочешь прикол?<br>
Моя жизнь - рок-н-ролл!</div>
300 концертов, 600 перелетов<br>
В прошлом году.<br>
Forbes, хватит считать, сколько я заработал,<br>
Оставим вопросы Дудю!<br>
<br>
<span class='blue'>[Переход] Тк4цж - AABB<br></span>
Я помню универ, когда уснул за партой.<br>
Во сне я был пират, но с молодежной картой (Сбербанк).<br>
Забрал свое, как Макгрегор в боксе, славу.<br>
Не тебе меня судить, батл Окси с Славой.<br>
<br>
Это все, потому что я белый?<br>
<br>
<span class='blue'>[Припев]<br></span>
Это все мое! <br>
Абсолютно все!<br>
Это все мое!<br>
Молоды, но дерзки и на новой моде.<br>
Я выбираю…<br>
Это все мое! <br>
Абсолютно все! <br>
Это все мое!<br>
Молоды, но дерзки и на новой моде.<br>
Я выбираю...<br>
Это все мое! <br>
Абсолютно все! <br>
Это все мое!<br>
Молоды, но дерзки и на новой моде.<br>
Я выбираю то, что мне подходит.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Новый день, новый час. (Да).<br>
И не минуты не раньше.<br>
Тут и сейчас забираю шанс <br>
И примерил удачу.<br>
Мне как раз!<br>
Молоды, но дерзки – это про нас! (Ага)<br>
<div class='refren'>
  Скейтборды, лонгборды - про спорт мы.<br>
Когда ты видишь мое имя – видишь просмотры.<br>
Дневник Крида, 140 в твиттер.<br>
Мы впереди, будто врубили нитро.</div>
<br>
<span class='blue'>[Переход]<br></span>
Мы новая волна, как в треке DJ SMASH'а.<br>
Во мне много огня, как на футболке Thrasher.<br>
Ты знаешь мой LifeStyle – я на сцене свежий,<br>
С улыбкой на лице, как у Бандикута Крэша.<br>
<br>
<span class='blue'>[Припев]<br></span>
Это все мое! <br>
Абсолютно все!<br>
Это все мое!<br>
Молоды, но дерзки и на новой моде.<br>
Я выбираю…<br>
Это все мое! <br>
Абсолютно все! <br>
Это все мое!<br>
Молоды, но дерзки и на новой моде.<br>
Я выбираю...<br>
Это все мое! <br>
Абсолютно все! <br>
Это все мое!<br>
Молоды, но дерзки и на новой моде.<br>
Я выбираю то, что мне подходит.<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/k/kreed/egor-kreed-eto-moe.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
