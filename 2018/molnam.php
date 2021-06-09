<?php
$title = 'IOWA - Молчишь на меня (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/vZQedtpPHxE'";
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

Всем говорили… всем говорили…<br>
<br>
<span class='blue'>[Куплет 1] Л6ц2ж - AA<br></span>
Молчишь... всё мимо... Всё мимо, стрелы мимо цели.<br>
Ммм... молчишь. Покрашу флаги белым-белым.<br>
М... хочу, чтобы следы на твоём теле<br>
<div class='ref'>Всем говорили,<br>
Что мы помирились!</div>
Молчишь так громко, от этого неловко.<br>
Бум-Бум! Остановка. Сама себя не понимаю.<br>
Я играла. Актриса так себе, я знаю…<br>
<div class='ref'>Нас помотало.<br>
 И что, тебе мало?</div>
<br>
<span class='blue'>[Припев х2] Л3м - aaaa<br></span>
Молчишь на меня, молчишь.<br>
В плаще у дверей стоишь.<br>
Как туча, надо мной висишь.<br>
Ну что ты на меня молчишь?!<br>
<br>
Всем говорили, что…<br>
Что ты на меня молчишь?<br>
Всем говорили, что…<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Молчишь, обидно, моя вторая половина.<br>
Ммм... я слышу, как ты ко мне неровно дышишь.<br>
Срывает крышу, когда тебя таким я вижу.<br>
Всё забыли, что мы друг другу говорили.<br>
Молчишь, так больно. Сейчас польются слёзы градом.<br>
Ой, не надо сверлить меня суровым взглядом.<br>
Ответы рядом, хоть мы ведём игру не честно.<br>
<div class='ref'>Но в этой песне<br>
Мы всё равно вместе.</div>
<br>
<span class='blue'>[Припев]<br></span>
Молчишь на меня...<br>
<br>
<span class='i'>- Давай помиримся уже! Ну хватит ругаться, а?!<br>
  - Если ты извинишься!<br>
  - Вообще-то мне кажется, виноваты оба.<br>
  - То есть, я виновата! То есть, я лично виновата в этой ссоре!<br>
  - Нет, виноваты... Я хочу сказать, что виноваты о...<br>
  - Я виновата, отлично!<br>
</span>
<br>
 ... на меня молчишь.<br>
Что ты на меня молчишь?<br>
Э-э... э-э...<br>
Мы всё равно вместе.<br>
Э-э... э-э... э-э... э-э...<br>
<br>
<span class='blue'>[Припев х4]<br></span>
Молчишь на меня, молчишь.<br>
В плаще у дверей стоишь.<br>
Как туча, надо мной висишь.<br>
Ну что ты на меня молчишь?!<br>
<br>
Всем говорили… всем говорили…<br>
Э-э...<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/i/iowa/iowa-molchish-na-menya.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Куплет - комбинация двухиктного дольника и 4-стопного ямба.
Мы его обозначили как логаэд, так как к логаэду он все же ближе, чем к дольнику.
Теоретически, было бы правильным ввести для него особый термин - например,
"Лт" - логаэд с тоническими элементами, но при небольшом количестве материала это
только усложнит картину<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
