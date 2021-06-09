<?php
$title = 'MiyaGi & Эндшпиль - Chillim (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wZJyNrN6TlU'";
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

<span class='blue'>[Куплет 1: MiyaGi] Тк4цм/ж - aa, AA<br></span>
Навали басса! Police, don´t cry!<br>
Доброго крути да передавай!<br>
Сегодня сатива красиво раскрасила вечер.<br>
Не проходи мимо, мы лечим, лечим.<br>
<div class='refren'>
Мокрого сухого принимай, какой есть.<br>
Слабо дом на засовы за Боба сдуть? Всё честь! <br>
Заграбастали битов, окунись в облака.<br>
Помни Miyagi - Hallelujah!</div>

Мистер Бомбастик, стиль флоу-пластик.<br>
Пламя не гаснет, man street hassle!<br>
Не приведи Бог без музы остаться.<br>
Время-песок, ман, пора врываться!<br>
 <div class='refren'>
Солнце горело, cжигало тела.<br>
Туса кипела. Hallelujah!<br>
Время на деле, и видом задела.<br>
Этой ночью не промахнётся Акелла!</div>
 <br>
<span class='blue'>[Припев] Х25ж - ABAB<br></span>
Chillim, chillim, chillim, chillim, chillim!<br>
Мы сегодня <br>
Сhillim, chillim, chillim, chillim, chillim!<br>
Мы сегодня <br>
Сhillim, chillim, chillim, chillim, chillim!<br>
Мы сегодня <br>
Сhillim, chillim, chillim, chillim, chillim!<br>
<br>
<span class='blue'>[Куплет 2: Эндшпиль] Дк4цм/ж - aa, AA<br></span>
Мой раста в понче, панчи, гонча.<br>
В тот час чары, чеки, нунчаки, soldier.<br>
Кончай, Санчо, sunshine молча.<br>
Качай в ночь, части тела погромче.<br>
  <div class='refren'>
Дыма дала Антанта Кавабанга!<br>
Ламба вдаль, в Ламбо надо для бланта.<br>
Я типа Ван Дамм по битам так-то.<br>
Тада Трамп грид fuck рэпа инфаркта!</div>

DISCO-инферно! Cuba me gusta.<br>
Uno, tre, quatro! - в клубе не густо.<br>
Дай мне, дай мне перевернуть этот момент. <span class='blue'>(Строка Тк4цм)<br></span>
Дай мне, дай мне чиллить под фейрверк!<br>
   <div class='refren'>
Тук-тук! Я делаю звук,<br>
Мои пацаны собирают этот hook.<br>
Раггамафин фоном. Fuck фараонам.<br>
Братьям - Салам, всем Джа-баронам.</div>
<br>
<span class='blue'>[Припев]<br></span>
Chillim, chillim, chillim, chillim, chillim!<br>
Мы сегодня <br>
Сhillim, chillim, chillim, chillim, chillim!<br>
Мы сегодня <br>
Сhillim, chillim, chillim, chillim, chillim!<br>
Мы сегодня <br>
Сhillim, chillim, chillim, chillim, chillim!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/m/miyagi/8226-miyagi-endshpilj-chillim-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
