<?php

$title='Тест камня судьбы';

$date = date("Ymd", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));

require_once 'header.php';

require_once 'vendor/autoload.php';
/*

function autoload($class)
{
    // project-specific namespace prefix
    $prefix = 'academy\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
};

spl_autoload_register('autoload');

*/


/*
spl_autoload_register(function ($class) {
    require_once 'src/strategy/' . $class . '.php';
});
*/

$case = new academy\strategy\Task ('new', 1);

// вывод текущего статуса
echo $case->getStatus()."<br><br>";

// список статусов и действий массивом
print_r($case->getCodesMap());
echo "<br><br>";

// Новый статус
echo $case->getNextStatus('finish')."<br><br>";

// список действий в данном статусе - массив
print_r($case->getActionInStatus());

require_once 'footer1.php';
 ?>
