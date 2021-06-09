<?php
$title = 'Егор Шип - Как твои дела? (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/nBXVkqn6HnU'";
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

<span class='blue'>[Припев] Дв3-4мм - ababb</span><br>
Как твои дела (а-А-а-А-а)?<br>
Трубку не берё(о-О-о-О)шь!<br>
Я хочу тепла (а-А-а-А-а)!<br>
Но попадаю в блок,<br>
Снова попадаю в блок (э)<br>
  <div class='refren'>Как твои дела (а-А-а-А-а)?<br>
  Знаю наперё(о-О-о-О)д!<br>
  Я хочу тепла (а-А-а-А-а)!<br>
  Но попадаю в блок,<br>
  Сука, попадаю в блок (э)</div>
<br>
<span class='blue'>[Куплет 1] Тк2-4цм/ж - aa, AA</span><br>
Между нами любовь (любовь)<br>
Между нами ничего, кроме холодов.<br>
Все погибло — я коснулся голых проводов.<br>
Еще один разряд, <br>
Никто не виноват,<br>
  <div class='refren'>
  <span class='blue'>Тк2-3мж - aBaBaB(B)</span><br>
  Что теперь мы экс — <br>
  Холодно-равнодушны.<br>
  Очень простой контекст —<br>
  Это не Love и не дружба,<br>
  Я кричу S.O.S., <br>
  Но меня спасать не нужно.<br>
  (Но меня спасать не нужно)</div>
<br>
<span class='blue'>[Припев]</span><br>
Как твои дела (а-А-а-А-а)?<br>
Трубку не берё(о-О-о-О)шь!<br>
Я хочу тепла (а-А-а-А-а)!<br>
Но попадаю в блок,<br>
Снова попадаю в блок (э)<br>
  <div class='refren'>Как твои дела (а-А-а-А-а)?<br>
  Знаю наперё(о-О-о-О)д!<br>
  Я хочу тепла (а-А-а-А-а)!<br>
  Но попадаю в блок,<br>
  Сука, попадаю в блок (э)</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Плевать на эти чувства, оставь их умирать.<br>
Научились любить, разучились доверять.<br>
Хватит говорить, что мы остались друзьями,<br>
Ведь это же совсем не так!<br>
Я лучше буду искренне ненавидеть,<br>
Чем делать вид каждый раз, что опять рад тебя видеть.<br>
Мы договорились, что будем играть в прятки, <span class='blue'>(Строка Тк5цж)</span><br>
Но снова наберу - узнать, что ты в порядке!<br>
<br>
<span class='blue'>[Припев]</span><br>
Как твои дела (а-А-а-А-а)?<br>
Трубку не берё(о-О-о-О)ш!<br>
Я хочу тепла (а-А-а-А-а)!<br>
Но попадаю в блок,<br>
Снова попадаю в блок (э)<br>
  <div class='refren'>Как твои дела (а-А-а-А-а)?<br>
  Знаю наперё(о-О-о-О)т!<br>
  Я хочу тепла (а-А-а-А-а)!<br>
  Но попадаю в блок,<br>
  Сука, попадаю в блок (э)</div>
Попадаю в блок (эй)<br>
  <br>
<span class='blue'><a href='https://text-pesni.com/pesnya/pokazat/565691800/egor-ship/tekst-perevod-pesni-kak-tvoi-dela/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
