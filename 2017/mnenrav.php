<?php
$title = 'Big Russian Boss ft. MOLLY - Мне нравится (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/qoorDsqjaRA'";
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
<span class='blue'>[Интро]<br></span>
Трум-пум-пум-пум!<br>
Трум-пум-пум-пум! <br>
Эйу!<br>
<br>
<span class='blue'>[Куплет 1: Big Russian Boss] Дк6цм/ж - AABB</span><br>
Изгиб спорткара жёлтый я обнимаю нежно.<br>
На лесной weekend нас друзья позвали с Пемпом.<br>
Закину охотничью шубу, достану с полки спининг.<br>
Катушка из золота - это вам не китайский спиннер.<br>
<div class='refren'>
Эх, ребята! Замечательно кАк тут! <span class='blue'>(Строка Дк4цж)</span><br>
А то нырял бы как лох сейчас в Майами с яхты.<br>
Здесь тучи комаров, они кружАт вокруг.<br>
Кто-то бревном с земли мешает в котелке икру.</div>

Бум! Что-то головы коснулось нежно. <span class='blue'>(Строка Дк5цж)</span><br>
Это рядом в волейбол играли друзья детства.<br>
Сияет солнышко так ярко. Плавится тушёнка.<br>
Обожаю в шубе летом гулять без кондёра.<br>
<div class='refren'>
Качнётся купол неба, большой и звёздно снежный.<br>
Мы с друзьями, наконец, нашли грибы под елью.<br>
Обожаю дни, когда некуда спешить.<br>
Как здорово, что все мы здесь сегодня собрались! <span class='blue'>(Строка Дк5цж)</span></div>
<br>
<span class='blue'>[Припев] Тр2ц3дм - A'bA'b<br></span>
Нравится, мне нравится,<br>
Что здесь я сегодня с тобой!<br>
И кажется, и кажется,<br>
Нескоро вернусь я домой.<br>
<div class='refren'>
Мне нравится, мне так нравится, <br>
Что здесь я сегодня с тобой!<br>
И кажется, мне так кажется, <br>
Нескоро вернусь я домой.</div>
<br>
<span class='i'>- Алё, алё!<br>
- Здарово!<br>
- Как правильно: Молли или Малли? Ха-ха-ха!<br>
- Ну, пятый раз что-то не смешно. Когда приедете уже?<br>
- Да сейчас! Я машину толкаю!  Cпасибо, что позвали, блин!<br></span>
<br>
<span class='blue'>[Куплет: MOLLY] Дк4ц3м - aa<br></span>
Я по лесу сияю в грязи,<br>
И синяя шуба танцует вблизи.<br>
Ну, танцуешь - танцуй, и я не сижу.<br>
Давай анекдот расскажу!<br>
<div class='refren'>
Он сигналит глазами: «Смотри, что в руках!»,<br>
И я понимаю, что я в облаках.<br>
Кричу: «Наконец-то мы все дождались!,<br>
Как здорово, что собрались!»<br>
<br>
<span class='blue'>[Припев]<br></span>
Мне нравится, мне нравится (я знаю),<br>
Что здесь я сегодня с тобой (со мной)!<br>
И кажется, и кажется (чего?),<br>
Нескоро вернусь я домой (о, да!)<br>
<div class='refren'>
Мне нравится, мне так нравится,<br>
Что здесь я сегодня с тобой!<br>
И кажется, мне так кажется,<br>
Нескоро вернусь я домой (Не домой).</div>
<br>
Клёво, клёво, ага!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/b/big-russian-boss/8281-big-russian-boss-ft-molly-mne-nravitsya-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
