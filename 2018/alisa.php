<?php
$title = 'Filatov & Karas - Алиса (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/_bqxoz4upYA'";
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

<span class='blue'>[Куплет 1] Дв3-5м - aa<br></span>
Никому не говори,<br>
Никому не говори,<br>
Никому не говори, <br>
Никому не говори,<br>
Никому не говори, <br>
Что мы были до зари,<br>
Что мы были до зари.<br>
Оправдания мои, <br>
Когда хочется любви.<br>
Отпусти, забудь и не грусти. <br>
Вновь меня к себе пусти.<br>
Завтра, а теперь - прости.<br>
Пора бы мне, уже пора. <br>
Закончилась жара.<br>
<br>
<span class='blue'>[Переход] Х4м - aaaaХ<br></span>
И опять сбегаю я<br>
В проблесках нового дня<br>
В серый город, где вокруг<br>
 Много грязи, крыс и сук,<br>
А пурпурные мечты развеяны пеплом. <span class='blue'>(Строка Тк4цж)<br></span>
<br>
<span class='blue'>[Припев] Дв2-5жм - ABxcABxc<br></span>
Не плачь, Алиса, <br>
Ты стала взрослой!<br>
Праздник наступил, <br>
И тебе уже 16 лет.<br>
Прощай, Алиса, <br>
Погасли звезды.<br>
И глядит в окно <br>
Взрослой жизни первый твой рассвет.<br>
<br>
<span class='blue'>[Куплет 2] Дв2-4мж - aBaBBxBxBCdCd<br></span>
Первый твой рассвет, <br>
Первый, первый,<br>
Первый твой рассвет, <br>
Красное на белом, <br>
Отпечатки тела.<br>
Новая глава, <br>
И никому нет дела.<br>
Новый, новый том <br>
Начался с пробела.<br>
Музыку погромче <br>
Давит гипно-бит.<br>
Время далеко за полночь, <br>
И никто не спит.<br>
<br>
<span class='blue'>[Переход]<br></span>
И опять сбегаю я<br>
В проблесках нового дня<br>
В серый город, где вокруг<br>
Много грязи, крыс и сук,<br>
А пурпурные мечты развеяны пеплом.<br>
<br>
<span class='blue'>[Припев]<br></span>
Не плачь, Алиса, <br>
Ты стала взрослой!<br>
Праздник наступил, <br>
И тебе уже 16 лет.<br>
Прощай, Алиса, <br>
Погасли звезды.<br>
И глядит в окно <br>
Взрослой жизни первый твой рассвет.<br>
<br>
<span class='blue'>[Аутро]<br></span>
А-Алиса!<br>
Алиса!<br>
А-Алиса!<br>
Прощай, Алиса, <br>
Погасли звезды.<br>
И глядит в окно <br>
Взрослой жизни первый твой рассвет.<br>
<br>
Слова: Д.C. Филатов, А.В. Осокин, С.А. Костров<br>
Музыка: Д.C. Филатов, А.В. Осокин, А.В. Державин<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/f/filatov/11152-filatov-karas-alisa-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Использован припев песни Андрея Державина "Не плачь, Алиса" (1991).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
