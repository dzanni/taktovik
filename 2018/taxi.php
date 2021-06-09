<?php
$title = 'Хлеб - Такси (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/DKauwBtkTQ8'";
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

<span class='blue'>[Куплет 1] Тк2м - aa, abab<br></span>
За окном февраль, <br>
В баре собрАлись друзья,<br>
Они пиццу едят,<br>
Сыром корки хрустят.<br>
А я пью лимонад,<br>
 Целый графин взял себе.<br>
Пью не торопясь, <br>
Ведь он холодный, как Элджей!<br>
<div class='refren'>
  <span class='blue'>Тк32 - aa, AA, A'A'<br></span>
Мы хохотали громко очень,<br>
Но нас прервал телефонный звоночек.<br>
Любовь моя (любовь моя) к себе звала (к себе звала),<br>
Чтоб подарить подарок в праздник февраля.</div>

Мы её сегодня видели, <br>
Ходила по МВидео,<br>
Там будет не носки и крем, <br>
Не шампунь, не фигни те, что дарят всем!<br>
   Сто пудов, сто пудов!<br>
Подарок будет кайф!<br>
Сто пудов, сто пудов!<br>
<div class='refren'>
    <span class='blue'>Тк4цж - AA<br></span>
И я в такси лечу навстречу подарку.<br>
И я в такси, а во мне графин лимонаду.</div>
<br>
<span class='blue'>[Припев] Тк4цж - aa<br></span>
Ночной такси (такси), не тормози (тормози)<br>
Жми на би-би, меня к любимой вези.<br>
Ночной такси (такси), не тормози (тормози)<br>
Жми на би-би, меня к любимой вези.<br>
<div class='refren'>
Ночной такси, не тормози,<br>
Жми на би-би, меня к любимой вези.<br>
Ночной такси, не тормози,<br>
Жми на би-би, меня к любимой вези.</div>
<br>
<span class='blue'>[Куплет 2] Тк34цмж - aBaB<br></span>
Я так ждала тебя <br>
(Кирилл поёт за Сашину даму)<br>
Холодной ночью мучаясь без сна.<br>
(Она красивая, но поёт слабо).<br>
И ты пришел, чтобы согреть своим теплом.<br>
(Саша не мог прийти без подарка).<br>
И из штанов достал его! <span class='blue'>(Строка Тк2м)<br></span>
(Новый смартфон на 8 Марта).<br>
<div class='refren'>
      <span class='blue'>Ак2ж - AA<br></span>
Праздники немножко, <br>
Как снег, стучат в окошко.<br>
Новый смартфон в ладошку <br>
Мы друг другу положим.<br>
Присяду к тебе на ножку, <br>
Пока варится картошка.<br>
Я твоя родная кошка, <span class='blue'>(Строка Х4ж)<br></span>
И у нас с тобой любовь. <span class='blue'>(Строка Х4м)<br></span></div>
<br>
<span class='blue'>[Припев]<br></span>
Ночной такси (такси), не тормози (тормози)<br>
Жми на би-би, меня к любимой вези.<br>
Ночной такси (такси), не тормози (тормози)<br>
Жми на би-би, меня к любимой вези.<br>
<div class='refren'>
Ночной такси, не тормози,<br>
Жми на би-би, меня к любимой вези.<br>
Ночной такси, не тормози,<br>
Жми на би-би, меня к любимой вези.</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/h/hleb/hleb-taxi.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. На фонограмме строки "Я твоя родная кошка" и "И у нас с тобой любовь" произнесены
с равным ударением на все естественно ударные слоги, попадая в ритм хорея - поэтому вопреки правилу
"один фрагмент - один размер" мы их пометили как хореи.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
