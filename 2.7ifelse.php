<html>
<head>
<title>
IF Statement
</title>
</head>
<body>
Structura Logice<br>
<!-- acesta este un text -->
<?php

    $var1 = 290;
    $var2 = "290";
    
//    echo (int)$var2 . "<br>";
    
    if ( $var1 > $var2 ) {
	echo "1. este mai mare!<br>";
    } elseif ( $var1 < $var2 ) {
    	echo "2. este mai mic!<br>";
    }  elseif ( $var1 == $var2 ) {
    	echo "3. este egal!<br>";
    } else {
	echo "4. Nu stiu despre ce e vorba!<br>";
    }
    
    if ( 1 == 1 ) {
	echo "adevarat tot timpul"
    }
    
    if ( 1 == 0 ) {
	echo "neadevarat tot timpul"
    }
    
    
?>
</body>
</html>
