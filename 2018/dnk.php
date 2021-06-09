<?php
$title = 'Джиган ft. Артем Качер - ДНК (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/yHj8-3znigc'";
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

<span class='blue'>[Куплет 1: Джиган] Дк4ц2мж, Дк4цм/ж - xAxA, aa, AA<br></span>
Они хотят со мной быть, но я только твой,<br>
Любовь без остатка.<br>
Мы сходим с ума у всех на глазах,<br>
И нам всё не важно.<br>
<div class='ref'>
Опять карусель, по телу вновь дрожь.<br>
Ещё один день, ещё одна ночь.<br>
Ещё один город, и снова в тебе.<br>
Всё будто во сне, ты снова на мне, е!<br>
И мы набираем с ней скорость. <span class='blue'>(Строка Дк3ж)</span><br>
Пустой хайвей, ночь вокруг, невесомость.<br>
Я её крепость, но это не новость.<br>
Она за мной, даже если я в пропасть.<br>
Вместе мы в сто раз сильней, чем порознь.<br>
Греет, когда я вдали, её голос.</div>
Вместе мы высоко, под нами облака. <span class='blue'>(Строка Тк4цм)</span><br>
Она в моей ДНК. <span class='blue'>(Строка Тк2м)</span><br>
<br>
<span class='blue'>[Припев: Артем Качер] Тк4цжм - AbAb, AbAAbAA<br></span>
Ты по моим венам так откровенно<br>
С дымом проникаешь в мой организм.<br>
И я тебя вдыхаю постепенно.<br>
Я на тебя подсел, на тебе завис.<br>
<div class='ref'>
Ты голову дурманишь необыкновенно.<br>
И всё вокруг в тумане, я закрою глаза.<br>
Мы с тобой взлетаем выше неба.<br>
Нам так охуе-охуе-охуенно!<br>
Охуенно. Охуенно, да. <span class='blue'>(Строка Тк3м)</span><br>
Нам так охуе-охуе-охуенно.<br>
Охуенно. Охуенно… <span class='blue'>(Строка Тк2ж)</span></div>
<br>
<span class='blue'>[Куплет 2: Джиган]<br></span>
Глубже дыши, крепче держись.<br>
Мы те две души, что вечно бежим.<br>
Мы вечно горим и жжём эту жизнь.<br>
В легкие - дым, летим до вершин.<br>
<div class='ref'>
Мы так высоко-высоко над землёй. <br>
И нас не достанут уже никогда. <br>
Нам так легко, легко быть вдвоём. <br>
Ты в моих венах, в моей ДНК. </div>
<br>
<span class='blue'>[Припев: Артем Качер]<br></span>
Ты по моим венам так откровенно<br>
С дымом проникаешь в мой организм.<br>
И я тебя вдыхаю постепенно.<br>
Я на тебя подсел, на тебе завис.<br>
<div class='ref'>
Ты голову дурманишь необыкновенно.<br>
И всё вокруг в тумане, я закрою глаза.<br>
Мы с тобой взлетаем выше неба.<br>
Нам так охуе-охуе-охуенно!<br>
Охуенно. Охуенно, да.<br>
Нам так охуе-охуе-охуенно.<br>
Охуенно. Охуенно… </div>
<br>
<span class='blue'>[Переход] Тк4цм - abab<br></span>
Танцуем нон-стоп, рисуем всю ночь.<br>
Между мной и тобой так далеко.<br>
Сплю и вижу сон, где получаю всё,<br>
И это так легко. <span class='blue'>(Строка Тк2ж)</span><br>
<br>
<span class='blue'>[Припев: Артем Качер]<br></span>
Ты по моим венам так откровенно<br>
С дымом проникаешь в мой организм.<br>
И я тебя вдыхаю постепенно.<br>
Я на тебя подсел, на тебе завис.<br>
<div class='ref'>
Ты голову дурманишь необыкновенно.<br>
И всё вокруг в тумане, я закрою глаза.<br>
Мы с тобой взлетаем выше неба.<br>
Нам так охуе-охуе-охуенно!<br>
Охуенно. Охуенно, да.<br>
Нам так охуе-охуе-охуенно.<br>
Охуенно. Охуенно…</div>
<br>
<span class='blue'><a href='https://text-lyrics.ru/a1/artem-kacher/10117-dzhigan-dnk-feat-artyom-kacher-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Внутри четырехстиший стихи стремятся к логаэдам.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
