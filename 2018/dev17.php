<?php
$title = 'Cheba - Девочке 17 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/5EbUK9g0iJ0'";
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

<span class='blue'>[Припев] Дв4ж? - AAAA XXX<br></span>
Она еще совсем глупышка, <br>
Но не назвать ее пустышкой.<br>
Её молодость, как вспышка,<br>
Пролетает быстро слишком.<br>
А ей всего лишь 17, <br>
Она думает, ей можно<br>
Всё, О! Всё, Оу, Оу! <span class='blue'>(Строка Дк5цж)<br></span>
<br>
<span class='blue'>[Переход] Х4ж - XAAA ABBA<br></span>
Этой девочке 17,<br>
Она думает, ей можно<br>
Раздвигать ноги в прихожей,<br>
Юзать снег, но осторожно!<br>
Она думает, ей можно<br>
Курить стафчик у знакомых,<br>
Не бывать ночами дома - <br>
Она думает, ей можно!<br>
<br>
<span class='blue'>[Куплет 1] Х4ж - XAXА<br></span>
Этой девочке 17, <br>
(Е)ё никто не понимает.<br>
Она выложила фото <br>
В старых в Ensis [пауза]<br>
<span class='blue'>Х4м - aaaa<br></span>
Худи Thrasher к лицу, <br>
Она не хочет в институт.<br>
Ей это точно ни к чему, <br>
Ни к чему (ни к чему)<br>
<div class='refren'>
Она хочет жить в Милане, <br>
Одеваться в модном доме<br>
Купить туфельки Brioni,<br>
Fendi, Lui, Dolce и... Gabbana! <span class='blue'>(Строка Х5ж) <br></span>
Кучу лайков в инстаграме:<br>
Она хочет, <br>
Чтобы все о ней узнали.</div>
<br>
<span class='blue'>[Переход]<br></span>
Этой девочке 17,<br>
Она думает, ей можно<br>
Раздвигать ноги в прихожей,<br>
Юзать снег, но осторожно!<br>
Она думает, ей можно<br>
Курить стафчик у знакомых,<br>
Не бывать ночами дома - <br>
Она думает, ей можно!<br>
<br>
<span class='blue'>[Припев]<br></span>
Она еще совсем глупышка, <br>
Но не назвать ее пустышкой.<br>
Её молодость, как вспышка,<br>
Пролетает быстро слишком.<br>
А ей всего лишь 17, <br>
Она думает, ей можно<br>
Всё, О! Всё, Оу, Оу!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Она помнит, как мечтала <br>
Быть на глянцевых журналах,<br>
Но в жизни так бывает, <br>
Что все к черту не по плану!<br>
Она часто вспоминает, <br>
Как хотела жить в Милане,<br>
[пауза] про туфельки Brioni, <br>
Но купила лишь из Zarы.<br>
<div class='refren'>
Её профиль в инстаграме <br>
Вызывал лишь только зависть<br>
Этих девочек, чьи парни <br>
Изменяли с ней ночами.<br>
Она плачет вечерами,<br>
Ведь рисунки под плечами<br>
Принесут воспоминанья <br>
О-о всех ее желаньях.</div>
<span class='blue'>Тк3м - aaaa<br></span>
Этой девочке уже 35!<br>
И опять, и опять, и опять!<br>
Этой девочке уже 35!<br>
И опять она будет вспоминать!<br>
<br>
<span class='blue'>[Переход]<br></span>
Этой девочке 17,<br>
Она думает, ей можно<br>
Раздвигать ноги в прихожей,<br>
Юзать снег, но осторожно!<br>
Она думает, ей можно<br>
Курить стафчик у знакомых,<br>
Не бывать ночами дома - <br>
Она думает, ей можно!<br>
<br>
<span class='blue'>[Припев]<br></span>
Она еще совсем глупышка, <br>
Но не назвать ее пустышкой.<br>
Её молодость, как вспышка,<br>
Пролетает быстро слишком.<br>
А ей всего лишь 17, <br>
Она думает, ей можно<br>
Всё, О! Всё, Оу, Оу!<br>
<br>
<span class='blue'><a href='https://text-pesni.su/page/cheba-devochke-17'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
