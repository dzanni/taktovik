<?php
$title = 'Даня Милохин - Лав (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xZCSMK-7IJM'";
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
[Фонограмма] <br>
Ты любишь клубы, а я крепкий кофе (кофе-кофе),<br>
И на любовь ты не против.<br>
И если я закрою своё сердце и свой профиль (профиль-профиль)<br>
Я снова всё испорчу.<br>
</span>
<br>
<span class='blue'>[Куплет 1] Дк34ц33мм? - abab </span><br>
Я — ты — никогда (никогда)<br>
Но этой фразы истёк срок.<br>
Если все слова — вода,<br>
То твои — это кипяток (ок).<br>
  <div class='refren'>
  <span class='blue'> Л434ц2ж/ - AAAA</span><br>
  Ты любишь клубы, а я крепкий кофе (кофе-кофе)<br>
  И на любовь ты не ответишь против.<br>
  И если я закрою своё сердце и свой профиль (профиль-профиль)<br>
  Я снова всё испорчу.</div>
<br>
<span class='blue'>[Припев] Тр4цмж - aBaB</span><br>
Эти слова нужно просто сказать.<br>
Вырвалось вслух, но ты не хотела.<br>
Не надо усилий, чтобы это принять.<br>
Надо решить, что с этим делать.<br>
  <div class='refren'>
  <span class='blue'>Л4цм/ - aaaa</span><br>
  Я тебя ла-а-а-а-ав!<br>
  Я тебя ла-а-а-а-ав!<br>
  Я тебя ла-а-а-а-ав!<br>
  И ты меня лав, ты меня лав!</div>
<br>
<span class='blue'>[Куплет 2] Л4ц32ж/жм? - AAbAAb</span><br>
Я под гитару пою тебе эту песню.<br>
Мы вместе падаем в бездну,<br>
Перевернула мой мир!<br>
Меня так бесит, что засыпаем не вместе,<br>
Ты ставишь нолик, я — крестик.<br>
И вместе мы полноценнЫ!<br>
  <div class='refren'>Ты в Louis, а я босиком по лужам (лужам-лужам)<br>
  Кроме друг друга нам никто не нужен.<br>
  И я совсем не болен, но, кажись, тобой простужен.<br>
  И мы больше, чем дружим.</div>
<br>
<span class='blue'>[Припев]</span><br>
Эти слова нужно просто сказать.<br>
Вырвалось вслух, но ты не хотела.<br>
Не надо усилий, чтобы это принять.<br>
Надо решить, что с этим делать.<br>
  <div class='refren'>Я тебя ла-а-а-а-ав!<br>
  Я тебя ла-а-а-а-ав!<br>
  Я тебя ла-а-а-а-ав!<br>
  И ты меня лав, ты меня лав!</div>
<br>
<span class='blue'>[Аутро]</span><br>
Ты меня лав!<br>
Ты меня лав!<br>
Ты меня лав!<br>
  <br>
<span class='blue'><a href='https://genius.com/Danya-milohin-love-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
