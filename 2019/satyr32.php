<?php
$title = 'Satyr - OXXXYMIRON. Пародия #32 (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/FQR4Cz45yIE'";
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

<span class='i'> - Оксимирон... Я считаю так.<br>
<br>
Быть мужиком -<br>
Не значит, уверенно бить молотком<br>
Или жить за станком.<br>
Быть мужиком - <br>
Не значит, спешить в военком,<br>
Чтобы духов душить сапогом.<br>
Не надо об руку тушить угольком,<br>
Навеки вступая в братство.<br>
Чтоб мужества понабраться,<br>
Не нужно в фонтанах драться.<br>
<br>
- Сейчас, секунду, попью...<br>
<br>
Можно быть снаружи задротом, <br>
Что на вид, как услужливый ботан,<br>
И дружит лишь с дотой,<br>
А внутри - отборным мужчиной, <br>
А не с грудой накачанных мышц отборным дубиной.<br>
Можно жить с редкой смешной бородкой,<br>
В штанах с черенком коротким,<br>
Но силу иметь - размер огромный - <br>
В своей черепной коробке.<br>
Мужчину определяют поступки -<br>
Это самая важная хрень.<br>
И я совершаю такие,<br>
Как минимум, каждый день.<br>
<br>
- Оксимирон? <br>
<br>
</span>
<br>
<span class='blue'>[Куплет 1] Тк4цм/ж - aa,AA<br></span>
Я пришёл тебя предупредить, <span class='blue'>(Строка Тк3м)<br></span>
Что в будущем твоя «Империя» в пизду летит,<br>
Не оттого, что ты набрал туда бездушный shit,<br>
А оттого, что ею правит старый душный тип (а!)<br>
Если поверишь, что в баттлах ты КМС,<br>
Тебя погубит слава - и это Слава КПСС (ой),<br>
После баттла станет точно всем ясно,<br>
Что в этой жизни ты умеешь только ебаться.<br>
Хочешь знать, кому в Горгороде станет грустно?<br>
Кто останется с тобой из твоей старой тусы?<br>
Лишь один - и не потому, что самый трушный:<br>
Он не понял всех зашкваров - ведь не знает русский.<br>
Когда выстрелишь - не вздумай попасть в телек,<br>
Дорожку там постелят, но тут же и пасть склеят.<br>
И спустя время ты будешь и сам верить,<br>
Что манифест - это фестиваль денег.<br>
<br>
<span class='blue'>[Припев] Тк4цм/? - aaaa<br></span>
Я пришёл к тебе как к Гамлету мёртвый отец,<br>
Рассказать о том, что твой твёрдый протест<br>
Быстро превратится в тёплый насест,<br>
А тёмный подъезд - в огромный дворец.<br>
Этот отречённый и классовый изгой<br>
Станет утонченной и пафосной звездой.<br>
Ты не увлёк за собой, а увлёкся собой<br>
И проёб свой огонь. <span class='blue'>(Строка Тк2м)<br></span>
<br>
<span class='blue'>[Куплет 2]<br></span>
Чтобы все твои зашквары вспомнить - это<br>
Не хватит клипа - надо снимать полный метр.<br>
Хотя, стоп - ведь эта киношка есть,<br>
Её снял Рома Жиган - твой ближайший кент.<br>
Где тот Мирон из треков, типа «Я хейтер»?<br>
Сейчас это чувак с еблом типа «Я ментор»!<br>
Ты был новатором, когда был рэп а-ля CENTR.<br>
Сейчас новатор — Локимин, он поменял гендер.<br>
Эй, тебе говорила бабушка - не трогай голубей.<br>
Они всё обосрут, так и не взлетев.<br>
Но под их строки дёргался довольный твой еблет,<br>
Хуёвый баттл-рэп - ты год это терпел.<br>
А Готэм-то не Тверь, как Колфилд набекрень,<br>
Как морфий на ячмень в каморке для бичей.<br>
Давай, пожалста, без этих отличных идей!<br>
Строки для элиты заебут обычных людей.<br>
<br>
<span class='blue'>[Припев]<br></span>
Я пришёл к тебе как к Гамлету мёртвый отец,<br>
Рассказать о том, что твой твёрдый протест<br>
Быстро превратится в тёплый насест,<br>
А тёмный подъезд - в огромный дворец.<br>
Этот отречённый и классовый изгой<br>
Станет утонченной и пафосной звездой.<br>
Ты не увлёк за собой, а увлёкся собой<br>
И проёб свой огонь.<br>
<br>
<span class='i'>
- Я надеюсь, ты всё понял?<br>
- Это же просто ужасно! Нахуя ты побрился налысо?! <br>
- Причем тут это? Ты понял, что я тебе говорил?.. Моё время на исход!<br>
- Какое уродство! Никогда так не сделаю!
</span><br>
<br>
Музыка: Vendetta Beats<br>
Текст: Илья Шабельников, Сергей Дьячков <br>
<br>
<span class='blue'><a href='https://genius.com/Satyr-oxxxymiron-32-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>