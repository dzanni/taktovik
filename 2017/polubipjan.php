<?php
$title = 'Мари Краймбрери - Полюби меня пьяную (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/lh_1CoyDNS0'";
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
<span class='blue'>[Куплет 1] Тк3мж - aBaB<br></span>
Зачем тебе говорить, как есть? <br>
Мне очень стыдно за эту слабость. <br>
Ты с недостатками мне нравишься весь, <br>
Моя первая за годы радость. <br>
<br>
<span class='blue'>[Переход] Л2-4м - ababcc<br></span>
Стой, стой, стой!<br>
Мне снились твои черты! <br>
Пой, пой, пой,<br>
Мужчина моей мечты! <br>
У нас с тобою не получится такая жизнь! <br>
Ну, а пока - дрожит. <br>
<br>
<span class='blue'>[Припев] Тк3д - A'A'A'A'<br></span>
Ты полюби меня пьяную, пьяную!<br>
Мне лишь тогда хватает сил, и я говорю: <br>
Не отвози домой, - сама доеду, докурю! <br>
Боюсь влюбиться... Ну, а вдруг я уже люблю? <br>
Ты полюби меня пьяную, пьяную! <br>
Мне лишь тогда хватает сил, и я говорю: <br>
Не отвози домой, - сама доеду, докурю! <br>
Боюсь влюбиться, но по-моему, уже люблю! <br>
<br>
<span class='blue'>[Куплет 2] Тк4цм - aaaa<br></span>
Тебе мой нравится рваный стиль... <br>
А мне по кайфу так твоя свобода, твой экстрим. <br>
Перелюблю остальных и теперь буду лишь с ним. <br>
У всех там океаны, а у нас уже штиль. <br>
<br>
<span class='blue'>[Переход] Л34жм - ABABcc<br></span>
Будет, будет, будет! <br>
Но я никогда не скажу тебе прямо! <br>
Люди, люди, люди! <br>
Хочу, но сопротивляюсь упрямо <br>
Просыпаюсь, обновляю WhatsApp, но нет - <br>
Значит - финал, куплет! <br>
<br>
Ты полюби меня... <br>
<br>
<span class='blue'>[Припев]<br></span>
Ты полюби меня пьяную, пьяную!<br>
Мне лишь тогда хватает сил, и я говорю: <br>
Не отвози домой, - сама доеду, докурю! <br>
Боюсь влюбиться... Ну, а вдруг я уже люблю? <br>
Ты полюби меня пьяную, пьяную! <br>
Мне лишь тогда хватает сил, и я говорю: <br>
Не отвози домой, - сама доеду, докурю! <br>
Боюсь влюбиться, но по-моему, уже люблю! <br>
<br>
<span class='blue'>Источник: официальный текст под клипом на Youtube</span><br>
<br>
<br>
N.B. На фонограмме дактилические, а не ожидаемые мужские рифмы в припеве:
пьЯную - гОворю (слышится "гАварю") - дОкурю ("дАкурю") - ужЕ люблю. В итоге припев
почти логаэд.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
