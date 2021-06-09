<?php

echo "<!DOCTYPE html>\n<html><head><meta charset='utf-8'>";

require_once 'login.php'; // подключаем скрипт
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка MySQL" . mysqli_error($link));

echo "<title>$title</title>" .
"<meta name='Description' content=$description>" .
"<meta name='Keywords' content='$keywords'>" .
"<link rel='stylesheet' href='http://www.taktovik.ru/style.css' type='text/css'>";

echo "<br><span class='bold'>RUSSIAN SONGS GENERATOR ● ГЕНЕРАТОР ШЛЯГЕРОВ</span><br><br>" .
"<a href='http://www.taktovik.ru/index.php'>Home</a>" .
"<a href='http://www.taktovik.ru/songs.php'><span class='ref'>Songs</span></a>" .
"<a href='http://www.taktovik.ru/source.php'><span class='ref'>Verses</span></a>" .
"<a href='http://www.taktovik.ru/info.php'><span class='ref'>Articles</span></a>";

echo "<span class='refren'><span class='bold'>Generate:</span> ";

echo "<a href='http://www.taktovik.ru/onegin.php'><button class='button'>Eugene Onegin</button></a>" .
"<a href='http://www.taktovik.ru/pop.php'><button class='button'>pop<class></button></a>" .
"<a href='http://www.taktovik.ru/rap.php'><button class='button'>rap</button></a>" .
"<a href='http://www.taktovik.ru/punk.php'><button class='button'>punk</button></a>" .
"<a href='http://www.taktovik.ru/luck.php'><button class='button'>random</button></a></span>" .
"<br><br><hr>";

?>


</head><body>
