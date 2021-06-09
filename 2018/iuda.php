<?php
$title = 'Хаски - Иуда (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/0e9JgyzCIBc'";
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

<span class='blue'>[Скит]</span><br>
И как-то так выходит, что без этого, ну, ты не можешь жить. Это как пища, как воздух...<br>
<br>
<span class='blue'>[Вступление]</span><br>
Иуда!<br>
Иуда!<br>
Иуда!<br>
Иуда!<br>
<br>
<span class='blue'>[Куплет 1] Л3ж? - aabbxcc </span><br>
Обстоятельно проблевавшись<br>
В чьей-то хате на Патриарших,<br>
Я вбиваю бычки в перила.<br>
Ожидай свой Киа Рио!<br>
Пусть такси шепелявит ретро,<br>
Мы с водилой раздавим пятку<br>
И до дома доедем всмятку!<br>
<br>
<span class='blue'>[Припев] Д3м? - aaabaaab</span><br>
Мухи в бокале вина.<br>
Что будет после меня?<br>
Мультики нового дня<br>
Вряд ли разделят со мной (Ой!)<br>
Кто из вас выдаст меня?<br>
Кто из вас выдаст меня?<br>
Кто из вас выдаст меня?<br>
Стыть не успеет косой (Ой-ой!)<br>
Иуда!<br>
<br>
<span class='blue'>[Куплет 2] </span><br>
Люди липнут как козинаки,<br>
Это лифт или Газенваген?<br>
Дорогуша, вы обознались!<br>
Мне не нужен психоанализ!<br>
Вы простите меня, утырка,<br>
Мне скучны ваша мелодрама,<br>
Ваша течка и ваша дырка!<br>
<br>
<span class='blue'>[Припев]</span><br>
Мухи в бокале вина.<br>
Что будет после меня?<br>
Мультики нового дня<br>
Вряд ли разделят со мной (Ой!)<br>
Кто из вас выдаст меня?<br>
Кто из вас выдаст меня?<br>
Кто из вас выдаст меня?<br>
Стыть не успеет косой! (Ой-ой!)<br>
Иуда.<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
В моём плеере педерасты,<br>
А на проводе террористы.<br>
Я читаю для тех, кто бродит<br>
По рукам или по этапам.<br>
Я не требую пониманья,<br>
Лишь один из шального люда,<br>
Понимает меня Иуда!<br>
<br>
<span class='blue'>[Припев]</span><br>
Мухи в бокале вина.<br>
Что будет после меня?<br>
Мультики нового дня<br>
Ты не разделишь со мной (Ой!)<br>
Кто из вас выдаст меня?<br>
Кто из вас выдаст меня?<br>
Кто-то заложит меня?<br>
Стыть не успеет косой.<br>
Целую тебя, Иуда! <span class='blue'>(Строка Дк3ж)</span><br>
<br>
<span class='blue'><a href='https://genius.com/Husky-judas-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
