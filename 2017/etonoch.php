<?php
$title = 'Настя Каменских - Это моя ночь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/qQDxQZzIr78'";
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

У-у-а! У-у-а! У-у-а!<br>
<br>
<span class='blue'>[Куплет 1] Я6цм? - aA</span><br>
Я так хочу, чтоб ты со мною был всю ночь<br>
Чтоб танцевал, и к сердцу мне открыл замочек.<br>
<br>
<span class='blue'>[Переход] Дк3м? - aaA</span><br>
Поставь хэштег #мояночь, <br>
Гони пустой день прочь -<br>
Читай меня между строчек.<br>
<br>
<span class='blue'>[Припев] Х6цу1м - aa</span><br>
Это моя ночь! Это моя ночь!<br>
Это моя ночь! Это моя ночь!<br>
<br>
У-у-а! У-у-а! У-у-а!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Я так хочу, чтоб ты со мною был ночь всю!<br>
Чтоб ты мне в танце нежно говорил «Люблю»!<br>
<br>
<span class='blue'>[Переход]</span><br>
Поставь хэштег #мояночь, <br>
Гони пустой день прочь -<br>
Читай меня между строчек.<br>
<br>
<span class='blue'>[Припев]</span><br>
Это моя ночь! Это моя ночь!<br>
Это моя ночь! Это моя ночь!<br>
<br>
О-о-о-о-О-о-о!<br>
О-о-о-о-О-о-о!<br>
О-о-о-о-О-о-о!<br>
О-о-о-о-О-о-о!<br>
<br>
О-о-о-Э-а-о-а! A! У!<br>
О-о-о-Э-а-о-а! A! У!<br>
<br>
<span class='blue'>[Переход х2]</span><br>
Поставь хэштег #мояночь, <br>
Гони пустой день прочь.<br>
Читай меня между строчек...<br>
<br>
Это моя ночь! <br>
Поставь хэштег #мояночь!<br>
Это моя ночь!<br>
Поставь хэштег #мояночь!<br>
Это моя ночь!  <br>
Поставь хэштег #мояночь!<br>
Это моя ночь!<br>
Поставь хэштег #мояночь!<br>
<br>
О-о-о-о-О-о-о!<br>
О-о-о-о-О-о-о!<br>
О-о-о-о-О-о-о!<br>
О-о-о-о-О-о-о!<br>
<br>
О-о-о-Э-а-о-а! A! У!<br>
О-о-о-Э-а-о-а! A! У!<br>
<br>
<span class='i'>- Кстати, любимая, я достал два билета на очень хорошую оперу.
Развлечемся?<br>
- Опера? </span><br>
<br>
Это моя ночь!<br>
<br>
Слова и музыка: Алексей Потапенко<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/n1/nastya-kamenskih/9076-nastya-kamenskih-eto-moya-nochj-text-pesni.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. ж=м в куплете: "ночь - замочек".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
