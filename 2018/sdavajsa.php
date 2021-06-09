<?php
$title = 'Сергей Лазарев - Сдавайся (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/1_o1QEX_dTQ'";
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
<span class='i'>Кто придумал, что любовь - это золотая стрела? Любовь может ранить -
  если стрела попадает в одного.</span><br>
<br>

<span class='blue'>[Куплет 1] Л34цм - aabb<br></span>
Когда обиды сойдут на нет,<br>
Когда ты будешь готова гореть в огне,<br>
Когда ты будешь готова простить меня,<br>
Впустить меня в свой рассвет.<br>
<div class='refren'>
Когда желанья одержат верх,<br>
Когда от жажды остаться с тобой навек<br>
Я перестану бояться, что гнев небес<br>
Скажет мне «Это конец!»</div>
<br>
<span class='blue'>[Припев] Дк1-4жм - AbAAbAXbAbA<br></span>
Сдавайся! <br>
В твоей войне - ничья,<br>
И я прошу - возвращайся!<br>
Сдавайся!<br>
 В моей пустыне ты мираж, <br>
Но не исчезай, я<br>
Не верил, <br>
Что без любви душа, <br>
Как без воды, высыхает.<br>
Я больше тебе не враг!<br>
Сдавайся!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
На расстоянии двух шагов,<br>
Когда я буду коснуться тебя готов,<br>
Дай слово, что не появится пропасть, и<br>
Любовь удастся спасти!<br>
<div class='refren'>
Когда захлопнется твой капкан,<br>
Когда я буду готов умерерть от ран,<br>
Дай слово, что перестанешь казнить меня!<br>
Стала жестокой игра!</div>
<br>
<span class='blue'>[Припев]<br></span>
Сдавайся! <br>
В твоей войне - ничья,<br>
И я прошу - возвращайся!<br>
Сдавайся!<br>
 В моей пустыне ты мираж, <br>
Но не исчезай, я<br>
Не верил, <br>
Что без любви душа, <br>
Как без воды, высыхает.<br>
Я больше тебе не враг!<br>
Сдавайся!<br>
<br>
[Инструментал]<br>
<br>
Я больше тебе не враг!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Сдавайся! <br>
В твоей войне - ничья,<br>
И я прошу - возвращайся!<br>
Сдавайся!<br>
 В моей пустыне ты мираж, <br>
Но не исчезай, я<br>
Не верил, <br>
Что без любви душа, <br>
Как без воды, высыхает.<br>
Я больше тебе не враг!<br>
Сдавайся!<br>
<br>
Музыка и слова: Ирина Дубцова<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/sergey-lazarev-sdavaisya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
