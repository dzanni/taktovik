<?php
$title = 'Настя Кудри - Marshmallow (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ciAHys_fEPA'";
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

<span class='blue'>[Интро] Л2д - A'A'<br></span>
Marshmallow, marshmallow,<br>
Marshmallow, marshmallow.<br>
<br>
<span class='blue'>[Куплет 1] Тк32жм - AAAx<br></span>
Я говорю, ты не слышишь.<br>
Вокруг скандалы, как вспышки.<br>
И ты пытался сделать мышкой малышку, <br>
Но не вышло нихуя!<br>
<br>
(Tres, dos, uno!)<br>
<br>
<span class='blue'>[Скит] Л34цм - xaXabb<br></span>
Я запущу навигатор, и пусть <br>
Он мне ищет другую страну.<br>
Вы уж простите меня за капризы,<br>
Но я с ним так жить не смогу.<br>
Принадлежу я сама себе.<br>
Двадцать четыре на семь сидеть <br>
Ждать тебя дома, рыдать –<br>
Это все не моя атмосфера.<br>
<br>
<span class='blue'>[Переход] Л4цд? - A'A'A'x<br></span>
Ты не пугай меня указательным,<br>
Ведь я давно хотела сказать тебе,<br>
Что не купить свободу платьями,<br>
Прочитай по слогам:<br>
<br>
<span class='blue'>[Припев] Л2-4цд - A'A'A'A'<br></span>
Я marshmallow, marshmallow,<br>
А ты марш на хуй!<br>
Я marshmallow, marshmallow,<br>
Сладкая, вредная, сладкая, вредная!<br>
<br>
<span class='blue'>[Куплет 2] Л34цмж, Л34цм, Л34цж, Л34цжм <br></span>
Думал я не пойму? <br>
Ты думал, это не палится?<br>
Вижу, ведёшь двойную игру. <br>
Ну что ж, давай поиграемся!<br>
Буду спешить, буду спешить, <br>
Снова на вкус пробовать жизнь.<br>
Пока интрижки все твои <br>
Скрывал за тонировкой джип.<br>
<div class='refren'>
И вообще - наплевать мне, <br>
Сколько их у тебя было.<br>
На вибро мобила везде заблокировала <span class='blue'>(Строка Л4цг)<br></span>
Остатки нашего мира.<br>
Пока ты меня пробиваешь ночами <br>
У общих друзей и подруг.<br>
Выкину вместе с вещами тебя. <br>
Теперь сыграй в мою «КонтрУ»!</div>
<br>
<span class='blue'>[Переход]<br></span>
Ты не пугай меня указательным,<br>
Ведь я давно хотела сказать тебе,<br>
Что не купить свободу платьями,<br>
Прочитай по слогам:<br>
<br>
<span class='blue'>[Припев]<br></span>
Я marshmallow, marshmallow,<br>
А ты марш на хуй!<br>
Я marshmallow, marshmallow,<br>
Сладкая, вредная, сладкая, вредная!<br>
<br>
<span class='blue'>[Куплет 3]<br></span>
Я буду с тобой откровенной:<br>
Не стану твоей птицей в клетке.<br>
Я убегу подальше от тебя,<br>
Путешествуя!<br>
<br>
<span class='blue'>[Переход]<br></span>
Ты не пугай меня указательным,<br>
Ведь я давно хотела сказать тебе,<br>
Что не купить свободу платьями,<br>
Прочитай по слогам:<br>
<br>
<span class='blue'>[Припев]<br></span>
Я marshmallow, marshmallow,<br>
А ты марш на хуй!<br>
Я marshmallow, marshmallow,<br>
Сладкая, вредная, сладкая, вредная!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kudri-nastya/nastya-kudri-marshmallow.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Текст склонен скорее к логаэдам, чем к тонике. Л3 = Л4
(строки трехстопных и четырехстопных логаэдов могут заменять друг друга).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
