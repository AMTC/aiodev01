<html>
<head>
<title>
BREAK
</title>
</head>
<body>
BREAK<br>
<!-- acesta este un text -->
<?php
    
    for ( $var1 = 0; $var1 <=5; $var1++ ) {
	
	echo $var1 . "salut" . "<br>";
	if ( $var1 == 3 ) { 
	echo "salut de tot<br>";
	continue; 
	}
	echo "salut in continuare<br>";
    }

?>
</body>
</html>
