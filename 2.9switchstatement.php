<html>
<head>
<title>
Switch
</title>
</head>
<body>
Switch<br>
<!-- acesta este un text -->
<?php

    $var1 = 350;
    
// 1 - plata anticipata 500, 2 - plata anticipata 1000, 3 - tableta, 4 - 2 nop[ti in plus 

    switch ($var1) {
	case 1:
	    echo "var este 0";
	    break;
	case 2:
	    echo "var este 2";
	    break;
	case 3:
	    echo "var este 3";
	    break;
	case 4:
	    echo "var este 4";
	    break;
	default:
	    echo "nu am valoare";
	    break;
    }    

?>
</body>
</html>
