<?php
$title = 'T-Fest - Улети (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/CB0DEcaPwhw'";
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

<span class='blue'>[Куплет 1] Тк4цж - AAAA<br></span>
Слово "навсегда" мы клеили из пепла.<br>
Все эти слова под открытым небом.<br>
Прошлым чувствам я закрыл глаза навеки.<br>
Прости, малая, но мне надоело!<br>
<br>
<span class='blue'>[Припев] Л4д - A'A'A'A'</span><br>
Улети и не вспоминай меня!<br>
Улети и не вспоминай меня!<br>
Улети и не вспоминай меня!<br>
Улети и не вспоминай меня!<br>
<br>
<span class='blue'>[Переход] Х6м - aa<br></span>
Улети, но не забудь сказать «пока»!<br>
Улети, но не забудь сказать «пока»!<br>
<br>
<span class='blue'>[Куплет 2] Тк3/4цм - aaxx<br></span>
Улетай, ты же знаешь, это всё.<br>
Я бы пропал, но я себя и не нашел.<br>
Я попросил тебя остаться, но ты, минимум, должна<br>
Открыть глаза и сделать то, что я прошу!<br>
<br>
<span class='blue'>[Припев]<br></span>
Улети и не вспоминай меня!<br>
Улети и не вспоминай меня!<br>
Улети и не вспоминай меня!<br>
Улети и не вспоминай меня!<br>
<br>
<span class='blue'>[Переход х2]<br></span>
Улети, но не забудь сказать «пока»!<br>
Не забудь, не забудь!<br>
Улети, но не забудь сказать «пока»!<br>
Не забудь, не забудь!<br>
<br>
<span class='blue'>[Куплет 3] Тк3ж, Тк43мж? - AABB, xAxAaAX<br></span>
В первый раз я захотел уйти с начала.<br>
В первый раз я говорил тебе: «Не надо!»<br>
Просто забери себя, прощай, oh yeah!<br>
Я не хочу видеть тебя...<br>
Я тебя проведу, но знай,<br>
Что больше не хочу быть поближе!<br>
Я тебя украл когда-то,<br>
Но я верну тебя, слышишь<br>
Я не могу тебе дать то,<br>
Что ты хотела так получить, я лишний<br>
В этом сладком мире...<br>
<br>
<span class='blue'>[Припев]</span><br>
Улети и не вспоминай меня!<br>
Улети и не вспоминай меня!<br>
Улети и не вспоминай меня!<br>
Улети и не вспоминай меня!<br>
<br>
Пока, пока, пока!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/t/t-fest/8049-tfest-uleti-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Разный размер куплетов.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
