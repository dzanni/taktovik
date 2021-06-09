<?php
$title = 'Markul - Худший друг (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/OJ7Cx9KsEO0'";
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

<span class='blue'>[Интро] Тк4цм/ж - xXx<br></span>
 Я не знаю, как ты теперь везде! <br>
  Я буду бежать за тобой через огонь и воду,  <br>
  Но это путь в никуда, я-а-а-а!  <br>
<br>
<span class='blue'>[Куплет 1] Тк4ц3м/ж - aaaa, AAAA<br></span>
   Наши пути не выходили за рамки танцев,  <br>
   Ведь как ни крути, мы улетим на разных! <br>
    Я туда, где рассвет, куда ты - не ясно.  <br>
    Бармен повторит мне «Камикадзе».  <br>
    Я буду эту ночь тратить на всех подряд: <br>
    Смотри, как купюры горят!  <br>
    Сквозь неоновый дождь вижу: ты здесь одна.  <br>
    Мне об этом говорит твой взгляд.  <br>
 <br>
<span class='blue'>[Припев] Тк2-4цмж - aaa aaaa BBxBBx<br></span>
     Ты меня не замечала несколько лет! <br>
      Почему ты намекаешь вместе гореть (йа)<br>
      Тает дым сигарет. <br>
       Меня не замечала несколько лет!  <br>
       Теперь ты кричишь: «Е-е-е, е-е-е!»  <br>
       Видишь, мы с тобой наравне (эй)  <br>
       Это твой последний билет!  <br>
    <div class='refren'>
       Я худший твой друг, молодая принцесса,  <br>
       Не увлекайся процессом!<br>
       Знай, ты, знай!  <br>
       Я худший твой друг, молодая принцесса,  <br>
       Не увлекайся процессом,<br>
       Знай, ты, знай!  </div>
 <br>
    <span class='blue'>[Куплет 2] <br></span>
       Мой взгляд полетел в твое тело (йа)<br>
        Толпу рассекает, как стрелы!  <br>
        Ты пытаешь судьбу, пытаясь быть стервой,  <br>
        Но я больше не ведусь, ведь твоя роскошь - это мелочь! <br>
         Я знаю все мотивы, и за ними лишь ложь. <br>
          Остановить так хотела минор! <br>
           Куда понесло нас с тобой? <br>
            Исчезаю с тобой! <span class='blue'>(Строка Тк2м)<br></span>
             <br>
             <span class='blue'>[Припев] <br></span>
                  Ты меня не замечала несколько лет! <br>
                   Почему ты намекаешь вместе гореть (йа)<br>
                   Тает дым сигарет. <br>
                    Меня не замечала несколько лет!  <br>
                    Теперь ты кричишь: «Е-е-е, е-е-е!»  <br>
                    Видишь, мы с тобой наравне (эй)  <br>
                    Это твой последний билет!  <br>
                 <div class='refren'>
                    Я худший твой друг, молодая принцесса,  <br>
                    Не увлекайся процессом!<br>
                    Знай, ты, знай!  <br>
                    Я худший твой друг, молодая принцесса,  <br>
                    Не увлекайся процессом,<br>
                    Знай, ты, знай!  </div>
 <br>
<span class='blue'>[Аутро] <br></span>
Твой последний билет!  <br>
Знай!  <br>
Ты меня не замечала!  <br>
Почему ты намекаешь вместе гореть? <br>
 <br>
<span class='blue'>Источник: текст под клипом Youtube</span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
