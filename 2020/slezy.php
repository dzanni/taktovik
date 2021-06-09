<?php
$title = 'Анет Сай - Слезы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/6OXzSTKI3eM'";
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
<span class='blue'>[Припев] Тк4цмм - abab</span><br>
Если бы слёзы твои были водой,<br>
Ты бы уже напоила ею весь мир.<br>
Милая, но в жизни есть не только боль!<br>
Сможешь засиять ещё ярче звезды.<br>
  <div class='refren'>Если бы слёзы твои были водой,<br>
  Ты бы уже напоила ею весь мир.<br>
  Но ведь не всегда жизнь бывает такой,<br>
  Давай, выбирайся из этой дыры!</div>
<br>

<span class='blue'>[Куплет 1] Тк4цж/ж, Тк4цд/ж - AABB, A'A'BB</span><br>
В твоем мире всё окутано пылью,<br>
Не растут цветы, хоть раньше и были.<br>
Время ведь идёт, а твоя жизнь всё хуже.<br>
И не к кому прислониться душой об душу.<br>
  <div class='refren'>И чувство, будто ты во всём мире лишний.<br>
  Плохо уже так, аж хочется скрыться!<br>
  Я это сама не понаслышке знаю<br>
  Но знаю, кто погас - потом лишь сияет.</div>
<br>
<span class='blue'>[Припев]</span><br>
Если бы слёзы твои были водой,<br>
Ты бы уже напоила ею весь мир.<br>
Милая, но в жизни есть не только боль!<br>
Сможешь засиять ещё ярче звезды.<br>
  <div class='refren'>Если бы слёзы твои были водой,<br>
  Ты бы уже напоила ею весь мир.<br>
  Но ведь не всегда жизнь бывает такой,<br>
  Давай, выбирайся из этой дыры!</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Солнце, говорят, светит всем одинаково,<br>
Но будто бы лучей не хватает лишь нА тебя.<br>
Где же этот Бог? Ты смотришь в оконце,<br>
И вдруг на тебя выходит солнце.<br>
  <div class='refren'>Говорит тебе: "Смотри, не сдавайся!<br>
  Докажи себе, что можешь иначе!<br>
  Что не убивает - делает сильнее,<br>
  Милая, пришло твоё светлое время!"</div>
<br>
<span class='blue'>[Припев]</span><br>
Если бы слёзы твои были водой,<br>
Ты бы уже напоила ею весь мир.<br>
Милая, но в жизни есть не только боль!<br>
Сможешь засиять ещё ярче звезды.<br>
  <div class='refren'>Если бы слёзы твои были водой,<br>
  Ты бы уже напоила ею весь мир.<br>
  Но ведь не всегда жизнь бывает такой,<br>
  Девочка, ты рождена для любви!</div>
<br>
Музыка и слова: Аня Сайдалиева (Анет Сай)<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/a/anet-sai/anet-sai-slezi.html'
  target='_blank'>Источник</a></span><br>
  <br>
    <br>
  P.S. OST "Пацанки".<br>
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
