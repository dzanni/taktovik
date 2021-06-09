<?php
$title = 'Ольга Бузова - Привыкаю (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/qFTEFgELcGs'";
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

Одна...<br>
<br>
Я привыкаю, я привыкаю...<br>
Я привыкаю, я привыкаю...<br>
<br>
<span class='blue'>[Припев] Л4цмж - aBaB<br></span>
Я привыкаю снова просыпаться одна.<br>
Мне больше не больно, больше не больно!<br>
Поверь, это не слезы - это просто вода.<br>
Мне больше не больно, больше не больно!<br>
<br>
Я привыкаю…<br>
<br>
<span class='blue'>[Куплет 1] Л3д - A'B'A'B'</span><br>
Наверно я сама всё придумала,<br>
С тобой теперь надолго отравлены.<br>
Переписать хотела всё набело,<br>
Но по-прежнему не знаю, как правильно.<br>
<div class='refren'>Твои клятвы оказались бумажными,<br>
Мысли в голову опять словно спицами.<br>
В нашем воздухе частицы заряжены,<br>
Прошу, просто перестань снова сниться мне!</div>
<br>
<span class='blue'>[Переход]<br></span>
Мне больше не больно, больше не больно!<br>
Я привыкаю!<br>
Мне больше не больно, больше не больно!<br>
<br>
<span class='blue'>[Припев x2]<br></span>
Я привыкаю снова просыпаться одна.<br>
Мне больше не больно, больше не больно!<br>
Поверь, это не слезы - это просто вода.<br>
Мне больше не больно, больше не больно!<br>
<br>
Я привыкаю…<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Мне холодно одной в тесном городе,<br>
После тебя в душе лишь развалины,<br>
И снова я плачу слишком дорого!<br>
Знаешь, лучше бы друг друга не знали мы.<br>
<div class='refren'>Я помню наизусть слово каждое,<br>
Всё в памяти оставлю нетронутым.<br>
Мои раны все тобою заражены,<br>
И вновь не могу уснуть - ночью снова ты.</div>
<br>
<span class='blue'>[Переход]<br></span>
И больше не больно, больше не больно!<br>
Я привыкаю!<br>
Мне больше не больно, больше не больно!<br>
<br>
<span class='blue'>[Припев x2]<br></span>
Я привыкаю снова просыпаться одна.<br>
Мне больше не больно, больше не больно!<br>
Поверь, это не слезы - это просто вода.<br>
Мне больше не больно, больше не больно!<br>
<br>
Я привыкаю…<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/b/buzova_olga/pesnya_privikau.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Куплет - логаэд с переменной анакрузой 1-2. Это Mood video, позже вышел
<a href='http://www.taktovik.ru/2017/privykaju1.php'>официальный клип</a>. Композиция
была <a href='https://youtu.be/v8s5Uh47XbM'
target='_blank'>обвинена в плагиате</a> - заимствовании мелодии и манеры исполнения
хита певицы Ханны  <a href='https://youtu.be/BCxyGcygaPU'
  target='_blank'>"Потеряла голову"</a> (2015, более 14 млн просмотров к моменту выхода
  песни Бузовой).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
