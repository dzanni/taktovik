<?php
$title = 'Зомб - #ДелаемФлекс (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/BW6LuHPDNAY'";
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

<span class='blue'>[Куплет 1] Л32ж? - AAABAABB<br></span>
На пати прицесса Несмеяна,<br>
Платье цвета мариуанна. <br>
 Нормально кроет она. <br>
 Нормально кроет...<br>
  Детка так непостоянна!<br>
   Все рядом не стояли!<br>
    Давай представим, что нет<br>
    Никого кроме... <br>
    <div class='refren'>
      <span class='blue'>Дк34цж - AA<br></span>
    Далеко не девочка-праздник.<br>
     Она скорее девочка-айсберг. <br>
     Девочка «не подходите».<br>
      Вся идеальная - прям, Нифертити. <br>
      Подождите, нам бы текилы!<br>
       Диджей, давай громче, чтобы добило!<br>
       Плавно со мною от бара лавируй<br>
       И улыбайся, это так мило!</div>
       <br>
    <span class='blue'>[Переход] Дк4цм? - aa<br></span>
       И пусть на танцполе нету мест - <br>
       Мои руки на тебе - это рефлекс. <br>
       И пусть на танцполе нету мест. <br>
       И мы делаем что? Делаем флекс! <br>
<br>
<span class='blue'>[Припев х4] Тр1-5цм? - aaaaa<br></span>
       Делаем флекс,<br>
       Детка, давай со мной на интерес, <br>
       Или без. <br>
       Только улыбнись, наконец. <br>
       А мы делаем, делаем, делаем, делаем флекс!<br>
<br>
Делаем флекс! <br>
<br>
    <span class='blue'>[Куплет 2] Тк4цм/ж/д - aa, AA, A'A'<br></span>
        Тара-та-там, там грязные танцы.<br>
         Мы прямо в центре, почувствуй вибрации. <br>
         Видишь, у нас получается. <span class='blue'>(Строка Тк3д)<br></span>
                Вижу, что тебе, как и мне это нравится.<br>
           Ну, давай пей-пей, чё горит. <br>
           Где сегодня ты - маме не говори.<br>
            Как последний раз, танцуй, со мною пари.<br>
             Будто в клуб летит метеорит. <br>
<div class='refren'>
    <span class='blue'>Дк3ж - AA<br></span>
             Мир тот не спит, мы не спим с ним. <br>
             Текила, самбука и Pilsner. <br>
             Все переходим границы. <br>
             К старту летят единицы. <br>
             А нам бы уединиться. <br>
             Ты скажешь: «Так не годится!» <br>
             Ты скажешь: «У меня принцип,<br>
              И я уж жду принца!»</div>
<br>
<span class='blue'>[Переход]<br></span>
   И пусть на танцполе нету мест - <br>
   Мои руки на тебе - это рефлекс. <br>
   И пусть на танцполе нету мест. <br>
   И мы делаем что? Делаем флекс! <br>
 <br>
   <span class='blue'>[Припев х4]<br></span>
          Делаем флекс,<br>
          Детка, давай со мной на интерес, <br>
          Или без. <br>
          Только улыбнись, наконец. <br>
          А мы делаем, делаем, делаем, делаем флекс!<br>
   <br>
   Делаем флекс!   <br>
<br>
<span class='blue'>Источник: караоке в клипе Youtube</a><br></span>
<br>
<br>
N.B. Рифма д=ж: "тАнцы - вибрАции".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
