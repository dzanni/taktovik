<?php
$title = 'Би-2 - Депрессия (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/GPbdazXpRsw'";
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

<span class='blue'>[Куплет 1] Х4жм - AbAb</span><br>
Нам с изысканным цинизмом<br>
Продают эрзац мечты,<br>
Только миф о сладкой жизни<br>
Не заполнит пустоты.<br>
<br>
<span class='blue'>[Припев] Д23жд - AB'AB'</span><br>
Выйдем из дома,<br>
Из безнадёжной депрессии.<br>
Как же давно нам<br>
Не было вместе так весело!<br>
<br>
<span class='blue'>[Проигрыш]</span><br>
<br>
<span class='blue'>[Куплет 2]</span><br>
В счастье строгих нет пропорций,<br>
Клонит в дрёму идеал.<br>
В чёрной луже штиль эмоций,<br>
А в груди - девятый вал.<br>
<br>
<span class='blue'>[Припев]</span><br>
Выйдем из дома,<br>
Из безнадёжной депрессии.<br>
Как же давно нам<br>
Не было вместе так весело!<br>
<br>
<span class='blue'>[Проигрыш]</span><br>
<br>
<span class='blue'>[Припев]</span><br>
Мы выйдем из дома, <span class='blue'>(Строка Ам2ж)</span><br>
Из безнадёжной депрессии.<br>
Как же давно нам<br>
Не было вместе так весело!<br>
  <div class='refren'>Выйдем из дома,<br>
  Из безнадёжной депрессии.<br>
  Как же давно нам<br>
  Не было вместе так весело!</div>

  <br>
<span class='blue'><a href='https://www.gl5.ru/bi2-depressiya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
