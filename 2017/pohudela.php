<?php
$title = 'Пающие трусы - Поху_дела (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/k7Ln6SovZzI'";
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

<span class='blue'>[Припев х2] Х34ж/ - AAAA<br></span>
Поху-похудела,<br>
На диете не сидела.<br>
Поху-похудела, <br>
Всем давала, не жалела.<br>
<br>
<span class='blue'>[Переход] Х2ж/ - AA<br></span>
Похудела (х2)<br>
<br>
<span class='blue'>[Куплет 1] Х6ц5жм - AbAbb<br></span>
Я уже давно не толстая корова,<br>
В сауну сегодня приходи!<br>
Я давно хочу от жизни очень много,<br>
Ты во мне дракона не буди!<br>
В сауну сегодня приходи!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Поху-похудела,<br>
На диете не сидела.<br>
Поху-похудела, <br>
Всем давала, не жалела.<br>
<br>
<span class='blue'>[Переход]<br></span>
Похудела (х2)<br>
<br>
<span class='blue'>[Куплет 2] Х6ц5дм? - A'bA'b<br></span>
Я девочка не гордая, не глупая.<br>
Пью я виски и качаю пресс.<br>
И могу отдаться морозильной камере:<br>
У меня спортивный интерес!<br>
У меня спортивный интерес!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Поху-похудела,<br>
На диете не сидела.<br>
Поху-похудела, <br>
Всем давала, не жалела.<br>
<br>
<span class='blue'>[Переход]<br></span>
Похудела (х2)<br>
<br>
<span class='blue'>[Попурри]<br></span>
<span class='blue'>Тр3м/ - aa<br></span>
Жалко, что твой Василек<br>
От моей Василиски далек!<br>
Не жалела!<br>
(О-о-о-оО!) <span class='blue'>(Строка Л4цм?)<br></span>
От моей Василиски далек!<br>
<br>
<span class='blue'>Я3жм - XaXa; Я23м/ - аа<br></span>
I want to go Маями,<br>
Зарплата 100 рублей!<br>
Му-му, му-му!<br>
Я делаю ему!<br>
  <div class='refren'>I drinking many vodka<br>
  I drinking many bear<br>
  Му-му, му-му!<br>
  Я делаю ему!<br>
  (Па-па-па-па!)</div>
<br>
<span class='blue'>Л2м/? - аа<br></span>
Мур-мур-мур! <br>
Мы любим гламур!<br>
Поху...<br>
Всем давала, не жалела!<br>
Мур-мур-мур! <br>
Мы любим гламур!<br>
Поху... <br>
Всем давала, не жалела!<br>
  <div class='refren'>
  <span class='blue'>Х4ж/? - AAAA<br></span>
  (О-о-о-оО!)<br>
  Па-па-па-па... похудела... <br>
  (О-о-о-оО!) <br>
  Па-па-па-па... не жалела...<br>
  Па-па-па-па... похудела... <br>
  (О-о-о-оО!)<br>
  Па-па-па-па... не жалела...</div>
<br>
Поху-дела!<br>
<br>
<span class='blue'>Источник:</span> официальный текст под клипом Youtube<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
