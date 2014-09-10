<html>
<head>
<title>
Boolean
</title>
</head>
<body>
TIP de data Boolean<br>
<!-- acesta este un text -->
<?php

    $var1 = true;
    $var2 = false;
    $var3 = NULL;
    $var4 = 3;
    $var5 = "salut";
    
    echo "1. {$var1}<br>";
    echo "2. {$var2}<br>";
    echo "3. variabila este setata " . isset($var1) . "<br>";
    echo "4. variabila este setata " . isset($var2) . "<br>";
    echo "5. variabila este setata " . isset($var3) . "<br>";    
    unset($var4);
    echo "6. variabila este setata " . isset($var4) . "<br>";    
    echo "7. variabila este setata " . isset($var5) . "<br>";    
    echo "8. variabile este goala " . empty($var5)  . "<br>";   

?>
</body>
</html>
