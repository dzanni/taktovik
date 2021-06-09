<?php
$title = 'SEREBRO - Пятница (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/yqPaB4E7Cxk'";
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

<span class='i'>- Оленька, рэп!<br></span>
<br>
<span class='blue'>[Куплет 1] Тк4цж/ - AAAA</span><br>
Короче, дело к ночи. Не танцуют больше буги,<br>
Я так хотела съесть свой серебряный бургер.<br>
Давай, снимай меня, чтоб я «бомбила» на YouTube.<br>
Плохая музыка, здесь нехуй делать в этом клубе.<br>
<div class='refren'>
Бери девчонок и давай подрулим все к Витале.<br>
Увидимся во Friday´s, нас туда опять позвали.<br>
На улице заливка, и резинка под ногами.<br>
Давай мы нажуёмся бабл-гама или Гамми.</div>
<br>
<span class='blue'>[Припев] Л2д/? - A''AAA<br></span>
Алкокапельница <br>
В эту пятницу,<br>
А нам без разницы, <br>
Сегодня будем плавиться.<br>
<div class='refren'>Алкокапельница <br>
В эту пятницу,<br>
А мы не паримся, <br>
Что наши деньги тратятся.</div>
<br>
<span class='i'>- Девчонки, я движение придумала!<br>
  - Что это за... открытие!<br>
  - <br></span>
  <span class='blue'>[Припев]<br></span>
  Алкокапельница <br>
  В эту пятницу,<br>
  А мы не паримся, <br>
  Что наши деньги тратятся.<br>
<br>
<span class='blue'>[Куплет 2] Дк3-4ц/ - aa, AA, A'A'<br></span>
Бери тачку и погнали!<br>
Подвинься, меня дверями зажали!<br>
Топи погромче звуки!<br>
Потерпи, здесь только суки!<br>
<div class='refren'>
Серый асфальт под колёсами.<br>
Мы с тобой над колёсами.<br>
Все летим вниз, как сбитые косами.<br>
Директ перегружен тупыми вопросами.</div>

Падаем, икс, ноль, тайп.<br>
Мы — маленькая хищная стая!<br>
Живём так, чтоб было красиво;<br>
Чтоб я охуенно всегда так тусила!<br>
<div class='refren'>
Не упадём, не ссы!<br>
Твой парашют – мои трусы,<br>
И мне уже без разницы,<br>
Бабло сливаем с пятницы.</div>
<br>
<span class='blue'>[Припев]<br></span>
Алкокапельница <br>
В эту пятницу,<br>
А нам без разницы, <br>
Сегодня будем плавиться.<br>
<div class='refren'>Алкокапельница <br>
В эту пятницу,<br>
А мы не паримся, <br>
Что наши деньги тратятся.</div>
<br>
<span class='i'>- Соус бери!<br>
- Солсбери!<br>
- [Неразб.] на бюджетнй отпуск в Солсбери. Забронировать билеты?<br></span>
<br>
<span class='blue'>[Припев]<br></span>
Алкокапельница <br>
В эту пятницу,<br>
А нам без разницы, <br>
Сегодня будем плавиться.<br>
<div class='refren'>Алкокапельница <br>
В эту пятницу,<br>
А мы не паримся, <br>
Что наши деньги тратятся.</div>
<br>
<span class='blue'>[Аутро]<br></span>
А мы не паримся, <br>
Что наши деньги тратятся.<br>
<br>
Музыка: Даниил Бабичев<br>
 Слова: Ольга Серябкина<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/serebro-pyatnica.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма г=д: "алкокАпельница - пЯтницу"<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
