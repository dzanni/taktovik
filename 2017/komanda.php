<?php
$title = '	SMASH, Полина Гагарина & Егор Крид - Команда (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/DEkNFao5IdU'";
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

<span class='blue'>[Припев 1: Полина Гагарина] Я3жм - AAbb<br></span>
Мы верим и мечтаем.<br>
Мы там, где нас так ждали.<br>
Где на семи ветрах<br>
Один мотив в сердцах.<br>
<br>
<span class='blue'>[Переход: Полина Гагарнина] Х5ж - AABB<br></span>
Через тернии и прямо к звёздам.<br>
Выше, дальше - так легко и просто!<br>
Мы начнём, и только побеждаем.<br>
Если падаем, то вновь взлетаем.<br>
<br>
<span class='blue'>[Припев: Полина Гагарина] Л24цжм? - AAbb<br></span>
Мы знаем, в чём правда -<br>
Ты наша команда!<br>
И она без тебя высоко не взлетит!<br>
Без тебя никогда не победит!<br>
<br>
<span class='blue'>[Куплет 2: Егор Крид] Дк2-5цж - AAAAA, XAX'A, AAxA <br></span>
За спиной мои крылья, будто сижу в фюзеляже.<br>
Я игрок, и всегда до конца иду - остальное неважно.<br>
Неважно, что скажут (не-а), забью и промажу.<br>
Упаду-встану! За меня бьется каждый,<br>
За каждого бьюсь, вот это и важно.<br>
<div class='refren'>
Спасибо, команда!<br>
Мы семья и друзья - это сила.<br>
Непокорённые, не побежденные <br>
Всё в наших руках, мне удача звонила.<br>
(- Алло?)<br>
Я с детства мечтаю,<br>
Вижу: мечтам есть свойство сбываться.<br>
Наша цель высоко-высоко,<br>
Но с нашей командой мы сможем добраться!<br></div>
<br>
<span class='blue'>[Переход: Полина Гагарина & Егор Крид]<br></span>
Есть мечты, и их нельзя измерить.<br>
И друзья, в которых стоит верить.<br>
Каждый важен, если на пределе.<br>
Каждый первый - первый в своем деле!<br>
<br>
<span class='blue'>[Припев: Полина Гагарина & Егор Крид]<br></span>
Мы знаем, в чём правда -<br>
Ты наша команда!<br>
И она без тебя высоко не взлетит!<br>
Без тебя никогда не победит!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Мы в игре! <br>
Мы в игре!<br>
Мы в игре!<br>
Мы в игре!<br>
Ты знаешь, мы в игре!<br>
Оу!<br>
<br>
<span class='blue'><a href="https://www.gl5.ru/dj-smash-egor-kreed-polina-gagarina-komanda.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
