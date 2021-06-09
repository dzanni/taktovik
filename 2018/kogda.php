<?php
$title = 'Денис Клявер - Когда ты станешь большим (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/qecV9LRG1pk'";
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

<span class='i'>- Как будто у меня здесь, проходи!<br>
- Да, я [неразб.]<br>
- Нормально так?<br>
- Да-да!<br>
- Я не хочу тебя учить, но!<br>
- Да-да-да-да-та-та, та-та-тарам!<br>
- Когда тут будут снимать, я вот сюда положу листочек!<br>
- Щас! Давай, поехали? Всё, камера пошла!<br>
</span>
<br>
<span class='blue'>[Припев]<br></span>
Когда ты станешь большим, сын,<br>
Мне очень хочется знать, дочь,<br>
Мне очень хочется верить, <br>
Что ты откроешь все двери,<br>
Не бойся что-то менять!<br>
<br>
<span class='blue'>[Куплет 1] Тк2-5цдм - A'A'A'bA'A'A'b<br></span>
Ты мотришь на меня без сомнения, <br>
Мол, папа, я всё знаю, понимаю всё без исключения (без исключения)<br>
Давай без нравоучения!<br>
Я здесь давно!<br>
А я пытаюсь объяснить твое назначение:<br>
Пока ты молодой, как важно выбрать точное направление <br>
Для правильного движения,<br>
Ведь мне не всё равно<br>
<div class='refren'>
  <span class='blue'>Л2м - aaaaa<br></span>
Как ты будешь жить,<br>
С кем ты будешь плыть -<br>
Я не хочу тебя учить,<br>
Но просто ты пойми,<br>
А кем еще мне дорожить?!</div>
<br>
<span class='blue'>[Припев х2] Л2-4цмж - abCCd bcxx<br></span>
Когда ты станешь большим, сын,<br>
Мне очень хочется знать, дочь,<br>
Мне очень хочется верить, <br>
Что ты откроешь все двери,<br>
Не бойся что-то менять!<br>
<div class='refren'>
Когда ты станешь большой, дочь,<br>
Когда доверишься мне, сын,<br>
Тогда поймёшь, почему всё, что я не смог,<br>
Мечтаю воплотить в тебе!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Знаешь, я не зря все советую -<br>
Сам когда-то был на твоём месте, только поэтому<br>
Помогаю с ответами.<br>
Как это было давно!<br>
Но если бы я мог вернуть всё это время,<br>
Я многое, наверно, изменил бы без сожаления.<br>
Ну что, скажи свое мнение!<br>
Тебе ж не все равно<br>
<div class='refren'>
Как ты будешь жить,<br>
С кем ты будешь плыть.<br>
Я не хочу тебя учить, <br>
Но знай, в любой момент <br>
С тобой готов я рядом быть!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Когда ты станешь большим, сын,<br>
Мне очень хочется знать, дочь,<br>
Мне очень хочется верить, <br>
Что ты откроешь все двери,<br>
Не бойся что-то менять!<br>
<div class='refren'>
Когда ты станешь большой, дочь,<br>
Когда доверишься мне, сын,<br>
Тогда поймёшь, почему всё, что я не смог,<br>
Мечтаю воплотить в тебе!</div>
<br>
<span class='blue'>[Финал]<br></span>
Когда ты станешь большой, дочь,<br>
Когда доверишься мне, сын,<br>
Тогда поймёшь, почему всё, что я не смог,<br>
Мечтаю воплотить в тебе!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/denis-klyaver-kogda-ti-stanesh-bolshim.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
