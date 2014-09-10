<html>
<head>
<title>
FOREACH
</title>
</head>
<body>
FOREACH loop<br>
<!-- acesta este un text -->
<?php
    $var1 = array(1,3,67,89);
    $var2 = array("Nume"=>"Eugen", "Prenume"=>"Eugen", "Varsta"=>40);
    
    
    foreach ( $var1 as $val ) {
	echo $val . "<br>";
    }
    
    foreach ( $var2 as $key=>$value ) {
	echo $key . ":" . $value . "<br>";
    }

?>
</body>
</html>
