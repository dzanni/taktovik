<?php
$title = 'MORGENSHTERN & Витя АК - РАТАТАТАТА (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aS_wdyhu0xQ'";
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

<span class='blue'>[Интро]</span><br>
Е! Е!<br>
<br>
<span class='blue'>[Припев: MORGENSHTERN & Витя АК] Дв43мм - abab</span><br>
Да, сука, новый автомат (е!)<br>
47-АК! <br>
Сука, мы палим города (е!)<br>
Ра-та-та-та-та!<br>
Да, сука, это на века (е!)<br>
Папа да АК -<br>
То, как мы валим на битах (окей!)<br>
Ра-та-та-та-та!<br>
  <div class='refren'>Да, сука, новый автомат (е!)<br>
  47-АК! <br>
  Сука, мы палим города (е!)<br>
  Ра-та-та-та-та!<br>
  Да, сука, это на века (е!)<br>
  Папа да АК -<br>
  То, как мы валим на битах (е!)<br>
  Ра-та-та-та-та-та-та-та-та! <span class='blue'>(Строка Дв5м)</span></div>
<br>
<span class='i'>
[Витя АК] Алё!<br>
[MORGENSHTERN][Неразб.]<br>
[Витя АК] Чо, блядь?! Слышь, гринго! Зашнуруй свой хобот! Если вас секретный дед сейчас, блядь,
резко не телепортируется сюда, а разъебу ваш на хуй курятник! А если криво не нарежешь, за
мной не заржавеет. Ты понял?<br>
[MORGENSHTERN][Неразб.]<br>
[Витя АК] Долбоеб, блин!<br>
[MORGENSHTERN] Приветствую, учитель!<br>
[Дед] Говори!<br>
[MORGENSHTERN] Витя АК хочет знать секрет вечного хайпа!<br>
[Дед] Ммм, сука! Понятно.<br>
[MORGENSHTERN] Он угрожает нам и хочет нас видеть.<br>
[Дед] Хорошо! Отправляемся в путь!<br>
</span>
<br>
<span class='blue'>[Переход]</span><br>
Та-та-та-та-та!<br>
<br>
<span class='blue'>[Куплет: Витя АК] Дк3жж, Дк3ж/ж - ABAB, AABB</span><br>
(Угу)<br>
Это мы не проходили (е),<br>
Это нам не задавали (ага)<br>
Мы сами это замутили (е)<br>
И записали в подвале (ур-р-ра)<br>
  <div class='refren'>Звук в наушниках валит (е),<br>
  Давай, пускай на динамик (уф)<br>
  С цепи его отпускаем (ага)<br>
  Пускай их нахуй придавит (пау)</div>
Звук с окраин Еката (-ката)<br>
Лоб пятёркой закатан (чин)<br>
Стаффчик плёнкой замотан (у)<br>
Окуметилом закапан (во)<br>
  <div class='refren'>Моя банда старше баобаба,<br>
  Твоя банда — одни обаплы (у)<br>
  Моя лапа будто Ламбо (е)<br>
  Твоя баба будто Lada (ха-ха-ха)<br>
  Твоя баба будто Lada (а, а)</div>
<br>
<span class='blue'>[Припев: MORGENSHTERN & Витя АК]</span><br>
Та-та-та-та-та!<br>
Сука, новый автомат (е!)<br>
47-АК! <br>
Сука, мы палим города (е!)<br>
Ра-та-та-та-та!<br>
Да, сука, это на века (е!)<br>
Папа да АК -<br>
То, как мы валим на битах (окей!)<br>
Ра-та-та-та-та!<br>
  <div class='refren'>Да, сука, новый автомат (е!)<br>
  47-АК! <br>
  Сука, мы палим города (е!)<br>
  Ра-та-та-та-та!<br>
  Да, сука, это на века (е!)<br>
  Папа да АК -<br>
  То, как мы валим на битах (е!)<br>
  Ра-та-та-та-та!</div>
<br>
<span class='i'>
[Дед] Остановитесь! Разве этому я вас учил?<br>
[Витя АК] Чо?!<br>
[Дед] Нет! Секрет в том, чтобы кайфовать и телочек трахать!<br>
</span>
<br>
<span class='blue'>[Припев: MORGENSHTERN & Витя АК]</span><br>
Да, сука, новый автомат (е!)<br>
47-АК! <br>
Сука, мы палим города (е!)<br>
Ра-та-та-та-та!<br>
Да, сука, это на века (е!)<br>
Папа да АК -<br>
То, как мы валим на битах (е!)<br>
Ра-та-та-та-та-та-та-та-та-та-та!<br>
  <br>
<span class='blue'>[Аутро: MORGENSHTERN] Х23жм - AbAb</span><br>
Та, та-та-та!<br>
Та, та, та-та-та (е!)<br>
Та, та-та-та!<br>
Та, та, та-та-та!<br>
Та, та-та-та!<br>
Та, та, та-та-та (е!)<br>
Та, та-та-та!<br>
Та, та, та-та!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/bi2-depressiya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
