<?php
$title = 'Ислам Итляшев - Салам Алейкум Братьям! (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/C-V9vStmsLA'";
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

<span class='blue'>[Куплет 1] Я5дм - A'bA'b, Я5жм - AbAb<br></span>
Салам алейкум, небеса высокие,<br>
Творение великого творца!<br>
Салам алейкум, счастьем окрыленные<br>
Людские благородные сердца!<br>
    <div class='refren'>Салам алейкум, братья с Ингушетии!<br>
    Салам тебе, Далу и Карачай!<br>
    Салам тебе, дружная Осетия!<br>
    Салам алейкум, весь Адыгский край!</div>
<br>
<span class='blue'>[Припев] Я5жм - XaXa<br></span>
В краю родном любимом воздух чистый,<br>
Орлы летают тихо в небесах.<br>
Мой гордый край и родину родную<br>
Ты сбереги от войн, мой Аллах!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Салам алейкум, братьям с Дагестана!<br>
Салам алейкум, гордая Чечня!<br>
Большой салам наследникам Алана!<br>
Салам тебе, Абхазия моя!<br>
  <div class='refren'>Салам алейкум всем родным и близким!<br>
  Салам тебе, родная Кабарда!<br>
  О нашей дружбе мы еще услышим,<br>
  Салам тебе, Ногайская орда!</div>
<br>
<span class='blue'>[Припев]<br></span>
  В краю родном любимом воздух чистый,<br>
  Орлы летают тихо в небесах.<br>
  Мой гордый край и родину родную<br>
  Ты сбереги от войн, мой Аллах!<br>
<br>
  В краю родном любимом воздух чистый,<br>
  Орлы летают тихо в небесах.<br>
  Мой гордый край и родину родную<br>
  Ты сбереги от войн, мой Аллах!<br>
  Ты сбереги от войн, мой Аллах!<br>
 <br>
<span class='blue'><a href='https://on-hit.ru/texts/islam-itljashev-salam-alejkum-bratjam/'
  target='_blank'>Источник</a></span><br>
 <br>
 <br>
  P.S. Слоговое "й": Ты сбереги от воЙИн, мой Аллах! <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
