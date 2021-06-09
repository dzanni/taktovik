<?php
$title = 'Artik & Asti - Номер 1 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aI1jKYX_5c4'";
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

Номер 1... Он мой номер 1.<br>
<br>
<span class='blue'>[Куплет 1: Asti] Тк2м, Тк23дм - abbaaaaa, A'A'bC'Cb<br></span>
Я без него не пойду, <br>
Я от него ни шагу назад.<br>
Мне без него не дышать - <br>
Я знаю, не смогу.<br>
Я без него в пустоту, <br>
В необратимую глубину.<br>
Я без него ко дну - <br>
Я знаю, не смогу.<br>
<div class='refren'>Его сердце с моим связано,<br>
   Накрепко привязано.<br>
Нараспашку душа моя.<br>
Его руки - мои крылья, <br>
Разлука - насилие.<br>
Если слышишь, знай - я твоя.</div>
<br>
<span class='blue'>[Припев] Тк2мж - aBaB<br></span>
Он - мой номер 1, <br>
Моя половина.<br>
Я за ним, за ним - <br>
Люблю его так сильно.<br>
Кто я без него? <br>
Даже не мыслю.<br>
Он один такой, <br>
Мужчина моей жизни.<br>
<div class='refren'>Он мой номер 1, <br>
  Мой самый красивый.<br>
Я за ним, за ним - <br>
Люблю его так сильно.<br>
Кто я без него? <br>
Без него нету смысла!<br>
И он только мой, <br>
Мужчина моей жизни.</div>
<br>
<span class='blue'>[Куплет 2: Asti]<br></span>
Он без меня никуда, <br>
Пусть всюду будут мои следы.<br>
Средь темноты найдет <br>
Он меня всегда.<br>
Он не сумеет забыть <br>
Прикосновений моих тепло,<br>
Ему важней всего <br>
Со мною рядом быть.<br>
<div class='refren'>На двоих одно дыхание <br>
  И спорное сознание,<br>
Из под ног уходит земля.<br>
Неизбежно и негаданно <br>
То, что было набрано нам.<br>
Если слышишь - знай, я твоя.</div>
<br>
<span class='blue'>[Припев]<br></span>
Он - мой номер 1, <br>
Моя половина.<br>
Я за ним, за ним - <br>
Люблю его так сильно.<br>
Кто я без него? <br>
Даже не мыслю.<br>
Он один такой, <br>
Мужчина моей жизни.<br>
<div class='refren'>Он мой номер 1, <br>
  Мой самый красивый.<br>
Я за ним, за ним - <br>
Люблю его так сильно.<br>
Кто я без него? <br>
Без него нету смысла!<br>
И он только мой, <br>
Мужчина моей жизни.</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/artik_asti_nomer_1.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
