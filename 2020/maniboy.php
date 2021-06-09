<?php
$title = 'Анна Семенович - Мани бой (слова/текст, видео)';

require_once '../header.php';

$query ="SELECT * FROM list WHERE link='https://youtu.be/t0Wfa9a-NtI'";
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
- Геннадий Петрович, звали?<br>
- Угу. Слушай сюда, Павлик.<br>
- Я Олег.<br>
- Это не важно. Я на месяц улетаю в Дубай.<br>
- Но это офигенно!<br>
- По личному приглашению шейха!<br>
- Ну это вообще отпад!<br>
- Разговорчики! Ты у меня кто?<br>
- Личный помощник.<br>
- Ты у меня где?<br>
- На испытательном сроке.<br>
- Вот именно! Чтобы к моему возвращению катер блестел, бассейн сверкал, а поле для гольфа
было таким же идеальным, как моя репутация! Понял?<br>
- Геннадий Петрович, да я в лепешку! Я же из кожи вон выпрыгну!<br>
- На колбаски!<br>
- Спасибо! Ам!<br>
- Иди!<br>
</span>
<br>
<span class='blue'>[Куплет 1] Х65мм - ababba</span><br>
Эй, красавчик в фантастическом Порше!<br>
Я давно мечтала быть с тобой!<br>
Ты прекрасен, и вообще не важно мне<br>
Что худой ты, как ремень в моем плаще (плаще)<br>
Мани-мани бой, в Армани бой! (А)<br>
<br>
<span class='blue'>[Припев х2] Тк3м/ - aa</span><br>
Мани бой, мани-мани бой!<br>
Мани бой, я хочу быть с тобой!<br>
<br>
<span class='blue'>[Куплет 2]<br></span>
Все подруги перестали быть со мной,<br>
Потому что ты теперь мой! <span class='blue'>(Строка Тк3м)<br></span>
Солнце, пляжи и массажи под луной:<br>
Закрутился заводной роман с тобой.<br>
Мани-мани бой, в Армани бой! (А)<br>
<br>
<span class='i'>- Слышь, давай всё!<br></span>
<br>
<span class='blue'>[Припев х2]</span><br>
Мани бой, мани-мани бой!<br>
Мани бой, я хочу быть с тобой!<br>
<br>
<span class='i'>
- О-о!<br>
- Ваш чек, пожалуйста!<br>
- Благодарю!.. Момент! А-а, какой ужас! Забыл, забыл кошелек в другом лимузине!<br>
- Ну, ничего страшного, э..., я оплачу.<br>
- Нет-нет-нет-нет!<br>
- Да [неразб.] что вы, что вы! Я оплачу.<br>
<br>
- Ха-ха-ха! Ой!<br>
- Щедрость украшает мужчину. Ха-ха-ха.<br>
- Ой! Да! Пи-пу-пу!<br>
- К сожалению, ваша карта выдает ошибку!<br>
- Ммм, секунду! Никаких проблем! <br>
- Ага.<br>
- Алло! Это мой личный помощник? Это твой босс, тупица! (В сторону) Идиот! Э..., так, что
с моим счетом в швейцарском банке на Мальдивах? Как? Как "оффшор заблокировали"? Какие санкции?
Э... оффшор заблокировали.<br>
- Какой ужас! Ничего-ничего, я сама все оплачу!<br>
</span>
<br>
<span class='blue'>[Переход] Ам4ж/м? - AAbb</span><br>
И пусть вокруг знают, что мы с тобой пара!<br>
Цветы каждый день, имя на тротуарах.<br>
Хороший такой и совсем не плохой<br>
Мой мани бой! <span class='blue'>(Строка Д2м)</span><br>
<br>
<span class='blue'>[Припев х4]</span><br>
Мани бой, мани-мани бой!<br>
Мани бой, я хочу быть с тобой!<br>
<br>
<span class='blue'>[Аутро]</span><br>
Мани...<br>
Мани бой!<br>
Мани бой!<br>
  <br>
<span class='i'>
- За наше случайное знакомство! Ха-ха-ха!<br>
- Чо стоишь, Павлик? Подливай!<br>
</span>
  <br>
<span class='blue'><a href='https://www.gl5.ru/anna-semenovich-money-boy.html'
  target='_blank'>Источник</a></span><br>

<?php

//Подключаем статистику
include '../stat.php';

mysqli_close($link);

require_once '../footer.php';
?>
