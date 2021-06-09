<?php
$title = 'Verbee & Kara Kross - Не смогу (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/q7bAayFFK2Q'";
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

<span class='blue'>[Продюсерский voice-tag]</span><br>
Palagin on a beat!<br>
<br>
<span class='blue'>[Припев х2, Verbee] Л2333м/ - aaaa</span><br>
Я не смогу,<br>
Без тебя, без тебя не смогу.<br>
Набираю и снова молчу.<br>
Забываю, но так не хочу (у-у)<br>
<br>
<span class='blue'>[Куплет 1, Verbee] Тк3-5ц/ - aa, AA, A'A'</span><br>
Сколько еще мне искать тебя<br>
Среди тысяч книг, что прочел на днях.<br>
Тебя между строк даже не было.<br>
Говорят, любовь живет, да ты не верила.<br>
Стоп, все на куски<br>
Я хочу порвать от этой слепой тоски!<br>
Я так уже устал от всех этих оправданий!<br>
Если бы ты хотела, то ты была бы рядом.<br>
<br>
<span class='blue'>[Припев х2, Verbee]</span><br>
Я не смогу,<br>
Без тебя, без тебя не смогу.<br>
Набираю и снова молчу.<br>
Забываю, но так не хочу (у-у)<br>
<br>
<span class='blue'>[Пост-припев, Kara Kross]</span><br>
Я не смогу!..<br>
<br>
<span class='i'>
- Привет, мамочка!<br>
- Кто тебя провожал?<br>
- Мы с ним уже месяц вместе. Скоро вас познакомлю.<br>
- Поверь мне, дочь, это ничем хорошим не закончится.<br>
- Почему, мам? Он очень хороший.<br>
- Если что, я тебя предупреждала!<br>
</span>
<br>
<span class='blue'>[Пост-припев, Kara Kross] Л2333м/ - aaaa</span><br>
Я не смогу!<br>
Без тебя, без тебя не смогу!<br>
Без тебя, без тебя не смогу!<br>
Без тебя, без тебя не смогу!<br>
ОУ-у-у-У!<br>
<br>
<span class='blue'>[Куплет 2, Kara Kross и Verbee]</span><br>
Ну че там, как твои дела?<br>
Ты пропал куда-то, ну, в принципе, как всегда.<br>
А помнишь, как на ветер бросал ты свои слова?<br>
Я молча улыбалась, ну, типа все поняла.<br>
  <div class='refren'>
  <span class='blue'>Л23мм - abababxb</span><br>
  Не хочу, <br>
  Ты отпусти меня!<br>
  Не шучу, <br>
  Ты не беси меня!<br>
  Улечу, <br>
  И не звони сюда!<br>
  Все пройдет, <br>
  Как и любовь прошла.</div>
<br>
<span class='blue'>[Припев, Verbee]</span><br>
Я не смогу,<br>
Без тебя, без тебя не смогу.<br>
Набираю и снова молчу.<br>
Забываю, но так не хочу (у-у)<br>
<br>
<span class='i'>
- Сынок, что же ты так? Когда у меня уже будет невестка?<br>
- Мам! Не переживай, завтра я тебя познакомлю с твоей будущей невесткой.<br>
</span>
<br>
<span class='blue'>[Припев х2, Verbee]</span><br>
Я не смогу,<br>
Без тебя, без тебя не смогу.<br>
Набираю и снова молчу.<br>
Забываю, но так не хочу (у-у)<br>
<br>
<span class='blue'>[Пост-припев, Kara Kross]</span><br>
Я не смогу!<br>
Без тебя, без тебя не смогу!<br>
Без тебя, без тебя не смогу!<br>
Без тебя, без тебя не смогу!<br>
ОУ-у-у-У!<br>
  <br>
<span class='blue'><a href='https://www.gl5.ru/v/verbee/verbee-kara-kross-ne-smogu.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
