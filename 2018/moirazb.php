<?php
$title = 'Баста - Мои разбитые мечты (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/yjKb5wGFURc'";
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

В которых, как и прежде ты со мной!<br>
<br>
<span class='blue'>[Куплет1] Тк4цм? - aa<br></span>
Огромный город. Ночной проспект.<br>
И я бегу, но мне не успеть!<br>
Я опоздал на вокзал, и уже далеко твой экспресс. <span class='blue'>(Строка Тк5цм - х)<br></span>
<div class='refren'>Но вопреки всему мои разбитые мечты<br>
Я превращу в цветные сны,<br>
В которых, как и прежде, ты со мной!<br>
(Ты со мной)<br>
В которых, как и прежде...</div>
<br>
<span class='i'><span class='blue'>[Ургант]</span><br>
Мы хотели бы для вас... на ваш суд представить песню «Мои разбитые мечты». Слушаем. Вспоминаем.
И в то же время улыбаемся. «Мои разбитые мечты». Баста.<br></span>
<br>
В которых, как и прежде ты со мной!<br>
<br>
<span class='blue'>[Куплет 1]<br></span>
Огромный город. Ночной проспект.<br>
И я бегу, но мне не успеть!<br>
Я опоздал на вокзал, и уже далеко твой экспресс.<br>
<br>
<span class='i'>- Артисты пошли - ничего своего написать не могут! Все старое перепевают. <br>
- Не ворчи!.. Не кусочничай!<br>
- Софа, ты в таком виде гостей встречаешь?<br>
- Лёша, ну не цепляйся к ней. Пусть как хочет, так и ходит.<br>
- Почему надо ходить в рваных джинсах?<br>
- Потому что это модно.<br></span>
<br>
Но вопреки всему мои разбитые мечты<br>
Я превращу в цветные сны,<br>
В которых, как и прежде, ты со мной!<br>
(Ты со мной!)<br>
В которых, как и прежде, ты со мной!<br>
(Ты со мной!)<br>
В которых, как и прежде, ты со мной!<br>
(Мои мечты!)<br>
<br>
<span class='blue'>[Декламация] Тк4цм/ж/д, Тк3ж - aa, AA, A'A'<br></span>
Когда я в первый раз увидел твоё милое личико,<br>
Помню - свет погас, и меня как будто выключили.<br>
Ты с подругами пришла в этот клуб на девичник,<br>
А я на эту тусу припёрся с коллективчиком.<br>
<br>
Я к тебе подошёл, оставив в стороне парней,<br>
И DJ для нас поставил песенку помедленней.<br>
Ты мне - на шею руки, я тебе - руки на талию.<br>
И мы как те двое на «Титанике» - любовь без памяти.<br>
<br>
То время вспоминаю часто. <br>
Автобусы не ходят час как.<br>
Я к тебе на встречу мчался, <br>
Но я был твоим несчастьем.<br>
<br>
<span class='blue'>Ак4цм/ж - aa<br></span>
Игры на грани (хук), район как Гарлем.<br>
Было всё просто - не было ни понтов, ни регалий.<br>
Знаешь, иногда в памяти всплывают кадры словно из снов...<br>
<br>
<span class='blue'>[Припев]<br></span>
В которых, как и прежде, ты со мной!<br>
В которых, как и прежде - ты со мной!<br>
(Ты со мной!)<br>
В которых, как и прежде - ты со мной!<br>
<div class='refren'>
В памяти всплывают кадры, словно из снов,<br>
В которых, как и прежде - ты со мной!<br>
(Ты со мной!)<br>
В которых, как и прежде - ты со мной!</div>
<br>
<span class='blue'>[Декламация]<br></span>
Ты как натурщица, я  как ревнивый скульптор.<br>
Хочешь уйти от меня? Слышишь, лучше не рискуй так!<br>
Я нарисую тебя и сожгу этот рисунок.<br>
Я не спал больше трех суток.<br>
<br>
Тут война между Венерой и Марсом,<br>
И мир вокруг плавится, как пластмасса.<br>
Спокойно-бесстрастно или жестко на рамсе<br>
Можно легко проебать всё, к чёрту послав всё.<br>
<br>
Выходит, ты в моей жизни была не просто гостьей.<br>
Ведь жизнь без тебя разделилась на жизнь «до» и «после».<br>
Всё просто, как то, что за летом снова осень,<br>
Вот, и после на листья лег снег.<br>
<br>
И ты осталась в письме на одной из тех дискет.<br>
Первая моя любовь... Где ты теперь и с кем?<br>
Прости, но я не смог об этом не спеть<br>
Спустя 18 лет...<br>
<br>
И снова осень уступила зиме,<br>
И я - самый одинокий человек на Земле.<br>
Я с улыбкой вспоминаю о тебе cпустя много лет. <span class='blue'>(Строка Тк5цм - х)</span><br>
<br>
<span class='blue'>[Припев]<br></span>
Ведь вопреки всему мои разбитые мечты<br>
Я превратил в цветные сны,<br>
В которых, как и прежде, ты со мной!<br>
(Ты со мной!)<br>
В которых, как и прежде, ты со мной!<br>
(Ты со мной!)<br>
В которых, как и прежде, ты со мной!<br>
В которых, как и прежде, ты со мной!<br>
(Ты со мной!)<br>
В которых, как и прежде, ты со мной!<br>
<br>
<span class='blue'>Источник: Расшифровка фонограммы</span><br>
<br>
<br>
N.B. м=д (парней - помедленней), ж=д (девичник - коллективчиком), г=д (личико - выключили).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>