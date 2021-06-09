<?php
$title = 'Нурминский - Мама, вылечи (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/guSbV9Wr_lo'";
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
<span class='blue'>[Интро]<br></span>
Мама, вылечи, мама-мама, вылечи... <br>
Мама, вылечи, мама, прошу, вылечи... <br>
<br>
<span class='blue'>[Куплет 1] Тк4цм/ж - aa, AA<br></span>
Был молодым, молодым хочу остаться. <br>
По улице босым, от души смеяться. <br>
Не зная вкуса дым, и под утро шляться. <br>
Был молодым, молодым хочу остаться. <br>
<div class='refren'>
Порой охота позвонить домой - <br>
Пообщаться, услышать голос родной. <br>
Передайте трубку, я вам не чужой - <br>
Скажу пару слов, скажу системе: «Сбой!» </div>

Ой-ёй-ёй, ангел мой родной, <br>
Подари мне крылья, душу успокой! <br>
С неверными людьми меня разлучи, <br>
Скажи, что не так! Мама, вылечи! <br>
 <br>
<span class='blue'>[Припев х3] Тк4цдм - A'bA'b<br></span>
Мама, вылечи, мама-мама, вылечи! <br>
На душе тоска, душу излечи! <br>
Мама, вылечи, мама-мама, вылечи! <br>
Я стал плохим, прошу - отучи! <br>
 <br>
<span class='blue'>[Куплет 2] <br></span>
Поменялся я, поменялся мир.<br>
Мама, ты прикинь - я чей-то кумир!<br>
Соблазна много тут, уйду - не вернусь.<br>
Скинь мне долгожданный спасающий круг! <br>
<div class='refren'>
<span class='blue'>Тк4цжм - AbAb<br></span>
Готовы подставить в любую минуту; <br>
Подсунуть мне в карман где что-нибудь. <br>
И смотря на это, я плохим не буду. <br>
Да, и ты друг, плохим не будь! </div>

Мы называем близкими тех, кого не знаем. <br>
Кто два раза помог, крепко обнимаем. <br>
А потом всю жизнь кто-то кому торчит <br>
От безысходности мама вылечит. <br>
 <br>
 <span class='blue'>[Припев х3] <br></span>
 Мама, вылечи, мама-мама, вылечи! <br>
 На душе тоска, душу излечи! <br>
 Мама, вылечи, мама-мама, вылечи! <br>
 Я стал плохим, прошу - отучи! <br>
 <br>
<span class='blue'>[Переход]<br></span>
Мама, вылечи! <br>
Мама, вылечи! <br>
Мама, вылечи! <br>
На душе тоска, душу излечи!<br>
 <br>
 <span class='blue'>[Припев х2] <br></span>
 Мама, вылечи, мама-мама, вылечи! <br>
 На душе тоска, душу излечи! <br>
 Мама, вылечи, мама-мама, вылечи! <br>
 Я стал плохим, прошу - отучи! <br>
 <br>
 <span class='blue'>[Переход]<br></span>
 Мама, вылечи! <br>
 Мама, вылечи! <br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/n/nurminskij/nurminskij-mama-vilechi.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
