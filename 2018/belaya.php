<?php
$title = 'Анна Плетнёва - Белая (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/QStkoCMs0Uw'";
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

<span class='blue'>[Куплет 1] Дк7цж - AA<br></span>
Кто-то рассыпал на землю мою любовь, пустил по ветру.<br>
Кто-то без спроса разбудил белую королеву.<br>
<br>
<span class='blue'>[Переход] Тк4ц3жм - AbAb<br></span>
А я и не против, моей любви хватит.<br>
Машинам и людям, бульварам и домам.<br>
И от поцелуя на паузу встанут<br>
Белые мои города.<br>
<br>
<span class='blue'>[Припев х2] Тк4цм/д? - aaaX'<br></span>
Белая метель, белая метель.<br>
Белая метель искрами в темноте.<br>
Это все для тебя, это все о тебе.<br>
Это любовь моя белая-белая.<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Кто-то расскажет не правду, а я ему, а я ему поверю.<br>
Ведь не возможно обмануть белую королеву.<br>
<br>
<span class='blue'>[Переход]<br></span>
Когда вы поймете, моей любви хватит.<br>
Машинам и людям, бульварам и домам.<br>
И от поцелуя на паузу встанут <br>
Белые мои города.<br>
<br>
<span class='blue'>[Припев х4]<br></span>
Белая метель, белая метель.<br>
Белая метель искрами в темноте.<br>
Это все для тебя, это все о тебе.<br>
Это любовь моя белая-белая.<br>
<br>
Белая метель.<br>
<br>
<span class='blue'><a href='https://text-pesni.su/page/anna-pletnjova-belaja'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
