<?php
$title = 'Алексей Воробьев - Пляшем я и Маша (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/JL8AaCngnNY'";
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

<span class='i'>
- А-а-а!<br>
- Что? Что случилось? Что? Все хорошо?! Что-то приснилось?! Мой хороший!<br>
- А-а-а! Это что?<br>
- В смысле?<br>
- Ты чо? Не помнишь, как мы вчера поженились?<br>
</span>
<br>
<span class='blue'>[Припев х2] Л34цдж - A'BA'B</span><br>
ВОнам-парАм-пА-ра-рам!<br>
ВОнам-парАм-пам! Вот, мы пляшем!<br>
ВОнам-парАм-пА-ра-рам!<br>
ВОнам-парАм-пам! Я и Маша!<br>
<br>
<span class='blue'>[Припев, бэк]</span><br>
ВОнам-парАм-пА-ра-рам!<br>
ВОнам-парАм-пам! Вот, мы пляшем!<br>
ВОнам-парАм-пА-ра-рам!<br>
ВОнам-парАм-пам! Я и Маша!<br>
<br>
<span class='blue'>[Куплет 1] Х4мж - aBaB</span><br>
Аромат духов Chanel, <br>
Платье и цветные кеды.<br>
Ей сегодня было лень <br>
Просыпаться до обеда.<br>
  <div class='refren'>
  <span class='blue'>Тк3жж - ABAB</span><br>
  Звонок мамы, сообщенье, <br>
  Почему её дома нету?<br>
  Пока вымаливала прощенье, <br>
  Выкурила две сигареты.</div>
<br>
<span class='blue'>[Переход х2] Тк1-3м/ж - aaaBBB</span><br>
О! <br>
Останься рядом со мной (со мной)<br>
Ты знаешь, это любовь (любовь)<br>
Такое дело: <br>
Красотки справа, слева,<br>
А моя - королева!<br>
<br>
<span class='blue'>[Припев]</span><br>
ВОнам-парАм-пА-ра-рам!<br>
ВОнам-парАм-пам! Вот, мы пляшем!<br>
ВОнам-парАм-пА-ра-рам!<br>
ВОнам-парАм-пам! Я и Маша!<br>
<br>
<span class='blue'>[Припев х2, бэк]</span><br>
ВОнам-парАм-пА-ра-рам!<br>
ВОнам-парАм-пам! Вот, мы пляшем!<br>
ВОнам-парАм-пА-ра-рам!<br>
ВОнам-парАм-пам! Я и Маша!<br>
<br>
<span class='blue'>[Куплет 2] Тк3жм - AbAb</span><br>
С пятницы до воскресенья<br>
По ночным клубам марш-броски.<br>
Но больше этого веселья<br>
Она любит крутить мне мозги.<br>
  <div class='refren'>
    <span class='blue'>Тк3мж - aBaB</span><br>
  Завтра я опять проснусь,<br>
  Потому, что она поёт в дУше.<br>
  Я наверно на ней женюсь,<br>
  Если раньше не слечу с катушек!</div>
<br>
  <span class='blue'>[Переход х2]</span><br>
  О! <br>
  Останься рядом со мной (со мной)<br>
  Ты знаешь, это любовь (любовь)<br>
  Такое дело: <br>
  Красотки справа, слева,<br>
  А моя - королева!<br>
<br>
  <span class='blue'>[Припев]</span><br>
  ВОнам-парАм-пА-ра-рам!<br>
  ВОнам-парАм-пам! Вот, мы пляшем!<br>
  ВОнам-парАм-пА-ра-рам!<br>
  <br>
<span class='i'>Поехали!</span><br>
  <br>
ВОнам-парАм-пам! Я и Маша!<br>
  <br>
  <span class='blue'>[Припев х4, бэк]</span><br>
  ВОнам-парАм-пА-ра-рам!<br>
  ВОнам-парАм-пам! Вот, мы пляшем!<br>
  ВОнам-парАм-пА-ра-рам!<br>
  ВОнам-парАм-пам! Я и Маша!<br>
  <br>
  <span class='i'>
  - А потом ты такой встаешь, романтично смотришь мне в глаза и говоришь:
  "Сейчас я сделаю то, что уже давно должен был сделать! Маша, любимая, ты самая прекрасная
  девушка во всей вселенной! (Кхе!) Я так люблю тебя!" Ай, язык обожгла. Чай горячий.
  Да, да, ты так всё и сказал. Там вообще все обалдели! Эта Наташа Краснова чуть не описалась
  от зависти! А потом было самое интересное. <br>
  - Добрый день, уважаемые дамы и господа! Мы сочетаем браком двух людей: умную, красивую,
  замечательную женщину и вот это! Влюбленные, я объявляю вас мужем и женой.<br>
  - Я так счастлива!<br>
  - Я тоже!<br>
  - Хи-хи-хи! Навсегда вместе!<br>
  - Ура-а!  <br></span>
    <br>
  <span class='blue'><a href='https://www.gl5.ru/alexey-vorobiev-plyashem-ya-i-masha.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
