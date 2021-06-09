<?php
$title = 'Дельфин - 520 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/W7li-_sDQKg'";
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

<span class='blue'>[Куплет 1] Дк34цм, Дк34цжм, Дк34цмж - abab, AbAb, aBaB</span><br>
Нас заставляют гореть, <br>
Бросая фаеры слов<br>
В сломанные на треть <br>
Устройства наших голов.<br>
<div class='refren'>Из грязи наших желаний<br>
В мир прорастают цветы<br>
Разочарований, <br>
Бутонами пустоты.</div>
Будущее детей <br>
Штыком упирается в спину.<br>
Мы строим для них дома из костей,<br>
Кровь превращая в глину.<br>
<div class='refren'>Нам говорят: "Вы должны<br>
Все свои жизни Родине!"<br>
Но мы же ведь более чем сложны, <br>
Вроде бы. <span class='blue'>(Строка Дк1д)</span></div>
<br>
<span class='blue'>[Куплет 2] Дк34цд и др. - A'B'A'B'</span><br>
Мы сами себя переживём, <br>
Перегнием в памяти друг у друга,<br>
Имена сожжём <span class='blue'>(Строка Дк2м)</span><br>
На ветрах Крымского юга.<br>
<div class='refren'>Переболеем излом толерантности,<br>
Догадаемся, что чёрное не может быть противопоставлением белого. <span class='blue'>(Строка Тк5цд)</span><br>
Слова благодарности - <span class='blue'>(Строка Дк2д)</span><br>
Для каждого сердца смелого,</div>
Которое больше станет<br>
И сможет теперь любить<br>
И я знаю – такие сердца никто не обманет! <span class='blue'>(Строка Дк5цд)</span><br>
И может быть, <span class='blue'>(Строка Дк2м)</span><br>
<div class='refren'>Крохи любви тепла<br>
Прольются летним дождём,<br>
И то, что сгорело дотла,<br>
Восстанет в нем! <span class='blue'>(Строка Дк2м)</span></div>
<br>
<span class='blue'>[Припев] Дк34цмж - aBaB</span><br>
Пламя внутри тебя и меня. <br>
Наши глаза от слёз ослепли.<br>
К ненависти огня <br>
Тянутся вверх красные стебли!<br>
<div class='refren'>Солнца наших сердец <br>
Медленно гаснут искрами в пепле.<br>
Каждый из нас уже мертвец, <br>
Тянутся вверх красные стебли!</div>
<br>
<span class='blue'>[Куплет 3] Ак2-4цжм - AbAb</span><br>
Всегда нуждою других себя занимая,<br>
Всегда, что-то красивое творя, <br>
Мы движемся в сторону рая<br>
Через ненависти моря.<br>
<div class='refren'>Не каждый из нас на том берегу будет<br>
Не каждый сможет туда доплыть<br>
Сквозь шторма своих судеб<br>
Но... всё может быть</div>
<br>
<span class='blue'>[Припев]</span><br>
Пламя внутри тебя и меня. <br>
Наши глаза от слёз ослепли.<br>
К ненависти огня <br>
Тянутся вверх красные стебли!<br>
<div class='refren'>Солнца наших сердец <br>
Медленно гаснут искрами в пепле.<br>
Каждый из нас уже мертвец, <br>
Тянутся вверх красные стебли!</div>

<br>
<span class='blue'><a href='https://genius.com/Dolphin-520-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
