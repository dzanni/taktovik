<?php
$title = 'LOBODA - moLOko (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/qo2Jj6kI4Ss'";
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

<span class='blue'>[Куплет 1] Я223жжм - ABcABc</span><br>
Мой первый повод<br>
Не спать ночами<br>
И первое люблю.<br>
Осенний город,<br>
Я в нем нечаянно<br>
Печаль ловлю. <span class='blue'>(Строка Я2м/)</span><br>
<br>
<span class='blue'>[Переход 1] Л4ц33мжм? - aBcaBc</span><br>
Мне глубоко неважно было, что говорят,<br>
Хотелось утонуть в драме,<br>
И чтобы он нашел и спас.<br>
Но среди океана слез всегда был маяк -<br>
Такой родной голос мамин -<br>
Набор простых, но нужных фраз.<br>
<br>
<span class='blue'>[Припев] Дк32жм - AAAbAAAb</span><br>
Она говорила: "Хватит,<br>
Грустить сегодня некстати,<br>
Надень красивое платье<br>
Цвета молоко. <span class='blue'>(Строка Тк2м)</span><br>
  <div class='refren'>Ты можешь быть счастливой<br>
  И будешь обязательно.<br>
  Главное, не утратить<br>
  В глазах огонь.</div>
<span class='blue'>Л34цжм - AbAb</span><br>
Если немного одиноко,<br>
Если немного одиноко тебе,<br>
Пусть приведет тебя дорога,<br>
Пусть приведет тебя дорога ко мне.<br>
Я так хотела бы". <span class='blue'>(Строка Л2д)</span><br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Другие ритмы<br>
У взрослой жизни,<br>
Вкус кофе на губах.<br>
Порой не видно<br>
В себе той искры,<br>
Нет солнца в облаках.<br>
<br>
<span class='blue'>[Переход 2]</span><br>
Я так устала слушать все, что мне говорят.<br>
Хожу как будто кругами.<br>
И снова все пошло не так.<br>
Но среди океана слез огнями горит<br>
Такой родной голос мамин,<br>
Спасительный мой маяк.<br>
<br>
<span class='blue'>[Припев]</span><br>
Она говорила: "Хватит,<br>
Грустить сегодня некстати,<br>
Надень красивое платье<br>
Цвета молоко.<br>
  <div class='refren'>Ты можешь быть счастливой<br>
  И будешь обязательно.<br>
  Главное, не утратить<br>
  В глазах огонь.</div>
Если немного одиноко,<br>
Если немного одиноко тебе,<br>
Пусть приведет тебя дорога,<br>
Пусть приведет тебя дорога ко мне.<br>
Я так хотела бы".<br>
  <br>
<span class='blue'><a href='https://text-pesni.com/emva'
  target='_blank'>Источник</a></span><br>
  <br>
  <br>
  N.B. Рифма "д" = "ж": "некстАти, плАтье - обязАтельно"<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
