<?php

$raamatud =array(
    array(
        'nimi' => 'Jänku Juss mängib peitust',
        'autor' => 'Julia Sigarova',
        'keel' => 'eesti',
        'lk'   => 12,
        'hind' => 10.15
    ),
    array(
        'nimi' => 'Elanikust kodanikuks',
        'autor' => 'Ülo Vooglaid',
        'keel' => 'eesti',
        'lk'   => '192',
        'hind' => 15.75
    )
);

function tabeliPais($andmed)
{
    echo '<thead>';
    echo '<tr>';
    foreach ($andmed as $element) {
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
}

function tabeliRida($andmed) {
    echo '<tr>';
    foreach ($andmed as $elemendiNimetus => $elemendiVaartus){
        echo '<td>'.$elemendiVaartus.'</td>';
    }
    echo '</tr>';
}

function tabel($andmed) {
    echo'<table border="1">';
    tabeliPais(array_keys($andmed[0]));
    echo '<tbody>';
    foreach($andmed as $element) {
        tabeliRida($element);
    }
    echo '</tbody>';
    echo '</table>';
}

function vordleHinda($raamat1, $raamat2) {
    if($raamat1['hind']== $raamat2['hind']) {
        return 0;
    } else if($raamat1['hind'] < $raamat2['hind'] ){
        return -1;
    }  else {
        return 1;
    }
}


function filtreeriHinnaJargi($andmed, $algHind, $loppHind) {
    $filtreerimisTulemus = array();
    foreach ($andmed as $element) {
        if($element['hind'] >= $algHind and $element['hind'] <= $loppHind) {
            $filtreerimisTulemus[] = $element;
        }
    }
    return $filtreerimisTulemus;
}
    usort($raamatud, 'vordleHinda');

tabel(filtreeriHinnaJargi($raamatud,  0, 100 ));