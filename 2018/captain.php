<?php
$title = 'Miyagi - Captain (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/i0Oe1KQBwQg'";
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
Miyagi!<br>
<br>
<span class='blue'>[Припев x2] Ак4цжм - XXaaXa<br></span>
Потеряли себя нема, нам не надо мана,<br>
Команда магов, ва-банк и зомби,<br>
Там битом игриво так по кабакам.<br>
За браваду тут топил убитый капитан,<br>
Акапеллами недопетыми насыпал грусти,<br>
Лови для лайфа, че не фонтан!<br>
<br>
<span class='blue'>[Куплет 1] Тк2-5цмж - aaaA<br></span>
Мир ебучих антенн<br>
В час перемен убавит урбана день.<br>
Не готов был унять эту любовь, поседел.<br>
Ненавижу себя, но живу каждый день я.<br>
Только тучи, да тень<br>
От небылицы меня знать не хотел.<br>
Этот мир догорел для меня, убивай,<br>
Зарывай мое тело, не жду перемен я.<br>
Мне наскучили все,<br>
В частности, сам себе слово давал<br>
Не забыть, для кого я живу, но я мразь и мудак,<br>
И, паскуда, его не сдержал я.<br>
Я закручивал день,<br>
Музыка-дура меня толпами бей,<br>
Так а толку, от этого мне не умереть!<br>
Забывай мое имя, забывай меня!<br>
<br>
<span class='blue'>[Припев x2]<br></span>
Потеряли себя нема, нам не надо мана,<br>
Команда магов, ва-банк и зомби,<br>
Там битом игриво так по кабакам.<br>
За браваду тут топил убитый капитан,<br>
Акапеллами недопетыми насыпал грусти,<br>
Лови для лайфа, че не фонтан!<br>
<br>
<span class='blue'>[Куплет 2] Тк4ц3м/ж - aa, AA<br></span>
Дескать, это перебежки по рельсам!<br>
Тесла перевернул мир, куролесим!<br>
Ты напой, как бы напел бог.<br>
Это берега мастера Восток,<br>
И такой расклад - либо ты, либо сто!<br>
Окати меня водой, когда будет ожог.<br>
Добрый, но злой бережет.<br>
Поговаривали, пули бы тобой порешал.<br>
Я стен недобитый портрет,<br>
Либо манекен, либо человек.<br>
Этому - не верь, этому - не верь!<br>
Этому - не верь, этому - не верь!<br>
Этому - никогда не верь!<br>
Взамен я накидывал строк,<br>
Дело перемен, я перевидал снов,<br>
И топил эту любовь и лавировал вновь.<br>
Это пустозвон, говорили на зло.<br>
<br>
<span class='blue'>[Припев x4]<br></span>
Потеряли себя нема, нам не надо мана,<br>
Команда магов, ва-банк и зомби,<br>
Там битом игриво так по кабакам.<br>
За браваду тут топил убитый капитан,<br>
Акапеллами недопетыми насыпал грусти,<br>
Лови для лайфа, че не фонтан!<br>
<br>
<span class='blue'><a href='https://genius.com/Miyagi-captain-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
