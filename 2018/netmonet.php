<?php
$title = 'Монеточка - Нет монет (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/3hJOCCXPwT8'";
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

<span class='blue'>[Припев] Х5ж - abab<br></span>
(No money!)<br>
(Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет, мон...<br>
Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет, мон...)<br>
<br>
<span class='blue'>[Куплет 1] Тк4ц3мж, Тк4ц2м/ж - aBaB, aa, AA<br></span>
Где-то модели щебечут на верхнем этаже<br>
Гламурного лофта, там чётко!<br>
А я читаю свой рэпчик подружкам в гараже,<br>
Татушки за школой бью, за сотку.<br>
<div class='refren'>
Я ненавижу ваш Cubase — даже комп висит.<br>
Как же мне стать эмси?<br>
А тёлкам нравятся биты у Депо Бульвара,<br>
А не гитара!</div>
Вот был бы диджей — мне бы все целовали ноги,<br>
И, если б не проги,<br>
Ворваться в рэп бы из глуши, но где шиши?<br>
Мама не разрешит…<br>
<br>
<span class='blue'>[Бридж] Дк4цм - aabb<br></span>
На дороге жизни не очень мне:<br>
Раздаю листовки на обочине!<br>
Кондуктор поймает на полпути.<br>
Кондуктор, прости! Галина, прости!<br>
<br>
<span class='blue'>[Припев]<br></span>
Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет нет!<br>
<br>
<span class='blue'>[Куплет 2] Х4ж - ABAB, AABB<br></span>
Вылез дядя, кипишуя,<br>
Проложил мне вверх дорогу.<br>
Теперь за респекты не пишу я: <span class='blue'>(Строка Дк4ж)<br></span>
У меня и так их много!<br>
<div class='refren'>
Эй, балконы! Я не слышу!<br>
Эй, партеры! Руки выше!<br>
Стань адептом нашей веры!<br>
Эй, балконы, эй, партеры!</div>
<span class='blue'>Я5м? - abab<br></span>
Это не пьяный звукореж запел<br>
В разгаре жаркой дискотеки, нет<br>
Спроси в комментах: «Что за беспредел?»<br>
Это реально мой новый трек!<br>
<div class='refren'>
<span class='blue'>Х5жм - abab<br></span>
У тебя не заложило ухо,<br>
И диджей, как может, крутит звук.<br>
Он реально сделан очень сухо!<br>
Он реально про каких-то сук!</div>
<span class='blue'>Тк4цм? - aXxa<br></span>
Твое тело [неразб.] твоей сети,<br>
Нам необходим провайдер, <span class='blue'>(Строка Тк3ж)<br></span>
Наш авиалайнер набирает высоту,<br>
Выпьем за тех, кто сегодня с нами летит.<br>
<div class='refren'>
<span class='blue'>Я5м? - aaaX<br></span>
Я к двадцати успела подрасти,<br>
Читаю рэп о творческом пути.<br>
Надеюсь, официант меня простит.<br>
Он просит мелочи сгрести, но…</div>
<br>
<span class='blue'>[Припев]<br></span>
Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет нет!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Где-то модели стрекочут — они всегда в слоу-мо.<br>
Лежу, на них ноги закинув.<br>
Но подожди пару строчек — я упаду на дно<br>
В традициях строгих рэп-синглов.<br>
<div class='refren'>
Звёздным блеском я сияю, <br>
Свет пульсирует под ритмы.<br>
На мой сольник не пускают<br>
Без очков солнцезащитных.</div>
Там в гримёрку хейтер злобный <br>
Зеркала пронёс за взятку.<br>
В них трагично отразившись, <br>
Я сгорела без остатка.<br>
<br>
<span class='blue'>[Бридж]<br></span>
С небес допеваю последний хит,<br>
Я новый Лил Пип, интернет кипит!<br>
Фанат опоздавший спросил билет —<br>
«Простите, но нет артисток таких»!<br>
<br>
<span class='blue'>[Припев]<br></span>
(Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет нет!<br>
Нет монет, монет, монет, монет нет!)<br>
<br>
<span class='blue'><a href='https://genius.com/Monetochka-no-money-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
