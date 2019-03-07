<?php

function usortTest($a, $b) {
    var_dump($a);
    var_dump($b);
    return -1;
}

$test = array('val1');
usort($test, "usortTest");

$test2 = array('val2', 'val3');
usort($test2, "usortTest");

?>