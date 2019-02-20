<?php
/**
 * Created by PhpStorm.
 * User: margus.noppel
 * Date: 20.02.2019
 * Time: 12:13
 */
function paarsuseKontroll($arv) {
    if ($arv % 2 == 0){
    echo $arv.' on paaris <br> ';
    } else {
        echo $arv.' on paaritu <br>';
    }
}
//kutsume funktsioon tööle
for($arv=0; $arv <=10; $arv++) {
        paarsuseKontroll($arv);
}