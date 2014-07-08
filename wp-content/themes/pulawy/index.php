<?php
$mySQLConn = @mysql_connect("127.0.0.1", "uzytkownik", "haslo") or die("Nie mozna polaczyc sie z serwerem");
$db = mysql_select_db("wordpress", $mySQLConn) or die("Nie mozna polaczyc sie z baza danych")


?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'  
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>  
<html xmlns='http://www.w3.org/1999/xhtml'>   

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		</head>


	<body>
		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
		src="https://maps.google.pl/maps?ie=UTF8&amp;ll=51.42552,21.974668&amp;spn=0.150921,0.41851&amp;t=m&amp;z=12&amp;output=embed"></iframe><br />
		<small><a href="https://maps.google.pl/maps?ie=UTF8&amp;ll=51.42552,21.974668&amp;spn=0.150921,0.41851&amp;t=m&amp;z=12&amp;source=embed" style="color:#0000FF;text-align:left">Wyświetl większą mapę</a></small>

	</body>

</html>