<?php
$title = 'LOBODA - SuperSTAR (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/gs1JrhjUpnc'";
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

<span class='i'>- В мире проживает три миллиарда женщин. Красивые и очень красивые.
Хищная обольстительницы и невинные создания. И знаете, что между ними общего?
Все они одиноки. Не стоит углубляться в статистику: одиночество - не смерть,
его сложно зафиксировать. Да, кстати! Меня зовут... впрочем, вы знаете.
Моя задача - дать этим женщинам шанс. Мой метод - открыть им глаза.
Моя цель - сделать их счастливыми.  <br></span>
<br>
<span class='blue'>[Куплет 1] Л5ц2//3м - aaxbbb<br></span>
Для тебя не осталось слов и мыслей хороших, нет!<br>
А я но.. а я но.. а я ночь превращаю в рассвет, <br>
Но снова одна!<br>
Я запуталась в глянце. Мы почти иностранцы в нём.<br>
Ты хотел уходить и смотреть, как я буду потом<br>
Бежать за тобой босиком!<br>
<br>
<span class='blue'>[Припев] Л24цжм? - XaXa<br></span>
Сегодня, сегодня, <br>
Сегодня ты, а завтра я!<br>
Запомни, мой сладкий:<br>
Все люди, как люди, а я - Суперзвезда!<br>
Звезда! <br>
Суперзвезда! <br>
Звезда!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Мы другие планеты. Видно, выбора больше нет.<br>
А я da... а я da... а я dance станцевала тебе <br>
Красивый такой!<br>
<div class='refren'>
<span class='blue'>4 строки Дк34цжм - AAbb<br></span>
А слова твои резали нежно, <br>
Сопротивляться почти бесполезно!<br>
Всё на паузу, всё на потом!<br>
 На потом, на потом, на пото-потом!</div>
А я о.., а я очень хотела забыть обо всём,<br>
Бежать за тобой босиком!<br>
<br>
<span class='blue'>[Припев]<br></span>
Сегодня, сегодня, <br>
Сегодня ты, а завтра я!<br>
Запомни, мой сладкий:<br>
Все люди, как люди, а я - Суперзвезда!<br>
Звезда! <br>
Суперзвезда! <br>
Звезда!<br>
<br>
<span class='blue'>[Переход] Тк2-4ц<br></span>
Как всегда неразлучен ты <br>
С телефонными сучками.<br>
Мне с тобой очень скучно - <br>
Не такая, как все я!<br>
Stop yelling like a bitch!<br>
 Я могу всего сама достичь!<br>
Люди, как люди. Низкие старты.<br>
Три к одному, что ты плачешь друзьям, то, что я виновата! <span class='blue'>(Строка Тк6цж)<br></span>
Всё, окей!<br>
Зову подруг, прихожу с утра,<br>
Да, мне можно всё, я же суперзвезда!<br>
<br>
<span class='blue'>[Аутро]<br></span>
(Я - суперзвезда!)<br>
Звезда!<br>
Суперзвезда!<br>
Звезда!<br>
Я - суперзвезда!<br>
(Я - суперзвезда!)<br>
Звезда!<br>
Суперзвезда!<br>
Звезда!<br>
Суперзвезда!<br>
<br>
<span class='blue'><a href='https://genius.com/Loboda-superstar-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма ж=д: "сУчками" - "скУчно".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
