<?php
$title = 'Монеточка - 90 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/n4h-WpSsXVw'";
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

<span class='blue'>[Куплет 1] Тк32жм? - AbbA'cc<br></span>
Меня зачали в видеосалоне<br>
Где-то под стрельбой,<br>
Под лай и вой.<br>
Отвёрткой угрожали беспризорники: <br>
«Слышь, диск давай!»<br>
Больно, ай…<br>
<div class='refren'>
  <span class='blue'>Тк32жд - AB'AB' A'C'CC'<br></span>
Бензином водку мешали, <br>
Глушили литрами,<br>
До десяти доживали <br>
Самые хитрые.</div>
Пока чермет сгущался, <br>
Дробились пальчики,<br>
Пиздили тачки,<br>
Дисками банчили.<br>
<div class='refren'>
    <span class='blue'>Тк4цм/ж - aa, AA<br></span>
Делить ларьки ужасно весело с другом на даче<br>
Делить страну — это немножко другая задача…<br>
Ну как же можно в одного и там, и там фигачить?!<br>
Хорошо, что в наше время всё совсем иначе!</div>
<br>
<span class='blue'>[Припев] Тк2жм - ABXc BAxc<br></span>
Мы курили что угодно, <br>
Только не сигареты,<br>
Потушили-забыли: <br>
Что было — прошло!<br>
И только из кассеты, <br>
Из песен «Кровостока»<br>
Я с детским ужасом узнал <br>
Про то, что<br>
<div class='refren'>
  <span class='blue'>Тк3цмд - aB'aB'<br></span>
В девяностые убивали людей<br>
И все бегали абсолютно голые!<br>
Электричества не было нигде,<br>
Только драки за джинсы с кока-колою.<br>
Понавесили крестов на корешей,<br>
Пиджаки земляничные нагладили,<br>
И на танцы — кровь у всех из ушей,<br>
И только «Ласковый Май» играл по радио.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
А я живу не так уж плохо, пью сахарный чай,<br>
Пишу на новеньком макбуке текста про печаль.<br>
Размер легко в утоплённом доме писать, и<br>
Вполне достаточно рассказов от деда и бати!<br>
<div class='refren'>
Вполне хватает материала <br>
На новый альбом,<br>
Внемлю той банде, коммерсанты <br>
Сдаются живьём!<br>
Их воскрешает затакта <br>
Очередной куплет.<br>
А так-то всё не так, и <br>
Щас-то всех их нет!</div>
<span class='blue'>Тк34цм/д - aa, A'A'<br></span>
Хихикали шпионы поздней ночью и<br>
Патриотические рожи корчили,<br>
Ругались матом на английском языке,<br>
Но это факин тренд, а значит, всё окей!<br>
<br>
<span class='blue'>[Припев]<br></span>
Мы курили что угодно, <br>
Только не сигареты,<br>
Потушили-забыли: <br>
Что было — прошло!<br>
И только из кассеты, <br>
Из песен «Кровостока»<br>
Я с детским ужасом узнал <br>
Про то, что<br>
<div class='refren'>
В девяностые убивали людей<br>
И все бегали абсолютно голые!<br>
Электричества не было нигде,<br>
Только драки за джинсы с кока-колою.<br>
Понавесили крестов на корешей,<br>
Пиджаки земляничные нагладили,<br>
И на танцы — кровь у всех из ушей,<br>
И только «Ласковый Май» играл по радио.<br>
<br>
<span class='blue'>[Аутро]<br></span>
В девяностые убивали людей.<br>
В девяностые убивали людей.<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/m1/monetochka/10917-monetochka-90-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
