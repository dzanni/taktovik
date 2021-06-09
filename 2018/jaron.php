<?php
$title = 'FACE - Я роняю Запад (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/ZGEoqPpJQLE'";
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
У, у, гррра!<br>
Julo, get the r-racks!<br>
У, у, эй, эй (Фейс)!<br>
У, я ебал твою телку, у, эй!<br>
У, у, эщкере!<br>
Эй, вау!<br>
<br>
<span class='blue'>[Припев] Х37жм? - AAAAAAbAAAAAAb<br></span>
Я роняю Запад, у! Я роняю Запад, у!<br>
Я роняю Запад, у! Я роняю Запад, а!<br>
Я роняю Запад, у! Я роняю запад, а!<br>
На моём хуе вся индустрия США, я (ха-ха!)<br>
Я роняю Запад, у! Я роняю Запад, эй!<br>
Я роняю Запад! (эщкере!) Я роняю Запад, эй!<br>
Я роняю Запад, у! Я роняю Запад, а!<br>
На моём хуе вся индустрия США, я!<br>
<br>
<span class='blue'>[Куплет] Х3-7м/ж - aa, AA<br></span>
Я роняю Запад - это правда!<br>
Я ебал жену Обамы,<br>
Мне сосала дочка Трампа!<br>
США в нокаут, у!<br>
Делаю то, что я хочу,<br>
Кончил прямо ей в пизду!<br>
Ты сосал мне, если ты касался ее губ!<br>
Снова трахнул этих двух,<br>
Мне не нужен друг вокруг!<br>
Они пишут в инстаграме, <br>
Просят трахнуть своих сук!<br>
Я тебя не знаю, но ты знаешь про меня!<br>
Я не видел долбоёбов <br>
Хуже, чем мои учителя!<br>
Голос молодёжи от мажоров до окраин!<br>
Иремель, Аврора — банда, <br>
На хуй рэп-игру, мы не играем!<br>
Фейс, Фейс! Молодой Фейс! <span class='blue'>(Строка Тк4цм)</span><br>
Я, Иремель, Аврора — банда!<br>
Кончил ей на фейс! (гррра!)<br>
<br>
<span class='blue'>[Припев]<br></span>
Я роняю Запад, у! Я роняю Запад, а!<br>
Я роняю Запад, эй! Я роняю Запад! (эщкере!)<br>
Я роняю Запад, у! Я роняю Запад, а!<br>
На моём хуе вся индустрия США, я (ola!)<br>
Я роняю Запад, у! Я роняю Запад, а!<br>
Я роняю Запад, эй! Я роняю Запад, гррра!<br>
Я роняю Запад, у! Я роняю Запад, а!<br>
На моём хуе вся индустрия США, я (эщкере!)<br>
<br>
<span class='blue'><a href='https://genius.com/Face-im-dropping-the-west-lyrics'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
