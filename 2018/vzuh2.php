<?php
$title = 'Марьяна Ро - Вжух 2.0 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/zWQ4_PBBNfE'";
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
<span class='blue'>[Интро] Л4цм - aa<br></span>
Ручки, ножки, бикини — вжух!<br>
Ручки, ножки, бикини — вжух!<br>
<br>
<span class='blue'>[Припев] Л2-5жд? - AA'xA'A'<br></span>
Всё будет гладко! (Вжух!)<br>
Я с ног до головы такая сладкая! (Вжух!)<br>
Veet — мой хит! Veet — мой хит!<br>
Всё будет гладко! (Вжух!)<br>
Я с ног до головы такая сладкая, сладкая, сладкая!<br>
<br>
<span class='blue'>[Куплет 1] Х3444жм? - AbAb<br></span>
До свидания <br>
Остаётся полчаса.<br>
Меня это не пугает, <br>
Я уже готова вся (А!)<br>
Выхожу на стиле, <br>
Томный взгляд через очки.<br>
Как легко мне быть красивой, <br>
Ну-ка, вид мой зацени!<br>
<div class='refren'>
  <span class='blue'>Л2жм? - AA'A'bAAAb<br></span>
Да-да-да-да, я не скрою!<br>
Мама, я раскована!<br>
Не встречаюсь со скромными<br>
Я — хитяо дня!<br>
Не задавай мне вопросов, <br>
Ведь всё легко и просто!<br>
Достаю я полоски, <br>
И вжух — вот это да!</div>
<br>
<span class='blue'>[Припев]<br></span>
Всё будет гладко! (Вжух!)<br>
Я с ног до головы такая сладкая!<br>
Ручки, ножки, бикини...<br>
Всё будет гладко! (Вжух!)<br>
Я с ног до головы такая сладкая, сладкая, сладкая!<br>
<br>
<span class='blue'>[Бридж] Л2м - aa<br></span>
Зацени мой вид!<br>
Зацени мой вид!<br>
Зацени мой вид!<br>
Зацени мой вид!<br>
<br>
<span class='blue'>[Куплет 2] Х45жм? - AAbAAb<br></span>
Быстро, просто, эффективно!<br>
В твою честь слагают гимны.<br>
Вижу, знаю, хочешь — прикоснись!<br>
Я с идеально гладкой кожей.<br>
Мой совет: попробуй тоже,<br>
Как и я, в полоски Veet влюбись!<br>
<br>
<span class='blue'>[Припев]<br></span>
Всё будет гладко! (Вжух!)<br>
Я с ног до головы такая сладкая!<br>
Ручки, ножки, бикини...<br>
Всё будет гладко! (Вжух!)<br>
Я с ног до головы такая сладкая, сладкая, сладкая!<br>
<br>
Всё будет гладко! <br>
<br>
<span class='blue'><a href='https://genius.com/Maryana-ro-20-vzhuh-20-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. д=ж: "гладко - сладкая" и т.д. Ритм и мелодия припева повторяют припев песни <a href='http://www.taktovik.ru/2017/nambudetzar.php'>
  "Нам будет жарко!"</a> в исполнении Ольги Бузовой и Насти Кудри (клип вывешен на Youtube 22.05.2017).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
