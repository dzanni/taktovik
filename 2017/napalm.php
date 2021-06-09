<?php
$title = 'Макс Корж - Напалм (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/FS8BWA-vgdI'";
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

<span class='i'>- Мусора приехали, братан!<br></span>
<br>
<span class='blue'>[Интро]</span><br>
Это песня о разлуке,<br>
О недолгой разлуке.<br>
<br>
<span class='blue'>[Куплет 1] Тк4цм - aaaa</span><br>
Е! Е! <br>
В темноте пули меня не берут,<br>
Пока я помню тот аромат твоих губ.<br>
Закрученные розы тянут прям в высоту,<br>
Но дальше небеса мне повторяют: «Забудь».<br>
<div class='refren'>
Всех с ума так сводит твоя красота,<br>
Что по обе границы стоят войска.<br>
Все в этих делах, птицы, высылки, штамп.<br>
Но я-то все равно нашел дорогу назад.</div>
<br>
<span class='blue'>[Припев] Тк4цм - aaabaaab</span><br>
Весь белый песок к твоим ногам,<br>
Все чудеса к твоим ногам.<br>
Чо-то горизонт заливает напалм.<br>
Ступаю на трап, и что теперь?<br>
[Пауза] по твоим ногам.<br>
Дрожь потекла по твоим ногам.<br>
Мужики, давно я этого ждал!<br>
Никому не отдам впредь. <span class='blue'>(Строка Тк3м)</span><br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Скоко мужиков, желало, хотело тебя.<br>
Но к сердцу твоему не подобрав ключ,<br>
Все как один пускали вранья.<br>
Какая ты шлюха, плетя жёнами слух.<br>
<div class='refren'>
Сколько осыпали тебя баблом,<br>
Пытались овладеть путём любым.<br>
Но только одного не понимали глупцы,<br>
Лишь я один знаю, как тебя любить!</div>
<br>
<span class='blue'>[Припев]</span><br>
Весь белый песок к твоим ногам,<br>
Все чудеса к твоим ногам.<br>
Чо-то горизонт заливает напалм.<br>
Ступаю на трап, и что теперь?<br>
[Пауза] по твоим ногам.<br>
Дрожь потекла по твоим ногам.<br>
Мужики, давно я этого ждал!<br>
Никому не отдам впредь.<br>
<br>
Ха!<br>
<br>
<span class='blue'>[Куплет 3]</span><br>
В темноте пули меня не берут,<br>
Пока я помню тот аромат твоих губ.<br>
Закрученные розы тянут прям в высоту,<br>
Но дальше небеса мне повторяют: «Забудь».<br>
<div class='refren'>
Всех с ума так сводит твоя красота,<br>
Все любить готовы, но ни один - до конца!<br>
Я ушел лишь только, чтоб сильнее начать.<br>
Открыты двери, беги, встречай!</div>
<br>
<span class='blue'>[Припев]</span><br>
Весь белый песок к твоим ногам,<br>
Все чудеса к твоим ногам.<br>
Чо-то горизонт заливает напалм.<br>
Ступаю на трап, и что теперь?<br>
[Пауза] по твоим ногам.<br>
Дрожь потекла по твоим ногам.<br>
Мужики, давно я этого ждал!<br>
Никому не отдам впредь.<br>
<br>
Пу-пу-пу! Ха!<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/m1/max-korj/8922-maks-korzh-napalm-text-pesni.html"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
