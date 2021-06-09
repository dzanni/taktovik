<?php
$title = 'Gidayyat, Gazan - Коронаминус (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/k7OOi0enljQ'";
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
- Братан, я придумал новый трек! Называем "Пепси-кольно"! Прикольно?
Братан, вкладываем три миллиона, взрываем Instagram, вот этот TikTok -
и мы становимся звездами! Чо ты смотришь?<br>
[Ведущий] Здравствуйте! Мы - студия новостей, и коротко о главном!<br>
[Ведущая] Коронаминус охватил более миллиона девушек по странам СНГ и Россию.<br>
- Дрянь какая-то!<br>
- Бро, я тебе говорю! Щас мы взорвем вот этот Instagram, TikTok'и! Будем крутыми звездами!<br>
- Хорошая, да?!<br>
- Она бомба! Бро, это все фигня!<br>
</span><br>

<span class='blue'>[Переход, Gidayyat] Тк22ц33м/ - AAAA</span><br>
Она бомба, она бомба!<br>
Эта девочка - анаконда!<br>
Окутала меня она вот так,<br>
Так, так откровенно!<br>
<br>
<span class='blue'>[Припев, Gidayyat] Тк4цж/ж? - AABB</span><br>
Давай, двигай, чем тебя мама наградила!<br>
Поправь корону, чтобы не давила!<br>
Она идеальная, но есть один минус!<br>
Минус, минус, корона - её минус!<br>
  <div class='refren'>
    <span class='blue'>Я23ж/ - AA</span><br>
    Корона - минус (м-м)<br>
    Корона - её минус (да)<br>
    Корона - минус (м-м)<br>
    Корона - её минус!</div>
Shake it, shake it - и давай двигай телом!<br>
В эту ночь я буду твоим супер, суперменом!<br>
Shake it, shake it - и она будто бомба!<br>
Эта девочка - анаконда! <span class='blue'>(Строка Тк2цж)</span><br>
<br>
<span class='blue'>[Куплет, Gazan] Тк5-7ж/м - AAAAbb</span><br>
Непокорная, сильная, дикая, сонная, вольная дама.<br>
Незаконная на всём побережье, былая мечта растамана.<br>
В одеянии, что всех доведёт до разгара без лютого плана.<br>
Забиваю тебя до краев в эту ночь, моя марихуана.<br>
По пятам в эту ночь я бродил и искал запах твой.<br>
На песках, на зыпучих горячих я вижу твой след и иду за тобой.<br>
<br>
<span class='blue'>[Переход, Gidayyat]</span><br>
Она бомба, она бомба!<br>
Эта девочка - анаконда!<br>
Окутала меня она вот так,<br>
Так, так откровенно!<br>
<br>
<span class='blue'>[Припев, Gidayyat]</span><br>
Давай, двигай, чем тебя мама наградила!<br>
Поправь корону, чтобы не давила!<br>
Она идеальная, но есть один минус!<br>
Минус, минус, корона - её минус!<br>
  <div class='refren'>
    Корона - минус (м-м)<br>
    Корона - её минус (да)<br>
    Корона - минус (м-м)<br>
    Корона - её минус!</div>
Shake it, shake it - и давай двигай телом!<br>
В эту ночь я буду твоим супер, суперменом!<br>
Shake it, shake it - и она будто бомба!<br>
Эта девочка - анаконда!<br>
<br>
<span class='blue'>[Финал, Gazan] Тк34цм/жм - aaXa</span><br>
Ты голодная, ты не скромна,<br>
Допивая свой бокал до дна.<br>
Я бы позабыл тебя, родная,<br>
Но, наверно, я сойду с ума!<br>
Зазвучала для меня струна,<br>
В твоем голосе дрожит она.<br>
Я бы позабыл тебя, родная,<br>
Но, наверно, я сойду с ума!<br>
 <br>
 <span class='blue'><a href='https://www.gl5.ru/g/gidayyat/gidayyat-gazan-koronaminus.html'
   target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
