<?php
$title = 'Семен Слепаков и Ленинград - Чемпионы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/EacWd6gkaxU'";
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

<span class='blue'>[Интро] Х24ж - AAA<br></span>
Чемпионы!<br>
Че-че-че-че чемпионы!<br>
Че-че-че-че чемпионы!<br>
<br>
<span class='blue'>[Куплет 1] Х4жм - AbAb<br></span>
В эйфории веселится <br>
Вся великая страна.<br>
Мы за наших футболистов <br>
Дружно водку пьём до дна.<br>
<div class='refren'>
Вы теперь для нас герои — <br>
Вам поклоны бьёт народ.<br>
Если кто-то рот раскроет, <br>
Разорвём мы этот рот!</div>
<br>
<span class='blue'>[Припев] Л54цж - AABB<br></span>
Кто там что пиздел на диване?<br>
Кто там песню пел о Рамзане?<br>
Наши пацаны рвут шаблоны:<br>
Были гандоны — стали чемпионы!<br>
<br>
<span class='blue'>[Хук]<br></span>
Чемпионы! <br>
Че-че-че-че чемпионы! <br>
Ч-че-че-че чемпионы!<br>
Че-че-че (ох!)<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Мы — футбольная держава, <br>
Нас так просто не возьмёшь!<br>
Не найти на нас управы, <br>
Против Дзюбы не попрёшь!<br>
<div class='refren'>
Нас соперники боятся — <br>
Намочили все трусы,<br>
Потому что ночью снятся <br>
Им Черчесова усы!</div>
<br>
<span class='blue'>[Припев 2]<br></span>
Что творится на футбольном поле!<br>
«Чер»,— кричит страна, оле-оле!<br>
Вылезли глаза у Марадоны!<br>
Были же гандоны — стали чемпионы (хоп)!<br>
<br>
<span class='blue'>[Хук]<br></span>
Чемпионы!<br>
Че-че-че-че чемпионы!<br>
Че-че-че-че чемпионы!<br>
Че-че-че (ох)!<br>
<br>
<span class='blue'>[Куплет 3] Х4мж - aBaB<br></span>
Ну вы тоже, блин, жуки:<br>
Сколько нас водили за нос!<br>
Мол, с картошкой мы мешки, <br>
Место нам — футбольный анус!<br>
<div class='refren'>
Ну, а сами вдруг хуяк, <br>
Мы внатуре охренели!<br>
Вы теперь для нас маяк, <br>
Сука, свет в конце тоннеля!</div>
<br>
<span class='blue'>[Бридж] Х43ж - ABAB<br></span>
Наплевать, что поменяли<br>
Возраст пенсионный:<br>
Настроенье нам подняли<br>
Наши чемпионы!<br>
<br>
<span class='blue'>[Куплет 4]<br></span>
Извините нас, ребята, <br>
Мы реально мудаки!<br>
В вас не верили мы свято, <br>
Не держали кулаки!<br>
<div class='refren'>
Всей страной мы вам кричали:<br>
«Вы ненужный атрибут!»<br>
Сколько раз мы повторяли: <br>
«По-любому проебут!»</div>
Будет всё теперь иначе, <br>
Будет всё наоборот!<br>
Пусть народа вы богаче,<br>
Будет вас любить народ!<br>
<div class='refren'><span class='blue'>Х4ж - ABAB<br></span>
Будем бутсы целовать вам, <br>
Только знайте, чемпионы:<br>
Стоит разик проиграть вам —<br>
Сразу станете гандоны (оу)</div>
<br>
<span class='blue'>[Аутро]<br></span>
(Ох) Чемпионы!<br>
Че-че-че-че чемпионы!<br>
Че-че-че-че чемпионы (ох, е)!<br>
Че-че-че чемпионы!<br>
Че-че-че-че чемпионы (оу, е)!<br>
Чемпионы!<br>
Чемпионы!<br>
<br>
Гол!<br>
<br>
<span class='blue'><a href='https://genius.com/Leningrad-champions-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. <span class='i'>Кто там песню пел о Рамзане</span> - отсылка к песне Семена Слепакова
<a href='ole.php'>Олé-Олé-Олé!</a>
(вывешена на Youtube 11.06.2018).
<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
