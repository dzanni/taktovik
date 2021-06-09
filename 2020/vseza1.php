<?php
$title = 'Dabro - Все за одного (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/pujQD1WvKvs'";
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
- Ха-ха-ха!
- В общем, батя сказал, теперь мотик целый месяц брать нельзя.<br>
- Ха-ха-ха! Да, братан, только с тобой такое могло произойти! Ха-ха-ха!<br>
- Нет, но если серьезно: что тебе для счастья-то нужно?<br>
- Для счастья? Ну, не знаю... Может, лям. А лучше два. Ха-ха-ха! Погнали!<br>
</span>
<br>
<span class='blue'>[Припев х2] Х4мм - abab</span><br>
Рядом мои пацаны, <br>
О них знает весь район.  <br>
Солнце прячется в ночи, <br>
А глаза под капюшон.  <br>
  <div class='refren'>Сотни судеб, как одна, <br>
  И тут все за одного.  <br>
  Коль идти, то до конца! <br>
  А любить, так всей душой!  </div>
  <br>
<span class='blue'>[Куплет 1] Х4мм? - xaxa<br></span>
Я не один, <span class='blue'>(Строка Д2м)<br></span>
Рядом моя тень. <span class='blue'>(Строка Х3м)<br></span>
Люди строят города, <br>
Меняют города людей. <span class='blue'>(Строка Я4м)<br></span>
  <div class='refren'>В бесконечной суете <br>
  Важно сохранить лицо,  <br>
  А в погоне за мечтой<br>
  Придётся набирать разгон.  <span class='blue'>(Строка Я4м)</span></div>
Где теперь моя судьба? <br>
В чём секрет большой любви?  <br>
Я так много о ней пел, <br>
Ещё больше я любил.  <br>
  <div class='refren'>Кем мы стали, и когда <br>
  Изменился этот мир?  <br>
  Остаются рядом те,<br>
  Кто меня зовёт своим.</div>
  <br>
<span class='blue'>[Припев х2]</span><br>
  Рядом мои пацаны, <br>
  О них знает весь район.  <br>
  Солнце прячется в ночи, <br>
  А глаза под капюшон.  <br>
    <div class='refren'>Сотни судеб, как одна, <br>
    И тут все за одного.  <br>
    Коль идти, то до конца! <br>
    А любить, так всей душой!  </div>
  <br>
<span class='blue'>[Куплет 2] Х7м/м? - aabb <br></span>
Я не поменялся, я такой же, как и был (на-на-на)  <br>
Годы пролетят, но важно то, что есть внутри (на-на-на)<br>
Улица тебе не скажет, где меня искать,  <br>
Но покажет, кто твой друг, ну а кто по жизни враг (эй)  <br>
  <div class='refren'><span class='blue'>Х35жм - AbAb<br></span>
  Ой, пути-дорожки <br>
  Нас свели и снова развели!  <br>
  Ой, не понарошку <br>
  Думал я, когда клялись в любви! </div>
<span class='blue'>Тр3331жм - AbAb<br></span>
В кармане моём зажигалка, <br>
В сердце остатки любви.  <br>
(О-о-о) я без тебя, но ты знаешь, <br>
Я не один! <br>
  <br>
  <span class='blue'>[Припев х4]</span><br>
  Рядом мои пацаны, <br>
  О них знает весь район.  <br>
  Солнце прячется в ночи, <br>
  А глаза под капюшон.  <br>
    <div class='refren'>Сотни судеб, как одна, <br>
    И тут все за одного.  <br>
    Коль идти, то до конца! <br>
    А любить, так всей душой!  </div>
  <br>

<span class='i'>
- Слушай, помнишь, ты спрашивал, что мне для счастья нужно?
Так вот, не нужны мне деньги! Главное, чтоб друзья были рядом.<br>
</span>
<br>
<span class='blue'><a href='https://genius.com/Dabro-all-for-one-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
