<?php
$title = 'Ольга Бузова - WIFI (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/iTC8z70lCZQ'";
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

<span class='blue'>[Куплет 1] Тк4цжм - AbAb<br></span>
Ты каждый раз по-новому банален,<br>
Но мне причины больше не важны.<br>
Пришли с тобой к тому, с чего начинали,<br>
Но не нужны мне твои миражи.<br>
<div class='refren'>Поплачу о тебе, я обещаю.<br>
Присядь, успокойся, не паникуй,<br>
Ведь я, как ты, в любовь не играю -<br>
Меня ты хочешь, а получишь…</div>
<br>
<span class='blue'>[Переход] Тк4ц3ж - AA<br></span>
Я объявляю дружбу между нами,<br>
Не нужно хлопать глазами.<br>
<br>
<span class='blue'>[Припев] Тк4цм - aabb<br></span>
Если хочешь, давай, себя на всех раздавай -<br>
Если ты не мужчина, а wi-fi.<br>
Но со мной тебе точно ничего не словить -<br>
Ты все знаешь о сексе, но не о любви.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Мы с тобой одной ногой в финале,<br>
Но ты не чувствуешь своей вины.<br>
Идёшь, собой доволен, а не печален;<br>
Моя душа помята, лучше молчи.<br>
<div class='refren'>И не помогут вновь твои оправданья.<br>
Я не вернусь к тебе - целуй, не целуй.<br>
Я говорю «Прощай», не «До свиданья».<br>
Меня ты хочешь, а получишь…</div>
<br>
<span class='blue'>[Переход]<br></span>
Я объявляю дружбу между нами,<br>
Не нужно хлопать глазами.<br>
<br>
<span class='blue'>[Припев х3]<br></span>
Если хочешь, давай, себя на всех раздавай -<br>
Если ты не мужчина, а wi-fi.<br>
Но со мной тебе точно ничего не словить -<br>
Ты все знаешь о сексе, но не о любви.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/b/buzova_olga/olga-buzova-wi-fi.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
