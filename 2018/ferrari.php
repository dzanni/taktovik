<?php
$title = 'Крёстная Семья feat. MEDUZA & Yanina Darya - Коплю на Феррари (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/S0l0GPsiI4E'";
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

(Коплю на «Феррари»...)<br>
<br>
<span class='blue'>[Переход] Тк4цм - AABB</span><br>
Все-все-все тачки опостылели мне!<br>
Нет-нет-нет, не надо больше мне «БМВ»!<br>
На-на-на «Порше» у меня не стоит,<br>
Только ты-ты-ты, ты как магнит!<br>
<br>
<span class='blue'>[Припев] Х3ж - A</span><br>
КОплю на «Феррари» («Феррари»! «Феррари»!)<br>
Коплю на «Феррари» (На «Феррари»!)<br>
Коплю на «Феррари» («Феррари»! «Феррари»!)<br>
Коплю на «Феррари»!<br>
<br>
<span class='blue'>[Куплет 1] Тк4ц3ж - AAAA</span><br>
Ты поймёшь однажды по моей счастливой харе:<br>
Детка, я купил себе «Феррари»! <br>
Детка, я купил себе «Феррари»!<br>
Буду пить неделю с пацанами в баре!<br>
<div class='refren'>
  <span class='blue'>Дк2жм - AAbb</span><br>
Круче «Бентли», круче «Ламба», <br>
По-любому one number!<br>
One life, one love, <br>
700 кобыл, 12 котлов,</div>

Малыш, это «Феррари», <br>
Эта детка рычит, как тигрёнок из стали!<br>
Малыш, это «Феррари», <br>
Жёлтая лошадь, made in Italy!<br>
<br>
<span class='blue'>[Переход]</span><br>
Все-все-все тачки опостылели мне!<br>
Нет-нет-нет, не надо больше мне «БМВ»!<br>
На-на-на «Порше» у меня не стоит,<br>
Только ты-ты-ты...<br>
<br>
<span class='i'>- Здравствуйте! Куда едем, папаша?<br>
- Доюрый день, Нижний Сусальный переулок, дом пять.<br>
- А, всё, понял! Погодка, конечно, не очень сёдня в Москве!
Я другого ожидал, когда приехал сюда с провинции! Часто у вас тут дожди-то [неразб.]...<br>
- Можно помолчать, а? Просто в тишине поедем!<br>
- А, жорошо!<br>
- Так, а может, музыку какую-то послушаем?<br>
- Музыка? А чо у иебя, какая есть там?<br>
- Ну, ты знаешь, я люблю только трушный рэпчик!<br>
- Ну, навали, чо там?!<br>
- Ну, давай!<br>
</span>
<br>
<span class='blue'>[Припев]</span><br>
Коплю на «Феррари» («Феррари»! «Феррари»!)<br>
Коплю на «Феррари» (На «Феррари»!)<br>
Коплю на «Феррари» («Феррари»! «Феррари»!)<br>
Коплю на «Феррари»!<br>
<br>
<span class='i'>
- Пахан! Отец!<br>
- Руку убрал!<br>
- Вставай, брат, приехали, приехали!
Как ты и просил - Нижний Сусальный переулок.<br>
- Кого-то ждет вознагражденьице!<br>
- Охо-хо-хо!<br>
- Налетай! Ха-ха-ха-ха-ха-ха! Копи на «Феррари»!<br>
</span>
<br>
<span class='blue'>[Припев]</span><br>
Коплю на «Феррари» («Феррари»! «Феррари»!)<br>
Коплю на «Феррари» (На «Феррари»!)<br>
Коплю на «Феррари» («Феррари»! «Феррари»!)<br>
Коплю на «Феррари»!<br>
<br>
<span class='blue'>[Куплет 1] Тк4цм/ж - aa, AA</span><br>
Под моим матрасом - 22 мульта.<br>
Не хватает трёшки, чтоб сбылась мечта.<br>
Перед сном тревожно, вокруг темнота,<br>
Как-никак под жопой 22 мульта!<br>
Биржа нестабильна, скачет, сука, евро!<br>
Новости не в радость, действуют на нервы!<br>
Дома ем консервы ради красной стервы!<br>
По-любому буду на «Феррари» первый!<br>
И налог на роскошь меня не пугает -<br>
Замучу «Феррари» я на бабу Раю!<br>
<br>
<span class='blue'>[Вставка] (Тк4цм - aa)</span><br>
Бабочки порхают внизу живота -<br>
Чувствую, близка, близка моя мечта!<br>
Бабочки порхают внизу живота -<br>
Чувствую, близка, близка моя мечта!<br>
Бабочки порхают внизу живота -<br>
Чувствую, близка, близка моя мечта!<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Коплю на «Феррари» («Феррари»! «Феррари»!)<br>
Коплю на «Феррари» (На «Феррари»!)<br>
Коплю на «Феррари» («Феррари»! «Феррари»!)<br>
Коплю на «Феррари»!<br>
<br>
<span class='blue'>[Аутро] Х4ж - A</span><br>
Я купил себе «Феррари»!<br>
Я купил себе «Феррари»!<br>
Я купил себе «Феррари»!<br>
Я купил себе «Феррари»! (А!)<br>
<br>
<span class='blue'><a href='https://learnsongs.ru/song/krestnaya-semya-koplyu-na-ferrari-80539'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Напоминает песенку Васи Обломова "Еду в Магадан".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
