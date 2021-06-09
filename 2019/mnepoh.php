<?php
$title = 'Клава Кока & MORGENSHTERN - Мне пох (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ymC66795MNE'";
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

<span class='blue'>[Куплет 1: Клава Кока] Дк3мм - xaxa ccxc<br></span>
Скажи мне сладкую ложь,<br>
Скажи прямо в лицо!<br>
Скажи, что любишь меня!<br>
Но уже так все равно.<br>
<div class='refren'>
Нет времени объяснять,<br>
Меня цепляет твой взгляд,<br>
Но ты точно из тех, <br>
Кому нельзя доверять (Точно!)</div>
<br>
<span class='blue'>[Припев х2: Клава Кока] Тк2-6цм/? - aaXaaa<br></span>
Мне пох, пох!<br>
Тебя люблю, но веду себя так, будто мне пох, пох!<br>
Потому что я люблю тебя, слышишь!<br>
Мне пох, пох!<br>
Я люблю, я люблю, я люблю тебя, но мне пох, пох!<br>
Ах! Ох!<br>
<br>
<span class='blue'>[Куплет 2: MORGENSHTERN] Х3-5ж/? - aabbccxx<br></span>
Эй, не трогай руку, <br>
Я куплю твою подругу, <br>
Если захочу, поверь мне, детка!<br>
Я не дам те сердце, детка!<br>
Я не дам те душу, макси-<br>
мум что это деньги (м)!<br>
Может быть, чуть больше, если<br>
Ты это заслужишь, сучка!<br>
<div class='refren'>
  <span class='blue'>Х4ммжм? - aaXa<br></span>
Но в душе, в неглиже, <br>
Я - романтик Алишер!<br>
Я так верил в эту вашу,  <br>
Блять, любовь, а что теперь?  <br>
Я умней!</div>
  <span class='blue'>Л4ж/? - AAAx<br></span>
У меня: суки, деньги, тачки,<br>
У меня в сумке пачки, пачки!<br>
Девочка ночью громко плачет,<br>
Ну а мне, а мне пох!<br>
<br>
<span class='blue'>[Припев: Клава Кока]<br></span>
Мне пох, пох!<br>
Тебя люблю, но веду себя так, будто мне пох, пох!<br>
Потому что я люблю тебя, слышишь!<br>
Мне пох, пох!<br>
Я люблю, я люблю, я люблю тебя, но мне пох, пох!<br>
Ах! Ох!<br>
(Окей, не выключай!)<br>
<br>
<span class='blue'>[Бридж: MORGENSHTERN] Х4434жж? - ABAB<br></span>
Нет, нет, не слёзы детка! <br>
Ты же по-другому мокнешь (Ууу) <br>
Потанцуем, детка? <br>
Я же вижу, как ты смотришь (Взгляд) <br>
<div class='refren'>
Нет, не слёзы детка! <br>
Ты же по-другому мокнешь (Ууу) <br>
Потанцуем, детка? <br>
Я же вижу как ты смотришь (Потанцуем, детка?) <br>
 <br>
<span class='blue'>[Припев: Клава Кока] <br></span>
Мне пох, пох!<br>
Тебя люблю, но веду себя так, будто мне пох, пох!<br>
Потому что я люблю тебя, слышишь!<br>
Мне пох, пох! (Ууу)<br>
Я люблю, я люблю, я люблю тебя, но мне пох, пох!<br>
Ах! Ох!<br>
 <br>
Мне пох, пох! (Мне пох!)<br>
Ах! Ох! (Мне пох! Мне пох!)<br>
Мне пох, пох!<br>
Ах! Ох!<br>
Мне пох, пох! (Мне пох!)<br>
Ах! Ох! (Мне пох! Мне пох!)<br>
Мне пох, пох!<br>
Потому что я люблю тебя!<br>
 <br>
<span class='blue'>[Аутро: MORGENSHTERN]</span> <br>
Окей, эй, охуеть, вот это я классный! <br>
 (Охуеть, вот это я классный!) <br>
 <br>
<span class='blue'><a href='https://genius.com/Kiava-coca-and-morgenshtern-mne-poh-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
