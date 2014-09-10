<?php
	session_start();
?>
<html>
<head>
<title>
READ Session
</title>
</head>
<body>
READ Session<br>
<!-- acesta este un text -->
<?php
    
    var_dump($_SESSION);
    echo "<br> Utilizatorul logat are numele {$_SESSION["nume"]}, prenumele {$_SESSION["prenume"]} si varsta {$_SESSION["varsta"]}! <br>";
    
?>

</body>
</html>
