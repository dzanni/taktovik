<?php
$title = 'Баста ft. Юня - Мастер и Маргарита (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/UB_3NBQgsog'";
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

<span class='blue'>[Припев x2: Баста] Тк4цд - A'A'A'A'</span><br>
Бог нам дал любовь, с ней словно крылья за спину.<br>
И сошла с ума Маргарита вслед за Мастером.<br>
Но людская зависть захотела украсть её.<br>
Но навсегда осталась в сердце Мастера часть ее.<br>
<br>
<span class='blue'>[Куплет 1: Баста] Ак4цм/д - aa, A'A'</span><br>
Мой корабль в огне, мой корабль терпит бедствие.<br>
И принес в письме плохие вести буревестник<br>
О том, что нам с тобой не свидеться, с тобой не встретиться.<br>
Ни берега, ни дна - только на небо лестница.<br>
Дни и ночи в одиночке и так тысячи лет,<br>
Прошу тебя, мне больно, умоляю, боже, выключи свет.<br>
Я исписал своей кровью каждый сантиметр этих стен,<br>
Но тебе нет дела до этих глупостей.<br>
Тысячи страниц о тебе, ими растопил камин.<br>
Мое сердце - камень, но, увы, кровит гранит.<br>
Я твоя ошибка, меня не исправить, легче устранить.<br>
Забудь меня на нашем необитаемом острове.<br>
Я замерзаю, будто зимой, нутро на излом.<br>
Жара и зной, но меня морозит и бьет озноб.<br>
И непонятно, почему судьбой связан я с тобой,<br>
Я люблю тебя тебе на зло.<br>
<br>
<span class='blue'>[Припев x2: Баста и Юна]<br></span>
Бог нам дал любовь, с ней словно крылья за спину<br>
И сошла с ума Маргарита вслед за Мастером.<br>
Но людская зависть захотела украсть её.<br>
Но навсегда осталась в сердце Мастера часть ее.<br>
<br>
<span class='blue'>[Куплет 2: Баста]<br></span>
И никто не остановит, некому нас мирить.<br>
И мой путь от меня к тебе непроходимый лабиринт.<br>
Я несу тебе свое больное сердце, слышишь - на, бери!<br>
Я жду звонка. Слышишь? Набери!<br>
Отвернувшись друг от друга так и спим - <br>
Бездонная пропасть между наших спин.<br>
В моих легких дым, в моих венах спирт.<br>
В моих нотах фальшь, в моих темах сплин.<br>
Я напишу о том, как мое сердце кровит.<br>
Я рассмешу тебя банальностью наспех склеенных рифм.<br>
Я пьяный шут, который никогда не шутил.<br>
Ты попросишь уйти меня, но я давно в пути.<br>
Мир без тебя и значит я тут случайно<br>
В немом черно-белом кино мистер Чарли Чаплин.<br>
И мое сердце догорает в огне,<br>
Но я развел этот огонь, чтобы тебя согреть.<br>
<br>
<span class='blue'>[Припев x4: Баста и Юна]<br></span>
Бог нам дал любовь, с ней словно крылья за спину<br>
И сошла с ума Маргарита вслед за Мастером.<br>
Но людская зависть захотела украсть её.<br>
Но навсегда осталась в сердце Мастера часть ее.<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/b1/basta/6793-basta-feat-yuna-master-i-margarita-text-pesni.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Почти исключительно м и д парные рифмы, ж всего одна пара (случайно - Чпплин) плюс одинокий "буревестник", иногда
ифма м=д (стен - глупостей), есть ж=д (буревестник - бедствие).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>