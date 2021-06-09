<?php
$title = 'ALEKSEEV - Навсегда (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/e7GQxh_c55E'";
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

<span class='blue'>[Куплет 1] Тк43мж - abbCabbC<br></span>
Наверно, это и есть любовь -<br>
Когда дороги ведут к тебе.<br>
Не остановится стрелок бег <br>
И не вернётся обратно.<br>
Наверно, это и есть любовь - <br>
Когда бессонница в тишине.<br>
Всё переломится вдруг во мне<br>
Сейчас, и так внезапно.<br>
<br>
<span class='blue'>[Припев] Дк2жм - AbAbAbb<br></span>
Больно не будет,<br>
С неба - вода.<br>
Мы счастливые люди <br>
Под дождём без зонта.<br>
Нас не отпустит!<br>
Я с тобой навсегда.<br>
Навсегда!<br>
<div class='refren'>Окна откроем, <br>
Выше взлетай.<br>
Дальше нас двое,<br>
Мы шагнём через край.<br>
Только с тобою, <br>
С тобой - так и знай! <br>
Навсегда!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Наверно, это и есть мечта, <br>
Когда слова твои наизусть.<br>
Бесчеловечная красота <br>
С ума свела меня словно.<br>
И мне глаза твои - высота. <br>
И я лечу в них и не боюсь.<br>
И вдруг закончится тишина.<br>
Вдыхай, вдыхай меня снова!<br>
<br>
<span class='blue'>[Припев]<br></span>
Больно не будет,<br>
С неба - вода.<br>
Мы счастливые люди <br>
Под дождём без зонта.<br>
Нас не отпустит!<br>
Я с тобой навсегда.<br>
Навсегда!<br>
<div class='refren'>Окна откроем, <br>
Выше взлетай.<br>
Дальше нас двое,<br>
Мы шагнём через край.<br>
Только с тобою, <br>
С тобой - так и знай! <br>
Навсегда!</div>
<br>
<span class='blue'>[Переход] Я3дм - A'BA'B<br></span>
Споёт мне песню новую <br>
И позовёт с собою.<br>
Ты постучишься в дверь мою, <br>
И я тебе открою.<br>
<br>
<span class='blue'>[Припев]<br></span>
Больно не будет,<br>
С неба - вода.<br>
Мы счастливые люди <br>
Под дождём без зонта.<br>
Нас не отпустит!<br>
Я с тобой навсегда.<br>
Навсегда!<br>
<div class='refren'>Окна откроем, <br>
Выше взлетай.<br>
Дальше нас двое,<br>
Мы шагнём через край.<br>
Только с тобою, <br>
С тобой - так и знай! <br>
Навсегда!</div>
<br>
Слова и музыка: Кирилл Павлов<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/a/alekseev/9147-alekseev-navsegda-text-pesni.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
