<?php
$title = 'Ида Галич & Хлеб - Капельки (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/zF3PSUfRQU0'";
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

<span class='i'>
[Хор] А-аве Мари-и-я!<br>
[Ведущая] Давайте проводим бурными аплодисментами детский церковный хор "Росточки"!<br>
<br>
Пусть в этот праздник заводной<br>
Грустить и унывать не сможем,<br>
А всей компанией шальной<br>
Отметм наш День молодежи!<br>
<br>
С праздником, наша молодежь и все те, кто считает себя молодым!
На этой сцене директор Дома пионеров и руководитель...<br>
<br>
[Шеф] Значит, так, Галя! Один круг - пятьсот рублей!<br>
[Галя] Ага!<br>
[Шеф] Деньги вечером поделим.<br>
[Галя] Угу.<br>
[Шеф] Хорошо?<br>
[Галя] Ага.<br>
[Шеф] Ага? Всё! Давай! Маргошу береги!<br>
[Галя] Угу.<br>
[Мама] А сколько стоит мальчика покатать?<br>
[Галя] Тыща!<br>
<br>
[Певица] Не для меня приде-е-ет весна,<br>
Не дла меня Дон разольется...<br>
<br>
[Сан Саныч] Так, [неразб.]! Вы следующие!<br>
[Девушка] Мне еще минут десять надо!<br>
[Сан Саныч] Ёшки-макарёшки! Кого же выпустить?<br>
[Рэпер Глеб] Сан Саныч! Всё нормально, мы здесь!<br>
[Сан Саныч] Ой, Глеб! Еще рэпа вашего тут мне не хватало!<br>
[Второй рэпер] А можно мы сёдня, Сан Саныч, на большой сцене выступим? А?<br>
[Сан Саныч] Какая большая? Там сегодня Иракли Пирцхалава!<br>
[Рэперы] А-а-а!<br>
[Сан Саныч] Куда вы лезете? Давайте на малую! А то у меня там дыра.<br>
[Рэперы] На малую! На малую! На малую! Давай! А! А! А!
Саня, робота показываешь! Давай! [неразб.] А-а-а-а-а!<br>
</span>
<br>
<span class='blue'>[Припев, Ида Галич & Хлеб] Д3мм - abab</span><br>
Капельки, капельки слёз <br>
Капали, капали с глаз.<br>
Было ли, было всерьёз? <br>
Был ли у них этот шанс?<br>
  <div class='refren'>Капельки, капельки слёз <br>
  Капали, капали с глаз.<br>
  Было ли, было всерьёз?</div>
<br>
<span class='blue'>[Куплет 1, Ида Галич] Я46м/м - aabb<br></span>
Или я шутка для тебя?<br>
Мы на маршрутках по домам до сентября.<br>
Обида колет изнутри.<br>
Я этим летом не хочу с тобой парить!<br>
Ничего не говори! Ничего не говори!<span class='blue'> (Строка Тк4цм)<br></span>
<br>
<span class='i'>
[Галя] Круг на лошадке - полторы тыщи! Круг на...<br>
[Глеб] Привет!<br>
[Галя] Привет!<br>
[Шеф] Галя! Хватит лясы точить! Вон, Маргоша навалила!
Ты штрафы хочешь? Давай, убирай!<br>
[Глеб] Э! Я уберу!.. Есть пакет?<br>
</span>
<br>
<span class='blue'>Л4-5цм/ж - aaBB<br></span>
Раз — мы попались на ловушки от любви!<br>
Два — целовались, доверяя всё внутри!<br>
Три — испарились, будто вовсе не нужны друг другу,<br>
И, и, и, и всё по кругу! (И-и)<br>
<br>
<span class='blue'>[Припев, Ида Галич & Хлеб]</span><br>
Капельки, капельки слёз <br>
Капали, капали с глаз.<br>
Было ли, было всерьёз? <br>
Был ли у них этот шанс?<br>
  <div class='refren'>Капельки, капельки слёз <br>
  Капали, капали с глаз.<br>
  Было ли, было всерьёз? <br>
  Был ли у них этот шанс?</div>
Капельки, капельки слёз <br>
Капали, капали с глаз.<br>
Было ли, было всерьёз? <br>
<br>
<span class='blue'>[Куплет 2, Александр Шулико и Денис Кукояка]<br></span>
Или я шутка для тебя?<br>
Мы на маршрутках по домам до сентября.<br>
Обида колет изнутри.<br>
Я этим летом не хочу с тобой парить!<br>
Ничего не говори! Ничего не говори!<br>
<br>
Три, два!<br>
<br>
Раз — мы попались на ловушки от любви!<br>
Два — целовались, доверяя всё внутри!<br>
Три — испарились, будто вовсе не нужны друг другу,<br>
И, и, и, и всё по кругу! (И-и)<br>
<br>
<span class='blue'>[Перед-припев, Александр Шулико и Кирилл Трифонов]<br></span>
Капельки, капельки слёз <br>
Капали, капали с глаз.<br>
Было ли, было всерьёз? <br>
Был ли у них этот шанс?<br>
(Ка-пель-ки!)<br>
  <div class='refren'>Капельки, капельки слёз <br>
  Капали, капали с глаз.<br>
  Было ли, было всерьёз? <br>
  Был ли у них этот шанс?</div>
<br>
<span class='blue'>[Припев х4, Ида Галич & Хлеб]<br></span>
Капельки, капельки слёз <br>
Капали, капали с глаз.<br>
Было ли, было всерьёз? <br>
Был ли у них этот шанс?<br>
<br>
<span class='i'>
[Глеб] Ну чо, мы с тобой больше никогда не увидимся?<br>
[Галя] Ты чо, дурак? Мы с тобой с одного района!<br>
[Глеб] А, ну ладно! Вот диск.<br>
[Галя] Так?<br>
[Глеб] Тут наши песни.<br>
[Галя] Угу.<br>
[Глеб] Ну, одна не наша - случайно записалась.<br>
[Галя] А, а сколько всего?<br>
[Глеб] Две.<br>
[Галя] Ну ладно! Пока! Э! А деньги за кукурузку?<br>
[Глеб] Пока!<br>
[Галя] Блин! На карту мне переведи!<br>
[Глеб] Я тоже тебя никогда не забуду!<br>
[Галя] Так, блин, а... а где пони?<br>
<br>
[Девочка] Пап, а почему у нас Моргенштерн не выступал?<br>
[Сан Саныч] Кто, доча?<br>
[Девочка] Ну, рэпер такой, Моргенштерн.<br>
[Сан Саныч] Да чтобы у нас, да в год семидесятипятилетия Великой Победы,
да какой-то там немец выступал?! Да никогда в жизни? <br>
</span>
<br>
<span class='blue'>Источник: расшифровка фонограммы клипа</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>