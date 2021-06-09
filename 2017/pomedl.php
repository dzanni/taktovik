<?php
$title = 'MBAND - Помедленнее (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/W5682Bad96s'";
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

Помедленнее... <br>
Помедленнее...<br>
<br>
<span class='blue'>[Припев] Дв6м - abab</span><br>
Я просил люби или убей. О-е.<br>
(Помедленнее...)<br>
Я кричал: «Спаси меня», но ей не жаль.<br>
Я просил люби или убей. О-е.<br>
(Помедленнее...)<br>
Куда мне, от нее или за ней бежать?<br>
<br>
<span class='blue'>[Куплет 1] Л24дм - X'aX'aa</span><br>
Она медленно набирает ход, <br>
Словно черный лимузин.<br>
Поднимает взгляд и меня в себя <br>
Заливает, как бензин.<br>
Её помнят вечно, брат, те, кто видел вблизи.<br>
Никакого с ней будущего нет, <br>
Люди шепчут за глаза.<br>
Моя мама мне молча смотрит вслед, <br>
А мне нечего сказать.<br>
Винить, мама некого, я создал это сам.<br>
<br>
<span class='blue'>[Припев]</span><br>
Я просил люби или убей. О-е.<br>
(Помедленнее...)<br>
Я кричал: «Спаси меня», но ей не жаль.<br>
Я просил люби или убей. О-е.<br>
(Помедленнее...)<br>
Куда мне, от нее или за ней бежать?<br>
Бежать!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Неземная и непонятная, <br>
Словно в небе НЛО.<br>
Но она - моя, и я буду с ней, <br>
Вопреки всем и на зло.<br>
Винить мама некого, мне опять повезло.<br>
<br>
<span class='blue'>[Припев]</span><br>
Я просил люби или убей. О-е.<br>
(Помедленнее...)<br>
Я кричал: «Спаси меня», но ей не жаль.<br>
Я просил люби или убей. О-е.<br>
(Помедленнее...)<br>
Куда мне, от нее или за ней бежать?<br>
Бежать...<br>
<br>
<span class='blue'>[Куплет 3: Артем Пиндюра] Тк4цм/ж - aa, AA<br></span>
Когда она проходит рядом, я теряю разум.<br>
Я не готов на компромисс, мне нужно все и сразу.<br>
Себя ломаю и теряю весь позитив.<br>
Я загипнотизированный. Вау, подожди!<br>
Она другая совсем. Она взяла меня в плен.<br>
Она забрала мир с собою и ушла от проблем.<br>
Она - мой эксклюзив. Она - мой номер один.<br>
Но только об одном забыла, как я её просил.<br>
<br>
<span class='blue'>[Припев]</span><br>
Я просил люби или убей. О-е.<br>
(Помедленнее...)<br>
Я кричал: «Спаси меня», но ей не жаль.<br>
Я просил люби или убей. О-е.<br>
(Помедленнее...)<br>
Куда мне, от нее или за ней бежать?<br>
Бежать!<br>
<br>
Музыка: К. Меладзе<br>
Слова: К. Меладзе, А. Пиндюра<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/m/mband/9114-mband-pomedlennee-text-pesni.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Первые два куплета - логаэд из пятисложника, 4-стопного хорея и 4-стопного цезурированного дольника.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
