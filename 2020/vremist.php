<?php
$title = 'Время и Стекло - Время истекло (Навсегда/Никогда, слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/q0rflM0rQTI'";
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
- Что, что? Всё пишет, да?<br>
- Всё, тихо!<br>
- Звук выключим всем!<br>
- Теперь тихо, пока Ира...<br>
- Надя, Пазик, привет! Проходите в центр зала, пожалуйста!
Пазик, садитесь в центр лавочки! И... сейчас приготовьтесь к нечто прекрасному!
Люблю вас очень!<br>
- Три! Два! Один! Начали!<br>
<br>
[Пошло видео]<br>
- [Неразб.] "Время и Стекло"! "Время и Стекло"!<br>
[Позитив] Я переборол свой рэп-интеллект, поп-интеллект и стараюсь теперь...<br>
[Додо] Да, я, между прочим, рок до этого пыталась спеть, но сейчас мы все...<br>
[Позитив] Но мы нашли золотую середину музыки...
[Додо] Да!<br>
[Позитив] ...которую мы вместе илице... олицетворяем!<br></span>
<br>
<br>
<span class='blue'>[Припев, Позитив] Х4жм - Abbb</span><br>
Если я тебя забуду,<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
(То, наверно, навсегда!)<br>
<br>
<span class='blue'>[Куплет 1, Додо] Тк4цм/ж - aa, AA</span><br>
Никого не нужно держать насильно!<br>
Любовь обижала с тобой нас сильно!<br>
Бью по рулю, стою в пробке.<br>
Что делать теперь с татуировкой?<br>
<div class='refren'>
Каждый по приколу набил по слову,<br>
Поменялся смысл этих слов по-новой.<br>
На руке осталась у меня «Навсегда»<br>
Пальцы твои трут слово «Никогда».</div>
<br>
<span class='blue'>[Куплет 2, Позитив]</span><br>
Да, эти два слова всегда были рядом!<br>
Да, ты на руках оставляла помаду!<br>
Да, я обещал, что люблю навсегда!<br>
Что не расстанемся мы никогда!<br>
<div class='refren'>
Эти два слова теперь означают,<br>
Что навсегда мы не вместе, я знаю!<br>
Стираются буквы, проходят года,<br>
Но не забуду тебя я никогда!</div>
<br>
<span class='blue'>[Припев, Додо]</span><br>
Если я тебя забуду,<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
Если я тебя забуду,<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
<br>
<span class='blue'>[Припев, Позитив]</span><br>
Если я тебя забуду,<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
<br>
<span class='blue'>[Куплет 3, Додо] Х4жм - AbAb</span><br>
Если я тебя забуду,<br>
То, наверно, навсегда!<br>
Даже вспоминать не буду<br>
О тебе я никогда.<br>
<div class='refren'>
Я могла поверить в чудо,<br>
Только не произошло<br>
Больше вспоминать не буду.<br>
Все, что было, то прошло.</div>
<br>


<span class='blue'>[Куплет 4, Позитив] Тк2-4цм/ж - aa, AA</span><br>
Прошло, теперь все в прошлом,<br>
Ну почему же на душе так тошно<br>
Ну как так можно?<br>
По неосторожности.<br>
Теперь ее уж не спасти,<br>
Я столько потерял возможности.<br>
Прости, наверно, так будет лучше!<br>
Наша любовь - это несчастный случай!<br>
Дельфин любви поранился о гордости винты,<br>
И я смотрю на тату, я знаю - то же ты.<br>
Загрустила на балконе, где-то глядя на звезды,<br>
Уже так поздно меняться, уже слишком поздно!<br>
И тот звонок ночью ложный.<br>
И разговор утром сложный.<br>
И чтобы как-то подытожить у себя в голове,<br>
Я почему-то собираюсь и еду к тебе,<br>
Я не буду себе врать больше никогда,<br>
Я возвращаюсь к тебе теперь навсегда!<br>
<br>
<span class='blue'>[Припев, Додо и Позитив]</span><br>
Если я тебя забуду,<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
Если я тебя забуду,<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
То, наверно, навсегда!<br>
 <br>
 <span class='blue'><a href='https://www.gl5.ru/vremya-i-steklo-navsegda-nikogda.html'
   target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
