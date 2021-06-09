<?php
$title = 'Мари Краймбрери - На тату (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/MILxQKh2iZw'";
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

<span class='blue'>[Куплет 1] Дк2-4цмд - aaaBBb<br></span>
Полчаса, <br>
Ты в порванной куртке на руках.<br>
Пульсирует, будто мы в облаках.<br>
Разбитыми бокалами, <br>
Спроси - изменяла ли?<br>
И правду в глазах лови (Э!)<br>
<div class='refren'>
  <span class='blue'>Дк31мж? - AbAb<br></span>
Я хочу, чтобы ты приехал. <br>
Хорошо?<br>
Расскажи, почему до сих пор от меня <span class='blue'>(Строка Дк4цм)</span><br>
Не ушел?</div>
  <span class='blue'>Дк34цжм? - AbAb<br></span>
Умоляю, лишь не говори мне,  <br>
Что им говорил и бежал из глаз!<br>
Я хочу знать, что так, как у нас, в твоей жизни<br>
Было один лишь раз.<br>
<br>
<span class='blue'>[Припев] Л23мж - aBBcaDDc<br></span>
Я люблю тебя, <br>
Как в самых попсовых мотивах,<br>
Самых зачитанных книгах, <br>
А не в Ютуб.<br>
Я веду тебя, <br>
Как клятвы на стенах в подъезде.<br>
Помнишь рисунки созвездий?<br>
Теперь одна на тату!<br>
<div class='refren'>
Я тебя, <br>
Как в самых попсовых мотивах,<br>
Самых зачитанных книгах, <br>
А не в Ютуб.<br>
Я веду тебя, <br>
Как клятвы на стенах в подъезде.<br>
Помнишь рисунки созвездий?<br>
Теперь одна на тату!</div>
<br>
<span class='blue'>[Переход]<br></span>
На тату... На тату... (О-о!)<br>
На тату... На тату...<br>
<br>
<span class='blue'>[Куплет 2] Дк2-4цмж - abbAAbA<br></span>
Много лет <br>
Нас знают и бармены и дворы -<br>
Казалось бы, разные миры.<br>
Но вместе, будто бы дети,<br>
Позабыв социальные сети,<br>
Нам есть друг у друга спросить,<br>
Что есть варианты всегда, что ответить!<br>
<div class='refren'>
Ты приедешь сегодня ночью,<br>
Хорошо?<br>
Без тебя не начну я точно<br>
Своё шоу.</div>
  <span class='blue'>Дк34цм? - xaxa<br></span>
Да, умею любой, но быть нежной хочу<br>
Только лично, не на показ.<br>
Если это не есть любовь,<br>
То в нее я верю в последний раз.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я люблю тебя, <br>
Как в самых попсовых мотивах,<br>
Самых зачитанных книгах, <br>
А не в Ютуб.<br>
Я веду тебя, <br>
Как клятвы на стенах в подъезде.<br>
Помнишь рисунки созвездий?<br>
Теперь одна на тату!<br>
<div class='refren'>
Я тебя, <br>
Как в самых попсовых мотивах,<br>
Самых зачитанных книгах, <br>
А не в Ютуб.<br>
Я веду тебя, <br>
Как клятвы на стенах в подъезде.<br>
Помнишь рисунки созвездий?<br>
Теперь одна на тату!</div>
<br>
<span class='blue'>[Переход]<br></span>
На тату... На тату... (О-о!)<br>
На тату... На тату...<br>
<br>
<span class='blue'>[Припев]<br></span>
Я люблю тебя, <br>
Как в самых попсовых мотивах,<br>
Самых зачитанных книгах, <br>
А не в Ютуб.<br>
Я веду тебя, <br>
Как клятвы на стенах в подъезде.<br>
Помнишь рисунки созвездий?<br>
Теперь одна на тату!<br>
<div class='refren'>
Я тебя, <br>
Как в самых попсовых мотивах,<br>
Самых зачитанных книгах, <br>
А не в Ютуб.<br>
Я веду тебя, <br>
Как клятвы на стенах в подъезде.<br>
Помнишь рисунки созвездий?<br>
Теперь одна на тату!</div>
<br>
<span class='blue'><a href='https://text-pesni.su/page/mari-krajmbreri-na-tatu'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
