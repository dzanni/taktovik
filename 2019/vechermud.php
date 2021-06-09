<?php
$title = 'Борис Гребенщиков - Вечерний М (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/vS5p4LuDASM'";
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

<span class='blue'>[Куплет 1] Тр32м|м? - Xabba<br></span>
Я всю жизнь брожу по просторам<br>
И готов ещё жизнь так кружить.<br>
И кого ни спроси —<br>
Все несутся в такси,<br>
И никто не научит, как жить.<br>
  <div class='refren'>Но в центре просторов есть место,<br>
  Где светло, и туда все глядят.<br>
  И там на совесть и честь <br>
  Всех научат, как есть:<br>
  Детей, стариков и ребят.</div>
<br>
<span class='blue'>[Припев] Л3343м/? - aaaa<br></span>
Вечерний мудозвон!<br>
Вечерний мудозвон!<br>
Подлинный труженик наших времён -<br>
Вечерний, вечерний...<br>
  <div class='refren'>Вечерний мудозвон!<br>
  Вечерний мудозвон!<br>
  Честнее, правдивей и лучше всех он -<br>
  Вечерний мудозвон!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Он всё, что закажут, расскажет <br>
И ответит на каждый вопрос. <br>
У народа душа, <br>
А за ней ни гроша, <br>
Но зато мы утёрли всем нос! <br>
  <div class='refren'>Он сияет, как новый полтинник, <br>
  С него капают лосьоны и лак. <br>
  И когда гопота <br>
  Распинает Христа, <br>
  Он объяснит, отчего Христос - враг! </div>
 <br>
<span class='blue'>[Припев]<br></span>
Вечерний мудозвон! <br>
Вечерний мудозвон! <br>
Когда нужна правда, правдивей всех он - <br>
Вечерний, вечерний... <br>
  <div class='refren'>Вечерний мудозвон! <br>
  Вечерний мудозвон! <br>
  Вот истинный памятник наших времён - <br>
  Вечерний мудозвон! <br>
  Вечерний мудозвон! </div>
 <br>
<span class='blue'><a href='https://www.gl5.ru/boris-grebenschikov-vechernij-m.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Слоговая гласная "з": Я всю жиЗнь брожу по просторам = UU-UU-UU-U<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
