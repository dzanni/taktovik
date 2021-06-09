<?php
$title = 'Feduk - Хлопья летят наверх (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ENAwnVMwxhM'";
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

<span class='i'>- Говно это.<br>
- Ну. Ладно, последний раз!<br>
- Хорошо, давай!<br>
- Разочек!<br>
- Можно, хорошо!<br>
- [Неразб.]<br>
- Ту-ту ван лав! Е-и!<br>
- Глянь, жестко!<br>
- [Неразб.]<br>
- Офигес прос!<br>
- Пацаны, всё, ладно!<br>
- Ладано, всё!<br>
- Тебя так красиво раскрасили!<br>
- Леша яичницу ест!<br>
- [Неразб.]<br></span>
<br>
<span class='blue'>[Куплет 1] Дк2-4цмж - aaaBaaBa<br></span>
Откуда ты тут взялась?<br>
Классные шортики — бывшие джинсы Levi´s!<br>
Простой макияж,<br>
Пахнешь, как первый ландыш, <br>
Тебя не буду срывать!<br>
Откуда ты тут взялась? (Оу!)<br>
Пахнешь, как первый ландыш, <br>
Тебя не буду срывать!<br>
<div class='refren'>
<span class='blue'>Тк4цм - aaaa<br></span>
  Подумал о тебе — и пошёл снег!<br>
Холода нас греют: ближе к семье.<br>
Всюду суета эта, где нас нет.<br>
Новые текста, но не о тебе!</div>
<br>
<span class='blue'>[Припев] Дк3м - aaaa bbab<br></span>
Хлопья летят наверх,<br>
Всюду магия и свет,<br>
Ты чё тут одна? Привет! <br>
Пойдём на парад планет!<br>
Я дам тебе тёплый шарф: <br>
Там в космосе холода!<br>
И мы встречаем рассвет, <br>
Укутавшись в облака!<br>
О-о! Э-э-э!<br>
О! О-о-о! О-о-о!<br>
<div class='refren'>Хлопья летят наверх,<br>
Всюду магия и свет,<br>
Ты чё тут одна? Привет! <br>
Пойдём на парад планет!<br>
Я дам тебе тёплый шарф: <br>
Там в космосе холода!<br>
И мы встречаем рассвет, <br>
Укутавшись в облака!<br>
О-о-о! О! О-о-о! О! <br>
О-о-о! О-о-о!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Новая эра любви, <br>
Новая жизнь!<br>
Выбери ты что-то родное до боли, <br>
Но мы не знакомы,<br>
Хочу целовать тебя снова и снова!<br>
Эти уютные дни.<br>
Падают хлопья — и с ними мы.<br>
Медленно тают, как наш поцелуй,<br>
Медленно тают все наши мечты!<br>
<br>
Э-э! Э-э!<br>
<br>
<span class='blue'>[Припев]<br></span>
Хлопья летят наверх,<br>
Всюду магия и свет,<br>
Ты чё тут одна? Привет! <br>
Пойдём на парад планет!<br>
Я дам тебе тёплый шарф: <br>
Там в космосе холода!<br>
И мы встречаем рассвет, <br>
Укутавшись в облака!<br>
О-о-о! Э-э-э-э!<br>
О-о-о! (У-у-у!) О-о-о! (У-у-у!)<br>
О-о-о! О-о-о-о-О-о! Э-э!<br>
<br>
<span class='blue'>[Аутро]<br></span>
Откуда ты тут взялась?<br>
<div class='refren'>Новая эра любви,<br>
  Новая жизнь!<br>
Выбери ты что-то родное до боли,<br>
Но мы не знакомы,<br>
Хочу целовать тебя снова и снова!<br>
Эти уютные дни.</div>
<br>
<span class='blue'><a href='https://genius.com/Feduk-the-flakes-are-goin-back-up-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
