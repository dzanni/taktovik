<?php
$title = 'Время и Стекло - Last Dance (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kDKY1uQsOGI'";
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

<span class='blue'>[Припев 1] Я35жм - AbAbAbbb</span><br>
Пускай нам будет больно,<br>
Но иногда всё нужно поменять.<br>
Расходимся рандомно,<br>
Пусть треки голоса наши хранят.<br>
  <div class='refren'>Не стерео, а моно (а-а-а)<br>
  Что было между нами — лишь hush-hush!<br>
  Две чёрные полоски, как гуашь,<br>
  Давай, это last dance прощальный наш!</div>
<br>
<span class='blue'>[Припев 2] Тк24цжм? - AAbAAb<br></span>
Последний танец (е)<br>
Это всё, что нам с тобой осталось! 
(это ВиС, ВиС, ВиС)<br>
Не хочу, не хочу, не хочу его кончать!<br>
Наш танец <br>
(That's right, DoDo, oh)<br>
И мы с тобой в костёр бросаем глянец! <br>
(Let it burn, baby, ah)<br>
Не хочу его кончать (не хочу, не хочу)<br>
<br>
<span class='blue'>[Постприпев]<br></span>
(Е)<br>
Это ВиС, ВиС, ВиС (е)<br>
Не хочу, не хочу, не хочу его кончать (е)<br>
(Это last dance, baby)<br>
(Это наш last dance, baby)<br>
(Это наш last dance)<br>
Не хочу, не хочу, не хочу его кончать!<br>
<br>
<span class='blue'>[Куплет 1] Тк4цж/ - AAAA<br></span>
Жили-были я ли, ты ли (е)<br>
По дорогам колесили и копили мили (е)<br>
Роллы, ралли, будто в фильме (е)<br>
Мы играли роли, нафурили стильно (е)<br>
  <div class='refren'>
  <span class='blue'>Тк3м/ - aaaa<br></span>
  Разбивались на сценах — crush (е)<br>
  Превращали свою жизнь в коллаж (е)<br>
  Combination — royal flush (е)<br>
  Валдис Пельш и Ники Минаж!</div>
<br>
<span class='blue'>[Куплет 2] Тк4цд/ж - A'A'bb<br></span>
Куколка-балетница, воображуля-сплетница!<br>
В небо я бегу по золотистой белой лестнице!<br>
Олимпиада, мамина помада,<br>
Райские голоса восставших из ада!<br>
  <div class='refren'><span class='blue'>Тк2-4цм/ж - aaaBB<br></span>
  Это мы (мы, мы)<br>
  Что ни песни, то супер-хиты!<br>
  Выкладывали чувства на биты<br>
  Тебя наш вайб достанет,<br>
  Приходи и посмотри на наш...</div>
<br>
<span class='blue'>[Припев 2]<br></span>
Последний танец (е)<br>
Это всё, что нам с тобой осталось (е)<br>
Не хочу, не хочу, не хочу его кончать (е)<br>
Наш танец (е)<br>
И мы с тобой в костёр бросаем глянец! <br>
(Горит обложка)<br>
Не хочу его кончать! <br>
(Давай ещё немножко)<br>
<br>
<span class='blue'>[Постприпев]<br></span>
(Е)<br>
Не хочу, не хочу, не хочу его кончать!<br>
Не хочу, не хочу, не хочу!<br>
<br>
<span class='blue'>[Припев 1]</span><br>
Пускай нам будет больно (пускай)<br>
Но иногда всё нужно поменять.<br>
Расходимся рандомно,<br>
Пусть треки голоса наши хранят.<br>
  <div class='refren'>Не стерео, а моно,<br>
  Что было между нами — лишь hush-hush!<br>
  Две чёрные полоски, как гуашь,<br>
  Давай, это last dance прощальный наш!</div>
<br>
<span class='blue'>[Интерлюдия]<br></span>
Последний, -й, -й, -й<br>
Last dance<br>
<br>
<span class='blue'>[Припев 2]<br></span>
Последний танец (е)<br>
Это всё, что нам с тобой осталось (е)<br>
Не хочу, не хочу, не хочу его кончать (е)<br>
Наш танец (е)<br>
И мы с тобой в костёр бросаем глянец! <br>
(Горит обложка)<br>
Не хочу его кончать! <br>
(Давай ещё немножко)<br>
<br>
<span class='blue'>[Постприпев]<br></span>
(Let it burn, baby) (е)<br>
(Let it burn, baby)<br>
(Это ВиС, ВиС, ВиС)<br>
(Let it burn, baby)<br>
Не хочу, не хочу, не хочу его кончать!<br>
(Let it burn, baby)<br>
(Это last dance)<br>
(Это наш last dance)<br>
(Let it burn, baby)<br>
Не хочу, не хочу, не хочу его кончать!<br>
  <br>
<span class='blue'>[Аутро] Л2жд - AB'<br></span>
Жили-были.  <br>
Умерли-бумерли.  <br>
  <br>
<span class='blue'><a href='https://genius.com/Vremya-i-steklo-last-dance-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
