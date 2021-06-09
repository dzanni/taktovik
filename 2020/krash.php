<?php
$title = 'Клава Кока & NILETTO - Краш (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/zvPOM9I1hpo'";
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

<span class='blue'>[Вступление, Клава Кока] Л4цмм? - abab</span><br>
Ты-ты-ты мне не вра-а-аг, а-а-а!<br>
Но с тобой не дружу-у-у, у-у-у!<br>
Я твой личный манья-а-ак, а-а-а!<br>
Я тебя придушу, я тебя придушу-у-у!<br>
<br>
<span class='blue'>[Куплет 1, Клава Кока] Х2-6м/ - aaaaa</span><br>
Ты мой краш!<br>
Либо я, либо никто - это шантаж!<br>
Я приду одна, я знаю твой этаж!<br>
Покушаюсь на тебя, ведь твой типаж (о-о) -<br>
Ограниченный тираж!<br>
  <div class='refren'>
    <span class='blue'>Дк23м/ - aaaa</span><br>
    Мы с тобой, boy, <br>
    Поиграем, но не в консоль.<br>
    И ты мой, мой - <br>
    Ты мой сахар, и в этом соль!<br>
    Да, любовь - боль, <br>
    Ведь опасно быть не со мной.<br>
    Между нами бой, <br>
    Но-о-о...</div>
<br>
<span class='blue'>[Припев, NILETTO] Ан2мм - abab</span><br>
Ты-ты-ты мне не враг, <br>
Но с тобой не дружу.<br>
Я твой личный маньяк, <br>
Я тебя придушу!<br>
  <div class='refren'>Ты, ты будешь со мной - <br>
  Без тебя мне не жить!<br>
  Я могу убежать, <br>
  Ты меня привяжи!</div>
<br>
<span class='blue'>[Припев, Клава Кока]</span><br>
Ты, ты, ты мне не враг, <br>
Но с тобой не дружу.<br>
Я твой личный маньяк, <br>
Я тебя придушу!<br>
  <div class='refren'>Ты, ты будешь со мной - <br>
    И останешься жив.<br>
    Я могу убежать, <br>
    Ты меня привяжи!</div>
<br>
<span class='blue'>[Куплет 2, NILETTO] Л12жм? - AbAb</span><br>
Странно, <br>
Ты себя привезла!<br>
Вставай (ха)! <br>
Я тебя привязал!<br>
  <div class='refren'>
    <span class='blue'>Х4м/ - aaa</span><br>
    Я твой самый близкий boy,<br>
    Это ближний "Морской бой".<br>
    Один "Б" - попала, ой!</div>
<br>
<span class='blue'>[Припев, NILETTO]</span><br>
Ты, ты, ты мне не враг,<br>
Мой любимый мультфильм!<br>
Тебе не убежать,<br>
Моя April O'Neil!<br>
  <div class='refren'>Sarah Connor, во снах<br>
    Я к тебе приходил!<br>
    Я твой жидкий металл -<br>
    Я тебя растворил!</div>
Ла-ла-ла-ла!<br>
<br>
<span class='blue'>[Припев, Клава Кока]</span><br>
Ты, ты, ты мне не враг, <br>
Но с тобой не дружу.<br>
Я твой личный маньяк, <br>
Я тебя придушу!<br>
  <div class='refren'>Ты, ты будешь со мной - <br>
  И останешься жив.<br>
  Я могу убежать, <br>
  Ты меня привяжи!</div>
<br>
<span class='blue'>[Припев, NILETTO]</span><br>
Ты, ты, ты мне не враг, <br>
Но с тобой не дружу.<br>
Я твой личный маньяк, <br>
Я тебя придушу!<br>
  <div class='refren'>Ты, ты будешь со мной - <br>
  Без тебя мне не жить!<br>
  Я могу убежать, <br>
  Ты меня привяжи!</div>
<br>
<span class='blue'>[Переход]</span><br>
Ты, ты, ты мне вра-а-а-г, a-a-a!<br>
Но с тобой не дружу-у-у, у-у-у!<br>
Я твой личный манья-a-aк, а-а-а!<br>
Я тебя придушу, я тебя придушу!<br>
<br>
<span class='blue'>[Припев, Клава Кока]</span><br>
Ты, ты, ты мне не враг, <br>
Но с тобой не дружу<br>
Я твой личный маньяк, <br>
Я тебя придушу!<br>
  <div class='refren'>Ты, ты будешь со мной - <br>
    И останешься жив!<br>
    Я могу убежать, <br>
    Ты меня привяжи!</div>
<br>
<span class='blue'>[Припев, NILETTO]</span><br>
Ты, ты, ты мне не враг, <br>
Но с тобой не дружу.<br>
Я твой личный маньяк, <br>
Я тебя придушу!<br>
  <div class='refren'>Ты, ты будешь со мной - <br>
  Без тебя мне не жить!<br>
  Я могу убежать, <br>
  Ты меня привяжи!</div>
<br>
<span class='blue'>[Финал] Ак3м/? - aaaAA'</span><br>
Ла-ла-лА-ла-ла, A-a-a, а-а-А!<br>
Ла-ла-лА-ла-ла, A-a-а, а-а-А!<br>
Ла-ла-лА-ла-ла, А-а-а, а-а-А!<br>
Ла-ла-лА-ла-ла, A-а, A-а!<br>
Ла-ла-лА-ла-ла (а, а)!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/k/coca-klavdia/clava-coca-niletto-crush.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
