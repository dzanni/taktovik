<?php
$title = 'Ольга Бузова - Эгоистка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/idueacq5ZFY'";
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

<span class='i'>- Валя?!<br>
- Лена?!<br>
- Ира!.. Счастливо оставаться!<br>
<br>
- Надо было послать его куда подальше!<br></span>
<br>
<span class='blue'>[Куплет 1] Тк34цжж - ABAB<br></span>
Я сегодня настроена дерзко (дерзко)<br>
Потусить до утра, запить обиды текилой.<br>
<br>
<span class='i'>- С меня хватит!<br></span>
<br>
Но кидать подлецов надо резко!<br>
Думал, что сломал, но лишь надломилась!<br>
<div class='refren'>
  <span class='blue'>Тк34цдм - A'bA'b<br></span>
Я сегодня побуду неправильной -<br>
И короткое платье, и каблуки.<br>
<br>
<span class='i'>- Стой!<br></span>
<br>
Я его на все четыре отправила!<br>
Зато теперь меня будет любить!</div>
<br>
<span class='blue'>[Припев] Л3ж/ - AAAA<br></span>
Я танцую так близко, близко.<br>
<br>
<span class='i'>- Вот! Видишь?<br></span>
<br>
Не зови, ушла по-английски.<br>
<br>
<span class='i'>- Ну, он, само собой...<br></span>
<br>
Я танцую так слишком, слишком -<br>
Твоя девочка теперь эгоистка!<br>
<div class='refren'>
Я танцую так, это принцип!<br>
Если не любовь – не вижу смысла.<br>
<br>
<span class='i'>- [Неразб.]<br></span>
<br>
Я танцую так близко, близко -<br>
Твоя девочка теперь не верит принцам.</div>
<br>
<span class='i'>- Нас миллионы!..<br>
- Он сказал этой шлюхе, что я умерла!..<br>
- Поможете?..<br>
- С [неразб.] не спать!..<br>
- Через пятнадцать минут - в моем кабинете!<br>
- Что?..<br>
- Карать!..<br>
- Умерла жена.<br>
- Опять?..<br>
- Ниночке?!..<br>
- На колени!.. Снято!<br></span>
<br>
(Эгоистка)<br>
<br>
<span class='blue'>[Куплет 2] Тк34цжм - AbAb<br></span>
Я сегодня приму неизбежность<br>
И прерву из банальности наш диалог.<br>
Ты меня убивал, только нежно!<br>
А я всё не решалась нажать на курок.<br>
<div class='refren'><span class='blue'>Тк3дм - A'bA'b<br></span>
  Я сегодня побуду отчаянной,<br>
  <br>
  <span class='i'>- Дай мне еще время!..<br>
  - Короче, отмазки у него будут всегда!..  <br></span>
  <br>
Потанцую у бара одна.<br>
Я его на все четыре отправила!<br>
Почему же болит так душа?</div>
<br>
<span class='blue'>[Припев]<br></span>
Я танцую так близко, близко.<br>
Не зови, ушла по-английски.<br>
Я танцую так слишком, слишком -<br>
Твоя девочка теперь эгоистка!<br>
<div class='refren'>
Я танцую так, это принцип.<br>
Если не любовь – не вижу смысла.<br>
Я танцую так близко, близко -<br>
Твоя девочка теперь не верит принцам.</div>
(Твоя девочка теперь)<br>
(Твоя девочка теперь)<br>
<br>
<span class='i'>- И зачем только бог сотворил женщину!<br></span>
<br>
(Твоя девочка теперь эгоистка).<br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/b/buzova_olga/olga-buzova-egoistka.html'
  target='_blank'>Источник</a></span><br>
 <br>
  <br>
   N.B. Клип приурочен к выходу комедии "Любовницы" (2019), в нем использованы ее фрагменты.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
