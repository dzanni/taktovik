<?php
$title = 'Настя Каменских - Дай мне (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/enFgtHQL72E'";
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

<span class='blue'>[Припев] Л4цм - aabb<br></span>
Если ты дашь мне ещё second chance,<br>
Тогда танцуем мы с тобой first dance!<br>
Если ты дашь мне ещё второй шанс,<br>
То первый танец мы танцуем для нас!<br>
<div class='refren'>
  <span class='blue'>Х5ж - A<br></span>
Дай мне, дай мне! Дай мне, дай мне! (Дай мне!)</div>
<br>
Ага! Еа! <br>
Ага! Еа! <br>
Ага! Еа! <br>
NK!<br>
<br>
<span class='blue'>[Куплет 1] Л5цм? - aaaa<br></span>
Give to me, baby! Ага! Еа!<br>
Я не буду падать к твоей ноге.<br>
Не моя помада на твоей руке.<br>
Give to me, baby! Ага! Е!<br>
<div class='refren'>
  <span class='blue'>Тк4цм? - aaaa<br></span>
Еа! Ага! Ага!<br>
В моё море не впадет твоя река.<br>
Ты меня от горя не оберегал.<br>
Ты Корея Северная, а я Америка!</div>
<br>
<span class='blue'>[Переход] Тк4цм - aa<br></span>
Знаешь, дорогой, ведь ты даже не второй -<br>
Потеряешь шанс обязательно свой.<br>
Знаешь, дорогой, ведь ты даже не второй -<br>
Потеряешь шанс обязательно свой.<br>
<div class='refren'>
    <span class='blue'>Тк24цмж? - aBaB<br></span>
Всё стало не так, <br>
Когда рядом тебя со мной не стало.<br>
Был бы второй шанс – <br>
Я бы сразу тебе сказала.</div>
<br>
<span class='blue'>[Припев]<br></span>
Если ты дашь мне ещё second chance,<br>
Тогда танцуем мы с тобой first dance!<br>
Если ты дашь мне ещё второй шанс,<br>
То первый танец мы танцуем для нас!<br>
<div class='refren'>
Дай мне! Дай мне! Дай мне! Дай мне! Дай мне!<br>
(Дай мне! Дай мне! Дай мне! Дай мне! Дай мне!)<br>
Дай мне! Дай мне! Дай мне! Дай мне! Дай мне!<br>
(Дай мне! Дай мне! Дай мне! Да-да-дай мне!)</div>
<br>
Ага! Еа!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Give to me, baby! Ага! Ага!<br>
Я не буду ползать у тебя в ногах!<br>
Ты наверно перепутал берега,<br>
В моё море не впадёт твоя река (Е!)<br>
<br>
<span class='blue'>[Переход]<br></span>
Знаешь, дорогой, ведь ты даже не второй -<br>
Потеряешь шанс обязательно свой (Оу!)<br>
<div class='refren'>
Всё стало не так, <br>
Когда рядом тебя со мной не стало.<br>
Был бы второй шанс – <br>
Я бы сразу тебе сказала.</div>
<br>
<span class='blue'>[Припев]<br></span>
Если ты дашь мне ещё second шанс,<br>
Тогда танцуем мы с тобой first dance!<br>
Если ты дашь мне ещё второй шанс,<br>
То первый танец мы танцуем для нас!<br>
<div class='refren'>
  Дай мне! Дай мне! Дай мне! Дай мне! Дай мне!<br>
  (Дай мне! Дай мне! Дай мне! Дай мне! Дай мне!)<br>
  Дай мне! Дай мне! Дай мне! Дай мне! Дай мне!<br>
  (Дай мне! Дай мне! Дай мне! Да-да-дай мне!)</div>
<br>
Give to me, baby! Give to me, baby!<br>
Give to me, baby! Give to me, baby!<br>
Give to me, baby! Give to me, baby!<br>
Give to me, baby!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Если ты дашь мне ещё второй шанс,<br>
То первый танец мы танцуем для нас!<br>
<div class='refren'>
Дай мне! Дай мне! Дай мне! Дай мне! Дай мне!<br>
Дай мне! Дай мне! Дай мне! Дай мне! Дай мне!<br>
Дай мне! Дай мне! Дай мне! Дай мне! (Дай мне!)</div>
<br>
Слова и музыка: Алексей Потапенко<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kamenskih-nastya/nastya-kamenskih-nk-dai-mne-tekst.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. м=д: "река-АмерикА"<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
