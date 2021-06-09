<?php
$title = 'FACE - Рэйман (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/Kbvo9qMHDXA'";
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
<span class='blue'>[Припев x2] Тк34цжм - AAAbAAAb</span><br>
Я в очках Louis Vuitton, это не Ray-Ban!<br>
Я звезда в Голливуде – Рональд Рейган.<br>
Я бегу от мусоров, будто Рэйман.<br>
И ты хочешь быть со мной, ла ла ла ла лэй!<br>
<br>
<span class='blue'>[Куплет 1] Тк4-5цм/, Тк4-5цж/ - aaaa, AAAA</span><br>
Сделал брата богатым, опустошаю ЦУМ.<br>
Сегодня настроение что-то подарить отцу.<br>
Молодой FACE, я влюблен в пару крупных сумм.<br>
Если мой альбом выходит, то на первом месте в BOOM!<br>
  <div class='refren'>Эй! И на первом месте в Apple. <span class='blue'>(Строка Тк3ж)</span><br>
  Не думал, что зайду так далеко со своим рэпом.<br>
  Я сам себе хозяин, но спасибо моим фэнам,<br>
  Благодаря им всем я скоро выйду на арены.</div>
<br>
<span class='blue'>[Переход] Тк2-4цж/ - AAAA</span><br>
Мне так смешно наблюдать за вами!<br>
Из твоей зарплаты сделал оригами.<br>
Мое сердце покрыто снегами,<br>
Бриллианты – цунами.<br>
<br>
<span class='blue'>[Припев x2]</span><br>
Я в очках Louis Vuitton, это не Ray-Ban!<br>
Я звезда в Голливуде – Рональд Рейган.<br>
Я бегу от мусоров, будто Рэйман.<br>
И ты хочешь быть со мной, ла ла ла ла лэй!<br>
<br>
<span class='blue'>[Куплет 2]</span><br>
Каждый хочет немного, а я хочу всю планету.<br>
Мой “макаров” тебя скурит, будто сигарету.<br>
Когда у вас зима, то я устрою себе лето.<br>
Я на Филиппинах, так банально ехать на Пхукет!<br>
  <div class='refren'>Не купил машину, не купил себе дом,<br>
  Я не знаю, как потратить очередной миллион.<br>
  Я обычный парень, я могу пойти косить газон.<br>
  Боже, сделай так, чтоб мои братья не нарушали закон!</div>
Ха! (О да!) Ты пахнешь очень вкусно! <span class='blue'>(Строка Тк3ж)</span><br>
Быть с тобой вместе – одни плюсы!<br>
Остальные, кто вокруг тебя, просто мусор.<br>
Я хитмейкер, называй меня Тима Белорусских!<br>
<br>
<span class='blue'>[Переход] Л3м/? - aaaA</span><br>
Я хотел быть с тобой всегда,<br>
Но сегодня не вытерплю час.<br>
Ну и как я тебе сейчас?<br>
Эта сука–гимнаст хочет кассу!<br>
<br>
<span class='blue'>[Припев x2]</span><br>
Я в очках Louis Vuitton, это не Ray-Ban!<br>
Я звезда в Голливуде – Рональд Рейган.<br>
Я бегу от мусоров, будто Рэйман.<br>
И ты хочешь быть со мной, ла ла ла ла лэй!<br>
  <br>
<span class='blue'>Источник: официальный текст под клипом Youtube</span><br>
  <br>
  <br>
P.S. Слоговой [л]: Apple = Эп-Л.   <br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
