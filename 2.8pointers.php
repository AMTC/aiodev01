<html>
<head>
<title>
POINTERS
</title>
</head>
<body>
POINTERS<br>
<!-- acesta este un text -->
<?php
    $var1 = array(14,23,434,1.89);
    
    echo $var1[0] . "<br>";
    echo "1. " . current($var1) . "<br>";
    end($var1);
    next($var1);
    echo "2. " . current($var1) . "<br>";
    
    
    
?>
</body>
</html>
