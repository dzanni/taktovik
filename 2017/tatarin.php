<?php
$title = 'АИГЕЛ - Татарин (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/yQR_NLeXKtw'";
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

<span class='blue'>[Интро] Тк2333м - aaa<br></span>
Я даю тебе слово,<br>
Что домой не водила никого.<br>
Пока тебя нет, даю слово,<br>
Что домой не водила никого.<br>
Я даю тебе слово,<br>
Что домой не водила никого.<br>
Пока тебя нет, даю слово,<br>
Что домой не водила никого.<br>
<br>
<span class='blue'>[Куплет 1] Ак4цдм? - A'A'bB<br></span>
Ни того красавчика с рисунками на теле без души, ну и<br>
Ни того надёжного состоявшегося мужчину и<br>
Ни того загнатого колёсами-вопросами торчка,<br>
Ни того румяного самонадеянного мальчика.<br>
<br>
<span class='blue'>[Интро]<br></span>
Я даю тебе слово,<br>
Что домой не водила никого.<br>
Пока тебя нет, даю слово,<br>
Что домой не водила никого.<br>
Я даю тебе слово,<br>
Что домой не водила никого.<br>
Пока тебя нет, даю слово,<br>
Что домой не водила никого.<br>
<br>
<span class='blue'>[Куплет 2] Тк3мж - aBaB<br></span>
Про то, что я под одеждой голая,<br>
Все знают только понаслышке.<br>
Никому-никому не расстегивала <br>
Никакие такие штанишки.<br>
Никому-никому, кроме тебя, <br>
Не давала себе улыбаться,<br>
Потому-потому что думала, <br>
Вдруг ты будешь ругаться!<br>
<br>
<span class='blue'>[Припев] Дв43мж - aaBB<br></span>
А мой парень непростой —<br>
Он сидит уж год шестой,<br>
У него пуля в пушке<br>
Для твоей черепушки!<br>
А мой парень-татарин,<br>
В любви авторитарин,<br>
У него пуля в пушке,<br>
Ты у него на мушке!<br>
<br>
<span class='blue'>[Куплет 3] Тк32ж - ABAB<br></span>
Не пускала-пускала-пускала<br>
Никого повеселиться,<br>
Потому-потому что думала, <br>
Вдруг ты будешь-будешь злиться,<br>
<div class='refren'>
  <span class='blue'>Тк3мд - aB'aB'<br></span>
Не пускала-пускала никого<br>
Со мной вечерком расслабиться,<br>
Потому что не знала, вдруг ты придёшь<br>
И надумаешь с нами расправиться.</div>
<br>
<span class='blue'>[Припев]<br></span>
А мой парень непростой -<br>
Он сидит уж год шестой,<br>
У него пуля в пушке,<br>
Ты у него на мушке!<br>
<br>
<span class='blue'>[Дополнительный припев] Х4м? - aa<br></span>
А мой парень очень злой,<br>
Он придёт с бензопилой:<br>
«Я, сәлам, матур малай<br>
Мин бүләм нәкъ урталай!<br>
Я, сәлам, җаным, сәлам<br>
Үпкәлисең — мин көләм<br>
Син биклисең — мин бәрәм<br>
Син карыйсың — мин күрәм<br>
Җаным, сәлам, җаным, сәлам <span class='blue'>(Строка Я4м)</span><br>
Син уйлыйсың — мин беләм<br>
Син ачасың — мин ябам<br>
Син качасың — мин табам»<br>
<br>
<span class='blue'>[Аутро]<br></span>
Ммм, мой парень-татарин<br>
В любви авторитарин.<br>
Ммм, мой парень-татарин<br>
В любви авторитарин.<br>
Мой парень-татарин<br>
В любви авторитарин.<br>
Мой парень-татарин<br>
В любви авторитарин.<br>
Мой парень-татарин.<br>
Мой парень-татарин.<br>
Мой парень-татарин<br>
В любви авторитарин.<br>
Мой парень-татарин.<br>
Мой парень-татарин.<br>
Мой парень-татарин<br>
В любви авторитарин.<br>
<br>
<span class='blue'><a href="https://genius.com/Aigel-tatar-lyrics"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
