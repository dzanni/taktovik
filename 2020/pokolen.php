<?php
$title = 'Kara Kross - Поколение (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/rElg4ju5rrc'";
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

<span class='blue'>[Вступление]</span><br>
Прады и Габбаны не залечат раны мои (мои)<br>
Я хотела счастье, но его, увы, не купить (не купить)<br>
<br>
<span class='blue'>[Припев x2] Л5цм/ - aa</span><br>
Прады и Габбаны не залечат раны мои (мои)<br>
Я хотела счастье, но его, увы, не купить (не купить)<br>
<br>
<span class='blue'>[Куплет 1] Тк4цм/ж - aa, AA</span><br>
А раньше даже солнце светило ярче,<br>
И люди любили как-то иначе.<br>
А мы без денег были богаты,<br>
И часов не замечали, и плевали на даты.<br>
  <div class='refren'>Сейчас всё поменялось, в жизни большие планы, <span class='blue'>(Строка Тк5цж)</span><br>
  Но мы на бренды счастье променяли.<br>
  А раньше улыбались, ловили моменты,<br>
  Теперь вся моя жизнь — Инстаграм и лента.</div>
<br>
<span class='blue'>[Переход] Дк45цм/ - aa</span><br>
Снова я еду домой под Коржа.<br>
Только он знает, о чём болит душа,<br>
Болит моя душа.<br>
<br>
<span class='blue'>[Припев x2]</span><br>
Прады и Габбаны не залечат раны мои (мои)<br>
Я хотела счастье, но его, увы, не купить (не купить)<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Вспомни, как стояли на перекрестке<br>
В надежде, что дела наладятся после.<br>
А вспомни, как друг друга мы отпускали,<br>
Надеюсь, что ты счастлив, я тебя прощаю.<br>
  <div class='refren'>Мы разучились любить просто так.<br>
  Куда исчезла наша простота?<br>
  И с тех времен, когда без монет и авто<br>
  Могли всю ночь напролет не думать о завтра.</div>
<br>
<span class='blue'>[Переход]</span><br>
Снова я еду домой под Коржа.<br>
Только он знает, о чём болит душа,<br>
Болит моя душа.<br>
<br>
<span class='blue'>[Припев x2]</span><br>
Прады и Габбаны не залечат раны мои (мои)<br>
Я хотела счастье, но его, увы, не купить (не купить)<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/k/kara-kross/kara-kross-pokolenie.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
