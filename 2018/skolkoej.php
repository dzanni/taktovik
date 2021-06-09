<?php
$title = 'TEAKA - Сколько ей лет (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ArCRarGzrrY'";
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
(Сколько ей лет)<br>
(Сколько ей лет)<br>
(Сколько ей лет)<br>
<br>
<span class='blue'>[Куплет 1] Дк4цм/ж - aa, AA<br></span>
Постоянно вижу тебя с другим.<br>
Ты вдыхаешь дым-дым-дым.<br>
Все эти понты! <span class='blue'>(Строка Дк2м)<br></span>
Брата Dior, «Мерседес» без любви!<br>
Знал, что у всех желанье одно:<br>
Играть свою роль, прям как в кино!<br>
Ты не успел, и лайк не помог!<br>
Хочешь общаться - дай свой счет!<br>
<br>
<span class='blue'>[Припев] Дк4цм? - Aa, aa<br></span>
Стала принцессой рядом с Акелой,<br>
Смотреть на тебя больше нет сил!<br>
Блондинки, брюнетки, парфюм де Шанель - <br>
С ними отдыхает тот, кто успел!<br>
<br>
<span class='blue'>[Бридж] Дк2<br></span>
(Тот, кто успел!)<br>
(Тот, кто успел!)<br>
(Тот, кто успел!)<br>
Сколько ей лет?<br>
(Сколько ей лет?)<br>
(Сколько ей лет?)<br>
(Сколько ей лет?)<br>
<div class='refren'>
МанИт и мАнит!</div>
Скользким танцами <br>
Видел тебя,<br>
С этого ракурса...<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Сколько тебе нужно пространства,<br>
Деньги и славу - роль не играет!<br>
Вот моя касса - нет кассы, кляймишь!<br>
Это понты! Сильно стремилась <br>
Кататься по кругу и быть неделимой.<br>
Твой стиль необычный, но очень красивый, <br>
Вечером в клубе ты главный сюжет (сюжет)<br>
<br>
<span class='blue'>[Бридж]<br></span>
Сколько ей лет?<br>
(Сколько ей лет?)<br>
(Сколько ей лет?)<br>
<div class='refren'>
  <span class='blue'>Тк3м/ж - aa, AA<br></span>
С тобой тема-тема-тема.<br>
Я падаю в небо-небо-небо.<br>
[неразб.], и начинаем шоу.<br>
Сегодня забудь про него!</div>
<br>
<span class='blue'>[Куплет 3] Л24цж? - AA<br></span>
Быстро и странно, <br>
Всё будет по плану!<br>
Закроем мы двери, <br>
ЗаклЮчим мы сделку!<br>
Сумма важна, ведь ты не подделка!<br>
Детка, согрею, ведь ты не одета!<br>
<br>
<span class='blue'>[Бридж]<br></span>
Ты не одета!<br>
Ведь ты не подделка!<br>
<br>
<span class='blue'>[Припев]<br></span>
Стала принцессой рядом с Акелой,<br>
Смотреть на тебя больше нет сил!<br>
Блондинки, брюнетки, парфюм де Шанель - <br>
С ними отдыхает тот, кто успел (успел)<br>
<br>
<span class='blue'>Источник: Расшифровка фонограммы клипа</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
