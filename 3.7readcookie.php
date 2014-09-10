<html>
<head>
<title>
READ Cookies
</title>
</head>
<body>
READ Cookies<br>
<!-- acesta este un text -->
<?php
    
    var_dump($_COOKIE);
    echo "<br>";
    
    foreach ( $_COOKIE as $cookie) {
    
	echo "valoarea este {$cookie}<br>";
    
    }

    $var1 = $_COOKIE["test"];
    echo "<br> {$var1} <br>";
    
?>
</body>
</html>
