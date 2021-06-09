<?php
$title = 'Антон Беляев - Лететь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/eWc4voqmgcY'";
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

<span class='i'>- Мам, лед трещит!<br>
- Он с тобой разговаривает: «У тебя всё получится. Кхх-пу!»<br>
</span>
<br>
<span class='blue'>[Куплет 1] Л3м - abab<br></span>
Однажды он сказал:<br>
«Твой полёт - всего лишь сон», -<br>
И ты летать не стал,<br>
Стал таким, как он.<br>
И по земле ходить <br>
Научился, как ребенок ты,<br>
Но всё не мог забыть <br>
Той прозрачной высоты.<br>
<br>
<span class='blue'>[Припев] Л3жм - AAbCCb<br></span>
И лететь по белому свету,<br>
Став одним движением ветра.<br>
[Проигрыш]<br>
И не думать, как приземлиться,<br>
А у птиц свободе учиться,<br>
(Оставив всё то, что жаль).<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Однажды ты привык<br>
И почти не стал летать,<br>
Но только чей-то крик<br>
Вдруг позвал летать.<br>
И поднял ты глаза<br>
В высоту, где голоса плывут -<br>
Там люди в небесах<br>
Тебя с собой зовут.<br>
<br>
<span class='blue'>[Припев]<br></span>
(На-на-на-на, на-на-на-на-на.<br>
На-на-на-на, на-на-на-на-на.<br>
Лететь, куда-то вдаль).<br>
<br>
<span class='i'>- Что с нами будет?<br>
- Я с тобой буду!<br></span>
<br>
(На-на-на-на, на-на-на-на-на)<br>
<br>
<span class='i'>- Отпусти и не держи!<br></span>
<br>
(На-на-на-на, на-на-на-на-на)<br>
<br>
<span class='i'>- Хочешь быть чемпионкой - будешь!<br>
- Я счастливой хочу быть!<br></span>
<br>
И лететь по белому свету,<br>
Став одним движением ветра.<br>
(Лететь куда-то вдаль).<br>
И не думать, как приземлиться,<br>
А у птиц свободе учиться,<br>
(Оставив всё то, что жаль).<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/t/therr-maitz/anton-belyaev-letet.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
Песня из одноименного альбома группы «Амега» (1999).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
