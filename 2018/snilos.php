<?php
$title = 'Кристина Кошелева - Снилось, как люблю (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/mvuyQSzfn7Y'";
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

<span class='blue'>[Куплет 1] Л1-4цж? - XAAXAABB<br></span>
За тобой уплываю, <br>
За любовью <br>
И за болью,<br>
Сны мои всё сильнее, <br>
Ты — нежность с весною,<br>
Я позволю. <br>
И ровно пять секунд до солнца,<br>
И я в первый раз перепутаю два сердца.<br>
<br>
<span class='blue'>[Припев] Тк3м - aaaaaa<br></span>
Моя любовь сильней, чем океан,<br>
Я за тобою к берегам <br>
Бегу по своим волнам.<br>
И к тебе в туман <br>
В последний раз любовь твоя звала, <br>
Русалка ночью уплыла одна…<br>
<br>
<span class='blue'>[Куплет 2] Л1-4цмж? - aBBaBBCC</span><br>
Снилось, как я люблю, <br>
И нас двое, <br>
И мы в море,<br>
Ты не бойся, я ловлю, <br>
И в наших ладонях <br>
Ночь утонет.<br>
И ровно пять секунд до счастья,<br>
И я у тебя отражаюсь на запястье.<br>
<br>
<span class='blue'>[Припев]<br></span>
Моя любовь сильней, чем океан,<br>
Я за тобою к берегам <br>
Бегу по своим волнам.<br>
И к тебе в туман <br>
В последний раз любовь твоя звала, <br>
Русалка ночью уплыла одна…<br>
<br>
Музыка: Максим Фадеев<br>
Слова: Максим Фадеев, Ольга Серябкина<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/k1/kristina-kosheleva/11031-kristina-kosheleva-snilosj-kak-lyublyu-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Песня для фильма «Русалка. Озеро мертвых» (2018).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
