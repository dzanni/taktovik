<?php
$title = 'Мальбэк ft. Сюзанна - Стильный бит (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/L8jm4A4tRP0'";
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

<span class='blue'>[Припев: Мальбэк & Сюзанна] Тк4цм - aa</span><br>
Этот стильный бит, он играет тут и там.<br>
Тут и там, тут и там, тут и там, там-там-там.<br>
Так много людей - их различают по цветам.<br>
По цветам, по цветам, по цветам, тут и там.<br>
Ты шагаешь снова по чужим новым следам.<br>
Сонное теченье там присуще городам.<br>
Радуемся телом этим звукам по вискам.<br>
Новизна нам-нам-нам-нам-нам.<br>
Синие сирены часто водят к небесам.<br>
Мне так интересно – говорю твоим глазам.<br>
В этом мире тесно – ты об этом знаешь сам.<br>
Но чудесам, чудесам, место есть чудесам.<br>
<br>
<span class='blue'>[Куплет 1: Мальбэк] Л2д? - A'A'</span><br>
Не будем монотонными, <br>
Поймаем эти волны мы,<br>
Ведь слишком наполнены и влюблены. <span class='blue'>(Строка Л4цм)</span><br>
Мы спрячемся под кронами:<br>
Это лишь условный мир.<br>
Их слова бутонами <br>
Стали монохронными.<br>
<br>
<span class='blue'>[Припев: Мальбэк & Сюзанна]</span><br>
Этот стильный бит, он играет тут и там.<br>
Тут и там, тут и там, тут и там, там-там-там.<br>
Так много людей - их различают по цветам.<br>
По цветам, по цветам, по цветам, тут и там.<br>
Ты шагаешь снова по чужим новым следам.<br>
Сонное теченье там присуще городам.<br>
Радуемся телом этим звукам по вискам.<br>
Новизна нам-нам-нам-нам-нам.<br>
Синие сирены часто водят к небесам.<br>
Мне так интересно – говорю твоим глазам.<br>
В этом мире тесно – ты об этом знаешь сам.<br>
Но чудесам, чудесам, место есть чудесам.<br>
<br>
<span class='blue'>[Куплет 2: Мальбэк] Л2мд - aB'aB'</span><br>
Не преодолеть <br>
Мое к тебе влечение!<br>
Мы будем лететь, <br>
Нам не важно течение.<br>
Так будет и впредь: <br>
Мы с тобой сплетение.<br>
Будем проверять <br>
Это исключение.<br>
<br>
<span class='blue'>[Переход: Мальбэк & Сюзанна] Х4м - aa</span><br>
Открываю веки штор,<br>
Наблюдаю новый шторм.<br>
Открываю веки штор,<br>
Наблюдаю новый шторм.<br>
(Москва! Москва! Москва! Москва!)<br>
Открываю веки штор,<br>
Наблюдаю новый шторм.<br>
(Москва! Москва! Москва! Москва!)<br>
Новый шторм.<br>
(Москва! Москва! Москва! Москва!)<br>
Новый шторм.<br>
(Москва! Москва! Москва! Москва!)<br>
Новый шторм.<br>
(Москва! Москва! Москва! Москва!)<br>
<br>
<span class='blue'>[Аутро] Я4м - aa</span><br>
Москва! Москва! Москва! Москва!<br>
Москва! Москва! Москва! Москва!<br>
Москва! Москва! Москва! Москва!<br>
Москва! Москва! Москва! Москва!<br>
Москва! Москва! Москва! Москва!<br>
Мос!<br>
<br>
<span class='blue'><a href='https://genius.com/Malbec-stylish-beat-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>