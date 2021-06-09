<?php
$title = 'Юлианна Караулова - Градусы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/MYEYFDKMjUI'";
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

<span class='blue'>[Куплет 1] Л24ц23мж? - aaBaaBB'</span><br>
Горит луна,<br>
А я одна (а я одна)<br>
Шазамлю грустные треки. На баре<br>
Бокал вина,<br>
И ночь длинна (ночь длинна),<br>
Вечерний город в нуаре,<br>
Все как по сценарию.<br>
  <div class='refren'>
  <span class='blue'>Тк12жж? - ABABAxB</span><br>
  Светят <br>
  Неоны в килогерцах.<br>
  Тут хейтят <br>
  Все что идет от сердца.<br>
  Сети, <br>
  Мессаджи в дИрект бросай, <span class='blue'>(Строка Тк3м)</span><br>
  Мне от них не согреться.</div>
<br>
<span class='blue'>[Припев] Тк2-4цдмж - A'aaBA'aaB</span><br>
Легкие градусы, градусы<br>
Меня уносят под дип-хауса карусель,<br>
Я так устала, так устала от этих всех<br>
Недосказанностей, иллюзий!<br>
  <div class='refren'>Легкие градусы, градусы<br>
  Меня уносят под дип-хауса карусель,<br>
  Я так устала, так устала от этих всех...<br>
  Теперь ты в курсе (ты в курсе)</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Я так боюсь <br>
Ускорить пульс (ускорить пульс)<br>
Стать ближе всех, чтоб остаться друзьями.<br>
Под ритм блюз <br>
Накроет грусть (накроет грусть)<br>
Так уже было и с нами,<br>
Все то же самое!<br>
  <div class='refren'>Тесно<br>
  Ночью искрятся клубы, <span class='blue'>(Строка Тк3ж)</span></div>
  Так близко -<br>
  Читай сердца и губы<br>
  В инсте.<br>
  Меня не надо лечить,<br>
  Давай больше не бУдем мы! <span class='blue'>(Строка Тк2д)</span></div>
<br>
<span class='blue'>[Припев]</span><br>
Легкие градусы, градусы<br>
Меня уносят под дип-хауса карусель,<br>
Я так устала, так устала от этих всех<br>
Недосказанностей, иллюзий!<br>
  <div class='refren'>Легкие градусы, градусы<br>
  Меня уносят под дип-хауса карусель,<br>
  Я так устала, так устала от этих всех...<br>
  Теперь ты в курсе (ты в курсе)</div>
<br>
<span class='blue'>[Интерлюдия]</span><br>
Легкие градусы, градусы... <br>
(Меня уносят, уносят, уносят, уносят, уносят)<br>
Я так устала от этих всех (недосказанностей)<br>
Легкие градусы, градусы (а-а, а-а)<br>
(Меня уносят, уносят, уносят, уносят, уносят)<br>
Я так устала от этих всех...<br>
Теперь ты в курсе!<br>
<br>
<span class='blue'>[Припев]</span><br>
Легкие градусы, градусы<br>
Меня уносят под дип-хауса карусель,<br>
Я так устала, так устала от этих всех<br>
Недосказанностей, иллюзий!<br>
  <div class='refren'>Легкие градусы, градусы<br>
  Меня уносят под дип-хауса карусель,<br>
  Я так устала, так устала от этих всех...<br>
  Теперь ты в курсе (ты в курсе)</div>
  <br>
<span class='blue'><a href='https://teksty-pesenok.ru/rus-yulianna-karaulova/tekst-pesni-gradusy/6747124/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Рифма ж=д: "в нуАре - по сценАрию", "с нАми - сАмое".<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
