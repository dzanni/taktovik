<?php
$title = 'Ленинград - Не Париж (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/b2RHgyH-Nxo'";
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

<span class='blue'>[Куплет 1] Х5ж - ABAB</span><br>
Воспарила, Галя, я над бытом,<br>
Крыльями маша самозабвенно.<br>
<br>
<span class='i'>- Юля, возьмешь? У меня руки заняты!<br></span>
<br>
В полугороде убогом и забытом<br>
Днем с огнем не сыщешь джентельмена!<br>
<br>
<span class='blue'>[Переход] Я334м - aaa</span><br>
О, господи, прости! <br>
Но в нашей области<br>
Мне личностно не вырасти!<br>
<br>
<span class='blue'>[Припев 1] Х5мж - aaXa</span><br>
Верно га-а-а-воришь, Мариш!<br>
Наша жо-а-апа — не Париж!<br>
Хлопай кры-ы-ыльями — не хлопай: <br>
Шиш над жо-а-а-пой воспаришь!<br>
<br>
<span class='blue'>[Припев 2] Х3жм? - AbAbCCCC</span><br>
Но я скажу по-женски:<br>
Мы ж не молодежь!<br>
Пизже, чем в Ижевске<br>
Мужа не найдешь!<br>
Что ни говори же, <br>
Наши мужики же<br>
Пизже, чем в Париже,<br>
Чем в Париже пизже!<br>
<br>
<span class='i'>- Так называемый уровень астероидной опасности превысил норму в восемь раз.
 Одно из небесных тел уже на рекордно малом расстоянии от Земли...<br>
- Юлька, слышь чего! Опять перед выборами пугают! Метеорит у них летит к нам!<br>
- … мартовского феномена... НЛО... <br>
- Да один хер Путин будет!<br>
- ...газообразный хуелит со...<br>
- Сука! О, господи!<br>
- Ну чо, кастинг имени Вайнштейна провел вчера? Оскара ей вручил вчера? Разошлись?<br>
- Ну а хули ты хотел — Восьмое марта!<br>
- ЗдорОво!<br>
- ЗдорОво, Серега!<br>
- Про метеорит-то слышали, а? Прилетит к нам э... в марте, вот, в двадцатых числах.
 А может, и раньше!<br></span>
<br>
<span class='blue'>[Куплет 2]</span><br>
Мало, Галя, нам адреналина,<br>
Не летит к нам принц, или не едет!<br>
Половину мне налей, Галина!<br>
Мы же леди, Галя, мы ж, Галя, леди! <span class='blue'>(отклонение в Дк5ж)</span><br>
<br>
<span class='blue'>[Переход]</span><br>
О, господи, прости! <br>
Но в нашей области<br>
Мне личностно не вырасти!<br>
<br>
<span class='blue'>[Припев 1]</span><br>
Верно га-а-а-воришь, Мариш!<br>
Наша жо-а-апа — не Париж!<br>
Хлопай кры-ы-ыльями — не хлопай: <br>
Шиш над жо-а-а-пой воспаришь!<br>
<br>
<span class='blue'>[Припев 2]</span><br>
Но я скажу по-женски:<br>
Мы ж не молодежь!<br>
Пизже, чем в Ижевске,<br>
Мужа не найдешь!<br>
Что ни говори же, <br>
Наши мужики же<br>
Пизже, чем в Париже,<br>
Чем в Париже пизже!<br>
<br>
<span class='blue'>[Вставка] Х4ж - AABB</span><br>
Ну давай-ка в русском стиле!<br>
Хули, бабы, загрустили!<br>
Есть мужик и чарка водки - <br>
Мужика бы [неразб.]<br>
Ну давай-ка в русском стиле!<br>
Хули, бабы, загрустили!<br>
Есть мужик и чарка водки - <br>
Мужика бы [неразб.]<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
Вспоминаю я о прошлом лете, <br>
Помнишь, бегали за водкой к Жанке?<br>
Пролететь бы нам в кабриолете! <br>
Мы ж в душе, Галина, парижанки!<br>
<br>
<span class='blue'>[Переход]</span><br>
О, господи, прости!<br>
 Но в нашей области<br>
Мне личностно не вырасти!<br>
<br>
<span class='blue'>[Припев 1]</span><br>
Верно га-а-а-воришь, Мариш!<br>
Наша жо-а-апа — не Париж!<br>
Хлопай кры-ы-ыльями — не хлопай: <br>
Шиш над жо-а-а-пой воспаришь!<br>
<br>
<span class='blue'>[Припев 2]</span><br>
Но я скажу по-женски:<br>
Мы ж не молодежь!<br>
Пизже, чем в Ижевске,<br>
Мужа не найдешь!<br>
Что ни говори же, <br>
Наши мужики же<br>
Пизже, чем в Париже,<br>
Чем в Париже пизже!<br>
<br>
(Не Париж!)<br>
Пизже, чем в Париже,<br>
Чем в Париже пизже!<br>
(Не Париж!)<br>
Пизже, чем в Париже,<br>
Чем в Париже пизже!<br>
(Не Париж!)<br>
Пизже, чем в Париже,<br>
Чем в Париже пизже!<br>
(Не Париж!)<br>
Пизже, чем в Париже,<br>
Чем в Париже пизже!<br>
(Не Париж!)<br>
<br>
<span class='i'>- Ооооо!<br>
- А я... а я посуду помыл!<br>
- Ты мой герой!<br></span>
<br>
<span class='blue'>[Песня в титрах:]<br></span>
<br>
<span class='blue'>[Куплет 1] Тк4цж - ABAB</span><br>
Воспарила, Галя, я над бытом,<br>
Крыльями маша сама-сама-самозабвенно!<br>
В нашем городе убогом и забытом<br>
Днем с огнем не сыщешь, ау!, джентельмена!<br>
<br>
<span class='blue'>[Куплет 1]</span><br>
Мало, Галя, нам адреналина,<br>
Не летит к нам принц с тобой, или не едет!<br>
Половину мне налей, давай, давай, Галина!<br>
Мы же леди, Галя, Галя, ну мы ж, блядь, Галя, леди!<br>
<br>
<span class='blue'>[Припев 1]</span><br>
Верно говоришь, Мариш!<br>
Наша жопа — не Париж!<br>
Хлопай крыльями — не хлопай: <br>
Шиш над жопой воспаришь!<br>
Не Париж!<br>
Не Париж!<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
Вспоминаю я о прошлом лете, <br>
Помнишь, бегали за водкой к Жанке?<br>
(За водкой к Жанке!)<br>
Мне лететь бы, блядь, в ночном кабриолете, <br>
Мы ж в душе, Галина, точно, точно парижанки!<br>

<br>
<span class='blue'>Источник: расшифровка фонограммы клипа</span><br>
<br>
<br>
N.B. Куплеты в первой версии песни - пятистопный хорей,
при повторе в титрах они акцентуированы в 4-стопный цезурированный тактовик.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
