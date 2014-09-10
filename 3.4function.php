<html>
<head>
<title>
Function
</title>
</head>
<body>
User Defined Function<br>
<!-- acesta este un text -->
<?php

    $var1 = 290;
    $var2 = "290";
    
//    echo (int)$var2 . "<br>";

    
	function salut() {
	    echo "salut<br>";
	}

    salut();

	function salut1( $nume ) {
	    echo "salut {$nume}<br>";
	}

    salut1("Eugen");
    salut1("Valeriu");
    salut1("Octavian");

	function salut2( $nume, $prenume ) {
	    $var1 = "{$nume} {$prenume}";
	    echo "<br>functie " . $var1 . "<br>";
	}
    
    salut2("Morar", "Eugen");
    echo "inafara" . $var1 . "<br>";
    
	function aduna($var1, $var2) {
	    $var3 = $var1 + $var2;
	    return $var3;
        }

    echo aduna(23,45) . "<br>";
    
	function aduna1($var2) {
	    global $var1;
	    $var3 = $var1 + $var2;
	    return $var3;
	}
    
    $var4 = aduna1(32);
    echo "{$var4} <br>";
    
	function salut3($nume="Prietene") {
	    echo "<br>Salut {$nume}<br>";
	}
	
	salut3();
	salut3("Valeriu");
//	salut1();

	

?>
</body>
</html>
