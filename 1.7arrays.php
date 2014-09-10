<html>
<head>
<title>
Variabile
</title>
</head>
<body>
Numere Floats<br>
<!-- acesta este un text -->
<?php
    $matrice = array(4,6,8,290,31,29,4);
    $nume = array("eugen","valeriu","octavian");
    $participant = array("nume" => "Eugen Morar", "companie" => "AMTC" );
    
    
    $valoare = $matrice[1];
    $matrice[0] = 23;
    
    echo "1. " . $valoare . "<br>";
    echo "2. " . $matrice[0] . "<br>";
    echo "3. " . $nume[0] . "<br>";
    echo "4. " . $participant[nume] . " " . $participant[companie] . "<br>";
    
    print_r($matrice);
    
    
    echo "5. " . count($matrice) . "<br>";
    
    echo "6. " . max($matrice) . "<br>";
    
    echo "7. " . min($matrice) . "<br>";
    
    sort($matrice); 
    echo "8. " . print_r($matrice) . "<br>";
    rsort($matrice);
    echo "9. " . print_r($matrice) . "<br>";
    
    $string = implode(", ", $matrice);
    echo "10. " . $string . "<br>";
    
    print_r(explode(", ", $string));
    echo "<br>";
    
    echo "11. " . in_array(290, $matrice) . "<br>";

?>
</body>
</html>
