<?php
$title = 'Каста - На том конце (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/4gb0gu8vVHo'";
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

<span class='i'>- Эй! Все кайфанули ваще!<br>
Вау! Все кайфанули ваще!<br>
Эй! Все кайфанули ваще!<br>
[Марина Кравец] Группа «Каста» живьем у нас с треком «На том конце». Оставайтесь с нами! Мы скоро к вам вернемся!
Парни, это офигенный трек! Где клип?<br>
- А, ну, чо? Нормальный трек, зачем? <br>
[Марина Кравец] Друзья, мы обращаемся к вам! Если у вас есть хорошие идеи, пишите и звоните
напрямую группе «Каста». А мы скоро вернемся!<br>
- Comedy Radio!<br>
<br>
[Шнуров] Пацаны, привет!<br>
- А, здорОво!<br>
[Шнуров] Я с бодунища, тут слушаю радио. Что у вас за проблемы с клипом?<br>
- Да не, нормально всё!<br>
[Шнуров] Чо вы там мудрите? Возьмите и снимите телку!<br>
- И чо?<br>
[Шнуров] И всё!<br></span>
<br>
<span class='blue'>[Куплет 1] Тк2-6цм, Тк2-6цж - aaaa, AAAA<br></span>
Эй, ты, на том конце!<br>
Я в прицел вижу тебя, и ты - моя цель!<br>
Пока цел, сделай-ка улыбку на лице!<br>
Рэп-концерт - это ж позитива вагон, не прицеп!<br>
<div class='refren'>
Эй, ты, на том конце!<br>
Чё ты делаешь на том конце? Выходи в центр.<br>
Я по сцене ношусь, словно с шилом в заднице.<br>
А тебя, будто ты Цербер, кто-то посадил на цепь.</div>
<br>
<span class='i'>- А, здорОво!<br>
[Джиган] Пацаны, а чо вы придумываете? Все давно уже придумано!
Возьмите и снимите клип, как у Дрейка!<br></span>
<br>
Эй, ты, на том конце!<br>
Чё ты такой вялый? Будто баба на тонком конце!<br>
Так же и в школу ходил и в лицей?<br>
Чисто постоять, покурить на крыльце? (А?)<br>

<div class='refren'>Эй, ты, на том конце!<br>
Те, кто хотят на морозе быть, сейчас на улице.<br>
Ну ты прям русский офицер:<br>
Выстоял целый концерт в плену у гестаповцев!<br>
<br>
<span class='blue'>[Припев]<br></span>
А вообще...<br>
<br>
<span class='i'>- О, о, смотри, кто тут!<br>
[Kyivstoner] Йо! ЗдорОво, пацаны! Шо тут у вас?<br>
- Прикол!<br>
[Kyivstoner] Это не батает, это... ну, это не то пальто!<br>
- Чо ты говоришь?<br>
[Kyivstoner] Пацанам нужна классика! Вот, исполняйте, как вы раньше исполняли!
Вот то будет ветер, а это - ну, это шо попало!<br>
- Да!<br></span>
<br>
<span class='blue'>[Припев] Л34цжм - AAAAaaaacc<br></span>
А вообще, все кайфанули (кайфанули)!<br>
Ваще, все как рванули (как рванули)!<br>
Вообще все кайфанули (кайфанули)!<br>
Ваще, все как рванули (как рванули)!<br>
<div class='refren'>
Все кайфанули вообще.<br>
Все, как рванули, ваще (ваще)<br>
Все кайфанули вообще.<br>
Все, как рванули, ваще (ваще)</div>

В конце-концов, это концерт отцов!<br>
<br>
<span class='i'>[Ёлка] Кастушка, привет, родненькие!<br>
- Привет!<br>
[Ёлка] В клипе излучайте добро!<br>
- Ага!<br>
[Ёлка] Посылайте людям лучики света и тепла!<br>
- Ладно! Попробуем! Давай!<br></span>
<br>
Ваще (ваще)!<br>
В конце-концов, это концерт отцов!<br>
В конце-концов, это концерт отцов!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Эй, ты, на сцене!<br>
Ты качать сегодня будешь, или ты на дзене?<br>
Думаешь, ты бестселлер, бесценен по сей день?<br>
Но ты просто чувак из двери соседней!<br>
<div class='refren'>
Эй, ты, на сцене!<br>
Это не прет и не долбит, нет сотрясений!<br>
Что не прыгаешь в толпу, как в бассейн?<br>
Из опасений, что разденем, или что пробьешь цЕмент?</div>

Эй, ты, на сцене!<br>
Этот тур весенний, но как прошлый, осенний.<br>
В тот раз я был у сцены. Сейчас в конце я.<br>
Нет изменений. Ухудшилась лишь точка зрения.<br>
<div class='refren'>Эй, ты, на сцене!<br>
Я иду делать общую фотку. На, селфни!<br>
Ты кричал: «Будем вместе пить водку, нацедим!»<br>
Слезай, тут бар целый. Мы б за столиком сели!</div>
<br>
<span class='blue'>[Припев]<br></span>
А вообще, все кайфанули (кайфанули)!<br>
Ваще, все как рванули (как рванули)!<br>
Вообще все кайфанули (кайфанули)!<br>
Ваще, все как рванули (как рванули)!<br>
<div class='refren'>
  Все кайфанули вообще.<br>
  Все, как рванули, ваще (ваще)<br>
  Все кайфанули вообще.<br>
  Все, как рванули, ваще (ваще)</div>

В конце-концов, это концерт отцов!<br>
В конце-концов, это концерт отцов!<br>
<br>
<span class='i'>- ЗдорОво!<br>
  [Птаха] Йо, парни, привет! Сейчас котируется только рэп [неразб.] баттл.
  Вам надо вызвать друг друга на баттл и побаттлиться!<br>
  - Хе-хе!<br></span>
<br>
В конце-концов, это концерт отцов!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Эй, организатор!<br>
Ты читал наш райдер или просто полистал так?<br>
Где четырнадцать хурмы, где фейхоа десяток?<br>
Где триста граммов бастурмы? Всё это - косяк твой!<br>
<div class='refren'>
Это косяк мой? Эй, турдиректор!<br>
Если на тарелке нету, значит уже съето!<br>
Ты взгляни на смету. Тут вся хурма в аренду.<br>
Я, как затраты все подбил, знаешь, охерел как?</div>

Охерел, да? Ты, организатор?<br>
Подписался, выполняй. Чё ты едешь задом?<br>
Чё это за запах? Чьи чулки висят там?<br>
Здесь артисты из Москвы, а не поросята!<br>
<div class='refren'>
Не поросята? Эй, турдиректор!<br>
Я смотрю на твою группу и не пойму, гдЕ кто.<br>
Висит реклама в городе, фото в газетах.<br>
Но на афишах они молоды, а твоим сколько лет-то?<br>
По сорокету?</div>

Слышь, организатор!<br>
Это сказал зря ты, лысый хрен пузатый!<br>
Ведь мои ребята, дядя, за собой следят-то.<br>
И я косметолог им, я диетолог, да я мать им!<br>
<div class='refren'>
Ах, ты мать им! Слышь, мать их директор!<br>
Разгромили свои номера эти легенды.<br>
Сперли постельное белье интеллигентно.<br>
Рэперы твои устроили в отеле гетто.<br>
<br>
<span class='blue'>[Припев]<br></span>
А вообще, все кайфанули (кайфанули)!<br>
Ваще, все как рванули (как рванули)!<br>
Вообще все кайфанули (кайфанули)!<br>
Ваще, все как рванули (как рванули)!<br>
<br>
<span class='i'>[Наташ Краснова] Э, привет, мальчули! У вас щас адна проблемс -
  в том, что вы ка бы не красивы-е! А в клипе надо быть очень сильно до фига красивым! У-у!<br></span>
<br>
<div class='refren'>
  Все кайфанули вообще.<br>
  Все, как рванули, ваще (ваще)<br>
  Все кайфанули вообще.<br>
  Все, как рванули, ваще (ваще)</div>
  Все кайфанули вообще.<br>
  Все, как рванули, ваще (ваще)<br>
  Все кайфанули вообще.<br>
  Все, как рванули, ваще (ваще)<br>
Ваще!<br>
<br>
<span class='i'>-  Ваще!<br>
[Марина Кравец] Группа «Каста» живьем у нас с треком «На том конце». Оставайтесь с нами! мы скоро к вам вернемся!
Парни, это офигенный трек! Где клип?<br>
- Просто нет хороших идей? Ну да, нам для клира нужна хорошая идея.<br>
- Память у рыб - три секунды!<br></span>
<br>
<span class='blue'><a href='https://text-lyrics.ru/k1/kasta/7571-kasta-na-tom-konce-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>