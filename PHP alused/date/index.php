<?php

$aeg = date_default_timezone_set('Europe/Tallinn');

if ($aeg >= "8") {
    echo "Tere hommikust";
    }       elseif ($aeg >= "13" && $aeg < "17") {
    echo "Tere päevast!";
    }       elseif ($aeg >= "17") {
    echo "Tere Õhtust!";
}

?>