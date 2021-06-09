<?php
$title = 'Слава КПСС - Матильда (Шнуров Diss, слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/VwgsX5KZRoQ'";
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

<span class='blue'>[Припев] Тк4ц3м - aa<br></span>
О, и ты вздёрнешься на шнуре<br>
В своём огромном особняке!<br>
Да, ты вздёрнешься на шнуре<br>
В своем огромном особняке.<br>
<br>
<span class='blue'>[Куплеты] Ак4цм - AbAb<br></span>
Когда Сережа Шнуров предал жену,<br>
Не было б никого, кто бы это опроверг.<br>
Недельку б поныл, что просрал мечту:<br>
«Дорогая, я такой конченый человек!»<br>
<div class='refren'>
  <span class='blue'>Ак4цжд - AB'AB'<br></span>
Но эгоцентричный мудила <span class='blue'>(Строка Ак3ж)<br></span>
Остаётся таким же, даже просрав самое дорогое!<br>
И сидя на веранде в своей московской вилле,<br>
Скоро он уже строчил совсем другое...</div>
<span class='blue'>Ак4цж - ABAB<br></span>
Типа: «Да похуй, что предал, родная!<br>
Таких шлюх как ты, у меня будет столько!<br>
Я ведь Сережа Шнуров, ебать его в сраку.<br>
И мне тут даст каждая марамойка!<br>
<div class='refren'>
  <span class='blue'>Ак3жм? - XaX'a<br></span>
А Матильда или Эсмеральда - похуй!<br>
Мы не в Нотр-Дам де Пари!»<br>
Но, вжух! И в оранжевых леггинсах<br>
Пляшет жалкий, одинокий старик.</div>

<span class='blue'>Ак4цжм - ABAB<br></span>
Всю жизнь он строил из себя кого-то,<br>
Делал перед камерой сложные щи.<br>
На всю страну выглядеть идиотом -<br>
Это было больно, но он продолжал тащить<br>
<div class='refren'>
Свою лямку: хиты для плебеев, <br>
Корпораты, туры и пьяные тусы.<br>
Он знал - дома она его встретит!<br>
Для остальных он был Сережа Шнуров -</div>

Гигант духа! <span class='blue'>(Строка Ак2ж)<br></span>
Променять мечту на пять минут не лучшего секса -<br>
Пойми, Сережа, это ты шлюха!<br>
И на Ваганьковском тебе уготовано место!<br>
<div class='refren'>
Ведь если человека никто не видит,<br>
То он и как бы не существует вполне.<br>
А единственного, кто видел тебя, ты предал,<br>
Не было б никого, кто это опроверг!</div>
<br>
<span class='blue'>[Припев]<br></span>
О, и ты вздёрнешься на шнуре<br>
В своём огромном особняке.<br>
Да, ты вздёрнешься на шнуре<br>
В своем огромном особняке.<br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'><a href='https://www.gl5.ru/s/slava_kpss/slava-kpss-matilda.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
