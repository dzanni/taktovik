<?php
$title = 'Егор Шип - Dior (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/_Ncy_sleaaY'";
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

<span class='blue'>[Припев x2] Тр2м/жм - aaBa</span><br>
Делаю вдох,<br>
Так пахнет Dior!<br>
Я искал тебя вечно,<br>
Вот идиот!<br>
<br>
<span class='blue'>[Куплет 1] Х7цм/? - aaaa</span><br>
Я хочу, чтоб ты мне говорила о любви.<br>
Никого не слушай, ведь я лучше, чем они.<br>
У меня есть чувства, если хочешь – забери!<br>
Ничего не жалко для тебя, baby!<br>
  <div class='refren'>
    <span class='blue'>Тр2м/ - aaaa</span><br>
  Как дожить до утра,<br>
  Расскажи мне сейчас!<br>
  Напиши про себя, <br>
  Мне нужно все это знать!</div>
Время – медленный яд, <br>
Это точно весна.<br>
Твои фотки — пожар, <br>
Ведь я сгораю дотла.<br>
<br>
<span class='blue'>[Припев х4]</span><br>
И я делаю вдох,<br>
Так пахнет Dior!<br>
Я искал тебя вечность,<br>
Вот идиот!<br>
<br>
<span class='blue'>[Куплет 2] Л2мж? - aBaB</span><br>
Оставь мне ожог, <br>
Поцелуй мои губы!<br>
Сто звонков — <br>
Это твои подруги!<br>
  <div class='refren'>Я не хочу <br>
  Отпускать ее руку.<br>
  Пять минут <br>
  Превратились в секунду.</div>
<span class='blue'>Тк444ц3ж/ - AAAA</span><br>
Я не могу, не могу о тебе не думать,<br>
Ревновать каждый раз, зная, что глупо.<br>
Самая трушная среди всех кукол!<br>
Знаю, что тебя найду тут!<br>
<br>
  <span class='blue'>[Припев х4]</span><br>
  И я делаю вдох,<br>
  Так пахнет Dior!<br>
  Я искал тебя вечность,<br>
  Вот идиот!<br>
<span class='blue'><br>
[Outro x2]</span><br>
Делаю вдох<br>
Так пахнет Dior!<br>
Я искал тебя вечно,<br>
Вот идиот!<br>
  <br>
<span class='blue'><a href='https://genius.com/Egor-ship-dior-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. Мы допустили, что в тресложнике с переменной анакрузой допустима анакруза
из трех слогов:<br>
  <br>
Ведь я сгораю дотла UUU-UU-  <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
