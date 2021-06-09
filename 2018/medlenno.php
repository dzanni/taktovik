<?php
$title = 'GRIVINA - Медленно (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/lnVfWeJgJkY'";
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

<span class='blue'>[Куплет 1] Тк2-4ц - aabb, A'A'bB</span><br>
Я ледяными пальцамИ, <br>
Я медленно по телу, И <br>
Мне достаточно тепла. <br>
Ты знаешь, мне с тобой нормально, дА. <br>
<div class='refren'>
Мы будто в невесомости. <br>
Чувства в океанах утопит нашу совесть, мы, <br>
Мы будто в бесконечностИ <br>
Нашли, что так долго искАли. <br>
<br>
<span class='blue'>[Припев] Л2жм - AAbAAb</span><br>
Проткнем спицами небо, <br>
Нам не спится, мы где-то<br>
Вдвоем, вдвоем. <br>
Проткнем спицами небо, <br>
Нам не спится, мы где-то<br>
Вдвоем, вдвоем. <br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Рассыпаешься по телу дрожью. <br>
Мы разные с тобой, но так похожи. <br>
Ты мой конфликт или идеал?<br>
Я запутала себя, сама не знаю как. <br>
<div class='refren'>
<span class='blue'>Л23дм? - A'A'bA'A'b</span><br>
Помоги найти себя, <br>
Я стала зависима. <br>
Зависима от тебя. <br>
Не хочу быть сильной я. <br>
Просто обними меня, <br>
Обними меня! </div>
<br>
<span class='blue'>[Припев]</span><br>
Проткнем спицами небо, <br>
Нам не спится, мы где-то<br>
Вдвоем, вдвоем. <br>
Проткнем спицами небо, <br>
Нам не спится, мы где-то<br>
Вдвоем, вдвоем. <br>
<br>
Проткнем спицами небо, <br>
Нам не спится, мы где-то<br>
Вдвоем, вдвоем. <br>
Проткнем спицами небо, <br>
Нам не спится, мы где-то<br>
Вдвоем, вдвоем. <br>
 <br>
Вдвоем, вдвоем. <br>
<br>
<span class='blue'>Источник: текст под клипом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
