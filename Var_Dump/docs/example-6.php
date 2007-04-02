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

echo '<h1>example6.php : Globals</h1>';

/*
 * example6.php : Globals
 *
 */

Var_Dump::displayInit(
    array(
        'display_mode' => 'HTML4_Text'
    ),
    array(
        'mode' => 'normal',
        'offset' => 4
    )
);

Var_Dump::display($GLOBALS);

?>

</body>
</html>