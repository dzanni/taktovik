<?php
$title = 'ATL - Танцуйте (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Miqhq_3gQbg'";
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

<span class='blue'>[Куплет 1] Тк4цж - AA<br></span>
Слышишь, дружище, не волнуйся.<br>
Если вдруг пропаду без вести, допустим.<br>
Вы лучше не ищите, да и хуй с ним.<br>
По тихой грусти прихватило и никак не отпустит.<br>
Слышишь, брат, слышишь родненький, не волнуйся, <br>
Будь лишь рад, если найдете с щелью в пузе.<br>
Улыбайся, если найдусь где-то на трассе,<br>
Значит меня переехал этот четкий крузер.<br>
Знаешь, родная, слезы лить не надо.<br>
Ты лучше припомни наши променады.<br>
Я не пропал, я здесь в бетоне под ламинатом.<br>
Кому то что-то приторчал, и вот моя расплата.<br>
А так хотелось разложить себя по нотам.<br>
Но разложился на жиры, белки и углеводы.<br>
Трясиной притоптан, либо где-то в притоне.<br>
А ты не скорби, братик, ты лучше притопни.<br>
<br>
<span class='blue'>[Переход] Тк4цж? - AA'AA<br></span>
Ведь я лежу такой прекрасный до жути.<br>
Единственное жаль, не доберусь до студии.<br>
На остальное будет все равно по сути.<br>
Так что похер, тан-цуйте! <span class='blue'>(Строка Тк2ж)<br></span>
<br>
<span class='blue'>[Припев] Тк23//4цж - AAAA<br></span>
Похер, танцуйте!<br>
Прямо на моей могиле танцуйте!<br>
Похер, танцуйте!<br>
Прямо на моей могиле танцуйте!<br>
Мне похер по сути.<br>
Ведь отныне меня нет и не будет.<br>
Похер по сути.<br>
Прямо на моей могиле танцуйте!<br>
Похер по сути.<br>
Ведь отныне меня с вами не будет.<br>
Похер по сути.<br>
Прямо на моей могиле танцуйте!<br>
<br>
<span class='blue'>[Куплет 2] Тк23цдж - A’BA’B<br></span>
Откажет мелкая моторика,<br>
За ней откажут аппараты речи.<br>
Кардиограммы нить тоненькая,<br>
Пусть этот ворон клюёт мою печень!<br>
<span class='blue'> Тк4цж?, Тк4цмж - AA, aBaB<br></span>
Освежевав меня за гаражом филигранно,<br>
Карма не оставит от меня ни грамма.<br>
А у подъезда бабки скажут: «Сатанист!<br>
И так ему и надо, так ему и надо!»<br>
Или пудингом сливовым станет картечь,<br>
В голову прилетевшая. Прискорбные мысли,<br>
О том что останется лишь под саван лечь<br>
И три последних дня на вашей тусе киснуть.<br>
Так что давайте без литургии летальной,<br>
Ведь мы миры и не такие видали.<br>
На деревянной крышке вырежи лучи пентаклей, <span class='blue'>(Строка Ак4цж)<br></span>
Зарой меня в моих лучших педалях.<br>
<br>
<span class='blue'>[Переход]<br></span>
Ведь я лежу такой прекрасный до жути.<br>
Единственное жаль, не доберусь до студии.<br>
На остальное будет все равно по сути.<br>
Так что похер, тан-цуйте!<br>
<br>
<span class='blue'>[Припев]<br></span>
Похер, танцуйте!<br>
Прямо на моей могиле танцуйте!<br>
Похер, танцуйте!<br>
Прямо на моей могиле танцуйте!<br>
Мне похер по сути.<br>
Ведь отныне меня нет и не будет.<br>
Похер по сути.<br>
Прямо на моей могиле танцуйте!<br>
Похер по сути.<br>
Ведь отныне меня с вами не будет.<br>
Похер по сути.<br>
Прямо на моей могиле танцуйте!<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/a/atl/7043-atl-tancujte-text-pesni.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>