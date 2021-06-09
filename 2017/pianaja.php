<?php
$title = 'MOLLY - Пьяная (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/uPuhskGC_XA'";
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

<span class='blue'>[Куплет 1] Дк2-4цжм - AbAb, aaa<br></span>
Разбегусь, чтобы прыгнуть<br>
В тебя - как в тот первый раз.<br>
Как жаль, что не выбрать<br>
Тёплый очаг - меня!<br>
Она текла, будто из стекла,<br>
Любовь - наша высота!<br>
В тебя я врываюсь, как она.<br>
<br>
<span class='blue'>[Припев] Тр23дм - A’A’bA’A’b<br></span>
А-а! Пьяная, пьяная,<br>
Слабая, слабая. А!<br>
Я твоя, я твоя навсегда!<br>
А-а! Пьяная, пьяная,<br>
Слабая, слабая. А!<br>
Я твоя, я твоя навсегда! А-а!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Маяки мне светили<br>
Там, где не меня зовут.<br>
Смотреть научились -<br>
Не моргая, лгут.<br>
В тебе затихла я -<br>
Я на сто твоя.<br>
Любовь, значит, мне нельзя,<br>
Но я вытекаю, как вода.<br>
<br>
<span class='blue'>[Припев]<br></span>
А-а! Пьяная, пьяная,<br>
Слабая, слабая. А!<br>
Я твоя, я твоя навсегда!<br>
А-а! Пьяная, пьяная,<br>
Слабая, слабая. А!<br>
Я твоя, я твоя навсегда! А-а!<br>
<br>
<span class='i'>- Вы только что посмотрели мой новый клип на песню "Пьяная".
  Если Вам понравилось, то ставьте лайк прямо сейчас. И вообще, комментируйте и
  подписывайтесь на наш канал, и тогда Вы будете в курсе первыми. А я Вас целую!<br></span>
<br>
<span class='blue'><a href="https://www.gl5.ru/m/molly/molly-piyanaya.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
