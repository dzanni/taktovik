<?php
$title = 'Тимати ft. L`One - АМГ (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/WE5s5pesKwM'";
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

<span class='blue'>[Припев: L’One и Тимати] Л24цм/ - aaaaaa<br></span>
Быстрый, словно АМГ (Хэ!) <br>
На Supreme LV (Э!)<br>
Мой кортеж валит боком по ночной Москве.<br>
В маске, словно ФСБ (У!) <br>
Приготовь лавэ (Э!)<br>
В твой город нагрянет скоро наша ОПГ (У!)<br>
<div class='refren'>Быстрый, словно АМГ, <br>
На Supreme LV<br>
Мой кортеж валит боком по ночной Москве.<br>
В маске, словно ФСБ, <br>
Приготовь лавэ!<br>
В твой город нагрянет скоро наша ОПГ!</div>
Быстрый, словно АМГ (У!)<br>
<br>
<span class='blue'>[Куплет 1: Тимати] Ак4цм/ж - aa, AA<br></span>
Я ничего не имею против любителей БМВ!<br>
Но мой кортеж знают в городе — это всегда АМГ (Е!)<br>
Это как, если твоя девочка хорошо готовит и всегда на стиле (А!)<br>
А моя имеет свой ресторан, плюс она Мисс России.<br>
Хороший понт дороже денег, но здесь скорее чистые факты.<br>
Твой грязный дрифт в комментариях только увеличит мне рекламные контракты.<br>
И не надо считать чужие деньги, а то ты будешь расстроен (У!)<br>
Жалей лучше о том (о чем?), что вложился в биткоин!<br>
Индустрия улыбается мне в лицо, но за спиной говорит говно (А!)<br>
Мот пел, что он был на дне, а я и есть дно (Да!)<br>
И пусть рыночное предложение определяет спрос (Ы!)<br>
Я лучше не попаду в музыкальный рейтинг, но возглавлю Forbes!<br>
<br>
<span class='blue'>[Припев: L’One и Тимати]<br></span>
Быстрый, словно АМГ (Хэ!) <br>
На Supreme LV (Э!)<br>
Мой кортеж валит боком по ночной Москве.<br>
В маске, словно ФСБ (У!) <br>
Приготовь лавэ (Э!)<br>
В твой город нагрянет скоро наша ОПГ (У!)<br>
<div class='refren'>Быстрый, словно АМГ, <br>
На Supreme LV<br>
Мой кортеж валит боком по ночной Москве.<br>
В маске, словно ФСБ, <br>
Приготовь лавэ!<br>
В твой город нагрянет скоро наша ОПГ!</div>
Быстрый, словно АМГ (У!)<br>
<br>
<span class='blue'>[Куплет 2: L’One] Тк4цмм - abab<br></span>
Пол ляма на руке, под жопой быстрый конь (Конь!)<br>
Я поднимаю пыль, я поднимаюсь вверх (Вверх!)<br>
Пусть хейтер в Инстаграме поднимает вонь (Вонь!)<br>
Я поднимаю тост за своих парней (Эй!)<br>
<div class='refren'>
<span class='blue'>Тк4цм/ж - aa, AA<br></span>
На свежей паре максов - чемпион двора,<br>
Я чувствую себя пиздато, и вам «Не хворать!»<br>
Попутный ветер дует в спину, шелестит лавэ (Э!)<br>
Один из первых у Дудя, первый в игре!<br>
Жан-Мишель Баския, я ломаю формы (Я!)<br>
Новый миллион, я на пике формы (У!)<br>
Либо суетишь, либо сидишь ровно (Ровно!)<br>
Формула 1, лидер пильетона (Ууу!)</div>
<br>
<span class='blue'>[Припев: L’One и Тимати]<br></span>
Быстрый, словно АМГ (Хэ!) <br>
На Supreme LV (Э!)<br>
Мой кортеж валит боком по ночной Москве.<br>
В маске, словно ФСБ (У!) <br>
Приготовь лавэ (Э!)<br>
В твой город нагрянет скоро наша ОПГ (У!)<br>
<div class='refren'>Быстрый, словно АМГ, <br>
На Supreme LV<br>
Мой кортеж валит боком по ночной Москве.<br>
В маске, словно ФСБ, <br>
Приготовь лавэ!<br>
В твой город нагрянет скоро наша ОПГ!</div>
Быстрый, словно АМГ (У!)<br>
<br>
<span class='blue'>[Бридж: L’One и Тимати] Дк2ж/ - AA<br></span>
Очень быстрый (очень быстрый), <br>
Слишком быстрый (Е!)<br>
Кэш чистый (А!), <br>
Очень чистый!<br>
Пневма низко (У!) <br>
Летят искры (Ррр!)<br>
Выхлоп, выстрел (Йа!) <br>
Заправляй канистры (Поу!)<br>
<br>
<span class='blue'>[Припев: L’One и Тимати]<br></span>
Быстрый, словно АМГ (Хэ!) <br>
На Supreme LV (Э!)<br>
Мой кортеж валит боком по ночной Москве.<br>
В маске, словно ФСБ (У!) <br>
Приготовь лавэ (Э!)<br>
В твой город нагрянет скоро наша ОПГ (У!)<br>
<div class='refren'>Быстрый, словно АМГ, <br>
На Supreme LV<br>
Мой кортеж валит боком по ночной Москве.<br>
В маске, словно ФСБ, <br>
Приготовь лавэ!<br>
В твой город нагрянет скоро наша ОПГ!</div>
Быстрый, словно АМГ (У!)<br>
<br>
<span class='blue'><a href='https://genius.com/Timati-amg-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>