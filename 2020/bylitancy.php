<?php
$title = 'Бьянка & Артур Бабич - Были танцы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kpnkCg57taI'";
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

<span class='blue'>[Припев х2: Бьянка, Артур Бабич] Х42мж - aaBaaBB</span><br>
Как на нашем на дворе, <br>
Ой, горели фонари.<br>
Были танцы (были танцы, были танцы)<br>
Под сиреневым кустом <br>
Танцевали всем двором.<br>
Были танцы (давай с нами) <br>
Всех качало (я качеля)<br>
<br>
<span class='blue'>[Куплет 1: Бьянка, Артур Бабич] Ак4цм/ - aa</span><br>
Думаешь, ты забываешь true Hip-Hop, но нет (Ап, оп)<br>
Такой контент я залила в ТикТок, ап, эп (Я здесь)<br>
  <div class='refren'>
  <span class='blue'>Х4жм - Xaxa, AbAb</span><br>
  Я такой иду проверить, <br>
  Шо за движ под фонарем,<br>
  И увидел вдруг тебя <span class='blue'>(Строка Х4м)</span><br>
  Под сиреневым кустом.</div>
Пацаны ваще осели, <br>
Говорят ты — круче всех.<br>
Я в шоках с твоих движений,<br>
Шо ты называешь тверк.<br>
  <div class='refren'>
  <span class='blue'>Х37цм/ - aaaaaa</span><br>
  Двигаешься так (так)<br>
  Что я сразу хат (хат)<br>
  Подожди подруга, посмотри на мой гопак (ап)<br>
  Золотой пиджак (у)<br>
  Парень нарасхват (ага)<br>
  Го махнемся, ты мне номер, я те лимонад!</div>
<br>
<span class='blue'>[Предприпев: Артур Бабич & Бьянка] Х43ж/жм? - XAxA</span><br>
Я сказал мамане с батей, <br>
Шоб не ждали рано:<br>
Танцевали R'n'B, <br>
Порвали два баяна! <span class='blue'>(Строка Я3ж)</span><br>
(Да прикол, ты шо не понял, чи шо? Ха-ха!)<br>
<br>
<span class='blue'>[Припев х2: Бьянка, Артур Бабич]</span><br>
Как на нашем на дворе, <br>
Ой, горели фонари.<br>
Были танцы (были танцы, были танцы)<br>
Под сиреневым кустом <br>
Танцевали всем двором.<br>
Были танцы (давай с нами) <br>
Всех качало (я качеля)<br>
<br>
<span class='blue'>[Куплет 2: Бьянка] Тк4цж/м - AAbb</span><br>
Один молодец, я его знаю,<br>
От его движений офигеваю!<br>
А мы с тобой будем топ-топ-топ-топ!<br>
Мы подаем ток, мы – топ! (а)<br>
<br>
<span class='blue'>[Предприпев: Артур Бабич & Бьянка]</span><br>
Я сказал мамане с батей, <br>
Шоб не ждали рано:<br>
Танцевали R'n'B, <br>
Порвали два баяна!<br>
<br>
<span class='blue'>[Припев х2: Бьянка, Артур Бабич]</span><br>
Как на нашем на дворе, <br>
Ой, горели фонари.<br>
Были танцы (были танцы, были танцы)<br>
Под сиреневым кустом <br>
Танцевали всем двором.<br>
Были танцы (давай с нами) <br>
Всех качало (я качеля)<br>
<br>
<span class='blue'>[Бридж: Бьянка] Х4ж/? - AAAA</span><br>
Были-были-были танцы!<br>
Были-были-были танцы!<br>
Были-были-были танцы!<br>
Были-были-были-были-были-были танцы! <span class='blue'>(Строка Х7цж)</span><br>
<br>
<span class='blue'>[Предприпев: Артур Бабич & Бьянка]</span><br>
Я сказал мамане с батей, <br>
Шоб не ждали рано:<br>
Танцевали R'n'B, <br>
Порвали два баяна!<br>
<br>
<span class='blue'>[Припев х2: Бьянка, Артур Бабич]</span><br>
Как на нашем на дворе, <br>
Ой, горели фонари.<br>
Были танцы (были танцы, были танцы)<br>
Под сиреневым кустом <br>
Танцевали всем двором.<br>
Были танцы (давай с нами) <br>
Всех качало (я качеля)<br>
<br>
<span class='blue'>[Аутро: Бьянка] Х4м/ - aa</span><br>
Вот и кончилась моя <br>
Песня развесёлаЯ!<br>

  <br>
<span class='blue'><a href='https://genius.com/Artur-babich-there-were-dances-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Фантазия на тему одноименной песни Бьянки 2006 года.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
