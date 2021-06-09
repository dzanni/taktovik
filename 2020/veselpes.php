<?php
$title = 'Егор Крид & MORGENSHTERN - Веселая песня (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/wULaGx-sl1Q'";
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

<span class='blue'>[Припев: Егор Крид & MORGENSHTERN] Х5556ж/? - AAAA</span><br>
Если вдруг меня не станет, бэйби (бэйби)<br>
Так, наверно, будет даже легче (бе)<br>
Теперь можешь тратить мои деньги.<br>
Расскажи, какой я был пиздатый, детям (shish)<br>
  <div class='refren'>Если вдруг меня не станет, бэйби (эй)<br>
  Так, наверно, будет даже легче (йе)<br>
  Теперь можешь тратить мои деньги (йе)<br>
  Расскажи, какой я был пиздатый, детям!</div>
<br>
<span class='blue'>[Куплет 1: Егор Крид] Тк2-4цж/ - AAAAA</span><br>
Если вдруг меня не станет, бэйби (воу)<br>
Всё равно останусь в тренде (факт)<br>
Я на всякий сделал пару песен.<br>
Если захочешь их продать, то продавай, как Бэнкси!<br>
И забирай все чеки (воу)<br>
  <div class='refren'>
  <span class='blue'>Тк4цм/? - aabB'</span><br>
  В девятнадцать я мечтал стать молодым отцом (отцом)<br>
  Найти реальную любовь и подарить кольцо (дзынь)<br>
  Мне двадцать пять, я самый главный холостяк страны (да)<br>
  Вокруг так много сук, как мне не писать о них? (ахах) </div>
<span class='blue'>Х4ж/ - AAAA</span><br>
Справа (right), слева (left), ангел, демон.<br>
Но я снова (нет) им не верю (бе)<br>
Трачу время (time), трачу нервы (да)<br>
Сколько стоят (cash) мои  деньги?<br>
<br>
<span class='blue'>[Бридж: Егор Крид] Тк24цм/? - aaaaa</span><br>
Снова выпускаю дым, <span class='blue'>(Строка Тк3м)</span><br>
Выпускаю хит.<br>
Мама, я легенда, но не умру молодым (не-а)<br>
Пролетают дни (дни!) <br>
Я теряюсь в них (них!)<br>
Но что скажу тебе, если звонок всего один?<br>
<br>
<span class='blue'>[Припев: Егор Крид & MORGENSHTERN]</span><br>
Если вдруг меня не станет, бэйби (бэйби)<br>
Так, наверно, будет даже легче (бе)<br>
Теперь можешь тратить мои деньги.<br>
Расскажи, какой я был пиздатый, детям (shish)<br>
  <div class='refren'>Если вдруг меня не станет, бэйби (эй)<br>
  Так, наверно, будет даже легче (йе)<br>
  Теперь можешь тратить мои деньги (йе)<br>
  Расскажи, какой я был пиздатый, детям!</div>
<br>
<span class='blue'>[Куплет 2: MORGENSHTERN] Тк3-4цж/? - AA</span><br>
Эй, если вдруг меня не станет, брат (брат) <span class='blue'>(Строка Тк3м)</span><br>
То половина будет только рада (хм)<br>
У половины будут слёзы кап-капать.<br>
Никому не будет похуй — это чё-то значит (точно)<br>
Последний день, и это дико манит!<br>
К черту эти деньги (деньги), к черту эти камни (ice)<br>
Чё я напишу такого маме?<br>
Последний message в Телеграме:<br>
  <div class='refren'>
    <span class='blue'>Тк1-3м/ж - aa, AA</span><br>
  Но да, я рад, Ма (я)<br>
  Apenado, но меня не будет рядом!<br>
  Я был первым для тебя, но не парадным (я)<br>
  И по-любому, я тебя и там порадую, <span class='blue'>(Строка Тк3д)</span><br>
  Но пора нам!<br>
  А пока мы on da block (block)<br>
  Курим — это blow (уэ)<br>
  Hotta будто glo (glo)<br>
  Я поэт, я Блок!<br>
  И на мне ща bootie mommy.<br>
  Дикий будто Панин.<br>
  Мама, мне так рано!<br>
  I don’t wanna die!<br>
  I don’t wanna die!</div>
<br>
<span class='blue'>[Припев: Егор Крид & MORGENSHTERN]</span><br>
Если вдруг меня не станет, бэйби (бэйби)<br>
Так, наверно, будет даже легче (бе)<br>
Теперь можешь тратить мои деньги.<br>
Расскажи, какой я был пиздатый, детям (shish)<br>
  <div class='refren'>Если вдруг меня не станет, бэйби (эй)<br>
  Так, наверно, будет даже легче (йе)<br>
  Теперь можешь тратить мои деньги (йе)<br>
  Расскажи, какой я был пиздатый, детям!</div>
<br>
<span class='blue'>[Аутро: Егор Крид]</span><br>
Если вдруг меня не станет, бэйби (эй)<br>
Так, наверно, будет даже легче (эй)<br>
Теперь можешь тратить мои деньги (эй)<br>
Расскажи, какой я был пиздатый, детям!<br>
  <div class='refren'>Если вдруг меня не станет, бэйби...</div>
  <br>
<span class='blue'><a href='https://genius.com/Egor-kreed-and-morgenshtern-happy-song-lyrics'
  target='_blank'>Источник</a></span><br>
  <br>
    <br>
N.B. Рифма д=ж: "парАдный" - "порАдую".<br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
