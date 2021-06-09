<?php
$title = 'Вася Обломов - Запотело Мое Забрало (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/x70ljt-QGQc'";
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

<span class='blue'>[Куплет 1] Дк3жм, Дк3дм - AbAb, A'bA'b</span><br>
Запотело мое забрало,<br>
И устало я шел домой.<br>
Я в живот попал, а не в хлебало.<br>
Ты прости меня, боже мой!<br>
  <div class='refren'>Для меня ситуация шоковая.<br>
  Как и все, я нормально служил.<br>
  Но под камеру вдруг ненароком я<br>
  Сапогом тебя приложил.</div>
<br>
<span class='blue'>[Припев] Дк3дм, Дк3жм - X'bX'b, AbAb</span><br>
Жизнь вообще, сука, несправедливая.<br>
Там на видео – только я.<br>
Вот стою, извиняюсь, краснею я,<br>
И смеются мои друзья.<br>
  <div class='refren'>Лоханулся я без оговорок.<br>
  Потерплю, это мне по плечу.<br>
  Я на пенсию выйду в сорок,<br>
  Ну, и премию получу.</div>
<br>
<span class='blue'>[Куплет 2] </span><br>
В интернете писали злодеи,<br>
Обсуждали, что я мудак.<br>
Мы работаем, чтоб они сели<br>
И для каждого был автозак.<br>
<br>
Я клянусь тебе, тетка протестная,<br>
Я убил бы, если б хотел!<br>
Хризантемы принес, вот, прелестные.<br>
Не хотел я, я просто вспотел!<br>
<br>
<span class='blue'>[Припев] </span><br>
Жизнь вообще, сука, несправедливая.<br>
Там на видео – только я.<br>
Вот стою, извиняюсь, краснею я,<br>
И смеются мои друзья.<br>
  <div class='refren'>Лоханулся я без оговорок.<br>
  Потерплю, это мне по плечу.<br>
  Я на пенсию выйду в сорок,<br>
  Ну, и премию получу.</div>
  <br>
  <span class='blue'><a href='https://novayagazeta.ru/articles/2021/01/25/88877-zapotelo-moe-zabralo-premiera'
    target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Песня об эпизоде массовых акций протеста, прошедших в России 23 января 2021 г., после
ареста оппозиционера Алексея Навального. В Санкт-Петербурге полицейский пнул в живот
54-летнюю Маргариту Юдину, которая требовала отпустить задержанного. Та
ударилась головой о бордюр, потеряла сознание, ее отвезли в больницу, ночью положили в реанимацию.
Вечером 24 января ее отпустили домой. Полицейский не получил взысканий,
явился в больницу "просить извинений" и в оправдание солгал, что не видел Юдиной, так как у него
"запотело забрало". На видеозаписи его забрало в момент удара открыто. <br>
<br>
Рифма г=д: "шОковая" = "ненарОком я"<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
