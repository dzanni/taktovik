<?php
$title = 'Slava Marlow - Снова я напиваюсь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/hQ71f7dFj6Y'";
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

<span class='blue'>[Куплет 1] Л4цм/? - aaaa</span><br>
А ты считаешь деньги в моём кошельке!<br>
И ты любишь только деньги, меня не совсем!<br>
И я вижу, как ты смотришь на этих людей,<br>
У кого есть своя яхта, тачка, бассейн!<br>
(А я? Что я? Что я?)<br>
<br>
<span class='blue'>[Припев] Тк5цм/ - aaaa</span><br>
Снова я напиваюсь, снова говорю «пока» (У)<br>
Мы несовместимы, у меня пустой карман.<br>
Снова я напиваюсь, снова говорю «пока».<br>
Мы с тобой не будем никогда, никогда, никогда!<br>
<br>
<span class='blue'>[Куплет 2] Дв13жж - ABAB</span><br>
Слушай, <br>
Я дам всё, что захочешь!<br>
Слушай, <br>
И, может, даже больше!<br>
Суммы, <br>
Проси любые суммы!<br>
Любишь, <br>
Надеюсь, меня любишь!<br>
  <div class='refren'>
  <span class='blue'>Л4цж/ - AAAA</span><br>
  Я, я, а-а (А-а), я давно всё понял (Ага)<br>
  Не нужен я, нужны деньги, тачки, пойло!<br>
  Будут деньки, обещаю, ты вернёшься,<br>
  И я влюблюсь, я влюблюсь в тебя по новой!</div>
<br>
<span class='blue'>[Припев]</span><br>
Снова я напиваюсь, снова говорю «пока» (У)<br>
Мы несовместимы, у меня пустой карман.<br>
Снова я напиваюсь, снова говорю «пока».<br>
Мы с тобой не будем никогда, никогда, никогда (У)<br>
  <div class='refren'>Никогда, никогда (У)<br>
  Никогда, никогда, никогда!</div>
  <br>
<span class='blue'><a href='https://genius.com/Slava-marlow-im-getting-drunk-again-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
