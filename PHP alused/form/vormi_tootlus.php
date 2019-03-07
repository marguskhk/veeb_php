<?php

//$nimi = $_GET['nimi'];
//$parool = $_GET ['parool'];

foreach ($_GET as $nimetus => $vaartus) {
    if (strlen($_GET[$nimetus]) == 0) {
        header('location:index.html');
        exit;

    }
}

foreach ($_GET as $nimetus => $vaartus) {
    echo 'Ruumala '.$nimetus.' on '.$sum.'<br>';
}


