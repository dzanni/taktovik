<?php
$title = 'IOWA - Спайси (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/fle6WhglHNQ'";
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

<span class='blue'>[Куплет 1] Дк34цмж - aaaXaaaX</span><br>
Дома закончилось всё,<br>
И нас куда-то несет.<br>
Где-то встретим рассвет.<br>
Как там завтра? Мы не знаем.<br>
Свет фар не гаси —<br>
В них кружит сахарный снег.<br>
Будем долго смотреть.<br>
На заднем - пицца, пачка специй.<br>
<br>
<span class='blue'>[Переход х2] Х4443м/? - aaaa</span><br>
Мало специй, уля-ля, <br>
Уля-ля, уля-ля!<br>
Специй в танцы добавляй, <br>
Выбери меня!<br>
<br>
<span class='blue'>[Припев] Л3жмжж - AaAB AaAB</span><br>
РУ-ту-тУ, тУ-ру, <br>
РУ-ту-ту-ту-тУ-тУ, <br>
РУ-ту-тУ, тУ-ру. <br>
Твой поцелуй — спайси!<br>
РУ-ту-тУ, тУ-ру, <br>
РУ-ту-ту-ту-тУ-тУ, <br>
РУ-ту-тУ, тУ-ру. <br>
Твой поцелуй — спайси!<br>
  <div class='refren'>
  <span class='blue'>Л3жмжж - AaAA AaAA</span><br>
  Ты, как в будни праздник, <br>
  И меня не спасти.<br>
  Я хочу признаться: <br>
  Твой поцелуй — спайси!<br>
  Ты, как в будни праздник, <br>
  И меня не спасти.<br>
  Я хочу признаться: <br>
  Твой поцелуй — спайси!</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Главное — не спеши!<br>
Мы долго к этому шли.<br>
Даже эти мосты <br>
Говорят, что мы похожи.<br>
Легкие как дым, <br>
Растворимся, взлетим.<br>
Как в горячей воде, <br>
Тают пряности под кожей.<br>
<br>
<span class='blue'>[Переход х2]</span><br>
Мало специй, уля-ля, <br>
Уля-ля, уля-ля!<br>
Специй в танцы добавляй, <br>
Выбери меня!<br>
<br>
<span class='blue'>[Припев]</span><br>
РУ-ту-тУ, тУ-ру, <br>
РУ-ту-ту-ту-тУ-тУ, <br>
РУ-ту-тУ, тУ-ру. <br>
Твой поцелуй — спайси!<br>
РУ-ту-тУ, тУ-ру, <br>
РУ-ту-ту-ту-тУ-тУ, <br>
РУ-ту-тУ, тУ-ру. <br>
Твой поцелуй — спайси!<br>
  <div class='refren'>Ты, как в будни праздник, <br>
  И меня не спасти.<br>
  Я хочу признаться: <br>
  Твой поцелуй — спайси!<br>
  Ты, как в будни праздник, <br>
  И меня не спасти.<br>
  Я хочу признаться: <br>
  Твой поцелуй — спайси!</div>
<br>
<span class='blue'>[Припев]</span><br>
РУ-ту-тУ, тУ-ру, <br>
РУ-ту-ту-ту-тУ-тУ, <br>
РУ-ту-тУ, тУ-ру. <br>
Твой поцелуй — спайси!<br>
РУ-ту-тУ, тУ-ру, <br>
РУ-ту-ту-ту-тУ-тУ, <br>
РУ-ту-тУ, тУ-ру. <br>
Твой поцелуй — спайси!<br>
  <div class='refren'>Ты, как в будни праздник, <br>
  И меня не спасти.<br>
  Я хочу признаться: <br>
  Твой поцелуй — спайси!<br>
  Ты, как в будни праздник, <br>
  И меня не спасти.<br>
  Я хочу признаться: <br>
  Твой поцелуй — спайси!</div>
<br>
<span class='blue'>[Финал]</span><br>
Ты, как в будни праздник, <br>
Притворяться нет сил!<br>
Я хочу признаться: <br>
Твой поцелуй — спайси!<br>
Ты, как в будни праздник, <br>
Притворяться нет сил!<br>
Я хочу признаться: <br>
Твой поцелуй — спайси!<br>
(Твой поцелуй — спайси!)<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/i/iowa/iowa-spaisi.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
