<?php
$title = 'Элджей & Feduk - Розовое вино (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/S9oXj3a4gZ4'";
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

<span class='blue'>[Вступление] Тк3жм - XaXa<br></span>
- Я похож на птицу! - На принца?<br>
- На принца или на орла. Эй!<br>
Я беру вторую бутылку<br>
Розового вина.<br>
<br>
<span class='blue'>[Припев: Feduk] Тк4цмж - aaBB<br></span>
Здесь так красиво, я перестаю дышать.<br>
Звуки на минимум, чтобы не мешать.<br>
Эти облака - фиолетовая вата.<br>
Магия цветов со льдом в наших стаканах.<br>
<div class='refren'>Здесь так красиво, я перестаю дышать.<br>
Звуки на минимум, чтобы не мешать.<br>
Эти облака - фиолетовая вата.<br>
Магия цветов со льдом в наших стаканах.</div>
<br>
<span class='blue'>[Первый Куплет: Элджей] Тк2-3дм? - A'bA'bbbbb, AAbbbbX'b <br></span>
Девочка-пятница<br>
Не хочет быть сегодня одна.<br>
Какая разница, <br>
Где я не отвечаю на номера.<br>
Можешь даже не набирать, <br>
Можешь даже не набирать.<br>
Мы хотим угарать,<br>
Я хочу угарать.<br>
<div class='refren'>Мы уже в океане<br>
Дискотек, алкоголя и мариуаны.<br>
No stress.<br>
Хаваем как M&M's dance-dance.<br>
Кис-кис,<br>
Вдыхай меня через кес, (через кес).<br>
Моя волшебная палочка<br>
В твоих руках. Крекс-пекс!</div>
<br>
<span class='blue'>Тк4цмж - aaBB, xAxA<br></span>
Здесь так красиво, я перестаю дышать.<br>
Звуки на минимум, чтобы не мешать.<br>
Эти облака - фиолетовая вата.<br>
Фиолетовая вата и вокруг так пиздато!<br>
<div class='refren'>Твои кенты лошки, а я без башки,<br>
Но не будем мы играть в кошки-мышки.<br>
Твои ладошки уже далеко зашли.<br>
Я хочу тебя, а еще хочу ссишку.</div>
<br>
<span class='blue'>[Припев: Feduk]<br></span>
Здесь так красиво, я перестаю дышать.<br>
Звуки на минимум, чтобы не мешать.<br>
Эти облака - фиолетовая вата.<br>
Магия цветов со льдом в наших стаканах.<br>
<div class='refren'>Здесь так красиво, я перестаю дышать.<br>
Звуки на минимум, чтобы не мешать.<br>
Эти облака - фиолетовая вата.<br>
Магия цветов со льдом в наших стаканах.</div>
<br>
<span class='blue'>[Второй Куплет: Feduk] Дк4ц3ж - ABABBBXB <br></span>
Я бы жил в этом лете в том самом моменте,<br>
Когда мы летели на байке.<br>
Эти пальмы и ветер, пальмы и ветер,<br>
Фото пальмы в алом закате.<br>
<div class='refren'>Мы на гребне волны скользим и катим,<br>
Все что так долго копили - тратим.<br>
И все что так долго копили –<br>
Вам придется сегодня потратить. Еа!</div>
<br>
<span class='blue'>[Припев: Feduk]<br></span>
Здесь так красиво, я перестаю дышать.<br>
Звуки на минимум, чтобы не мешать.<br>
Эти облака - фиолетовая вата.<br>
Магия цветов со льдом в наших стаканах.<br>
<div class='refren'>Здесь так красиво, я перестаю дышать.<br>
Звуки на минимум, чтобы не мешать.<br>
Эти облака - фиолетовая вата.<br>
Магия цветов со льдом в наших стаканах.</div>
<br>
<span class='blue'><a href='https://text-lyrics.ru/a/allj/8181-eldzhej-feduk-rozovoe-vino-text-pesni.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Сжатие к концу в Дк. Тяга к полной рифмовке и внутренним рифмам.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
