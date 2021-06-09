<?php
$title = 'Время и Стекло - Е,Бой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/_l0vnAGGCK4'";
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
<span class='blue'>[Интро]</span><br>
Тише-тише, это ВиС.<br>
<br>
<span class='blue'>[Куплет 1: Додо] Х4м? - aaaaaaa</span><br>
Eenie mieenie money more, <br>
Больше денег on the floor<br>
Я стою втыкаю, протыкая каблуками пол. <span class='blue'>(Строка Л4цм)</span><br>
<span class='blue'>[Позитив]</span><br>
Eenie mieenie money more, <br>
Больше денег on the floor.<br>
<span class='blue'>(Вставка Тк34цм)</span><br>
Я вообще сюда случайно подошел, ага!<br>
Это или ты или фотошоп?<br>
<br>
<span class='blue'>[Переход 1: Додо] Л34цжм? - AAAbbb</span> <br>
Как мне это всё – надо ехать!<br>
<span class='blue'>[Позитив]</span> <br>
Как мне это всё – надо ехать, ага!<br>
<span class='blue'>[Додо]</span> <br>
Как мне это всё – надо ехать!<br>
<span class='blue'>[Позитив]</span> <br>
Как мне это всё – надо ехать домой, ага!<br>
<div class='refren'>
<span class='blue'>[Додо]</span><br>
 Как мне это всё – надо ехать!<br>
<span class='blue'>[Позитив]</span><br>
 Как мне это всё – надо ехать!<br>
<span class='blue'>(Вставка Тк34цм)</span><br>
А когда приедешь ты домой,<br>
Будешь думать обо мне. <br>
<span class='blue'>[Додо]</span>  Е, бой!<br>
<span class='blue'>[Позитив]</span><br>
   Е, бой!</div>
<br>
<span class='blue'>[Переход 2: Додо] Л1-4жм - AbAbXccc</span><br>
Пальцами сжимаю платье <br>
В темноте, в темноте.<br>
Буду ночью на кровати <br>
О тебе, о тебе<br>
Думать, представлять твой запах. <br>
Прикоснись рукой! Е, бой!<br>
<span class='blue'>(Вставка Тк34цм)</span><br>
<span class='blue'>[Позитив]<br></span>
Не любой тебе подарит любовь.<br>
<span class='blue'>[Додо]<br></span>
Рядом с тобой не могу быть собой!<br>
<br>
<span class='blue'>[Припев] Л3ж - AAAA<br></span>
Е, бой! Е, бой! Е, бой!<br>
Е, бой! Е, бой! Е, бой!<br>
Е, бой! Е, бой! Е, бой!<br>
Е, бой! Е, бой! (Е, бой!)<br>
<br>
<span class='blue'>[Куплет 2: Додо] Х4жм? - AAbb</span><br>
Money more и mieenie eenie,<br>
По «Мартини» - и мы в машине, ага!<br>
Кто-то заплатил за счёт,<br>
А кого это ы-ы-ы!<br>
<span class='blue'>[Позитив] Тк4цж/д - A'A'BB</span><br>
Уле-уле-тай-тай по ночному городу.<br>
Отрывай нам головы всем, пока мы молоды.<br>
Разноси нас по углам громким смехом.<br>
Как мне это всё - надо ехать!<br>
<br>
<span class='blue'>[Переход 1: Додо]</span> <br>
Как мне это всё – надо ехать!<br>
<span class='blue'>[Позитив]</span> <br>
Как мне это всё – надо ехать, ага!<br>
<span class='blue'>[Додо]</span> <br>
Как мне это всё – надо ехать!<br>
<span class='blue'>[Позитив]</span> <br>
Как мне это всё – надо ехать домой, ага!<br>
<div class='refren'>
<span class='blue'>[Додо]</span><br>
 Как мне это всё – надо ехать!<br>
<span class='blue'>[Позитив]</span><br>
 Как мне это всё – надо ехать!<br>
А когда приедешь ты домой,<br>
Будешь думать обо мне.<br>
<span class='blue'>[Додо]<br></span>
   Е, бой!<br>
<span class='blue'>[Позитив]</span><br>
   Е, бой!</div>
   <br>
<span class='blue'>[Переход 2: Додо]</span><br>
Пальцами сжимаю платье <br>
В темноте, в темноте.<br>
Буду ночью на кровати <br>
О тебе, о тебе<br>
Думать, представлять твой запах. <br>
Прикоснись рукой!<br>
Е, бой!<br>
<span class='blue'>[Позитив]<br></span>
Не любой тебе подарит любовь.<br>
<span class='blue'>[Додо]</span><br>
Рядом с тобой не могу быть собой!<br>
<br>
<span class='blue'>[Припев]<br></span>
Е, бой! (Е, бой!) Е, бой!<br>
Е, бой! Е, бой! Е, бой!<br>
Е, бой! Е, бой! Е, бой!<br>
Е, бой! Е, бой! Е, бой!<br>
<br>
(Е, бой!)<br>
(Е, бо-бо-бо-бо-бо-бо-бо!)<br>
(Е, бой!)<br>
(Е, бо-бо-бо-бо-бо-бо-бо!)<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/v1/time-glass/10972-vremya-i-steklo-eboj-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Ритмический рисунок первого куплета совпадает с рисунком первых тактов мелодии игры Digger.
Песня сложена тактовиками, стремящимися к логаэдам; мы указали размеры на свой вкус,
возможны другие трактовки.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
