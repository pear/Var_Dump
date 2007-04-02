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
    <style>
        /* style for XHTML_Text */
        pre.var_dump            { line-height:1.8em; }
        pre.var_dump span.type  { color:#006600; background:transparent; }
        pre.var_dump span.value { padding:2px; color:#339900; background:#F0F0F0; border: 1px dashed #CCCCCC; }
    </style>
</head>
<body>

<?php

include_once 'Var_Dump.php';

echo '<h1>example5.php : Text displaying modes</h1>';

/*
 * example5.php : Text displaying modes
 *
 */

$fileHandler = tmpfile();
$linkedArray = array(0 => 'John', 11 => 'Jack', 127 => 'Bill');
$array = array(
    'key-1' => 'The quick brown fox jumped over the lazy dog',
    'key-2' => array(
        'long-key' => & $linkedArray,
        'file' => $fileHandler
    ),
    'long-key-3' => 234,
);

echo '<h2>Compact mode (offset 4)</h2>';
Var_Dump::displayInit(
    array(
        'display_mode' => 'HTML4_Text'
    ),
    array(
        'mode' => 'compact',
        'offset' => 4
    )
);
Var_Dump::display($array);

echo '<h2>Normal mode (offset 4)</h2>';
Var_Dump::displayInit(
    array(
        'display_mode' => 'HTML4_Text'
    ),
    array(
        'mode' => 'normal',
        'offset' => 4
    )
);
Var_Dump::display($array);

echo '<h2>Wide mode (offset 4)</h2>';
Var_Dump::displayInit(
    array(
        'display_mode' => 'HTML4_Text'
    ),
    array(
        'mode' => 'wide',
        'offset' => 4
    )
);
Var_Dump::display($array);

fclose($fileHandler);

?>

</body>
</html>