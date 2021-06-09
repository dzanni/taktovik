<?php
$title = 'Артур Бабич - Парень простой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/KW5nAtu1I7Y'";
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
Эй, красотка, семки есть?<br>
Ха-ха-хА-ха! Ха-хА!<br>
Сюда подойди!<br>
<br>
<span class='blue'>[Припев х2] Дв3343м/жм</span><br>
Я парень простой (а!) <br>
Девочка, постой (а!)<br>
Если бы не карантин, <br>
Забрал тебя домой (а!)<br>
  <div class='refren'>Дай ответ любой (а!) <br>
  Только не игнорь (а!)<br>
  Подпишись на мой TikTok,<br>
  А я потом на твой (а!)</div>
<br>
<span class='blue'>[Куплет 1] Тк4-6цм/ - aaaa</span><br>
Да, я родом из села, как и мой дед.<br>
У меня есть интернет, а понтов нет (нет)<br>
Денег тоже нет, но зато мне мало лет.<br>
Вместо рюкзака пакет, и девчонки тоже нет.<br>
(Но это не точно)<br>
  <div class='refren'>БАбич и БабИч, здесь с тобой на связи бич.<br>
  Я твой Гарри Поттер, я ловлю её, как снитч.<br>
  Я расту в TikToк'е, пока ты творишь там дичь.<br>
  Парень из села сумел кого-то удивить (шо!)</div>
<br>
<span class='blue'>[Припев]</span><br>
Я парень простой (а!) <br>
Девочка, постой (а!)<br>
Если бы не карантин, <br>
Забрал тебя домой (а!)<br>
  <div class='refren'>Дай ответ любой (а!) <br>
  Только не игнорь (а!)<br>
  Подпишись на мой TikTok,<br>
  А я потом на твой (а!)</div>
<br>
  <span class='blue'>[Проигрыш]</span><br>
<br>
<span class='blue'>[Куплет 2] Х43мж - aBaB</span><br>
Год назад я пас коров, <br>
А теперь в столице.<br>
Меня знает всё село, <br>
Папа мной гордится.<br>
  <div class='refren'>Раз осмелился мечтать, <br>
  Сможешь и добиться.<br>
  Я вообще пацан свободный, <span class='blue'>(Строка Х4ж)</span><br>
  Можно обратиться?</div>
<br>
<span class='i'>
— Ты чё, из села приехал?<br>
Разговаривать нормально научись!<br></span>
<br>
<span class='blue'>[Припев]</span><br>
Я парень простой (а!) <br>
Девочка, постой (а!)<br>
Если бы не карантин, <br>
Забрал тебя домой (а!)<br>
  <div class='refren'>Дай ответ любой (а!) <br>
  Только не игнорь (а!)<br>
  Подпишись на мой TikTok,<br>
  А я потом на твой (а!)</div>
Я парень простой!<br>
<br>
<span class='blue'>[Финал/Дроп]</span><br>
БабИч!<br>
Уау! Ха-ха!<br>
БабИч!<br>
Уау! Ха-ха!<br>
<br>
<span class='blue'><a href='https://on-hit.ru/texts/anja-pokrov-paren-iz-sela/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
P.S. На песню есть ответ - <a href='parenizsela.php'>"Парень из села"</a>
Ани Pokrov (клип вывешен 17.20.2020).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
