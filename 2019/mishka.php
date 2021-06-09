<?php
$title = 'Пошлая Молли ft. KATERINA - Мишка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/KN_ZRC_ESmE'";
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



<span class='blue'>[Куплет 1: Пошлая Молли] Тк4цм/? - aa<br></span>
Я горю! <span class='blue'>(Строка Тк2м)<br></span>
Я упал с небес тебе на всю фигню!<br>
А я на глянцах, и я вылез в люк на ходу,<br>
Когда вспышки камер разрезают темноту.<br>
Не пойти бы мне тогда в пизду?!<br>
  <div class='refren'>
  Икс-О, Икс-О, lovely love,<br>
  Напиши мне смс, как ты скучаешь, зай!<br>
  Твоя попа - BMW, и ты на каблуках.<br>
  Твои бубсы - вау, нужен полный бак.</div>
<span class='blue'>Тк2жм - AbAb<br></span>
Шампусик в лимузине - <br>
Это высший пилотаж!<br>
Мы в шоу-бизе <br>
Постоянно на понтах!<br>
<br>
<span class='blue'>[Припев: Пошлая Молли] Тр4ж/ - AAA<br></span>
Э м... э мишка, ты меня охраняй! Да, я бэд бич!<br>
Свэг, все горит в пепле блэкбэри слимсов!<br>
Ночь, ты моя, и ты алкоголичка!<br>
<div class='refren'>
Мишка, ты меня охраняй! Да, я бэд бич!<br>
Свэг, все горит в пепле блэкбэри слимсов!<br>
Ночь, ты моя, и ты алкоголичка!</div>
<br>
<span class='blue'>[Куплет 2: Катя Кищук]<br></span>
Я тону! <span class='blue'>(Строка Тк2м)<br></span>
В жадных взглядах все хотят меня одну!<br>
Но мне этого не надо, все вокруг <br>
Воспринимают меня телом. <span class='blue'>(Строка Тк2ж)<br></span>
 <div class='refren'>
<span class='blue'>Тк2жд - aB'aB'<br></span>
Умоляю, бэйби, <br>
 Это будто все в последний раз!<br>
 Никаких "наверно", <br>
 Это high faction, первый класс!</div>
Тебе лучше не медлить,<br>
Если я хочу начать!<br>
Если я хочу мгновенно - <br>
Значит, получу сейчас!<br>
<br>
<span class='blue'>[Припев: Пошлая Молли]<br></span>
Мишка, ты меня охраняй! Да, я бэд бич!<br>
Свэг, все горит в пепле блэкбэри слимсов!<br>
Ночь, ты моя, и ты алкоголичка!<br>
<div class='refren'>
Мишка, ты меня охраняй! Да, я бэд бич!<br>
Свэг, все горит в пепле блэкбэри слимсов!<br>
Ночь, ты моя, и ты алкоголичка!</div>
 <br>
<span class='blue'><a href='https://genius.com/Poshlaya-molly-bruin-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S.  Строки "Это будто все в последний раз!" и "Это high faction, первый класс",
"Если я хочу начать" и "Значит, получу сейчас!"
распеты с дактилическим окончанием - финальное ударение на третий с конца слог.<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
