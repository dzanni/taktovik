<?php
$title = 'Хлеб - Секс с OXXXYMIRON (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/n30s0eOdmts'";
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

<span class='blue'>[Intro]<br></span>
Хлеб должен быть в каждом доме (Pow-pow-pow!)<br>
Йау! Урр! Фрр-фрр! Yeah! (Yeah)<br>
<br>
<span class='blue'>[Verse 1: Ден] Тк2-4ц<br></span>
В ее Инсте (Йау!) миллионы лайков (миллионы)<br>
Но сейчас она с ним за одним столом в «Старбаксе».<br>
Не пикап (пикап) от него,<br>
Она подсела, она - thot-thot-thot.<br>
Он просто ел черничный торт,<br>
А она подсела на «Та-та-та!» (Go!)<br>
Она зовет к себе,<br>
И они упали в ее новую тачку,<br>
Летят быстро, из колонок на английском,<br>
Походу, поют про пляж (Bitch, bitch!)<br>
Она улыбается и трогает его за колено (колено) <span class='blue'>(Строка Тк5цж)<br></span>
Словно сбылось желание,<br>
Когда на торта́х задувал свечи.<br>
<br>
<span class='blue'>[Bridge] Тк4-5цм/? - aa<br></span>
Они в ее квартире - damn, это супер-лофт!<br>
Ее платье упало на пол - это супер, wow!<br>
Он все понимает, ведь это не сон!<br>
Она шепчет тихо: «Возьми меня, Оксимирон!»<br>
<br>
<span class='blue'>[Hook] Тк4цж/ - AAAA<br></span>
Секс с Оксимироном, секс с Оксимироном.<br>
У нее сегодня был секс с Оксимироном.<br>
Секс с Оксимироном, секс с Оксимироном.<br>
Вроде трахались другие, но Кирилл очень доволен!<br>
<br>
<span class='blue'>[Verse 2: Кирилл] Тк3-4цм/ж? - aa, AA<br></span>
Это true story, bro!<br>
С Окси мы - одно лицо (лицо)<br>
Вот на фото - он (о-о!), вот - я (Wow-wow!)<br>
Словно к зеркалу подошел!<br>
Даже мурашки бегут по коже (е-е-е)<br>
Но не у меня, а у той девчонки,<br>
Что сейчас смотрит на Окси.<br>
<br>
<span class='blue'>[Verse 3: Саня] Дк4цм/ж - aa, XX<br></span>
Хоть raindrop, хоть drop top,<br>
Года - тик-так, Кирюха - hot.<br>
Мирон - вверх, pow! Кирилл - вверх, pow! (Sheesh-sheesh!)<br>
Ваня Ургант позвал (Sheesh!)<br>
Ваня Ургант позвал (Sheesh!) в эфир Кирилла,<br>
И Кирюха выпил два стакана<br>
На глазах у всей России.<br>
<br>
<span class='blue'>[Bridge]<br></span>
Они в ее квартире - damn, это супер-лофт!<br>
Ее платье упало на пол - это супер, wow!<br>
Он все понимает, ведь это не сон!<br>
Она шепчет тихо: «Возьми меня, Оксимирон!»<br>
<br>
<span class='blue'>[Hook]<br></span>
Секс с Оксимироном, секс с Оксимироном.<br>
У нее сегодня был секс с Оксимироном.<br>
Секс с Оксимироном, секс с Оксимироном.<br>
Вроде трахались другие, но Кирилл очень доволен!<br>
<br>
Секс с Оксимироном...<br>
<br>
<span class='blue'><a href="https://genius.com/Hleb-oxxxymiron-sex-with-oxxxymiron-lyrics"
  target="_blank">Источник</a><br></span>


<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
