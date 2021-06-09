<?php
$title = 'Элджей - Hey, Guys (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/sr8fjIXygWU'";
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
Я Sayonara Boy!<br>
Sayonara Boy (э-э-эй!)<br>
<br>
<span class='blue'>[Припев] Л3м? - aa<br></span>
Эй, гайс, у меня всё найс (у меня всё найс)<br>
Эй, гайс, у меня всё найс (найс, найс, найс)<br>
Эй, гайс, у меня всё найс (у меня)<br>
Эй, гайс, у меня всё найс (a-a-a-a-a)<br>
<br>
<span class='blue'>[Куплет 1] Тк34цм/ж - aa, AA<br></span>
На балансе до хуя бабла (бла-бла-бла)<br>
Моя жизнь ко мне так добра (ла-ла-ла-ла-ла)<br>
На концертах сучки падают в отключке.<br>
Люблю когда их много — не беру поштучно (ай, ай)<br>
<div class='refren'>
<span class='blue'>Ак2м? - xaxaaA<br></span>
Детка хочет мой поцелуй, <br>
Даже на отъебись!<br>
У-у-у-у, у-у-у-у!<br>
Глотай текилу и заткнись,<br>
Нас у входа ждёт таксист,<br>
Он уже долбит на мобилу (бр, бр, бр, бр) </div>
<br>
<span class='blue'>[Припев]<br></span>
Эй, гайс, у меня всё найс (у меня всё найс)<br>
Эй, гайс, у меня всё найс (всё найс, всё найс)<br>
Эй, гайс, у меня всё найс (у меня всё найс)<br>
Эй, гайс, у меня всё найс (найс, найс, найс)<br>
Эй, гайс, у меня всё найс!<br>
Эй, гайс, у меня всё найс (найс, найс, найс)<br>
Эй, гайс, у меня всё найс (ха, ха)<br>
Эй, гайс, у меня всё найс (вау-вау)<br>
<br>
<span class='blue'>[Куплет 2] Тк5цм/ж - aa, AA<br></span>
Моя жизнь, как белое пятно, мне на всех всё равно!<br>
Сияю на все сто, даже когда в говно (во-воу)<br>
Большие корпорации хотят со мною тусоваться.<br>
Люди, заметив меня, начинают стесняться.<br>
<div class='refren'>
<span class='blue'>Дк2мж - aBBa<br></span>
Они смотрят мне в рот (в рот, в рот, в рот) <br>
Твоя детка хочет <br>
Меня кусочек,<br>
Я словно торт (о-о)<br>
Они смотрят мне в рот (о-о)<br>
Твоя детка хочет <br>
Меня кусочек, <br>
Я словно торт (ням-ням-ням-ням)</div>
<br>
<span class='blue'>[Припев]<br></span>
Эй, гайс, у меня всё найс (у меня всё найс)<br>
Эй, гайс, у меня всё найс (у меня всё найс)<br>
Эй, гайс, у меня всё найс (на-на-на-найс)<br>
Эй, гайс, у меня всё найс (найс! найс!)<br>
Эй, гайс, у меня всё найс (у меня всё найс)<br>
Эй, гайс, у меня всё найс (у меня всё найс)<br>
Эй, гайс, у меня всё найс (вау-вау)<br>
Эй, гайс, у меня всё найс (ва-ва-ва-ва-ва, я)<br>
<br>
<span class='blue'><a href='https://genius.com/Allj-hey-guys-lyrics'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
