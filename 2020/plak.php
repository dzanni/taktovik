<?php
$title = 'IC3PEAK - Плак-Плак (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Y6tDdjOmsCY'";
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

<span class='blue'>[Интро] Я2м/ - aa</span><br>
Плак-плак, плак-плак.<br>
Плак-плак, плак-плак.<br>
<br>
<span class='blue'>[Куплет 1] Х7м/ - aabb</span><br>
Я тебе писала и ждала тебя в ночи (плак-плак)<br>
Ты не отвечаешь больше на мои звонки (плак-плак)<br>
Каждый вечер оставляю под подушкой зуб (плак-плак)<br>
Умоляю небеса назад тебя вернуть (плак-плак)<br>
  <div class='refren'>Я была хорошей, а плохой я не была (плак-плак)<br>
  Я всю жизнь, как паинька, по правилам жила (плак-плак)<br>
  Надоело плакать, надоело мне страдать (плак-плак)<br>
  Всё равно не выйдет свою смерть предугадать (плак-плак)</div>
<br>
<span class='blue'>[Бридж] Л2ж/ - AAAA</span><br>
А-а-а-А-а! <br>
А-а-а-А-а! <br>
А-а-а-А-а! <br>
А-а-а-А-а! <br>
 <br>
<span class='blue'>[Припев х2] Тк4цж/ - AABB</span><br>
Мама говорила мне: "Слушайся мужа". <br>
Я непослушная, делаю хуже. <br>
Делаю не так, как наказывал папа: <br>
Вместо звезды хватаю гранату! <br>
 <br>
<span class='blue'>[Аутро] Х7м/? - aabb</span><br>
Я хотела бы тебя, как тогда, обнять, <br>
Но для этого придётся тело раскопать. <br>
Твои кости ледяные где-то там на дне. <br>
Прорастут цветы в этой оплаканной земле. <br>
 <br>
<span class='blue'>[Интро]</span><br>
Плак-плак, плак-плак. <br>
Плак-плак, плак-плак. <br>
 <br>
<span class='blue'>[Куплет 2]</span><br>
Растекаются по всей стене твои мозги (плак-плак) <br>
Очень разозлилась на тебя, ты уж прости (плак-плак) <br>
Сотый раз во сне я наблюдаю твой конец (плак-плак) <br>
И не так уж страшно, в самом деле, умереть (плак-плак) <br>
  <div class='refren'>Я была хорошей, а плохой я не была (плак-плак) <br>
  Я всю жизнь, как паинька, по правилам жила (плак-плак) <br>
  Надоело плакать, надоело мне страдать (плак-плак) <br>
  Всё равно не выйдет свою смерть предугадать (плак-плак) </div>
 <br>
 <span class='blue'>[Припев х2]</span><br>
 Мама говорила мне: "Слушайся мужа". <br>
 Я непослушная, делаю хуже. <br>
 Делаю не так, как наказывал папа: <br>
 Вместо звезды хватаю гранату! <br>
 <br>
 <span class='blue'>[Бридж]</span><br>
 А-а-а-А-а! <br>
 А-а-а-А-а! <br>
 А-а-а-А-а! <br>
 А-а-а-А-а! <br>
 <br>
<span class='blue'>[Аутро]</span><br>
Я хотела бы тебя, как тогда, обнять, <br>
Но для этого придётся тело раскопать. <br>
Твои кости ледяные где-то там на дне. <br>
Прорастут цветы в этой оплаканной земле. <br>
 <br>
 <span class='blue'><a href='https://genius.com/Ic3peak-boo-hoo-lyrics'
   target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
