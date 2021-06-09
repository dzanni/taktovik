<?php
$title = 'Анна Седокова - Шантарам (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/QY-UMPVV5vU'";
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

<span class='blue'>[Припев х2] Х434жжм - AAbAAb<br></span>
Стали шрамами на теле,<br>
Мы так не хотели, <br>
А искали Шантарам.<br>
Стали шрамами на теле, <br>
Глубоко задели <br>
Половины пополам.<br>
<br>
<span class='blue'>[Куплет 1] Дк3жм - AbAb<br></span>
В клубе пьяные люди, <br>
Помни — ты и она.<br>
Кто-то тебя осудит; <br>
Кто-то, только не я.<br>
<div class='refren'>Было так безразлично, <br>
Было всё до тебя.<br>
Ты подошёл, и забилась, <br>
Словно живая — я.</div>

Помню, взял ты за руку, <br>
Просто повёл за собой.<br>
Мысли так бешено льются — <br>
Это же ты, ты же мой.<br>
<div class='refren'>
Губы, так нежно касаясь, <br>
Жадно целуют меня. <br>
Я в тебя погружаюсь, <br>
Ты — моя глубина.</div>
<br>
<span class='blue'>[Припев х2]<br></span>
Стали шрамами на теле,<br>
Мы так не хотели, <br>
А искали Шантарам.<br>
Стали шрамами на теле, <br>
Глубоко задели <br>
Половины пополам.<br>
<br>
<span class='blue'>[Куплет 2] Д3жм - AbAb<br></span>
Я улетаю на первом, <br>
Ты не выходишь на связь.<br>
К чёрту иди, это нервы! <br>
Всё, не могу — сорвалась.<br>
<div class='refren'>
Как же так нагло, так грубо <br>
Взял мою душу в тиски!<br>
Да, ты вообще мне не нужен, <br>
Я пью саке от тоски.</div>

Выпью за то, кем не стал ты, <br>
Выпью за то, что не я<br>
Буду в неистовом танце. <br>
Буду тебя забывать.
<div class='refren'>
За руку утро встречая, <br>
Глупая, буду с другим.<br>
Пьяная, значит — живая.<br>
Где же ты? Позвони!</div>
<br>
<span class='blue'>[Припев х3]<br></span>
Стали шрамами на теле,<br>
Мы так не хотели, <br>
А искали Шантарам.<br>
Стали шрамами на теле, <br>
Глубоко задели <br>
Половины пополам.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/anna-sedokova-shantaram.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
