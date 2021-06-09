<?php
$title = 'Филипп Киркоров - Любовь или обман (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/bxIXkbcnYdA'";
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

<span class='blue'>[Куплет 1] Я5м - aabb<br></span>
Твои глаза - холодная река,<br>
На глубине разбиты полюса.<br>
Я по ней плыву, но, кажется, тону,<br>
Спасая душу грешную свою.<br>
<br>
Молю тебя одну, тебя одну, тебя одну.<br>
<br>
<span class='blue'>[Припев] Л53жм (Х5ж+Я3м) - AbAb</span><br>
Я не знаю, что тебе дороже: <br>
Любовь или обман!<br>
Я не знаю, что спасти нас сможет, <br>
И на душе туман.<br>
Я не знаю, кто из них главнее. <br>
Ответь мне вновь и вновь!<br>
Только сердце бьётся всё слабее, <br>
А мне нужна любовь!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Твои глаза пусты, когда со мной.<br>
Но только я кричу тебе: "Постой!"<br>
Там, на берегу, я погружусь во мглу,<br>
Спасая душу грешную свою.<br>
<br>
Молю тебя одну, тебя одну, тебя одну.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я не знаю, что тебе дороже: <br>
Любовь или обман!<br>
Я не знаю, что спасти нас сможет, <br>
И на душе туман.<br>
Я не знаю, кто из них главнее. <br>
Ответь мне вновь и вновь!<br>
Только сердце бьётся всё слабее, <br>
А мне нужна любовь!<br>
<br>
Я не знаю, что тебе дороже: <br>
Любовь или обман!<br>
Я не знаю, что спасти нас сможет, <br>
И на душе туман.<br>
<br>
Я не знаю, что тебе дороже: <br>
Любовь или обман!<br>
Я не знаю, что спасти нас сможет, <br>
И на душе туман.<br>
Я не знаю, кто из них главнее. <br>
Ответь мне вновь и вновь!<br>
Только сердце бьётся всё слабее, <br>
А мне нужна любовь!<br>
<br>
Музыка: Руслан Квинта<br>
Слова: Руслан Квинта и В. Куровский<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/f1/kirkorov/3436-filipp-kirkorov-lyubov-ili-obman-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Неточные рифмы, припев - логаэд из двусложников.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
