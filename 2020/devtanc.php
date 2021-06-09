<?php
$title = 'Artik & Asti - Девочка, танцуй (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Jb1_hbjD8tQ'";
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

<span class='blue'>[Куплет 1, Asti] Тк2мм, Тк2мж</span><br>
Ты надеваешь каблуки <br>
Уже не для него,<br>
Не отвечаешь на звонки, <br>
В душе цунами, но<br>

  <div class='refren'><span class='blue'>Тк2-3жм</span><br>
    Ты - та, кто не возьмёт трубку,<br>
  Даже если трясёт. <br>
  Воспоминанья по кругу<br>
  Да пошло оно к чёрту всё!</div>
<span class='blue'>Х3мм</span><br>
Номер его - в блок!<br>
В инстаграме - в бан!<br>
Он явно не тот,<br>
Кто был богом дан.<br>
  <div class='refren'>А в душе зима,<br>
  Снегом замело.<br>
 Этой ночью не до сна, <span class='blue'>(Строка Х4м)</span><br>
 Но ему назло</div>
<br>
<span class='blue'>[Припев, Asti] Х3мж?</span><br>
Девочка, танцуй! <br>
Всё пройдёт так скоро.<br>
Разгоняй тоску - <br>
Он того не стоит!<br>
  <div class='refren'>Девочка, кружи <br>
  В танце с этой болью,<br>
  Выжигая чувства <br>
  Крепким алкоголем!</div>
Девочка, танцуй, <br>
Завтра будет солнце!<br>
Слёзы не к лицу, <br>
Ему всё вернётся!<br>
  <div class='refren'>Девочка, кружи <br>
  С этой болью в танце,<br>
  Своим чувствам больше <br>
  Не оставив шанса!</div>
Девочка, танцуй...<br>
Девочка, танцуй...<br>
Девочка, танцуй...<br>
<br>
<span class='blue'>[Куплет 2, Asti]</span><br>
Его не сможет так никто <br>
Любить, как ты любила.<br>
Сердце - в осколки, но зато <br>
Было так красиво!<br>
  <div class='refren'>Ты вновь уйдёшь по-английски, <br>
  Как в чёрно-белом кино.<br>
  Больные чувства и виски:<br>
 Ты знаешь точно - всё решено!</div>
Номер его - в блок!<br>
В инстаграме — в бан!<br>
Он совсем не тот, <br>
Кто был небом дан.<br>
  <div class='refren'>А в душе тоска, <br>
  Битое стекло<br>
  Этой ночью не до сна, <br>
  Но ему назло</div>
<br>
<span class='blue'>[Припев, Asti]</span><br>
Девочка, танцуй! <br>
Всё пройдёт так скоро.<br>
Разгоняй тоску - <br>
Он того не стоит!<br>
  <div class='refren'>Девочка, кружи <br>
  В танце с этой болью,<br>
  Выжигая чувства <br>
  Крепким алкоголем!</div>
Девочка, танцуй, <br>
Завтра будет солнце!<br>
Слёзы не к лицу, <br>
Ему всё вернётся!<br>
  <div class='refren'>Девочка, кружи <br>
  С этой болью в танце,<br>
  Своим чувствам больше <br>
  Не оставив шанса!</div>
<br>
<span class='blue'>[Куплет 3, Artik] Тк4-6цм/ж</span><br>
Танцуй, моя девочка, твоё лекарство от боли!<br>
Танцуй, моя нежная, будто одна тут, вокруг никого кроме.<br>
Ты самая яркая, самая яркая звезда во вселенной.<br>
  И, не смотря ни на что всегда была и будешь для него первой.<br>
Танцуй, моя девочка! Забудь обо всём!<br>
К чёрту всю боль! К чёрту любовь! Гори всё огнём!<br>
Бокал алкоголя, не думай о нем!<br>
  <div class='refren'><span class='blue'>Тк4цм/м</span><br>
    Тысячи фраз, в голове муть<br>
  Как всё могло быть и как всё вернуть<br>
  Но время — вода, пусть утечёт<br>
  Переболит всё и заживёт</div>
<br>
<span class='blue'>[Припев, Asti]</span><br>
Девочка, танцуй! <br>
Всё пройдёт так скоро.<br>
Разгоняй тоску - <br>
Он того не стоит!<br>
  <div class='refren'>Девочка, кружи <br>
  В танце с этой болью,<br>
  Выжигая чувства <br>
  Крепким алкоголем!</div>
Девочка, танцуй, <br>
Завтра будет солнце!<br>
Слёзы не к лицу, <br>
Ему всё вернётся!<br>
  <div class='refren'>Девочка, кружи <br>
  С этой болью в танце,<br>
  Своим чувствам больше <br>
  Не оставив шанса!</div>
Девочка, танцуй...<br>
Девочка, танцуй...<br>
 <br>
<span class='blue'><a href='https://genius.com/Artik-and-asti-girl-dance-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
