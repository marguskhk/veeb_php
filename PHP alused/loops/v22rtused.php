
/**
 * Created by PhpStorm.
 * User: margus.noppel
 * Date: 19.02.2019
 * Time: 8:58
 */
<?php
header('Refresh: 2');
?>
<style>
    div {
        margin: auto;
        width: 100px;
        height: 100px;
        font-size: 70px;
        padding-top: 15px;
        text-align: center;
    }
    .paaris{
        background: red;
    }
    .paaritu{
        background: green;
    }
    .algarv{
        background: deepskyblue;
    }
    .tavaline{
        background: lightgrey;
    }
</style>
<?php
    // genereerime juhuslik täisarv vahemikus 0 kuni 100
    $arv = rand(0, 100);
    // defineerime jagaja algväärtus
    $jagaja = 2;
    // nii kaua kui jagamise jääk ei ole null
    while($arv % $jagaja != 0){
        // võtame järgmine jagaja väärtus
        $jagaja++; // $jagaja = $jagaja + 1;
    }
    // kui $arv ja $jagaja on võrdsed - see on algarv
    // muidu mitte
    if ($arv == $jagaja) {
        echo '<div class="algarv">' . $arv . '</div>';
    } else {
        echo '<div class="tavaline">' . $arv . '</div>';
    }
