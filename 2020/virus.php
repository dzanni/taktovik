<?php
$title = 'Семен Слепаков - Вирусная (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/3pox3FZE_3o'";
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



<span class='blue'>[Куплет 1] Тк35цмм aaBccddB<br></span>
У нас была куча проблем,<br>
Мы были все недовольны всем,<br>
Мы говорили, что уж лучше, сука, сдохнуть, чем жить вот так.<br>
Что мы по уши в говне,<br>
И жопа в стране, <span class='blue'>(Стрка Тк2м)<br></span>
И в Думе много воров,<br>
И в фильмах только Петров,<br>
Повсюду пробки, воздух грязный, солнца нету и гаишник мудак.<br>
<br>
<span class='blue'>[Припев] Л34м/м aaaa<br></span>
Но оказалось, тогда все было заебись!<br>
Коронавирус, коронавирус, отъебись!<br>
Но оказалось, что тогда все было просто заебись!<br>
Коронавирус, сраный вирус, сраный вирус, отъебись!<br>
<br>
<span class='blue'>[Куплет 2] aaBcccB<br></span>
Пусть будет снова жопа в стране,<br>
Хотим мы жить в нашем милом говне,<br>
Пусть Конституцию меняют хоть в неделю пятнадцать раз.<br>
Пусть срут на наши права,<br>
В Китай увозят дрова,<br>
Пусть пенсионный возраст делают хоть семьдесят два, <span class='blue'>(Строка Тк4цм)</span><br>
И дружно пиздят наши клевые омоновцы дубинками нас.<br>
<br>
<span class='blue'>[Припев]<br></span>
Пусть будет снова все, как когда-то, заебись!<br>
(Заебись-заебись! Заебись-заебись!)<br>
Коронавирус, коронавирус, ну отъебись!<br>
(Отъебись! Отъебись!)<br>
Пусть будет снова, будет снова все, как прежде, заебись!<br>
(За-заебись!)<br>
Коронавирус, сраный вирус, сраный вирус, отъебись!<br>
(Отъебись! Отъебись!)<br>
<br>
<span class='blue'>[Куплет 3] Дк4цжж XXXAXXXA<br></span>
Коронавирус, коронавирус,<br>
Ну почему ты такой противный?<br>
Ты обьясни нам, коронавирус,<br>
Че ты до всех до нас докопался?<br>
Возможно, просто ты разозлился,<br>
Что ты родился в какой-то жопе,<br>
Что жил в какашках, в мышах летучих<br>
И в дохлых крысах ты тусовался.<br>
<br>
И вот ты вышел такой, бля, хопа!<br>
Ща покажу вам, кто здесь папа!<br>
Всех вас заставлю меня бояться,<br>
Руки, блядь, мыть, сидеть, сука, дома!<br>
Но ты послушай, коронавирус,<br>
Мы ведь с тобою очень похожи,<br>
Мы же ведь тоже живем в России,<br>
И нам твои проблемы знакомы.<br>
<br>
Нам тоже плохо, нам тоже сложно,<br>
Но стариков мы не убиваем!<br>
Жизнь им, конечно, не облегчаем,<br>
Но убивать их - это уж слишком!<br>
Мы тоже можем всем на планете<br>
Вмиг показать, кто тут нахуй папа!<br>
Но мы же терпим, Крым лишь забрали,<br>
Мягкая сила - вот наша фишка!<br>
<br>
Где твои скрепы, коронавирус?<br>
Помни, отчизну не выбирают!<br>
Много на свете есть мест прекрасных,<br>
Но ничего нету лучше дома.<br>
Вали обратно ты в жопу крысы,<br>
А в нашу жопу больше не суйся!<br>
Пусть сидит каждый в своей, блядь, жопе<br>
И не мешает сидеть другому!<br>
<br>
<span class='blue'>Дк4цжм XXXaXXXa<br></span>
Хватит злиться, коронавирус,<br>
Ты только глянь, какой ты красивый!<br>
Такой весь круглый, такой в цветочках -<br>
Выглядишь просто заебись!<br>
Займись там в жопе контролем гнева,<br>
Сходи к психологу, помедитируй<br>
И полюби себя, коронавирус,<br>
А от нас ты отъебись!<br>
<br>
<span class='blue'>[Припев]<br></span>
Пусть будет снова все, как когда-то, заебись!<br>
(Заебись-заебись! Заебись-заебись!)<br>
Коронавирус, коронавирус, ну отъебись!<br>
(Отъебись! Отъебись!)<br>
Пусть будет снова, будет снова все, как прежде, заебись!<br>
(Заебись-заебись! Заебись-заебись!)<br>
Коронавирус, сраный вирус, сраный вирус, отъебись!<br>
<br>
<span class='blue'>[Финал] Л2-3м/м aabbccc<br></span>
Отъебись от нас!  <br>
(Отъебись от нас!) <br>
Доебись до них! <br>
(Доебись до них!) <br>
Не, отъебись от всех! <br>
(Отъебись от всех!) <br>
Да, отъебись от всех! <br>
 <br>
 Слова: Семен Слепаков и Джавид Курбанов <br>
 <br>
<span class='blue'><a href='http://perevodp.ru/semen-slepakov-virysnaja_text_lyrics_pesni_l'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
