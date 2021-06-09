<?php
$title = 'Mia Boyka & Аня Pokrov - Снежинка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/O_c04_uH9cY'";
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
[Мия] Аня, ну ты где? Тут эльфы уже почти всё выставили! Мы готовы снимать!<br>
[Аня] [Неразб.] машин, пришлось взять лимузин!<br>
[Мия] Что? Какой лимузин?<br>
[Эльф] Мия, Мия, подарки ждут!<br>
[Мия] Всё, мне пора идти. Давай, ждем!<br>
</span>
<br>
<span class='blue'>[Переход] Тк2324цж/? - AAAA</span><br>
Падает снежинка,<br>
И начинается вечеринка.<br>
Падает снежинка,<br>
Пусть между нами растает льдинка!<br>
<br>
<span class='blue'>[Припев х2] Дв4443д/ - A'A'A'(A')A'</span><br>
Ноги начинают плавиться (а-а-а-а)<br>
Мама, я хочу расслабиться (у-у-у-у)<br>
Его руки ко мне тянутся,<br>
Руки ко мне тянутся,<br>
Давай-давай капканиться!<br>
<br>
<span class='blue'>[Куплеты] Я433ж/ - AAAAAa</span><br>
На Адидасе, а не в Прада,<br>
Танцуем в стиле танго -<br>
Мы лёгкие, как вата (а-а)<br>
Движ слаще, чем ванильный латте,<br>
И мы уже помяты, <br>
Но продолжаем танцевать! <span class='blue'>(Строка Я4м)</span><br>
<br>
<span class='blue'>Тк2-4цм/ - aaaa</span><br>
На свиданку пригласи-и-ил,<br>
Прыгаю в розовый лимузи-и-ин.<br>
Я королева, ты мой дельфи-и-ин,<br>
Больше не будешь гулять один.<br>
(Не один! Не один! Не один!)<br>
<br>
<span class='blue'>Тк4цж/ - AAAA</span><br>
Миа Афродита, я в режиме Нитро.<br>
Вызвал на дуэль, хлопнула бандита!<br>
Мои треки как Space X летят на орбиту.<br>
Ты хотел билетик? Лавочка закрыта!<br>
<br>
<span class='blue'>[Переход]</span><br>
Падает снежинка,<br>
И начинается вечеринка.<br>
Падает снежинка,<br>
Пусть между нами растает льдинка!<br>
<br>
<span class='blue'>[Припев х2]</span><br>
Ноги начинают плавиться (а-а-а-а)<br>
Мама, я хочу расслабиться (у-у-у-у)<br>
Его руки ко мне тянутся,<br>
Руки ко мне тянутся,<br>
Давай-давай капканиться!<br>
  <br>
<span class='i'>
- [Неразб.]  <br>
- Всё окей?  <br>
- [Неразб.]  <br>
</span>
<br>
<span class='blue'>[Аутро] Л23ж/ - AAAA</span><br>
Ла-ла-ла-лАй, ла-ла-лАй-лай!<br>
Ла-лАй, ла-лАй, ла-лАй-лай!<br>
Ла-ла-ла-лАй, ла-ла-лАй-лай!<br>
Ла-лАй, ла-лАй, ла-лАй-лай!<br>
<br>
<span class='i'>
- Стоп, снято!<br>
</span>
<br>
<span class='blue'><a href='https://www.gl5.ru/m/mia-boyka/mia-boyka-anya-pokrov-snezhinka.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
