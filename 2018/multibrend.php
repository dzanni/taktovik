<?php
$title = 'Скриптонит ft. 104, T-Fest, Niman - Мультибрендовый (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/x_xuXowwV98'";
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
- [Неразб.]<br>
- [Неразб.] этим долбоёбам, как это делается!<br>
- Скрип-скрип!<br>
<br>
<span class='blue'>[Припев: Скриптонит] Тк2дж - A'bA'A'A'A'b A'B'B'B'B'<br></span>
Тусишь вместе с фэнами,<br>
Не можешь выбрать одной вещи.<br>
Мультибрендовой, <br>
Я мультибрендовый,<br>
Вместе с трендами (у)<br>
Вместе с фэнами <br>
Пиздить чужие фишки. <span class='blue'>(Строка Тк3ж)</span><br>
Ты ж тут ноешь мультибрендовый,<br>
Но всего не выкупишь,<br>
Но всего не выкуришь,<br>
Но всего не выучишь,<br>
Но всего не спиздишь! <span class='blue'>(Строка Тк2ж)</span><br>
Но всего не выкупишь,<br>
Но всего не выкуришь,<br>
Но всего не выучишь,<br>
Но всего не спиздишь!<br>
<br>
<span class='blue'>[Куплет 1: Скриптонит] Тк23 - A'bA'bAbb<br></span>
Компрессор мультибендовый (чё?)<br>
В моём мешке, <br>
Будто выигрывал все тендеры (эй ты, слышь?)<br>
В твоей кишке. <br>
Можно возить геру и первый (точно)<br>
Но ты и без этого в дерьме (точно)<br>
Но ты и без этого в дерьме<br>
<div class='refren'><span class='blue'>Тк4ц3 - aa, AA, A'A'<br></span>
Голодные тёлки палят с улиц в эти окна (я их знаю)<br>
Я с битом могу продать им чё угодно (абсолютно)<br>
Я с лицом как будто ничего не видел (я не знаю)<br>
Хуярю так, будто мне не нужен зритель (не)<br>
Нет, мне не нужен зритель <span class='blue'></span><br>
Я на сцене с пацанами, как в блатхате (как в блат-хате)<br>
Я на первом в мокрых тапках и в халате (все тут в курсе)<br>
Я не чувствую ни дёсен, ни ноздрей.<br>
Я скрутил самый жирный, и работа — это рейв.<br>
Мультибрендовый (мультибрендовый)  <span class='blue'>(Строка Тк2д)</span><br>
С трети города льёт пот, до жути феновый.<br>
Мне не холодно в Москве, без проблем новый.<br>
Benz, Vans — всё, на что ты копишь (Скрип)<br>
Пальцы говорят им: «Чё ты хочешь?»</div>
<br>
<span class='blue'>[Припев: Скриптонит]</span><br>
Тусишь вместе с фэнами,<br>
Не можешь выбрать одной вещи.<br>
Мультибрендовой, <br>
Я мультибрендовый (ой, как пиздишь),<br>
Вместе с трендами,<br>
Вместе с фэнами <br>
Пиздить чужие фишки.<br>
Ты ж тут ноешь мультибрендовый,<br>
Но всего не выкупишь,<br>
Но всего не выкуришь,<br>
Но всего не выучишь,<br>
Но всего не спиздишь!<br>
Но всего не выкупишь,<br>
Но всего не выкуришь,<br>
Но всего не выучишь,<br>
Но всего не спиздишь!<br>
<br>
<span class='blue'>[Куплет 2: 104] Тк23цж/д - A'A', aa<br></span>
Смузи с нала крутится в блендере,<br>
Триста пятниц в моём календаре (календаре)<br>
Рядом МУП-ы и мультибедные (мультибедные)<br>
Тело биксы, ей нужны бэнгеры (бэнгеры)<br>
Ей нужны бэнгеры (бэнгеры)<br>
А я только отрендерил.<br>
Пацы дали шуму в индустрии (пр-пр-пр-р-р-а)<br>
Всё, что я ношу лишь — это имя (104)<br>
Ты, наверное, думал, мы пустые (собери их)<br>
Статус твоих шуток — «анонимно».<br>
<div class='refren'><span class='blue'>Тк2жм - AbAb<br></span>
Я имею вес и опыт, <br>
Но рождён будто вчера.<br>
Шлю нахуй там, где ходят, <br>
Нахуй, рэпера (рэпера)!<br>
Они все глотают копоть <br>
И грустят по вечерам<br>
Вместо того, чтобы <br>
Всё трахать на ура!</div>
<br>
<span class='blue'>[Припев: Скриптонит]<br></span>
Пока ты тусишь вместе с фэнами,<br>
Не можешь выбрать одной вещи,<br>
Мультибрендовой, <br>
Я мультибрендовый (ой, как пиздишь)<br>
Вместе с трендами,<br>
Вместе с фэнами<br>
Пиздить чужие фишки.<br>
Ты ж тут ноешь мультибрендовый,<br>
Но всего не выкупишь,<br>
Но всего не выкуришь,<br>
Но всего не выучишь,<br>
Но всего не спиздишь!<br>
Но всего не выкупишь,<br>
Но всего не выкуришь,<br>
Но всего не выучишь,<br>
Но всего не спиздишь!<br>
<br>
<span class='blue'>[Куплет 3: T-Fest] Тк2ж - ABAB<br></span>
По коридору и направо -<br>
Базары за конвертик.<br>
Где начало? Я не знаю,<br>
Но по пятницам концерты.<br>
Эти мальчики все киллы,<br>
Они спят в своих гримёрках <br>
Третий день на беспилотном <br>
Пьют за Скрипи, 104-го.<br>
<div class='refren'><span class='blue'>Тк2-5цм? - aa<br></span>
У нас так много возможностей<br>
Убирать этих придурков с их заветных должностей,<br>
Но я снова выкинул все чеки за вчерашний день.<br>
От количества просмотров не растёт авторитет<br>
Нас учили быть людьми, ну просто быть людьми (хуй с ними)<br>
Грань между притоном — <br>
Мультибрендовые дни.<br>
Грань между законом - <br>
Прям на шесть, и ты прилип!<br>
Грань между тем, что ты хотел, и то, что вывозил.</div>

Гавкаю как пёс по утрам на нервяках.<br>
Транзакции на запад и назад (ноль три)<br>
Малый Юлий Цезарь при делах.<br>
Слышь, сделай себя сам!<br>
<br>
<span class='blue'>[Припев: Скриптонит]</span><br>
Пока тусишь вместе с фэнами,<br>
Не можешь выбрать одной вещи.<br>
Мультибрендовой, <br>
Я мультибрендовый (ой, как пиздишь)<br>
Вместе с трендами,<br>
Вместе с фэнами <br>
Пиздить чужие фишки.<br>
Ты ж тут ноешь мультибрендовый,<br>
Но всего не выкупишь,<br>
Но всего не выкуришь,<br>
Но всего не выучишь,<br>
Но всего не спиздишь!<br>
Но всего не выкупишь,<br>
Но всего не выкуришь,<br>
Но всего не выучишь,<br>
Но всего не спиздишь, спиздишь!<br>
<br>
<span class='blue'>[Аутро: Скриптонит]<br></span>
Алло, алло, алло!<br>
7-1-8-2, 1-4<br>
36, 104, 0-3-7-2<br>
Ха-ха!<br>
Нахуй этих долбоёбов!<br>
Нахуй их всех!<br>
<br>
<span class='blue'><a href='https://genius.com/Scriptonite-multibrand-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Рифма ж=д: "фЕновый" - "нОвый".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
