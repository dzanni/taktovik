<?php
$title = 'FACE - Юморист (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/NuXdxMEbYeQ'";
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

<span class='i'>[Аркадьев] Есть предложение по программе. Вот, новый монолог обкатать
  на зрителе - и всё!<br>
[Леша] Наскока новый?<br>
[Аркадьев] Ну, вот!<br>
[Леша] Настолько? Нет, незалитованный не могу!<br>
[Аркадьев] Леша!<br>
[Леша] Не могу!<br>
[Аркадьев] В нем нет вообще никакой крамолы, Ты сейчас в этом убедишься,
потому что я тебе его прочитаю, и ты послушаешь! <br>
[Леша] Ну, ты обалдел совсем! Люди ждут!<br>
[Аркадьев] Люди подождут, он короткий. Слушай!<br>
</span>
<br>
<span class='blue'>[Интро]<br></span>
Я, ха-ха, хэй!<br>
Я, юморист, on my wrist!<br>
<br>
<span class='blue'>[Куплет 1] Тк4ц/ - aa, AA, A'A'<br></span>
Нам не выжить без смеха, прям как без русского мата.<br>
Мой отец — КГБшник, а моя мать — с автоматом.<br>
И мои дети — солдаты карательных батальонов.<br>
А мои братья — блюстители наших тёмных районов.<br>
Чувства юмора и нет, ведь так бы я давно смеялся<br>
Над жизненной ситуацией, в которую загнал себя!<br>
Нет верёвки? Пусть тогда меня удушит галстук!<br>
Поскорей бы умереть, ведь я живу напрасно!<br>
Маколей Калкин и Галкин — мой Новый год, он снова гадкий (у!)<br>
Что принесёт мне Санта, где подарки, может быть, жену?<br>
Если русский Дед Мороз, тогда он принесёт войну!<br>
Шутники и юмористы развалили нам страну.<br>
Чё, смешно, сука? Чё ты там услышал? (пау-пау)<br>
Я, чё, похож на клоуна? Ну-ка, встал и вышел (давай-давай)<br>
У нас учителя, бывает, банчат гашишем,<br>
А ты мне чё-то затираешь здесь про своего бывшего!<br>
<br>
<span class='blue'>[Припев х2] Тк4цм/ж - аа, AA<br></span>
Gold on my wrist, я юморист!<br>
Пошутил не так — и ты попал в blacklist!<br>
Государева немилость, хоть я вроде бы и чистый!<br>
Небо самолётам, а цензура для артиста!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Бандиты не на геликах — на геликах с мигалкой (да)<br>
Базарим языком ГУЛАГа, воздухом со свалки.<br>
Мы копим на кусок гранита из-под палки.<br>
Собираем крошки, запивая просроченным Pulpy.<br>
Я устал, на часах почти семь вечера,<br>
Пьём пиво с пацанами — это Тайная вечеря.<br>
Я играю в гонки с мусорами, это всё не вечно!<br>
За это нож в печень, жизнь скоротечна (ха)<br>
<br>
<span class='blue'>[Припев х2]<br></span>
Gold on my wrist, я юморист!<br>
Пошутил не так — и ты попал в blacklist!<br>
Государева немилость, хоть я вроде бы и чистый!<br>
Небо самолётам, а цензура для артиста!<br>
<br>
<span class='blue'>[Аутро]<br></span>
It`s payday, fellas!<br>
I said, it`s fucking payday, mothafuck!<br>
<br>
<span class='blue'><a href='https://genius.com/Face-humorist-original-motion-picture-soundtrack-lyrics'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. Саундтрек к одноименному фильму 2019 года.<br>
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
