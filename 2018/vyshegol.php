<?php
$title = 'Полина Гагарина - Выше головы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/OFGi5Fs3EoU'";
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

<span class='blue'>[Куплет 1] Тк4цмж - xAAbXb, xAAxBB<br></span>
Нам некого винить за нелюбовь,<br>
Не надо громких слов и томных взглядов!<br>
Ты знаешь, мне не место быть с тобою рядом.<br>
Мы утонули в бесконечной лжи,<br>
Попытками друг другом надышаться,<br>
И я не вижу смысла дальше с этим жить.<br>
<div class='refren'>
Нам некого винить за нелюбовь,<br>
Мы все своими сделали руками,<br>
И это ты мне в спину первым бросил камень!<br>
Нам сожалеть и клясться ни к чему,<br>
Твои слова уже давно не греют!<br>
А что нас не убьет, то сделает сильнее!</div>
<br>
<span class='blue'>[Припев х2] Тк4цм - abab<br></span>
Теперь мы стали выше головы,<br>
Мы стали крепче, стоя под огнем.<br>
Мы продолжаем биться за свои мечты,<br>
Даже если больше не вдвоём.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Нам некого винить за нелюбовь,<br>
Теперь мы навсегда с тобою квиты,<br>
Но не собрать нам то, что вдребезги разбито.<br>
Мы не за что, а вопреки всему<br>
Любить друг друга просто не умеем,<br>
Но что нас не убьет, то сделает сильнее...<br>
<br>
<span class='blue'>[Припев х3]<br></span>
Теперь мы стали выше головы,<br>
Мы стали крепче, стоя под огнем.<br>
Мы продолжаем биться за свои мечты,<br>
Даже если больше не вдвоём.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Теперь мы стали выше головы,<br>
Мы стали крепче стоя под огнем.<br>
Мы продолжаем биться за свои мечты,<br>
Даже если больше не вдвоём.<br>
<br>
Теперь мы стали выше головы,<br>
Выше!<br>
Даже если больше не вдвоём.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/gagarina-polina-vishe-golovi.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. При исполнении в строках куплетов - по две пары ударений с цезурой (паузой) между ними,
хотя в некоторых строках в естественной речи было бы три ударения.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
