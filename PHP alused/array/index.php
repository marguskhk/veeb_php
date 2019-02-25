<?php

$raamatud =array(
                array(
                    'nimi' => 'Eesti side ja interneti 100 aastat',
                    'autor' => 'Jaak Ulman',
                    'kategooria' => 'Ajalugu',
                    'hind' => 15,00
                    ),
                array(
                    'nimi' => 'Elanikust kodanikuks',
                    'autor' => 'Ülo Vooglaid',
                    'kategooria' => 'Humanitaarteadused',
                    'hind' => 26,95
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