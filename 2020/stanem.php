<?php
$title = 'LOUNA - Станем стеной (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/-UhKASGMYa4'";
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

<span class='blue'>[Куплет 1] Л4цж/ж - aabbccdd</span><br>
Добрый вечер! Мы в эфире.  <br>
Что сегодня нового в мире?  <br>
С нетерпеньем жмёт на кнопки  <br>
Существо в бетонной коробке.  <br>
Инфоголод ждёт сюрпризов -  <br>
Новый повод и новый вызов.  <br>
Кукловоды держат ловко  <br>
Вещество внутри мышеловки.  <br>
<div class='refren'>
Кто-то верит, кто-то прётся,  <br>
Видя этот цирк, и смеётся.  <br>
Каждый вправе верить бредням.  <br>
Прав же, кто смеётся последним.  <br>
Круче фактов - аргументы:  <br>
Против - меньше трети процентов!  <br>
Если к боссам нет вопросов  -<br>
Они правят дальше без спроса!  </div>
  <br>
<span class='blue'>[Припев] Л35цмм - abab</span><br>
Срам, разруха и хлам,  <br>
Вливаясь из телесортиров, царят в головах.  <br>
Нам, но что делать нам,  <br>
Чтоб вера в иной лучший мир в нас осталась жива?  <br>
<div class='refren'>
<span class='blue'>Л322ммм - abcabc</span><br>
Эй, если сейчас <br>
Ты слышишь меня  <br>
Пой вместе со мной!  <br>
Ведь если всех нас<br>
Собрать по камням,  <br>
Мы станем стеной!  <br>
И если сейчас <br>
Ты мыслишь, как я, <br>
Встань рядом со мной!  <br>
Ведь если всех нас<br>
Собрать по камням,  <br>
Мы станем стеной!  </div>
  <br>
<span class='blue'>[Куплет 2]</span><br>
Царь к исходу мутит вотум, <br>
Исчерпав доверия квоту.  <br>
Ждут в остроге свои сроки  <br>
Декабристы новой эпохи.  <br>
Сдавлен бытом, мглой кредитов,  <br>
Демос полнит чрево элиты.  <br>
В этом сюре под цензурой,  <br>
Здесь у всех всё четко, в натуре!  <br>
  <br>
<span class='blue'>[Припев]</span><br>
Мрак, чернуха и шлак,  <br>
Вливаясь из телесортиров, царят в головах.  <br>
Как, но как сделать так,  <br>
Чтоб вера в иной лучший мир в нас осталась жива?  <br>
<div class='refren'>
  Эй, если сейчас <br>
  Ты слышишь меня  <br>
  Пой вместе со мной!  <br>
  Ведь если всех нас<br>
  Собрать по камням,  <br>
  Мы станем стеной!  <br>
  И если сейчас <br>
  Ты мыслишь, как я, <br>
  Встань рядом со мной!  <br>
  Ведь если всех нас<br>
  Собрать по камням,  <br>
  Мы станем стеной!  </div>
  <br>
  <span class='blue'>[Финал]</span><br>
Так мы станем умней,  <br>
Очистив рассудок от власти вождей и царей!  <br>
Так мы станем сильней,  <br>
Чтоб жили в свободной стране дети наших детей!  <br>
  <br>
<span class='blue'>Источник: официальный текст в описании клипа</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
