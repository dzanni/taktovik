<?php
$title = 'MOZGI - Chica Bamboni (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/rYNN5p-uI1Q'";
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
Уа-уА-уа-А-а-а, а-уА-а!<br>
<br>
<span class='blue'>[Куплет 1] Х2ж/ - AA...</span><br>
Fashion Chica<br>
Cash back Сhica<br>
TikTok Сhica<br>
Trash talk Сhica<br>
Gangsta Chica<br>
Insta Сhica<br>
Merlin Chica<br>
Manson Chica<br>
Chihuahua Сhica <span class='blue'>(Строка Тк3ж)</span><br>
Corny Chica (Corny)<br>
Tijuana Сhica <span class='blue'>(Строка Тк2ж)</span><br>
Horny Сhica<br>
Micro Сhica<br>
Softy Сhica<br>
  <div class='refren'>
  <span class='blue'>Тр13м/ - aaa</span><br>
  Chica Posh<br>
  Chica Porshe<br>
  Chica Ukrainian Borsch </div>
<br>
<span class='blue'>Ан1мм - xaxa</span><br>
Chica yes<br>
Chica no<br>
Chica high<br>
Chica low<br>
  <div class='refren'>
  <span class='blue'>Д2м/ - aa...</span><br>
  Chica blow job<br>
  Chica dance club<br>
  Chica Porn Hub<br>
  Chica good stuff<br>
  Chica skate board<br>
  Chica Skype mode<br>
  Chica basketball & Football court <span class='blue'>(Стрка Дк4цм)</span></div>
<br>
<span class='blue'>[Переход] Тр1112мж - aBaB</span><br>
Chica boom<br>
Chica boni<br>
Chica boom<br>
Chica Bamboni<br>
<br>
<span class='blue'>[Припев] Л23ж/ - AAAA</span><br>
Chica Bamboni (Chica Bamboni)<br>
Chica Bamboni – boni (aha)<br>
Chica Bamboni (Chica Bamboni)<br>
Chica Bamboni – boni (he)<br>
  <div class='refren'>Chica Bamboni (Chica Bamboni)<br>
  Chica Bamboni – boni (aha)<br>
  Chica Bamboni (Chica Bamboni)<br>
  Chica Bamboni</div>
<br>
<span class='blue'>[Куплет 2]</span><br>
Tesla Сhica<br>
Barca Сhica<br>
Extra Сhica<br>
Rasa Chica<br>
  <div class='refren'>
  <span class='blue'>Х23мм? - ABAB</span><br>
  Chicago Сhica <span class='blue'>(Строка Я2ж)</span><br>
  LAGO Сhica Como<br>
  Lego Сhica<br>
  Dúo Сhica Solo</div>
Vegas Сhica<br>
Spicy Сhica<br>
Vegan Сhica<br>
Icy Сhica<br>
  <div class='refren'>
  <span class='blue'>Дк13м/м - aaabbb</span><br>
  Chica hip<br>
  Chica hop <br>
  Chica hip hip tibiri-bap <br>
  Chica up<br>
  Chica down<br>
  Chica Bruce Lee Jackie Chan </div>
<br>
<span class='blue'>Тк2м/ - aa...</span><br>
Chica fat ass<br>
Chica no stress<br>
Chica first class<br>
Chica un dos tress<br>
Chica póker face<br>
Chica thouse days<br>
Chica charity case <span class='blue'>(Строка Тк3м)</span><br>
Chica any ways<br>
<br>
<span class='blue'>[Переход]</span><br>
Chica boom<br>
Chica boni<br>
Chica boom<br>
Chica Bamboni<br>
<br>
<span class='blue'>[Припев]</span><br>
Chica Bamboni (Chica Bamboni)<br>
Chica Bamboni – boni (aha)<br>
Chica Bamboni (Chica Bamboni)<br>
Chica Bamboni – boni (he)<br>
  <div class='refren'>Chica Bamboni (Chica Bamboni)<br>
  Chica Bamboni – boni (aha)<br>
  Chica Bamboni (Chica Bamboni)<br>
  Chica Bamboni</div>
  <br>
<span class='blue'>Источник: Официальный текст под клипом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
