<?php
$title = 'Элджей - Минимал (слова/текст, музыка)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Kdi_mcJN6fM'";
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

<span class='blue'>[Интро]<br></span>
Sayanara boy!<br>
Sayanara boy, sayanara boy!<br>
Sayanara boy!<br>
<br>
<span class='blue'>[Припев] Л23дм? - A'bA'b<br></span>
На баре синяя,<br>
Мы танцуем под минимал.<br>
Да-да-да, ты красивая,<br>
Но таких, как ты, дохуя!<br>
На баре синяя,<br>
Мы танцуем под минимал.<br>
Да-да-да, ты красивая.<br>
(Иди сюда!)<br>
<br>
<span class='blue'>[Куплет 1] Дк4цжм, Дк4м - AbAb, aa<br></span>
Вокруг одни идиоты и светодиоды,<br>
Я пью черную воду и алкоголь (буль-будь).<br>
Я не знаю кто ты, да и похуй,<br>
Ведь сегодня ты точно пойдешь со мной, <br>
Точно пойдешь со мной.<br>
<div class='refren'>И я (я-я) холодный, как лимонад.<br>
Никто (никто-никто) в этом не виноват.<br>
И я (я-я) холодный, как лимонад.<br>
Никто (никто-никто) в этом не виноват (виноват).</div>
<br>
<span class='blue'>[Припев]<br></span>
На баре синяя,<br>
Мы танцуем под минимал.<br>
Да-да-да, ты красивая,<br>
Но таких, как ты, дохуя!<br>
На баре синяя,<br>
Мы танцуем под минимал.<br>
Да-да-да, ты красивая.<br>
(Да-да-да)<br>
<br>
<span class='blue'>[Куплет 2] Дк3цд, Дк2-4жд - A'B'A'b, A'AB'AB'<br></span>
Забирай свои шмотки, проваливай!<br>
Мои мозги вдребезги<br>
Быть с тобою — какое-то палево,<br>
Ты ломаешь все на куски!<br>
Это все было неправильно!<br>
Это все было неправильно!<br>
Забирай свои шмотки, проваливай!<br>
<div class='refren'>Хочешь мои? Забирай и уебывай, (блядь!) <br>
Перестань меня трогать (сука!)<br>
В стакане я вижу тебя настоящую:<br>
Такая пиздатая похоть,<br>
А остальное — бесящее!<br></div>
<br>
<span class='blue'>[Переход] Л3м - abab<br></span>
Птичка, лети домой (лети-лети)!<br>
Всё будет окей!<br>
Я больше не твой!<br>
Я больше ни чей (ни чей)!<br>
Птичка, лети домой (лети домой)!<br>
Всё будет окей!<br>
Я больше не твой!<br>
Я больше ни чей (ни чей)!<br>
<br>
<span class='blue'>[Припев x4]<br></span>
На баре синяя,<br>
Мы танцуем под минимал.<br>
Да-да-да, ты красивая,<br>
Но таких, как ты, дохуя!<br>
На баре синяя,<br>
Мы танцуем под минимал.<br>
Да-да-да, ты красивая.<br>
(Но таких, как ты, дохуя!)<br>
<br>
<span class='blue'>[Аутро]<br></span>
Sayanara boy (Таких как ты дохуя)<br>
Таких, как ты, дохуя! Таких, как ты, дохуя!<br>
Sayanara boy, Sayanara boy<br>
Sayanara boy!<br>
<br>
<span class='blue'><a href='https://genius.com/Eldzhey-minimal-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
