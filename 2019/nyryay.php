<?php
$title = 'MACHETE - Ныряй без остатка (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/9wcG8zxBueg'";
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
<span class='i'>[Музыка] Утренний туман движется...<br>
- Классная у тебя кепка!<br>
- А у вас шапка!<br>
- А ты, брат, куда?<br>
- Я домой.<br>
- Тогда тебе туда.<br></span>
<br>
<span class='blue'>[Куплет 1] Тк2-4ц/? - aa, AA, A'A'</span> <br>
Люди, эти слова звучат от души!<br>
Здесь нет двойного дна, злого умысла и шифра.<br>
Мы совершаем ошибку, <br>
Разменивая по мелочам нашу жизнь.<br>
Изобретая пороки, <br>
Не извлекая уроки,<br>
Мы превращаем себя в невменяемых и жестоких.<br>
Мы просыпаемся в грязном потоке<br>
И отправляемся в море лжи.<br>
И в этом путешествии -<br>
Слезы и бедствия,<br>
Но мы гребем и гребем, не смотря на последствия.<br>
Такая наследственность.<br>
В каждом есть гений, но рулит посредственность.<br>
И здесь трудно остаться собой,<br>
За улыбками прячется боль.<br>
И как бы все ни звучало банально, но мир спасет любовь!<br>
<br>
<span class='blue'>[Припев х2] - Тк24цм/ - aaabbb<br></span>
Но как же мне хорошо, <br>
Что я тебя нашел.<br>
И смотрю на мир на этот дикий, как на шоу.<br>
Нам повезло с тобой - <br>
И это поймет любой,<br>
Главное, что в жизни в этой есть любовь!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Мир – бранное поле, <br>
Каждый из нас - воин.<br>
И сам выбирает, чего он достоин.<br>
Хранить традицию, слушать историю,<br>
Или ломать границы и делать историю.<br>
И то, и другое - это может быть правильный путь.<br>
Разберись спокойно, в чем есть твоя суть.<br>
Кто-то любит бриз дальних берегов, <br>
Кто-то головы врагов.<br>
Просто выбери – и будь, что будет.<br>
Цени достоинство, <br>
Чти небесное воинство.<br>
Истина, если ты честен – откроется.<br>
Наша жизнь - цепь перевоплощений.<br>
И бой с собой - это война священная.<br>
И если рядом есть та, что сохранит верность,<br>
И ее чистота тебе дает уверенность,<br>
Значит, это любовь. Поздравляю, братка!<br>
Ныряй в нее! Ныряй без остатка!<br>
<br>
<span class='blue'>[Припев х4]<br></span>
Но как же мне хорошо, <br>
Что я тебя нашел.<br>
И смотрю на мир на этот дикий, как на шоу.<br>
Нам повезло с тобой - <br>
И это поймет любой,<br>
Главное, что в жизни в этой есть любовь!<br>
<br>
Слова: Ярослав Малый <br>
 <br>
<span class='blue'><a href='https://www.gl5.ru/machete-niryai-bez-ostatka.html'
  target='_blank'>Источник</a></span><br>
 <br>
   <br>
   P.S. Мы выровняли стих смежными рифмами,
   а встречающиеся перекрестные расценили как внутренние, так как они факультативны.<br>
<br>
Рифма д=м: "душИ - шИфра". Рифма д=ж: "перевоплощЕний - свящЕнная".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>