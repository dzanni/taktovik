<?php
$title = 'CYGO - Panda E (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ZZh_ZQGPMgQ'";
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

<span class='blue'>[Куплет 1] Тк4ц - A'bA'b etc.<br></span>
Расскажи о том, как расстоянье поменяло нас,<br>
Как уходили слезы под созданьем темноты.<br>
Всё вокруг их будто бы напоминало нас.<br>
Те обиды, да, ну, я с тобой на ты!<br>
Так пускай откроют нам дорогу до небес, до небес, <span class='blue'>(Строка Тк5цм)<br></span>
И пускай луна посветит двум влюбленным жестко!<br>
Я сниму тревогу, ты опустишь занавес.<br>
Я сорвусь с цепи, ты скажешь броско,<br>
На заносах мы, дело же не в папиросе!<br>
Разве ты спросишь, кому ты сносишь, ты!<br>
Твое дело не кипеть, и ты будешь петь.<br>
И на целом свете таких не встретишь нас.<br>
И на целом свете таких не встретишь нас.<br>
И на целом свете таких не встретишь нас.<br>
<br>
<span class='blue'>[Переход х2] Тк43жм - AxAA<br></span>
Если достать до тебя сложно,<br>
Если лететь к тебе далеко,<br>
Немного тебя мне как будто невозможно,<br>
И микроволны внекожно!<br>
<br>
<span class='blue'>[Припев] Х6ж - AAAA<br></span>
Э, э, э, э, э, э!<br>
Правда! <br>
Покорила меня, сука, твоя правда!<br>
Мы бежим с тобой как будто от гепарда.<br>
Посмотри, ведь это рядом наша панда!<br>
Мы бежим с тобой как будто от гепарда.<br>
<div class='refren'>
Покорила меня, сука, твоя правда!<br>
Мы бежим с тобой как будто от гепарда.<br>
Посмотри, ведь это рядом наша панда!<br>
Мы бежим с тобой как будто от гепарда.<br>
Мы бежим с тобой как будто от гепарда.</div>
<br>
<span class='blue'>[Куплет 2] Х3м - aabaa baba, Х2жм? - AbAb<br></span>
Напоила нас <br>
Ядом изо льда.<br>
Люди врут порой, <br>
Я давлю на газ, <br>
Я давлю на газ.<br>
<div class='refren'>Бегу за мечтой, <br>
Волки воют нам.<br>
Я плачу судьбой,<br>
Я плачу богам, <br>
Я плачу богам.</div>
В глазах станешь <span class='blue'>(Строка Дк2ж)<br></span>
Снова дежавю.<br>
Я любил одну, <br>
Я любил одну, <br>
Я иду ко дну.<br>
<div class='refren'>Если дикой станешь - <br>
Я умру!<br>
Вмиг восстанешь -<br>
Я умру!<br>
Ты заплачешь -<br>
Я умру!</div>
<br>
<span class='blue'>[Припев]<br></span>
Э, э, э, э, э, э!<br>
Правда! <br>
Покорила меня, сука, твоя правда!<br>
Мы бежим с тобой как будто от гепарда.<br>
Посмотри, ведь это рядом наша панда!<br>
Мы бежим с тобой как будто от гепарда.<br>
Мы бежим с тобой как будто от гепарда.<br>
<br>
<span class='blue'><a href='http://tekst-pesen.ru/tekstpesen/8479-cygo-panda-e-tekst-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B.  Рифма д=м: "до небЕс - зАнавес".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
