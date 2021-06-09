<?php
$title = 'Feduk, Егор Крид - Холостяк (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/4TyF1nUHDDQ'";
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

<span class='blue'>[Куплет 1, ЛСП] Л32жд - ХAB'AB'</span><br>
У тебя две дочки,<br>
На тебя похожи (очень) -<br>
Лиза и Настенька (ммм)<br>
У меня две тоже - <br>
Visa и Master Card (дзинь!)<br>

<div class='refren'><span class='blue'>Тк2-3дм - A'A'bbbA'xA'bB</span><br>
  Вижу эту куклу - фантастика,<br>
Красивая и не из пластика!<br>
Беру эту Барби в момент <br>
За пару монет,<br>
Как грёбаный абонемент!<br>
Спортивная гимнастика.</div>

Вверх-вниз (вверх-вниз)<br>
Нет ничего важнее<br>
Для холостяка:<br>
Ебись, пой, пей, — <br>
Всё что я умею!<br>
<br>
<span class='blue'>[Припев, ЛСП] Л4ц3мж? - aBaB<br></span>
Холо-холостяк, парень молодой.<br>
Холо-холостяк, завидный.<br>
Холо-холостяк. «Хочешь быть моей женой?»<br>
В баре по одной сперва выпьем.<br>
<div class='refren'>
  Холо-холостяк, парень молодой.<br>
  Холо-холостяк, завидный.<br>
  Холо-холостяк. «Хочешь быть моей женой?»<br>
Поезжай со мной, там будет видно.<br>
<br>
<span class='blue'>[Куплет 2, Feduk] Тк4ц3м/ж?, Тк4ц3мж - aa, AA, AbbA</span><br>
А я один, почему ты думаешь, что я несчастлив? <span class='blue'>(Строка Тк6цж)</span><br>
Но здесь нехуй ловить, если ты хочешь встречаться. <span class='blue'>(Строка Тк5цж)</span><br>
Я за всех заплатил, мы огонь, мы горим (Holla!)<br>
Взорвал, потом снова скрутил (Holla!)<br>
<div class='refren'>

Буду погибать холостым.<br>
Я буду погибать холостым!</div>

Я буду верить, что ты где-то ходишь (где ты ходишь?)<br>
Буду самым родным, но это всё сны.<br>
Я не буду себя мучать, и ты прости!<br>
Я просто прыгнул в новый AUDI (ха!)<br>
<div class='refren'>
Skrrr! Skrrr!</div>

Новые bitches, не ждите колец -<br>
Я пью сок из разбитых сердец.<br>
Я пропал там, где тусы и дым!<br>
Буду погибать холостым!<br>
<br>
<span class='blue'>[Припев, ЛСП]<br></span>
Холо-холостяк, парень молодой.<br>
Холо-холостяк, завидный.<br>
Холо-холостяк. «Хочешь быть моей женой?»<br>
В баре по одной сперва выпьем.<br>
<div class='refren'>
  Холо-холостяк, парень молодой.<br>
  Холо-холостяк, завидный.<br>
  Холо-холостяк. «Хочешь быть моей женой?»<br>
Поезжай со мной, там будет видно.<br>
<br>
<span class='blue'>[Куплет 3, Егор Крид] Тк2-4цмж - aBaB<br></span>
На барабане сектор «Приз»,<br>
Но ты снова выбираешь деньги.<br>
Ха-а! Зебись!<br>
Поехали со мной, только оденься.<br>
<div class='refren'>
  <span class='blue'>Л4ц2ж - AA</span><br>
Холо-холостой, Бакс Бани.<br>
Холо-холостой, мы на баре.<br>
И мне парит её парень (нет, нет, нет, нет)<br>
Её парят мои money (О, чёрт!)</div>

  <span class='blue'>Л23жм? - AbAb</span><br>
Сколько тебе надо, <br>
Чтоб полюбить меня?<br>
Ты моя награда, <br>
Красивая без белья.<br>
<div class='refren'>
  <span class='blue'>Л23мж? - AbAb</span><br>
  Для холостяка <br>
Это всё пустяк!<br>
Главное мне - не напиться.<br>
Можно обещать, <br>
Это я мастак.<br>
Но обещать — не значит жениться.   <span class='blue'>(Строка Л4цж)</span></div>
<br>
<span class='blue'>[Припев, ЛСП]<br></span>
Холо-холостяк, парень молодой.<br>
Холо-холостяк, завидный.<br>
Холо-холостяк. «Хочешь быть моей женой?»<br>
В баре по одной сперва выпьем.<br>
<div class='refren'>
  Холо-холостяк, парень молодой.<br>
  Холо-холостяк, завидный.<br>
  Холо-холостяк. «Хочешь быть моей женой?»<br>
Поезжай со мной, там будет видно.</div>
<br>
<span class='blue'><a href='https://www.gl5.ru/l/lsp/lsp-feduk-egor-kreed-holostyak.html'
  target='_blank'>Источник</a></span><br>
<br>
<br>
N.B. <span class='i'>Буду погибать холостым</span> -  измененная цитата из песни Мистера Малого
«Буду погибать молодым» (1992, в авторской орфографии - «Буду пагибать малодым»),
 первого российского рэп-хита.<br>
<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
