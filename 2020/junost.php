<?php
$title = 'Dabro - Юность (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/aqsgyOhrRMY'";
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

<span class='i'>
- Саня! Сань! Саня!<br>
- Да тихо ты! Здорово!<br>
- Ну чо ты, идешь?<br>
- Н знаю, ща... Подожди! Мам, в магазин не надо?<br>
- Да нет, вроде не надо.<br>
- Картошки, вот, мало!<br>
- Да где мало?! Гулять позвали?<br>
- Ну да!<br>
- Ну сходи, сынок!<br>
- А скока взять-то?<br>
- В магазин можно и потом сходить, а юности у тебя потом не будет!<br></span>
<br>

<span class='blue'>[Припев х2] Ан2мм - abab</span><br>
Звук поставим на всю, <br>
И соседи не спят!<br>
Кто под нами внизу,<br>
Вы простите меня!<br>
  <div class='refren'>А потом, о любви <br>
  Говорить до утра.<br>
  Это юность моя, <br>
  Это юность моя!</div>
<br>
<span class='blue'>[Куплет 1] Я6мж - aBaB</span><br>
Знаю, мы сегодня точно не уснём!<br>
Знаю, будем до утра смотреть на звёзды!<br>
Тебя греют мои руки, и костёр<br>
Так красиво поднимает искры в воздух!<br>
<br>
<span class='blue'>Д3мм - abab</span><br>
Ветер ласкает глаза, <br>
Солнце уходит в закат<br>
Кто был со мной до конца, <br>
С теми ни шагу назад!<br>
  <div class='refren'>И вот мы стали сильней, <br>
  Но накрывает тоска.<br>
  Я соберу всех друзей, <br>
  И тогда <span class='blue'>(Строка Х2м)</span><br></div>
<br>
<span class='blue'>[Припев х2]</span><br>
Звук поставим на всю, <br>
И соседи не спят!<br>
Кто под нами внизу,<br>
Вы простите меня!<br>
  <div class='refren'>А потом, о любви <br>
  Говорить до утра.<br>
  Это юность моя, <br>
  Это юность моя!</div>
<br>
<span class='blue'>[Куплет 2] Х5м/ - a</span><br>
Слышит музыку уже весь двор,<br>
И мы ставим это на повтор.<br>
<br>
<span class='blue'>Тк4цм/м</span><br>
Ревёт мотор, катим вперёд!<br>
В центре уже отдыхает народ.<br>
Эй, прибавляй звук, настежь окно!<br>
Снова на всю из колонок Dabro!<br>
Пара друзей, также подруг,<br>
Не предам их и на сердце мечту!<br>
Две белые косички подлетают наверх -<br>
Я тебя целую в губы, и ты в ответ!<br>
Подходи ко мне и только закрывай дверь,<br>
Я хочу побыть с тобою наедине!<br>
За стеной бит и бас гремит - йе, йей!<br>
Мы снова не спим, пока весь город спит.<br>
И я знаю одно - наше время летит!<br>
<br>
<span class='blue'>[Переход] Х4мм - abab<br></span>
Ты просто обещай <span class='blue'>(Строка Тк2м)<br></span>
Не грустить и улыбнись,<br>
Никогда не забывай <br>
И ещё почаще снись!<br>
  <div class='refren'>Буду новой встречи ждать <br>
  И скучать за блеском глаз.<br>
  Будет всё, ну а пока <br>
  Давай, как в последний раз!</div>
<br>
<span class='blue'>[Припев х2]</span><br>
Звук поставим на всю, <br>
И соседи не спят!<br>
Кто под нами внизу,<br>
Вы простите меня!<br>
  <div class='refren'>А потом, о любви <br>
  Говорить до утра.<br>
  Это юность моя, <br>
  Это юность моя!</div>
<br>
<span class='blue'>[Проигрыш]</span><br>
<br>
<span class='blue'>[Припев]</span><br>
Звук поставим на всю, <br>
И соседи не спят!<br>
Кто под нами внизу,<br>
Вы простите меня!<br>
  <div class='refren'>А потом, о любви <br>
  Говорить до утра.<br>
  Это юность моя, <br>
  Это юность моя!</div>
  <br>
<span class='blue'><a href='https://www.gl5.ru/d/dabro/dabro-junost.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
