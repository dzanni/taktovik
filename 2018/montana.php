<?php
$title = 'Скруджи - Монтана (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/QjjO3oIRfeI'";
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

<span class='blue'>[Переход, x2] Тк4цм - aaaa<br></span>
Я на своем, черно-белое кино,<br>
Вокруг меня все рушилось, как домино.<br>
Ну да, собрал все силы, чтоб забрать свое-о-о,<br>
Забрать свое-о-о, забрать свое.<br>
<br>
<span class='blue'>[Припев] Л3м - aaaa<br></span>
В виде денег, на-на-на, забрать свое.<br>
В виде сцены, на-на-на, забрать свое.<br>
В виде славы, на-на-на, забрать свое-о-о,<br>
Забрать свое-о-о, забрать свое.<br>
<br>
<span class='blue'>[Куплет 1] Тк5цм/ж? - aa, AA<br></span>
Сколько бы раз в жизни меня ни пытали,<br>
Мои ангелы с демонами на дерьме зависали.<br>
И пока я пытался построить свои магистрали (магистрали!)<br>
Эти люди винят то, где все вверх дном, об одном.<br>
Говорят – мол, это наш дом, и нам жить с этим дерьмом!<br>
Умирать в нем, воскресать в нем и остаться порожняком!<br>
Где судьба мне оставила шрамы, Тони Монтана?<br>
<br>
А-а-а!<br>
<br>
<span class='blue'>[Переход]<br></span>
Все бросаю, чтобы забрать свое,<br>
Забрать свое...<br>
<br>
<span class='blue'>[Припев]<br></span>
В виде денег, на-на-на, забрать свое.<br>
В виде сцены, на-на-на, забрать свое.<br>
В виде славы, на-на-на, забрать свое-о-о,<br>
Забрать свое-о-о, забрать свое.<br>
<br>
<span class='blue'>[Переход]<br></span>
Я на своем, черно-белое кино,<br>
Вокруг меня все рушилось, как домино.<br>
Ну да, собрал все силы, чтоб забрать свое-о-о,<br>
Забрать свое-о-о, забрать свое.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Сколько мы раз с тобой падали и поднимались!<br>
Жизнь не давала нам шанс, мы над ней издевались!<br>
Но пока я пытался построить свои магистрали (магистрали!)<br>
Эти люди способны были упасть на самое дно,<br>
Говорят – мол, им не так, как таким, как я, повезло,<br>
И еще плюс ко всему им и так это нравится все!<br>
Да, судьба мне оставила шрамы, Тони Монтана!<br>
<br>
<span class='blue'>[Переход]<br></span>
Я все бросил, чтобы забрать свое,<br>
Забрать свое!<br>
<br>
<span class='blue'>[Припев]<br></span>
В виде денег, на-на-на, забрать свое.<br>
В виде сцены, на-на-на, забрать свое.<br>
В виде славы, на-на-на, забрать свое-о-о,<br>
Забрать свое-о-о, забрать свое.<br>
<br>
<span class='blue'>[Переход]<br></span>
Я на своем, черно-белое кино,<br>
Вокруг меня все рушилось, как домино.<br>
Ну да, собрал все силы, чтоб забрать свое-о-о,<br>
Забрать свое-о-о, забрать свое.<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/c1/scroodgee/10044-skrudzhi-montana-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
