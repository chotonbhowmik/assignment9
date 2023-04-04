
<?php
 $db = mysqli_connect("localhost","root","","assignment9");
 if ($db) {
 	// echo "database connected ";
 }
 else{
 	die("database not connected ".mysqli_error($db));
 }



?>