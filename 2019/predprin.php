<?php
$title = 'Ида Галич - Предприниматель (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/2nep3kv6OFM'";
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

<span class='i'>[Владелец кафе] Дамы и господа! На сцене нашего ресторана "Изумрудная ива" - обворожительная,
неподражаемая и прекрасная Инесса Могилева!<br>
[Леша] Ладно, братуха. Все, давай!<br>
[Владелец кафе] Инесса Могилева!.. Сука... Слышь, крыса! Твой выход!<br>
[Инесса] Отвали, карлик! Видишь, я занята!<br>
[Владелец кафе] На сцену быстро! В зале, знаешь, какие люди сидят?! Они ждать не будут!<br>
[Инесса] Слышь, урод! Вот я стану звездой, будешь мне ноги целовать!.. Максим, фанеру!<br>
</span>
<br>
<span class='blue'>[Куплет 1] Тк34цм/ж - aa, AA<br></span>
Ты особенный тип мужчин,<br>
У которых всегда сотни причин,<br>
Чтобы прыгать со встреч на встречи.<br>
Ну, а толку то? Похвастаться нечем!<br>
<br>
<span class='i'>
[Инесса] Чо надо?<br>
[Леша] Так, а как, там, говоришь, тебя звать?<br>
[Инесса] Инесса Могилева.<br>
[Леша] Не, будешь Инесса Паради!<br>
[Инесса] Зачет!<br>
[Леша] А то!<br>
<br>
</span>
А ты все завтраками кормишь-кормишь<br>
И даже, может быть, ты нам устроишь<br>
Путевку на деревню к бабушке,<br>
Лицо, шашлык на реке.<br>
<br>
<span class='blue'>[Припев] Дк4ц3жм? - AAAbAAAb<br></span>
Предприниматель, предприниматель,<br>
Мы будем вместе с тобой обязательно!<br>
Только начни, мой предприниматель,<br>
Что-то предпринимать!<br>
Предприниматель, предприниматель,<br>
Ты можешь красиво порассказать мне<br>
О том, что все будет у нас замечательно,<br>
Только я устала ждать!<br>
<br>
<span class='blue'>[Куплет 2] Тк34цжм - AbAb<br></span>
Что тебя ни спроси - ты все знаешь!<br>
Черт возьми, бизнесмен, как ни посмотри!<br>
И торгуешься четко, и убеждаешь,<br>
Кто сегодня ведро будет выносить.<br>
А мне что? Я всегда тебе рада,<br>
Я могу обойтись без машин и шуб.<br>
Знаешь, девочкам много не надо,<br>
Просто, чтоб красиво вешал лапшу!<br>
<br>
<span class='i'>
[Ведущая] С вами были "Песни года-96"!<br>
[Ведущий] До новых встреч, дорогие друзья!<br>
[Инесса] Леша, блин, ну... ну ты же обещал!<br>
[Леша] Малыш, щас разберемся!<br>
<br>
[Ведущая] Ах да, встречайте! Несравненная Инесса Паради с песней "Предприниматель"!<br>
[Ведущий] Слова - Анна Бостон, музыка - Анна Бостон и Андрей Черный.<br>
[Инесса] Вообще-то я тоже помогала!.. Максим, фанеру!<br>
</span>
<br>
<span class='blue'>[Припев]<br></span>
Предприниматель, предприниматель,<br>
Мы будем вместе с тобой обязательно!<br>
Только начни, мой предприниматель,<br>
Что-то предпринимать!<br>
<span class='blue'>Дк4цм/ - aaaa<br></span>
Май бизнесмэн, май бизнесмэн,<br>
Ай юр вуман, энд ю ар май мэн,<br>
Ви а тугезер энд ай хэв плэн<br>
То би юр Барби, энд ю ар май Кен.<br>
<br>
<span class='i'>
[Ведущая Евровидения] And six points from Yugoslavia go to Russia!<br>
[Инесса] Леша, какие на хрен сикс пойнтс?<br>
[Леша] Ща разберемся!<br>
[Инесса] Чо пялишься?<br>
<br>
[Диктор новостей] Сегодня правительством было наложено эмбарго на товары
из Югославии. Решение было оставлено без каких-либо комментариев. К другим новостям.
Недавно избранный мэр Вечногорска Золотарев Алексей Владимирович открыл городскую
больницу после капитального ремонта. <br>
</span>
<br>
Предприниматель, предприниматель,<br>
Ты можешь красиво порассказать мне<br>
О том, что все будет у нас замечательно,<br>
Только я устала ждать!<br>
<br>
<span class='i'>
[Омоновцы] Работает ОМОН! (неразб.)<br>
[Инесса] Леша, Леша, а я! Как мне быть!<br>
[Леша] Как те быть? Носки на передачку шить!<br>
[Инесса] Леша! Да, блин, отвали ты, урод!<br>
</span>
<br>
<span class='blue'>[Припев]<br></span>
Предприниматель, предприниматель,<br>
Мы будем вместе с тобой обязательно!<br>
Только начни, мой предприниматель,<br>
Что-то предпринимать!<br>
Предприниматель, предприниматель,<br>
Ты можешь красиво порассказать мне<br>
О том, что все будет у нас замечательно,<br>
Только я устала ждать!<br>
<br>
<span class='i'>
[Инесса] Привет!<br>
[Владелец кафе] Чо?<br>
[Инесса] В нашу "Изумрудную иву" живая музыка не нужна?<br>
[Владелец кафе] Живая? У нас щас дискотека! Сиде ченджер, компакт-диск! Пошла отсюда!<br>
[Инесса] Карлик!<br>
[Владелец кафе] С... Ничо не карлик!<br>
[Инесса] Ты мне ноги целовал!<br>
[Владелец кафе] Ничо не целовал! Через сапоги не считается!<br>
</span>
<br>
<span class='blue'>Источник: расшифровка фонограммы клипа<br></span>
<br>
<br>
N.B. Рифма ж=д - вернее, слоговой "ль" (предпринимАтель - обязАтельно).
Пародия на эстраду конца 1980-х и 1990-х. прежде всего - на группу "Комбинация"
и ее песни "Бухгалтер" и "Америкэн бой".<br>
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
