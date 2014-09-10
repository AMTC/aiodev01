<html>
<head>
<title>
PROCESARE FORMULAR
</title>
</head>
<body>
PROCESARE FORMULAR<br>
<!-- acesta este un text -->
<?php
    
//    var_dump($_POST);
    
    echo "<br> Utilizatorul logat este <span style='font-size: 150%; color: #00ff00;'>{$_POST["utilizator"]}</span> si are parola <strong>{$_POST["parola"]}</strong>! <br>";


?>
</form>
</body>
</html>
