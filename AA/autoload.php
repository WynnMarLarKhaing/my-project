﻿<?PHP

// function __autoload($class) {
//     include 'classes/' . $class . '.class.php';
// }

function my_autoloader($class) {
    include  $class . '.php';
}

spl_autoload_register('my_autoloader');

my_autoloader("aa");
// // Or, using an anonymous function as of PHP 5.3.0
// spl_autoload_register(function ($class) {
    // include $class . 'ssss.php';
// });

?>