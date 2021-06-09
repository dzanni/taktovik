<?php
$title = 'Время и Стекло - Back2Leto (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/M5K7I7UEQ7Q'";
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
<span class='blue'>[Интро]<br></span>
Back to Leto! Back to reality!<br>
<br>
<span class='blue'>[Припев: Додо] Х6цу1ж - AAAA<br></span>
Отыскать любовь - смысл главный самый!<br>
(Summer! Summer!) У-е! <br>
Мы ныряем вновь между небесами!<br>
 (Summer! Summer!) У-у!<br>
Пусть несет она нас под парусами!<br>
(Summer! Summer!)<br>
Отыскать любовь - смысл главный самый!<br>
(Summer! Summer!)<br>
<br>
<span class='blue'>[Куплет 1: Позитив] Л32м - aaaaa<br></span>
Ответ:<br>
Сколько лето люблю я лет?<br>
Столько я люблю белый цвет.<br>
Надеваю те пару кед,<br>
Я теплом согрет,<br>
Я оставлю след.<br>
<br>
<span class='blue'>[Форма 1: Позитив] Х4м? - aabb<br></span>
В памяти и на песке,<br>
В твоем сердце и душе<br>
Ты найдешь один ответ – <br>
(Я оставлю включённым свет!) <span class='blue'>(Строка Л3м)</span><br>
<br>
<span class='blue'>[Форма 2: Додо] Тр24ц//3ж - AAAA<br></span>
Мы ищем в чем смысл,<br>
Наши следы на песке смоют брызги.<br>
Зачем же мы дышим? <br>
Почему мы тебя не услышим?<br>
<br>
<span class='blue'>[Куплет 2: Додо & Позитив] Тк12м - aaaa<br></span>
Summer night <br>
Буду вспоминать,<br>
Полной памятью нырять,<br>
All right!<br>
<div class='refren'>
<span class='blue'>Тк3д - A'A'<br></span>
Любовью часто делала fatality,<br>
Но Back to Leto! Back to reality!</div>
<br>
<span class='blue'>[Припев]<br></span>
Отыскать любовь - смысл главный самый! <br>
(Summer! Summer!) У-е! <br>
Мы ныряем вновь между небесами! <br>
(Summer! Summer!) У-у!<br>
Пусть несет она нас под парусами!<br>
 (Summer! Summer!)<br>
Отыскать любовь - смысл главный самый! <br>
(Summer! Summer!)<br>
<br>
О-о-о, у-О-о, О-у-о!<br>
(Summer!)<br>
Ы-о-о, у-А-о, Э-э-э, Э-э-э-э!<br>
О-о-о, у-О-о, О-у-о!<br>
Ы-о-о, у-А-о...<br>
(Summer!)<br>
<br>
<span class='blue'>[Форма 2: Додо]<br></span>
Мы ищем в чем смысл,<br>
Наши следы на песке смоют брызги.<br>
Зачем же мы дышим? <br>
Почему мы тебя не услышим?<br>
<br>
<span class='blue'>[Форма 1: Позитив]<br></span>
В памяти и на песке,<br>
В твоем сердце и душе<br>
Ты найдешь один ответ – <br>
(Лето было, или нет?)<br>
<br>
<span class='blue'>[Куплет 3: Додо & Позитив]<br></span>
Закрываются уже<br>
Рестораны и кафе.<br>
<div class='refren'>
Но куда ведет ночь, вы знаете!<br>
Back to Leto! Back to reality!</div>
<br>
<span class='blue'>[Припев: Додо]<br></span>
Отыскать любовь - смысл главный самый!  <br>
(Summer! Summer!) У-е! <br>
Мы ныряем вновь между небесами! <br>
 (Summer! Summer!) У-у!<br>
Пусть несет она нас под парусами!  <br>
(Summer! Summer!)<br>
Отыскать любовь - смысл главный самый!  <br>
(Summer! Summer!)<br>
<br>
О-о-о, у-О-о, О-у-о!<br>
(Summer!)<br>
Ы-о-о, у-А-о, Э-э-э, Э-э-э-э!<br>
О-о-о, у-О-о, О-у-о!<br>
(Summer!)<br>
Ы-о-о, у-А-о...<br>
<br>
<span class='blue'>[Аутро]<br></span>
Back to Leto! Back to reality!<br>
<br>
Музыка: Алексей Потапенко, Алексей Загородный<br>
Слова: Алексей Потапенко<br>
<br>
<span class='blue'>Неизвестный источник<br></span>
<br>
<br>
N.B. "Куплетами" мы назвали не повторяющиеся фрагменты. "Куплет 3" составлен
из поэтических размеров, уже использованных в других фрагментах (Х4м и Тк3д).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
