<html>
<head>
<title>
Variabile
</title>
</head>
<body>
Numere <br>
<!-- acesta este un text -->
<?php
    $numar = 41;
    $numar2 = 10;

    echo "1. " . (($numar + $numar2) * 2) / 5 . "<br>";
    
    $numar2 += 5; // $numar = $numar + 5;
    echo "2. " . $numar2 . "<br>";
    
    $numar3 *= 5; // $numar = $numar * 5;
    echo "3. " . $numar3 . "<br>";
    
    $numar4 -= 5; // $numar = $numar - 5;
    echo "4. " . $numar4 . "<br>";
    
    $numar2--;
    echo "5. " . $numar2 . "<br>";
?>
</body>
</html>
