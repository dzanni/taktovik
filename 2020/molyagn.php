<?php
$title = 'Ногу Свело! - Молчание ягнят (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/RLH1D_uAa_k'";
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

<span class='blue'>[Куплет 1] Дв3-4жм - AbAb CdCd</span><br>
Смотрите, наши туши <br>
Уходят с молотка!<br>
Спасите наши души <br>
Или хотя бы ДНК!<br>
  <div class='refren'>Я помню нас свободных, <br>
  Но кто-то выпил этот яд,<br>
  И вой волков голодных <br>
  Стал молчанием ягнят.</div>
<br>
<span class='blue'>[Припев] Х5жж - ABAB</span><br>
Нашей кровью тротуары мыли.<br>
Нам в сердца прикладами стучали.<br>
Мы слова любви давно забыли,<br>
Потому что столько лет молчали.<br>
<br>

<span class='blue'>[Куплет 2]</span><br>
Смотрите, наши лица <br>
Бледны как маски на стене!<br>
Нам ничего не снится - <br>
«Титаник» сладко спит на дне.<br>
    <div class='refren'>Я помню нас бесстрашных: <br>
    Смешные голоса звенят.<br>
    Но хор друзей вчерашних <br>
    Стал молчанием ягнят</div>
<br>
<span class='blue'>[Припев]</span><br>
Нашей кровью тротуары мыли.<br>
Нам в сердца прикладами стучали.<br>
Мы слова любви давно забыли,<br>
Потому что столько лет молчали.<br>
<br>
<span class='blue'>[Переход] Я24жж - ABAB</span><br>
Но мы вернемся,<br>
Но мы вернемся вместе с летом!<br>
Но мы зажгемся,<br>
Но мы зажгемся новым светом!<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Нашей кровью тротуары мыли.<br>
Нам в сердца прикладами стучали.<br>
Мы слова любви давно забыли,<br>
Потому что столько лет молчали.<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/n/nogu-svelo/nogu-svelo-molchanie-yagnyat.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
