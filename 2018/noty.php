<?php
$title = 'HammAli & Navai - Ноты (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/nDmB1-Nc6Fw'";
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

<span class='blue'>[Интро] Я54м - aaa<br></span>
Но ты, но ты, но ты, но ты, но ты.<br>
Но ты, но ты, но ты, но ты, но ты.<br>
Но ты, но ты, но ты, но ты.<br>
<br>
<span class='blue'>[Куплет 1, HammAli & Navai] Тк4цж - AA<br></span>
Мне не до вас, если хочешь - мне дай, дай!<br>
Пару встреч так, ну а после - вам bye, bye!<br>
Я не обижал тебя, детка, ну-ка don´t cry.<br>
И не заливал в уши про любовь all night.<br>
<div class='refren'>
  <span class='blue'>Дк4цм - abab<br></span>
Я не как все эти типы -<br>
Ради тебя готовы на всё.<br>
Я не ношу подарки, цветы.<br>
Зацепил твой взгляд и молча ушел.</div>

  <span class='blue'>Тк4цжм - AAbb<br></span>
Я летаю высоко, моё фото на билборде.<br>
Делать это так, будто это так стильно.<br>
Но один за любовь выпиваю я пинком.<br>
Знаешь себе цену, я куплю тебя за пинкод.<br>
<div class='refren'>
    <span class='blue'>Д4цж - AbAb<br></span>
Брось отношения, детка - о чём ты?<br>
«Не зарекайся», - мне всюду твердили.<br>
Так то мне похуй, но эта девчонка<br>
Прям, она меня так зацепила.</div>
<br>
<span class='blue'>[Переход] Тк3444ж - AAAX<br></span>
О-о, она меня свела с ума и<br>
Первернула всё верх дном, будто цунами!<br>
Я и сам не знаю, что между нами.<br>
Но ты меня зацепила, но ты меня зацепила!<br>
<br>
<span class='blue'>[Припев х2] Л52мж - aBaBa<br></span>
Но ты, но ты, но ты, но ты, но ты<br>
Так зацепила.<br>
Но ты, но ты, но ты, но ты, но ты<br>
Меня зацепила.<br>
Но ты, но ты, но ты, но ты, но ты<br>
Так зацепила.<br>
Но ты, но ты, но ты, но ты, но ты, но ты. <span class='blue'>(Строка Л6цм)<br></span>
<br>
<span class='blue'>[Куплет 2, HammAli & Navai]<br></span>
Завален мой телефон вопросами: «Где ты?»<br>
Я не в зоны доступа, вы не дождетесь ответа.<br>
Не хочу вас видеть снова, уходите с рассветом.<br>
Я хочу побыть один, я хочу побыть один. Слышишь? <span class='blue'>(Строка Тк5цж)<br></span>
<div class='refren'>
По городу один, зависаю лишь в баре.<br>
И каждая особа хочет быть со мной в паре.<br>
Сука, лечится любовь, да что ты о ней знаешь?<br>
В этом я не шарю... <span class='blue'>(Строка Тк2ж)</span></div>

<span class='blue'>Тк4цм - aaaa<br></span>
И тебе не расскажу - нет, не цветы!<br>
Не подарки здесь, тупо не цветы.<br>
Я не буду, как они, подлетать за миг,<br>
Чтобы как-либо тебе тупо угодить!<br>
<br>
<span class='blue'>[Переход]<br></span>
Но-о, она меня свела с ума и<br>
Первернула всё верх-дном будто цунами.<br>
Я и сам не знаю, что между нами.<br>
Но ты меня зацепила, но ты меня зацепила!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Но ты, но ты, но ты, но ты, но ты<br>
Так зацепила.<br>
Но ты, но ты, но ты, но ты, но ты<br>
Меня зацепила.<br>
Но ты, но ты, но ты, но ты, но ты<br>
Так зацепила.<br>
Но ты, но ты, но ты, но ты, но ты, но ты.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/a/aliev-alexandr/hammali-and-navai-noti.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
