<?php
$title = 'Burito, Black Cupro & Dj Groove - Помоги (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/-NJSNltm_7U'";
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

<span class='blue'>[Куплет 1, Burito] Дк4цм? - aabb<br></span>
Когда мир цветотени ко мне слишком жесток,<br>
Я следы утешений ищу между строк.<br>
Я срываюсь и падаю, поднимаюсь и жду.<br>
Боже, как это сложно – верить в мечту!<br>
<br>
<span class='blue'>[Переход, Burito]  Дк4цм? - aabb<br></span>
С каждым новым шагом станут ближе дни,<br>
Когда ты услышишь молитвы мои.<br>
Я становлюсь сильнее день ото дня.<br>
Боже, если не сложно, не оставь менЯ!<br>
<br>
<span class='blue'>[Припев х2, Burito] Л3ж - AAAA<br></span>
Помоги мне, помо- помоги мне!<br>
Пусть за нами наши тени смоют ливни!<br>
Друг без друга мы с тобой чуть не погибли,<br>
Помоги мне, помо-помоги мне!<br>
<br>
<span class='blue'>[Куплет 2, Burito]<br></span>
В засыпающем мире мое сердце не спит.<br>
В суете серых ливней каждый будет забыт.<br>
Но даже ради секунды, вспышкой во тьме<br>
Я, сколько смогу, буду петь о тебе.<br>
<br>
<span class='blue'>[Переход, Burito]<br></span>
С каждым новым шагом станут ближе дни,<br>
Когда ты услышишь молитвы мои.<br>
Я становлюсь сильнее день ото дня.<br>
Боже, если не сложно, не оставь меня!<br>
<br>
<span class='blue'>[Припев х2, Burito]<br></span>
Помоги мне, помо- помоги мне!<br>
Пусть за нами наши тени смоют ливни!<br>
Друг без друга мы с тобой чуть не погибли,<br>
Помоги мне, помо-помоги мне!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Не оставляй меня! Только не оставляй!<br>
Не оставляй меня! Только не оставляй!<br>
Боже, если не сложно, не оставь меня!<br>
<br>
<span class='blue'>[Припев, Burito]<br></span>
Помоги мне, помо- помоги мне!<br>
Пусть за нами наши тени смоют ливни!<br>
Друг без друга мы с тобой чуть не погибли,<br>
Помоги мне, помо-помоги мне!<br>
<br>
Помоги мне, помо- помоги мне!<br>
Боже, если не сложно, не оставь меня!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/b/burito/burito-pomogi-black-cupro-dj-groove.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Песня сложена преимущественно дольниками с отклонениямим в тактовик в некоторых анакрузах
(то есть, говоря по-русски, в начале строк).
В куплетах эти дольники стремятся к трехсложнику с нестабильными цезурным наращением и усечением.
Припев теоретически можно представить как Х56ж, но исполняется он как Л3ж -
по 3 акцента в каждой строке. 
<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
