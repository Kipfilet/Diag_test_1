<?php

    //declares the whole array
    $keys = [97123456 => "klaas", 97234563 => "Achmed", 97442233 => "Janien", 97766601 => "Rene"];
    
    //shows the whole array
    echo "Key:         Voornaam: \n";
    foreach($keys as $nummer => $naam)
    {
        echo $nummer . "     " . $naam . "\n";
    }
?>