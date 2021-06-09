<?php
$title = 'Дана Соколова ft. Скруджи - Индиго (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/usjHgXLgeiE'";
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

<span class='blue'>[Куплет 1: Дана Соколова] Дк3м/ж - aa, AA<br></span>
Занеси меня в «Красную книгу», <br>
Если кажется странным мой прикус.<br>
Но мы дети не неба Индиго, <br>
Не снаружи, нет, а внутри, да!<br>
Я не видела дня и ночи без сна. <span class='blue'>(Строка Дк4цм)<br></span>
В этом море миров я волна.<br>
Я не видела страх так давно я. <br>
На устах моих скоплен слов ряд.<br>
<br>
<span class='blue'>[Переход] Тк4цж? - AAAа<br></span>
Загляни в глаза! Загляни в глаза мне!<br>
Загляни в глаза, но не замерзай в них!<br>
Загляни в глаза! Загляни в глаза мне!<br>
Загляни в глаза и прочитай! <span class='blue'>(Строка Тк3м)<br></span>
<br>
<span class='blue'>[Припев: Дана Соколова & Скруджи] Л23жм - AAAAx<br></span>
О том, что в мире, <br>
Где нас растили, <br>
Так много гнили, <br>
Так мало мира, <br>
Но я буду сильна!<br>
О том, что в мире, <br>
Где нас растили, <br>
Так много гнили, <br>
Так мало мира, <br>
Но я-я буду сильна!<br>
О том, что в мире, <br>
Где нас растили, <br>
Так много гнили, <br>
Так мало мира, <br>
Но я-я буду сильна!<br>
(Ага, ага...)<br>
<br>
<span class='blue'>[Куплет 2: Скружди] Тк4цм/ж - aa, AA<br></span>
Нас так часто выбирают, словно кастинг в фильме.<br>
Непохожи на других, и значит, сразу фрики.<br>
Нас так часто видят так, как им внушили фильтры.<br>
Но мы те, кто есть внутри без этой лишней пыли.<br>
Так много взглядов ловили, как прокаженные в Риме,<br>
Надеясь на перемирие, ведь мы давно нелюдимы.<br>
Корабль не плывет, если объявлен штиль.<br>
И звери не едят зверей на водопое в мир!<br>
<br>
<span class='blue'>[Переход: Дана Соколова & Скруджи]<br></span>
Загляни в глаза! Загляни в глаза мне! (Загляни!)<br>
Загляни в глаза, но не замерзай в них! (Не замерзай!)<br>
Загляни в глаза! Загляни в глаза мне! (Загляни!)<br>
Загляни в глаза и прочитай! (Хей!)<br>
Загляни в глаза, но не замерзай в них!<br>
Загляни в глаза! Загляни в глаза мне!<br>
Загляни в глаза и прочитай!<br>
<br>
<span class='blue'>[Припев]<br></span>
О том, что в мире, <br>
Где нас растили,<br>
Так много гнили,<br>
Так мало мира, <br>
Но я буду сильна! <br>
(Я буду сильным!)<br>
О том, что в мире, <br>
Где нас растили,<br>
Так много гнили,<br>
Так мало мира, <br>
Но я-я буду сильна! <br>
(Я буду сильным!)<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/d1/dana-sokolova/7694-skrudzhi-dana-sokolova-indigo-text-pesni.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
