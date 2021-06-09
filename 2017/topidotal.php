<?php
$title = 'MiyaGi & Эндшпиль - Топи до талого, братан (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/RjXOiTUnz-s'";
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

echo "<br>Видео было удалено. См., например: здесь:<br><br>";

echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/_KQz0nt03wQ'
frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br><br>";


?>

<span class='blue'>[Интро] Я23м - abab<br></span>
Кто там? Кадим, <br>
MiaGi, Меломан<br>
К кому? Своим <br>
Бродягам-пацанам.<br>
<br>
<span class='blue'>[Припев х2] Ак4цм - aa<br></span>
За кордоном солнце находило свою приют,<br>
А мы всё тут, а мы всё тут, и все в поряде на борту.<br>
Перемены тополи на тарана, мы рисовали берега.<br>
Дабы не наваливала тьма, топи до талого, братан.<br>
<br>
<span class='blue'>[Куплет] Ак3ж - AA<br></span>
Как тетива натянуты нервы, как струны.<br>
Переведи дух, паскуда,<br>
Перво-наперво семейные тяги, маршруты,<br>
Ради родных после живуги вуги,<br>
Мы тратим время не на те досуги,<br>
Думал туго, у тебя, а хУй там,<br>

<span class='blue'>Тк4цж/д - AA<br></span>
Видел малого злого,  <span class='blue'>(Строка Тк3ж)</span><br>
Без папы и мамы, худого, босого, немого, <span class='blue'>(Строка Тк5цж)</span><br>
Под кожу холодом, нету больше молодого,<br>
Еще одна дерьмовая история готова,<br>
Мой ветер южный, мой город нужный,<br>
Посыл простуженный, прослыл контуженный,<br>
Ты гляди глубже, ман, [пауза пауза]<br>
Я за свое, я за свое порежу органы,<br>
Завяжу на узел горло, тому кто против прет.<br>
Добром на добро, на зло отвечу справедливо,<br>
Ибо нехуй колотить понты, если духом смазливый, <span class='blue'>(Строка Ак4цж)</span><br>
Приливы отливы, пустая трата времени,<br>
Не жди плодов от почвы, в которой нету семени.<br>
<br>
<span class='blue'>[Припев х2]<br></span>
За кордоном солнце находило свою приют,<br>
А мы всё тут, а мы всё тут, и все в поряде на борту.<br>
Перемены тополи на тарана, мы рисовали берега.<br>
Дабы не наваливала тьма, топи до талого, братан.<br>
<br>
<span class='blue'>[Аутро х2]<br></span>
Кто там? Кадим, <br>
MiaGi, Меломан.<br>
К кому? Своим <br>
Бродягам-пацанам.<br>
<br>
<span class='blue'>Неизвестный источник</span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
