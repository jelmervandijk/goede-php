<?php
	date_default_timezone_set('Europe/Amsterdam');
	$time = date("H:i");

	if ($time < "12:00") {
        echo "<h1 id= style>Goede morgen!</h1>";
        echo "<body style='background: url(backgrounds/morning.png);'>";
    }
    elseif ($time < "18:00") {
        echo "<h1 id= style>Goede middag!</h1>";
        echo "<body style='background: url(backgrounds/afternoon.png);'>";   	
    }
    elseif ($time < "24:00") {
        echo "<h1 id= style>goede avond!</h1>";
        echo "<body style='background: url(backgrounds/evening.png);'>";   	
    }
    elseif ($time < "06:00") {
        echo "<h1 id= style>goede nacht!</h1>";
        echo "<body style='background: url(backgrounds/night.png);'>"; 
    }

    echo '<br><span id= "style2">'.$time.'</span>';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Goede-PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" 
</head>
<body>

</body>
</html>