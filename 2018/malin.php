<?php
$title = 'Макс Корж - Малиновый закат (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/fwfjsDsMuz8'";
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

<span class='blue'>[Куплет 1] Дк3м - abab<br></span>
Мысли ласкают живот,<br>
Порождая мечты.<br>
И фон горящих окОн,<br>
Себя открыла мне ты.<br>
<div class='ref'>Нежно-яркий цветок, <br>
Нетронутый, как дитя.<br>
Наивная на любовь, <br>
Солнечная вся.</div>
<br>
<span class='blue'>[Переход] Л4цжм? - AAbb<br></span>
И в этой комнате огонь (светом обнаженный).<br>
В облаке постель (накрывает волны).<br>
Посмотри назад, за тобою дверь.<br>
Так будет лучше нам, поверь!<br>
<br>
<span class='blue'>[Припев] Тк4ц3м - axaa<br></span>
Малиновый закат стекает по стене.<br>
В тех ломаных лучах я насквозь<br>
И вокруг тебя рассмотрел.<br>
Только ты ничего не знала обо мне.<br>
<div class='ref'>
Малиновый закат (во-о-о) рисует на земле (ее-еее).<br>
Наивно не пытай-ся достать, <br>
Что давно осело на дне.<br>
Если ты ничего не знала обо мне.</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Дверью хлопнув, беги!<br>
Не оглядывайся назад!<br>
Я уверен, найдешь себе ты<br>
Достойного паренька.<br>
<div class='ref'>
  Со мной не будет любви, <br>
Со мной погубишь себя.<br>
Но дверь закрыла не с той стороны <br>
И это было зря.</div>
<br>
<span class='blue'>[Переход]<br></span>
И снова в комнате огонь (светом обнаженный).<br>
Греют облака (будет все по-новой).<br>
Наступает ночь, и остановиться на ней<br>
Будет лучше нам, поверь!<br>
<br>
<span class='blue'>[Припев]<br></span>
Малиновый закат стекает по стене.<br>
В тех ломаных лучах я насквозь<br>
И вокруг тебя рассмотрел.<br>
Только ты ничего не знала обо мне.<br>
<div class='ref'>
Малиновый закат (во-о-о) рисует на земле (ее-еее).<br>
Наивно не пытай-ся достать, <br>
Что давно осело на дне.<br>
Если ты ничего не знала обо мне.</div>
<br>
<span class='blue'><a href='https://text-lyrics.ru/m1/max-korj/8923-maks-korzh-malinovij-zakat-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
