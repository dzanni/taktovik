<?php
$title = 'Ольга Бузова - Чемпион (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Xd3uJb59azA'";
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

<span class='blue'>[Припев] Л1-4цм - aaaaxaaaabbb<br></span>
У тебя есть весь мир!<br>
У тебя есть весь мир!<br>
У тебя есть весь мир!<br>
У тебя есть весь мир!<br>
Давай!<br>
<div class='refren'>
У тебя есть весь мир, ты его кумир!<br>
У тебя есть весь мир, ты его кумир!<br>
У тебя есть весь мир, ты его кумир!<br>
У тебя есть весь мир!</div>
А миру нужен чемпион, чемпион!<br>
А миру нужен чемпион, чемпион!<br>
А миру нужен чемпион!<br>
<br>
<span class='blue'>[Переход] Тк34цм - abab<br></span>
Кто чемпион, и кто тут номер один?<br>
Кто, если не ты? Ты, только ты! (Ты!)<br>
Они готовы по пути идти<br>
Если впереди (ты), только ты! (Ты!)<br>
<br>
<span class='blue'>[Куплет 1] Дк2м - abab, abcabc<br></span>
Всё в твоих руках, <br>
<span class='refren'>мир — у твоих ног.<br></span>
Сделай первый шаг. <br>
<span class='refren'>На пути сто дорог:<br></span>
С севера на юг, <br>
<span class='refren'>с запада на восток.<br></span>
Я смогу, <br>
<span class='refren'>если ты ты ты ты смог!<br></span>
<br>
Будто бы Атлант, <br>
<span class='refren'>небо на плечах <br></span>
<span class='refren1'>ты готов удержать.<br></span>
У тебя талант <br>
<span class='refren'>и огонь в глазах, <br></span>
<span class='refren1'>прирожденный сверкать.<br></span>
Словно ураган, <br>
<span class='refren'>ветер Урбана, <br></span>
<span class='refren1'>все поставив на кон,<br></span>
Прямо со двора — <br>
<span class='refren'>на телеэкран, <br></span>
<span class='refren1'>свой стал стадион.<br></span>
<br>
<span class='blue'>[Припев]<br></span>
У тебя есть весь мир!<br>
У тебя есть весь мир!<br>
У тебя есть весь мир!<br>
У тебя есть весь мир!<br>
Давай!<br>
<div class='refren'>
У тебя есть весь мир, ты его кумир!<br>
У тебя есть весь мир, ты его кумир!<br>
У тебя есть весь мир, ты его кумир!<br>
У тебя есть весь мир!</div>
А миру нужен чемпион, чемпион!<br>
А миру нужен чемпион, чемпион!<br>
А миру нужен чемпион!<br>
<br>
<span class='blue'>[Куплет 2] Дк2м - aabccb, abab<br></span>
Каждый шаг - ва-банк, <br>
<span class='refren'>лишь тебе решать, <br></span>
<span class='refren1'>где оставить свой след.<br></span>
Если ты решил <br>
<span class='refren'>то, что хватит сил, <br></span>
<span class='refren1'>почему бы и нет?<br></span>
У тебя есть цель, <br>
<span class='refren'>просто следуй ей, <br></span>
<span class='refren1'>всё поставив на кон.<br></span>
Прямо со двора — <br>
<span class='refren'>на телеэкран. <br></span>
<span class='refren1'>Свой стал стадион.<br></span>
<br>
За тобой следят <br>
<span class='refren'>миллионы глаз:<br></span>
(Сейчас) или никогда, <br>
<span class='refren'>никогда или сейчас.<br></span>
Удача каждому <br>
<span class='refren'>из нас даёт шанс<br></span>
(Используй его!) <br>
<span class='refren'>Ведь мы живем один раз.<br></span>
<br>
<span class='blue'>[Припев]<br></span>
У тебя есть весь мир!<br>
У тебя есть весь мир!<br>
У тебя есть весь мир!<br>
У тебя есть весь мир!<br>
Давай!<br>
<div class='refren'>
У тебя есть весь мир, ты его кумир!<br>
У тебя есть весь мир, ты его кумир!<br>
У тебя есть весь мир, ты его кумир!<br>
У тебя есть весь мир!</div>

<br>
<span class='blue'><a href='https://tekst-pesni.info/olga-buzova-chempion/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Куплеты можно представить как длинные строки, или как короткие,
так как рифма за одним исключением соблюдается и в этом случае; мы выбрали второй вариант.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
