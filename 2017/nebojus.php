<?php
$title = 'Нюша - Не боюсь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/30Lq0ZEVPu0'";
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

<span class='blue'>[Куплет 1] Л46цжм, Л45цжм - AbAb<br></span>
Дай мне ладонь, я погадаю.<br>
Забудь про сон - это обманы для тебя.<br>
Твой прежний дом не допускает,<br>
Чтоб ты забыл, где была твоя Земля.<br>
<div class='refren'>Твои глаза всё открывают,<br>
Твоя печаль выдаёт твой страх.<br>
Зачем молвишь? Я и так знаю, -<br>
Твоё тепло подаёт мне знак.</div>
<br>
(Твоё тепло подаёт мне знак)<br>
(Твоё тепло подаёт мне знак)<br>
<br>
<span class='blue'>[Припев] Л21мж - aaBBB<br></span>
Я не боюсь! <br>
Я улыбнусь!<br>
И, знаешь,<br>
Я не боюсь, <br>
Если ты рядом, <br>
Я улыбаюсь!<br>
<div class='refren'>Я не боюсь! <br>
Я улыбнусь!<br>
И, знаешь,<br>
Я не боюсь -<br>
Знаю, ты рядом, <br>
Я улыбаюсь!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ты ждёшь ответ, я сомневаюсь.<br>
Как много лет ты убегаешь от себя.<br>
Не думай, я не испугаюсь, <br>
И свой секрет ты принес ко мне не зря.<br>
<div class='refren'>Там в небе пусть летают стаи.<br>
Здесь на земле убежать нет сил.<br>
Больше слёзы нас не спасают.<br>
Твоя печаль - это лишь твой мир.</div>
<br>
<span class='blue'>[Припев]<br></span>
Я не боюсь! <br>
Я улыбнусь!<br>
И, знаешь,<br>
Я не боюсь, <br>
Если ты рядом, <br>
Я улыбаюсь!<br>
<div class='refren'>Я не боюсь! <br>
Я улыбнусь!<br>
И, знаешь,<br>
Я не боюсь -<br>
Знаю, ты рядом, <br>
Я улыбаюсь!</div>
<br>
(Я улыбаюсь...)<br>
<br>
<span class='blue'>[Звукоподражания х8] Л3ж - AA<br></span>
Та-ка-та-ка тан-де-э<br>
<br>
<span class='blue'>[Припев]<br></span>
Я не боюсь! <br>
Я улыбнусь!<br>
И, знаешь,<br>
Я не боюсь, <br>
Если ты рядом, <br>
Я улыбаюсь!<br>
<div class='refren'>Я не боюсь! <br>
Я улыбнусь!<br>
И, знаешь,<br>
Я не боюсь -<br>
Знаю, ты рядом, <br>
Я улыбаюсь!</div>
<br>
Музыка: Нюша<br>
Слова: Нюша<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/nusha_ya_ne_bous.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. "Зачем мОлвишь", "я улыбаЮсь" - синкопы.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
