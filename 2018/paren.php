<?php
$title = 'LOBODA - Парень (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/YDfnmvLG-v4'";
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

<span class='blue'>[Куплет 1] Тк24цжм - AAbCCb<br></span>
Все подруги на танцах,<br>
А я кусаю пальцы.<br>
Думаю я всё только про тебя.<br>
Я-я, я-я.<br>
Говори со мной тише. <br>
Подойди ко мне ближе-ближе.<br>
Обними меня так, как будто я уже твоя.<br>
<br>
<span class='blue'>[Вставка: Герой] Тк4цм - aa<br></span>
Love you, hold you, standing by you!<br>
Oh my darling, please, take with you!<br>
<br>
<span class='blue'>[Припев] Л13жм - AAAbxAAAbX'</span><br>
Парень, <br>
Ты меня так сильно ранил<br>
Медленно и без правил.<br>
Ну зачем ты так со мной? <br>
Ну зачем?<br>
Парень, <br>
Я готова всё исправить,<br>
Но твоя любовь без правил!<br>
Ты поговори со мной,<br>
Поговори.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Все подруги по парам, <br>
Ну а я потерялась.<br>
Всё стою одна, гаснут фонари -<br>
Вези, гони.<br>
Подойди ко мне ближе,<br>
Я тебя не обижу.<br>
Ты же так провожал глазами - мамочка, прости!<br>
<br>
Куда теперь идти, мне идти?<br>
<br>
<span class='blue'>[Припев]</span><br>
Парень, <br>
Ты меня так сильно ранил<br>
Медленно и без правил.<br>
Ну зачем ты так со мной? <br>
Ну зачем?
Парень, <br>
Я хотела всё исправить,<br>
Но твоя любовь без правил!<br>
Ты поговори со мной,
Поговори.<br>
<br>
Парень, <br>
Ты меня так сильно ранил<br>
Медленно и без правил.<br>
Ну зачем ты так со мной? <br>
Ну зачем?
Парень, <br>
Я готова всё исправить,<br>
Но твоя любовь без правил!<br>
Ты поговори со мной,
Поговори.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/loboda-paren.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
