<?php
$title = 'Скруджи & Наzима - Real One (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/cYDS-zTl1r4'";
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

<span class='blue'>[Куплет 1: Nazima] Дк2-4цм? - aabbb<br></span>
Улови мой южный акцент,<br>
НазимА здесь, это Шимкент.<br>
13-й номер — это BlackStar.<br>
Это лютый стафф,<br>
Это Казахстан, детка!<br>
<div class='refren'>
Летит по динамикам то, что<br>
Мы варим на студии ночью.<br>
Я знаю, твой парень вообще не готов,<br>
Но меня он...</div>
<br>
<span class='blue'>[Переход:  Nazima] Л6цм? - aabb<br></span>
Заточенный торс, папочки мерс, сыпет лавэ,<br>
Возникает вопрос, что, кроме слов, в твоей голове?<br>
Сладкий до слёз с букетами роз - всё это обман! (Это обман!)<br>
Меня не ищи, оставь тогда всё, мне нужен Real one!<br>
<br>
<span class='blue'>[Припев:  Nazima] Тк34цдм - A'A'bb<br></span>
Мне нужен тот, у кого нет в глазах сомнени-А.<br>
И кто готов пойти со мной на преступлени-А.<br>
И знает каждый в этой индустрии Bad Boy:<br>
Нужно знать меня, чтобы быть со мной.<br>
<br>
<span class='blue'>[Куплет 2: Скруджи] Дк24цж - AAAAAAAA<br></span>
Этот твой сладкий (Это твой сладкий)<br>
Из-за всякой фигни обирает манатки.<br>
Да, он богатый (И чо!)<br>
И каждый день тебе дарит подарки!<br>
Моя банда — маньяки.<br>
Новые партакИ после вчерашней пьянки - <span class='blue'>(Строка Ак4цж)<br></span>
Со мной это вряд ли (прокатит!)<br>
Как ни крути — у меня всё в порядке!<br>
<div class='refren'>
<span class='blue'>Тк23ж - AAAA<br></span>
  Я становлюсь с каждым днём на ступень выше <span class='blue'>(Строка Тк5цж)<br></span>
Шампунем запиваю деньжищи!<br>
Строго в своей нише,<br>
Скоро на афише —<br>
Всё, что предначертано свыше.<br>
Мы не гонимся за кэшем (конечно!)<br>
От нашей стаи несёт фрэш (конечно!)<br>
Скруджи неуравновешен (конечно!)<br>
Кто в 13, тот успешен! (Ага, ага).</div>

<span class='blue'>Тк5ц3жм - AAAA<br></span>
Ей не нужны мои деньги и мои машины,<br>
Ей не нужны эти тряпки и мои картины,<br>
Ей не нужны эти все муси-пуси, быть в курсе.<br>
Всё это ей даёшь ты!<br>
Всё это ей даёшь ты!<br>
<br>
<span class='blue'>[Переход:  Nazima]<br></span>
Заточенный торс, папочки мерс, сыпет лавэ,<br>
Возникает вопрос, что, кроме слов, в твоей голове?<br>
Сладкий до слёз с букетами роз - всё это обман! (Это обман!)<br>
Меня не ищи, оставь тогда всё, мне нужен Real one!<br>
<br>
<span class='blue'>[Припев х2:  Nazima]<br></span>
Мне нужен тот, у кого нет в глазах сомнени-А.<br>
И кто готов пойти со мной на преступлени-А.<br>
И знает каждый в этой индустрии Bad Boy:<br>
Нужно знать меня, чтобы быть со мной.<br>
<br>
<span class='blue'>[Аутро: Скруджи] Дк3м - ababaa<br></span>
У него золотой мерс,<br>
У него золотой phone (Похуй!)<br>
У него золотой крест,<br>
У него золотой фонд (Похуй!)<br>
Но ее так тянет ко мне, ко мне!<br>
Но ее так тянет ко мне!<br>
<br>
<span class='blue'><a href='https://tekst-pesni.info/nazima-skrudzhi-real-one/'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Назима использует ритмы песни <a href='../2017/etomoje.php'>"Это моё"</a>
из репертуара Егора Крида (вывешена на Youtube 30.10.2017). Она вышла на том же лейбле,
и автор у песен, вероятно, тот же. Мы обозначили переход как логаэд,
а не как дольник, несмотра на переменные анакрузу,
цезурное усечении и наращение: в остальном строки перехода идентичны друг другу.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
