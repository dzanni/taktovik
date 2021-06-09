<?php
$title = 'Lida Lee ft. MONATIK - Достопримечательность (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/uYnrs2GU8X0'";
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

<span class='blue'>[Интро]</span><br>
Погнали, да? (ли-да, ли-да)<br>
Е!<br>
<br>
<span class='blue'>[Куплет 1] Тк2-3ж/ж - AAXBB AAXBB</span><br>
Необязательно искать причины,<br>
Надо подать мужчине <br>
Повод для начала,<br>
Пусть ходит и смотрит (е, е)<br>
Ходит и смотрит!<br>
  <div class='refren'>Пустая клубничная начинка<br>
  Правит вечеринкой <br>
  (Ты же это умеешь)<br>
  Пусть ходит и смотрит!<br>
  Ходит и смотрит!</div>
<br>
<span class='blue'>[Переход] Л2мж? - aBaB</span><br>
Безусловно, есть на что (е)<br>
Так что пусть ходит и смотрит (е, е)<br>
Ходит и смотрит (е, е)<br>
Безусловно, есть на что (е)<br>
Так что пусть ходит и смотрит (е, е)<br>
Ходит и смотрит (е, е)<br>
(Посмотри, смотри!)<br>
<br>
<span class='blue'>[Припев] Л1222ж/? - aAAA AAAA</span><br>
(А,а) Давай!<br>
Покажи ему, как надо,<br>
Мотивируй парня!<br>
(ау, ау, ау)<br>
(А, а) Пусть посмотрит и ахнет!<br>
Давай, да!<br>
Покажи ему, как надо,<br>
Мотивируй парня!<br>
(ау, ау, ау)<br>
Пусть посмотрит и хватит!<br>
<br>
<span class='blue'>[Куплет 2]  Тк2-4цм/ж - aaXaBB aaBB</span><br>
Каждый день <br>
Одна и та же game<br>
Он никогда не лепит, <br>
Больше мне не лей!<br>
Пусть ходит и смотрит (е, е)<br>
Ходит и смотрит (е, е)<br>
  <div class='refren'>Не стоит закрываться от людей,<br>
  Никто не сильно верит, что любовь сильней!<br>
  Пусть ходит и смотрит,<br>
  Ходит и смотрит!</div>
<br>
<span class='blue'>[Переход]</span><br>
Безусловно, есть на что (е)<br>
Так что пусть ходит и смотрит (е, е)<br>
Ходит и смотрит (е, е)<br>
Безусловно, есть на что (е)<br>
Так что пусть ходит и смотрит (е, е)<br>
Ходит и смотрит!<br>
<br>
<span class='blue'>[Интро]</span><br>
Погнали, да? (ли-да, ли-да)<br>
Е!<br>
<br>
<span class='blue'>[Куплет 3, Lida Lee и MONATIK] Тк22цмж? - aBAB</span><br>
(Ммм) Прямо глаз не оторвать (ау)<br>
Невозможно (не), невозможно (не)<br>
Прямо слепит, пока стелет танцы! <span class='blue'>(Строка Тк3ж)</span><br>
Осторожно (да), осторожно (да)<br>
<span class='blue'>Тк2-4цд/ж? - A'A'XA'bbA'bbA'A'A'</span><br>
Ты — достопримечательность!<br>
Невозможно не заметить - убедился окончательно!<br>
Невозможно оторваться, ведь то, что вижу —<br>
Ослепительно, замечательно (е)<br>
  <div class='refren'>Становится немного жарче!<br>
  Становится немного жарче!<br>
  (Чувствуешь?)<br>
  Невозможно оторваться - убедился окончательно!<br>
  Становится намного жарче!<br>
  Становится намного жарче!<br>
  Ты — достопримечательность!<br>
  (Ммм) Восхитительно, замечательно!<br>
  Замечательно! <span class='blue'>(Строка Тк1д)</span><br></div>
<br>
<span class='blue'>[Финал] Тр23жм - AbAb AbAb bbbb</span><br>
(Е, е)<br>
(Е, е)<br>
Ходит и смотрит<br>
На жаркие танцы твои.<br>
Ходит и смотрит (е, е)<br>
На жаркие танцы твои.<br>
Ходит и смотрит<br>
На жаркие танцы твои.<br>
Ходит и смотрит (е, е)<br>
На жаркие танцы (е, е) твои.<br>
(е)<br>
Ходит и смотрит!<br>
Ходит и смотрит!<br>
Ходит и смотрит (е)<br>
Мечтает и смотрит!<br>
  <br>
<span class='blue'><a href='https://pesnitext.ru/tekst-pesni-lida-lee-dostoprimechatelnost-ft-monatik-monatik/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
