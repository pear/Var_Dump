--TEST--
Bug #XXX1 : Strings with line containing a single "}"
--FILE--
<?php

require_once 'Var_Dump.php';
$vd = new Var_Dump(array('display_mode' => 'Text'));

$string = 'before
{
inside
}';

echo
    $vd->toString($string) . "\n" .
    $vd->toString($string . "\n" . 'after');

?>
--EXPECTREGEX--
string\(17\) before
           {
           inside
           }
string\(23\) before
           {
           inside
           }
           after
