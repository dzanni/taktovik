<?php
$title = 'Хлеб - Sprite (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/r1iSfATqG70'";
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

<span class='blue'>[Интро, Кирилл Трифонов]<br></span>
Блогеры часто думают, что мы не замечаем, когда они что-то рекламируют.
Сегодня мы вам расскажем об этом чуть-чуть поподробнее. В последнее время очень модно делать это
в рэп-клипах, потому что туда можно незаметно и аккуратно интегрировать какой-нибудь продукт.
Например, Sprite.<br>
<br>
<span class='blue'>[Переход, Денис Кукояка] Тк34цжм? - AbAb<br></span>
Они думают, мы не заметим<br>
Рекламу, что запихнули в трек!<br>
Но порой прямо даже в припеве<br>
Упоминают какой-нибудь бренд...<br>
<br>
<span class='blue'>[Хук, ХЛЕБ] Дк2м - aaxaxaax<br></span>
Например, Sprite!<br>
Например, Sprite!<br>
Прямо в припев!<br>
Например, так!<br>
Взять хотя бы, ну...<br>
Да вот тот же Sprite!<br>
Ну, пусть будет Sprite!<br>
Да, да, да, да! (У!)<br>
<br>
<span class='blue'>[Куплет, Денис Кукояка и Александр Шулико] Тк4ц3м/ж - aa etc.<br></span>
Я вижу насквозь этих ребят (рентген)<br>
Хоть они так любят намекать (непрозрачно)<br>
Ведь на заднем фоне, пока он качает в такт,<br>
Ненароком мы увидим, например, Sprite!<br>
<div class='refren'>
Как это делают мы вам покажем (У!)<br>
Прямо сейчас, вместе со Sprite (А!)<br>
Он говорит — это клево и вкусно (Е!)<br>
Как будто мы этого сами не знаем (О!)<br>
Новенький вкус — арбуз-огурец,<br>
Я в курсе, что не оторваться (Ай, ай, ай!)<br>
Но в кадре он по договору<br>
Держать её должен секунд двенадцать (Тик-так!)<br>
Это группа «Хлеб», все наши люди, приём! (Аллё!)<br>
Со мной Саня и Кирилл — мы ходим втроём (Всегда!)<br>
<br>
<span class='blue'>[Переход, Кирилл Трифонов]<br></span>
Там будет какой-то кусок без рекламы,<br>
Чтобы людей отвлекать.<br>
Но для закрепления дважды обязан <br>
Всем показать, например, Sprite.<br>
<div class='refren'>
Они думают, мы не заметим<br>
Рекламу, что запихнули в трек!<br>
Но порой прямо даже в припеве<br>
Упоминают какой-нибудь бренд...</div>
<br>
<span class='blue'>[Хук х2, ХЛЕБ]<br></span>
Например, Sprite!<br>
Например, Sprite!<br>
Прямо в припев!<br>
Например, так!<br>
Взять, хотя бы, ну...<br>
Да вот тот же Sprite!<br>
Ну, пусть будет Sprite!<br>
Да, да, да, да! (У!)<br>
<br>
<span class='blue'><a href='https://text-pesni.su/page/anna-pletnjova-belaja'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
