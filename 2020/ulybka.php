<?php
$title = 'PIZZA - Улыбка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/hq3pLeW5qB4'";
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

<span class='blue'>[Интро]</span><br>
Э!<br>
<br>
<span class='blue'>[Припев х2] Тк4цмж - aBaB</span><br>
Та была улыбка похожа на рай.<br>
Аромат волос напоминал счастье.<br>
На меня напала эта твоя игра -<br>
И раздолбала мою душу на части.<br>
<br>
<span class='blue'>[Куплет 1] Тк4ц/</span><br>
А сон не сок, не море, не песок.<br>
Не хватает кислорода, словно горло в лассо.<br>
Ой, да, в поле одинокий колосок.<br>
Затишье перед бурей, значит - скоро бросок.<br>
Ты как капля с небес, живительный сок.<br>
Я пью тебя всю, по другому не смог бы.<br>
Просто письмо под моими кроссовками.<br>
Время - песок, добавляю басов я.<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Та была улыбка похожа на рай.<br>
Аромат волос напоминал счастье.<br>
На меня напала эта твоя игра -<br>
И раздолбала мою душу на части.<br>
<br>
  У-Э-э, Э-э-Э-э, э-э-Э!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Красный закат, синяя мгла.<br>
Влюбила - убила, ой, как ты могла?<br>
За тобой на дно, за тобою дотла.<br>
Хоть через океан, я твой Магеллан.<br>
Небо, небо, небо, небо помоги нам.<br>
Мы на ноги Ра, но по разным мирам.<br>
Город - обойма, город - война.<br>
И как здорово, когда со мною онА там.<br>
<br>
<span class='blue'>[Припев]</span><br>
У кого улыбка похожа на рай.<br>
Аромат волос напоминал счастье.<br>
На меня напала эта твоя игра -<br>
И раздолбала мою душу на части.<br>
  <div class='refren'>Та была улыбка похожа на рай.<br>
Аромат волос напоминал счастье.<br>
На меня напала эта твоя игра -<br>
И раздолбала мою душу на части.</div>
<br>
<span class='blue'>[Переход]</span><br>
ЛА-ла-ла-ла-лА-а-а-А-а-а-А-а-а.<br>
ЛА-ла-ла-ла-лА-а-а-А-а-а-А-а-а.<br>
ЛА-ла-ла-ла-лА-а-а-А-а-а-А-а-а.<br>
Ла-ла-ла-ла-лА-ла-ла, ла-Ла-ла-ла.<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Та была улыбка похожа на рай.<br>
Аромат волос напоминал счастье.<br>
На меня напала - эта твоя игра -<br>
И раздолбала мою душу на части.<br>
<br>
  Йе, йе!<br>
  <br>
<span class='blue'><a href='https://genius.com/Pizza-smile-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. При рифмовке куплетов учитывается только конечный ударный гласный, а не тип
окончания (рифма м=ж=д):<br>
<br>
Ты как капля с небес, живительный сОк.<br>
Я пью тебя всю, по другому не смОг бы.<br>
Просто письмо под моими кроссОвками.<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
