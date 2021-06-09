<?php
$title = 'Zivert - Credo (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/dQZNP_dUL4c'";
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

<span class='blue'>[Переход] Л324цм/? - aaaaaA'</span><br>
Если не по себе, <br>
Значит - не с тем;<br>
Значит - не там мы наедине.<br>
  <div class='refren'>Шум от плёнки кассет. <br>
  Обратный билет.<br>
  Молча в пути, - так будет проще всем. <span class='blue'>(Строка Л4цд)</span><br>
  (Проще всем! Проще всем!)</div>
<br>
<span class='blue'>[Куплет 1] Х2ж/, Х2жж - AAAA, ABAB</span><br>
Пишем кратко, <br>
Непонятно.<br>
"Причесав" за <br>
Свою правду.<br>
  <div class='refren'>На пол жемчуг, <br>
  Мне не легче -<br>
  Этот вечер <br>
  Бесконечный.</div>
<br>
<span class='blue'>[Припев х2] Х34жм - AbAb</span><br>
Каждому, по факту,<br>
Рядом нужен человек;<br>
Но бывает так, что <br>
Одиноким лучше всех.<br>
  <div class='refren'>Каждому, по факту, <br>
  Рядом нужен человек;<br>
  Это так абстрактно, <br>
  Это бабочки эффект.</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Еле шепчет <br>
Мне о Вечном,<br>
Рассыпая <br>
Наши мЕчты.<br>
  <div class='refren'>Если в сердце <br>
  Общежитье -<br>
  Мне не место, <br>
  Мне не быть там.</div>
<br>
<span class='blue'>[Переход]</span><br>
Если не по себе, <br>
Значит - не с тем;<br>
Значит - не там мы наедине.<br>
  <div class='refren'>Шум от плёнки кассет. <br>
  Обратный билет.<br>
  Молча в пути, - так будет проще всем.<br>
  (Проще всем! Проще всем!)</div>
<br>
<span class='blue'>[Припев х2]</span><br>
Каждому, по факту,<br>
Рядом нужен человек;<br>
Но бывает так, что <br>
Одиноким лучше всех.<br>
  <div class='refren'>Каждому, по факту, <br>
  Рядом нужен человек;<br>
  Это так абстрактно, <br>
  Это бабочки эффект.</div>
  <br>
<span class='blue'><a href='https://www.gl5.ru/z/zivert/zivert-credo.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма "м=д": "Значит - не там мы наедине = Молча в пути, - так будет прОще всем".
На фонограмме строки выровнены по ритму, для этого вторая строка распета как
дактилическая с потерей рифмы; в тексте они были выровнены по рифме (наединЕ - проще всЕм)
с потерей ритма.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
