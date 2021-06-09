<?php
$title = 'MAZUTA - В твоих ушах (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/MnL6108kttE'";
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

<span class='blue'>[Припев] Тк4цм - aa<br></span>
А на ногах красный Demax,<br>
 Рэп не за бакс, тазик бас, <br>
 Читка, лайв, кайф, класс для нас, <br>
 Для всех простых вот этот андер ты дашь. <br>
 Сабо-саботаж, big-big монтаж. <br>
 MAZUTA играет в твоих ушах. <br>
 MAZUTA играет в твоих ушах. <br>
 MAZUTA играет в твоих ушах. <br>
 <br>
<span class='blue'>[Куплет 1] Тк2-4ц - aa, AA, A'A' etc.<br></span>
   Мы, мы сильные, <br>
   Ты только жди меня.<br>
    Лирика не для нас, но для тебя. <br>
    Сопли не пускаю, не пускал. <br>
    Слёзы на щеках вытри! <br>
    Я держу всё внутри. <br>
    Не выпускай наружу, ты не баба, ты мужик! <br>
    Крепко за руку держи! <br>
    Если любишь, докажи (докажи) <br>
    Кто-то прячет от меня то, что я хочу увидеть. <br>
    Подняться на орбиту и спуститься, там где виды <br>
    На эту планету очень красивы <br>
     И неповторимы, но всё проходит мимо. <br>
     И больше ничего не надо, <br>
     Но к тебе не достучаться! <br>
     Прям, вообще не доебаться! <br>
Цаца, вайбер, инста, вацап!<br>
     <br>
     <span class='blue'>[Припев]<br></span>
     А на ногах красный Demax,<br>
      Рэп не за бакс, тазик бас, <br>
      Читка, лайв, кайф, класс для нас, <br>
      Для всех простых вот этот андер ты дашь. <br>
      Сабо-саботаж, big-big монтаж. <br>
      MAZUTA играет в твоих ушах. <br>
      MAZUTA играет в твоих ушах. <br>
      MAZUTA играет в твоих ушах. <br>
<br>
  (MAZUTA играет в твоих ушах) <br>
    (MAZUTA играет в твоих ушах) <br>
    <br>
      <span class='blue'>[Куплет 2] Тк2-4цм - xaaaa<br></span>
         Я не перестану читать, <br>
         Даже если погаснет бит. <br>
         Это не трэп, не рэп, не хоп, но хит! <br>
         Хорошо звучит! <br>
         Детка, я на тебе залип! <br>
         <br>
         <span class='blue'>[Припев]<br></span>
         А на ногах красный Demax,<br>
          Рэп не за бакс, тазик бас, <br>
          Читка, лайв, кайф, класс для нас, <br>
          Для всех простых вот этот андер ты дашь. <br>
          Сабо-саботаж, big-big монтаж. <br>
          MAZUTA играет в твоих ушах. <br>
          MAZUTA играет в твоих ушах. <br>
          MAZUTA играет в твоих ушах. <br>
<br>
<span class='blue'>[Куплет 2]<br></span>
   Я не перестану читать, <br>
   Даже если погаснет бит. <br>
   Это не трэп, не рэп, не хоп, но хит! <br>
   Хорошо звучит! <br>
   Детка, я на тебе залип! <br>
         <br>
         <span class='blue'>[Аутро]<br></span>
      MAZUTA играет в твоих ушах. <br>
      MAZUTA играет в твоих ушах. <br>
      MAZUTA играет в твоих ушах. <br>
      MAZUTA играет в твоих ушах. <br>
<br>
<span class='blue'>Источник: текст под клипом Youtube</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
