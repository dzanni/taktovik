<?php
$title = 'Макс Барских - Сделай громче (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/GBdClafpLrI'";
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

<span class='i'><br>
- Вы знаете, у меня двое сыновей.<br>
- Двое близнецов.<br>
- Да. Они...<br>
- И они самые непохожие друг на друга!<br>
- Не похожи, совершенно не похожи.<br>
- Когда один плачет, другой спит.<br>
- А другой спит, да.<br>
- И однажды с ними что-то произошло!<br>
- Да, откуда вы знаете это?!<br>
- Я знаю всё!<br>
- Вы понимаете, это могло перерасти в настоящую трагедию.
Два сына-близнеца, и вдруг полюбили одну и ту же девушку!<br>
- Но-о-о!<br>
- Но!<br>
- Она влюбилась совсем в другого парня!<br>
- Да!<br>
- Видите, как всё хорошо получается!<br>
- То есть, Вы...<br>
- Да, я знаю всё! Я знаю историю этой девушки и этого парня,
- и даже Ваших будущих правнуков.<br>
- У меня будут правнуки?<br>
- Конечно! Трое: две девочки и один мальчик.
Но это уже совсем другая история.<br>
- Я бы хотела их увидеть!<br>
- Увидишь! Вы будете дружить. Будете ходить в один детский сад.
Они, кстати, будут тебя очень любить и оберегать.<br>
- А если...<br>
- Нет. У каждого свой путь. Тебе пора начать новое путешествие.<br>
- Но если я прожила так много жизней, почему я ничего не помню?
Почему я не помню ни одной из них?<br>
- Очень скоро я нажму тебе вот сюда, и ты не будешь помнить ничего,
что происходит сейчас. Нам пора!<br>
- И даже Вас?<br>
- Угу.<br>
- А как же я буду знать, что Вы рядом, что помогаете мне?<br>
- А ты сделай стук своего сердца громче, и живи так, как чувствуешь.
Это и буду я.<br>
<br>
 - А ты сделай стук своего сердца громче... Стук своего сердца громче...
И живи так, как чувствуешь...<br>
- Я мечтаю стать режиссером.<br>
- Я мечтаю стать полицейским.<br></span>
<br>
<span class='blue'>[Припев] Тк4цмж, Тк4жм - aBaB, AbAb<br></span>
Времена идут, а я не тороплюсь,<br>
Коротаю дни у подножья ночи.<br>
Если кто-то вдруг твой выключил звук,<br>
Посмотри в глаза и сделай громче!<br>
<div class='ref'>
Сделай громче! Сделай громче!<br>
Сделай громче! Пусть запомнят звук!<br>
Сделай громче! Сделай громче!<br>
Сделай громче! И никого вокруг!</div>
<div class='ref1'>
Сделай громче! Сделай громче!<br>
Сделай громче! Пусть запомнят звук!<br>
Сделай громче! Сделай громче!<br>
Сделай громче! И никого вокруг!</div>
<br>
<span class='blue'>[Куплет 1] Дк4цмж - aBaB<br></span>
Я ухожу за поворот,<br>
Этот город незнакомый.<br>
Никто не любит, никто не ждет,<br>
Здесь не осудят и не вспомнят.<br>
<br>
<span class='blue'>[Переход] Тк4цжм? - AbAb<br></span>
Ай-йа-я теперь не местный,<br>
Ай-йа-я сегодня сам по себе.<br>
И йа-я не жду совета,<br>
Я иду на своей волне, на своей волне. <span class='blue'>(строка Тк5цм)</span><br>
<br>
<span class='blue'>[Припев]<br></span>
Времена идут, а я не тороплюсь,<br>
Коротаю дни у подножья ночи.<br>
Если кто-то вдруг твой выключил звук,<br>
Посмотри в глаза и сделай громче!<br>
<div class='ref'>
Сделай громче! Сделай громче!<br>
Сделай громче! Пусть запомнят звук!<br>
Сделай громче! Сделай громче!<br>
Сделай громче! И никого вокруг!</div>
<br>
<span class='blue'>[Куплет 2]<br></span>
Я остаюсь верен себе,<br>
Пусть иногда бываю грубым.<br>
Я не боюсь быть в тишине,<br>
Быть незаметным и ненужным.<br>
<br>
<span class='blue'>[Переход]<br></span>
Ай-йа-я теперь не местный,<br>
Ай-йа-я сегодня сам по себе.<br>
И йа-я не жду совета,<br>
Я иду на своей волне, на своей волне.<br>
<br>
<span class='blue'>[Припев]<br></span>
Времена идут, а я не тороплюсь,<br>
Коротая дни у подножья ночи.<br>
Если кто-то вдруг твой выключил звук,<br>
Посмотри в глаза и сделай громче!<br>
<div class='ref'>
Сделай громче! Сделай громче!<br>
Сделай громче! Пусть запомнят звук!<br>
Сделай громче! Сделай громче!<br>
Сделай громче! И никого вокруг!</div>
<div class='ref1'>
Сделай громче! Сделай громче!<br>
Сделай громче! Пусть запомнят звук!<br>
Сделай громче! Сделай громче!<br>
Сделай громче! И никого вокруг!</div>
<br>
<span class='blue'>Дв4м? - abab<br></span>
Ай-яй, сделай громче, что ль,<br>
Сделай громче, что ли, звук!<br>
Ай-яй, сделай громче, что ль,<br>
Сделай громче, что ли, звук<br>
<br>
<span class='blue'>[Куплет 3] Дк24цмж - aBaB<br></span>
Говорю себе - <br>
В моих честных словах рождается сила,<br>
Не поможет, нет: <br>
Все люди бывают невыносимы.<br>
Я иду на свет <br>
И всегда понимаю, что мне надо,<br>
Я не слышу всех, <br>
Кто тянет меня развернуться обратно.<br>
<br>
<span class='i'>Всегда любил этот звук.<br>
Сотни поездов везут тысячи душ
в новые жизни.<br></span>
<br>
<span class='blue'><a href='https://www.gl5.ru/max-barskih-sdelai-gromche.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>