<?php
require_once('conn.php');

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['avatar'])) {
	$fname   	= $_POST['fname'];
	$lname 		= $_POST['lname'];
	$username	= $_POST['username'];
	$avatar		= $_POST['avatar'];
	$sql = $conn->prepare("INSERT INTO karyawan (fname, lname, username, avatar) VALUES (?, ?, ?, ?)");
	$sql->bind_param('', $fname, $lname, $username, $avatar);
	$sql->execute();
	if ($sql) { 
		header("location:./api_tampil.php");
	} else {
		echo json_encode(array('RESPONSE' => 'FAILED'));
	}
} else {
	echo "GAGAL";
}
