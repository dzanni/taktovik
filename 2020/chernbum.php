<?php
$title = 'DAVA ft. Серёга - Черный бумер (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/jmuZKko6Hkw'";
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
[Бузова] Ну что? Все-таки решился?<br>
[DAVA] Да, правда, переживаю немного!<br>
[Бузова] Ну что ты переживаешь? Это всего лишь машина!<br>
[DAVA] Ты не понимаешь! Это новая модель! Она лучшая! И она единственная в России!<br>
И она будет моя!<br>
[Бузова] Может, э... воду вскипятить?<br>
[DAVA] Да не! Это по-другому работает. Ммм!<br>
[Голоса] Алилуйя! Алилуйя! Алилуйя!<br>
[Бузова] Родной, я так рада за тебя!<br>
[DAVA] Спасибо. Ну что, покупаю?<br>
[Бузова] Давай!<br>
[Серёга] Не понял. Её что, купили уже? А ну, быстро нашли мне этого терпилу!<br>
</span>
<br>
<span class='blue'>[Интро: Серёга]</span><br>
Чёрный бумер, чёрный бумер,<br>
Стоп-сигнальные огни.<br>
<br>

<span class='blue'>[Припев х2: DAVA, Серёга] Х4жм? - AbbAbX</span><br>
Чёрный бумер, чёрный бумер.<br>
Стоп-сигнальные огни, <br>
Стоп-сигнальные огни.<br>
Чёрный бумер, чёрный бумер.<br>
Если можешь, догони, <br>
Если можешь, если можешь!<br>
<br>
<span class='blue'>[Куплет 1: DAVA] Тк4-5цм/ж - aa, AA</span><br>
Я парень молодой, я с района Затулинка.<br>
Сажусь в свой бумер, там по радио поёт Рамилька.<br>
Еще совсем недавно по уши я был в кредитах,<br>
Раздал долги — цепи на руки, как у бандита (эй)<br>
  <div class='refren'>Я лезу в топ, у девочек потоп,<br>
  Но я только одной дарю свою любовь.<br>
  Моя училка говорила, что не сдам ЕГЭ.<br>
  Передайте ей: пусть посмотрит на меня теперь!</div>
На мне ремешки Gucci, трусы от Versace,<br>
Кушал в ресторане и купил на сдачу.<br>
Много крутых тачек на парковке в ЦУМе,<br>
Но моя малая любит мой черный бумер.<br>
<br>
<span class='blue'>[Бридж: DAVA]</span><br>
Чёрный бумер, чёрный бумер,<br>
Стоп-сигнальные огни.<br>
Чёрный бумер, чёрный бумер,<br>
Если можешь, догони!<br>
<br>
<span class='i'>
[Браток] Слышь, мандаринка! Будешь рыпаться, я те отжарю. Пардоньте!<br>
Пацаны, где удленитель?<br>
[Серёга] Ты чо, бессмертный? Это была моя тачка. Ты кто такой вообще?<br>
[DAVA] Я блогер. <br>
[Серёга] Кто?<br>
[DAVA] Ну, тик-токер.<br>
[Серёга] Ти-кто? Ты чо там двигаешь у себя в своем Тик-токе? Откуда у тебя бабло
на такую тачку?<br>
[DAVA] Короче. Берешь камеру, включаешь музыку. И просто снимаешь, как ты живешь.<br>
[Серёга] Да легко!<br>
</span>
<br>
<span class='blue'>[Куплет 2: Серёга и DAVA]</span><br>
(Черный бумер!)<br>
<span class='blue'>Д2м/ - aaaa</span><br>
Эта новость для СМИ<br>
Без огня не гремит.<br>
Дядя дропнул ремикс,<br>
Дядя, нахуй лимит!<br>
  <div class='refren'>
  <span class='blue'>Л3ж/ - AAAA</span><br>
  Лимоны и мандарины,<br>
  А мы на Санторини.<br>
  Модели в ультрамарине,<br>
  По ляму в день на стриме (кэш)</div>
<span class='blue'>Я3м/ - aaaa</span><br>
Когда мы входим в клуб,<br>
Мы не считаем шлюх.<br>
Когда мы входим в клуб,<br>
Наш рэп читают вслух.<br>
  <div class='refren'>
  <span class='blue'>Я3жм - XaXa</span><br>
  Серёга Черный Бумер <br>
  И Дава Манукян,<br>
  В багажнике растенья -<br>
  Мечта ботаникА.</div>
<br>
<span class='blue'>Дк2жм - AAAAbCCCb</span><br>
По-любому <br>
Нормальный повод<br>
Всем по альбому,<br>
Шатаем пол (везде, бро)<br>
  <div class='refren'>Всюду мемы, <br>
  И, несомненно,<br>
  Мы современны, <br>
  Как Зибров.</div>
Трушной темой <br>
Мы рушим стены,<br>
И саунд-системы,<br>
Как Kid Rock!<br>
  <div class='refren'>Этот дядя<br>
  Тяжел для сцены<br>
  Так откровенно,<br>
  Как Rick Ross!</div>
<br>
<span class='blue'>[Припев: DAVA, Серёга]</span><br>
Черный бумер, черный бумер.<br>
Стоп-сигнальные огни, <br>
Стоп-сигнальные огни.<br>
Черный бумер, черный бумер<br>
Если можешь, догони, <br>
Если можешь, если можешь.<br>
<br>
<span class='i'>
[DAVA] Не, дядь. Это не TikTok. Щас я покажу тебе, что такое настоящий TikTok.<br>
[Мальчик] Тихо, ребята, мне батя звонит! Да, DAVA!<br>
</span>
<br>
<span class='blue'>[Припев х2: DAVA, Серёга]</span><br>
Черный бумер, черный бумер.<br>
Стоп-сигнальные огни, <br>
Стоп-сигнальные огни.<br>
Черный бумер, черный бумер<br>
Если можешь, догони, <br>
Если можешь, если можешь.<br>
  <br>
<span class='blue'><a href='https://genius.com/Dava-black-beamer-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
