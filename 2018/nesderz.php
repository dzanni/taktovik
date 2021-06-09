<?php
$title = 'Елена Темникова - Не сдерживай меня (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/T3BrBaP0hvA'";
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

<span class='blue'>[Припев] Л3д? - A'A'XA'<br></span>
Не сдерживай меня, не сдерживай!<br>
Только от тебя я оживаю.<br>
Не сдерживай себя, не сдерживай!<br>
Все обернулось страстью бешеной.<br>
<br>
<span class='blue'>[Куплет 1] Л2ж - ABAB<br></span>
Ты бросаешь мысли, <br>
Я бросаю пепел.<br>
Я снимаю совесть, <br>
Чтоб ты не заметил.<br>
Потерялись однажды <br>
С пакетиком риска.<br>
Мои дьяволы жаждут<br>
Тебя очень близко.<br>
<div class='refren'><span class='blue'>Л2жм - AbCAbC<br></span>
  Вода шумит в ванной, <br>
Ты на губах, <br>
Падают тени.<br>
Ночь кажется странной, <br>
Кажется, так<br>
Мы и хотели.</div>
<span class='blue'>Л2мж - aBaB<br></span>
Закрываю глаза <br>
От камеры вспышек.<br>
Обратно нельзя, <br>
Поднимаемся выше.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Не сдерживай меня, не сдерживай!<br>
Только от тебя я оживаю.<br>
Не сдерживай себя, не сдерживай!<br>
Все обернулось страстью бешеной.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Город холодный <br>
Всё за окном насыпает<br>
Закрываю шторы, <br>
Мы не засыпаем.<br>
Не забыли, как это, <br>
Давай я напомню.<br>
Запускаем кометы, <br>
Касаясь холодным.<br>
<div class='refren'>
<div class='refren'><span class='blue'>Л23жм -  AxABBA<br></span>
Картина немая, <br>
Зрителей нет, <br>
Мы понимаем сами<br>
Кто поменял, <br>
Чем поменял, <br>
Зачем поменял сознанье.</div>
Закрываю глаза <br>
От камеры вспышек.<br>
Обратно нельзя, <br>
Поднимаемся выше.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Не сдерживай меня, не сдерживай!<br>
Только от тебя я оживаю.<br>
Не сдерживай себя, не сдерживай!<br>
Все обернулось страстью бешеной.<br>
<br>
<span class='blue'><a href='https://genius.com/Elena-temnikova-ne-sderzhivay-menya-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
