<?php
$title = 'Артур Пирожков - туДЫМ-сюДЫМ (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/sW4srCj0bvY'";
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

<span class='i'>
- А вы слышали? Луиза в городе!<br>
- Да ладно?!<br>
- Серьезно?<br>
- Да ладно?!<br>
- Да! Скоро будет здесь. У нее только что закончились большие гастроли по Югославии и ГДР.<br>
- А болгарин ее с ней?<br>
- Ты что, не знаешь?<br>
- Нет.<br>
- Да они же разошлись.<br>
- Говорят, у нее трехкомнатная квартира в Чехословакии.<br>
- Да ладно!<br>
- Да.<br>
- Ребят, а кто такая Луиза?<br>
- Слышь, ты, лохнесское чудовище...<br>
[Смех]<br>
- Ребят, приехала!<br>
- Приехала!<br>
- Исчезни, не порти картинку!<br>
</span>
<br>


<span class='blue'>[Куплет 1] Л3332жж - ABAB</span><br>
Я тебя теперь не забуду (м-м)<br>
И не перепутаю с кем-то (ага)<br>
Много симпатичных повсюду,<br>
Но ты — что-то с чем-то!<br>
<div class='refren'>Я хочу тобой насладиться (ай)<br>
  Быть до неприличия смелым.<br>
  Ведь, как ты, никто не умеет<br>
  Владеть своим телом.</div>
<br>
<span class='blue'>[Переход] Д2м/ - aa</span><br>
Ночь, полумрак, <br>
В сердце бардак.<br>
<br>
<span class='blue'>[Припев] Тк2-4цм/ж - aaBB</span><br>
А ты танцуешь как дым, тудым-сюдым,<br>
И в глазах твоих светится интим.<br>
Ты воруешь все мысли, в прямом смысле<br>
Друг на друге зависли.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Затянули все мои раны<br>
Вкусные твои поцелуи.<br>
И пускай мы выглядим странно,<br>
Но мы же кайфуем.<br>
<br>
<span class='blue'>[Переход]</span><br>
Ночь, полумрак, <br>
В сердце бардак.<br>
<br>
<span class='blue'>[Припев]</span><br>
А ты танцуешь как дым, тудым-сюдым,<br>
И в глазах твоих светится интим.<br>
Ты воруешь все мысли, в прямом смысле<br>
Друг на друге зависли.<br>
<br>
<span class='blue'>[Проигрыш]</span><br>
<br>
<span class='blue'>[Переход]</span><br>
Ночь, полумрак, <br>
В сердце бардак.<br>
<br>
<span class='blue'>[Припев]</span><br>
А ты танцуешь как дым, тудым-сюдым,<br>
И в глазах твоих светится интим.<br>
Ты воруешь все мысли, в прямом смысле<br>
Друг на друге зависли.<br>
<br>
Музыка: Антон Пустовой<br>
Слова: Антон Пустовой<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/artur-pirozhkov-tudim-sudim.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
