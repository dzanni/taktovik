<?php
$title = 'Алексей Воробьев - Я тебя люблю (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/nZ8oA9-OQrg'";
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

<span class='blue'>[Припев] Л64цмж - aaBB<br></span>
Скажи мне: «Я тебя люблю, тебя люблю!»<br>
Скажи мне: «Я тебя люблю, тебя люблю!»<br>
Возьми ключи от рая и домофона,<br>
Пароль от сердца и телефона!<br>
<br>
<span class='blue'>[Куплет 1] Тк4цжм - AbAb<br></span>
Окей, ты с подругами у барной стойки<br>
А я в углу стою и у-у-у-у...<br>
Твое лицо в слезах и туши водостойкой,<br>
С тобой знакомиться иду-ду-ду-ду-ду...<br>
<div class='refren'>Окей, я пригласил пообниматся в танце,<br>
Но ты сказала не пойду-ду-ду-ду-ду...<br>
И, может быть, не сразу, но со второго взгляда<br>
Я понял, что тебя люблю-у-у-у-у...</div>
<br>
<span class='blue'>[Переход] Дв1-6м? - aXaxaxx<br></span>
Дай мне, дай мне, дай мне, дай мне только шанс!<br>
Послушай, <br>
Можно, можно, можно, можно не сейчас.<br>
Давай <br>
Завтра, завтра, завтра, завтра в тот же час<br>
Мы с тобой...<br>
Ау-у-у-у-у...<br>
<div class='refren'>Хочешь, хочешь, хочешь, хочешь, для тебя -<br>
Все эти <br>
Дни и ночи, как в песне Михайлова.<br>
Я хочу <br>
Очень, очень, очень, очень целовать <br>
Тебя!</div>
<br>
<span class='blue'>[Припев]<br></span>
Скажи мне: «Я тебя люблю, тебя люблю!»<br>
Скажи мне: «Я тебя люблю, тебя люблю!»<br>
Возьми ключи от рая и домофона,<br>
Пароль от сердца и телефона!<br>
<div class='refren'>Я тебя люблю, тебя люблю.<br>
Скажи мне: «Я тебя люблю, тебя люблю!»<br>
И чтобы не случилось в это время.<br>
Твоя прописка в моей квартире-е.</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Окей, я две недели за тобой гоняюсь<br>
И у двери стою и жду-у-у-у-у...<br>
Поскольку ты вчера жениться отказалась,<br>
Я завтра снова предложу-у-у-у-у.<br>
<div class='refren'>Не говори мне, что ты не накрашена:<br>
Из нас двоих ты не самая страшная.<br>
Когда мы станем умнее и старше, <br>
Я скажу, <br>
Что еще сильней тебя люблю.</div>
<br>
<span class='blue'>[Переход]<br></span>
Дай мне, дай мне, дай мне, дай мне только шанс!<br>
Послушай, <br>
Можно, можно, можно, можно не сейчас.<br>
Давай <br>
Завтра, завтра, завтра, завтра в тот же час<br>
Мы с тобой...<br>
Ау-у-у-у-у...<br>
<div class='refren'>Хочешь, хочешь, хочешь, хочешь, для тебя -<br>
Все эти <br>
Дни и ночи, как в песне Михайлова.<br>
Я хочу <br>
Очень, очень, очень, очень целовать <br>
Тебя!</div>
<br>
<span class='blue'>[Припев x2]<br></span>
Скажи мне: «Я тебя люблю, тебя люблю!»<br>
Скажи мне: «Я тебя люблю, тебя люблю!»<br>
Возьми ключи от рая и домофона,<br>
Пароль от сердца и телефона!<br>
<div class='refren'>Я тебя люблю, тебя люблю.<br>
Скажи мне: «Я тебя люблю, тебя люблю!»<br>
И чтобы не случилось в это время.<br>
Твоя прописка в моей квартире-е.</div>
<br>
Музыка: Алексей Воробьев<br>
Слова: Алексей Воробьев<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/alexey-vorobiev-ya-tebya-lublu.html'
  target='_blank'>Источник</a></span><br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
