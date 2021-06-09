<?php
$title = 'LOBODA - Лети (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/SsdTRPTtZc8'";
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

<span class='blue'>[Куплет 1] Тк4цжм - AbAb<br></span>
Ночь, белое полусухое.<br>
Меня так бешено кроет тобою опять.<br>
Прочь, нам вместе не будет покоя.<br>
Я знаю, дальше не стоит это всё продолжать.<br>
<br>
<span class='blue'>[Переход] Тк4цм? - aaaa<br></span>
Но я на краю, нервы сдают.<br>
Я так боюсь, что разобьюсь.<br>
Со мною зима, ты птицей на юг,<br>
А я остаюсь. <span class='blue'>(строка Тк2м)</span><br>
<br>
<span class='blue'>[Припев] Дк4ц2мж - AAbCCb<br></span>
Лети-лети вдаль над уровнем неба!<br>
Где бы ты не был,<br>
Назад не смотри!<br>
Лети, лети, не жалея нисколько,<br>
Это в памяти только,<br>
Я прошу - не сбейся с пути!<br>
<br>
<span class='blue'>[Куплет 2] Тк34цжм - AbAb<br></span>
Мне останется сердце на память,<br>
А я уже привыкаю, как жить без тебя.<br>
Нет, я правда тебя отпускаю:<br>
Отчаянно понимаю - так дальше нельзя.<br>
<br>
<span class='blue'>[Переход]<br></span>
Но я на краю, нервы сдают.<br>
Я так боюсь, что разобьюсь.<br>
Со мною зима, ты птицей на юг,<br>
А я остаюсь.<br>
<br>
<span class='blue'>[Припев]<br></span>
Лети-лети вдаль над уровнем неба!<br>
Где бы ты не был,<br>
Назад не смотри!<br>
Лети, лети, не жалея нисколько,<br>
Это в памяти только,<br>
Я прошу - не сбейся с пути!<br>
<br>
<span class='blue'>Я4м - aa<br></span>
Лети-лети, лети-лети.<br>
Лети-лети, лети-лети.<br>
<br>
<span class='blue'>[Куплет 3] Л4цд, Дк6цм - A'A'B'B', aabb<br></span>
Нарисованный круг, линия белая.<br>
Без тебя не могу, как не хотела я.<br>
Остановится звук - руби безжалостно,<br>
И закончим игру - давай, пожалуйста!<br>
<div class='ref'>
Не выходи из круга и не отпускай руки.<br>
Мы затянули туго друг друга вопреки.<br>
И время на исходе, с тобой как по ножу.<br>
Не упади, прошу - я тебя держу!</div>
<br>
<span class='blue'>[Припев]<br></span>
Лети-лети вдаль над уровнем неба!<br>
Где бы ты не был,<br>
Назад не смотри!<br>
Лети, лети, не жалея нисколько,<br>
Это в памяти только,<br>
Я прошу - не сбейся с пути!<br>
<br>
Лети-лети, лети-лети.<br>
Лети-лети, лети-лети.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/loboda-leti.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
