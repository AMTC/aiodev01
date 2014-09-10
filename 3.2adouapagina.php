<html>
<head>
<title>
URL Values
</title>
</head>
<body>
Prima Pagina<br>
<!-- acesta este un text -->
<?php
    
    var_dump($_GET);
    echo "<br>Numele este {$_GET["nume"]}, prenumele este {$_GET["prenume"]} iar codul de client este {$_GET["id"]}";
    
?>
</body>
</html>
