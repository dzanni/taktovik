<?php
$title = 'Тимати ft. GUF - Поколение (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/0JbqWNfflKo'";
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

<span class='blue'>[Куплет 1: Тимати] Тк4ц3м/ж - хaхa, хAхA <br></span>
Вылетали панчи, словно Чак Норрис<br>
Зарядил ствол, вышел на охоту.<br>
Комментатор, короче, пора лечиться,<br>
И твой доктор здесь - «Тандум Верде Форте»!<br>
Я слышал, что Guf завязал,<br>
И если бы не шнурки - конечно, было бы супер!<br>
Взаимно, BlackStar - прецедент,<br>
Все охуели, но никто не умер!<br>
И мы здесь не случайно, время пришло,<br>
Это сигнал о том, что пора меняться.<br>
Поколение выросло, слушая рэп,<br>
Я все время забываю, что нам не двадцать.<br>
Послушай, старик, я как вспомню -<br>
Хотя ладно, ну было и было!<br>
В этой игре мы оставили след,<br>
Конгломерат - это сила!<br>
Молодёжь хочет хайпа, и это резонно,<br>
На нашем канале другие мосты.<br>
Чернила под кожей символизируют<br>
Десятилетие суеты.<br>
Мы все однажды проснемся<br>
И с разбегу войдем в новый век.<br>
И ты услышишь на «Русском радио»<br>
В горячей ротации наш новый трек.<br>
А пока тазы на районах<br>
Или «Майбахи» в центре Москвы<br>
В салонах делают громче.<br>
Салют, это Guf и Тимати!<br>
Я знаю, что ты уже слушал<br>
И кидал другим этот трек.<br>
Открытый вопрос к хозяину РАО:<br>
Когда он пришлет мне мой чек?<br>
Продюсер, ты можешь оправдываться,<br>
Что мы крутим YouTube и скупаем ITunes!<br>
Продюсер ты или лузер -<br>
Очень быстро определит интернет.<br>
Меня давно не волнуют столичные тусы,<br>
Где входы строго по спискам.<br>
Поколение Тимати - это народ,<br>
Увидимся в «Олимпийском»!<br>
<br>
<span class='blue'>[Припев: Тимати] Я4ц7м - aaaa<br></span>
Где я сейчас? И кто бы знал,<br>
С чего свой путь я начинал.<br>
Корабль мой шёл между скал,<br>
Но через шторм Всевышний мне путь верный указал.<br>
<div class='refren'>
<span class='blue'>Тк4ц3м - aa<br></span>
Всё начинается с простых рифм в голове,<br>
И уже завтра каждый город знает о тебе (Hay yo!)<br>
(Hay yo!) Все твоё имя кричат,<br>
(Hay, hay yo!) Те кто не верил – молчат!<br>
(Ещё)<br>
Всё начинается с простых идей на листе,<br>
И уже завтра ты увидишь поколениЕ.<br>
(Hay yo!) Те, кто с тобой до конца,<br>
(Hay, hay yo!) Те, кто не прячет лица!</div>
<br>
<span class='blue'>[Куплет 2: Guf] Тк2-4цм/ж - aa, AA<br></span>
Цветов не бывает без дождя,<br>
Всегда наступает день после ночи.<br>
Из зеркала смотрит на меня <br>
Тот, кто обещает во всем помочь.<br>
Если бежать, куда глаза глядят,<br>
Можно быстро оказаться на обочине,<br>
Но какое-то время спустя<br>
Надо подняться и разнести все в клочья!<br>
Это точно не я,<br>
Тот тип, на кого вам стоит равняться!<br>
Это точно не я<br>
Могу быть примером для молодой нации!<br>
Я кому-то мешаю,<br>
Родители мною пугают детей,<br>
Но вопреки всему я продолжаю <br>
Оставаться в этой игре по сей день!<br>
Время летит, сука,<br>
И с каждым годом летит все быстрее!<br>
Мечтаю увидеть внуков<br>
И со спокойной душой постареть.<br>
Мир полон слухов<br>
И нехваткой внимания я не болею.<br>
Это не совместка с лучшим другом,<br>
Это два разных слоя одного поколения!<br>
Я не из BlackStar`а<br>
И, вообще, записываюсь только с близкими.<br>
Я из подворотен и арок<br>
И не выступал никогда в «Олимпийском».<br>
Я далеко не подарок<br>
И не совсем понимаю, что я тут забыл,<br>
Но что-то мне подсказало,<br>
Что могут прокачаться обе толпы.<br>
Видимо, так и должно быть,<br>
Мы набираем жизненный опыт.<br>
Тиман у Володи только что был,<br>
Меня до сих пор слушают копы.<br>
Но мы оба отцы,<br>
Плюс мы оба давно повзрослели.<br>
И на таких, как мы,<br>
Смотрит внимательно наше поколение.<br>
Можете думать, что угодно,<br>
Но я уверен, что время покажет.<br>
И пускай не сегодня,<br>
Но однажды вы станете старше.<br>
Дела у меня супер,<br>
Вы лучше смотрите сюда:<br>
Там около клуба<br>
Стоит моя «Лада Седан».<br>
<br>
<span class='blue'>[Припев: Тимати]<br></span>
Где я сейчас? И кто бы знал,<br>
С чего свой путь я начинал.<br>
Корабль мой шёл между скал,<br>
Но через шторм Всевышний мне путь верный указал.<br>
<div class='refren'>
Всё начинается с простых рифм в голове,<br>
И уже завтра каждый город знает о тебе (Hay yo!)<br>
(Hay yo!) Все твоё имя кричат,<br>
(Hay, hay yo!) Те кто не верил – молчат!<br>
(Ещё)<br>
Всё начинается с простых идей на листе,<br>
И уже завтра ты увидишь поколениЕ.<br>
(Hay yo!) Те, кто с тобой до конца,<br>
(Hay, hay yo!) Те, кто не прячет лица!</div>
<br>
<span class='blue'>[Скит: Guf & Тимати] Тк3ж? -  ХAХA<br></span>
Весь молодой русский рэп<br>
Из штанов выпрыгивает, чтобы казаться моднее <span class='blue'>(Строка Тк4ц)<br></span>
- Да, старик, в наше время<br>
Новички вели себя поскромнее!<br>
Мы хотя бы следили за базаром<br>
И не одевались, как геи!<br>
- Но то, что мы не хотим меняться,<br>
Совсем не значит, что мы стареем!<br>
<br>
<span class='blue'>[Припев: Тимати]<br></span>
Где я сейчас? И кто бы знал,<br>
С чего свой путь я начинал.<br>
Корабль мой шёл между скал,<br>
Но через шторм Всевышний мне путь верный указал.<br>
<div class='refren'>
Всё начинается с простых рифм в голове,<br>
И уже завтра каждый город знает о тебе (Hay yo!)<br>
(Hay yo!) Все твоё имя кричат,<br>
(Hay, hay yo!) Те кто не верил – молчат!<br>
(Ещё)<br>
Всё начинается с простых идей на листе,<br>
И уже завтра ты увидишь поколениЕ.<br>
(Hay yo!) Те, кто с тобой до конца,<br>
(Hay, hay yo!) Те, кто не прячет лица!</div>
<br>
<span class='blue'><a href="https://genius.com/Timati-generation-lyrics"
  target="_blank">Источник</a><br></span>
<br>
<br>
N.B. д=ж: обОчина - клОчья.<br>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
