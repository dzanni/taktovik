<?php
$title = 'MORGENSHTERN & Тимати - El Problema (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/cdk4hVPN_F0'";
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
<span class='i'>[Звучит фонограмма песня Моргенштерна "Yung Hefner"]<br>
<br>
[MORGENSHTERN]: Подписал?<br>
[Тимати]: Я вот здесь по процентам не понял!<br>
[MORGENSHTERN]: Один...<br>
[Тимати]: Ага.<br>
[MORGENSHTERN]: ...девяносто девять.<br>
[Тимати]: Окей!<br>
</span>
<br>
<span class='blue'>[Припев х2: MORGENSHTERN] Тк2ж/ж - AABB</span><br>
E-E-El Primero <br>
С огромным хером.<br>
У меня проблема: <br>
Lambo или Ferra’?<br>
<br>
<span class='blue'>[Куплет 1: MORGENSHTERN] Д4м/м? - aaabbb</span><br>
Эй, слышь! <span class='blue'>(Строка Я1м)</span><br>
Я — молодой босс, ты — тупо мышь (Мышь)<br>
Делаю деньги, пока ты пиздишь (Cash)<br>
Цепи на мне — это тысячи тыщ (Пять мультов, эй)<br>
Я никогда ни на чё не копил (Нет)<br>
Выебал рэп, потому что любил (М-ма)<br>
Делаю бомбы, но я не с ИГИ... <br>
(Запрещенная в Российской Федерации организация)<br>
<br>
<span class='blue'>[Припев х2: MORGENSHTERN]</span><br>
E-E-El Primero <br>
С огромным хером.<br>
У меня проблема: <br>
Lambo или Ferra’?<br>
<br>
 (Э-э-э-э-э)<br>
<br>
<span class='blue'>[Куплет 2: Тимати & MORGENSHTERN] Тк4цм/ - aaa aaaa</span><br>
У меня насущный вопрос:<br>
Выбрать себе Rolls-Royce или Royce-Rolls?<br>
Это big boys playing big toys<br>
Тимати в клубе — знают, кто я такой<br>
  <div class='refren'>— Эй, проснись! Двадцатый год на дворе<br>
    — Окей (Few) <span class='blue'>(Строка Тк1м)</span></div>
Big boys playing with big toys (Big toys)<br>
Я легендарен, как Pink Floyd (Pink Floyd)<br>
Я на Ferrari, как big boss (Big boss)<br>
Цепь на мне, как твой дом (Bling)<br>
<span class='blue'>Тк2-3ж/ - AAXX</span><br>
Слышь, мне похуй там, как ты (Как ты)<br>
Разорвал контракты (Е-е-е)<br>
Тимати стал делать лучше (Что?)<br>
Когда ушёл из Blackstar’а.<br>
<br>
<span class='blue'>[Припев х2: MORGENSHTERN]</span><br>
E-E-El Primero <br>
С огромным хером.<br>
У меня проблема: <br>
Lambo или Ferra’?<br>
<br>
<span class='blue'>[Аутро]</span><br>
Э-э-э (ээ), э (ээ),<br>
Э (ээ), э (ээ),<br>
Э-э-э (ээ), э (ээ),<br>
Э (ээ), э (ээ),<br>
(Слава, что ты сделал?)<br>
Э-э-э (ээ), э (ээ),<br>
Э (ээ), э (ээ),<br>
Э-э-э (ээ), э (ээ),<br>
Э (ээ), э (ээ),<br>
Э-э-э (ээ), э (ээ)<br>
  <br>
<span class='blue'><a href='https://genius.com/Morgenshtern-and-timati-el-problema-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
