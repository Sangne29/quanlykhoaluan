<?php
	 

	 $DB_SERVER='sql205.infinityfree.com';
	 $DB_USERNAME='if0_35532636';
	 $DB_PASSWORD='B7wFOPkv3kYY5KJ';
	 $DB_NAME='if0_35532636_quanlykhoaluan';
	 $dbprefix='';
// Create connection
$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>