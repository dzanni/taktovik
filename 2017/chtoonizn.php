<?php
$title = 'Егор Крид - Что они знают? (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/q5HxT5m38Zk'";
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

<span class='blue'>[Куплет 1] Ак4цж - AAAA<br></span>
Что они знают - те, кто меня не видел. <br>
Говорят за спиной без пауз, будто старый видик;<br>
И лезут в друзья те, кто раньше ненавидел.<br>
Столько фальши, я как в зале самый охуевший зритель.<br>
<div class='refren'>
И что они знают про моих родных и близких?<br>
Те, кто врёт при встрече - так трясёт, что может выстрелить игристым.<br>
Оптимистом будь при встрече с журналистом.<br>
Было так много друзей, но я выбрал путь солиста.<br>
Мой город Пенза, мой город-признак.<br>
Два-ноль-двенадцать, мне 17, я в Москве, как призрак.</div>
Я сам себе бросил вызов - <span class='blue'>(Строки Ак2ж)<br></span>
Поднять себя на релизах.<br>
И в голове, как головоломка, <br>
Перебираю идеи, будто бы я на иголках.<br>
<br>
<span class='blue'>[Переход] Л2м - aa<br></span>
И я... <br>
Не подбираю друзей <br>
Не понимаю, кто с ней.<br>
В любовь играют тут все. <br>
Время бежало быстрей.<br>
Я становился сильней, <br>
Хоть становилось больней.<br>
Я понимал, что нужней, <br>
Чтобы добавить нулей.<br>
Мне на удачу налей, <br>
Только быстрей!<br>
<br>
<span class='blue'>Х3м - aa<br></span>
Plug in on the beat!<br>
Это Егор Крид! (Крид! Крид!)<br>
<br>
<span class='blue'>[Припев x2] Тк34цмж - xAAbb<br></span>
Ты назовешь меня «попсой»,<br>
Но для твоей малышки я - любимый рэпер!<br>
Спроси ее о том, как любит мои треки.<br>
Концерты, альбомы, стиль,<br>
Цепь, клип, цель.<br>
<br>
<span class='blue'>[Куплет 2] Тк4ц3м - aa<br></span>
Мы начинали с нуля, теперь у руля.<br>
Всё, что хотел теперь у меня.<br>
Увидел её - теперь у меня.<br>
И тот, кто не верил - проверил меня и поверил в меня. <span class='blue'>(Строка Тк6цм)</span><br>
Новый альбом, новый этап, новый этаж. <span class='blue'>(Строка Тк6цм)</span><br>
Мы вылетаем, готов экипаж. <br>
Я это я, в пизду эпатаж. <br>
<br>
<span class='blue'>[Переход] Тк34цж - AAXA<br></span>
Я затеряюсь в одиноком доме.<br>
Так хочется порой уйти и ничего не помнить.<br>
Что впереди было взаперти, но кто запретит мне<br>
Перевернуть всё в своем альбоме?<br>
Стиль... Цель... <br>
<br>
<span class='blue'>[Припев x2]<br></span>
Ты назовешь меня «попсой»,<br>
Но для твоей малышки я - любимый рэпер!<br>
Спроси ее о том, как любит мои треки.<br>
Концерты, альбомы, стиль,<br>
Цепь, клип, цель.<br>
<br>
<span class='blue'><a href='https://www.gl5.ru/k/kreed/chto_oni_znaut.html'
  target='_blank'>Источник</a></span><br>



<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
