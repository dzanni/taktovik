<?php
$title = 'Pizza - Марина (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Hsblv-OsYKY'";
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

<span class='blue'>[Куплет 1] Д2дм? - A'A'bA'A'b<br></span>
Длинные волосы <br>
Белыми полосами <br>
Делят лицо.<br>
Бурная молодость <br>
Школьного голоса <br>
С белым винцом.<br>
<div class='refren'>
  <span class='blue'>Тр23дм - A'A'bA'A'b<br></span>
Боль моя колется - <br>
Ревнивая модница, <br>
Вмятина на стене.<br>
Погляди сзади на, <br>
На спине ссадина - <br>
Автограф твой, разве нет?</div>
<br>
<span class='blue'>[Переход] Тк2-4цм/ - aaaa<br></span>
Снова лютой болью ты вой,<br>
Но мы скажем людям - это любовь.<br>
Вот такая, вот такая любовь -<br>
Вот такая любовь.<br>
<br>
<span class='blue'>[Припев] Тк23ц24цжм - AbAb AbCCbb<br></span>
Непримиримая Марина. <br>
Побори меня в очередной раз.<br>
Знаю, не перегорим мы. <br>
Ты примерила, и в пору тебе как раз.<br>
<div class='refren'>Непримиримая Марина, <br>
Разбери меня на ад и рай.<br>
Разбросай меня по краю.<br>
Твоя любимая игра я -<br>
Ну, так и играй!<br>
 Ну так, ну так и играй-яй-яй!</div>
<br>
<span class='blue'>[Куплет 2] Тр2жм? -  AAbAAb<br></span>
В халате милашка, <br>
Так расхалаживаешь -<br>
Я не расту.<br>
Ведь эта жизнь кабала же,<br>
 Фотоколлажи <br>
 Сбиты в инсту.<br>
<div class='refren'>
    <span class='blue'>Тк4ц2м/д - aaaB'B'<br></span>
    Я угадаю твою песню с трёх нот. <br>
Об стену будет разбит red note.<br>
Нам бы, нам бы, нам бы всем на дно.<br>
Да ещё без звука я -<br>
Крыша высокая.</div>
<br>
<span class='blue'>[Припев]<br></span>
Непримиримая Марина. <br>
Побори меня в очередной раз.<br>
Знаю, не перегорим мы. <br>
Ты примерила, и в пору тебе как раз.<br>
<div class='refren'>Непримиримая Марина, <br>
Разбери меня на ад и рай.<br>
Разбросай меня по краю.<br>
Твоя любимая игра я -<br>
Ну, так и играй!<br>
 Ну так, ну так и играй-яй-яй!</div>
<br>
<span class='blue'>[Переход]<br></span>
Снова лютый бой, лютый бой,<br>
Но мы скажем людям - это любовь.<br>
Вот такая, вот такая любовь -<br>
Вот такая любовь.<br>
<br>
<span class='blue'>[Припев]<br></span>
Непримиримая Марина. <br>
Побори меня в очередной раз.<br>
Знаю, не перегорим мы. <br>
Ты примерила, и в пору тебе как раз.<br>
<div class='refren'>Непримиримая Марина, <br>
Разбери меня на ад и рай.<br>
Разбросай меня по краю.<br>
Твоя любимая игра я -<br>
Ну так и играй-яй-яй!</div>
<br>
<span class='blue'>[Припев]<br></span>
Непримиримая Марина. <br>
Побори меня в очередной раз.<br>
Знаю, не перегорим мы. <br>
Ты примерила, и в пору тебе как раз.<br>
<div class='refren'>Непримиримая Марина, <br>
Разбери меня на ад и рай.<br>
Разбросай меня по краю.<br>
Твоя любимая игра я -<br>
Ну, так и играй!<br>
 Ну так, ну так и играй-яй-яй!</div>

Ну так, ну так и играй-яй-яй!<br>
Ну так, ну так и играй-яй-яй!<br>
Ну так, ну так и играй!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/pizza-marina.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. "Вот такая, вот такая любовь" - цитата из песни <a href='../2017/mezdunamilub.php'>"Между нами любовь"</a> группы SEREBRO
(вывешена на Youtube 18 мая 2017 как Lyric Video и 14 июля 2017 как официальный клип).
"Нам бы, нам бы, нам бы всем на дно" - цитата из "Песенки о морском дьяволе"
А. Петрова и С. Фогельсона из кинофильма "Человек-амфибия" (1962).<br>
<br>
Рифма г=д: "вОлосы" - "пОлосами", ж=г: "милАшка" - "расхолАживаешь"<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
