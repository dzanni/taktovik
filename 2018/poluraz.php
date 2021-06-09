<?php
$title = 'Макс Барских - Полураздета (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/kWjj3vkFrNk'";
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

<span class='blue'>[Куплет 1] Тк2м? - abab<br></span>
Не смотри вокруг,<br>
Там нет таких, как я.<br>
Меня можно притянуть,<br>
Но так просто потерять.<br>
<div class='refren'>
Не упускай момент,<br>
Удиви меня сейчас!<br>
Твоё тело – инструмент,<br>
Покажи, покажи, что ты можешь телом! <span class='blue'>(Строка Тк4цж)</span></div>
<br>
<span class='blue'>[Переход] Дк23мж - aBaBxXx<br></span>
Танцуй со мной!<br>
Нам далеко до рассвета.<br>
Я сам не свой,<br>
Когда ты полураздета.<br>
Хочу тебя,<br>
И пусть мы незнакомы,<br>
Я долго ждал эту ночь!<br>
<br>
<span class='blue'>[Припев] Дк4ц3мж? - aabCCbbbb<br></span>
Четыре утра, а сердце не спит,<br>
Оно так громко о тебе стучит.<br>
Эти люди вокруг уползают домой,<br>
А ты лови мои взгляды<br>
Танцуй, пока ты рядом <br>
Со мно-о-о-о-о-о-ой! <span class='blue'>(Строка Тк3м)</span><br>
А ты танцуй со мно-о-о-о-о-о-ой! <span class='blue'>(Строки Тк5цм)</span><br>
Танцуй, танцуй со мно-о-о-о-о-о-ой!<br>
А ты танцуй со мно-о-о-о-о-о-ой!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Ветер перемен<br>
Ходит мимо нас.<br>
Я задержу момент,<br>
Забудь, который час!<br>
Помолчи со мной,<br>
Как будто по душам!<br>
Здесь не нужно слов,<br>
Покажи, покажи, что ты можешь телом!<br>
<br>
<span class='blue'>[Переход]<br></span>
Танцуй со мной!<br>
Нам далеко до рассвета.<br>
Я сам не свой,<br>
Когда ты полураздета.<br>
Хочу тебя,<br>
И пусть мы незнакомы,<br>
Я долго ждал эту ночь!<br>
<br>
<span class='blue'>[Припев]<br></span>
Четыре утра, а сердце не спит,<br>
Оно так громко о тебе стучит.<br>
Эти люди вокруг уползают домой,<br>
А ты лови мои взгляды<br>
Танцуй, пока ты рядом <br>
Со мно-о-о-о-о-о-ой!<br>
А ты танцуй со мно-о-о-о-о-о-ой!<br>
Танцуй, танцуй со мно-о-о-о-о-о-ой!<br>
А ты танцуй со мно-о-о-о-о-о-ой!<br>
<br>
<span class='blue'>[Аутро] Тк3м? - xaaxx<br></span>
Свет мой!<br>
Я каждое движение ловлю,<br>
И с каждым я всё глубже тону,<br>
Тону в твоих красивых глазах,<br>
Глазах…<br>
<br>
<span class='blue'>[Припев]<br></span>
Четыре утра, а сердце не спит,<br>
Оно так громко о тебе стучит.<br>
Эти люди вокруг уползают домой,<br>
А ты лови мои взгляды<br>
Танцуй, пока ты рядом <br>
Со мно-о-о-о-о-о-ой!<br>
А ты танцуй со мно-о-о-о-о-о-ой!<br>
Танцуй, танцуй со мно-о-о-о-о-о-ой!<br>
А ты танцуй со мно-о-о-о-о-о-ой!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/m1/maxbarskih/11369-maks-barskih-polurazdeta-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Аналогичный ритм и мелодия куплетов - у песни <a href='../2017/plachvtem.php'>"Плачешь в темноте"</a>
группы "Руки Вверх!" (вывешена на Youtube 7.11.2017).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
