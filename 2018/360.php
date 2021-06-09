<?php
$title = 'Элджей - 360° (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/x0abafHIMdQ'";
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
Sayonara boy!<br>
<br>
<span class='blue'>[Куплет 1] Дк2-4цж - AA<br></span>
Кажется, мир замер!<br>
Перед моими глазами <br>
Только твой вид сзади,<br>
Твой вид сзади, как Ferrari.<br>
Вырубил телефон, чтобы не набирали:<br>
Я от всех занят!<br>
Кому там чё обещал? Похуй!<br>
С тобою - заебись, без тебя - плохо (плохо)<br>
<br>
<span class='blue'>[Переход] Дк3ж - AA<br></span>
Друг от друга так мажет, <br>
Но мы никому об этом не скажем (ай) <span class='blue'>(Строка Дк4цж)<br></span>
<div class='refren'>
  <span class='blue'>Дк4цж - ABAB<br></span>
Твои волосы, белые волосы на афтерпати  <span class='blue'>(Строка Дк5цж)<br></span>
После вечеринки моего концерта.<br>
Я смотрел сзади, слева, справа,<br>
Ты охуенная на все сотни процентов!</div>

Меня ведь манит твой запах, <br>
И мы любим друг друга, как сахар.<br>
Не хочу подбирать фразы (не хочу)<br>
Я хочу тебя всю сразу!<br>
<br>
<span class='blue'>[Припев х4] Тк34цм? - aa<br></span>
Я хочу тебя на триста шесят,<br>
Все остальные на проводе повисят!<br>
<br>
<span class='blue'>[Куплет 2] Тк2-4цмж - aBaaBBBB<br></span>
Соединяю родинки на твоём теле языком,<br>
Мы одни в кинозале (в кинозале),<br>
Нам так похуй на кино!<br>
Мы не виделись давно.<br>
(Между нами цунами)<br>
Лучше не трогать руками<br>
(Наше с тобой оригами)<br>
Лучше не трогать руками (ай-ай-ай-ай)<br>
<br>
<span class='blue'>[Переход]<br></span>
Друг от друг так мажет,<br>
Но мы никому об этом не скажем.<br>
Не хочу подбирать фразы, <br>
Я хочу тебя всю сразу (иди сюда)<br>
<br>
<span class='blue'>[Припев х4]<br></span>
Я хочу тебя на триста шесят,<br>
Все остальные на проводе повисят!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Я хочу тебя на триста шесят (трис- триста шесят)<br>
Я хочу тебя на триста шесят (трис- триста шесят, трис- триста шесят)<br>
Я хочу тебя на триста шесят (трис- триста шесят, трис- триста шесят)<br>
<div class='refren'>
Я хочу тебя на триста шесят!<br>
Я хочу тебя на триста шесят!<br>
Я хочу тебя на триста шесят!</div>
<br>
<span class='blue'><a href='https://genius.com/Allj-360-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
