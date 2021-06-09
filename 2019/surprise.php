<?php
$title = 'Марьяна Ро - Surprise (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/C0peo2Y4Dlk'";
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

<span class='blue'>[Куплет 1] Тк4цм/ж - aa, AA<br></span>
Я больше не молчу: mommy is back!<br>
Хочешь диалога — принеси мне steak!<br>
Я не делаю бесплатно ничего, <span class='blue'>(Строка Тк3ж)</span><br>
Во мне видят Бога — для меня это ничто!<br>
Я не одна из пустышек! <span class='blue'>(Строка Тк3ж)</span><br>
Всё, что я делаю, для тебя слишком!<br>
Кто же мне пишет? Кажется, бывший!<br>
Я забираю твои бабки, слышишь?<br>
Back от Луи Ви, всегда сияю изнутри!<br>
Они хотят моей любви — bitch, please!<br>
Если тронул мой зад, вызываю катафалк:<br>
Упакуют тело в сюрприз! <span class='blue'>(Строка Тк3м)</span><br>
Мне нужны лайки, нужна Мурсиелаго,<br>
Бельё «Провокатор» и Balenciaga.<br>
Хочешь знакомств? Но смотришь с экрана!<br>
Боишься, малыш? Называй меня «мама»!<br>
<br>
<span class='blue'>[Предприпев] Тк3м/ - aa<br></span>
Surprise, motherfucker, surprise!<br>
Я на easy выкупаю твой price!<br>
Surprise, motherfucker, surprise!<br>
Surprise, motherfucker... <span class='blue'>(Строка Тк2ж)</span><br>
<br>
<span class='blue'>[Припев х2] Тк3м/ - aa<br></span>
Surprise, surprise, surprise!<br>
Я сияю ярче, чем ice!<br>
Surprise, surprise, surprise (гр-р-ра)<br>
Не смеши меня своим king size!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Посмотри-ка на меня <span class='blue'>(Строка Тк2м)</span><br>
И теперь забудь малышек, что когда-то почитал. <br>
За мной следит успех, здесь ты слышишь только смех.<br>
Твоя пассия уже который месяц долбится в DM.<br>
Камни на запястье — это всё тяжёлый труд!<br>
Перейди ко мне дорогу, и нас завтра не найдут!<br>
Меня уважает Запад, уважает Moscow City.<br>
God bless my life, это новый победитель.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Surprise, surprise, surprise!<br>
Я сияю ярче, чем ice!<br>
Surprise, surprise, surprise (гр-р-ра)<br>
Не смеши меня своим king size!<br>
<br>
<span class='blue'><a href='https://genius.com/16338785'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
