<?php
$title = 'FACE - Мой Калашников (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/pbsPM_VsyRo'";
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
Ничего не страшно!<br>
Баю-бай, засыпай, мой Калашников!<br>
<br>
<span class='blue'>[Припев х2] Тк2м/ - aa, Тк4цмж/? - AA' <br></span>
Родись (эй), страдай (эй!) <br>
Умри (эй) и в рай (эй!)<br>
Нам-нам-нам ничего не страшно (нет!)<br>
Баю-бай, засыпай, мой Калашников!<br>
<br>
<span class='blue'>[Куплет 1] Тк4цм/ж - aa, AA<br></span>
Я проснулся, почистил свои зубы,<br>
Заказал еды, поцеловал тебя в губы.<br>
Я люблю домашний вайб, я не люблю клубы (не!)<br>
Молодая рок-звезда, поп-звезда — Губин (Андрей)<br>
Прошлый год гонял мой hair, будто бы Агутин (Леонид)<br>
Я не говорю про юмор, bitch, но мы shoot`им.<br>
Две шалавы с Волгограда просят меня вдуть им.<br>
Ха, опять? Нет, мы не будем!<br>
Ляжем спать, ведь нам дальше ехать по Югу.<br>
Зачем мне бляди, когда я страну пустил по кругу?<br>
«А ты Face? Можно фото?» — чья-то там подруга (ну да!)<br>
«Конечно, можно, не стесняйся, не такой уж грубый!»<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Родись (эй), страдай (эй!) <br>
Умри (эй) и в рай (эй!)<br>
Нам-нам-нам ничего не страшно (нет!)<br>
Баю-бай, засыпай, мой Калашников!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Меня воспитал отец, а не ксива!<br>
Я ради денег не приму позор корпоративов (никогда!)<br>
Guf разбил мне сердце, когда он мусорнулся.<br>
Ты серьёзно веришь, что нельзя сказать: «Я поскользнулся»?<br>
Ты настолько pussy, что снимаешь в Tik Tok?<br>
У меня Ярыгин, мне не нужен зарубежный Glock (не!)<br>
Я люблю свой район, я не говорю блок (Аврора)<br>
У меня на карте зелень, это вовсе не укроп.<br>
Оставайся человеком, даже если ты при бабках (да)<br>
Не позволяй другим сделать из себя тряпку (ага)<br>
Мой Калашников порубит тех, кто хочет в дамки.<br>
Тебе за 20, но ты не оторванный от мамки!<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Родись (эй), страдай (эй!) <br>
Умри (эй) и в рай (эй!)<br>
Нам-нам-нам ничего не страшно (нет!)<br>
Баю-бай, засыпай, мой Калашников!<br>
<br>
<span class='blue'><a href='https://genius.com/Face-my-kalashnikov-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
