<?php
$title = 'Александр Пушной - Все идет по плану (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/AAKZE4aIU40'";
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
[Пушной] Кирюха, здорово!<br>
[Кирилл] Привет, старик!<br>
[Пушной]  Как ты?<br>
[Кирилл] Чо, опять к своим?<br>
[Пушной]  Ну, естественно!<br>
[Кирилл] Давай!.. Щас зайду!<br>
[Пушной] Давай, заходи!<br>
</span>
<br>
<span class='blue'>Тк4цм/? - хх<br></span>
От границы ключ переломлен пополам,<br>
А наш батюшка Ленин совсем усоп,<br>
Он разложился на плесень и на липовый мёд,<br>
А Перестройка всё идёт и идёт по плану,<br>
И вся грязь превратилась в голый лёд,  <br>
   <br>
          <div class='refren'>
<span class='blue'>Тк2ж/ - AAAA<br></span>
            И всё идёт по плану!<br>
 Всё идет по плану!<br>
  Всё идет по плану!<br>
   Всё идет по плану!</div>
<br>
А моя судьба захотела на покой,<br>
Я обещал ей не участвовать в военной игре,<br>
Но на фуражке на моей серп и молот и звезда,<br>
Как это трогательно — серп и молот и звезда,<br>
Лихой фонарь ожидания мотается,<br>
<br>
<div class='refren'>И всё идёт по плану!<br>
Всё идет по плану!<br>
Всё идет по плану!<br>
Всё идет по плану!</div>
<br>
А моей женой накормили толпу,<br>
Мировым кулаком растоптали ей грудь,<br>
Всенародной свободой растерзали ей плоть,<br>
Так закопайте её во Христе - <span class='blue'>(Строка Тк3м)<br></span>
<br>
<div class='refren'>Ведь всё идёт по плану!<br>
Всё идет по плану!<br>
Всё идет по плану!<br>
Всё идет по плану!</div>
<br>
Один лишь дедушка Ленин хороший был вождь,<br>
А все другие остальные — такое дерьмо,<br>
А все другие враги и такие дураки.<br>
Над родною над отчизной бесноватый снег шёл,<br>
Я купил журнал «Корея» — там тоже хорошо,<br>
Там товарищ Ким Ир Сен, там то же, что у нас.<br>
Я уверен, что у них всё то же самое — <br>
<br>
<div class='refren'>И всё идёт по плану!<br>
Всё идет по плану!<br>
Всё идет по плану!<br>
Всё идет по плану!</div>
<br>
А при коммунизме всё будет заебись,<br>
Он наступит скоро — надо только подождать!<br>
Там всё будет бесплатно, там всё будет в кайф,<br>
Там, наверное, ваще не надо будет умирать!<br>
Я проснулся среди ночи и понял, что - <span class='blue'>(Строка Тк3д)<br></span>
<br>
<div class='refren'>Всё идёт по плану!<br>
Всё идет по плану!<br>
Всё идет по плану!<br>
Всё идет по плану!</div>
<br>
Всё идет по плану!<br>
<br>
<span class='i'>- Наливай!<br>
- [неразб.] спасибо, брат!</span><br>
<br>
<span class='blue'><a href="http://www.gr-oborona.ru/texts/1056899068.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Перепев песни Егора Летова "Все идет по плану" (1988). Использованный Летовым
поэтический размер - 4-стопный тактовик с цезурой и тенденцией к парной рифме -
к середине 2010-х гг. стал
самым популярным размером песен русской эстрады.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
