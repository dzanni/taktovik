<?php
$title = 'Анна Боронина - Королева караоке (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/o4hi-A6JEew'";
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

<span class='i'>[Звонок телефона]<br>
[Карина] Аллё! Аллё, Анютка, ты дома?<br>
[Анна] Ну а где ж мне быть еще?!<br>
[Карина] Я зайду?<br>
[Анна] Ну, заходи!<br>
[Звонок в дверь]<br>
[Карина] Короче, я всё придумала! Ща идем в караоке!<br>
[Анна] Ты с ума сошла? Какой караоке?!<br>
[Карина] Не, ну а чо? Новый год скоро?<br>
[Анна] Ну.<br>
[Карина] У тебя мужика нет!<br>
[Анна] Нет!<br>
[Карина] У меня мужика нет!<br>
[Анна] Нет!<br>
[Карина] Я в Новый год без мужика не хочу!<br>
[Анна] Ой, Карин!<br>
[Карина] Ну, Ань! Ну, смотри: ты баба хлрошая, я баба хорошая.
Ну чо, мы хороших мужиков не найдем?<br>
[Анна] В караоке?<br>
[Карина] Не, ну а чо? Мы горластые!<br>
[Анна] Ой!<br>
[Карина] Ну?<br>
[Анна] Ну-у, попеть можно!<br>
[Карина] И попеть можно, и попить можно! Ха-ха-ха!<br>
<br>
[Публика караоке поет:]<br>
<br>
Там шальная императрица<br>
В объятьях юных кавалеров забывает обо всем!<br>
Как будто вечно ночь будет длиться,<br>
Как будт разочарованье не наступит...<br>
<br>
Только...<br>
<br>
[Карина] О, Ань! Может, вот этот?<br>
<br>
 ...рюмка водки на столе!<br>
<br>
 [Анна] Хватит с меня алкашей!<br>
<br>
 Она сует себе в свой рот<br>
 Мой огромный хот-дог!<br>
 Эчкере!<br>
<br>
 [Карина] Тьфу, сука! Весь аппетит испортил!<br>
<br>
 Я еду на джипе!<br>
 Я еду на джипе!<br>
<br>
[Карина] О, Анек! А вот это наш пассажир! Давай!<br>
<br>
Я еду на джипе!<br>
Я еду на джипе!<br>
Я еду на джипе!<br>
<br>
[Анна] Походу, не только наш!<br>
<br>
Мы летим на "Сузуки" [неразб.]<br>
<br>
[Карина] Анька, вот это стопроцентный вариант!<br>
<br>
- Блин, Насть, помоги! <br>
- Леша как обычно, блин!<br>
<br>
[Карина] А он че, слеповат что ли?<br>
[Анна] Ага.<br>
<br>
- Да, блин, Насть, кольцо!<br>
- Да в жопу твое кольцо!<br>
- А-а-а, погоди!<br>
<br>
Ты же девочка-война!<br>
Ты падала, я тебя поймал!<br>
<br>
[Анна] А может, эти?<br>
[Карина] Анька, эти только про романтику поют! А потом это: принеси-подай, сиди дома - не мешай!
Может, ну их всех, а? Может, ты споешь, Ань?<br>
[Анна] Щас спою!<br></span>
<br>
<span class='blue'>[Вступление] Х34жм - AAbAXb<br></span>
На часах двенадцать - <br>
Время нарезаться, <br>
Словно овощи в салат. <br>
Весь день наряжалась. <br>
Я горю, как ёлка. <br>
Selfie шлю тебе в WhatsApp! <br>
 <br>
<span class='blue'>[Пост-припев] Я24мм - aabaab<br></span>
На Новый год,<br>
На Новый год, <br>
На Новый год ты не пришёл! <br>
На Новый год, <br>
На Новый год, <br>
На Новый год… <br>
 <br>
<span class='blue'>[Припев] Тк23мж - aBaB<br></span>
А я буду кричать (а я буду кричать а-а-а) <br>
Все свои любимые песни. <br>
Я не буду встречать (не буду встречать а-а-а) <br>
Этот новый Новый год с тобой вместе! <br>
А я буду кричать (а я буду кричать а-а-а) <br>
Все свои любимые песни. <br>
 <br>
<span class='blue'>[Куплет 1] Х4жм - AbAb<br></span>
Набираю я подругам,<br>
Пошёл ты на Новый год! <br>
Под окном такси и вьюга,<br>
Щас меня как развезёт! <br>
  <div class='refren'>Я себе желаю счастья<br>
  Под куранты и салют <br>
  Я устрою себе праздник,<br>
  Где много поют и пьют! </div>
 <br>
<span class='blue'>[Припев]<br></span>
И там я буду кричать (а я буду кричать a-a-a) <br>
Все свои любимые песни. <br>
Я хочу тебя послать (далеко-далеко о-о-о), <br>
Чтобы Новый год твой был в этом месте! <br>
 <br>
<span class='blue'>[Куплет 2]<br></span>
Залетаю в караоке, <br>
Вот настал мой звёздный час! <br>
Петь вне очереди буду <br>
И доставлю всем экстаз. <br>
  <div class='refren'>
    <span class='blue'>Х4ж/ж - AABB<br></span>
  После первого бокала<br>
  Королева я вокала; <br>
  После первой рюмки водки — <br>
  Королева караоке! </div>
 <br>
<span class='blue'>[Пост-припев]<br></span>
На Новый год! <br>
На Новый год! <br>
На новый-новый Новый год! <br>
На Новый год!<br>
На Новый год! <br>
На на-на-на-на новый! <br>
<br>
На Новый год! <br>
На Новый год! <br>
На Новый год!<br>
<br>
<span class='blue'>[Припев]<br></span>
А мы будем кричать (а мы будем кричать а-а-а) <br>
Все свои любимые песни. <br>
Не будем встречать (не будем встречать a-a-a) <br>
Этот новый-новый Новый год вместе! <br>
<br>

<span class='blue'>[Скит] Тк2м/ - aa<br></span>
— Давай, моя красотка! <br>
Рюмка водки - <br>
Ты королева караоке! <br>
Рюмка водки - <br>
Ты королева караоке! <br>
Рюмка водки - <br>
Ты королева караоке! <br>
Рюмка водки - <br>
Ты королева караоке! <br>
Всё! <br>
 <br>
<span class='i'>
[Анна] А вообще-то и неплохо быть одной! Свобода, мать, свобода!<br>
[Карина] Хы!<br>
[Мужик] Девушки, а можно вас проводить?<br>
[Карина] А вот и счастливый конец!<br>
[Анна] А точнее, два!<br>
[Обе] Пошли!<br></span>
 <br>
 <span class='blue'>[Припев]<br></span>
 А мы будем кричать (а мы будем кричать а-а-а) <br>
 Все свои любимые песни. <br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/b/borodina-anna/anna-boronina-koroleva-karaoke.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
