<?php
$title = 'MiyaGi & Эндшпиль - Половина моя (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/qktL8MITK48'";
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
Hajime!<br>
<br>
<span class='blue'>[Куплет 1, MiyaGi] Дк4цм - aabb<br></span>
Настигли меня феромоны души,<br>
Я нашёл ту, которая заставила жить.<br>
Прости за минуты не с тобой -<br>
Да-да, я тот ещё, паря чудной<br>
<div class='refren'>
Моя тяга в битах, и меня не унять,<br>
Но пока я на ногах - буду удивлять. <span class='blue'>(Строка Тк4цм)<br></span>
Звёзды с небес и до талого вместе<br>
Ай-да по облакам гулять!</div>

<span class='blue'>Дк2м - abababab<br></span>
Я ведом тобой, <br>
Baby number 1.<br>
Шумный прибой <br>
И бокалы вина.<br>
Время с лихвой <br>
Выпивали до дна.<br>
Я не малой, <br>
Но будто бы да.<br>
<div class='refren'>
Это любовь, обжигал поцелуй,<br>
Это любовь - моё снадобье!<br>
Я сна не вижу, если тебя вдруг рядом нет - <span class='blue'>(Строка Тк4цм)<br></span>
Моё снадобье, моё снадобье, моё снадобье... <span class='blue'>(Строка Дк6цм)</span></div>
<br>
<span class='blue'>[Hook, MiyaGi] Тк4цдм - A'bA'b<br></span>
Половина моя, я дарю тебе всего себя,<br>
И этой ночью мы с тобой сгорали дотла.<br>
Обжигала любовь... Словно канатами связаны,<br>
Навеки рядом мы с тобой топили сердца.<br>
<br>
<span class='blue'>[Куплет 2, Эндшпиль] Тк24цм - xabab<br></span>
Я в этом звуке весь,<br>
Я врубаю бит на PLAY, головой в такт,<br>
Ма, это моя жизнь, <br>
Music - my life, стелится мир, брат,<br>
Надо мутить от души!<br>

<div class='refren'>
<span class='blue'>Тк4ц3мж - xaBaB<br></span>
Я знаю, крепит мелодия, джа!<br>
Не раз повернём этот грёбанный миг!<br>
Где-то услышит мой голос <br>
О чём я залип, о чём ты молчишь,<br>
Жизненный хит перетолчен.</div>

<span class='blue'>Тк2-4цм/ж - aa, AA<br></span>
Выработал район, мой ветер гонит на юг.<br>
Здесь я учился любить, учился терять,<br>
Учился учиться, смог с колен встать.<br>
<div class='refren'>
Крутит пластинку до боли знакомую вихрем.<br>
Топот и drum-machine ритм.<br>
Она знает, как сделать счастливым.<br>
На кой я ей милым?</div>

Это порох на кармане, город в тумане,<br>
Пацаны в хламе, гордости money.<br>
Не мани манна, моли мама -<br>
Она мала и магнитом тянет<br>
<div class='refren'>
Сюда ближе к сердцу, его не обманешь,<br>
Поцелуем травишь.<br>
Нет, нет, не знаешь.<br>
Я тут, и ты поладишь.<br>
Обещаю, малыш - <br>
Это мой Париж!</div>

Тут нечего больше делить!<br>
Тут нечего больше сказать!<br>
Давай выше к небу летать!<br>
Давай больше не обижать!<br>
<div class='refren'>
Эти сердца...<br>
Эти сердца...<br>
Эти сердца...<br>
Эти сердца...<br>
Эти сердца...<br>
Эти сердца...<br>
Эти сердца...<br>
Эти сердца...</div>
<br>
<span class='blue'>[Hook, MiyaGi]<br></span>
Половина моя, я дарю тебе всего себя,<br>
И этой ночью мы с тобой сгорали дотла.<br>
Обжигала любовь... Словно канатами связаны,<br>
Навеки рядом мы с тобой топили сердца.<br>
<br>
<span class='blue'>[Аутро x2] Тк6м - aa<br></span>
Это любовь, любовь, любовь, любовь, любовь, моя любовь!<br>
Это любовь, любовь, любовь, любовь, любовь, моя любовь!<br>
Это любовь, любовь, любовь, любовь, любовь, моя любовь!<br>
Это любовь, любовь, любовь, любовь, любовь, моя любовь!<br>
<br>
<span class='blue'><a href="https://genius.com/Miyagi-and-polovina-moya-lyrics"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
