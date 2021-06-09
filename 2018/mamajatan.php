<?php
$title = '#2Маши - Мама, я танцую (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/jezU0MUixaY'";
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
Танцуй! <br>
<br>
<span class='blue'>[Куплет 1] Дк34цд/м - aa, A'A'<br></span>
Стало модно так, всё одинаково.<br>
Музыка в углу где-то плакала.<br>
Я с тобой везде неизменна, пусть<br>
Будут танцы здесь, не пускаем грусть!<br>
<br>
<span class='blue'>[Переход] Х6цу1м/<br></span>
Пусть польётся пляс и формат слетит!<br>
Музыка людей - вот мой габарит.<br>
Праздник жизни нам и улыбок строй!<br>
Ты готов? Со мной эту песню пой!<br>
<div class='refren'>
  <span class='blue'>Дв31м/ - xx<br></span>
ХЭ-хэ-хЭ-хэ-хЭй! <br>
Танцуй!</div>
<br>
<span class='blue'>[Припев] Тк23мж/м - AAXb CCCb<br></span>
Мама, я танцую <br>
Под нашу <a href='bosaja.php'>«Босую»</a>.<br>
Папа, не жди дома,<br>
Я уже пьяна!<br>
<div class='refren'>Мама, я танцую <br>
  Под нашу «Босую».<br>
Папа, не жди дома, <br>
Я уже пьяна!</div>
НА-на-на-на, нА-на! (Танцуй!)<br>
НА-на-на-на, нА-на!<br>
НА-на-на-на, нА-на!<br>
Я уже пьяна.<br>
<div class='refren'>НА-на-на-на, нА-на! (Танцуй!)<br>
НА-на-на-на, нА-на!<br>
НА-на-на-на, нА-на!</div>
<br>
<span class='blue'>[Куплет 2] Дк34цг/ж - aa, A''A''<br></span>
Я не в формате по ящику и<br>
Я не в формате навязчивом, но<br>
Я по музыке от сердца честной очень,<br>
И эту песню я пишу ночью.<br>
<div class='refren'>
Свобода слова, свобода мысли.<br>
Чем проще мы здесь, тем больше искры.<br>
Взлёт не быстрый, но какой точный!<br>
Сто из ста выбиваем прочно.</div>
<br>
<span class='blue'>[Переход]<br></span>
Пусть польётся пляс и формат слетит!<br>
Музыка людей - вот мой габарит.<br>
Праздник жизни нам и улыбок строй!<br>
Ты готов? Со мной эту песню пой!<br>
<div class='refren'>
  ХЭ-хэ-хЭ-хэ-хЭй! <br>
  Танцуй!</div>
<br>
<span class='blue'>[Припев]<br></span>
Мама, я танцую <br>
Под нашу «Босую».<br>
Папа, не жди дома,<br>
Я уже пьяна!<br>
<div class='refren'>Мама, я танцую <br>
  Под нашу «Босую».<br>
Папа, не жди дома, <br>
Я уже пьяна!</div>
НА-на-на-на, нА-на! (Танцуй!)<br>
НА-на-на-на, нА-на!<br>
НА-на-на-на, нА-на!<br>
Я уже пьяна.<br>
<div class='refren'>
НА-на-на-на, нА-на! (Танцуй!)<br>
НА-на-на-на, нА-на!<br>
НА-на-на-на, нА-на!</div>
<br>
<span class='blue'>[Куплет 3]<br></span>
Я не в формате по ящику и<br>
Я не в формате навязчивом, но<br>
Я по музыке от сердца честной очень,<br>
И эту песню я пишу ночью.<br>
<div class='refren'>
  Свобода слова, свобода мысли.<br>
  Чем проще мы здесь, тем больше искры.<br>
  Взлёт не быстрый, но какой точный!<br>
  Сто из ста выбиваем прочно.</div>
<br>
<span class='blue'>[Переход]<br></span>
<div class='refren'>
  ХЭ-хэ-хЭ-хэ-хЭй! <br>
  Танцуй!</div>
<br>
<span class='blue'>[Припев]<br></span>
Мама, я танцую <br>
Под нашу «Босую».<br>
Папа, не жди дома,<br>
Я уже пьяна!<br>
<div class='refren'>Мама, я танцую <br>
  Под нашу «Босую».<br>
Папа, не жди дома, <br>
Я уже пьяна!</div>
НА-на-на-на, нА-на! (Танцуй!)<br>
НА-на-на-на, нА-на!<br>
НА-на-на-на, нА-на!<br>
Я уже пьяна.<br>
<div class='refren'>НА-на-на-на, нА-на! (Танцуй!)<br>
НА-на-на-на, нА-на!<br>
НА-на-на-на, нА-на!</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/0-9/2mashi/2mashi-mama-ya-tancuu.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
