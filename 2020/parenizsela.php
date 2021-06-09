<?php
$title = 'Аня Pokrov - Парень из села (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aETEDgDpRlA'";
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
<span class='i'>
<span class='blue'>[Фонограмма]</span><br>
Парень из села!<br>
[Неразб.]<br>
Парень из села!<br>
[Неразб.]<br>
</span>
<br>

<span class='blue'>[Интро] Х6ц5мж - aBaB</span><br>
Мама, я влюбилась в парня из села!  <br>
Меня обсуждает пол-района (ой)  <br>
Я хранила тайну долго, как могла.  <br>
А теперь я белая ворона.  <br>
  <br>
<span class='blue'>[Припев] Л3м/жм? - aaXa</span><br>
Парень из села,  <br>
Не для тебя цвела!  <br>
Вчера была вороной, <br>
Теперь у меня дела-ла-ла!  <br>
  <div class='refren'>Парень из села -  <br>
  На спине купола.  <br>
  Если увидит батя,  <br>
  Не дожить даже до утра! (та-та-та-та)  </div>
  <br>
<span class='blue'>[Куплет 1] Тк4цж/, Тк4цм/ - AAAA, aaaa </span><br>
(Р-р-ра!)<br>
Так много громких слов в деци-децибелах!  <br>
Тебя я не слышу, но все чувствую я телом.  <br>
Так много громких слов, но мало-мало дела!  <br>
Но по ночам обводишь меня белым мелом.  </div>
  <div class='refren'>Эх! Сердце рвется на куски!  <br>
  Не сказал ты пацанам, что со мной вчера тусил,  <br>
  Но так тянет к тебе - больше нету сил!  <br>
  Парень из села, ты меня победил!  </div>
  <br>
<span class='blue'>[Припев]</span><br>
Парень из села,  <br>
Не для тебя цвела!  <br>
Вчера была вороной, <br>
Теперь у меня дела-ла-ла!  <br>
  <div class='refren'>Парень из села -  <br>
  На спине купола.  <br>
  Если увидит батя,  <br>
  Не дожить даже до утра! (та-та-та-та)  </div>
Парень из села,<br>
Ты мой парень из села!  <br>
Вчера была вороной,  <br>
Теперь у меня дела-ла-ла!  <br>
  <div class='refren'>Парень из села,  <br>
  Ты мой парень из села!  <br>
  Если увидит батя,  <br>
  Не дожить даже до утра! (та-та-та-та) </div>
  <br>
<span class='blue'>[Куплет 2] Я46мм - abab</span><br>
Ты подкатил на кортанах,  <br>
Но я для вида тебя быстро отмела (а)  <br>
Ты подкатил на кортанах (на кортанах, хэ)  <br>
На самом деле, от тебя я поплыла!  <br>
  <br>
  <span class='blue'>[Финал]</span><br>
  Мама, я влюбилась в парня из села!  <br>
  Меня обсуждает пол-района (ой)  <br>
  Я хранила тайну долго, как могла.  <br>
  А теперь я белая ворона.  <br>
  <br>
  <span class='blue'>[Припев]</span><br>
  Парень из села,  <br>
  Не для тебя цвела!  <br>
  Вчера была вороной, <br>
  Теперь у меня дела-ла-ла!  <br>
    <div class='refren'>Парень из села -  <br>
    На спине купола.  <br>
    Если увидит батя,  <br>
    Не дожить даже до утра! (та-та-та-та)  </div>
  Парень из села,<br>
  Ты мой парень из села!  <br>
  Вчера была вороной,  <br>
  Теперь у меня дела-ла-ла!  <br>
    <div class='refren'>Парень из села,  <br>
    Ты мой парень из села!  <br>
    Если увидит батя,  <br>
    Не дожить даже до утра! (та-та-та-та) </div>
  <br>
<span class='blue'><a href='https://on-hit.ru/texts/anja-pokrov-paren-iz-sela/'
  target='_blank'>Источник</a></span><br>
  <br>
    <br>
P.S. Ответ на песню Артура Бабича <a href-'parenprost.php'>"Парень простой"</a> (клип от 1.06.2020).<br>
<br>
Пародируется, возможно, неосознанно, русский шансон середины 1990-х -
напрашивается зачин песни "Пропадаю я" Любови Успенской (Мама, ради бога,
/Я ни капли не пьяна, /И не одинока, /И не просто влюблена) и припев
 "Младшего лейтенанта" Ирины Аллегровой (Младший лейтенант /Бередит сердца).  <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
