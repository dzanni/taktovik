<?php
$title = 'GAZIROVKA - Black (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/l3XIJgA8OZk'";
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

<span class='blue'>[Припев х2] Тк2ж - AAAA<br></span>
Black Bacardi,<br>
Танцы в моей кровати,<br>
Не говори мне «Хватит!»<br>
Снимай своё платье!<br>
<br>
<span class='blue'>[Куплет 1] Тк32жм, Тк2д - AAbb, A'A'A'A'<br></span>
Музыка танцует сзади,<br>
Нас накроет эта пати.<br>
В чёрном авто<br>
Бери меня всего!<br>
Татуировки чёрные,<br>
Мы с тобой чёткие,<br>
Татуировки чёткие,<br>
Коктейли чёрные.<br>
<br>
<span class='blue'>[Переход] Тк4цжм - AbAb<br></span>
Твои татуировки не дают мне покоя.<br>
Твои ладошки потные, я точно не в себе!<br>
Мои глаза голодные, беру тебя стоя!<br>
Я так хочу тебя примерить, иди ко мне!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Black Bacardi,<br>
Танцы в моей кровати,<br>
Не говори мне «Хватит!»<br>
Снимай своё платье!<br>
<br>
<span class='blue'>[Куплет 2] Тк3жм - AAbbA<br></span>
Она смотрит на меня так глупо,<br>
Её качает атмосфера клуба.<br>
Музыка, нас проводи!<br>
Музыка, нас заряди!<br>
Музыка, нас целиком запутай! <span class='blue'>(Строка Тк4ж)<br></span>
<br>
<span class='blue'>[Переход]</span><br>
Твои татуировки не дают мне покоя.<br>
Твои ладошки потные, я точно не в себе!<br>
Мои глаза голодные, беру тебя стоя!<br>
Я так хочу тебя примерить, иди ко мне!<br>
<br>
<span class='blue'>[Припев х4]<br></span>
Black Bacardi,<br>
Танцы в моей кровати,<br>
Не говори мне «Хватит!»<br>
Снимай своё платье!<br>
<br>
<span class='blue'><a href='https://genius.com/Gazirovka-black-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
