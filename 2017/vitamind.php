<?php
$title = 'MONATIK - Vitamin D (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/iib4Bmy5cow'";
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

Эй! Дай мне ударных!<br>
Вау!<br>
Вау!<br>
<br>
<span class='blue'>[Куплет 1] Тк2-4цмд? - aaaB’B’B’acccс<br></span>
Хороший день заменила ночь,<br>
По небу звезды, похожи на тебя (Вау! Точь-в-точь!)<br>
Нет негативных факторов,<br>
Злых дирEкторов,<br>
Небезопасных сEкторов.<br>
Прочь! <br>
Вся скукота<br>
Разбежалась, и напомнила: я не устал. (Вау! Да)<br>
Я работал в поте лица, <br>
Но бодрит эта красота!<br>
<br>
<span class='blue'>[Переход] Л21жм - AAAbcAAAbc<br></span>
И я хочу высоких (У!) <br>
Я хочу ударных (Вау!) <br>
Я хочу бессонных (У!) <br>
Ночей, <br>
Но лишь с тобой! <br>
Дай мне высоких (У!) <br>
Дай мне ударных (Вау!) <br>
Да дай мне бессонных (У!)<br>
Ведь чей, <br>
Если не твой (я)? <br>
<br>
<span class='blue'>[Припев] Я4м - aa<br></span>
Я не устал еще ничуть, <br>
Еще успеем о... <br>
Еще успеем отдохнуть! <br>
<div class='refren'>
<span class='blue'>Дк23мж? - aXxa<br></span>
Получаем D! <br>
Не скучай, получай Vitamin D!<br>
Вместе со мной!<br>
Получаем D! <br>
Не скучай, получай Vitamin D!</div>
<br>
<span class='blue'>[Куплет 2] Тк4цдм - A’A’bb<br></span>
Твои плавные движенья улучшают зренье каждого.<br>
Все получают наслаждение от мгновения каждого.<br>
С тобой на каждом теле блик, блестит роса (надо же) <br>
И все видят! Все видят! Все видят чудеса (а я...) <br>
<br>
<span class='blue'>[Переход]<br></span>
...высоких (У!) <br>
Я хочу ударных (Вау!) <br>
Я хочу бессонных (У!) <br>
Ночей, <br>
Но лишь с тобой! <br>
Дай мне высоких (У!) <br>
Дай мне ударных (Вау!) <br>
Да дай мне бессонных (У!) <br>
Ведь чей, <br>
Если не твой (я)? <br>
 <br>
<span class='blue'>[Припев]<br></span>
Здесь не устал никто ничуть, <br>
Еще успеем о...<br>
Еще успеем отдохнуть! <br>
<div class='refren'>
Получаем D!<br>
Получаем D!<br>
Не скучай, получай Vitamin D!<br>
Вместе со мной!<br>
Получаем D!<br>
Не скучай, получай Vitamin D!</div>
<br>
<span class='blue'>[Куплет 2] Тк2-4жм - ABAB, aBaB<br></span>
Они просили: «...скажите на милость,<br>
Сестрицы и братцы,<br>
Что в начале появилось,<br>
Музыка или танцы...?»<br>
А... а ответ простой:<br>
Еще никто не видел такой красоты,<br>
Давай, танцуй, не стой,<br>
Ведь... вначале появилась ты!<br>
<br>
<span class='blue'>[Аутро] Тк23жд - XAB'AB'<br></span>
Вначале появилась... <br>
Эй, ты! Ты там с нами?<br>
Давай займемся танцами!<br>
Эй ты! Ты там с нами? <br>
Давай займемся танцами!<br>
Эй ты! Ты там с нами? <br>
Давай займемся танцами!<br>
Эй ты! Ты там с нами? <br>
Давай, не скучай, получай Vitamin D! <span class='blue'>(Строка Тк4цж)<br></span>
<br>
Ну еще немного!<br>
<br>
<span class='blue'>[Припев]<br></span>
Я не устал еще ничуть, <br>
Еще успеем,<br>
Еще успеем отдохнуть! <br>
<br>
(Получай!)<br>
<br>
Слова и музыка: Дмитрий Монатик<br>
<br>
<span class='blue'>Источник: текст под роликом Youtube<br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
