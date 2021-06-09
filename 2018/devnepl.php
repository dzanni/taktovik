<?php
$title = 'Дима Билан - Девочка, не плачь (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/bDvBnkc6VkA'";
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

<span class='blue'>[Куплет 1] Дк2-4мж - aaBBCddEEC<br></span>
Если ты больше не моя,<br>
Если чужим стал мой маяк,<br>
Стало быть, не напрасно<br>
Найти своё счастье,<br>
Моя Атлантида.<br>
За ночь сумел прожить три дня,<br>
За ночь сломал себя в боях,<br>
Я в тебя сильно очень,<br>
Не знай, если хочешь.<br>
Моя ледяная дива.<br>
<br>
<span class='blue'>[Припев] Тк4цм/ж? - AA<br></span>
Иду сквозь плотные толпы, <span class='blue'>(Строка Тк3ж)</span><br>
Мне снились твои слёзы, замерзшие в окнах.<br>
Ну же, девочка, не плачь, я тебя обниму.<br>
Мои плечи, твои стены, тебя не найдут.<br>
Ну же, девочка, не плачь, я тебя обниму,<br>
Не отдам никому, я с тобой буду тут,<br>
Моя девочка... <span class='blue'>(Строка Тк1д)</span><br>
Моя девочка...<br>
Моя девочка...<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Верно, решать только тебе,<br>
Верно, со мной быть или нет.<br>
Унесённая ветром,<br>
Никто не знает где ты,<br>
Моя Атлантида.<br>
Ближе подойди, душа,<br>
Ближе ты подойди на шаг.<br>
Приближайся ко мне ты,<br>
Пускай летят кометы<br>
Сквозь моё сердце, дива.<br>
<br>
<span class='blue'>[Припев]<br></span>
Иду сквозь плотные толпы,<br>
Мне снились твои слёзы, замерзшие в окнах.<br>
Ну же, девочка, не плачь, я тебя обниму.<br>
Мои плечи, твои стены, тебя не найдут.<br>
Ну же, девочка, не плачь, я тебя обниму,<br>
Не отдам никому, я с тобой буду тут.<br>
<br>
Ну же, девочка, не плачь, я тебя обниму.<br>
Мои плечи, твои стены, тебя не найдут.<br>
Ну же, девочка, не плачь, я тебя обниму,<br>
Не отдам никому, я с тобой буду тут,<br>
Моя девочка...<br>
Моя девочка...<br>
Моя девочка...<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/d1/bilandima/9030-dima-bilan-devochka-ne-plachj-atlantida-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
