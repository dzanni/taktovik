<?php
$title = 'Слава КПСС - Владимир Путин (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/veFih7cxWSQ'";
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
Е, Слава КПСС, ты знаешь, кто я?!<br>
<br>
<span class='blue'>[Припев] Дк64цж - AA<br></span>
Владимир Путин, Владимир Путин, Владимир Путин!<br>
В русском рэпе Владимир Путин (ае!)<br>
Владимир Путин, Владимир Путин, Владимир Путин!<br>
В русском рэпе Владимир Путин (эй!)<br>
Владимир Путин, Владимир Путин, Владимир Путин!<br>
В русском рэпе Владимир (е) Путин!<br>
<br>
<span class='blue'>[Куплет 1] Дк4цм/ж - aa, AA<br></span>
Е, что ты можешь рассказать за рэп (а?)<br>
Не смей при мне говорить за рэп (нет)<br>
Я ебал твой протест, Антихайп на века (ха-ха-ха)<br>
Моя мать глинтвейн, мой отец из ЧК (сука)<br>
Чтоб ты знал, мудак, как меня ебёт мир —<br>
Моего корешка убил героин (да),<br>
Другой в реанимашке. Хрюша, Степашка, <br>
Кукла с рукой в жопе — Алексей Навальный (лох)<br>
Ты не понял, Маня, этот мир не сказка<br>
Если Слава Гнойный Кремлю продался, е.<br>
Я зазнался раньше, <br>
Чем ты начал делать рэп, сука!<br>
<br>
<span class='blue'>[Припев]<br></span>
А!<br>
Владимир Путин (э!) Владимир Путин (э!) Владимир Путин!<br>
В русском рэпе Владимир Путин (сука!)<br>
Владимир Путин (я!) Владимир Путин (я!) Владимир Путин!<br>
В русском рэпе Владимир Путин!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Что ты можешь рассказать за рэп (ха-ха)<br>
Не смей при мне говорить за рэп (не смей!)<br>
Я читал его в самый дешёвый микро (ео)<br>
Тебя нет на Айтюнс — ты как эмси никто!<br>
Пошёл на хуй, хохол (на хуй), ты в моей стране<br>
Сел на батл, но по какой статье?<br>
Вообще, мне похуй, по какой статье (лох)<br>
Вспоминай припев, ты в моей стране (е)<br>
Молодой Владимир в этой рэп-игре (е)<br>
Русский рэп для вас — это Брол и Крэк (ха-ха)<br>
Русский рэп для нас — это лол и кек!<br>
Этот флоу блэкс, и это бади бэг!<br>
<br>
<span class='blue'>[Бридж]<br></span>
Е!<br>
Владимир Путин (эй!) Владимир Путин (эй!) Владимир Путин!<br>
В русском рэпе Владимир Путин!<br>
Русский биткоин, берёза и водка,<br>
Русский парень из Андервотер,<br>
В волшебной (е) стране долбоёбов, хуле,<br>
Кто если не я — Владимир Путин!<br>
<br>
<span class='blue'>[Припев]<br></span>
Я!<br>
Владимир Путин (я!) Владимир Путин (я!) Владимир Путин!<br>
В русском рэпе Владимир Путин (эй!)<br>
Владимир Путин (я!) Владимир Путин (я!) Владимир Путин!<br>
В русском рэпе Владимир Путин (эй!)<br>
<br>
<span class='blue'><a href="https://genius.com/Slava-kpss-vladimir-putin-lyrics"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>