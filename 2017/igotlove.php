<?php
$title = 'MiyaGi, Эндшпиль ft. Рем Дигга - I Got Love (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/nidQCt_HEsY'";
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

<span class='blue'>[Куплет 1: Эндшпиль] Тк4цм/ж - aa, AA</span><br>
ОпУтала меня, ОпутАла,</span><br>
Ты будто мой сорт - мариуанна!<br>
Небо в алмазах - лето летало,<br>
Ты моя бэйби - дочь карнавала.<br>
Двигайся крошка, принцесса бала!<br>
Ночь перемен - мысли растамана.<br>
Пока не устал - музыка играла.<br>
Кто-то курил - кого-то впирало!<br>
Эта дура дуремара, а нам она,<br>
Было, думал, улетала в теплые края.<br>
Лето, море, песок, но мне тебя мало!<br>
Танцую в пол - руки в потолок зала.<br>
Туда, куда пал - больше не вернусь,<br>
Чудом умотал и забрал с ней грусть.<br>
Это наша жизнь, и ей всегда мало.<br>
Танцую в пол - руки в потолок зала.<br>
Go, everybody, shake your ass!<br>
Go, move, everybody мое любимое шоу.<br>
Голова качала, пощада давала маннама,<br>
Блавовал планов, нал и наваров,<br>
Бутора валом подавай нам!<br>
Когда будет этот день, ты пой про себя!<br>
Про меня, за любовь, за маму, за брата!<br>
А то судьба загнет ата-ата!<br>
А-ТА-МАН... я типа А-ТА-МАН...<br>
В жарком танго меломан, <br>
Мною правит bad man.<br>
<div class='refren'>
<span class='blue'>Л12мж - aBaBaCC</span><br>
Танцуй!<br>
Так примитивно!<br>
Танцуй!<br>
Так импульсивно!<br>
Танцуй!<br>
Дочь карнавала,<br>
Тут на танцполе тебя было мало! <span class='blue'>(Строка Л4цж)</span><br>
<br>
<span class='blue'>[Hook x2: MiyaGi & Эндшпиль, Рем Дигга] Л2м - abab</span><br>
I got love a feel.<br>
I got you my mind.<br>
I got love my skill.<br>
My la-la-la-la-life.<br>
<br>
<span class='blue'>[Куплет 2: MiyaGi]<br></span>
Джа-джа-джа мы окна завесим,<br>
Будем опять принцесса и деспот!<br>
Лаврами не взять твой пыл, куролесим!<br>
Мы на волю по годам сорвемся вместе!<br>
За мгновение облететь планеты - нипочем!<br>
То барабанит дождь - тоска да печаль,<br>
Но ты светом добра озарила свободу.<br>
[Пауза] В танце двигали бёдра.<br>
Ты моя румба, ты моя самба!<br>
Ты моя сальса, ты мое танго!<br>
Дыма навали, Volume наболтай!<br>
В этих объятиях со мной улетай!<br>
(Со мной улетай!) Со мной улетай!<br>
(Со мной улетай!) Со мной улетай!<br>
Дыма навали, Volume наболтай!<br>
В этих объятиях со мной улетай!<br>
(Со мной улетай!) Со мной улетай!<br>
(Со мной улетай!) Со мной улетай!<br>
Дыма навали, Volume наболтай!<br>
В этих объятиях со мной улетай!<br>
(Со мной улетай!) Со мной улетай!<br>
(Со мной улетай!) Со мной улетай!<br>
<br>
<span class='blue'>[Hook x2: MiyaGi & Эндшпиль, Рем Дигга]</span><br>
I got love a feel.<br>
I got you my mind.<br>
I got love my skill.<br>
My la-la-la-la-life.<br>
<br>
<span class='blue'>[Куплет 3: Рем Дигга] Тк3мж? - aBaBa<br></span>
Это всего лишь игра, <br>
Может быть, наверно,<br>
Даже твоя нагота. <br>
Воу, детка, я не верю! <br>
Но падай в руки ко мне, моя красота!<br>
<div class='refren'>
  <span class='blue'>Тк4цм/ж - aa, AA<br></span>
Мы с тобою без гида - так надо!<br>
Тронула душу, твоя мне мила ламбада. <br>
Чтобы попой крутила, есть бит, не жаль саба!<br>
Я горю с тобой, как шмаль, в пабах дай жара! <br>
Готов и я оформить всем вам лойс!<br>
Кто умеет делать шума - make some noise! <br>
Жара до утра, в угаре толпа,<br>
Но я смотрю лишь на тебя лишь, веришь, ма?<br>
И когда станет клуб утром клевать носом,<br>
Я украду тебя, будто Азор розу!<br>
Улыбнусь в тишине и скажу просто:<br>
«Иди ко мне, Солнце, расплетай косы!»<br>
Расплетай косы, расплетай косы!<br>
Иди ко мне, Солнце, расплетай косы!<br>
Расплетай косы!<br>
<br>
<span class='blue'>[Hook x4: MiyaGi & Эндшпиль, Рем Дигга]</span><br>
I got love a feel.<br>
I got you my mind.<br>
I got love my skill.<br>
My la-la-la-la-life.<br>
<br>
I got love a feel.<br>
I got love a feel.<br>
<br>
<span class='blue'><a href="https://genius.com/Miyagi-and-i-got-love-lyrics"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
