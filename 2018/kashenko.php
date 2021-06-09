<?php
$title = 'Boulevard Depo ft. PowerPuff Luv - Кащенко (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/1iZN0XzthJI'";
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

<span class='blue'>[Интро]<br></span>
Powerpuff Luv я!<br>
Бульвар Депо!<br>
Свэг!<br>
<br>
<span class='blue'>[Куплет 1: Boulevard Depo] Тк4цм/ж - aa, AA<br></span>
Powerpuff Luv и каждый под high kick.<br>
Папа был прав — Лав стал такой тактик.<br>
Наблюдай, как я стал такой практик.<br>
Смерть держит в когтях мой огромный my dick.<br>
Две сотни лет уже я выгляжу как мальчик.<br>
Душу не продал, не был этим озадачен.<br>
Нет, я не Ратмир, и все в этот раз иначе.<br>
Выпил таблетки, ищите меня в Кащенко. <span class='blue'>(Строка Тк4цд)<br></span>
<br>
<span class='blue'>[Припев] Тк2д/ - A'A'<br></span>
Кащенко, Кащенко, <br>
Кащенко, Кащенко<br>
Money flippin´ Кащенко, <br>
Trappin´ out the Кащенко.<br>
Вау, Кащенко, <br>
Young Thug in Кащенко.<br>
<br>
<span class='blue'>[Куплет: Powerpuff Luv]<br></span>
Нет, не прятаю в носке, деньги в сумке от «Версаче»!<br>
Попробуй достать — тебя кинут в черный ящик.<br>
Я плод с куста, ищите меня в Кащенко! <span class='blue'>(Строка Тк4цд)<br></span>
Со мною Бульвар, а, бля, это я же!<br>
Прихожу на рандом к тебе в гости, гандон.<br>
Нашинкую в лапшу, накормлю весь притон.<br>
Посему, потому я торчу у Депо.<br>
В голове, как в тюрьме, абсолютное зло.<br>
<br>
<span class='blue'>[Припев]<br></span>
Кащенко, Кащенко, <br>
Кащенко, Кащенко.<br>
Powerpuff in Кащенко, <br>
И Бульвар в Кащенко.<br>
Trappin´ out in Кащенко,<br>
Я money flippin´ Кащенко.<br>
Бум блэм, Кащенко,<br>
Делал это в Кащенко.<br>
<br>
<span class='blue'>[Аутро]<br></span>
Кащенко, Кащенко, <br>
Кащенко, Кащенко,<br>
Кащенко, Кащенко, <br>
Кащенко, я в Кащенко.<br>
Я в Кащенко, Кащенко, <br>
Кащенко, Кащенко.<br>
Кащенко, я в Ка...<br>
<br>
<span class='blue'><a href='https://genius.com/Boulevard-depo-kaschenko-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма ж=д: "инАче - КАщенко". <span class='i'>Кащенко</span> - психиатрическая больница №1 им. П.П. Кащенко в Петербурге.
В 1922-1994 г. имя Кащенко носила также психиатрическай больница №1 в Москве
(она же Канатчикова дача), затем этой больнице вернули имя основателя - Н.А. Алексеева.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
