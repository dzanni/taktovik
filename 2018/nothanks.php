<?php
$title = 'Соня Мармеладова - No, thanks (F*uck fresh blood - слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/OfTLqoKdEwo'";
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

<span class='blue'>Дк4цм/ж - aa, AA</span><br>
No flex, я забиваю в джоинт гвозди.<br>
No, thanks, не хочу быть под жирным боссом.<br>
Мой перс указал тебе шконку дальше,<br>
RBL — ваш король тусит у параши.<br>
<br>
Влад PM, бей-бей, поросенок, нахуй,<br>
Если Рестор мне купит Tahoe,<br>
Не буду тратить больше пары барс<br>
На твой жирный зад, Витя Брови, блядь!<br>
<br>
Лучший панч сезона, Ревизорро <br>
Снял фальшивый скальп, как парик с Кобзона, <br>
С вашей кодлы. Кто тут на битах легенда?<br>
Крутого MC не назвали б Глебом.<br>
<br>
Алло, Эгрегор, башня танка,<br>
Тик-так, бум-бум, эра киберпанка <br>
Прошла, такой кал не снял бы даже Герман.<br>
Новый Fresh-blood — это зомби-ферма.<br>
<br>
Инферно! Bad Bass эпоха, <span class='blue'>(Строка Дк3ж)</span><br>
Пучок фрешменов в ларьке за сотку.<br>
<span class='blue'>Ак4цм/ж - аа, AA</span><br>
Ты свежий, будто набор — три помидора,<br>
Это really перебор, ваша кодла — восемь пидОров.<br>
<br>
Позорите голубей, влетая, как Гарри Кейн,<br>
Я один могу шатать шестнадцать этих читарЕй.<br>
<span class='blue'>Дк4цм/ж - aa, AA</span><br>
Мои парни — два дедА и Букер,<br>
Я — продажный, да, но меня хуй кто купит!<br>
<br>
<span class='blue'>Я4цн1ж - AA</span><br>
Ты одноневка, трусы-неделька,<br>
Бро, я нагну вас, как Ури Геллер.<br>
Мой хуй, как тубус. На вкус, как хумус,<br>
Евреи любят хубба-бубба.<br>
<br>
Твой стафф — жевачка, панч-лайнов пачка,<br>
<span class='blue'>Ак4цм/ж - аа, AA</span><br>
Пэ-пэ! - да мне тупо тут некого даже баттлить.<br>
Бэнг, они говорят, делай пизддатый сайфер,<br>
My family по-маме — пулемет Гатлинг.<br>
<br>
Да, я валю вас, как ёбаных тараканов,<br>
Давлю вас на масках Гарри, ебу, как Мату Хари.<br>
Брутально, будто Дукалис. Вы баттлить и не пытались.<br>
Ваш штырь меня вставляет, как ёбаный Руда Раллис.<br>
<br>
Нихуя, мэн, они, правда, делают вид,<br>
Нынешний «Дом 2» — это гребаный динамит.<br>
No, thanks, и скорее противник — какой-то Соболев,<br>
Ведь рэперы с Фреш-блада, вы баттлите хуже блогеров.<br>
<br>
<span class='blue'>Тк4цмж - aBaB</span><br>
Эй, это Слава СТС, где «С» — <br>
Это suck my dick, тупорылый пидор,<br>
Ебал вас всех, проебал протест,<br>
Но имена врагов — на могильных плитах.<br>
 <br>
<span class='blue'>Д3ж? - AAAA</span><br>
Эй, в белой майке на блоке!<br>
Эй, я, наверное, broken!<br>
Эй, ведь мне стыдно за строки,<br>
Что кричат эти уёбки!<br>
<br>
Эй, баттл-рэп — это мёртвый,<br>
Эх, бомж в заброшенной стройке.<br>
Эй, но за что вы ебёте<br>
Его который уж год? <span class='blue'>(Строка Дк3м)</span><br>
<br>
No, Thanks!<br>
<br>
<span class='blue'><a href='https://cl5.ru/publ/sonya-marmeladova-no-thanks-fuck-fresh-blood-tekst-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
