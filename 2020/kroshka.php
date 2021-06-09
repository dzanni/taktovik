<?php
$title = 'Монеточка - Крошка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/SkDCJPKiMrU'";
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

<span class='blue'>[Куплет 1] Ам42жж - ABAB</span><br>
Стихи до утра на салфетке чиркает<br>
За стойкой у бара.<br>
Девчонка с гитарой слезинки роняет<br>
На блузку из Зары.<br>
  Возьми свою сдачу и завяжи в узел <br>
  Сипящие связки.<br>
  Доверься, не плачь и всё будет иначе,<br>
  Всё станет, как в сказке!<br>
<br>

<span class='blue'>[Припев x2] Дк4цж/ж? - AABB</span><br>
Ты поешь так, что сносишь бошки!<br>
В дыму покачнешься и уже очнешься внизу! <span class='blue'>(Строка Дк5цм)</span><br>
Проснись, крошка - ты продаешься!<br>
Ты продаешься, ты продаешься!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Бывшим подружкам ты не позвонишь, не</span><br>
Возьмешь за кулисы.<br>
Они тебя встретят однажды в рекламе <br>
На пачке от чипсов.<br>
На чьей-то одежде, в мош-пите помятой, <br>
На всех банкоматах<br>
Ты смело поддержишь любые форматы -<br>
Наличку и карты.<br>
<br>
<span class='blue'>[Припев x2]</span><br>
Ты поешь так, что сносишь бошки!<br>
В дыму покачнешься и уже очнешься внизу!<br>
Проснись, крошка - ты продаешься!<br>
Ты продаешься, ты продаешься!<br>
<br>
<span class='blue'>[Куплет 3] Л2-5 - ababC'C'a</span><br>
И не будет в зале мест пустых!<br>
Скуплено всё!<br>
Самолётом из дворов простых<br>
Прочь унесёт.<br>
И сотрется табуреточка,<br>
На которой трехлетняя девочка <br>
Маме читает стих.<br>
<br>
<span class='blue'>[Припев x2]</span><br>
Ты поешь так, что сносишь бошки!<br>
В дыму покачнешься и уже очнешься внизу!<br>
Проснись, крошка - ты продаешься!<br>
Ты продаешься, ты продаешься!<br>
<br>
<span class='blue'>[Финал]</span><br>
Ты продаешься!<br>
Ты продаешься, ты продаешься!<br>
Ты продаешься!<br>
Ты продаешься, ты продаешься!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/m/monetochka/monetochka-kroshka.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
