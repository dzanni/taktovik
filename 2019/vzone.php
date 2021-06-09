<?php
$title = 'LOBODA - В зоне риска (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/7D3va3cFy_8'";
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

<span class='blue'>[Припев] Тк4цжд? - AA''AA AA''AA'<br></span>
Куда нам девать все эти мысли?<br>
Необязательно быть искренними.<br>
Я за тобой, но ты не близко -<br>
В зоне риска мы, мы в зоне риска.<br>
<div class='refren'>
Куда нам девать все эти мысли?<br>
Необязательно быть искренними.<br>
Я за тобой, но ты не близко -<br>
В зоне риска мы, мы в зоне риска, мы.</div>
<br>
<span class='blue'>[Куплет 1] Л6ц3м/м - aabb<br></span>
Что ты хочешь, что ты можешь дать взамен?<br>
Что ты можешь, man?<br>
Ты боишься? Этот знак тебе знаком?<br>
Ты играешь с огнём!<br>
<br>
<span class='blue'>[Переход 1] Тк4цж/ - AAAA<br></span>
Но я сегодня не готова говорить об этом -<br>
Времени нет и желания нету.<br>
Я сломала себе ноготь - значит, будет вендетта.<br>
Как меня достало это!<br>
<br>
<span class='blue'>[Припев]<br></span>
Куда нам девать все эти мысли?<br>
Необязательно быть искренними.<br>
Я за тобой, но ты не близко -<br>
В зоне риска мы, мы в зоне риска.<br>
<div class='refren'>
Куда нам девать все эти мысли?<br>
Необязательно быть искренними.<br>
Я за тобой, но ты не близко -<br>
В зоне риска мы, мы в зоне риска, мы.</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Если скажешь о любви мне пару слов -<br>
Вижу, ты не готов!<br>
Если спросишь - загляни в мои глаза,<br>
Я отвечу «Нельзя».<br>
<br>
<span class='blue'>[Переход 1]<br></span>
Но я сегодня не готова говорить об этом -<br>
Времени нет и желания нету.<br>
Я сломала себе ноготь - значит, будет вендетта.<br>
Как меня достало это!<br>
<br>
<span class='blue'>[Припев]<br></span>
Куда нам девать все эти мысли?<br>
Необязательно быть искренними.<br>
Я за тобой, но ты не близко -<br>
В зоне риска мы, мы в зоне риска.<br>
<div class='refren'>
Куда нам девать все эти мысли?<br>
Необязательно быть искренними.<br>
Я за тобой, но ты не близко -<br>
В зоне риска мы, мы в зоне риска, мы.</div>
<br>
<span class='blue'>[Переход 2]</span><br>
В зоне риска мы.<br>
<br>
<span class='blue'>[Припев х 2, бэк]</span><br>
Куда нам девать все эти мысли?<br>
Необязательно быть искренними.<br>
Я за тобой, но ты не близко -<br>
В зоне риска мы, мы в зоне риска.<br>
<br>
<span class='blue'>[Припев]<br></span>
Куда нам девать все эти мысли?<br>
Необязательно быть искренними.<br>
Я за тобой, но ты не близко -<br>
В зоне риска мы, мы в зоне риска.<br>
<div class='refren'>
Куда нам девать все эти мысли?<br>
Необязательно быть искренними.<br>
Я за тобой, но ты не близко -<br>
В зоне риска мы, мы в зоне риска, мы.</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/loboda-v-zone-riska.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
