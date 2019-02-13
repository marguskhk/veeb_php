<?php
/**
 * Created by PhpStorm.
 * User: margus.noppel
 * Date: 13.02.2019
 * Time: 14:30
 */
$eesnimi = 'Margus' ;
$perenimi = 'Noppel';
$vanus = 26;
$kaal = 78;
$sugu = 'mees';

switch($sugu) {
    case 'mees':
        echo '<p style="color: blue;">';
        break;
    case 'naine':
        echo '<p style="color: red;">';
        break;
    default;
        echo 'p style"= color: green">';
}
echo 'Minu eesnimi on ' .$eesnimi.'<br>';
echo 'Minu perenimi on ' .$perenimi.'<br>';
echo 'Olen ' .$vanus. ' aastat vana<br>';
echo 'Kaalun ' .$kaal.'kg<br>';
echo '</p>';
