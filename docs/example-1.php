<?php
header('Content-Type: application/xhtml+xml; charset=utf-8');
header('Vary: Accept'); 
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>An XHTML 1.0 Strict standard template</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
</head>
<body>

<?php

include_once 'Var_Dump.php';

echo '<h1>example1.php : displaying a variable</h1>';

/*
 * example1.php : displaying a variable
 *
 * To display a variable :
 *
 *   Var_Dump::display($variable);
 *
 * To return a variable :
 *
 *   $str = Var_Dump::display($variable, TRUE);
 *
 */

/*
 * Initialise the HTML4 Table rendering
 */

Var_Dump::displayInit(array('display_mode' => 'HTML4_Table'));

/*
 * Displays an array
 */

echo '<h2>Array</h2>';

$fileHandler = tmpfile();
$linkedArray = array('John', 'Jack', 'Bill');
$array = array(
    'key-1' => 'The quick brown fox jumped over the lazy dog',
    'key-2' => 234,
    'key-3' => array(
        'key-3-1' => 31.789,
        'key-3-2' => & $linkedArray,
        'file'    => $fileHandler
    ),
    'key-4' => NULL
);
Var_Dump::display($array);

/*
 * Displays an object (with recursion)
 */

echo '<h2>Object (Recursive)</h2>';

class c_parent {
    function c_parent() {
        $this->myChild = new child($this);
        $this->myName = 'c_parent';
    }
}
class child {
    function child(& $c_parent) {
        $this->myParent = & $c_parent;
    }
}
$recursiveObject = new c_parent();
Var_Dump::display($recursiveObject);

/*
 * Displays a classic object
 */

echo '<h2>Object (Classic)</h2>';

class test {
    var $foo = 0;
    var $bar = '';
    function get_foo() {
        return $this->foo;
    }
    function get_bar() {
        return $this->bar;
    }
}
$object = new test();
$object->foo = 753;
$object->bar = '357';
Var_Dump::display($object);

fclose($fileHandler);

?>

</body>
</html>