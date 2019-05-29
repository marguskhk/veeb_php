<?php
// 1. Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
echo date('d.m.Y G:i').'<br>';
echo '<hr>';

// 2. Kuva tänane eestikeelne nädalapäev, N: kolmapäev
setlocale(LC_TIME, 'Estonia', 'et_EE'); 
echo strftime('%A');
echo  '<hr>';

// 3. Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 
echo strftime('%d.%B %Y %A');
echo  '<hr>';

// 4.Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!
$praegu = time();
$jaanipaev = mktime(0,0,0,6, 24, 2019);
$jaanudsekundid = $jaanipaev - $praegu;
$jaanudpaevad = round($jaanudsekundid / (60 * 60 * 24), 0);
echo strftime('%Y'.' aasta jaanipäevani on jäänud '.$jaanudpaevad.' päeva!').'<br>';
echo '<hr>';

// 5.Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.;
$minuSynniKuupaev = mktime(0,0,0, 5, 23, 1992);
$sinuSynniKuupaev = mktime(0,0,0, 11, 06, 1980);
$vaheSekundites = $sinuSynniKuupaev - $minuSynniKuupaev;

$vaheAastates = round($vaheSekundites / (60 * 60 * 24 * 365), 0);
echo 'Minu sünnikuupäev '.utf8_encode(strftime('%d.%m.%Y', $minuSynniKuupaev)).'<br>';
echo 'Tema sünnikuupäev '.utf8_encode(strftime('%d.%m.%Y', $sinuSynniKuupaev)).'<br>';
if($vaheSekundites > 0){
    echo 'Mina olen temast vanem aastates '.abs($vaheAastates). '<br>';
} else {
    echo 'Tema on minust vanem  aastates '.abs($vaheAastates).'<br>';
}
echo '<hr>';

// 6.Maailmalõpp saabub 29.02.2016! Las PHP otsustab, kas see on võimalik
$maailmaLopp = mktime(23,59,59, 02, 29, 2016);
$paevParastMaailmaLoppu = $maailmaLopp + 1;
if (($paevParastMaailmaLoppu = strtotime(strftime('%d.%m.%Y %H:%M', $paevParastMaailmaLoppu))) === false) {
    echo "Maailma lõpp on saabunud<br>";
} else {
    echo utf8_encode(strftime('%d.%m.%Y %H:%M', $paevParastMaailmaLoppu)) . '<br>';
    echo 'Maailma lõppu ei tulnud<br>';
}
echo '<hr>';

// 7.Leia, kas sul on järgmine aasta juubel?
$synna = mktime(0,0,0,5,23,1992);
$praeguneaasta = date('Y');
$jargmineaasta = mktime(0,0,0,5,23, $praeguneaasta +1);
$vanusAastates = round(($jargmineaasta  - $synna) / (60 * 60 * 24 * 365));
if($vanusAastates % 5 == 0){
    echo  'Sinul on järgmine aasta juubel! ';
} else {
    echo  'Sinul järgmine aasta juubeli ei ole! ';
}
echo '<hr>';

//8.Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”



$aeg = date('H:i');


if ($aeg >= "8") {
    echo "Tere hommikust";
    }       elseif ($aeg >= "13" && $aeg < "17") {
    echo "Tere päevast!";
    }       elseif ($aeg >= "17") {
    echo "Tere Õhtust!";
}

?>