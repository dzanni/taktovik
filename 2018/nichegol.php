<?php
$title = 'Валерия - Ничего личного (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/COiGJcOT1Xw'";
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

<span class='blue'>[Куплет 1] Ам4цж - AABB<br></span>
На город ложится расплавленный вечер,<br>
Тебя в моём сердце всё меньше и меньше.<br>
И нас постепенно разводят минуты,<br>
Я в них засыпаю ночами, а утром<br>
<div class='refren'>
  Меня окружают другие заботы,<br>
Горячие новости скажет мне кто-то.<br>
И где-то в проблемах о чём-то неважном<br>
Ты просто растаешь, наверно, однажды.</div>
<br>
<span class='blue'>[Припев] Л4цд - A'A'<br></span>
Жизнь - такая, как есть, и ничего личного!<br>
Я желаю тебе, чтоб было отлично всё!<br>
Жизнь - такая, как есть, и ничего личного!<br>
Я желаю тебе, чтоб было отлично всё!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Сюжеты прямые, включенье сознанья.<br>
Тебя разделяют на воспоминанья.<br>
И наши эмоции тихо поплыли,<br>
Как титры под психологическим фильмом.<br>
<div class='refren'>
Простая история со сложным финалом,<br>
Но что-то ещё между нами осталось.<br>
Пусть оба листаем часы, как страницы,<br>
Стираем друг друга из памяти лица.</div>
<br>
<span class='blue'>[Припев]<br></span>
Жизнь - такая, как есть, и ничего личного!<br>
Я желаю тебе, чтоб было отлично всё!<br>
Жизнь - такая, как есть, и ничего личного!<br>
Я желаю тебе, чтоб было отлично всё!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Простая история со сложным финалом,<br>
Но что-то ещё между нами осталось.<br>
Пусть оба листаем часы, как страницы.<br>
Стираем друг друга, из памяти лица.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Жизнь - такая, как есть, и ничего личного!<br>
Я желаю тебе, чтоб было отлично всё!<br>
Жизнь - такая, как есть, и ничего личного!<br>
Я желаю тебе, чтоб было отлично всё!<br>
<br>
Музыка: И. Брылин<br>
Слова: Н. Касимцева<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/valeria_nichego_lichnogo.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Размер куплетов и зачин припева совпадают с хитом группы "Адаптация"
"Жизнь в полицейском государстве" (альбом "Джут", 2000-2001), который был популярен в радикальных молодежных
тусовках середины 2000-х гг. Вряд ли это простое совпадение. Вероятно, автор слов сознательно
или непреднамеренно имел вв вид эту песню:<br>
<br>
<span class='i'>С газет и с экранов привычные лица -<br>
Нам некуда деться и негде укрыться,<br>
Одни уезжают, имея в запасе<br>
Ещё одну Родину, но<br>
Не всем так везёт, кто-то должен остаться<br>
И всей этой мерзости сопротивляться,<br>
Не дать уничтожить себя и другого,<br>
Чтоб не было снова тридцать седьмого...</span>

<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
