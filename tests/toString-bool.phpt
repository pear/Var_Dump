--TEST--
toString() : bool.
--FILE--
<?php

require_once 'Var_Dump.php';
$vd = new Var_Dump(array('display_mode' => 'Text'));

echo
    $vd->toString(FALSE) . "\n" .
    $vd->toString(TRUE);

?>
--EXPECT--
bool false
bool true
