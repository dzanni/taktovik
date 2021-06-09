<?php
$title = 'Немножко пианист - Не трогал твою даму (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/w4pI4CDvVEA'";
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

 <span class='i'>- Твоя сука такая тупая, что хочется унести!<br>
 - Сука даже не знает, что [неразб.], она кричит [неразб.]<br>
 - Та тупая сука ровно пять минут назад!<br>
 - Я [неразб.] телку! Ещкара!<br>
 - Твоя сука кидает мне фото в директ! Рука-лицо! <br>
 - И вот приходят твои телки - чем быстрее [неразб.]<br></span>
<br>
<span class='blue'>[Куплет 1] Чт4цм - aa, xx<br></span>
Вау! крутые песни, особенно басы!<br>
 Но постоянно петь про секас? У вас что, комплексы? <br>
 Так интересно слушать про сношения и наркоту! <br>
 Вокруг все сучки, телки, шлюхи, ну а ты конечно тру! <br>
 Не назову ее похабно - не модно, извини! <br>
 Но я не трогал твою даму и даже не смотрел! <br>
  <br>
<span class='blue'>[Припев] Тк2-6цжм - AbAbbb AbAbCC<br></span>
 Я не трогал твою даму <br>
 И даже не смотрел! <br>
 Изволь, чужого мне не надо (что?)<br>
 Ага, понел? <br>
 И стрелять в нее не хочется, и пять минут назад мы с ней не виделись совсем (что, что, что?)<br>
 Подтвердит Рустэм! <br>
<div class='refren'>
   Я не трогал твою даму <br>
   И даже не смотрел! <br>
   Изволь, чужого мне не надо<br>
   Понел? <br>
   Я не приход твоей леди (что?), и я знаю, что в спрайте <br>
   Фото в дИрект мне не шлют, не жрут и бургер, извиняйте! <br>
 <br>
  <span class='blue'>[Куплет 2] Тк4цм/ж - aa, AA<br></span>
 Я натягивал только прошлогодний свитер, <br>
 Были рядом с ней примерно как от Земли Юпитер. <br>
 И скакала лишь со мной скакалка. <br>
 Зажигала этой ночью зажигалка. <br>
 Твоя дама такая смешная, что хочется сделать комплимент! <span class='blue'>(Строка Ак4цм)<br></span>
 Я уважаю всех, ведь я интеллигент! <br>
<br>
<span class='blue'>[Припев]<br></span>
 Я не трогал твою даму (что?)<br>
 И даже не смотрел! <br>
 Изволь, чужого мне не надо,<br>
 Ага, понел? <br>
 И стрелять в нее не хочется, и пять минут назад мы с ней не виделись совсем,<br>
 Подтвердит Рустэм! <br>
<div class='refren'>
   Я не трогал твою даму <br>
   И даже не смотрел! <br>
   Изволь, чужого мне не надо!<br>
   Понел? <br>
   Я не приход твоей леди (что?), и я знаю, что в спрайте <br>
   Фото в дИрект мне не шлют, не жрут и бургер, извиняйте! <br>
<br>
<span class='i'>- Подтвердит Рустэм!<br>
- Какой Рустэм, я не понел? Я Рустэм? Чо?<br></span>
<br>
<span class='blue'>Источник: текст под роликом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
