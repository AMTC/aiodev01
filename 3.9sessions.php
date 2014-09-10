<?php
    
    session_start();

?>
<html>
<head>
<title>
SET Session
</title>
</head>
<body>
SET Session<br>
<!-- acesta este un text -->
<?php

    $_SESSION["nume"] = "pascaru";
    $_SESSION["prenume"] = "valeriu";
    $_SESSION["varsta"] = "40";
    
?>

</body>
</html>
