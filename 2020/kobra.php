<?php
$title = 'The Hardkiss ft. MONATIK - Кобра (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/YDqQ9W0_BBM'";
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





<span class='blue'>[Куплет 1, The Hardkiss] Л2-4жмд - AbAbC'AbAbC'</span><br>
Сиди вдома<br>
Ти до неї не ходи<br>
І бійся грому<br>
Бійся темної води<br>
  <div class='refren'>Під шкірою прихована (а)</div>
Колискову<br>
Для розбитих ліхтарів<br>
Співає знову <br>
Аби ти її пригрів<br>
  <div class='refren'>Усміхнена, врятована (а)</div>
<br>
<span class='blue'>[Припев, The Hardkiss] Тк3-4цжм/ж - AxAA</span><br>
Небезпечні знайомі незнайомці<br>
Коли кобра закохана вона не спить<br>
Пам'ятай про це, моє сонце<br>
Пам'ятай про це, моє сонце<br>
<br>
<span class='blue'>[Куплет 2, MONATIK]</span><br>
Ніжна, грізна <br>
Суміш у її очах<br>
Тікати пізно, <br>
Вже танцює на ножах<br>
  <div class='refren'>Прекрасна і спотворена (а)</div>
<br>
<span class='blue'>[Припев, MONATIK]</span><br>
Небезпечні знайомі незнайомці<br>
Коли кобра закохана вона не спить<br>
Пам'ятай про це, моє сонце<br>
Пам'ятай про це, моє сонце<br>
<br>
<span class='blue'>[Переход, The Hardkiss ft. MONATIK] Л54цмж - aBaB</span><br>
Точила кинджали, не знала жалю її душа<br>
Тікати не вийде, любити не варто (о)<br>
Кого покохала і з ким була на ножах?<br>
Ховалась у світлі чорна правда (а)<br>
  <div class='refren'>Точила кинджали, не знала жалю її душа (а)<br>
  Тікати не вийде, любити не варто (о-о-о)<br>
  Кого покохала і з ким була на ножах?<br>
  Ховалась у світлі чорна правда (а-а-а)</div>
Чорна правда!<br>
<br>
<span class='blue'>[Финал, The Hardkiss]</span><br>
Небезпечні незнайомці (яй)<br>
А кобра закохана (ха-а, ха-а) у сонце<br>
  <div class='refren'>Небезпечні знайомі незнайомці<br>
  Коли кобра закохана вона не спить<br>
  Пам'ятай про це, моє сонце<br>
  Пам'ятай про це, моє сон-це<br>
  (це... це... це...)<br>
</div>
<br>
<span class='i'>Стоп!</span><br>

  <br>
<span class='blue'><a href='https://www.musixmatch.com/'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
