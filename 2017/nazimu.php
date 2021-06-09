<?php
$title = 'Витя АК-47 & Иван Ургант – На зиму корма (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/_PY9A3IvoxM'";
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

<span class='blue'>[Витя АК-47] Тк2-3мм? - xaxa</span><br>
Поднял бабла, <br>
Стали другими дела,<br>
С гусями в теплые края <br>
Туловище двину я.<br>
<br>
Чем подогреть в лесу <br>
Пернатого кента,<br>
Что на всю зиму дома, <br>
Бедолага, как всегда?<br>
<br>
Все говорят, АК, <br>
А как кормить щегла?<br>
Ему не улетать <br>
На зиму же на юга.<br>
<br>
Возьми в ларьке бутыль <br>
0,5 из пластика,<br>
Заделай дырку и насыпь <br>
Внутрь семена.<br>
<br>
<span class='blue'>Тк2-3м/жм - aaXa</span><br>
Два колпака — <br>
Хватит снегирю пока,<br>
Чтоб не откинул лапы <br>
В районе Эм-Эс-Ка.<br>
<br>
<span class='blue'>Тк2-3мж? - xAXA</span><br>
А как под ЕКБ <br>
Не околеть под вьюгой,<br>
Продолжит тему Ваня <br>
С литературного клуба.<br>
<br>
<span class='blue'>[Иван Ургант]<br></span>
Все говорят, Иван, <br>
Как накормить клеста?<br>
Чижа и дятла — им <br>
На зиму не улетать.<br>
<br>
Пусть для Витька АК <br>
Сойдет пак молока,<br>
Но лично мне по кайфу <br>
  Кормушки на века.<br>
<br>
Как напоить птенца — <br>
Вопрос для умника,<br>
Когда в аптеках пипеток <br>
Не купить никак.<br>
<br>
<span class='blue'>[Витя АК-47] Х3ж/ж - AAAA</span><br>
Прикупи с зарплаты <br>
Стаффчик для крылатых —<br>
Плюсик к твоей карме — <br>
Птички будут рады.<br>
<br>
<span class='blue'>[Иван Ургант & Витя АК-47 х2]<br></span>
Подлетай, братан, <br>
На корм налетай,<br>
Синица и глухарь,<br>
Хватайте на ротан.<br>
<br>
Витя АК, Иван <br>
Отсыпят всем с горою,<br>
Крепитеся, родные,<br>
Увидимся весною!<br>
<br>
<span class='blue'><a href="https://on-hit.ru/texts/tekst-pesni-vitja-ak-47-ivan-urgant-i-gudkov-kak-pravilno-kormit-ptic-zimoj/"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Она же "Советы, как правильно кормить птиц зимой".
Пародия на рекламный ролик <a href='azino.php'>"Азино три топора"</a> (вывешен на Youtube 7.09.2017).<br>
<br>
 Рифма д=м: "плАстика" - "семенА".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
