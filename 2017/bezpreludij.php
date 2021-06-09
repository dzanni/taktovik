<?php
$title = 'Настя Кудри - Без прелюдий (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/sRIxaMuI9zk'";
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

<span class='blue'>[Интро] Тк4ц3д - A'A'A'A'A'<br></span>
Подруги замужем, а я со школьником.<br>
Ну и нафиг! Найду себе поклонника!<br>
Найду себе поклонника!<br>
Клоника! Клоника! Клоника!<br>
Клоника! Клоника! Клоника!<br>
<br>
<span class='blue'>[Куплет 1] Тк4ц3ж/д AA, A'A'<br></span>
В клубы рано, пью не «русиано»,<br>
Сидим на баре, сканируем глазами.<br>
Было бы странно не думать о свидании,<br>
Надо бы наладить взаимопонимание.<br>
<div class='refren'>
Эй! Ёу! Ты че такой не дерзкий?<br>
Вроде бы накачаный, на лицо не мерзкий.<br>
Запала на тебя не по-детски,<br>
И это станет ясно по тексту (по тексту…)</div>
<br>
<span class='blue'>[Припев] Тк3ж, Тк2-4цд - AAAA<br></span>
Не надо говорить «Не будем», <br>
Хочу тебя без прелюдий!<br>
Сделаем вид, что завтра <br>
Мы с тобой все забудем!<br>
Не надо говорить «Не надо!»,<br>
Когда ты весь в моей помаде.<br>
Ты не уснёшь, пока я рядом <br>
В эту ночь, при любом раскладе.<br>
<div class='refren'>
Волнение в теле не уместится,<br>
Если не сейчас, то потом конец месяца!<br>
Если не сейчас, то потом хоть вешайся,<br>
Хоть вешайся от бешенства!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ну что на лице за скука?<br>
Я же предложила делать детей, а не внуков.<br>
Покажи, что ты можешь быть неосторожным.<br>
Представь, как будто я мороженое!<br>
<div class='refren'>
Я лезу вон из кожи! На что это похоже?<br>
А ты опять с недовольной рожей.<br>
Я без плеток и без сюрикенов,<br>
Что ты весь такой бледный, как военнопленный?</div>
<br>
<span class='blue'>[Припев]<br></span>
Не надо говорить «Не будем», <br>
Хочу тебя без прелюдий!<br>
Сделаем вид, что завтра <br>
Мы с тобой все забудем!<br>
Не надо говорить «Не надо!»,<br>
Когда ты весь в моей помаде.<br>
Ты не уснёшь, пока я рядом <br>
В эту ночь, при любом раскладе.<br>
<div class='refren'>
Волнение в теле не уместится,<br>
Если не сейчас, то потом конец месяца!<br>
Если не сейчас, то потом хоть вешайся,<br>
Хоть вешайся от бешенства!</div>
<br>
<span class='blue'>[Интро]<br></span>
Подруги замужем, а я со школьником.<br>
Ну и нафиг! Найду себе поклонника!<br>
Найду себе поклонника!<br>
Клоника! Клоника! Клоника!<br>
<br>
<span class='blue'>[Припев]<br></span>
Не надо говорить «Не будем», <br>
Хочу тебя без прелюдий!<br>
Сделаем вид, что завтра <br>
Мы с тобой все забудем!<br>
Не надо говорить «Не надо!»,<br>
Когда ты весь в моей помаде.<br>
Ты не уснёшь пока я рядом <br>
В эту ночь, при любом раскладе.<br>
<br>
При любом раскладе.<br>
Пока я рядом <br>
В эту ночь, при любом раскладе.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kudri-nastya/nastya-kudri-bez-preludij.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Тк4ц куплета срывается в Тк3ж/д, рифма ж=г "неосторожным-мороженое".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
