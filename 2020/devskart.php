<?php
$title = 'Егор Крид - Девочка с картинки (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/lqYKkloAWMc'";
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

<span class='i'>
- Ну чо ты такой скучный? С тобой вообще неинтересно!<br>
- Ну, давай рассказывай, что ты любишь!<br>
- Ну, вообще, я люблю играть! Скажи "раз"!<br>
- Раз.<br>
- Скажи "два"!<br>
- Два.<br>
- Скажи "три"!<br>
- Три!<br>
<br>
- Какой же все-таки урод! Ты успел?
- Угу. Всё до последнего цента!.. Эй! Ты молодец!<br>
</span>
<br>
<span class='blue'>[Припев] Тк4цж/ - AAAA</span><br>
Эта девочка с картинки, <span class='blue'>(Строка Тк2ж)</span><br>
Мне так нравятся на волосах её резинки.<br>
Только не делите нас на половинки!<br>
Я люблю её, она любит вечеринки.<br>
(Моя девочка, эта девочка с картинки)<br>
<br>
<span class='blue'>[Куплет 1] Тк4-5цж/ - AAAA</span><br>
Какое нафиг платье, ей по душе спортивки (воу)<br>
Ты вышел с чата, ведь ты для неё - ошибка.<br>
Она уйдёт и в памяти оставит лишь обрывки.<br>
Зайдёт на party и там соберёт все сливки.<br>
<br>
<span class='blue'>[Переход] Тк2м/, Тк2ж/ - aaaa, AAAA</span><br>
Эта девочка топ (воу)<br>
Круче, чем Photoshop (да)<br>
В сердце пуля, как Glock (пиу)<br>
Ты для неё не готов (не-а)<br>
  <div class='refren'>Тебе в голову лезет (голову лезет)<br>
  Эти строки для песен (песен)<br>
  Она не рядом, да, бесит (бесит)<br>
  Но раз влюбился — добейся!</div>
<br>
<span class='blue'>[Припев]</span><br>
Эта девочка с картинки,<br>
Мне так нравятся на волосах её резинки.<br>
Только не делите нас на половинки!<br>
Я люблю её, она любит вечеринки.<br>
(Моя девочка...)<br>
  <div class='refren'>Эта девочка с картинки,<br>
  Мне так нравятся на волосах её резинки.<br>
  Только не делите нас на половинки!<br>
  Я люблю её, она любит вечеринки.<br>
  (Моя девочка, эта девочка с картинки).</div>
<br>
<span class='i'>
- Кто он?<br>
- Один из самых влиятельных ублюдков в этом городе. Незаконные финансовые махинации,
продажа пушек, трансферт порошка - короче, все дерьмо в городе проходит через него!<br>
- У него очень серьезная система безопасности!<br>
- У него есть одна слабость?<br>
- Какая?<br>
- Ты.<br>
</span>
<br>
(Девочка с картинки...)<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Какие нафиг туфли, ей по душе кроссовки!<br>
Ты не узнаешь, где её татуировки.<br>
Она уйдёт, ей так плевать на все твои уловки.<br>
Но я же знаю, что у нас будет в концовке.<br>
  <div class='refren'>
  <span class='blue'>Дк3ж/ - AAAA</span><br>
  Сладкая будто Nutella<br>
  Снимаю с неё Margiela, <br>
  Все внутри онемело.<br>
  <span class='blue'>Ан2м/ - aaaa</span><br>
  Эта бейби — мечта, <br>
  Ты такая одна,<br>
  Но в одном ты права - <br>
  Между нами провал.</div>
<br>
  <span class='blue'>[Переход]</span><br>
  Эта девочка топ (воу)<br>
  Круче, чем Photoshop (да)<br>
  В сердце пуля, как Glock (пиу)<br>
  Ты для неё не готов (не-а)<br>
    <div class='refren'>Тебе в голову лезет (голову лезет)<br>
    Эти строки для песен (песен)<br>
    Она не рядом, да, бесит (бесит)<br>
    Но раз влюбился — добейся!</div>
<br>
<span class='blue'>[Припев]</span><br>
Эта девочка с картинки,<br>
Мне так нравятся на волосах её резинки.<br>
Только не делите нас на половинки!<br>
Я люблю её, она любит вечеринки,<br>
(Моя девочка...)<br>
  <div class='refren'>Эта девочка с картинки,<br>
  Мне так нравятся на волосах её резинки.<br>
  Только не делите нас на половинки!<br>
  Я люблю её, она любит вечеринки.<br>
  (Моя девочка, эта девочка с картинки)</div>
<br>
<span class='i'>
- У него есть одна слабость!<br>
- Какая?<br>
- Ты.<br>
<br>
- Новая цель?<br>
- Угу.<br>
- А он ничо такой!<br>
- Слышь!<br>
</span>
<br>
<span class='blue'>[Припев]</span><br>
Эта девочка с картинки,<br>
Мне так нравятся на волосах её резинки.<br>
Только не делите нас на половинки!<br>
Я люблю её, она любит вечеринки,<br>
(Моя девочка...)<br>
  <div class='refren'>Эта девочка с картинки,<br>
  Мне так нравятся на волосах её резинки.<br>
  Только не делите нас на половинки!<br>
  Я люблю её, она любит вечеринки,<br>
  (Моя девочка, эта девочка с картинки)</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kreed/egor-kreed-devochka-s-kartinki.html#'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>