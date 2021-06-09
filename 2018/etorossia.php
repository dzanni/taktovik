<?php
$title = 'MC Хованский - Это Россия (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/A5mDCn7kEKI'";
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

<span class='blue'>[Куплет 1] Тр2д - A'A'<br></span>
Это Россиюшка, <br>
Хлебная корочка,<br>
Иконка на полочке, <br>
Икорка под водочку!<br>
Это Россия, блядь,<br>
Красная корочка,<br>
Первая ходочка (ёб твою мать),<br>
Руки в наколочках!<br>
<div class='refren'>
Это Россия, бля,<br>
Нет, мне не холодно!<br>
Я рождён в проруби (ох),<br>
Был крещён в хмеле и солоде! <span class='blue'>(Строка Тр3д)<br></span>
<span class='blue'>Тр2333ж - aaaa<br></span>
Хмурые рожи, <br>
Мы закрыты в себе, как матрёшки.<br>
На дороге растёт подорожник,<br>
Но ей это вряд ли поможет!</div>
<br>
<span class='blue'>[Припев] Тр2 - A''AxA''<br></span>
(Е-е) где мой боярышник?<br>
(Е-е) пошёл на рыбалку!<br>
(Е-е) выкопал труп - <br>
(Е-е) ищу в нём опарышей.<br>
<div class='refren'>
  <span class='blue'>Х4442м - aaaa<br></span>
(Е-е) я в комфорте и тепле!<br>
Свитер колется, как ель!<br>
Как гирлянда, моя цепь!<br>
Вот те крест!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Это Россиюшка,<br>
Хлебная корочка,<br>
Иконка на полочке, <br>
Икорка под водочку!<br>
Это Россия, блядь,<br>
Красная корочка,<br>
Первая ходочка (ёб твою мать), <br>
Смотри, как мы отдыхаем!<br>
<div class='refren'>
<span class='blue'>Тр2-4цж?<br></span>
Пойду в баню, возьму веник, шлёпну девку, <br>
Она, как холодец, будет тверкать (ебать в сраку)<br>
Мне на всё похуй, я в танке, <br>
Но я не играю в игрушки!<br>
Орёл на гербе:<br>
Одна голова хорошо, а две — лучше.</div>
Со мною «Катюша» —<br>
Детка стреляет глазами (твою мать)<br>
Вокруг столько пушек,<br>
Будто сегодня 9 мая (мать твою)<br>
Каждый день — День победы.<br>
Чтоб отметить, я прыгну в бассейн из нефти.<br>
Туристы пугают: у нас тут опасно,<br>
Встретишь медведя — дай взятку на лапу!<br>
<br>
<span class='blue'><a href='https://genius.com/Mc-hovansky-this-is-russia-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Пародийный перепев песни Childish Gambino <a href='https://youtu.be/VYOjWnS4cMY'
  target='_blank'>"This is America"</a> (вывешена на youtube 5 мая 2018)<br>




<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
