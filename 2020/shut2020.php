<?php
$title = 'Ляпис Трубецкой - Шут 2020 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/crSLoQo35i4'";
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
<span class='blue'>[Куплет 1] Х5655мж - aBaB</span><br>
Шут повесил старенький колпак.<br>
Лысая башка трещит от глупых песен.<br>
Тяжкое призвание — дурак.<br>
Врут, кто говорит, что смех полезен!<br>
  <div class='refren'>Грим скрывает тысячи морщин,<br>
  Сизый нос опух от табака и пьянства.<br>
  Маленький беззубый арлекин,<br>
  Дуралей устал от хулиганства.</div>
<br>
<span class='blue'>[Припев] Д4ж/ - AAAA</span><br>
Смех зазвенел королевской монеткой -<br>
Маленький шут в позолоченной клетке.<br>
Пьяные сны, карусели и черти -<br>
Маленький шут самый грустный на свете.<br>
<br>
<span class='blue'>[Куплет 1]</span><br>
Завтра будет новый маскарад:<br>
Рыцари, турниры, фейерверки, танцы.<br>
Шут наденет красочный наряд,<br>
Будет бегать, прыгать и смеяться.<br>
  <div class='refren'>Пощекочет ножку королю,  <br>
  Рассмешит принцессу безобразной пляской.  <br>
  Гаер подражает соловью,  <br>
  Но скрывает ворона под маской.  </div>
  <br>
  <span class='blue'>[Припев]</span><br>
  Смех зазвенел королевской монеткой -<br>
  Маленький шут в позолоченной клетке.<br>
  Пьяные сны, карусели и черти -<br>
  Маленький шут самый грустный на свете.<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/lyapis-trubeckoi-shut.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
