<?php
$title = 'MiyaGi & Эндшпиль - Моя банда (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/JbkLlJNQCzA'";
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

Моя банда, моя банда.<br>
Моя банда, моя банда.<br>
Моя банда.<br>
<br>
<span class='blue'>[Интро] Тк2ж - AAAA<br></span>
Моя банда дымится, <br>
Владик - не Ибица.<br>
Фитиль не искрится, <br>
Девка не тигрица.<br>
<div class='refren'>
Лапать дилинь-доли<br>
Дали выкупаем дали,<br>
Дай медали дяде, дядя,<br>
Не го-ни-го-негодяи.</div>
<br>
<span class='blue'>[Куплет 1] Тк4цм/ж - aa, AA<br></span>
Вырубай гонки, я настроен в бит.<br>
Это стрит-фит фонари рябли<br>
Ресницы, и успокой пыл.<br>
Я напылякал дым, под потолок слил.<br>
Моя фантазия у музыкальных ног.<br>
Я преклоняюсь перед теми, кто реально смог.<br>
Смоук Вигер опасен видом.<br>
Он кроет матом, что демон читер.<br>
Полумелкий пидор, таких наглым битом на репит. <span class='blue'>(Строка Тк5цм)<br></span>
Их телки не спешат, сдувают мои кореша.<br>
Ты сделал выбор быть плохим, я остаюсь плыть не спеша.<br>
Это мои таблы, чигеран флоу,<br>
Я рублю катаной слоу мо.<br>
Я пристал к рэпу, со мной стая псов.<br>
Мы живем ночью, мой девиз гоу.<br>
<br>
<span class='blue'>[Переход = Интро] Тк2ж - aaaa<br></span>
Рапим такта, <br>
Рапа много, так-то.<br>
MiyaGi, Энди и МанТана,<br>
Ставим перед фактом.<br>
<br>
<span class='blue'>[Куплет 2] Дк7цж/д - AA, A’A’<br></span>
Сколько светлых умов, дерусь с соблазном, буду держать в напряжении.<br>
Где есть дело, а нет слов, а помощь протянутых рук, хватило бы времени.<br>
Мой каждодневный улов на мне испытываем за этими стенами.<br>
На нем на всем свет, где сын увлеченно играет в пленника времени.<br>
На частотах FM продукт, ты крут, но улицей воспитан покруче.<br>
У кого прозреет слепой, услышит глухой, рассеются тучи.<br>
Прямиком из родного места, оттуда, где загублены души.<br>
Правильный саунд, как чистый кристалл, прущий. Как из лучших он лучший.<br>
Тот, правда которого колет. Тот, кто для неё не форматор.<br>
А мы - ладонь в кулак и к небу за рядом стоящего брата.<br>
Подгон, до звезд не достающий, как дикорастущий мой добряк.<br>
Сквозняк твой разгонит все тучи. Заблудшей людской он рассудок на ок<br>
Эй, там, соседи повыше! Слышь, да, а нельзя ли потише?<br>
Быть ближе к звездному небу. В полной луне залезаю на крышу.<br>
Старой школы фанатик, братик. Всё в норме, все нервозники курят.<br>
То ли еще будет, жить будем. Тут все мы нахуй пиздуем.<br>
<br>
<span class='blue'>[Припев] Тк34цм? - aa<br></span>
Размажет, не подойдешь.<br>
На голову напала дрожь.<br>
Мы тут на каждого управу найдем.<br>
Булаву - буду Hope! Мой нож Булата, <br>
По степям бадалам кутим,<br>
На кики наварю свой стиль, <br>
Опасный алгоритм, погнали, летим, <br>
Заведомо полей паутин.<br>
<br>
<span class='blue'>[Переход х2] Тк2м - abbbaa<br></span>
Ра-па-пародист<br>
Грузит шлакстрон.<br>
Не сливай в лом, <br>
Мы Кинги Восток.<br>
Для псов и кис... <br>
Для псов и кис...<br>
(Моя... банда...)<br>
<br>
<span class='blue'>[Аутро] Ак2жм - AbAbCCb<br></span>
Время не рассчитывая<br>
Клали на биты.<br>
Мы раны по барабану, <br>
Мы добрались до мечты.<br>
Храм валили, пачки мочек, <br>
Наплевали былые сочно.<br>
И могу сказать вам точно - <br>
Мы добрались до мечты.<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/m/miyagi/6164-miyagi-endshpil-mantana-moya-banda-text-pesni.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
