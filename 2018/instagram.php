<?php
$title = 'Диана Арбенина и Ночные снайперы - Инстаграм (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/9HgiegS3S78'";
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

<span class='blue'>[Куплет 1] Х34мж? - aabCaabC<br></span>
Вызывай такси! <br>
У меня нет сил,<br>
У меня нет слов,<br>
Провожать не вздумай только.<br>
Я глотаю дым, <br>
Улицы пусты,<br>
Мне знакома боль, <br>
Но не настолько. <span class='blue'>(Строка Я2ж)<br></span>
<br>
<span class='blue'>[Припев] Тк4ц3жм - AAAbCCCb<br></span>
И каждый день мы встречаемся в Инстаграме.<br>
Видео круче боёв без правил.<br>
Финал я знала заранее.<br>
Доброе утро, страна!<br>
И пиши, что хочешь, только не блокируй!<br>
Сердце не делится наполовину.<br>
Банально, но очень красиво!<br>
Доброе утро, страна!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Если мы кино – <br>
Это лучший фильм.<br>
Эта драма Queen<br>
Без надежд на happy end´ы.<br>
За минуту жизнь, <br>
Сможешь, так держись,<br>
И по кругу-кругу<br>
Бесконечные фрагменты.<br>
<br>
<span class='blue'>[Припев]<br></span>
И каждый день мы встречаемся в Инстаграме.<br>
Видео круче боёв без правил.<br>
Финал я знала заранее.<br>
Доброе утро, страна!<br>
И пиши, что хочешь, только не блокируй!<br>
Сердце не делится наполовину.<br>
Банально, но очень красиво!<br>
Доброе утро, страна!<br>
<br>
[Song Instrumental Bridge]<br>
<br>
<span class='blue'>[Припев]<br></span>
И каждый день мы встречаемся в Инстаграме.<br>
Видео круче боёв без правил.<br>
Финал я знала заранее.<br>
Доброе утро, страна!<br>
И пиши, что хочешь, только не блокируй!<br>
Сердце не делится наполовину.<br>
Банально, но очень красиво!<br>
Доброе утро, страна!<br>
<br>
И каждый день мы встречаемся в Инстаграме.<br>
Видео круче боёв без правил.<br>
Финал я знала заранее.<br>
Доброе утро, страна!<br>
И пиши, что хочешь, только не блокируй!<br>
Сердце не делится наполовину.<br>
Банально, но очень красиво!<br>
Доброе утро, доброе утро, доброе утро, страна!<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/nochnie-snaiperi-instagram.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Зачин напоминает начало припева песни Игоря Николаева "Такси, такси" (1990-е гг.?),
которую он исполнял в дуэте с Наташей Королевой:<br>
<br>
  <span class='i'>Такси, такси, <br>
   Вези, вези <br>
  Вдоль ночных домов,<br>
  Мимо чьих-то снов. <br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
