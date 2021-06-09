<?php
$title = 'Зомб & Dj Tarantino - #ДевочкаХочетДвижа (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/WbpTmFfBneg'";
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

<span class='blue'>[Интро]<br></span>
Сеня, Сеня, Сеня Зомб!<br>
Dj Tarantino!<br>
<br>
<span class='blue'>[Куплет 1: Зомб] Тк23мж - aaaBaaaB<br></span>
Детка чувствует бит.<br>
В клубе долбит minimal deep,<br>
И она не хочет так уходить.<br>
Ну, оставайся!<br>
Ее формы – магнит.<br>
Я решаю с ней зАговорИть.<br>
Что в бокале? Может быть, повторить?<br>
Ну, не стесняйся!<br>
<div class='refren'><span class='blue'>Тк32ж - AAAAAA<br></span>
  Я хочу с тобой стать одним целым!<br>
Ты уже под прицелом!<br>
Ты уже под прице-лом!<br>
Так невинна в этом платьице белом!<br>
Скажешь – не мое дело, <br>
Это не мое дело!</div>
 <br>
<span class='blue'>[Переход] Тк3-5цм - aaaa<br></span>
По глазам вижу, что все наоборот!<br>
Он с тобой? Нет? А тогда чего он так орет?<br>
Ты не скоро забудешь этот полет!<br>
Приглашаю тебя на борт!<br>
<br>
<span class='blue'>[Припев x2] Тк2-4цж - AAAAAA<br></span>
Я же вижу -<br>
Девочка хочет движа!<br>
Давай со мной, обещаю, не обижу!<br>
Она танцует, словно никого не слышит,<br>
Словно никого не слышит!<br>
Девочка хочет движа!<br>
<br>
<span class='blue'>[Куплет 2: Зомб] Тк34ж/д? - AAA'A'<br></span>
Беру за талию, подхожу к ней сзади.<br>
Это на автомате, это на автомате (Е)<br>
Вниманье, минуточку внимания!<br>
Ты самая шикарная малышка в этом здании!<br>
<div class='refren'>Так упако-вана, знаешь, ты подарок!<br>
Давай скроемся с радаров!<br>
И мы скроемся с радаров!<br>
Твой взгляд опа-сен, но знаешь, я рисковый!<br>
И ты скажешь мне: «Не стОит»!<br>
Но не говори ни слова!<br>
<br>
<span class='blue'>[Переход]<br></span>
По глазам вижу, что все наоборот!<br>
Он с тобой? Нет? А тогда чего он так орет?<br>
Ты не скоро забудешь этот полет!<br>
Приглашаю тебя на борт!<br>
<br>
<span class='blue'>[Припев x2]<br></span>
Я же вижу -<br>
Девочка хочет движа!<br>
Давай со мной, обещаю, не обижу!<br>
Она танцует, словно никого не слышит,<br>
Словно никого не слышит!<br>
Девочка хочет движа!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/z1/zomba/10786-zomb-dj-tarantino-devochka-hochet-dvizha-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
