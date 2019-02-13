<?php
/**
 * Created by PhpStorm.
 * User: margus.noppel
 * Date: 13.02.2019
 * Time: 14:30
 */
// genereerime juhusliku täisarvu vahemikus 0 kuni 100
$arv = rand(0, 100);
// arvutame jääk 2-ga jagamisel
$jaak = $arv % 2;
// kontrollime kui jääk on 0 - paaris arv
if($jaak == 0) {
    echo '<div class="paaris">' .$arv. '</div>';
}   else {
    echo '<div class="paaritu">' .$arv. '</div>';

    }
