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

    $Adresa = "strada soveja constanta<br>";
    echo $adresa . $numar . "<br>";
    echo $Adresa . "<br>";
    
    $rezultat = $numar + $numar2;
    $rezultat1 = $numar + 10;
    
    echo $numar + $numar2 . "<br>";
    echo $rezultat1 . "<br>";

    $adresa = "STRADA STEFAN<br> ";
    echo $adresa;
?>
</body>
</html>
