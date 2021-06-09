<?php
$title = 'Время и Стекло - Тролль (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/q--5Ht49vNY'";
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
Это время и с...<br>
Это время...<br>
Это время и...<br>
<br>
<span class='blue'>[Куплет 1] Л2ж?, Л43м, Тк3жм - ABAB, aaaa, AbAb</span><br>
Сломанная лапка, <br>
Ожерелье, диадема.<br>
Ты оказался тряпкой, <br>
Я жалею что хотела<br>
<div class='refren'>Быть с тобой, бы-быть с тобой!<br>
Никогда нам не быть с тобой!<br>
Быть с тобой, бы-быть с тобой!<br>
Никогда нам не быть с тобой!</div>
<div class='refren1'>По-любому я с тобой не буду!<br>
По-любому я не буду с тобой!<br>
Полюбила в полумраке я друга,<br>
Полупринц или полукороль!</div>
<br>
<span class='blue'>[Припев] Х6цу1м - aa</span><br>
Ты меня не тролль! Ты меня не тролль!<br>
Видишь, как любовь убивает боль!<br>
Ты меня не тролль!<br>
Ты меня не тролль! (Послушай!) Ты меня не тролль!<br>
Видишь, как любовь убивает боль!<br>
Ты меня не тролль!<br>
<br>
<span class='blue'>[Интро]<br></span>
Это время и с...<br>
Это время...<br>
Это время и...<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
У тебя не всё в порядке <br>
C языком твоего тела.<br>
Сломанная лапка, <br>
Ожерелье, диадема.<br>
<div class='refren'>И никогда нам не быть с тобой!<br>
Быть с тобой, бы-быть с тобой!<br>
Никогда нам не быть с тобой!</div>
<div class='refren1'>По-любому я с тобой не буду!<br>
  По-любому я не буду с тобой!<br>
Полюбила в полумраке я друга,<br>
Полупринц или полукороль!</div>
<br>
<span class='blue'>[Припев]</span><br>
Ты меня не тролль! Ты меня не тролль!<br>
Видишь, как любовь убивает боль!<br>
Ты меня не тролль!<br>
Ты меня не тролль! (Послушай!) Ты меня не тролль!<br>
Видишь, как любовь убивает боль!<br>
Ты меня не тролль!<br>
<br>
<span class='blue'>[Куплет 3] Тк1-3ж, Тк34цм/ж - ABAB, aa, AA</span><br>
В наше время парни стали<br>
Слабенькими, на мужчин пароди-ями!<br>
Всех пока не потеряли, <br>
Мы должны всё по местам расставить. <br>
Погнали!<br>
<div class='refren'>Уровень, каждый день мужчин меньше всё<br>
Дурам ведь некому поплакаться в плечо<br>
Будет ведь офигенная проблема<br>
Сломанная лапка, ожерелье, диадема!<br>
Почему им всем везёт?<br>
Он её на мерсе в кино везёт!<br>
Платье с плеча сползет немножко -<br>
И она к нему ползёт, как кошка!<br>
Хоть раз бы так у нас было с тобой -<br>
Я с удовольствием сыграла б эту роль!<br>
Давай с тобой договоримся про пароль:<br>
Ты меня не тролль! Ты меня не тролль тоже!<br></div>
<br>
Ты меня не тролль!<br>
<br>
По-любому я с тобой не буду!<br>
По-любому я не буду с тобой!<br>
Полюбила в полумраке я друга,<br>
Полупринц или полукороль!<br>
<br>
<span class='blue'>[Припев]</span><br>
Ты меня не тролль! Ты меня не тролль!<br>
Видишь, как любовь убивает боль!<br>
Ты меня не тролль!<br>
Ты меня не тролль! (Послушай!) Ты меня не тролль!<br>
Видишь, как любовь убивает боль!<br>
Ты меня не тролль!<br>
<br>
<span class='blue'>[Интро]<br></span>
Это время и...<br>
Это время...<br>
Это время и...<br>
Это время...<br>
Это время и...<br>
<br>
<span class='blue'><a href="https://text-lyrics.ru/v1/time-glass/7864-vremya-i-steklo-trollj-text-pesni.html"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. Композиция была <a href='https://youtu.be/v8s5Uh47XbM'
target='_blank'>обвинена в плагиате припева</a> - заимствовании мелодии
песни Бритни Спирс <a href='https://youtu.be/elueA2rofoo'
  target='_blank'>"Gimme More"</a> (клип вывешен в 2009 г.), хотя сходство их дискуссионно.<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
