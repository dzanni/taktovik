<?php
$title = 'PHARAOH - Дико, например (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/l7v8DAbIOx0'";
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

<span class='blue'>[Куплет 1] Тк4ц3м/ж - aa, AA</span><br>
Самый редкий вид, но самый худший браконьер.<br>
Спорим, она вместит себе в глотку револьвер?<br>
Спорим, что ты больше не покинешь этот сквер?<br>
Я играю с ее киской, детка, где твой кавалер?<br>
Я врубаю Daft Punk, она крутит мне блант.<br>
Покидаем клуб, в руке Sauvignon Blanc.<br>
Отлип от ее губ, залипаю в экран.<br>
Я кидаю деньги в воздух — ты поймаешь их сам!<br>
Эй, детка, ты модель или подделка? <br>
Сейчас не важно, важно только, что не целка! <br>
А если кто-то из твоих захочет знать,<br>
Я найду еще причины, чтобы положить их спать.<br>
Она качает гривой, нельзя быть такой игривой!<br>
Выдыхаю в потолок испарения сативы.<br>
Кажусь хуже, чем я есть, заставляю тебя есть.<br>
Я держу при себе суку, что не может с меня слезть!<br>
<br>
<span class='blue'>[Припев х2] Тк3м - aaaa<br></span>
Эй, это все дико, например (пау-пау-пау)<br>
Эй, мы курим дико, например (пау-пау-пау)<br>
Эй, мы виснем дико, например (пау-пау-пау)<br>
Ты не сумел, но я дико отымел (пау-пау-пау-пау)<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
(Пауза, пауза) Извини за прямоту,<br>
Но даже в этом клубе все когда-нибудь умрут.<br>
Мои парни мне сказали, что мне нужно охладить,<br>
И я держу это на низком, ведь та сука — троглодит!<br>
Повсюду лужи крови, помогу ей обойти!<br>
(Пауза, пауза) Но ты беги-беги-беги!<br>
Marriott с меня хуеет, трижды место преступленья.<br>
Моя тишка говорит мне: Я — ошибка поколенья!<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Эй, это все дико, например (пау-пау-пау)<br>
Эй, мы курим дико, например (пау-пау-пау)<br>
Эй, мы виснем дико, например (пау-пау-пау)<br>
Ты не сумел, но я дико отымел (пау-пау-пау-пау)<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/p/pharaoh/7662-pharaoh-diko-naprimer-text-pesni.html"
  target="_blank">Источник</a><br></span>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
