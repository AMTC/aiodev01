<html>
<head>
<title>
Variabile
</title>
</head>
<body>
Variabile <br>
<!-- acesta este un text -->
<?php
    $adresa = "STRADA SOVEJA CONSTANTA ";
    $numar = 41;
    $numar2 = 10;

// prima linie de text
# inca o linie de text
/* o linie de text in care explic niste lucruri
a doua limnie de text
*/

    $strada = 'strada soveja';
    $oras = 'constanta';
    
    echo "1. " . $strada . "41" . "<br>";
    echo "2. " . "{$strada} 41" . "<br>";
    echo "3. " . '{$strada} 41' . "<br>";
    
    echo "4. " . "{$strada} {$oras}<br>";
    
    $adresa = "{$strada} {$oras}";
    echo "5. " . $adresa . "<br>";
    echo "6. " . strtoupper($adresa) . "<br>";
    echo "7. " . ucwords($adresa) . "<br>";
    echo "8. " . ucfirst($adresa) . "<br>";
    echo "9. " . strlen($adresa) . "<br>";
    echo "10. " . strstr($adresa, "sov") . "<br>";
    echo "11. " . str_replace("strada", "str", $adresa) . "<br>";
    echo "12. trim()" . "<br>";
    echo "13. str_repeat()" . "<br>";
    echo "14. substr()" . "<br>";
    echo "15. strpos()" . "<br>";
    echo "16. strchr()" . "<br>";

?>
</body>
</html>
