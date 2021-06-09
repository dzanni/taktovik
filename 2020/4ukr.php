<?php
$title = 'MORGENSHTERN - Четыре украинки (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/WJHWMz60b54'";
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

<span class='blue'>[Интро] Х2ж/ - AAA</span><br>
<span class='i'>- Слава, что ты сделал?<br></span>
(Few! Few!) Это party!<br>
(Few! Few!) Мне не хватит!<br>
(Few! Few!) Это party!<br>
(Ву-у) е, ей, е-е-е, окей! (Строка Тк4цм)<br>
<br>
<span class='blue'>[Припев] Х4ж/ - AAAA</span><br>
(Few!) Да, my life — это картинки (Реп, е!)<br>
(Few!) Тут четыре украинки (Е-е-е!)<br>
Е, детки-ягоды-малинки (Муа! Е!)<br>
(Few! Few!) Все они — мои любимки (Мои, е!)<br>
<span class='blue'>Х4м/ - aaaa</span><br>
Мы на яхте — это pa (Это party, е!)<br>
Сыпь ещё, да, мне не хва (Мне не хватит!)<br>
Е, ночью мы не будем спать (Не, не будем!)<br>
Е, называют меня папой (Daddy) <span class='blue'>(Строка Х4ж)</span><br>
<br>
<span class='blue'>[Куплет] Х3м/ - aaaa aaaa</span><br>
Лёг у её ног, <br>
Эта детка — бог (Бог)<br>
Целовал её, <br>
Это не порок (Нет)<br>
Детка, я влюблён, <br>
Нет, это не ложь (Не!)<br>
Не беру её, <br>
Если не любовь (Не!)<br>
  <span class='blue'>Х7цж/ - AAAA</span><br>
  Да мы катим-катим-катим, прыгнули на катер (Окей)<br>
  Ща мы будем плавать, вечером пойдём на party (Оу-да)<br>
  Папа заработал денег и за всё заплатит (Money)<br>
  Будем тратить-тратить-тратить, сука, будем тратить!<br>
<span class='blue'>Д3444ж/ - aaaa</span><br>
Оу-да, песок под ногами (Пр-р)<br>
Море шумит, отдыхаю на даме (Е!)<br>
Чуточку туп и я чуточку пьяный.<br>
Рядом тупят мои братики-пальмы (Вжух)<br>
<br>
<span class='blue'>[Бридж] Тк3ж/ - AAAA</span><br>
(Е-е-е-е) Да, мы только выше (Ах)<br>
(Е-е-е-е) Это мои мышки!<br>
(Е-е-е-е) Это мои малышки!<br>
(Е) И нам похуй, чё про нас напишут (Идите нахуй!)<br>
<br>
<span class='blue'>[Припев]</span><br>
(Few!) Да, my life — это картинки (Воу, е!)<br>
(Few!) Тут четыре украинки (О, бля, е!)<br>
Детки-ягоды-малинки (Муа! Е!)<br>
(Few-few!) Все они — мои любимки (Мои, е!)<br>
Мы на яхте — это pa (Это party, е!)<br>
Сыпь ещё, да, мне не хва (Мне не хватит, е!)<br>
Ночью мы не будем спать (Не, не будем, е!)<br>
Называют меня папой (Daddy)<br>
<br>
<span class='blue'>[Аутро] Х4ж/? - AAAA</span><br>
Е! Называют меня папой!<br>
(Daddy, daddy, daddy, daddy)<br>
Е! Называют меня папой!<br>
(Daddy, daddy)<br>
Е! Называют меня папой!<br>
Е! Называют меня папой!<br>
  <br>
<span class='blue'><a href='https://genius.com/Morgenshtern-four-ukrainian-girls-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма м=ж: спПть - пАпой.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
