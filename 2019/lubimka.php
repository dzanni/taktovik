<?php
$title = 'NILETTO - Любимка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/xSgT4ZtT5M0'";
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

<span class='blue'>[Интро] Дк3м/? - aa<br></span>
Прайм. Прайм-тайм.<br>
Прайм, прайм, прайм.<br>
<br>
<span class='blue'>[Переход] Дк3мм - abab<br></span>
Я просто трачу свой прайм<br>
На тебя, тебя, тебя... (тебя, а, а)<br>
Я просто трачу свой тайм<br>
На тебя, тебя, тебя.<br>
<br>
<span class='blue'>[Куплет 1] Ан2м/? - aaaaaaaa<br></span>
Я просто трачу себя. <br>
Я без сдачи в тебя.<br>
Пьяный врач мне сказал - <br>
Между нами стрельба!<br>
Между нами война, <br>
Между нами пальба,<br>
Между нами вода, <br>
Между нами вода (а)!<br>
<br>
<span class='blue'>[Переход 2] Дк3м/м - aabbaabb<br></span>
Давай на тет-а-тет (ё)<br>
Ты И мой ТТ (ё)<br>
Я прикрываю свой тыл, <br>
Пара - минус один (ё)<br>
  <div class='refren'>Где же ты, где же ты, где? (я)<br>
  Тратил себя по КД (Cooldown) (я)<br>
  Был табельным, стал холостым (я)<br>
  Чуть не погиб молодым (я)</div>
<br>
  <span class='blue'>[Переход]<br></span>
  Я просто трачу свой прайм<br>
  На тебя, тебя, тебя... (тебя, а, а)<br>
  Я просто трачу свой тайм<br>
  На тебя, тебя, тебя.<br>
<br>
<span class='blue'>[Припев х2] Тк4цм/ - aaХ<br></span>
Время пострелять, между нами пальба (Пау, пау!)<br>
Па-па попадаешь в сердце, остаёшься там,<br>
Любимка!<br>
<div class='refren'>
  <span class='blue'>(Дк3м/ - aaa)<br></span>
Я просто трачу себя. <br>
Я просто трачу себя.<br>
Всего себя на тебя.</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Это, это deadline. <br>
Я потратил весь прайм.<br>
Ля, мне нужен Skyline, <br>
Чтоб отсюда слинять.<br>
Между нами Contra - <br>
Это Mortal Combat.<br>
Ты - вампир, я - Blade-2, <br>
В первом он без ствола!<br>
<br>
<span class='blue'>[Переход 2]<br></span>
Давай на тет-а-тет (ё)<br>
Ты и мой ТТ (ё)<br>
Я прикрываю свой тыл (ой!) <br>
Я ж тебя уже слил (ё)<br>
  <div class='refren'>Где же ты, где же ты, где? (я)<br>
  Тратил себя по КД (Cooldown) (я).<br>
  Был табельным, стал холостым (я)<br>
  Чуть не погиб молодым.</div>
<br>
<span class='blue'>[Переход 3] Я3ж/ AXA<br></span>
(Е-е, е-е, е-е!)<br>
И она плачет, плачет,<br>
Как в песне "Cry me a river".<br>
(Е-е, е-е, е-е!)<br>
И она плачет, плачет...<br>
(Primetime!)<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Время пострелять, между нами пальба (Пау, пау!)<br>
Па-па попадаешь в сердце, остаёшься там,<br>
Любимка!<br>
<div class='refren'>Я просто трачу себя. <br>
Я просто, трачу себя.<br>
Всего себя на тебя.</div>
<br>
<span class='blue'>[Финал] Х2422дм - A'aA'a<br></span>
И я бЕз ствола (эй)<br>
Без ствола, как без тебя (оу)<br>
Буду бедствовать (эй)<br>
(Ла-ла, ла-ла, ла-ла) <br>
Без ствола. <br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/n/niletto/niletto-lubimka.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
