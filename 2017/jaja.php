<?php
$title = 'Потап и Настя - Я......Я (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/oq5iuZrZjmU'";
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

<span class='blue'>[Припев] Тк3м - aabbcccc<br></span>
Умм... мне так нравится эта боль.<br>
Наверно что-то не так со мной.<br>
Умм... сердце разбивает в кровь.<br>
Безжалостная любовь.<br>
Я измучаю себя.<br>
Невезучая, дремучая.<br>
Змея любовь гремучая.<br>
Ядовитая!<br>
<div class='refren'>
(О-о-о-о...) Любовь ядовитая!<br>
(О-о-о-о...) Ядовитая!<br>
(О-о-о-о...) Любовь ядовитая!<br>
(О-о-о-о...) Ядовитая!</div>
<br>
<span class='blue'>[Куплет 1] Тк4цм - aa<br></span>
Не факт, что так должно быть у всех.<br>
Разносился эхом демонический смех.<br>
Что так у всех должно быть - не факт.<br>
Любовь - ядовитая, я сделал замах.<br>
На плечо обиду я положу и покину.<br>
Разнесенную на мелкие осколки комнату.<br>
Ничего, не впервой, ухожу в темноту.<br>
Одурманенного города... о-о-о...<br>
<br>
<span class='blue'>[Припев]<br></span>
Умм... мне так нравится эта боль.<br>
Наверно что-то не так со мной.<br>
Умм... сердце разбивает в кровь.<br>
Безжалостная любовь.<br>
Я измучаю себя.<br>
Невезучая, дремучая.<br>
Змея любовь гремучая.<br>
Ядовитая!<br>
<div class='refren'>
(О-о-о-о...) Любовь ядовитая!<br>
(О-о-о-о...) Ядовитая!<br>
(О-о-о-о...) Любовь ядовитая!<br>
(О-о-о-о...) Ядовитая!</div>
<br>
<span class='blue'>[Куплет 2] Ак3ж/д - AA, A'A'<br></span>
В самом дальнем, потаенном уголке сознания.<br>
Я понимал, что мне наверно это нравится.<br>
Что наш конфликт, он ровесник мироздания.<br>
Одиноко примирение скитается.<br>
И только эхо (эхо, эхо, эхо)<br>
Твоего немного демонического смеха.<br>
Звенит в памяти, как будто радио помеха.<br>
И я удерживаю крышу не давая съехать, о...<br>
<br>
<span class='blue'>[Припев]<br></span>
Умм... мне так нравится эта боль.<br>
Наверно что-то не так со мной.<br>
Умм... сердце разбивает в кровь.<br>
Безжалостная любовь.<br>
Я измучаю себя.<br>
Невезучая, дремучая.<br>
Змея любовь гремучая.<br>
Ядовитая!<br>
<br>
<span class='blue'>[Аутро] Тк2-4цдм<br></span>
Ядовитая! Ядовитая!<br>
Ядовитая любовь моя.<br>
Ядовитая! Ядовитая!<br>
Ядовитая любовь моя.<br>
Ядовитая! Ядовитая!<br>
Ядовитая любовь моя.<br>
С толку сбитая и разбитая и болючая, <br>
Но так нужна она.<br>
О-о-о-о... О-о-о-о...<br>
Мне так, так нужна она!<br>
О-о-о-о... О-о-о-о...<br>
Любовь безумная!<br>
О-о-о-о... О-о-о-о...<br>
Мне так, так нужна она!<br>
О-о-о-о... О-о-о-о...<br>
Ядовитая!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/p1/potapinastya/5940-potap-i-nastya-yaya-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Дактилическое окончание при необходимости поется как мужское.
Припев распет как тактовик на 3 ударных слога, не взирая на естественное
ударение языка: <br>
<br>
Змея любОвь гремУчаЯ<br>
ЯдовИтаЯ<br>
<br>
UUU-U-U-<br>
-U-U-<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
