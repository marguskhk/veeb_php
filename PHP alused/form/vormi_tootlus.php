<?php
extract($_GET);
//$nimi = $_GET['nimi'];
//$parool = $_GET ['parool'];
if(strlen($nimi) == 0 or strlen($parool)== 0 ) {
        header('location:index.html');
} else {
echo 'Tere '. $nimi .'!<br>';
echo 'Sinu parooliks on'. $parool;
}