<?php
$title = 'Настя Каменских - Тримай (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/r12MIRKsmYU'";
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

<span class='blue'>[Куплет 1] Тк4ц3жм - AAbAAbxbx<br></span>
Скажи, що тебе турбує?<br>
Я ніжно поцілую <br>
I все за мить мине.<br>
Хто зна, як тебе люблю я.<br>
На все задля тебе піду я -<br>
Ти тільки не відпускай мене.<br>
Моє серденько не відпускай.<br>
Хай до тебе лине<br>
Світло кохання мого.<br>
<br>
<span class='blue'>[Припев] Дк2-4м - abxabaa<br></span>
Ой, тримай <br>
I ніколи не відпускай мене ти.<br>
Ой, тримай, <br>
Я люблю лише тебе.<br>
Забувай <br>
Всіх, кого зустрічав до мене ти -<br>
І тримай, <br>
Мою руку не відпускай.<br>
<br>
<span class='blue'>[Куплет 2] Тк24цж - XAAAAAAA<br></span>
Ніколи <br>
Не відпущу тебе і не віддам нікому.<br>
Чуєш, серце б’ється подібно тому.<br>
Нема зупинки в цьому і немає втоми.<br>
I річ не в тому, <br>
Що так ніколи не хотіла повернутися додому.<br>
До тебе знову, <br>
I цілувати Кохання свого Святу iкону.<br>
<br>
<span class='blue'>[Припев]<br></span>
Ой, тримай <br>
I ніколи не відпускай мене ти.<br>
Ой, тримай, <br>
Я люблю лише тебе.<br>
Забувай <br>
Всіх, кого зустрічав до мене ти -<br>
І тримай, <br>
Мою руку не відпускай.<br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'>[Куплет 3]<br></span>
Зв'яжи нас ніжними словами,<br>
Гарячими губами, <br>
I біль тоді ж мине.<br>
Встає цей промінь поміж нами.<br>
Ти зловиш мій погляд очами.<br>
Ти тільки не відпускай мене,<br>
Моє серденько не відпускай.<br>
Хай до тебе лине<br>
Світло кохання мого.<br>
<br>
<span class='blue'>[Припев]<br></span>
Ой, тримай <br>
I ніколи не відпускай мене ти.<br>
Ой, тримай, <br>
Я люблю лише тебе.<br>
Забувай <br>
Всіх, кого зустрічав до мене ти -<br>
І тримай, <br>
Мою руку не відпускай.<br>
<br>
<span class='blue'>[Проигрыш]<br></span>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kamenskih-nastya/nastya-kamenskih-trimai.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
