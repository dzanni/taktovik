<?php
$title = 'Даня Милохин & Николай Басков - Дико тусим (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/JTjTyU_DC4k'";
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

<span class='blue'>[Припев х2: Даня Милохин & Николай Басков] Дк4434цж/ж - AABB</span><br>
Золотая чаша, золотые цепи.<br>
Угадай где? Я не дома, baby!<br>
В моём бокале смузи,<br>
Мы на трэп-хате дико тусим!<br>
<br>
<span class='blue'>[Куплет 1: Даня Милохин] Тк4цм/ж? - aa, AA</span><br>
Я ушёл из дома, теперь дом — это рэп!<br>
Я беру эти купюры и съедаю, как хлеб.<br>
Угадай где Даня снова на бите?<br>
Расскажи, как ты устал видеть Милохина везде!<br>
Со мной рядом Dream Team, а теперь и Коля Басков!<br>
Фит острее, чем табаско! <span class='blue'>(Строка Тк2ж)</span><br>
Падаю наверх, и этот хейт - моя реклама.<br>
Эту песню будет слушать даже твоя мама!<br>
Даня - самый свежий повар и немного хам. <br>
Мои золотые цепи вам не по зубам.<br>
Мы не сделаем потише, мама-ама-криминал.<br>
Наливаю Коле смузи в его золотой бокал.<br>
<br>
<span class='blue'>[Припев: Даня Милохин & Николай Басков]</span><br>
Золотая чаша, золотые цепи.<br>
Угадай где? Я не дома, baby!<br>
В моём бокале смузи,<br>
Мы на трэп-хате дико тусим!<br>
<br>
<span class='blue'>[Куплет 2: Николай Басков] Я4443жм - AbAb</span><br>
Когда я завожу шарманку, <br>
Мы с Даней залетаем в топ.<br>
Я покорил давно эстраду,<br>
Теперь возьму TikTok!<br>
  <div class='refren'>
  <span class='blue'>Л44ц33м/ж? - aaBB</span><br>
  Среди нас тут один натуральный блондин.<br>
  Твоей мамы краш, мало мне половин.<br>
  Треки на каждой дискотеке.<br>
  Я залетаю во все реки.</div>
<br>
<span class='blue'>[Предприпев: Даня Милохин]</span><br>
Золотая чаша...<br>
Золотая чаша...<br>
Золотая чаша, золотые цепи.<br>
<br>
<span class='blue'>[Припев: Даня Милохин & Николай Басков]</span><br>
Золотая чаша, золотые цепи.<br>
Угадай где? Я не дома, baby!<br>
В моём бокале смузи,<br>
Мы на трэп-хате дико тусим!<br>
<br>
<span class='blue'>[Финал]</span><br>
Золотая чаша, золотые цепи...<br>
  <br>
<span class='blue'><a href='https://genius.com/And-milohin-and-baskov-we-party-wildly-lyrics'
  target='_blank'>Источник</a></span><br>
  <br>
  <br>
P.S. Подражание песне и клипу Фараона <a href='../2017/dikonaprimer.php'>
  "Дико, например"</a> (2017).<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
