--TEST--
toString() : int.
--FILE--
<?php

require_once 'Var_Dump.php';
$vd = new Var_Dump(array('display_mode' => 'Text'));

echo
    $vd->toString(-2147483647) . "\n" .
    $vd->toString(0) . "\n" .
    $vd->toString(2147483647);

?>
--EXPECT--
int -2147483647
int 0
int 2147483647
