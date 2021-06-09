<?php
$title = 'MONATIK & Надя Дорофеева -  Глубоко... (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/j6-Bh-ID8qE'";
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

<span class='blue'>[Форма1: Надя Дорофеева] Тк2ж? - AABB'<br></span>
Я вижу опасность, <br>
И это прекрасно, <br>
Иначе было бы скучно, <br>
Начинай, мучь меня! <br>
<div class='refren'>
<span class='blue'>[MONATIK & Надя Дорофеева]<br></span>
Я вижу опасность, <br>
И это прекрасно, <br>
Иначе было бы скучно, <br>
Начинай, мучь меня! </div>
<br>
<span class='blue'>[Форма 2: MONATIK] Дк1-3 - aA''AaA'' xaaAA<br></span>
Я дружу с головой <br>
Вроде бы!<br>
Все хорошо, но... <br>
(Все хорошо, но...) <br>
Все хорошо, но, стой... <br>
Где-то покОя нет! <br>
<span class='blue'>[Надя Дорофеева]<br></span>
Трамваи молчат... <br>
Им дышать уже очень поздно...<br>
Да, очень поздно! <br>
А мы не знакОмы, нет... <br>
<span class='blue'>[MONATIK]<br></span>
Да мы незнакОмы, но... <br>
<br>
<span class='blue'>[Форма 1: MONATIK]<br></span>
Я же вижу, ты опасна, <br>
И это прекрасно, <br>
Иначе было бы скучно, <br>
Начинай, мучь меня! <br>
<div class='refren'>
<span class='blue'>[Надя Дорофеева]<br></span>
Я же вижу, ты опасен, <br>
И это напрасно!<br>
Абсолютно напрасно!</div>
<br>
<span class='blue'>[Форма 3: Надя Дорофеева] Дк32мж<br></span>
Ведь мне глубоко... <br>
Глубоко... <br>
Глубоко в твоих глазах <br>
Мне все так знакомо. <br>
Глубоко в твоих глазах... <br>
<span class='blue'>[MONATIK]<br></span>
Я вижу опасность, <br>
И это прекрасно, <br>
Все, что ты захочешь,<br>
Буду только за! <br>
<span class='blue'>[Надя Дорофеева]<br></span>
Глубоко в твоих глазах<br>
Вижу невесомость. <br>
Глубоко в твоих глазах... <br>
<br>
<span class='blue'>[Форма 1: MONATIK & Надя Дорофеева]<br></span>
Вижу опасность,<br>
И это прекрасно, <br>
Иначе было бы скучно, <br>
Начинай, мучь меня! <br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'>[Форма 4: Надя Дорофеева] Тк2-4ц - aXaaBC'C'B<br></span>
Глубоко в твои глаза хочу лететь <br>
Мне, наверно, станет спокойней! <br>
(Станет спокойней...) <br>
Станет спокойней ей. <br>
<span class='blue'>[MONATIK]<br></span>
Да, так опасно тебя хотеть <br>
И без тебя остаться опасно <br>
Гордая, яркая. <br>
Гордо я, ярко я, <br>
Города да данса... <br>
<br>
<span class='blue'>[Форма 1: MONATIK]<br></span>
Я же вижу, ты опасна, <br>
И это прекрасно, <br>
Иначе было бы скучно, <br>
Начинай, мучь меня! <br>
<div class='refren'>
<span class='blue'>[Надя Дорофеева]<br></span>
Я же вижу, ты опасен, <br>
И это напрасно! <br>
Абсолютно напрасно! </div>
<br>
<span class='blue'>[Форма 3: Надя Дорофеева]<br></span>
Ведь я глубоко в твоих глазах <span class='blue'>(Строка Дк4цм)<br></span>
Вижу невесомость, <br>
Глубоко в твоих глазах <br>
<span class='blue'>[MONATIK]<br></span>
Я вижу опасность, <br>
И это прекрасно, <br>
Все что, ты захочешь,<br>
Буду только за. <br>
Глубоко в твоих глазах <br>
Мне все так знакомо. <br>
Глубоко в твоих глазах... <br>
<br>
<span class='blue'>[Форма 1: MONATIK & Надя Дорофеева]<br></span>
Я вижу опасность, <br>
И это прекрасно, <br>
Иначе было бы скучно,<br>
Начинай! <br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
(Начинай! Начинай! Начинай!)<br>
<br>
<span class='blue'>[Форма 4, x2: MONATIK] AAbb<br></span>
Ты опасна, это безусловно! <br>
[Надя Дорофеева]<br>
Сегодня я русалка, я создаю волны! <br></span>
<span class='blue'>[MONATIK]<br></span>
И волнуешь меня! <br>
<span class='blue'>[Надя Дорофеева]<br></span>
И волную тебя! <br>
<br>
<span class='blue'>[Надя Дорофеева]<br></span>
Сегодня я русалка, я создаю волны! <br>
(Ты так волнуешь меня!) <br>
Сегодня я русалка, я создаю волны! <br>
(Так глубоко...) <br>
(Ты волнуешь меня!) <br>
(Так глубоко...) <br>
Сегодня я русалка, я создаю волны! <br>
(Так глубоко...) <br>
(Ты волнуешь меня!) <br>
(Так глубоко...) <br>
Сегодня я русалка, я создаю волны! <br>
(Волны, волны...)<br>
(Так глубоко...) <br>
(Ты волнуешь меня!) <br>
(Так глубоко...) <br>
Сегодня я русалка, я создаю волны! <br>
(Волны...)<br>
(Так глубоко...) <br>
<br>
Слова и музыка: Dmitriy Monatik<br>
<br>
<span class='blue'>Источник: текст под клипом Youtube</span><br>
<br>
<br>
N.B. д=ж: "скУчно" - "мУчь меня", "очень пОздно" - "незнакОмы, но". <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
