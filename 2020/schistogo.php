<?php
$title = 'Тимати ft. Григорий Лепс - С чистого листа (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/bCkHReSzK_Q'";
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

<span class='i'>
- А мы тем временем переходим к номинации "Лучший..."<br>
[Григорий Лепс] Ну, поздравляю!<br>
[Тимати] Спасибо! Спасибо!<br>
[Григорий Лепс] Ты хоть рад?<br>
[Тимати] Конечно, я двадцать лет, двадцать лет шел к этой стекляшке с железкой!<br>
[Григорий Лепс] Двадцать лет! Сегодня были и молодые артисты, и не очень молодые,
и известные, и не очень известные - ты всех обошел! Это было непросто!<br>
[Тимати] Да, это было непросто... ну, и не очень сложно! Ха-ха-ха!<br>
[Григорий Лепс] Ах, вот как ты заговорил! Понятно. Ну, хорошо.
Ну, а ты бы смог бы, скажем, все вот это вот начать с нуля?<br>
[Тимати] Типа, с чистого листа?<br>
[Григорий Лепс] Ну да!<br>
[Тимати] Ха-ха! Мой каждый новый день - как с чистого листа! О чем ты говоришь?!
Конечно. Легко!<br>
[Григорий Лепс] Легко?<br>
[Тимати] Пойдем.<br>
[Григорий Лепс] Ну, пойдем... Ну-ну!<br>
<br>
- Тимур, Саша, это я! Откройте дверь!.. Открывайте дверь!.. Здравствуйте, Тимур,
ну наконец-то! Ну нельзя же так! Я пришла за своими деньгами. Я надеюсь, вы мне сегодня
их отдадите, да? Ну, сегодня пятнадцатое число. Ну, что вы на меня смотрите? Ну... ну... ну,
нельзя же так! Ну вы... извините, ну, я же не могу каждый раз стоять по полчаса под дверью
собственной квартиры, чтобы получить от вас деньги! Если нет денег, то вы мне скажите и
съезжайте, я возьму других арендаторов. Я вас очень хорошо понимаю, но мне то...<br>
</span>
<br>
<span class='blue'>[Вступление]</span><br>
Е!<br>
<br>
<span class='blue'>[Куплет 1, Тимати] Тк4цм/ж - aa, AA</span><br>
Сколько разных людей, когда всё хорошо<br>
Вокруг тебя, и сколько будет их ещё.<br>
Не надо говорить: "Спасибо, что пришёл!"<br>
Все и так в курсе, уже накрыт стол.<br>
  <div class='refren'>Ты открываешь шоу - это момент триумфа.<br>
  Тебя ждали, как возвращение Колумба.<br>
  Но потихоньку, незаметно тает вечер.<br>
  Все исчезают, постепенно гаснут свечи.</div>
Проблема смотрит из-за угла <span class='blue'>(Строка Тк3м)</span><br>
Уже сегодня прямо в твои глаза.<br>
Пасмурно вокруг, скоро рассвет.<br>
Ты оглянулся, а никого рядом нет.<br>
  <div class='refren'>Один на один со счетами, <span class='blue'>(Строка Тк3ж)</span><br>
  Мыслями и промахами, разбитыми мечтами.<br>
  И записную книжку пока листаешь взглядом -<br>
  Рядом появится тот, кого зовёшь ты братом.</div>
<br>
<span class='i'>
[Григорий Лепс] Тима! Мой старый друг! Рад тебя видеть!<br>
[Тимати] Гриша!<br>
[Григорий Лепс] Э.<br>
[Тимати] Ты меня узнаёшь?<br>
[Григорий Лепс] Конечно!<br>
[Тимати] Меня никто не узнаёт! Я по улице хожу, меня никто не узнаёт! Что происходит?<br>
[Григорий Лепс] Ну, ты же говорил, что можешь начать с нуля. "Легко!" Держи!<br>
[Тимати] Я сейчас выйду на сцену, спою одну свою песню, и всё встанет на свои места.
Ты понял?<br>
[Григорий Лепс] Легко!.. Он заплатил?<br>
[Тимати] <br>
<br>
<span class='blue'>Л23жм? - AAbAxb</span><br>
Тону в мартини,<br>
Моя плотина<br>
У реки твоей на пути.<br>
Ищу причины<br>
Остаться здесь<br>
И ищу причины уйти.<br>
  <div class='refren'>
  <span class='blue'>Тк4цм/ - aa</span><br>
  Не сходи с ума, не жалей ни о чём!<br>
  Глупая, ведь ты мне всё простишь потом (е)</div>
<br>
Если я один раз смог сам всего добиться, я добьюсь и второй раз! Вот увидишь!... Саша?
Что ты здесь делаешь? <br>
[Саша] Что я здесь делаю все эти годы? Нам не о чем больше говорить.
Придурок!<br>
</span>
<br>
<span class='blue'>[Переход, Григорий Лепс] Л3мж - aBa(B)</span><br>
И если сбился с пути,<br>
И жизнь в тупик заводит -<br>
Ты просто мне набери!<br>
<br>
<span class='blue'>[Припев, Григорий Лепс] Х35мм - aaabxxb</span><br>
С чистого листа. <br>
Всё начать с нуля.<br>
Пусть пугает старт, <br>
Мы с тобою не опустим рук!<br>
Встав плечом к плечу, <br>
Встретим новый день.<br>
Знай, что я всегда с тобой, мой друг!<br>
<br>
<span class='blue'>[Куплет 2, Тимати]</span><br>
Сколько было пройдено нами с тобой дорог, <span class='blue'>(Строка Тк5цм)</span><br>
И сколько будет ещё - знает только Бог.<br>
Люди появлялись и исчезали вдруг,<br>
А годы брали своё, сокращая круг.<br>
  <div class='refren'>У каждого свои дела, своя семья - <span class='blue'>(Строка Тк5цм)</span><br>
  Но мы всё ещё здесь, всё ещё друзья.<br>
  Не растеряли мы друг друга из-за денег<br>
  В суете потока чужих мнений.</div>
И нас кидает по миру нехило,<br>
Но в этом суть и жизни за это спасибо.<br>
Пройти достойно маршрут весь красиво;<br>
И помнить с кем ты начинал - в этом сила. <br>
  <div class='refren'>В самый сложный час, когда надежды мало -<br>
  Я знаю, выход есть - нужно начать сначала.<br>
  И ты морально приготовился к любым раскладам.<br>
  Рядом появится тот, кого зовешь ты братом!</div>
<br>
<span class='blue'>[Переход, Григорий Лепс]</span><br>
И если сбился с пути,<br>
И жизнь в тупик заводит -<br>
Ты просто мне набери!<br>
<br>
<span class='blue'>[Припев, Григорий Лепс]</span><br>
С чистого листа. <br>
Всё начать с нуля.<br>
Пусть пугает старт, <br>
Мы с тобою не опустим рук!<br>
Встав плечом к плечу, <br>
Встретим новый день.<br>
Знай, что я всегда с тобой, мой друг!<br>
<br>
<span class='i'>
[Алиса Лобанова] С вами Алиса Лобанова, я сегодня буду говорить о самом известном рэпере России, основателе
лейбла Black Star - DONI. Буквально на днях DONI открыл сотую точку Black Star Burger [неразб.].
И сегодня мы находимся с владельцем крупнейшег лейбла страны - Black Star. DONI, скажите, что
тут у вас происходит? <br>
[DONI] Дорогие друзья, всем огромное спасибо, кто сегодня посетил это мероприятие. Это наша сотая точка
Black Star Burger в России. Мы активно развиваемся, Black Star как никогда силен.<br>
[Алиса Лобанова] А какие планы на будущее?<br>
[DONI] Я вообще-то думал совсем скоро открыть Black Star плов. <br>
[Алиса Лобанова] Спасибо! Мы будем внимательно следить...<br>
<br>
[Григорий Лепс] О, Тима! Ха-ха-ха, здорово, друг мой!<br>
[Тимати] Привет!<br>
[Григорий Лепс] Работу нашел?<br>
[Тимати] Ну да, да.<br>
[Григорий Лепс] Ну, молодец.<br>
[Тимати] Да.<br>
[Григорий Лепс] А с творчеством завязал?<br>
[Тимати] Да нет, я пишу песни, я хотел тебе показать, набрать. А посмотрел -
телефон стерся!<br>
[Григорий Лепс] Да ну нах!<br>
[Тимати] Да.<br>
[Григорий Лепс] Ну, послушаю, послушаю. Машину-то помоешь? Ха-ха-ха!<br>
</span>
<br>
<span class='blue'>[Куплет 3, Григорий Лепс] Л3мж? - aBxCaBC</span><br>
По жизни мчались с тобой, <br>
Влетая в повороты.<br>
С судьбой играя, всегда <br>
Умели рисковать.<br>
И пусть порой не везло. <br>
Везенье в том лишь, что ты <br>
Меня смог другом назвать!<br>
<br>
<span class='blue'>[Припев, Григорий Лепс]</span><br>
С чистого листа. <br>
Всё начать с нуля.<br>
Пусть пугает старт, <br>
Мы с тобою не опустим рук!<br>
Встав плечом к плечу, <br>
Встретим новый день.<br>
Знай, что я всегда с тобой, мой друг!<br>
<br>
<span class='i'>
[Тимати] Уф!<br>
[Григорий Лепс] Хе-хе-хе!<br>
[Тимати] Да...<br>
[Григорий Лепс] Да!<br>
[Тимати] Спасибо, братан!<br>
[Григорий Лепс] Не благодари.<br>
[Тимати] Я все тебя хотел спросить.<br>
[Григорий Лепс] Да?<br>
[Тимати] Ну а ты бы так смог?<br>
[Григорий Лепс] Я? Не.<br>
[Тимати] Натали...<br>
<br>
<span class='blue'>Х6мм - abab</span><br>
- В старом парке пахнет хвойной тишиной,<br>
И качаются на ветках облака.<br>
<br>
[Григорий Лепс] <br>
Сколько времени не виделись с тобой?<br>
Может, год, а может, целые века?<br>
  <div class='refren'>Ни за что теперь не отыскать следов<br>
  В дальний край, где мы друг друга не нашли.<br>
  Я пришёл к тебе из позабытых снов,<br>
  Как приходят в свою гавань корабли.</div>
<span class='blue'>Х26м/ - aa...</span><br>
Натали!<br>
Утоли мои печали, Натали!<br>
Натали! <br>
Я прошёл пустыней грусти пол-земли!<br>
Натали!<br>
Я вернулся, чтоб сказать тебе "Прости".<br>
Натали!<br>
От судьбы и от тебя мне не уйти!<br>
Утоли мои печали, Натали!<br>
Натали! (Натали!)<br>
</span>
  <br>
<span class='blue'><a href='https://www.gl5.ru/bi2-depressiya.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
