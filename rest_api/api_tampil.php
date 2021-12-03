<?php
require_once('conn.php');
$myArray = array();
if ($result = mysqli_query($conn, "SELECT * FROM karyawan ORDER BY id ASC")) {
    	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        	$myArray[] = $row;
    	}
	mysqli_close($conn);
    	echo json_encode($myArray);
}