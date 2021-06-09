<?php
$title = 'Вера Брежнева - Ты мой человек (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xFQAcEcSJqY'";
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

<span class='blue'>[Куплет 1] Ам23жм, Дв5цж/д - AbCAbC, A'A'B'B', A'A'BB<br></span>
По берегу моря <br>
Мы шли, понимая без слов<br>
Весь мир и друг друга.<br>
И осень не скоро,<br>
И солнце ещё не зашло,<br>
И мысли по кругу<br>
<div class='refren'>О том, что мы с тобою - одно единое <br>
Целое отныне и неделимое,<br>
Что никогда уже мы не будем прежними<br>
Я тебе сказала нежно, нежно.</div>
<br>
<span class='blue'>[Припев] Дк4цдм? - A'A'bb, A'A'<br></span>
Убереги меня от обмана,<br>
Не закрывай мою душу туманами,<br>
Тогда и я с тобой навек,<br>
Ты — судьба, ты мой человек!<br>
<div class='refren'>Убереги меня от обмана,<br>
Не закрывай мою душу туманами,<br>
Тогда и я с тобой навек,<br>
Ты — судьба, ты мой человек!</div>
Любимый человек!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
По берегу моря<br>
Мы шли словно тысячу лет.<br>
Искали друг друга,<br>
Как будто нас двое<br>
На этой огромной Земле.<br>
И мысли по кругу<br>
<div class='refren'>О том, что мы с тобою - одно единое <br>
Целое отныне и неделимое.<br>
О том, что это время мы не забудем,<br>
Что счастье есть, а дальше - будь что будет.<br>
<br>
<span class='blue'>[Припев]<br></span>
Убереги меня от обмана,<br>
Не закрывай мою душу туманами,<br>
Тогда и я с тобой навек,<br>
Ты — судьба, ты мой человек!<br>
<div class='refren'>Убереги меня от обмана,<br>
Не закрывай мою душу туманами,<br>
Тогда и я с тобой навек,<br>
Ты — судьба, ты мой человек!</div>
Любимый человек!<br>
Ты мой человек!<br>
Любимый человек!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
И теплые волны,<br>
Стирая следы на песке,<br>
Вдруг стихли, ты помнишь,<br>
Мне не было лучше<br>
Нигде, никогда и ни с кем,<br>
Прошу об одном лишь:<br>
<br>
<span class='blue'>[Припев]<br></span>
Убереги меня от обмана,<br>
Не закрывай мою душу туманами!<br>
Тогда и я с тобой навек,<br>
Ты — судьба, ты мой человек!<br>
<div class='refren'>Убереги меня от обмана,<br>
Не закрывай мою душу туманами<br>
Тогда и я с тобой навек.<br>
Ты — судьба!</div>
Убереги меня от обмана,<br>
Не закрывай мою душу туманами,<br>
Тогда и я с тобой навек<br>
Ты — судьба, ты мой человек!<br>
<div class='refren'>Убереги меня от обмана,<br>
Не закрывай мою душу туманами<br>
Тогда и я с тобой навек,<br>
Ты — судьба, ты мой человек!</div>
<br>
Ты позови меня по имени,<br>
Я приду красивая, я сильная<br>
Любимый человек!<br>
Ты позови меня по имени,<br>
Я приду красивая, я сильная!<br>
Любимый человек!<br>
Ты позови меня по имени,<br>
Я приду красивая, я сильная!<br>
<br>
Музыка: Константин Меладзе<br>
Слова: Константин Меладзе<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/v1/brezhneva/9816-vera-brezhneva-ti-moj-chelovek-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
