<?php
$title = 'Элджей - Suzuki (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/_kO3bR7q7pk'";
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

Sayonara Boy, сучка!<br>
Sayonara Boy!<br>
<br>
<span class='blue'>[Интро х2] Дк23ж? - AAA<br></span>
Мы летим на Suzuki<br>
Быстрее скорости звука.<br>
Я чувствую твою руку, сука (сука)<br>
<br>
<span class='blue'>[Куплет 1] Тк64цжм - AAbb<br></span>
Я умею делать бабки, не барыжа травкой как в шестнадцать!<br>
Мои мама с батей и братва мною давно гордятся.<br>
Мне не надо представляться, когда я вхожу.<br>
Делать вид, что я вам рад и всеми вами дорожу (мне похуй!)<br>
<br>
<span class='blue'>[Припев] Тк4цм - AA<br></span>
Эй, биомусор, как тебе туса?<br>
Я просто прививаю таким, как ты, чувство вкуса!<br>
Эй, биомусор (биомусор), как тебе туса?<br>
Я просто прививаю таким, как ты, чувство вкуса!<br>
Эй-эй-эй-эй-эй, как тебе туса?<br>
Я просто прививаю таким, как ты, чувство вкуса!<br>
Эй-эй-эй-эй-эй, как тебе туса?<br>
Я просто прививаю таким, как ты, чувство вкуса!<br>
<br>
<span class='blue'>[Куплет 2] Тк6цж? - AA<br></span>
Ненавижу мудаков, что снимают исподтишка в Kentucky Fried Chicken!<br>
Журналисты, со своими вопросами на хуй идите (на хуй илите!) <span class='blue'>(Строка Тк5цж)<br></span>
Не хочу быть народным артистом, я убийца закрытой тусовки (ага)<br>
Со мною модели, актрисы, лимитированные кроссовки.<br>
Первый снег мой любимый, красный цвет «Ламборджини» такой красивый!<br>
Японские телочки ставят меня на обои своей мобилы.<br>
Я пью свежевыжатый сок, мне скоро двадцать четыре!<br>
Двадцать четыре, двадцать четыре! <span class='blue'>(Строка Тк4цж)<br></span>
<br>
<span class='blue'>[Интро]<br></span>
Мы летим на Suzuki<br>
Быстрее скорости звука<br>
Я чувствую твою руку, сука (сука)<br>
Мы летим на Suzuki<br>
Быстрее скорости звука<br>
Я чувствую твою руку, сука (сука, сука, сука)<br>
<br>
<span class='blue'>[Припев]<br></span>
Эй, биомусор, как тебе туса?<br>
Я просто прививаю таким, как ты, чувство вкуса!<br>
Эй, биомусор, как тебе туса?<br>
Я просто прививаю таким, как ты, чувство вкуса!<br>
Эй-эй-эй-эй-эй, как тебе туса?<br>
Я просто прививаю таким, как ты, чувство вкуса!<br>
Эй-эй-эй-эй-эй, как тебе туса?<br>
Я просто прививаю таким, как ты, чувство вкуса!<br>
<br>
Уа! Уа!<br>
Sayonara Boy!<br>
Sayonara Boy!<br>
Sayonara Boy, сука!<br>
<br>
<span class='blue'><a href='https://genius.com/Allj-suzuki-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
