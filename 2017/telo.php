<?php
$title = 'ЛСП - Тело (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/p1uh40IvF4c'";
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

<span class='blue'>[Куплет 1] Дк4цжм - AbAb<br></span>
Я бы хотел путешествовать много,<br>
С природой сливаясь, лежать на песке.<br>
Или прийти уже всё-таки к Богу,<br>
Не стесняясь дырки в носке.<br>
Хочу днями глядеть на капризное солнце,<br>
На небесную синь, облаков кудрявый парад <span class='blue'>(Строка Дк5цм)<br></span>
И улыбаться, когда засмеётся<br>
Не рождённый мой сын, будто я ему рад.<br>
<br>
<span class='blue'>[Припев] Дк2-4цмж - aa, AA<br></span>
<div class='refren'>Но я просто тело, что тупо болит,<br>
Нелепое тело, что тупо болит.</div>
Мне бы стать сигаретой<br>
И развеяться пеплом по ветру,<br>
Или просто лучиком света — <br>
И сиять, но, блядь, не верится в это! <br>
<div class='refren'>Ведь я просто тело, что тупо болит,<br>
Нелепое тело, что тупо болит.</div>
Мне бы ракетой<br>
Улететь на другую планету,<br>
Или болеть перестало б на этой<br>
<div class='refren'>Нелепое тело, что тупо болит.</div>
<br>
<span class='blue'>[Куплет 2] Дк4ц3дм - A’bA’b, A’BA’B<br></span>
Когда-то я думал, что тело железное:<br>
Кушал, кирял и курил, что хотел.<br>
Щас мы с братом ходим по лезвию<br>
На поводу наших тел,<br>
Что разлагаются изнутри.<br>
Жить с этим так муторно,<br>
Словно ночь интернетить в компьютерном <br>
Клубе, а дождь отсекает от утра. <br>
Ты ждёшь, и лагает ебучий стрим (сука),<br>
Который ты смотришь от скуки за мамины бабки. <span class='blue'>(Строка Дк5ж)<br></span>
Ради них читаешь книжки,<br>
Ради них кладёшь закладки,<br>
Вроде бы, всё и в порядке, <br>
Но на похоронах бабкиной мамки<br>
Очень давно я понял одно: <br>
Я просто тело, такое же.<br>
<br>
<span class='blue'>[Припев]<br></span>
<div class='refren'>Но я просто тело, что тупо болит,<br>
Нелепое тело, что тупо болит.</div>
Мне бы стать сигаретой<br>
И развеяться пеплом по ветру,<br>
Или просто лучиком света — <br>
И сиять, но, блядь, не верится в это! <br>
<div class='refren'>Ведь я просто тело, что тупо болит,<br>
Нелепое тело, что тупо болит.</div>
Мне бы ракетой<br>
Улететь на другую планету,<br>
Или болеть перестало б на этой<br>
<div class='refren'>Нелепое тело, что тупо болит.</div>
<br>
<span class='blue'>[Аутро]<br></span>
<div class='refren'>Тело, что тупо болит,<br>
Нелепое тело, что тупо болит.</div>
Мне бы стать сигаретой<br>
И развеяться пеплом по ветру,<br>
Или просто лучиком света — <br>
И сиять, но, блядь, не верится в это!<br>
<div class='refren'>Ведь я просто тело, что тупо болит,<br>
Нелепое тело, что тупо болит.</div>
Мне бы ракетой <br>
Улететь на другую планету,<br>
Или болеть перестало б на этой<br>
<div class='refren'>Нелепое тело, что тупо болит.</div>
<br>
<span class='blue'><a href="https://genius.com/Lsp-body-lyrics"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
