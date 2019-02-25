<?php
$peppa = array(
    'nimi' => 'Peppa',
    'sugu' => 'naine',
    'vanus' => 4,
    'pikkus' => 1.04
);
$george = array(
    'nimi' => 'George',
    'sugu' => 'mees',
    'vanus' => 2,
    'pikkus' => 0.95
);
foreach ($peppa as $nimi=>$vaartus){
    echo $nimi.' - '.$vaartus.'<br>';
}
echo '<hr>';
foreach ($george as $nimi=>$vaartus){
    echo $nimi.' - '.$vaartus.'<br>';
}
echo '<hr>';
echo $peppa['nimi'].' on '.$peppa['vanus'].' aastat vana<br>';
echo $george['nimi'].' on '.$george['vanus'].' aastat vana<br>';
echo '<hr>';
$porsad = array();
$porsad['peppa'] = $peppa;
$porsad['george'] = $george;
$porsad['peppa']['lemmik varv'] = 'punane';
$porsad['george']['lemmik varv'] = 'sinine';
foreach ($porsad as $porsaseNimi=>$porsaseAndmed){
    if($porsaseAndmed['sugu'] == 'naine'){
        echo '<p style="color: red">';
    } else {
        echo '<p style="color: blue">';
    }
    echo '<b>'.$porsaseNimi.'</b></p>';
    echo '<ul>';
    foreach ($porsaseAndmed as $nimetus=>$vaartus){
        echo '<li>'.$nimetus.' - '.$vaartus.'</li>';
    }
    echo '</ul>';
}
    }


