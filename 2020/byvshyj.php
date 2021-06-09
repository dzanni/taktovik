<?php
$title = 'SQWOZ BAB & Хлеб - Бывший (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/uqfmCp5sys4'";
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

<span class='i'><span class='blue'>[Интро: Денис Кукояка]</span><br>
— Алё, привет! Извини, пожалуйста, что поздно звоню…<br>
Просто не мог терпеть до утра…<br>
Ты, наверное, сама всё понимаешь…<br>
Нам надо расстаться…<br></span>
<br>
<span class='blue'>[Куплет 1: SQWOZ BAB] Л224цмм/м - abbabb</span><br>
Суши сет, <br>
Каберне-Совиньон (Совиньон)<br>
Зай, тебе надо привыкнуть, что вы больше не вдвоём!<br>
Туши свет <br>
и примерь то бельё (То бельё)<br>
Сними сторис, где понятно, что тебе на него пох (Ах-ох) (у-у)<br>
  <div class='refren'>
  <span class='blue'>Х34жм - AbAb</span><br>
  Бэйби, да ты — бомба, <br>
  это пламенный видок (У-у)<br>
  Будто баба Бонда — <br>
  он кусает локоток (У-у)</div>
<span class='blue'>Тк3223м/? - aaax</span><br>
План работает, в директе "огонёк",<br>
А следом звонок,<br>
но, но, но, но…<br>
Бывший слушает гудки…<br>
<br>
<span class='blue'>[Припев: SQWOZ BAB] Л3м/? - aaaa</span><br>
Ту-тУ-ту, ту-тУ ту-тУ<br>
Ту-тУ-ту, ту-тУ ту-тУ<br>
Ту-тУ-ту, ту-тУ ту-тУ<br>
Ту-тУ-ту, ту-тУ ту-тУ<br>
<br>
<span class='blue'>[Куплет 2: Саша Шулико] Я3ж/ - AA...</span><br>
Ты девочку обидел, <br>
об душу ноги вытер!<br>
Мобильный в режим "Вибро" — <br>
он поступил как пидор!</div>
  <div class='refren'>В душе холодный Питер, <br>
  конец был очевиден!<br>
  Поплачем под Меладзе, <br>
  подай AUX, водитель (О)</div>
<span class='blue'>Я3жж - ABAB</span><br>
На каблуках царевна <br>
с бокалом апероля.<br>
Тебе так обалденно, <br>
как будто бывший помер (Щищ)<br>
  <div class='refren'>А ты сжигаешь мостик, <br>
  что он так долго строил (ага)<br>
  И нет больше той злости (pow), <br>
  и нет больше той боли (pow-pow-pow)</div>
<br>
<span class='blue'>[Куплет 3: Денис Кукояка] Тк23жж - AAB CCB DDB</span><br>
Выкинь его кроссы, <br>
выкинь его полис, <br>
выложи пенис в Stories (Ай)<br>
Забери лайки, <br>
выкинь его Nike, <br>
ведь он слёз не стоит (У)<br>
Поступи грубо <br>
и с его другом <br>
сними лучший столик (Ага)<br>
Ты никогда не позвонишь ему, но он позвОнит! <span class='blue'>(Строка Тк5цж)</span><br>
<br>
<span class='blue'>[Бридж: Кирилл Трифонов & SQWOZ BAB] Л453мжм? - (a) aB(a) aBa</span><br>
(Бывший слушает гудки)<br>
Не бери, не бери, не бери, не бери!<br>
Не бери, не бери, не бери, не бери трубку!<br>
(Бывший слушает гудки)<br>
Не бери, не бери, не бери, не бери!<br>
Не бери, не бери, не бери, не бери трубку!<br>
Бывший слушает гудки…<br>
<br>
<span class='blue'>[Припев: SQWOZ BAB]</span><br>
Ту-тУ-ту, ту-тУ ту-тУ<br>
Ту-тУ-ту, ту-тУ ту-тУ<br>
Ту-тУ-ту, ту-тУ ту-тУ<br>
Ту-тУ-ту, ту-тУ ту-тУ<br>
<br>
<span class='blue'>[Аутро: SQWOZ BAB]</span><br>
Ту-тУ ту-тУ!<br>
Сквозь Хлеб, детка!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/bi2-depressiya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
