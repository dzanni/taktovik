<?php
$title = 'MORGENSHTERN & Элджей - Cadillac (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/-7n4t0cbVD4'";
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
Слава, что ты сделал?<br>
Ха!<br>
<br>
<span class='blue'>[Припев: MORGENSHTERN] Л2444м/м?, Л2444м/жм - aabb, aaXa</span><br>
Эй, цепь на мне, сыпь лавэ!<br>
Сотка тыщ на bag LV!<br>
Сотни сук хотят ко мне,<br>
Сотни сук хотят камней.<br>
Как дела? Как дела?<br>
Это новый Cadillac.<br>
Делать деньги, делать деньги,<br>
Делать деньги, блять, вот так (окей, few)<br>
<br>
<span class='blue'>[Куплет 1: MORGENSHTERN] Я3ж/? - AAAABBBB</span><br>
Ayy, bitch, we got some пушки (пр-р, пау)<br>
Пау-пау, попал по тушке (ха)<br>
На мне ща две подушки (оу да)<br>
Я висю, как молодой Пушкин (у) <span class='blue'>(Строка Дк3ж)</span><br>
Цепи висят на папе (е)<br>
Копаем кэш лопатой (е)<br>
Богатый будто каппер (у, е)<br>
Как там твоя зарплата?<br>
<br>
<span class='blue'>[Бридж: MORGENSHTERN] Л2444м/жм? - aaXa</span><br>
Эй, посмотри!<br>
Два мульта на мне часы,<br>
Три на шее, семь под жопой,<br>
Мне чуть больше двадцати!<br>
Посмотри, посмотри,<br>
Два мульта на мне часы<br>
Три на шее, семь под жопой,<br>
Мне чуть больше двадцати!<br>
<br>
<span class='blue'>[Припев: MORGENSHTERN]</span><br>
Эй, цепь на мне, сыпь лавэ!<br>
Сотка тыщ на bag LV!<br>
Сотни сук хотят ко мне,<br>
Сотни сук хотят камней.<br>
Как дела? Как дела?<br>
Это новый Cadillac.<br>
Делать деньги, делать деньги,<br>
Делать деньги, блять, вот так!<br>
<br>
<span class='blue'>[Куплет 2: Элджей] - Дк5ж/ - AAAA</span><br>
I am busy, мне похуй на кризис, я в нём вырос (уа-уа-уа)<br>
Кто о чём мечтал, то мы и взяли на вынос (бля-я)<br>
Эдлиб свежей, чем весь музыкальный бизнес (блё-блё)<br>
Этот фит убьёт быстрей, чем ко-ро-на-ви-рус!<br>
    <div class='refren'>
  <span class='blue'>Тр4цм/ - аааа</span><br>
  Sayonara "Sick" Boy, <span class='blue'>(Строка Тр2м)</span><br>
  Это мой дом, это мой жон,<br>
  Это мой двор, ебейший chill zone.<br>
  Молодой самурай с прозрачным зонтом<br>
  Под проливным валютным дождём.</div>
<span class='blue'>Тк2-3жж - XAXA</span><br>
(Кх-кх-кх) Фенимор Купер,<br>
Разворот лукбука,<br>
Твоя подружка дрочит,<br>
На мой спорткар у клуба.<br>
<br>
<span class='blue'>[Припев: MORGENSHTERN]</span><br>
Эй, цепь на мне, сыпь лавэ!<br>
Сотка тыщ на bag LV!<br>
Сотни сук хотят ко мне,<br>
Сотни сук хотят камней.<br>
Как дела? Как дела?<br>
Это новый Cadillac.<br>
Делать деньги, делать деньги,<br>
Делать деньги, блять, вот так!<br>
<br>
<span class='blue'>[Аутро]</span><br>
Слава, что ты сделал?<br>
  <br>
<span class='blue'><a href='https://genius.com/Morgenshtern-and-eldzhey-cadillac-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
