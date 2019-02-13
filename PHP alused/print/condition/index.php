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

if($sugu == 'mees') {
        echo '<p style="color: blue;">';
}   else {
    echo '<p style="color: red;">';
}

echo 'Minu eesnimi on' .$eesnimi.'<br>';
echo 'Minu perenimi on' .$perenimi.'<br>';
echo 'Olen' .$vanus. ' aastat vana<br>';
echo 'Kaalun' .$kaal.'kg<br>';
