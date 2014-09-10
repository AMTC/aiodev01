<html>
<head>
<title>
Operatori Logici
</title>
</head>
<body>
Operatori && || <br>
<!-- acesta este un text -->
<?php

    $var1 = 12;
    $var2 = 25;
    
    $var3 = 170;
    $var4 = 19;
    
    if ( ($var1 > $var2) && ( $var3 < $var4) ) {
	echo "1. var1 este mai mare decat var 2 SI ";
	echo "var3 este mai mic decat var4!<br>";
    } 

    if ( ($var1 > $var2) || ( $var3 < $var4) ) {
	echo "2. var1 este mai mic decat var2 SAU ";
	echo "var3 este mai mic decat var4!<br>";
	
    } else {
	echo "nicio conditie nu este adevarata";
    }
    

?>
</body>
</html>
