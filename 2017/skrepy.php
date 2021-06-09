<?php
$title = 'Каста - Скрепы (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/rVYtS_cp-yc'";
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

<span class='blue'>[Первый Куплет: Змей] Тк4цм/ж - aa, AA<br></span>
Я не закончил школу, влом было вставать к восьми<br>
Мама сказала: «Когда надо разбужу, поспи!»<br>
Я спал и видел, как я рву грелку на куски,<br>
Пока другим учителя капали на мозги.<br>
<div class='refren'>
Я набирался ума днём и ночью, пялясь в телик.<br>
Тягал металл, глотал метан, мама давала денег.<br>
Росла бицуха на глазах, и я глазам не верил,<br>
Пока других преподы прессовали в универе.</div>
Я не читал книжек, без них и так ума палата,<br>
Не знаю языков, но знаю - мой язык богатый.<br>
Мама сказала: «Всё, подъем, греби деньги лопатой!»<br>
И пристроила меня куда-то депутатом. <br>
<br>
<span class='blue'>[Припев х2: Хамиль, Шым] Тк4цжм - AAAx<br></span>
От колыбели и до могилы<br>
Мы хмурые как небо над Тагилом.<br>
Куда ни глянь - абсурд и дебилы.<br>
А-ха-ха, обстановка неплоха!<br>
<br>
<span class='blue'>[Переход х2: Влади] Тк2-6цмж - xAAAA<br></span>
Чё ты как чмо, чё ты как чёрт, чё ты не патриот?<br>
Ты чё, волчёнок, ты дохуя умный? Слышишь, ты чё, нах?<br>
Ты же крещёный, ну ты ж не копчёный, ну вот и всё нах!<br>
Хочешь быть порабощённым?<br>
Слышь, я тебе повторяю ещё раз!<br>
<br>
<span class='blue'>[Куплет 2: Шым] Дк4цм - aa<br></span>
Мы хотим плохих дорог, <br>
Мы хотим, чтоб нас гнули в рог<br>
Мы хотим жить не в прок, а в долг, <br>
Только чтоб задать урок!<br>
<div class='refren'>
Нашим заклятым врагам <br>
Понадавать по щекам!<br>
Всем они строят козни, <br>
Ну а всех больше нам!</div>
<span class='blue'>Дк3мж - aBaB<br></span>
И пускай ярмо тяжело, <br>
Но у нас есть скрепы-скрепы!<br>
Мы все здесь заодно, <br>
С нами деды из склепа!<br>
<div class='refren'>
  <span class='blue'>Дк4цм - aaxxaa<br></span>
Пусть наконец все узнают, что<br>
Есть на земле такой народ<br>
У которого есть царь, <br>
Над которыми есть бог,<br>
А с ними дикий чёрт, <br>
А нам всё нипочём!</div>
<span class='blue'>Дк2-4цжм - AbAbAb<br></span>
И если надо, мы намертво встанем <br>
Рядами к плечу плечо.<br>
А если ты не с нами, <br>
Тогда, приятель, подъем!<br>
Пора ноздрями <br>
Втянуть поглубже чернозём!<br>
<br>
<span class='blue'>[Припев х2: Хамиль, Шым]<br></span>
От колыбели и до могилы<br>
Мы хмурые как небо над Тагилом.<br>
Куда ни глянь - абсурд и дебилы.<br>
А-ха-ха, обстановка неплоха!<br>
<br>
<span class='blue'>[Переход х2: Влади]<br></span>
Чё ты как чмо, чё ты как чёрт, чё ты не патриот?<br>
Ты чё, волчёнок, ты дохуя умный? Слышишь, ты чё, нах?<br>
Ты же крещёный, ну ты ж не копчёный, ну вот и всё нах!<br>
Хочешь быть порабощённым?<br>
Слышь, я тебе повторяю ещё раз!<br>
<br>
Чё ты как чмо?<br>
<br>
<span class='blue'><a href='https://text-lyrics.ru/k1/kasta/7565-kasta-skrepi-text-pesni.html'
  target='_blank'>Источник</a></span><br>



<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
