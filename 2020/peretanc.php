<?php
$title = 'Артур Пирожков - Перетанцуй меня (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/w9okGAKOyYk'";
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
<span class='blue'>[Куплет] Л3-5мм - abab</span><br>
В комнате темно, <br>
Все танцуют, все танцуют, все!<br>
В комнате темно, <br>
Ты все ближе, ты все ближе ко мне!<br>
  <div class='refren'>В комнате темно, <br>
  Все танцуют, все танцуют, все!<br>
  В комнате темно, <br>
  Ты все ближе ко мне!</div>
<br>

<span class='blue'>[Переход] Х4мж? - aBaBBB</span><br>
Но я к тебе не подхожу, <span class='blue'>(Строка Я4м)</span><br>
Просто буду где-то рядом.<br>
Я у бара посижу,<br>
Мне еще немного надо.<br>
  <div class='refren'>Мне совсем немного надо -<br>
  Окунуться в водопады.</div>
<br>
<span class='blue'>[Припев] Л3ж/жм - AABcAABcx</span><br>
И вырвались на волю<br>
Танцы под алкоголем!<br>
Теперь у нас фиеста,<br>
Никто не будет спать!<br>
  <div class='refren'>И вырвались на волю<br>
  Танцы под алкоголем!<br>
  Здесь очень много места,<br>
  Мы будем танцевать.</div>
А ну, перетанцуй меня!<br>
<br>
<span class='blue'>[Куплет]</span><br>
В комнате темно, <br>
Все танцуют, все танцуют, все!<br>
В комнате темно, <br>
Ты все ближе, ты все ближе ко мне!<br>
  <div class='refren'>В комнате темно, <br>
  Все танцуют, все танцуют, все!<br>
  В комнате темно, <br>
  Ты все ближе ко мне!</div>
<br>
<span class='blue'>[Переход]</span><br>
Но я к тебе не подхожу,<br>
Просто буду где-то рядом.<br>
Я у бара посижу,<br>
Мне еще немного надо.<br>
  <div class='refren'>Мне совсем немного надо -<br>
  Окунуться в водопады.</div>
<br>
<span class='blue'>[Припев]</span><br>
И вырвались на волю<br>
Танцы под алкоголем!<br>
Теперь у нас фиеста,<br>
Никто не будет спать!<br>
  <div class='refren'>И вырвались на волю<br>
  Танцы под алкоголем!<br>
  Здесь очень много места,<br>
  Мы будем танцевать.</div>
А ну, перетанцуй меня!<br>
  <br>
<span class='blue'>[Интерлюдия] Л2-4цж/ - AA...</span><br>
Все танцы! Все танцы!  <br>
Все танцы! Все танцы!  <br>
Все танцы! Все танцы!  <br>
Все танцы, танцы, танцы!  <br>
  <div class='refren'>Все танцы! Все танцы!  <br>
  Все танцы! Все танцы!  <br>
  Все танцы! Все танцы!  <br>
  Все танцы, танцы, танцы!  </div>
Танцы, танцы, танцы, танцы!<br>
Танцы, танцы, танцы, танцы!<br>
  <br>
  <span class='blue'>[Припев]</span><br>
  И вырвались на волю<br>
  Танцы под алкоголем!<br>
  Теперь у нас фиеста,<br>
  Никто не будет спать!<br>
    <div class='refren'>И вырвались на волю<br>
    Танцы под алкоголем!<br>
    Здесь очень много места,<br>
    Мы будем танцевать.</div>
  И вырвались на волю<br>
  Танцы под алкоголем!<br>
  Теперь у нас фиеста,<br>
  Никто не будет спать!<br>
    <div class='refren'>И вырвались на волю<br>
    Танцы под алкоголем!<br>
    Здесь очень много места,<br>
    Мы будем танцевать.</div>
А ну, перетанцуй меня!<br>
    <br>
<span class='blue'><a href='https://text-pesni.com/pesnya/pokazat/565690720/artur-pirozhkov/tekst-perevod-pesni-peretancujmenya-peretancuj-menya/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
