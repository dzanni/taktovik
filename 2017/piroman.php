<?php
$title = 'Хаски - Пироман 17 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/28U4DB6UuyA'";
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

<span class='blue'>[Куплет 1] Тк4цм/ж/д - aa, AA, A'A'<br></span>
Все мы в конечном счете удобренья.<br>
Ты равнодушен к людям был – но поможешь растеньям (uh)<br>
Пальцем по кремню – непреложная кара!<br>
Я по тебе скорблю, ничтожный опарыш!<br>
Мне бросит вслед больная паства диагноз,<br>
Но я столь же сатана, сколь ты – агнец (столь же сатана, сколь ты – агнец)<br>
Вы все мертвы, я жив. К горлу подкатит желчь. <span class='blue'>(Строка Тк6цм)</span><br>
Запись в блокноте: «Обезглавить, обоссать и сжечь». <span class='blue'>(Строка Тк5цм)</span><br>
(Обоссать и сжечь!)<br>
<br>
<span class='blue'>[Пред-припев] Х4м/ - aaa<br></span>
Ave, ave, пироман (м-м-м-м)<br>
Ave, ave, пироман (м-м-м-м)<br>
Ave, ave, пироман (м-м-м-м)<br>
<br>
<span class='blue'>[Припев] Тк65цм/ - aa<br></span>
Ave, ave, обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
Обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
Обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
Обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Мне снятся ядерные зимы, сорок пятый, Хиросима.<br>
Вы замерзли – я купил на всю зарплату керосина,<br>
Чтоб зажечь вас, но вы тлеете у мониторов,<br>
В хибарах арендованных делите коридоры.<br>
Мой маршрут обозначит дыма черный исполин.<br>
Ты дрочил на свою падчерицу, я тебя спалил!<br>
Тело съежилось и потемнело, словно жухлый лист.<br>
Жгу на бис. Надо мною Бог, как гонзо-журналист.<br>
<br>
<span class='blue'>[Пред-припев]<br></span>
Ave, ave, пироман (м-м-м-м)<br>
Ave, ave, пироман (м-м-м-м)<br>
Ave, ave, пироман (м-м-м-м)<br>
<br>
<span class='blue'>[Припев]<br></span>
Ave, ave, обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
Обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
Обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
Обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Дым садится на хвост, а я удираю,<br>
Вокруг благоухает ненавистный мне террариум.<br>
Вагон метро, подъезды - и вниз под одеяло,<br>
Сном младенца захлебнусь в пучине чистых идеалов (угу)<br>
Завтра зеваки толпами повалят в то кафе,<br>
Где я за завтраком усну навеки – аутодафе!<br>
Моя страна – бухой ребенок, наблевавший в варежку,<br>
Ей холодно в снегу, и я бензином обливаясь, жгу!<br>
<br>
<span class='blue'>[Пред-припев]<br></span>
Ave, ave, пироман (м-м-м-м)<br>
Ave, ave, пироман (м-м-м-м)<br>
Ave, ave, пироман (м-м-м-м)<br>
<br>
<span class='blue'>[Припев]<br></span>
Ave, ave, я бензином обливаюсь, жгу, обливаюсь, жгу!<br>
Я бензином обливаюсь, жгу, обливаюсь, жгу!<br>
Обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
Обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Обезглавить, обоссать и сжечь, обоссать и сжечь!<br>
<br>
<span class='blue'><a href="https://genius.com/Husky-17-pyromaniac-17-lyrics"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Рифма д=ж (либо трактовка "иу" как дифтонга "йу"): "удирАю - террАриум".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
