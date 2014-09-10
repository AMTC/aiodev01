<html>
<head>
<title>
Type Casting
</title>
</head>
<body>
Typecasting<br>
<!-- acesta este un text -->
<?php

    $var1 = "100"; 
    $var2 = 25;
    $var3 = NULL;
    $var4 = array(3,4,5);
//    settype($var1, "int");
//    $var1 = (int) $var1;
//    $var6 = (string) $var2;
    
    echo $var1 + $var6 . "<br>";
    echo $var2 + $var4[0] . "<br>";
    
    echo "1. " . gettype($var1) . "<br>";
    echo "2. " . gettype($var2) . "<br>";    
    echo "3. " . gettype($var3) . "<br>";    
    echo "4. " . gettype($var4) . "<br>";
    echo "5. " . gettype($var6) . "<br>";
    
    echo "6. " . is_numeric($var1) . "<br>";
    echo "7. " . is_null($var3) . "<br>";
    echo "8. " . is_bool($var3) . "<br>";
    echo "9. " . is_float($var3) . "<br>";
    echo "10. " . is_array($var4) . "<br>";
    echo "11. " . is_string($var1) . "<br>";    

?>
</body>
</html>
