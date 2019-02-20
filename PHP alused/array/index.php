<?php
    $porsad = array(
        array(
        'Peppa',
        'naine',
        4,
        1.04
    ),
        array(
            'George',
            'mees',
            2,
            0.95

        )
    );


    echo $porsad[0][0].'<br>';
    echo $porsad[0][1].'<br>';
    echo $porsad[0][2].'<br>';
    echo $porsad[0][3].'<br>';

echo '<hr>';

    for($i=0; $i < count($porsad);$i++) {
        for ($j = 0; $j < count($porsad); $j++) {
            echo $porsad[$i][$i] . '<br>';
        }
    }
echo '<hr>';

    foreach ($porsad as $porsas) {
            foreach ($porsas as $element) {
                echo $element.'<br>';
    }
    echo '<hr>';
    }


