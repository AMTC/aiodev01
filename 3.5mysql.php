<?php
    
    //1. Create Connection
    $conn = mysql_connect("localhost", "root", "");
        
    //2. Select Database
    $db = mysql_select_db("persoane", $conn);
?>
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
    
    //3. Perform Query
    $date = mysql_query("SELECT * FROM participanti", $conn);
    
    //4. use Data
    var_dump($date);
    
    while ( $rand = mysql_fetch_array($date)) {
    
	echo "Participantul este {$rand[0]} {$rand[1]}! <br> "
    
    }
    
    
?>
</body>
</html>
<?php
    //5. Close Connection
    mysql_close($conn);
?>
